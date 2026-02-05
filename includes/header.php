<!-- Navigation -->
<nav id="navbar" class="navbar-react">
    <div class="navbar-container">
        <div class="navbar-content">
            <!-- Logo -->
            <a href="index.php" class="navbar-logo">
                <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1759944699/karmatms_rp4lkn.png"
                    alt="Karma TMS" class="logo-img">
            </a>

            <!-- Desktop Navigation -->
            <nav class="desktop-nav">
                <a href="index.php" class="nav-btn">
                    Home
                </a>

                <!-- About Us Dropdown -->
                <div class="dropdown">
                    <button class="nav-btn dropdown-toggle">
                        About Us <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="about.php" class="dropdown-item">
                            <i data-lucide="user" class="w-4 h-4"></i> About Karma TMS
                        </a>
                        <a href="team.php" class="dropdown-item">
                            <i data-lucide="user-check" class="w-4 h-4"></i> Our Team
                        </a>
                    </div>
                </div>

                <!-- Services Dropdown -->
                <div class="dropdown">
                    <button class="nav-btn dropdown-toggle">
                        Services <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="tms-therapy.php" class="dropdown-item">
                            <i data-lucide="brain" class="w-4 h-4"></i> TMS Therapy
                        </a>
                        <a href="prtms.php" class="dropdown-item">
                            <i data-lucide="stethoscope" class="w-4 h-4"></i> PrTMS
                        </a>
                        <a href="brain-mapping.php" class="dropdown-item">
                            <i data-lucide="brain" class="w-4 h-4"></i> Brain Mapping
                        </a>
                        <a href="medication-management.php" class="dropdown-item">
                            <i data-lucide="shield" class="w-4 h-4"></i> Medication Management
                        </a>
                    </div>
                </div>

                <a href="https://www.braintunetms.com/" target="_blank" class="nav-btn">
                     Brain Tune Exomind

                </a>

                <!-- Conditions Dropdown -->
                <div class="dropdown">
                    <button class="nav-btn dropdown-toggle">
                        Conditions <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="depression.php" class="dropdown-item">
                            <i data-lucide="heart" class="w-4 h-4"></i> Depression
                        </a>
                        <a href="anxiety.php" class="dropdown-item">
                            <i data-lucide="shield" class="w-4 h-4"></i> Anxiety Disorders
                        </a>
                        <a href="ocd.php" class="dropdown-item">
                            <i data-lucide="brain" class="w-4 h-4"></i> OCD
                        </a>
                        <a href="ptsd.php" class="dropdown-item">
                            <i data-lucide="heart" class="w-4 h-4"></i> PTSD
                        </a>
                        <a href="bipolar.php" class="dropdown-item">
                            <i data-lucide="brain" class="w-4 h-4"></i> Bipolar Depression
                        </a>
                        <a href="addiction.php" class="dropdown-item">
                            <i data-lucide="heart" class="w-4 h-4"></i> Addiction Recovery
                        </a>
                        <a href="womens-mood.php" class="dropdown-item">
                            <i data-lucide="heart" class="w-4 h-4"></i> Women's Mood
                        </a>
                    </div>
                </div>

                <!-- Locations Dropdown -->
                <div class="dropdown">
                    <button class="nav-btn dropdown-toggle">
                        Locations <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="palm-springs.php" class="dropdown-item">
                            <i data-lucide="map-pin" class="w-4 h-4"></i> Palm Springs
                        </a>
                        <a href="twentynine-palms.php" class="dropdown-item">
                            <i data-lucide="map-pin" class="w-4 h-4"></i> Twenty-Nine Palms
                        </a>
                        <a href="rancho-mirage.php" class="dropdown-item">
                            <i data-lucide="map-pin" class="w-4 h-4"></i> Rancho Mirage
                        </a>
                    </div>
                </div>

                <!-- Resources Dropdown -->
                <div class="dropdown">
                    <button class="nav-btn dropdown-toggle">
                        Resources <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="testimonials.php" class="dropdown-item">
                            <i data-lucide="users" class="w-4 h-4"></i> Testimonials
                        </a>
                        <a href="research.php" class="dropdown-item">
                            <i data-lucide="book-open" class="w-4 h-4"></i> Research
                        </a>
                        <a href="blog.php" class="dropdown-item">
                            <i data-lucide="file-text" class="w-4 h-4"></i> Blog
                        </a>
                        <a href="faqs.php" class="dropdown-item">
                            <i data-lucide="help-circle" class="w-4 h-4"></i> FAQs
                        </a>
                        <a href="tms-quiz.php" class="dropdown-item">
                            <i data-lucide="award" class="w-4 h-4"></i> Take Quiz
                        </a>
                    </div>
                </div>

                <a href="contact-us.php" class="nav-btn">
                  Contact
                </a>
            </nav>

            <!-- Phone Button -->
            <div class="phone-buttons">
                <a href="tel:760-760-5675" class="phone-btn phone-icon-only">
                    <i data-lucide="phone" class="w-4 h-4"></i>
                </a>
                <a href="tel:760-760-5675" class="phone-btn phone-with-text">
                    <i data-lucide="phone" class="w-4 h-4"></i> 760-760-5675
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()" aria-label="Toggle menu">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-overlay" class="mobile-overlay" onclick="toggleMobileMenu()"></div>
<div id="mobile-menu" class="mobile-menu">
    <div class="mobile-menu-header">
        <span class="mobile-menu-title">Menu</span>
        <button onclick="toggleMobileMenu()" aria-label="Close menu" class="mobile-close-btn">
            <i data-lucide="x" class="w-6 h-6"></i>
        </button>
    </div>

    <div class="mobile-menu-content">
        <!-- Top Links -->
        <a href="index.php" class="mobile-nav-item">
            <i data-lucide="home" class="w-5 h-5"></i>
            <span>Home</span>
        </a>
        <a href="contact-us.php" class="mobile-nav-item">
            <i data-lucide="mail" class="w-5 h-5"></i>
            <span>Contact</span>
        </a>

        <div class="mobile-divider"></div>

        <!-- ABOUT US -->
        <div class="mobile-section">
            <h3 class="mobile-section-title">ABOUT US</h3>
            <div class="mobile-nav-group">
                <a href="about.php" class="mobile-nav-item">
                    <i data-lucide="user" class="w-5 h-5"></i>
                    <span>About Karma TMS</span>
                </a>
                <a href="team.php" class="mobile-nav-item">
                    <i data-lucide="users" class="w-5 h-5"></i>
                    <span>Our Team</span>
                </a>
            </div>
        </div>

        <div class="mobile-divider"></div>

        <!-- BRAIN -->
        <div class="mobile-section">
            <h3 class="mobile-section-title">BRAIN</h3>
            <div class="mobile-nav-group">
                <a href="tms-therapy.php" class="mobile-nav-item">
                    <i data-lucide="brain" class="w-5 h-5"></i>
                    <span>TMS Therapy</span>
                </a>
                <a href="prtms.php" class="mobile-nav-item">
                    <i data-lucide="stethoscope" class="w-5 h-5"></i>
                    <span>PrTMS</span>
                </a>
                <a href="brain-mapping.php" class="mobile-nav-item">
                    <i data-lucide="activity" class="w-5 h-5"></i>
                    <span>Brain Mapping</span>
                </a>
                <a href="medication-management.php" class="mobile-nav-item">
                    <i data-lucide="shield" class="w-5 h-5"></i>
                    <span>Medication Management</span>
                </a>
            </div>
        </div>

        <div class="mobile-divider"></div>

       
        <a href="https://www.braintunetms.com/" target="_blank" class="mobile-nav-item">
            <i data-lucide="sparkles" class="w-5 h-5"></i>
            <span>Brain Tune Exomind</span>
        </a>

        <div class="mobile-divider"></div>

        <!-- CONDITIONS -->
        <div class="mobile-section">
            <h3 class="mobile-section-title">CONDITIONS</h3>
            <div class="mobile-nav-group">
                <a href="depression.php" class="mobile-nav-item">
                    <i data-lucide="heart" class="w-5 h-5"></i>
                    <span>Depression</span>
                </a>
                <a href="anxiety.php" class="mobile-nav-item">
                    <i data-lucide="shield-check" class="w-5 h-5"></i>
                    <span>Anxiety Disorders</span>
                </a>
                <a href="ocd.php" class="mobile-nav-item">
                    <i data-lucide="brain-circuit" class="w-5 h-5"></i>
                    <span>OCD</span>
                </a>
                <a href="ptsd.php" class="mobile-nav-item">
                    <i data-lucide="heart" class="w-5 h-5"></i>
                    <span>PTSD</span>
                </a>
                <a href="bipolar.php" class="mobile-nav-item">
                    <i data-lucide="brain" class="w-5 h-5"></i>
                    <span>Bipolar Depression</span>
                </a>
                <a href="addiction.php" class="mobile-nav-item">
                    <i data-lucide="heart" class="w-5 h-5"></i>
                    <span>Addiction Recovery</span>
                </a>
                <a href="womens-mood.php" class="mobile-nav-item">
                    <i data-lucide="heart" class="w-5 h-5"></i>
                    <span>Women's Mood</span>
                </a>
            </div>
        </div>

        <div class="mobile-divider"></div>

        <!-- LOCATIONS -->
        <div class="mobile-section">
            <h3 class="mobile-section-title">LOCATIONS</h3>
            <div class="mobile-nav-group">
                <a href="palm-springs.php" class="mobile-nav-item">
                    <i data-lucide="map-pin" class="w-5 h-5"></i>
                    <span>Palm Springs</span>
                </a>
                <a href="twentynine-palms.php" class="mobile-nav-item">
                    <i data-lucide="map-pin" class="w-5 h-5"></i>
                    <span>Twenty-Nine Palms</span>
                </a>
                <a href="rancho-mirage.php" class="mobile-nav-item">
                    <i data-lucide="map-pin" class="w-5 h-5"></i>
                    <span>Rancho Mirage</span>
                </a>
            </div>
        </div>

        <div class="mobile-divider"></div>

        <!-- RESOURCES -->
        <div class="mobile-section">
            <h3 class="mobile-section-title">RESOURCES</h3>
            <div class="mobile-nav-group">
                <a href="testimonials.php" class="mobile-nav-item">
                    <i data-lucide="users" class="w-5 h-5"></i>
                    <span>Testimonials</span>
                </a>
                <a href="research.php" class="mobile-nav-item">
                    <i data-lucide="book-open" class="w-5 h-5"></i>
                    <span>Research</span>
                </a>
                <a href="blog.php" class="mobile-nav-item">
                    <i data-lucide="file-text" class="w-5 h-5"></i>
                    <span>Blog</span>
                </a>
                <a href="faqs.php" class="mobile-nav-item">
                    <i data-lucide="help-circle" class="w-5 h-5"></i>
                    <span>FAQs</span>
                </a>
                <a href="tms-quiz.php" class="mobile-nav-item">
                    <i data-lucide="award" class="w-5 h-5"></i>
                    <span>Take Quiz</span>
                </a>
            </div>
        </div>

        <div class="mobile-divider"></div>

        <!-- Call Button -->
        <div class="mobile-section pb-8">
            <a href="tel:760-760-5675" class="btn btn-primary w-full justify-center text-lg py-3">
                <i data-lucide="phone" class="w-5 h-5 mr-2"></i> Call 760-760-5675
            </a>
        </div>
    </div>
</div>
