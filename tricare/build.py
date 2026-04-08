import re

with open('/Users/aniketsharma/Desktop/karma-vet/index.html', 'r', encoding='utf-8') as f:
    html = f.read()

# Replace Tailwind colors config
tailwind_config = """
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            karma: { DEFAULT:'#5A2A73', light:'#7a3f9c', dark:'#3f1b53', pale:'#f7f0fa', subtle: '#ede4f5' },
            white: '#ffffff',
            cream: { DEFAULT:'#ffffff', dark:'#f0f1f3' },
          },
          fontFamily: {
            display: ['"Open Sans"','system-ui','sans-serif'],
            body: ['"Open Sans"','system-ui','sans-serif'],
          },
        }
      }
    }
"""
html = re.sub(r'tailwind\.config\s*=\s*\{.*?\}', tailwind_config, html, flags=re.DOTALL)

# Add gradient style
style_block = """
  <link rel="stylesheet" href="styles.css">
  <style>
    .text-gradient-karma { background:linear-gradient(135deg,#7a3f9c,#5A2A73); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
    .text-gradient-green { background:linear-gradient(135deg,#7a3f9c,#5A2A73); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
    .text-gradient-teal { background:linear-gradient(135deg,#7a3f9c,#5A2A73); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
    .bg-gradient-to-br { background-image: linear-gradient(to bottom right, #7a3f9c, #5A2A73); }
  </style>
"""
html = html.replace('<link rel="stylesheet" href="styles.css">', style_block)

# Colors swapping
# Replace specific utility classes
html = re.sub(r'\b(text|bg|border|ring|shadow)-teal(-dark|-light|-pale)?', r'\1-karma\2', html)
html = re.sub(r'\b(text|bg|border|ring|shadow)-olive(-dark|-light|-pale)?', r'\1-karma\2', html)
html = re.sub(r'\b(text|bg|border|ring|shadow)-navy(-dark|-light|-pale)?', r'\1-gray-900', html)
html = re.sub(r'bg-navy/\[.*?\]', 'bg-gray-900/[0.98]', html)
html = re.sub(r'bg-navy', 'bg-gray-900', html)
html = html.replace('bg-cream', 'bg-white')
html = html.replace('text-gradient-teal', 'text-gradient-karma')
html = html.replace('text-gradient-green', 'text-gradient-karma')

html = html.replace('from-teal', 'from-karma')
html = html.replace('to-teal', 'to-karma-dark')
html = html.replace('from-olive', 'from-karma-light')
html = html.replace('to-olive', 'to-karma')
html = html.replace('from-navy', 'from-gray-900')
html = html.replace('to-navy', 'to-gray-800')

# Logo image substitution
old_logo = 'https://globecore-new.netlify.app/assets/globecore_logo-removebg-preview.png'
new_logo = 'https://www.karmatms.com/assets/images/logo.png' 
# wait, if the logo doesn't load, alt text "Karma TMS Logo" will show. Let's use a text element or white logo image if possible, but let's assume karmatms has text we can use or just change alt text.
html = html.replace(old_logo, new_logo)
html = html.replace('GlobeCoRe Logo', 'Karma TMS Logo')

# Text Substitutions
# Brand
html = html.replace('GlobeCoRe Atlanta', 'Karma TMS California')
html = html.replace("GlobeCoRe's", "Karma TMS's")
html = html.replace('GlobeCoRe Inc.', 'Karma TMS PC')
html = html.replace('GlobeCoRe', 'Karma TMS')
html = html.replace('globecoreinc.com', 'karmatms.com')

# Locations
html = html.replace('Atlanta, Marietta, Sandy Springs & beyond', 'Palm Springs, Rancho Mirage, Twentynine Palms & beyond')
html = html.replace('Atlanta, Marietta, Sandy Springs, Alpharetta & beyond', 'Palm Springs, Rancho Mirage, Twentynine Palms & beyond')
html = html.replace('Marietta, Sandy Springs, Alpharetta, Decatur, and all metro Atlanta communities', 'Palm Springs, Rancho Mirage, Twentynine Palms, and the entire Coachella Valley')
html = html.replace('Marietta, Alpharetta, Sandy Springs, Brookhaven, Decatur, Smyrna, Dunwoody, Roswell, Johns Creek, and all surrounding communities', 'Palm Springs, Rancho Mirage, Twentynine Palms, and the Coachella Valley')
html = html.replace('Atlanta, Georgia', 'Palm Springs, California')
html = html.replace('Atlanta, GA', 'Palm Springs, CA')
html = html.replace('Atlanta', 'Palm Springs')
html = html.replace('Buckhead', 'Palm Springs')
html = html.replace('Sandy Springs, GA', 'Rancho Mirage, CA')
html = html.replace('Marietta, GA', 'Twentynine Palms, CA')

# Address
html = html.replace('3355 Lenox Road NE', '560 S. Paseo Dorotea')
html = html.replace('Suite 1000', 'Suite 4-B')
html = html.replace('30326', '92264')

# Phone & Email
html = html.replace('7702841044', '7607605675')
html = html.replace('(770) 284-1044', '(760) 760-5675')
html = html.replace('+17702841044', '+17607605675')
html = html.replace('help@globecoreinc.com', 'info@karmatms.com')

# Update title and meta
html = html.replace('TRICARE TMS Atlanta', 'TRICARE TMS California')
html = html.replace('US-GA', 'US-CA')

# Save
with open('/Users/aniketsharma/Desktop/karma-vet/index.html', 'w', encoding='utf-8') as f:
    f.write(html)
