$findString = @"
                <!-- Testimonial -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 relative fade-in-up">
                    <i data-lucide="quote" class="w-10 h-10 text-primary-brand opacity-10 absolute top-6 right-6"></i>
                    <div class="flex items-center gap-1 mb-4 text-yellow-400">
                        <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                    </div>
"@

$replaceString = @"
                <!-- Testimonial -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 fade-in-up" style="position: relative;">
                    <svg style="position: absolute; top: 1.5rem; right: 1.5rem; width: 2.5rem; height: 2.5rem; opacity: 0.1; color: #572670;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"></path></svg>
                    <div style="display: flex; align-items: center; gap: 0.25rem; margin-bottom: 1rem; color: #facc15;">
                        <svg style="width: 1.25rem; height: 1.25rem; fill: currentColor;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg style="width: 1.25rem; height: 1.25rem; fill: currentColor;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg style="width: 1.25rem; height: 1.25rem; fill: currentColor;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg style="width: 1.25rem; height: 1.25rem; fill: currentColor;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg style="width: 1.25rem; height: 1.25rem; fill: currentColor;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
"@

$files = Get-ChildItem -Path "a:\Work\karma-html" -Filter "*.php"
$count = 0
foreach ($file in $files) {
    $content = Get-Content -Path $file.FullName -Raw
    
    # Normalize line endings to deal with CRLF/LF issues
    $normalizedContent = $content -replace "`r`n", "`n"
    $normalizedFind = $findString -replace "`r`n", "`n"
    $normalizedReplace = $replaceString -replace "`r`n", "`n"
    
    if ($normalizedContent.Contains($normalizedFind)) {
        $newContent = $normalizedContent.Replace($normalizedFind, $normalizedReplace)
        Set-Content -Path $file.FullName -Value $newContent -Encoding UTF8
        Write-Host "Fixed file: $($file.Name)"
        $count++
    }
}
Write-Host "Total files fixed: $count"
