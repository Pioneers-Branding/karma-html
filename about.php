<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Karma TMS - Innovative Mental Health Care</title>
    <meta name="description"
        content="Learn about Karma TMS, our mission, and our dedicated team of mental health professionals providing cutting-edge TMS therapy in Palm Springs, CA.">
    <link rel="canonical" href="about.php">

    <?php include 'includes/header-links.php'; ?>

</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="about-hero">
        <div class="container">
            <div class="about-hero-grid">
                <div class="about-hero-content">
                    <span class="badge badge-purple mb-4">About Karma TMS</span>
                    <h1 class="hero-title mb-6">
                        Transforming <span class="gradient-text block">Mental Health</span> Through Innovation
                    </h1>
                    <p class="hero-description mb-8">
                        At Karma TMS, we're pioneering the future of mental health treatment through cutting-edge TMS
                        therapy, compassionate care, and a commitment to helping patients reclaim their lives.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="tms-therapy.php" class="btn btn-primary btn-lg">
                            Our Services <i data-lucide="arrow-right" class="w-5 h-5 ml-2"></i>
                        </a>
                        <a href="contact-us.php" class="btn btn-outline btn-lg">
                            Schedule Consultation
                        </a>
                    </div>
                </div>

                <div class="about-hero-image">
                    <div class="about-hero-img-wrapper">
                        <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763029482/Exomind_PIC_Female-Model3_0342_ENUS100_qx29w9.jpg"
                            alt="Karma TMS Clinic">
                    </div>

                    <!-- Floating Stats -->
                    <div class="about-stat-card stat-success">
                        <i data-lucide="award" class="w-8 h-8 text-primary"></i>
                        <div>
                            <div class="about-stat-value">95%</div>
                            <div class="about-stat-label">Success Rate</div>
                        </div>
                    </div>

                    <div class="about-stat-card stat-patients">
                        <i data-lucide="users" class="w-8 h-8 text-purple-500"></i>
                        <div>
                            <div class="about-stat-value">5000+</div>
                            <div class="about-stat-label">Patients Treated</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Tabs Section -->
    <section class="tabs-container bg-white">
        <div class="container">
            <div class="text-center mb-12">
                <span class="badge badge-purple mb-4">Our Journey</span>
                <h2 class="section-title">Innovation Through <span class="text-primary">Experience</span></h2>
            </div>

            <!-- Tab Navigation -->
            <div class="tabs-nav">
                <button class="tab-btn active" onclick="openTab('story')">Practice Story</button>
                <button class="tab-btn" onclick="openTab('values')">Core Values</button>
                <button class="tab-btn" onclick="openTab('technology')">Technology Showcase</button>
            </div>

            <!-- Tab Contents -->
            <div class="tab-content">
                <!-- Story Tab -->
                <div id="story" class="tab-pane active">
                    <div class="story-grid">
                        <div class="story-text">
                            <h3>Our Story</h3>
                            <p>Founded in 2015 in the heart of Palm Springs, Karma TMS emerged from a vision to bring
                                cutting-edge mental health treatment to Southern California. Our founder, <a
                                    href="team.php" class="text-primary hover:underline">Dr. Keerthy Sunder</a>.</p>
                            <p>What started as a small clinic has grown into a leading center for innovative mental
                                health care, treating over 5,000 patients and maintaining a 95% success rate. We've
                                expanded our services to include <a href="brain-mapping.php"
                                    class="text-primary hover:underline">brain mapping</a>, and comprehensive <a
                                    href="medication-management.php"
                                    class="text-primary hover:underline ml-1">medication management</a>.</p>
                            <div class="story-mission">
                                <i data-lucide="sparkles" class="w-6 h-6 text-primary flex-shrink-0"></i>
                                <div>
                                    <h4 class="font-bold text-primary mb-1">Our Mission Today</h4>
                                    <p class="text-gray-600 mb-0">To provide accessible, personalized mental health care
                                        that combines the latest technology with compassionate, human-centered
                                        treatment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="story-image">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1761742451/IMG_9537_VSCO_uw6qok.jpg"
                                alt="TMS Treatment Technology">
                        </div>
                    </div>
                </div>

                <!-- Values Tab -->
                <div id="values" class="tab-pane">
                    <h3 class="text-center mb-10 text-3xl font-bold">Our Core Values</h3>
                    <div class="values-grid">
                        <div class="value-card">
                            <div class="value-icon">
                                <i data-lucide="heart" class="w-6 h-6"></i>
                            </div>
                            <h4 class="text-xl font-bold mb-2">Compassionate Care</h4>
                            <p class="text-gray-600">Personalized attention with empathy at the core of our treatment.
                            </p>
                        </div>
                        <div class="value-card">
                            <div class="value-icon">
                                <i data-lucide="brain" class="w-6 h-6"></i>
                            </div>
                            <h4 class="text-xl font-bold mb-2">Scientific Excellence</h4>
                            <p class="text-gray-600">Evidence-based treatments ensuring optimal outcomes for patients.
                            </p>
                        </div>
                        <div class="value-card">
                            <div class="value-icon">
                                <i data-lucide="shield" class="w-6 h-6"></i>
                            </div>
                            <h4 class="text-xl font-bold mb-2">Safe Environment</h4>
                            <p class="text-gray-600">A secure, welcoming space for your healing journey.</p>
                        </div>
                        <div class="value-card">
                            <div class="value-icon">
                                <i data-lucide="users" class="w-6 h-6"></i>
                            </div>
                            <h4 class="text-xl font-bold mb-2">Collaborative Approach</h4>
                            <p class="text-gray-600">Working with patients and providers for comprehensive care.</p>
                        </div>
                    </div>
                </div>

                <!-- Technology Tab -->
                <div id="technology" class="tab-pane">
                    <h3 class="text-center mb-10 text-3xl font-bold">Technology Showcase</h3>
                    <div class="tech-grid">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i data-lucide="zap" class="w-8 h-8"></i>
                            </div>
                            <h4 class="text-2xl font-bold mb-3">Apollo TMS</h4>
                            <p class="text-gray-600">Advanced TMS technology for precise, effective treatment.</p>
                            <ul class="tech-features">
                                <li><i data-lucide="check-circle" class="w-4 h-4 text-primary"></i> Precise targeting
                                </li>
                                <li><i data-lucide="check-circle" class="w-4 h-4 text-primary"></i> Proven efficacy</li>
                                <li><i data-lucide="check-circle" class="w-4 h-4 text-primary"></i> Non-invasive</li>
                            </ul>
                        </div>
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i data-lucide="brain" class="w-8 h-8"></i>
                            </div>
                            <h4 class="text-2xl font-bold mb-3">Brain Mapping</h4>
                            <p class="text-gray-600">Personalized neuroimaging to optimize treatment outcomes.</p>
                            <ul class="tech-features">
                                <li><i data-lucide="check-circle" class="w-4 h-4 text-primary"></i> Custom protocols
                                </li>
                                <li><i data-lucide="check-circle" class="w-4 h-4 text-primary"></i> Real-time monitoring
                                </li>
                                <li><i data-lucide="check-circle" class="w-4 h-4 text-primary"></i> Optimization</li>
                            </ul>
                        </div>
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i data-lucide="target" class="w-8 h-8"></i>
                            </div>
                            <h4 class="text-2xl font-bold mb-3">Precision Medicine</h4>
                            <p class="text-gray-600">Treatment plans based on genetic and clinical markers.</p>
                            <ul class="tech-features">
                                <li><i data-lucide="check-circle" class="w-4 h-4 text-primary"></i> Genetic testing</li>
                                <li><i data-lucide="check-circle" class="w-4 h-4 text-primary"></i> Biomarker analysis
                                </li>
                                <li><i data-lucide="check-circle" class="w-4 h-4 text-primary"></i> Custom protocols
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center mt-12">
                        <div class="flex flex-wrap justify-center gap-4">
                            <a href="tms-therapy.php" class="btn btn-primary">Explore TMS Therapy</a>
                            <a href="brain-mapping.php" class="btn btn-outline">Brain Mapping Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Careers CTA Section -->
    <section class="careers-section">
        <div class="container">
            <div class="max-w-4xl mx-auto text-center">
                <span class="badge badge-purple mb-6">Join Our Team</span>
                <h2 class="text-4xl lg:text-5xl font-bold mb-8">
                    Build Your Career in <span class="text-primary">Mental Health</span>
                </h2>
                <p class="text-xl text-gray-600 mb-12">
                    Join a dynamic team of mental health professionals dedicated to innovative patient care. We offer
                    competitive benefits, continuing education opportunities, and a supportive work environment.
                </p>

                <div class="careers-grid">
                    <div class="career-benefit-card">
                        <div class="benefit-icon">
                            <i data-lucide="building-2" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Modern Facility</h3>
                        <p class="text-gray-600">State-of-the-art clinic with latest technology</p>
                    </div>
                    <div class="career-benefit-card">
                        <div class="benefit-icon">
                            <i data-lucide="users" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Collaborative Team</h3>
                        <p class="text-gray-600">Work alongside experienced professionals</p>
                    </div>
                    <div class="career-benefit-card">
                        <div class="benefit-icon">
                            <i data-lucide="briefcase" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Growth Opportunities</h3>
                        <p class="text-gray-600">Professional development and advancement paths</p>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-4 mt-12">
                    <a href="mailto:careers@karmatms.com" class="btn btn-primary btn-lg">
                        <i data-lucide="mail" class="w-5 h-5 mr-2"></i> View Open Positions
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick CTA Section -->
    <section class="final-cta">
        <div class="container">
            <h3>Ready to Start Your Healing Journey?</h3>
            <p>Contact us today to learn more about our innovative TMS treatments and how we can help you reclaim your
                life.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="tel:760-760-5675" class="btn btn-white btn-lg">
                    <i data-lucide="phone" class="w-5 h-5 mr-2"></i> Call Now: 760-760-5675
                </a>
                <a href="contact-us.php" class="btn btn-outline btn-lg bg-black text-white border-white">
                    Schedule Consultation
                </a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>


</body>

</html>
