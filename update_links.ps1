$file_path = "c:\Users\GCV\Desktop\Karma TMS\karma-html\areas-we-serve.php"
$content = Get-Content $file_path -Raw

# Regex to find <div class="location-item">City Name</div>
# and replace with <a href="tms-therapy-city-name.php" class="location-item">City Name</a>

$pattern = '<div class="location-item">([^<]+)</div>'
$callback = {
    param($match)
    $city = $match.Groups[1].Value.Trim()
    $slug = $city.ToLower().Replace(" ", "-").Replace("(", "").Replace(")", "")
    return "<a href=`"tms-therapy-$slug.php`" class=`"location-item`" style=`"text-decoration: none; display: block;`">$city</a>"
}

$new_content = [regex]::Replace($content, $pattern, $callback)

Set-Content -Path $file_path -Value $new_content
Write-Host "Updated areas-we-serve.php with links."
