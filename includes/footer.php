<style>
/* CSS styles for the clubbed maps in the footer to bypass caching */
.footer-grid-react {
    display: grid;
    grid-template-columns: repeat(1, 1fr) !important;
    gap: 2.5rem;
}
@media (min-width: 768px) {
    .footer-grid-react {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}
@media (min-width: 1024px) {
    .footer-grid-react {
        grid-template-columns: repeat(4, 1fr) !important;
    }
}

.footer-maps-row {
    margin-top: 4rem;
    padding-top: 4rem;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
}

.footer-maps-section-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 2rem;
    text-align: left;
    letter-spacing: 0.05em;
    text-transform: uppercase;
}

.footer-maps-grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr) !important;
    gap: 2rem;
}

@media (min-width: 768px) {
    .footer-maps-grid {
        grid-template-columns: repeat(3, 1fr) !important;
    }
}

.footer-map-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(168, 85, 247, 0.15);
    border-radius: 1rem;
    padding: 1.25rem;
    transition: all 0.3s ease;
    backdrop-filter: blur(8px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.footer-map-card:hover {
    transform: translateY(-5px);
    border-color: rgba(168, 85, 247, 0.4);
    box-shadow: 0 10px 25px -5px rgba(168, 85, 247, 0.15);
}

.footer-map-header {
    display: flex;
    gap: 0.75rem;
    align-items: flex-start;
    margin-bottom: 1.25rem;
}

.footer-map-icon {
    width: 1.25rem;
    height: 1.25rem;
    color: #a855f7;
    margin-top: 0.2rem;
    flex-shrink: 0;
}

.footer-map-location-name {
    font-size: 1.125rem;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
}

.footer-map-address {
    font-size: 0.78rem;
    color: #d1d5db;
    line-height: 1.5;
    margin-top: 0.25rem;
}

.footer-map-wrapper {
    position: relative;
    width: 100%;
    height: 220px;
    border-radius: 0.75rem;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.08);
}

.footer-map-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    filter: grayscale(20%) contrast(110%);
    transition: filter 0.3s;
}

.footer-map-card:hover .footer-map-wrapper iframe {
    filter: grayscale(0%) contrast(100%);
}
</style>

<footer class="footer-react">
    <div class="container">
        <div class="footer-grid-react">
            <!-- Column 1: Company Info -->
            <div class="footer-column-info">
                <div class="footer-logo-box">
                    <img src="/assets/images/img-afca3a1262bd.png"
                         alt="Karma TMS" class="footer-logo-invert">
                </div>

                <p class="footer-description">
                    Transforming lives through advanced TMS therapy and personalized mental health care in Southern
                    California.
                </p>

                <div class="fda-badge-box">
                    <div class="fda-badge">
                        <div class="fda-pulse"></div>
                        <span class="fda-text">FDA-Approved Treatment</span>
                    </div>
                </div>

                <!-- Contact Details -->
                <div class="footer-contact-list">
                    <div class="footer-contact-item">
                        <i data-lucide="phone" class="footer-contact-icon"></i>
                        <div>
                            <div class="footer-contact-label">Call Us</div>
                            <a href="tel:760-760-5675" class="footer-contact-value">760-760-5675</a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <i data-lucide="printer" class="footer-contact-icon"></i>
                        <div>
                            <div class="footer-contact-label">Fax</div>
                            <a href="tel:760-406-5060" class="footer-contact-value">760-406-5060</a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <i data-lucide="mail" class="footer-contact-icon"></i>
                        <div>
                            <div class="footer-contact-label">Email</div>
                            <a href="mailto:contact@karmatms.com" class="footer-contact-value">contact@karmatms.com</a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <i data-lucide="clock" class="footer-contact-icon"></i>
                        <div>
                            <div class="footer-contact-label">Hours</div>
                            <div class="footer-contact-value">Mon-Fri: 9AM-5PM</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 2: Quick Links & Services -->
            <div>
                <h3 class="footer-nav-title">Quick Links</h3>
                <ul class="footer-nav-list">
                    <li><a href="index.php" class="footer-nav-link">Home</a></li>
                    <li><a href="about.php" class="footer-nav-link">About</a></li>
                    <li><a href="team.php" class="footer-nav-link">Our Team</a></li>
                    <li><a href="contact-us.php" class="footer-nav-link">Contact</a></li>
                    <li><a href="areas-we-serve.php" class="footer-nav-link">Areas We Serve</a></li>
                </ul>

                <h4 class="footer-nav-subtitle">Brain TMS</h4>
                <ul class="footer-nav-list">
                    <li><a href="tms-therapy.php" class="footer-nav-link footer-nav-link-secondary">TMS Therapy</a>
                    </li>
                    <li><a href="prtms.php" class="footer-nav-link footer-nav-link-secondary">PrTMS</a></li>
                    <li><a href="brain-mapping.php" class="footer-nav-link footer-nav-link-secondary">Brain
                            Mapping</a>
                    </li>
                    <li><a href="medication-management.php"
                            class="footer-nav-link footer-nav-link-secondary">Medication Management</a></li>
                </ul>
            </div>

            <!-- Column 3: Conditions & Resources -->
            <div>
                <h3 class="footer-nav-title">Conditions We Treat</h3>
                <ul class="footer-nav-list">
                    <li><a href="depression.php" class="footer-nav-link">Depression</a></li>
                    <li><a href="anxiety.php" class="footer-nav-link">Anxiety</a></li>
                    <li><a href="ocd.php" class="footer-nav-link">OCD</a></li>
                    <li><a href="ptsd.php" class="footer-nav-link">PTSD</a></li>
                    <li><a href="womens-mood.php" class="footer-nav-link">Women's Mood</a></li>
                </ul>

                <h4 class="footer-nav-subtitle">Resources</h4>
                <ul class="footer-nav-list">
                    <li><a href="testimonials.php" class="footer-nav-link footer-nav-link-secondary">Testimonials</a>
                    </li>
                    <li><a href="research.php" class="footer-nav-link footer-nav-link-secondary">Research</a></li>
                    <li><a href="blog.php" class="footer-nav-link footer-nav-link-secondary">Blog</a></li>
                    <li><a href="faqs.php" class="footer-nav-link footer-nav-link-secondary">FAQs</a></li>
                    <li><a href="tms-quiz.php" class="footer-nav-link footer-nav-link-secondary">Take Quiz</a></li>
                </ul>
            </div>

            <!-- Column 4: Patient Care & Legal -->
            <div>
                <h3 class="footer-nav-title">Patient Care</h3>
                <ul class="footer-nav-list">
                    <li><a href="affiliations.php" class="footer-nav-link">Affiliations</a></li>
                    <li><a href="insurance-pricing.php" class="footer-nav-link">Insurance & Pricing</a></li>
                </ul>

                <h4 class="footer-nav-subtitle">Sister Practice</h4>
                <ul class="footer-nav-list">
                    <li><a href="https://karmadocs.com/" target="_blank" rel="noopener noreferrer" class="footer-nav-link footer-nav-link-secondary">Karma Doctors & Associates</a></li>
                </ul>
                <p style="font-size: 0.78rem; color: rgba(255,255,255,0.5); margin-top: 6px; line-height: 1.5;">For comprehensive psychiatric evaluations and general mental health counseling, visit our sister practice.</p>

                <h4 class="footer-nav-subtitle" style="margin-top: 16px;">Legal & Privacy</h4>
                <ul class="footer-nav-list">
                    <li><a href="hipaa.php" class="footer-nav-link footer-nav-link-secondary">HIPAA Notice</a></li>
                    <li><a href="terms-conditions.php" class="footer-nav-link footer-nav-link-secondary">Terms & Conditions</a></li>
                    <li><a href="privacy-policy.php" class="footer-nav-link footer-nav-link-secondary">Privacy Policy</a></li>
                    <li><a href="disclaimer.php" class="footer-nav-link footer-nav-link-secondary">Medical Disclaimer</a></li>
                    <li><a href="refund-policy.php" class="footer-nav-link footer-nav-link-secondary">Refund Policy</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Locations & Maps Section -->
        <div class="footer-maps-row">
            <h3 class="footer-maps-section-title">Our Locations</h3>
            <div class="footer-maps-grid">
                <!-- Palm Springs Map Card -->
                <div class="footer-map-card">
                    <div class="footer-map-header">
                        <i data-lucide="map-pin" class="footer-map-icon"></i>
                        <div>
                            <h4 class="footer-map-location-name">Palm Springs</h4>
                            <p class="footer-map-address">
                                560 S. Paseo Dorotea, Suite 4-B<br>Palm Springs, CA 92264
                            </p>
                        </div>
                    </div>
                    <div class="footer-map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.925876722152!2d-116.50244922375673!3d33.81422587324756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80db1d8e55ea98e3%3A0x807c8a665e925f92!2sKarma%20TMS%20PC%20-%20Palm%20Springs!5e0!3m2!1sen!2sin!4v1779297634613!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Rancho Mirage Map Card -->
                <div class="footer-map-card">
                    <div class="footer-map-header">
                        <i data-lucide="map-pin" class="footer-map-icon"></i>
                        <div>
                            <h4 class="footer-map-location-name">Rancho Mirage</h4>
                            <p class="footer-map-address">
                                35400 Bob Hope Dr. Suite 206-B<br>Rancho Mirage, CA 92270
                            </p>
                        </div>
                    </div>
                    <div class="footer-map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d429.135153608562!2d-116.40525242845216!3d33.79133854907109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dafd05ddc703a3%3A0x891f7551331b4071!2sBrain%20Tune%20TMS%20-%20Rancho%20Mirage!5e0!3m2!1sen!2sin!4v1779297581443!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Twentynine Palms Map Card -->
                <div class="footer-map-card">
                    <div class="footer-map-header">
                        <i data-lucide="map-pin" class="footer-map-icon"></i>
                        <div>
                            <h4 class="footer-map-location-name">Twentynine Palms</h4>
                            <p class="footer-map-address">
                                72724 29 Palms Hwy. Suite 107-B<br>Twentynine Palms, CA 92277
                            </p>
                        </div>
                    </div>
                    <div class="footer-map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3302.410883346241!2d-116.07819942374508!3d34.13582867312575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dac751d31242d7%3A0x7d17d9e80e8a6f1a!2sKarma%20TMS%20PC%20-%2029%20Palms!5e0!3m2!1sen!2sin!4v1779297610649!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom-react">
        <div class="container">
            <div class="footer-bottom-flex">
                <div class="copyright-text">
                    © 2026 Karma TMS. All rights reserved. Licensed medical facility providing TMS therapy in
                    California.
                </div>
                <div class="footer-bottom-right">
                    <span class="certified-text">Board-Certified Psychiatrists</span>
                    <a href="conditions.php" class="sitemap-link">
                        All Conditions <i data-lucide="external-link" class="h-3 w-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
