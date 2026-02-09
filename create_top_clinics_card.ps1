$ErrorActionPreference = "Stop"
[Net.ServicePointManager]::SecurityProtocol = [Net.SecurityProtocolType]::Tls12

$imgFile = "c:\Users\GCV\Desktop\Karma TMS\karma-html\images\blog\palm-springs-stock.jpg"
$svgFile = "c:\Users\GCV\Desktop\Karma TMS\karma-html\images\blog\top-tms-clinics-card.svg"

# 1. Download Palm Springs Image (Alternative Source)
# Using a more robust known Unsplash ID
$url = "https://images.unsplash.com/photo-1561577553-6c8f69904975?ixlib=rb-4.0.3&w=600&q=80"
try {
    Invoke-WebRequest -Uri $url -OutFile $imgFile -UserAgent "Mozilla/5.0" -ErrorAction Stop
} catch {
    # Fallback to generic if 404
    $url = "https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?ixlib=rb-4.0.3&w=600&q=80"
    Invoke-WebRequest -Uri $url -OutFile $imgFile -UserAgent "Mozilla/5.0"
}

# 2. Read Base64
$bytes = [IO.File]::ReadAllBytes($imgFile)
$b64 = [Convert]::ToBase64String($bytes)

# 3. Create SVG Content (Modified from template)
$svgContent = @"
<svg width="800" height="450" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <linearGradient id="purpleGrad" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" style="stop-color:#6B2F8A;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#4A1F63;stop-opacity:1" />
    </linearGradient>
    <clipPath id="curveClip">
        <path d="M 450 0 L 800 0 L 800 450 L 520 450 C 520 450 400 225 550 0 Z" />
    </clipPath>
    <pattern id="subtle-dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
      <circle cx="2" cy="2" r="1" fill="white" opacity="0.05"/>
    </pattern>
  </defs>
  
  <rect width="800" height="450" fill="url(#purpleGrad)" />
  <rect width="800" height="450" fill="url(#subtle-dots)" />
  
  <path d="M 0 450 L 150 450 L 250 350 L 0 350 Z" fill="white" opacity="0.03" />
  <circle cx="100" cy="400" r="80" fill="white" opacity="0.02" />

  <!-- Embedded Image -->
  <image href="data:image/jpeg;base64,$b64" x="350" y="0" width="600" height="450" preserveAspectRatio="xMidYMid slice" clip-path="url(#curveClip)" />

  <path d="M 550 0 C 400 225 520 450 520 450" stroke="white" stroke-width="4" fill="none" />

  <rect x="40" y="50" width="160" height="44" rx="12" fill="white" />
  <text x="120" y="78" font-family="'Segoe UI', 'Roboto', sans-serif" font-weight="800" font-size="16" fill="#572670" text-anchor="middle">Local Guide</text>

  <text x="40" y="180" font-family="'Segoe UI', 'Roboto', sans-serif" font-weight="900" font-style="italic" font-size="48" fill="white" style="text-transform:uppercase;">TOP 5 TMS</text>
  <text x="40" y="235" font-family="'Segoe UI', 'Roboto', sans-serif" font-weight="900" font-style="italic" font-size="48" fill="white" style="text-transform:uppercase;">CLINICS IN</text>
  <text x="40" y="290" font-family="'Segoe UI', 'Roboto', sans-serif" font-weight="900" font-style="italic" font-size="48" fill="white" style="text-transform:uppercase;">PALM SPRINGS</text>

  <text x="42" y="340" font-family="'Segoe UI', 'Roboto', sans-serif" font-weight="700" font-style="italic" font-size="18" fill="#FCD34D">Updated Feb 2026</text>
</svg>
"@

Set-Content $svgFile -Value $svgContent -Encoding UTF8
if (Test-Path $imgFile) { Remove-Item $imgFile }
