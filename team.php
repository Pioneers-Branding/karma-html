<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - Karma TMS | Compassionate & Expert Mental Health Care</title>
    <meta name="description"
        content="Meet our expert team of board-certified psychiatrists, mental health professionals, and support staff dedicated to your mental wellness journey at Karma TMS.">

    <?php include 'includes/header-links.php'; ?>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="team-hero">
        <div class="team-hero-bg"
            style="background-image: url('/assets/images/img-7e9504440d1b.png')">
        </div>
        <div class="team-hero-overlay"></div>
        <div class="container relative z-10 text-center">
            <div class="fade-in-up">
                <span class="badge badge-purple mb-4 rounded-full">Our Medical Team</span>
                <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                    Expert
                    <span class="block gradient-text">Clinical Professionals</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                    Our board-certified physicians and mental health professionals bring decades of combined
                    experience in TMS therapy, psychiatry, and innovative mental health treatments.
                </p>
            </div>
        </div>
    </section>

    <!-- Team Image Section -->
    <section class="w-full py-16 bg-white fade-in-up">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 text-center">
                <span class="gradient-text">Our Team</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8 text-center">
                Meet our compassionate and experienced team of mental health professionals dedicated to your
                well-being. At Karma TMS, we believe that the right care can make all the difference.
            </p>
            <div class="flex justify-center">
                <div class="max-w-full rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                    <img src="images/team/team-new.png" alt="Karma TMS Clinical Team"
                        class="w-full h-auto block object-contain">
                </div>
            </div>
        </div>
    </section>
    <!-- Filters Section -->
    <section class="py-8 pt-20 bg-gray-50/50">
        <div class="container">
            <div id="team-filters-root" class="team-filters-container">
                <!-- Filters injected via JS -->
                <div class="team-filters-header">
                    <i data-lucide="filter" class="w-6 h-6 text-gray-600"></i>
                    <h3 class="team-filters-title">Our Team Members</h3>
                </div>
                <div id="filters-grid" class="team-filters-grid">
                    <!-- Buttons go here -->
                </div>
            </div>
        </div>
    </section>

    <!-- Team Grid -->
    <section class="section bg-white">
        <div class="container">
            <div id="team-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Team members will be injected here -->
            </div>

            <div id="no-results" class="hidden text-center py-12">

            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="cta-section-refined">
        <div class="container text-center">
            <div class="max-w-3xl mx-auto">
                <h3 class="cta-title-refined">Ready to Meet Your Care Team?</h3>
                <p class="cta-desc-refined">
                    Schedule a consultation to discuss your treatment options with our experienced medical
                    professionals.
                </p>
                <div class="cta-buttons-container">
                    <a href="tel:760-760-5675" class="btn-cta-primary">
                        <i data-lucide="phone" class="btn-icon"></i> Call Now: 760-760-5675
                    </a>
                    <a href="contact-us.php" class="btn-cta-outline-refined">
                        <i data-lucide="building-2" class="btn-icon"></i> Book Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <!-- Team Member Modal -->
    <div id="team-modal" class="modal-overlay">
        <div class="modal-container">
            <button class="modal-close" onclick="closeTeamModal()">
                <i data-lucide="x"></i>
            </button>
            <div id="modal-content-area">
                <!-- Content injected via JS -->
            </div>
        </div>
    </div>

</body>

</html>