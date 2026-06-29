import os
import re
import json
import hashlib
import requests
from urllib.parse import urlparse
from pathlib import Path

# Configuration
IMAGES_DIR = Path("c:/Users/GCV/Desktop/karma-html/assets/images")
CLOUDINARY_PATTERN = r'https://res\.cloudinary\.com/[^"\'>\s]+'

def get_file_extension(url):
    """Extract file extension from URL"""
    parsed = urlparse(url)
    path = parsed.path
    ext = os.path.splitext(path)[1]
    if not ext:
        # Default to jpg if no extension found
        return '.jpg'
    return ext

def generate_filename(url):
    """Generate a unique filename based on URL hash"""
    url_hash = hashlib.md5(url.encode()).hexdigest()[:12]
    ext = get_file_extension(url)
    return f"img-{url_hash}{ext}"

def extract_urls_from_file(file_path):
    """Extract all Cloudinary URLs from a file"""
    urls = []
    try:
        with open(file_path, 'r', encoding='utf-8', errors='ignore') as f:
            content = f.read()
            matches = re.findall(CLOUDINARY_PATTERN, content)
            urls.extend(matches)
    except Exception as e:
        print(f"Error reading {file_path}: {e}")
    return urls

def find_all_files():
    """Find all files that might contain Cloudinary URLs"""
    base_dir = Path("c:/Users/GCV/Desktop/karma-html")
    extensions = ['.php', '.html', '.js', '.json']
    files = []

    for ext in extensions:
        files.extend(base_dir.rglob(f'*{ext}'))

    return [f for f in files if 'node_modules' not in str(f) and '.git' not in str(f)]

def main():
    # Create images directory
    IMAGES_DIR.mkdir(parents=True, exist_ok=True)

    print("Scanning files for Cloudinary URLs...")
    all_urls = set()
    file_url_map = {}  # file -> list of urls

    files = find_all_files()
    print(f"Scanning {len(files)} files...")

    for file_path in files:
        urls = extract_urls_from_file(file_path)
        if urls:
            all_urls.update(urls)
            file_url_map[str(file_path)] = urls

    print(f"Found {len(all_urls)} unique Cloudinary URLs across {len(file_url_map)} files")

    # Download images
    url_to_local = {}
    downloaded = 0
    skipped = 0

    print("\nDownloading images...")
    for url in sorted(all_urls):
        filename = generate_filename(url)
        local_path = IMAGES_DIR / filename

        if local_path.exists():
            print(f"  SKIP (exists): {filename}")
            skipped += 1
        else:
            try:
                response = requests.get(url, timeout=30)
                if response.status_code == 200:
                    with open(local_path, 'wb') as f:
                        f.write(response.content)
                    print(f"  DOWNLOADED: {filename}")
                    downloaded += 1
                else:
                    print(f"  FAILED: {url} (status {response.status_code})")
            except Exception as e:
                print(f"  ERROR: {url} - {e}")

        url_to_local[url] = f"/assets/images/{filename}"

    print(f"\nDownloaded: {downloaded}, Skipped: {skipped}")

    # Save URL mapping for reference
    mapping_file = IMAGES_DIR / "url_mapping.json"
    with open(mapping_file, 'w') as f:
        json.dump(url_to_local, f, indent=2)
    print(f"\nURL mapping saved to {mapping_file}")

    # Update all files
    print("\nUpdating file references...")
    updated_files = 0

    for file_path, urls in file_url_map.items():
        try:
            with open(file_path, 'r', encoding='utf-8', errors='ignore') as f:
                content = f.read()

            original_content = content
            for url in urls:
                if url in url_to_local:
                    content = content.replace(url, url_to_local[url])

            if content != original_content:
                with open(file_path, 'w', encoding='utf-8') as f:
                    f.write(content)
                updated_files += 1
                print(f"  UPDATED: {file_path}")
        except Exception as e:
            print(f"  ERROR updating {file_path}: {e}")

    print(f"\nTotal files updated: {updated_files}")
    print("\nDone!")

if __name__ == "__main__":
    main()