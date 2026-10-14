<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Insights - Karma TMS Blog</title>
    <meta name="description"
        content="Stay informed with the latest research, treatments, and expert insights in mental health care from our team of specialists at Karma TMS.">

    <?php include 'includes/header-links.php'; ?>

    <!-- Schema.org JSON-LD: Blog + CollectionPage -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": ["Blog", "CollectionPage"],
      "@id": "https://www.karmatms.com/blog.php",
      "url": "https://www.karmatms.com/blog.php",
      "name": "Mental Health Insights - Karma TMS Blog",
      "description": "Stay informed with the latest research, treatments, and expert insights in mental health care from our team of specialists at Karma TMS.",
      "inLanguage": "en-US",
      "isPartOf": {"@id": "https://www.karmatms.com/#website"},
      "publisher": {
        "@type": "Organization",
        "@id": "https://www.karmatms.com/#organization",
        "name": "Karma TMS PC",
        "logo": {
          "@type": "ImageObject",
          "url": "/assets/images/img-135947b0fa55.png"
        }
      },
      "author": {
        "@type": "Person",
        "name": "Dr. Keerthy Sunder",
        "jobTitle": "Board-Certified Psychiatrist",
        "worksFor": {"@id": "https://www.karmatms.com/#organization"}
      },
      "about": [
        {"@type": "MedicalCondition", "name": "Depression"},
        {"@type": "MedicalCondition", "name": "Anxiety"},
        {"@type": "MedicalCondition", "name": "PTSD"},
        {"@type": "MedicalTherapy", "name": "TMS Therapy"}
      ],
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
          {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.karmatms.com/"},
          {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://www.karmatms.com/blog.php"}
        ]
      }
    }
    </script>

    <style>
        .blog-pagination-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            margin-top: 3rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .blog-page-btn {
            min-width: 2.75rem;
            height: 2.75rem;
            padding: 0 0.85rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.5rem;
            font-size: 0.95rem;
            font-weight: 600;
            color: #374151;
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
            user-select: none;
        }

        .blog-page-btn:hover:not(:disabled):not(.active) {
            background-color: #f3e8ff;
            border-color: #572670;
            color: #572670;
        }

        .blog-page-btn.active {
            background-color: #572670 !important;
            border-color: #572670 !important;
            color: #ffffff !important;
            font-weight: 700;
            box-shadow: 0 4px 6px -1px rgba(87, 38, 112, 0.25);
            cursor: default;
        }

        .blog-page-btn:disabled, .blog-page-btn.disabled {
            opacity: 0.4;
            cursor: not-allowed;
            background-color: #f9fafb;
            border-color: #e5e7eb;
            color: #9ca3af;
        }

        .blog-page-ellipsis {
            min-width: 2rem;
            height: 2.75rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #9ca3af;
            font-size: 1rem;
            font-weight: 600;
        }
    </style>
</head>

<body class="bg-white" style="font-family: 'Outfit', sans-serif;">
    <?php include 'includes/header.php'; ?>

    <!-- Header Section -->
    <div class="bg-blog-header">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto fade-in-up">
                <h1 class="text-5xl font-bold text-gray-900 mb-4">
                    Mental Health
                    <span class="text-gradient-purple">
                        Insights
                    </span>
                </h1>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Stay informed with the latest research, treatments, and expert
                    insights in mental health care from our team of specialists.
                </p>
            </div>
        </div>
    </div>

    <!-- Category Tabs and Posts -->
    <div class="py-12 section">
        <div class="container mx-auto px-4">
            <!-- Tabs -->
            <div id="blog-tabs" class="blog-tabs-container">
                <!-- Javascript will inject tabs here -->
            </div>

            <!-- Posts Grid (3x3 on desktop) -->
            <div id="blog-grid" class="blog-grid">
                <!-- Javascript will inject posts here -->
            </div>

            <!-- Loading Spinner -->
            <div id="blog-loader" class="text-center py-12 hidden">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-gray-900"></div>
            </div>

            <!-- Pagination Container -->
            <div id="blog-pagination" class="blog-pagination-container">
                <!-- Javascript will inject pagination buttons here -->
            </div>

            <div id="blog-no-results" class="text-center py-12 hidden">
                <p class="text-gray-500 text-lg">No posts found in this category.</p>
            </div>
        </div>
    </div>

    <!-- Newsletter Signup -->
    <div class="bg-newsletter">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Stay Updated</h3>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Subscribe to our newsletter for the latest mental health insights,
                research updates, and expert advice delivered to your inbox.
            </p>
            <div class="newsletter-input-group">
                <input type="email" placeholder="Enter your email" class="newsletter-input">
                <button class="btn btn-primary">
                    Subscribe
                </button>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script>
        // Separate smaller script to trigger init if main.js is loaded
        document.addEventListener('DOMContentLoaded', () => {
            // Logic is inside main.js
        });
    </script>
</body>

</html>

