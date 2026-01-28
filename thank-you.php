<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | KarmaTMS Mental Health Center</title>
    <meta name="description"
        content="Thank you for contacting KarmaTMS. We have received your message and will be in touch shortly.">

    <?php include 'includes/header-links.php'; ?>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <main class="min-h-screen flex items-center justify-center pt-32 pb-20 px-4"
        style="background: linear-gradient(to bottom, #ffffff, #f9fafb);">
        <div class="max-w-2xl w-full text-center space-y-8">
            <!-- Thank You Message -->
            <div class="space-y-4">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900">
                    Thank You!
                </h1>
                <p class="text-lg text-gray-600">
                    We've received your message and will get back to you shortly.
                </p>
            </div>

            <!-- Home Button -->
            <div>
                <a href="index.php" class="bm-hero-btn inline-block"
                    style="background-color: #572670; text-decoration: none;">
                    Return to Home
                </a>
            </div>

            <!-- Contact Information -->
            <div class="pt-8 space-y-4">
                <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold">
                    Contact Us
                </p>
                <div class="flex flex-row flex-wrap items-center justify-center gap-6 text-gray-700">
                    <a href="tel:7607605675" class="flex items-center gap-2 transition-colors hover:text-[#572670]"
                        style="text-decoration: none;">
                        <i data-lucide="phone" class="h-5 w-5"></i>
                        <span>760-760-5675</span>
                    </a>
                    <a href="mailto:contact@karmatms.com"
                        class="flex items-center gap-2 transition-colors hover:text-[#572670]"
                        style="text-decoration: none;">
                        <i data-lucide="mail" class="h-5 w-5"></i>
                        <span>contact@karmatms.com</span>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
    </script>
</body>

</html>

