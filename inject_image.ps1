$ErrorActionPreference = "Stop"
[Net.ServicePointManager]::SecurityProtocol = [Net.SecurityProtocolType]::Tls12

$imgFile = "c:\Users\GCV\Desktop\Karma TMS\karma-html\images\blog\tms-stock.jpg"
$svgFile = "c:\Users\GCV\Desktop\Karma TMS\karma-html\images\blog\is-tms-a-hoax-card.svg"

try {
    # 1. Try User's Site Image (Best Guess)
    $url = "https://karmatms.com/wp-content/uploads/2017/09/neurostar-tms-therapy-procedure.jpg"
    Invoke-WebRequest -Uri $url -OutFile $imgFile -UserAgent "Mozilla/5.0" -ErrorAction Stop
    Write-Host "Used KarmaTMS image"
} catch {
    try {
        # 2. Try CNET Image (Neurostar Machine)
        $url = "https://www.cnet.com/a/img/resize/0c6c0c538569800057088907860161476966601ea/hub/2016/06/07/7b2a6f87-6e3e-42c2-b8e7-1473685856c4/neurostar-2.jpg"
        Invoke-WebRequest -Uri $url -OutFile $imgFile -UserAgent "Mozilla/5.0" -ErrorAction Stop
         Write-Host "Used CNET image"
    } catch {
        # 3. Fallback to Unsplash (Professional TMS Stock)
        $url = "https://images.unsplash.com/photo-1559757175-5700dde675bc?ixlib=rb-4.0.3&w=600&q=80"
        Invoke-WebRequest -Uri $url -OutFile $imgFile -UserAgent "Mozilla/5.0"
         Write-Host "Used Unsplash image"
    }
}

# Read Base64
$bytes = [IO.File]::ReadAllBytes($imgFile)
$b64 = [Convert]::ToBase64String($bytes)

# Construct Image Segment
# Using width=600 to ensure coverage, positioned at x=350 to overlap curve
$imgTag = '<image href="data:image/jpeg;base64,' + $b64 + '" x="350" y="0" width="600" height="450" preserveAspectRatio="xMidYMid slice" clip-path="url(#curveClip)" />'

# Read SVG
$svg = Get-Content $svgFile -Raw -Encoding UTF8

# Replace Placeholder Rect (and insert image there)
$svg = $svg -replace '<rect width="800" height="450" fill="#f3f4f6" clip-path="url\(#curveClip\)" />', $imgTag

# Remove the Placeholder Group (Brain Icon)
$svg = $svg -replace '(?s)<g clip-path="url\(#curveClip\)" opacity="0.1">.*?</g>', ''

# Write Back
Set-Content $svgFile -Value $svg -Encoding UTF8

# Cleanup
if (Test-Path $imgFile) { Remove-Item $imgFile }
Write-Host "SVG Updated Successfully"
