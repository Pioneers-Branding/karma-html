<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Insights - Karma TMS Blog</title>
    <meta name="description"
        content="Stay informed with the latest research, treatments, and expert insights in mental health care from our team of specialists at Karma TMS.">

    <?php include 'includes/header-links.php'; ?>
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

            <!-- Posts Grid -->
            <div id="blog-grid" class="blog-grid">
                <!-- Javascript will inject posts here -->
            </div>

            <!-- Loading/State Messages -->
            <div id="blog-loader" class="text-center py-12 hidden">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-gray-900"></div>
            </div>

            <div id="blog-load-more-container" class="text-center py-8 hidden">
                <div class="text-gray-500 text-sm mb-4">Scroll for more...</div>
            </div>

            <div id="blog-end-message" class="text-center py-8 hidden">
                <p class="text-gray-600 mb-4">You've reached the end of our blog posts!</p>
                <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
                    class="btn btn-white border border-gray-200">
                    Back to Top
                </button>
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

