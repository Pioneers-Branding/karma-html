$ErrorActionPreference = "Stop"

$API_URL = "https://api.opusmax.pro"

Write-Host ""
Write-Host "+------------------------------------------+"
Write-Host "|         * OpusMax Setup                  |"
Write-Host "+------------------------------------------+"
Write-Host ""

$API_KEY = Read-Host "  Enter your OpusMax API key"

if ([string]::IsNullOrWhiteSpace($API_KEY)) {
    Write-Host "  [FAIL] API key cannot be empty."
    exit 1
}
Write-Host ""

# [1/3] Check Node.js
Write-Host "  [1/3] Checking Node.js... " -NoNewline
if (Get-Command node -ErrorAction SilentlyContinue) {
    $nodeVer = node -v
    Write-Host "[OK] $nodeVer"
} else {
    Write-Host "[FAIL] Not found. Install from https://nodejs.org"
    exit 1
}

# [2/3] Configure Claude Code env (~/.claude/settings.json)
Write-Host "  [2/3] Configuring Claude Code... " -NoNewline
$CLAUDE_DIR = "$env:USERPROFILE\.claude"
if (-not (Test-Path $CLAUDE_DIR)) {
    New-Item -ItemType Directory -Path $CLAUDE_DIR | Out-Null
}

$settingsPath = "$CLAUDE_DIR\settings.json"
$settings = @{}

if (Test-Path $settingsPath) {
    try {
        $json = Get-Content $settingsPath -Raw
        if (-not [string]::IsNullOrWhiteSpace($json)) {
            $parsed = ConvertFrom-Json $json
            $settings = @{}
            foreach ($prop in $parsed.psobject.properties) {
                $settings[$prop.Name] = $prop.Value
            }
        }
    } catch {
        # Ignore parse errors and start fresh
    }
}

if (-not $settings.Contains("env")) {
    $settings["env"] = @{}
} else {
    $envObj = $settings["env"]
    $envHash = @{}
    foreach ($prop in $envObj.psobject.properties) {
        $envHash[$prop.Name] = $prop.Value
    }
    $settings["env"] = $envHash
}

$settings["env"]["ANTHROPIC_AUTH_TOKEN"] = $API_KEY
$settings["env"]["ANTHROPIC_BASE_URL"] = $API_URL
$settings["env"]["ANTHROPIC_MODEL"] = "Opus 4.7"
$settings["env"]["ANTHROPIC_SMALL_FAST_MODEL"] = "Haiku 4.5"
$settings["env"]["ANTHROPIC_DEFAULT_SONNET_MODEL"] = "Sonnet 4.6"
$settings["env"]["ANTHROPIC_DEFAULT_OPUS_MODEL"] = "Opus 4.7"
$settings["env"]["ANTHROPIC_DEFAULT_HAIKU_MODEL"] = "Haiku 4.5"
$settings["env"]["CLAUDE_CODE_DISABLE_NONESSENTIAL_TRAFFIC"] = "1"
$settings["hasCompletedOnboarding"] = $true

$settings | ConvertTo-Json -Depth 10 | Set-Content $settingsPath -Encoding UTF8
Write-Host "[OK]"

# [3/3] Verify
Write-Host ""
Write-Host "  Verifying connection... " -NoNewline
try {
    $response = Invoke-WebRequest -Uri "$API_URL/v1/models" -Headers @{"x-api-key" = $API_KEY} -UseBasicParsing -ErrorAction Stop
    if ($response.StatusCode -eq 200) {
        Write-Host "[OK] Connected"
    } else {
        Write-Host "[WARN] HTTP $($response.StatusCode) (config saved - check key later)"
    }
} catch {
    $statusCode = 000
    if ($_.Exception.Response) {
        $statusCode = $_.Exception.Response.StatusCode.value__
    }
    Write-Host "[WARN] HTTP $statusCode (config saved - check key later)"
}

Write-Host ""
Write-Host "+------------------------------------------+"
Write-Host "|  [OK] Setup complete!                    |"
Write-Host "|  Restart Claude Code to apply.           |"
Write-Host "+------------------------------------------+"
Write-Host ""
