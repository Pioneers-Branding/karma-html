/**
 * Karma TMS Main JavaScript File
 * Consolidated logic for all pages to reduce file count.
 */

// ==========================================================================
// 1. Global Components (Header/Footer/Icons)
// ==========================================================================
class KarmaComponents {
    constructor() {
        this.headerPlaceholder = document.getElementById('navbar-placeholder');
        this.footerPlaceholder = document.getElementById('footer-placeholder');
        this.init();
    }

    async init() {
        const promises = [];

        if (this.headerPlaceholder) {
            promises.push(this.loadComponent('includes/header.html', this.headerPlaceholder));
        }
        if (this.footerPlaceholder) {
            promises.push(this.loadComponent('includes/footer.html', this.footerPlaceholder));
        }

        await Promise.all(promises);

        // Finalize setup
        this.setupLucide();
        this.initGlobalEffects();

        // Dispatch event for page-specific scripts that might depend on components
        document.dispatchEvent(new CustomEvent('karmaComponentsLoaded'));
    }

    async loadComponent(url, placeholder) {
        try {
            const response = await fetch(url);
            if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
            const html = await response.text();
            placeholder.innerHTML = html;
        } catch (error) {
            console.error(`Could not load component from ${url}:`, error);
        }
    }

    setupLucide() {
        if (window.lucide) {
            lucide.createIcons();
        }
    }

    initGlobalEffects() {
        // Mobile menu toggle logic
        window.toggleMobileMenu = () => {
            const menu = document.getElementById('mobile-menu');
            const overlay = document.getElementById('mobile-overlay');
            if (menu && overlay) {
                menu.classList.toggle('open');
                overlay.classList.toggle('open');
            }
        };

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (nav) {
                if (window.scrollY > 20) {
                    nav.classList.add('scrolled');
                } else {
                    nav.classList.remove('scrolled');
                }
            }
        });
    }
}


// ==========================================================================
// 2. Homepage Slider Logic
// ==========================================================================
function initHomeSlider() {
    const slides = document.querySelectorAll('.hero-slide');
    if (slides.length === 0) return;

    let currentSlide = 0;
    const indicatorsContainer = document.querySelector('.slide-indicators');

    // Create dots if they don't exist
    if (indicatorsContainer && indicatorsContainer.innerHTML === '') {
        slides.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.className = `slide-dot ${index === 0 ? 'active' : ''}`;
            dot.onclick = () => goToSlide(index);
            indicatorsContainer.appendChild(dot);
        });
    }

    window.updateSlide = function () {
        slides.forEach((slide, index) => {
            slide.classList.toggle('active', index === currentSlide);
        });
        document.querySelectorAll('.slide-dot').forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });
    }

    window.moveSlide = function (direction) {
        currentSlide = (currentSlide + direction + slides.length) % slides.length;
        window.updateSlide();
    }

    window.goToSlide = function (index) {
        currentSlide = index;
        window.updateSlide();
    }

    // Auto-advance
    setInterval(() => window.moveSlide(1), 5000);
}


// ==========================================================================
// 3. Testimonials Logic
// ==========================================================================
function initTestimonials() {
    const testimonialCard = document.getElementById('testimonial-card-react');
    const thumbnailsContainer = document.querySelector('.testimonial-thumbnails-react');
    // Also support legacy class from index.html if needed, but prefer react style
    const dotsContainer = document.querySelector('.testimonial-dots');

    if (!testimonialCard) return;

    const testimonials = [
        {
            name: "Patricia D.",
            location: "Palm Springs, CA",
            condition: "Depression",
            rating: 5,
            quote: "Depression is a miserable way to deal with life on a daily basis. When the meds don't seem to do the trick, TMS therapy is a sensible addition to treatment that has helped me in the battle."
        },
        {
            name: "Luis",
            location: "Palm Desert, CA",
            condition: "Anxiety",
            rating: 5,
            quote: "The comprehensive care I received at Karma TMS was exceptional. The staff made me feel comfortable and supported throughout my journey."
        },
        {
            name: "Lucia",
            location: "Cathedral City, CA",
            condition: "PTSD",
            rating: 5,
            quote: "TMS therapy has given me hope again. I can finally envision a future free from the weight of my symptoms."
        },
        {
            name: "Thomas M.",
            location: "Indian Wells, CA",
            condition: "OCD",
            rating: 5,
            quote: "After years of struggling, Karma TMS offered me a treatment that actually works. I'm grateful every single day."
        },
        {
            name: "Benjamin A.",
            location: "Rancho Mirage, CA",
            condition: "Bipolar Depression",
            rating: 5,
            quote: "The professional approach and cutting-edge technology at Karma TMS made all the difference in my recovery journey."
        },
        {
            name: "Nicole J.",
            location: "La Quinta, CA",
            condition: "Anxiety",
            rating: 5,
            quote: "I was skeptical at first, but the results speak for themselves. TMS therapy transformed my life in ways I never thought possible."
        },
        {
            name: "Lynette I.",
            location: "TwentyNine Palms, CA",
            condition: "Depression",
            rating: 5,
            quote: "The compassionate team at Karma TMS guided me through every step. I finally feel like myself again after years of struggle."
        }
    ];

    let currentTestimonial = 0;

    // Create dots
    if (dotsContainer) {
        dotsContainer.innerHTML = '';
        testimonials.forEach((_, i) => {
            const dot = document.createElement('button');
            dot.className = `testimonial-dot ${i === 0 ? 'active' : ''}`;
            dot.onclick = () => window.setTestimonial(i);
            dotsContainer.appendChild(dot);
        });
    }

    // Create thumbnails
    if (thumbnailsContainer) {
        thumbnailsContainer.innerHTML = '';
        testimonials.forEach((t, i) => {
            const thumb = document.createElement('button');
            thumb.className = `testimonial-thumb-react ${i === 0 ? 'active' : ''}`;
            thumb.textContent = t.name;
            thumb.onclick = () => window.setTestimonial(i);
            thumbnailsContainer.appendChild(thumb);
        });
    }

    window.updateTestimonialReact = function () {
        const t = testimonials[currentTestimonial];
        testimonialCard.style.opacity = '0';

        setTimeout(() => {
            let stars = '';
            for (let i = 0; i < t.rating; i++) {
                stars += '<i data-lucide="star" class="w-5 h-5 fill-yellow-400 text-yellow-400"></i>';
            }

            testimonialCard.innerHTML = `
                <div class="testimonial-stars-react">${stars}</div>
                <blockquote class="testimonial-quote-react">"${t.quote}"</blockquote>
                <div class="testimonial-author-react">
                    <div class="testimonial-name-react">${t.name}</div>
                    <div class="testimonial-location-react">${t.location}</div>
                    <div class="testimonial-condition-react">Treatment-Resistant ${t.condition}</div>
                </div>
            `;

            if (window.lucide) lucide.createIcons();
            testimonialCard.style.opacity = '1';

            // Update thumbnails
            if (thumbnailsContainer) {
                document.querySelectorAll('.testimonial-thumb-react').forEach((thumb, index) => {
                    thumb.classList.toggle('active', index === currentTestimonial);
                });
            }

            // Update dots
            if (dotsContainer) {
                document.querySelectorAll('.testimonial-dot').forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentTestimonial);
                });
            }
        }, 300);
    };

    window.nextTestimonial = function () {
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        window.updateTestimonialReact();
    };

    window.prevTestimonial = function () {
        currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
        window.updateTestimonialReact();
    };

    window.setTestimonial = function (index) {
        currentTestimonial = index;
        window.updateTestimonialReact();
    };

    // Initialize
    window.updateTestimonialReact();
}


// ==========================================================================
// 4. Team Page Logic
// ==========================================================================
function initTeamPage() {
    const teamGrid = document.getElementById('team-grid');
    if (!teamGrid) return;

    const teamMembers = [
        // Medical Staff
        {
            id: "keerthy-sunder",
            name: "Keerthy Sunder M.D.",
            title: "Medical Director",
            specialization: "Integrative Psychiatry & Addiction Medicine",
            category: "medical",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1759237129/KeerthySunder_srunyz.webp",
            bio: "Dr. Keerthy Sunder is a board-certified psychiatrist specializing in integrative approaches to mental health and addiction recovery. With over 15 years of experience, she combines traditional psychiatric methods with innovative treatments like TMS therapy.",
            credentials: ["M.D.", "Board Certified Psychiatrist", "Addiction Medicine Specialist"],
            experience: "15+ years in Psychiatry and Addiction Medicine",
            education: "Harvard Medical School, Johns Hopkins Residency",
            languages: ["English", "Tamil", "Hindi"],
            location: "Palm Springs, CA",
            email: "ksunder@karmatms.com",
            phone: "(760) 123-4567",
        },
        {
            id: "yucui-chen",
            name: "Yucui Chen M.D.",
            title: "Attending Psychiatrist",
            specialization: "Integrative Psychiatry & Addiction Medicine",
            category: "medical",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1759237129/YucuiChen-1_x6oiun.webp",
            bio: "Dr. Yucui Chen brings a holistic approach to psychiatric care, integrating Eastern and Western medical practices. She specializes in treatment-resistant depression and anxiety disorders using advanced TMS protocols.",
            credentials: ["M.D.", "Board Certified Psychiatrist", "TMS Specialist"],
            experience: "12+ years in Integrative Psychiatry",
            education: "University of California Medical School, UCLA Residency",
            languages: ["English", "Mandarin", "Cantonese"],
            location: "Palm Springs, CA",
            email: "ychen@karmatms.com",
        },
        {
            id: "jack-zhang",
            name: "Jack Yong Zhang D.O.",
            title: "Psychiatrist",
            specialization: "Integrative Psychiatry",
            category: "medical",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1759237108/JackYongZhang-1_u2zgfr.webp",
            bio: "Dr. Jack Yong Zhang combines traditional psychiatric training with integrative medicine approaches. He specializes in mood disorders, PTSD, and innovative neurostimulation techniques for treatment-resistant conditions.",
            credentials: ["D.O.", "Board Certified Psychiatrist", "Integrative Medicine Fellowship"],
            experience: "8+ years in Integrative Psychiatry",
            education: "Nova Southeastern University, Mount Sinai Residency",
            languages: ["English", "Mandarin"],
            location: "Palm Springs, CA",
            email: "jzhang@karmatms.com",
        },
        {
            id: "todd-born",
            name: "Todd Born ND",
            title: "Naturopathic Doctor",
            specialization: "Naturopathic Medicine",
            category: "medical",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1759237116/ToddBornND-1_ki6d5k.webp",
            bio: "Dr. Todd Born provides naturopathic support for mental health conditions, focusing on nutritional psychiatry, herbal medicine, and lifestyle interventions that complement conventional psychiatric treatments.",
            credentials: ["N.D.", "Licensed Naturopathic Doctor", "Mental Health Specialist"],
            experience: "12+ years in Naturopathic Medicine",
            education: "Bastyr University College of Natural Health Arts & Sciences",
            languages: ["English"],
            location: "Palm Springs, CA",
            email: "tborn@karmatms.com",
        },
        {
            id: "punit-patel",
            name: "Punit Patel PA-C",
            title: "Physician Associate",
            specialization: "Psychiatric Care",
            category: "medical",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1759237054/PunitPatel1_plpekd.webp",
            bio: "Punit Patel PA-C specializes in psychiatric care and medication management. He provides thorough evaluations and works collaboratively with patients to develop personalized treatment plans that address their unique mental health needs.",
            credentials: ["PA-C", "Master of Physician Assistant Studies", "Psychiatric Care Specialist"],
            experience: "6+ years in Psychiatric Care",
            education: "Western University PA Program",
            languages: ["English", "Hindi", "Gujarati"],
            location: "Palm Springs, CA",
            email: "ppatel@karmatms.com",
        },
        // Administrative Staff
        {
            id: "joshua-smith",
            name: "Joshua Smith",
            title: "Practice Manager",
            specialization: "Practice Director",
            category: "administrative",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1759237118/JoshuaSmith-768x770_ai3ese.png",
            bio: "Joshua Smith manages day-to-day practice operations, patient scheduling, and staff coordination. His attention to detail and commitment to patient care excellence ensures smooth clinic operations and positive patient experiences.",
            credentials: ["Healthcare Administration Certificate", "Practice Management Specialist"],
            experience: "8+ years in Practice Management",
            education: "California State University",
            languages: ["English", "Spanish"],
            location: "Palm Springs, CA",
            email: "jsmith@karmatms.com",
        },
        {
            id: "charles",
            name: "Charles Vigilia",
            title: "TMS Neurotechnologist",
            specialization: "TMS Technology & Patient Care",
            category: "administrative",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763966552/charles_x24lft.jpg",
            bio: "Charles Vigilia specializes in TMS therapy delivery and patient support throughout treatment. His technical expertise and compassionate care approach ensure patients receive optimal TMS treatments in a comfortable environment.",
            credentials: ["TMS Technician Certified", "Neurostimulation Specialist", "Patient Care Certified"],
            experience: "5+ years in TMS Technology",
            education: "Desert Regional Medical Center Training Program",
            languages: ["English", "Spanish"],
            location: "Palm Springs, CA",
            email: "cvigilia@karmatms.com",
        },
        {
            id: "amber",
            name: "Amber",
            title: "TMS Neurotechnologist",
            specialization: "TMS Technology & Patient Care",
            category: "administrative",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1770035167/amber_p288ll.png",
            bio: "Amber specializes in TMS therapy delivery and patient support throughout treatment. Her technical expertise and compassionate care approach ensure patients receive optimal TMS treatments in a comfortable environment.",
            credentials: ["TMS Technician Certified", "Neurostimulation Specialist", "Patient Care Certified"],
            experience: "5+ years in TMS Technology",
            education: "Desert Regional Medical Center Training Program",
            languages: ["English", "Spanish"],
            location: "Palm Springs, CA",
            email: "amber@karmatms.com",
        },
    ];

    let activeFilter = 'all';
    const filtersGrid = document.getElementById('filters-grid');
    const noResults = document.getElementById('no-results');

    // Make functions global for inline button calls if needed, or attach events
    // For cleaner code, we attach events where possible, but `openTeamModal` needs to be global
    window.openTeamModal = function (memberId) {
        const member = teamMembers.find(m => m.id === memberId);
        if (!member) return;

        const modal = document.getElementById('team-modal');
        const modalContent = document.getElementById('modal-content-area');
        const gradientClass = member.category === 'medical' ? 'bg-gradient-medical' : 'bg-gradient-administrative';

        modalContent.innerHTML = `
            <div class="modal-header-custom">
                <div class="modal-image-wrapper">
                    <img src="${member.image}" alt="${member.name}" class="modal-profile-img">
                </div>
                <div class="modal-title-area">
                    <h2 class="modal-name" style="color:var(--text-main);">${member.name}</h2>
                    <p class="modal-role">${member.title}</p>
                    <div style="display:inline-flex;" class="member-specialization ${gradientClass}">${member.specialization}</div>
                </div>
            </div>
            <div class="modal-body-custom">
                <div class="modal-section">
                    <h3 class="modal-section-title">About</h3>
                    <p class="modal-bio">${member.bio}</p>
                </div>
                <div class="modal-grid">
                    ${member.experience ? `
                    <div class="modal-info-item">
                        <div class="modal-label"><i data-lucide="calendar"></i> Experience</div>
                        <div class="modal-value">${member.experience}</div>
                    </div>` : ''}
                    
                    ${member.location ? `
                    <div class="modal-info-item">
                        <div class="modal-label"><i data-lucide="map-pin"></i> Location</div>
                        <div class="modal-value">${member.location}</div>
                    </div>` : ''}

                    ${member.education ? `
                    <div class="modal-info-item full-width">
                        <div class="modal-label">Education</div>
                        <div class="modal-value">${member.education}</div>
                    </div>` : ''}

                    ${member.credentials && member.credentials.length > 0 ? `
                    <div class="modal-info-item full-width">
                        <div class="modal-label">Credentials</div>
                        <div class="modal-credentials-wrap">
                            ${member.credentials.map(c => `<span class="credential-tag" style="background:rgba(87,38,112,0.1); border:none;">${c}</span>`).join('')}
                        </div>
                    </div>` : ''}
                </div>
            </div>
        `;
        modal.classList.add('open');
        document.body.style.overflow = 'hidden';
        if (window.lucide) window.lucide.createIcons();
    };

    window.closeTeamModal = function () {
        const modal = document.getElementById('team-modal');
        if (modal) modal.classList.remove('open');
        document.body.style.overflow = '';
    }

    // Close outside click
    window.onclick = function (event) {
        const modal = document.getElementById('team-modal');
        if (event.target === modal) {
            window.closeTeamModal();
        }
    }

    function renderFilters() {
        if (!filtersGrid) return;
        filtersGrid.innerHTML = '';

        const filtersConfig = [
            { key: 'all', label: 'All Team', icon: 'users', get count() { return teamMembers.length; } },
            { key: 'medical', label: 'Medical Staff', icon: 'stethoscope', get count() { return teamMembers.filter(m => m.category === 'medical').length; } },
            { key: 'administrative', label: 'Administrative', icon: 'award', get count() { return teamMembers.filter(m => m.category === 'administrative').length; } }
        ];

        filtersConfig.forEach(filter => {
            const btn = document.createElement('button');
            const isActive = activeFilter === filter.key;
            btn.className = `team-filter-btn group ${isActive ? 'active' : ''}`;
            btn.dataset.key = filter.key;

            let gradientClass = '';
            if (filter.key === 'all') gradientClass = 'from-indigo-500 to-purple-600';
            else if (filter.key === 'medical') gradientClass = 'from-blue-500 to-purple-600';
            else if (filter.key === 'administrative') gradientClass = 'from-green-500 to-teal-600';

            btn.onclick = () => {
                activeFilter = filter.key;
                renderFilters();
                renderTeam();
            };

            const countText = `${filter.count} member${filter.count !== 1 ? 's' : ''}`;
            const badgeStyle = isActive ? 'background: rgba(255,255,255,0.2); color: white;' : 'background: #f3f4f6; color: #111827;';

            btn.innerHTML = `
                <div class="absolute inset-0 rounded-lg bg-gradient-to-r ${gradientClass} opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                <div class="relative flex items-center gap-3 w-full">
                    <i data-lucide="${filter.icon}" class="filter-icon"></i>
                    <div class="filter-text-group">
                        <span class="filter-label">${filter.label}</span>
                        <span class="filter-subtext">${countText}</span>
                    </div>
                    <span class="filter-badge" style="${badgeStyle}">${filter.count}</span>
                </div>
            `;
            filtersGrid.appendChild(btn);
        });
        if (window.lucide) window.lucide.createIcons();
    }

    function renderTeam() {
        if (!teamGrid) return;
        teamGrid.innerHTML = '';
        const filtered = activeFilter === 'all' ? teamMembers : teamMembers.filter(m => m.category === activeFilter);

        if (filtered.length === 0) {
            noResults.classList.remove('hidden');
        } else {
            noResults.classList.add('hidden');
            filtered.forEach((member, index) => {
                teamGrid.appendChild(createMemberCard(member, index));
            });
        }
        if (window.lucide) window.lucide.createIcons();
    }

    function createMemberCard(member, index) {
        const card = document.createElement('div');
        card.className = 'team-member-card group fade-in-up';
        card.style.animationDelay = `${index * 0.1}s`;

        const categoryIcon = member.category === 'medical' ? 'stethoscope' : 'user';
        const gradientClass = member.category === 'medical' ? 'bg-gradient-medical' : 'bg-gradient-administrative';
        const shouldTruncate = member.bio.length > 150;
        const credentialsHtml = member.credentials.slice(0, 2).map(c => `<span class="credential-tag">${c}</span>`).join('');
        const moreCredentials = member.credentials.length > 2 ? `<span class="credential-more">+${member.credentials.length - 2} more</span>` : '';

        card.innerHTML = `
            <div class="member-image-wrapper">
                <img src="${member.image}" alt="${member.name}" class="member-image">
                <div class="member-overlay"></div>
                <div class="category-badge-icon ${gradientClass}"><i data-lucide="${categoryIcon}" class="w-4 h-4"></i></div>
                <div class="member-info-overlay"><h3 class="member-name">${member.name}</h3><p class="member-title">${member.title}</p></div>
            </div>
            <div class="member-content">
                <div class="member-specialization ${gradientClass}">${member.specialization}</div>
                <div class="member-bio-preview">${member.bio}</div>
                ${shouldTruncate ? `<button onclick="openTeamModal('${member.id}')" class="read-more-link">Read more →</button>` : ''}
                <div class="member-footer">
                    <div class="info-row"><i data-lucide="calendar" class="w-3.5 h-3.5"></i><span>${member.experience}</span></div>
                    <div class="info-row"><i data-lucide="map-pin" class="w-3.5 h-3.5"></i><span>${member.location}</span></div>
                    <div class="credentials-wrap">${credentialsHtml}${moreCredentials}</div>
                </div>
            </div>
        `;
        return card;
    }

    renderFilters();
    renderTeam();
}


// ==========================================================================
// 5. TMS Therapy Page Logic
// ==========================================================================
function initTMSTherapyPage() {
    const indicationsGrid = document.getElementById('indications-grid');
    if (!indicationsGrid) return; // Exit if not on TMS Therapy page

    const fdaIndications = [
        { condition: "Major Depressive Disorder", year: "2008", success: "73%", icon: "brain", description: "Treatment-resistant depression after 1+ medication failures" },
        { condition: "Obsessive Compulsive Disorder", year: "2018", success: "68%", icon: "trending-up", description: "For patients who haven't responded to traditional treatments" },
        { condition: "Migraine Headaches", year: "2013", success: "65%", icon: "headphones", description: "Acute treatment with or without aura" },
        { condition: "Smoking Cessation", year: "2020", success: "61%", icon: "shield", description: "Short-term treatment for smoking cessation aid" }
    ];

    const sessionSteps = [
        { step: 1, title: "Brain Mapping", duration: "45 minutes", description: "Precise targeting using advanced qEEG technology to map your unique brain patterns and identify optimal stimulation sites.", icon: "brain", details: ["qEEG brain mapping session", "Personalized treatment planning", "Motor threshold determination", "Coil positioning calibration"] },
        { step: 2, title: "TMS Treatment", duration: "20 minutes", description: "Non-invasive magnetic pulses delivered to specific brain regions while you relax comfortably in our treatment chair.", icon: "star", details: ["Comfortable reclining position", "Magnetic coil positioning", "Gentle magnetic pulses", "Monitor vitals and comfort"] },
        { step: 3, title: "Progress Tracking", duration: "10 minutes", description: "Regular assessments to monitor your improvement and adjust treatment protocols for optimal results.", icon: "trending-up", details: ["Mood assessment scales", "Side effect monitoring", "Treatment plan adjustments", "Progress documentation"] }
    ];

    const safetyFAQs = [
        { question: "Is TMS therapy safe?", answer: "Yes, TMS is FDA-cleared and has been used safely since 2008. The most common side effect is mild scalp discomfort during treatment, which typically diminishes over time. Unlike medications, TMS has no systemic side effects and doesn't affect memory or cognition." },
        { question: "Who is not eligible for TMS?", answer: "Patients with metallic implants near the head (like cochlear implants, deep brain stimulators, or aneurysm clips), those with a history of seizures, or patients taking medications that lower seizure threshold may not be candidates. A thorough screening ensures safety." },
        { question: "What does TMS feel like?", answer: "Most patients describe TMS as a light tapping sensation on the scalp, similar to a woodpecker. The magnetic pulses may initially feel unusual, but patients typically adjust within the first few sessions. You remain fully awake and alert throughout treatment." },
        { question: "How long do results last?", answer: "Clinical studies show that 68% of patients maintain their improvement at 6 months, and 45% remain in remission at 12 months. Many patients benefit from maintenance sessions to sustain their improvement long-term." },
        { question: "Can I drive after TMS treatment?", answer: "Yes, you can drive immediately after TMS treatment. Unlike ECT, TMS doesn't affect memory, cognition, or consciousness. Most patients return to work or daily activities right after their session." },
        { question: "Does insurance cover TMS?", answer: "Most major insurance plans, including Medicare, cover TMS therapy for treatment-resistant depression. Our insurance specialists will verify your coverage and handle pre-authorization to minimize out-of-pocket costs." }
    ];

    // Render FDA Indications
    fdaIndications.forEach((item, index) => {
        const card = document.createElement('div');
        card.className = "tms-indication-card group fade-in-up";
        card.style.animationDelay = `${index * 0.1}s`;

        card.innerHTML = `
            <div class="text-center mb-4">
                <div class="tms-icon-wrapper group-hover:scale-110">
                    <i data-lucide="${item.icon}"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-900">${item.condition}</h3>
                <div class="flex justify-center items-center gap-2 text-sm flex-wrap">
                    <span class="badge-gray">FDA ${item.year}</span>
                    <span class="badge-green">${item.success} Success</span>
                </div>
            </div>
            <div class="text-gray-600 text-center text-sm flex-grow">
                <p>${item.description}</p>
            </div>
        `;
        indicationsGrid.appendChild(card);
    });

    // Render Steps
    const stepsContainer = document.getElementById('steps-container');
    if (stepsContainer) {
        sessionSteps.forEach((step, index) => {
            const isReverse = index % 2 === 1;
            const stepRow = document.createElement('div');
            stepRow.className = `flex flex-col lg:flex-row items-center gap-8 fade-in-up ${isReverse ? 'lg:flex-row-reverse' : ''}`;

            stepRow.innerHTML = `
                <div class="lg:w-1/2 w-full">
                    <div class="tms-step-card">
                        <div class="flex items-center mb-6">
                            <div class="tms-step-number">
                                ${step.step}
                            </div>
                            <div class="text-primary mr-4">
                                <i data-lucide="${step.icon}" class="w-8 h-8"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">${step.title}</h3>
                                <span class="inline-flex items-center badge-blue mt-1">
                                    <i data-lucide="clock" class="w-3 h-3 mr-1"></i>
                                    ${step.duration}
                                </span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6 text-lg">${step.description}</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            ${step.details.map(detail => `<div class="flex items-center"><i data-lucide="check-circle" class="w-5 h-5 text-green-600 mr-2 flex-shrink-0"></i><span class="text-gray-700 text-sm">${detail}</span></div>`).join('')}
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex justify-center">
                    <div class="relative">
                        <div class="tms-step-icon-large">
                             <i data-lucide="${step.icon}" class="w-16 h-16"></i>
                        </div>
                    </div>
                </div>
            `;
            stepsContainer.appendChild(stepRow);
        });
    }

    // Render FAQs
    const faqContainer = document.getElementById('faq-container');
    if (faqContainer) {
        safetyFAQs.forEach((faq, index) => {
            const faqItem = document.createElement('div');
            faqItem.className = 'tms-faq-item fade-in-up';
            faqItem.style.animationDelay = `${index * 0.1}s`;

            faqItem.innerHTML = `
                <button class="tms-faq-trigger faq-trigger">
                    <span class="pr-4">${faq.question}</span>
                    <i data-lucide="chevron-down" class="w-5 h-5 text-primary transition-transform duration-200 faq-icon"></i>
                </button>
                <div class="tms-faq-content faq-content">
                    <div class="tms-faq-inner">
                        <div class="tms-faq-answer-border">
                            ${faq.answer}
                        </div>
                    </div>
                </div>
            `;

            const trigger = faqItem.querySelector('.faq-trigger');
            const content = faqItem.querySelector('.faq-content');
            const icon = faqItem.querySelector('.faq-icon');

            trigger.onclick = () => {
                const isOpen = content.style.height !== '' && content.style.height !== '0px';
                // Close others
                document.querySelectorAll('.tms-faq-content').forEach(c => {
                    c.style.height = '0px';
                });
                document.querySelectorAll('.faq-icon').forEach(i => {
                    i.classList.remove('rotate-180');
                });

                if (!isOpen) {
                    content.style.height = content.scrollHeight + 'px';
                    icon.classList.add('rotate-180');
                } else {
                    icon.classList.remove('rotate-180');
                }
            };
            faqContainer.appendChild(faqItem);
        });
    }

    if (window.lucide) window.lucide.createIcons();
}

function initPrTMSTherapyPage() {
    // Only proceed if we are on the prTMS page (check for FAQ container)
    const faqContainer = document.getElementById('prtms-faq-container');
    if (!faqContainer) return;

    const prtmsFAQs = [
        { question: "How is prTMS different from standard TMS?", answer: "Standard TMS uses a fixed frequency (usually 10Hz) for all patients. prTMS personalizes the frequency and location of stimulation based on your individual EEG brain map, potentially leading to more targeted results." },
        { question: "Is perosnalized TMS covered by insurance?", answer: "Coverage varies. Standard TMS for depression is widely covered, but the personalized 'off-label' protocols of prTMS may often be an out-of-pocket expense. We provide detailed superbills for potential reimbursement." },
        { question: "Does it hurt?", answer: "Like standard TMS, prTMS is generally well-tolerated. You may feel a tapping sensation on your scalp. Side effects are typically mild and transient, such as a slight headache." },
        { question: "How many sessions will I need?", answer: "A typical course matches standard TMS (approx. 36 sessions), but because we adjust based on weekly EEGs, the exact number can be tailored to your progress and goals." }
    ];

    // Render FAQs
    prtmsFAQs.forEach((faq, index) => {
        const faqItem = document.createElement('div');
        faqItem.className = 'tms-faq-item'; // Reuse existing styles

        faqItem.innerHTML = `
            <button class="tms-faq-trigger faq-trigger">
                <span class="pr-4 font-semibold text-[#1f2937]">${faq.question}</span>
                <i data-lucide="chevron-down" class="w-5 h-5 text-[#8b5cf6] transition-transform duration-200 faq-icon"></i>
            </button>
            <div class="tms-faq-content faq-content">
                <div class="tms-faq-inner text-gray-600">
                    <div class="tms-faq-answer-border border-l-2 border-[#8b5cf6] pl-4">
                        ${faq.answer}
                    </div>
                </div>
            </div>
        `;

        const trigger = faqItem.querySelector('.faq-trigger');
        const content = faqItem.querySelector('.faq-content');
        const icon = faqItem.querySelector('.faq-icon');

        trigger.onclick = () => {
            const isOpen = content.style.height !== '' && content.style.height !== '0px';
            // Close others
            document.querySelectorAll('.tms-faq-content').forEach(c => {
                c.style.height = '0px';
            });
            document.querySelectorAll('.faq-icon').forEach(i => {
                i.classList.remove('rotate-180');
            });

            if (!isOpen) {
                content.style.height = content.scrollHeight + 'px';
                icon.classList.add('rotate-180');
            } else {
                icon.classList.remove('rotate-180');
            }
        };
        faqContainer.appendChild(faqItem);
    });

    if (window.lucide) window.lucide.createIcons();
}

// ==========================================================================
// 6. Initialization
// ==========================================================================
document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize Components
    window.karmaComponents = new KarmaComponents();

    // 2. Initialize Page-Specific Logic
    initHomeSlider();
    initTestimonials();
    initTeamPage();
    initTMSTherapyPage();
    initPrTMSTherapyPage(); // Initialize prTMS page
    initBlogPage(); // Initialize Blog page
});


// ==========================================================================
// 7. About Page Logic (Tabs)
// ==========================================================================
window.openTab = function (tabId) {
    // Remove active class from all buttons and panes
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active'));

    // Find the button that triggered this call. 
    // Since we are calling from onclick="openTab('id')", event.currentTarget should work if called from event handler.
    // However, to be safe if called programmatically, we might need a reference. 
    // But specific to this implementation where it's specific buttons:
    if (event && event.currentTarget) {
        event.currentTarget.classList.add('active');
    } else {
        // Fallback or if called without event context (rare here)
        // Try to find the button that targets this tabId? Not strictly necessary for this simple requirement.
    }

    const tab = document.getElementById(tabId);
    if (tab) tab.classList.add('active');
}


// ==========================================================================
// 8. Blog Page Logic
// ==========================================================================
function initBlogPage() {
    const blogGrid = document.getElementById('blog-grid');
    const tabsContainer = document.getElementById('blog-tabs');
    const loader = document.getElementById('blog-loader');
    const loadMoreContainer = document.getElementById('blog-load-more-container');
    const endMessage = document.getElementById('blog-end-message');
    const noResults = document.getElementById('blog-no-results');

    if (!blogGrid || !tabsContainer) return;

    // Data
    const blogCategories = [
        { id: "all", label: "All Posts" },
        { id: "tms-therapy", label: "TMS Therapy" },
        { id: "mental-health", label: "Mental Health" },
        { id: "research", label: "Research" },
        { id: "patient-stories", label: "Patient Stories" },
        { id: "wellness", label: "Wellness Tips" }
    ];

    const allBlogPosts = [
        {
            id: 41,
            title: "What Is PrTMS & How Does It Work? A Complete Guide by Karma TMS",
            excerpt: "Discover PrTMS (Personalized Repetitive Transcranial Magnetic Stimulation), a non-invasive, drug-free mental health treatment in Palm Springs. Learn how it works, what conditions it treats, and how it differs from traditional TMS.",
            category: "tms-therapy",
            author: "Dr. Keerthy Sunder",
            date: "February 11, 2026",
            readTime: "8 min read",
            image: "images/blog/how-successful-is-tms-treatment-banner.png",
            featured: false
        },
        {
            id: 40,
            title: "Is TMS Therapy Safe? What Patients Should Know Before Starting Treatment",
            excerpt: "Is TMS therapy safe? Discover how this FDA-cleared treatment works, its side effects, and why it's a safe option for depression in Palm Springs and Rancho Mirage.",
            category: "tms-therapy",
            author: "Dr. Keerthy Sunder",
            date: "February 9, 2026",
            readTime: "8 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1770639701/41_plj0z5.png",
            featured: false
        },
        {
            id: 39,
            title: "Top 5 TMS Therapy Clinics in Palm Springs, CA",
            excerpt: "Comparing the best TMS providers in Palm Springs. We review the top 5 clinics to help you find the right treatment for depression.",
            category: "tms-therapy",
            author: "Dr. Keerthy Sunder",
            date: "January 24, 2026",
            readTime: "8 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1770639696/40_vm3qmj.png",
            featured: false
        },
        {
            id: 38,
            title: "Is TMS a Hoax? A Deep Dive Into the Science, Myths, and Real Outcomes",
            excerpt: "Is TMS a hoax? We dive deep into the science, debunk myths, and explore the real evidence behind Transcranial Magnetic Stimulation therapy.",
            category: "tms-therapy",
            author: "Dr. Keerthy Sunder",
            date: "January 12, 2026",
            readTime: "9 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1770639695/39_vylctc.png",
            featured: false
        },
        {
            id: 37,
            title: "Who Is a Good Candidate for TMS Therapy? Complete Guide",
            excerpt: "Learn who is a good candidate for TMS therapy, eligibility criteria, benefits, risks, and how to know if TMS treatment is right for you.",
            category: "tms-therapy",
            author: "Dr. Keerthy Sunder",
            date: "January 7, 2026",
            readTime: "12 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1767775415/36_sqhczb.png",
            featured: false
        },
        {
            id: 36,
            title: "Is TMS Therapy Covered by Insurance? What You Should Know",
            excerpt: "Is TMS therapy covered by insurance? Learn eligibility, approval criteria, costs, and coverage details to access effective TMS treatment.",
            category: "tms-therapy",
            author: "Dr. Keerthy Sunder",
            date: "January 1, 2026",
            readTime: "15 min read",
            image: "images/blog/insurance-coverage-card.svg",
            featured: false
        },
        {
            id: 35,
            title: "Can You Get Disability for Depression? Understanding Your Rights, Benefits, and Treatment Options",
            excerpt: "Complete guide to disability benefits for depression, covering SSDI and SSI eligibility, application process, documentation requirements, and treatment options including TMS therapy.",
            category: "mental-health",
            author: "Dr. Keerthy Sunder",
            date: "December 2, 2025",
            readTime: "16 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1765015453/38_lkmqxw.png",
            featured: false
        },
        {
            id: 34,
            title: "Is Depression a Disability? Understanding Rights, Treatment, and Support Options",
            excerpt: "Comprehensive guide on depression as a disability, including legal rights, workplace accommodations, treatment options like TMS therapy, and support resources.",
            category: "mental-health",
            author: "Dr. Keerthy Sunder",
            date: "December 1, 2025",
            readTime: "15 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1765015452/37_kghe3l.png",
            featured: false
        },
        {
            id: 33,
            title: "Does TMS Therapy Work for Anxiety?",
            excerpt: "Discover how TMS therapy effectively treats anxiety disorders. Learn about success rates, benefits, treatment process, and what to expect from TMS for anxiety relief.",
            category: "tms-therapy",
            author: "Dr. Keerthy Sunder",
            date: "November 28, 2025",
            readTime: "14 min read",
            image: "images/blog/does-tms-work-anxiety-card.svg",
            featured: false
        },
        {
            id: 32,
            title: "How to Avoid Stress During the Holidays?",
            excerpt: "Discover practical strategies to manage holiday stress with 7 actionable tips. Learn how to maintain mental wellness during the holiday season.",
            category: "wellness",
            author: "Dr. Keerthy Sunder",
            date: "November 22, 2025",
            readTime: "10 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1764569001/33_qndz86.png",
            featured: false
        },
        {
            id: 31,
            title: "How Does ADHD Treatment Work?",
            excerpt: "Comprehensive guide to ADHD treatment including medication, behavioral therapy, CBT, and lifestyle modifications. Learn how effective ADHD management works.",
            category: "mental-health",
            author: "Dr. Keerthy Sunder",
            date: "November 15, 2025",
            readTime: "12 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1764569001/35_morbs0.png",
            featured: false
        },
        {
            id: 30,
            title: "TMS Therapy for Treatment Resistant Depression",
            excerpt: "Comprehensive guide to TMS therapy as an effective treatment for treatment-resistant depression, including success rates, benefits, and what to expect.",
            category: "tms-therapy",
            author: "karmatmsdev",
            date: "May 28, 2024",
            readTime: "14 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1764138579/32_og3ayd.png",
            featured: false
        },
        {
            id: 26,
            title: "Discover the Impact of Social Media on Your Mental Well-being",
            excerpt: "Understanding how social media affects mental health. Learn about negative effects, warning signs, and strategies for healthier social media habits.",
            category: "tms-therapy",
            author: "karmatmsdev",
            date: "August 16, 2024",
            readTime: "13 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1764138578/28_mmumyo.png",
            featured: false
        },
        {
            id: 5,
            title: "How to Help Veterans with PTSD: Therapy, TMS, and Beyond",
            excerpt: "Compassionate guide for helping veterans with PTSD, including therapy options, TMS treatment, local resources, and support strategies for families.",
            category: "mental-health",
            author: "Dr. Keerthy Sunder",
            date: "October 13, 2025",
            readTime: "17 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763033666/4_toy7pb.png",
            featured: false
        },
        {
            id: 6,
            title: "Understanding PTSD in Veterans: Signs, Symptoms, and Treatment Paths",
            excerpt: "A comprehensive guide to recognizing PTSD in war veterans and Vietnam vets, with modern treatment options including TMS therapy.",
            category: "mental-health",
            author: "Dr. Keerthy Sunder",
            date: "October 20, 2025",
            readTime: "14 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763033666/5_kvtlku.png",
            featured: false
        },
        {
            id: 7,
            title: "TMS for Anxiety in Veterans: A Promising Path Beyond Medication",
            excerpt: "Discover how TMS therapy helps veterans manage anxiety through brain regulation, offering hope beyond traditional medications.",
            category: "tms-therapy",
            author: "Dr. Keerthy Sunder",
            date: "October 27, 2025",
            readTime: "13 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763033666/6_rrkhgo.png",
            featured: false
        },
        {
            id: 10,
            title: "Why does TMS Require Multiple Sessions?",
            excerpt: "Understand why TMS therapy requires multiple sessions for lasting results. Learn about neuroplasticity, treatment protocols, and what to expect during your TMS journey.",
            category: "tms-therapy",
            author: "Dr. Keerthy Sunder",
            date: "July 22, 2025",
            readTime: "10 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/11_itsgyr.png",
            featured: false
        },
        {
            id: 11,
            title: "What are the 4 A's of Stress Management?",
            excerpt: "Discover the 4 A's of stress management: Avoid, Alter, Adapt, and Accept. Learn practical, evidence-based strategies to reduce stress and improve your mental health.",
            category: "wellness",
            author: "Dr. Keerthy Sunder",
            date: "July 11, 2025",
            readTime: "12 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/12_t62v1m.png",
            featured: false
        },
        {
            id: 12,
            title: "Is TMS Therapy Permanent?",
            excerpt: "Explore the long-term effectiveness of TMS therapy and understand how this innovative treatment can provide lasting relief from depression and other mental health conditions.",
            category: "tms-therapy",
            author: "KarmatmsAdmin",
            date: "June 24, 2025",
            readTime: "10 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/13_nl6y75.png",
            featured: false
        },
        {
            id: 13,
            title: "Is TMS Therapy Legitimate?",
            excerpt: "Learn about the scientific evidence and FDA approval behind TMS therapy, and discover why it has become a trusted treatment for depression and mental health conditions.",
            category: "tms-therapy",
            author: "KarmatmsAdmin",
            date: "June 5, 2025",
            readTime: "8 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/14_dszfwi.png",
            featured: false
        },
        {
            id: 14,
            title: "How Successful is TMS Treatment?",
            excerpt: "Discover the success rates of TMS treatment based on clinical research and real patient outcomes. Learn what factors contribute to effective TMS therapy results.",
            category: "tms-therapy",
            author: "KarmatmsAdmin",
            date: "May 28, 2025",
            readTime: "9 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/15_ym6n6b.png",
            featured: false
        },
        {
            id: 15,
            title: "The Impact of Screen Time on Mental Health",
            excerpt: "Understand how excessive screen time affects mental health and well-being. Learn practical strategies to balance digital life with mental wellness.",
            category: "mental-health",
            author: "karmatms",
            date: "February 4, 2025",
            readTime: "11 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376734/16_ekice5.png",
            featured: false
        },
        {
            id: 17,
            title: "Tech And Mental Health: The Impact Of Technology On Mental Health",
            excerpt: "Explore how technology affects mental health—both positively and negatively. Learn about social media impacts and digital wellbeing strategies.",
            category: "mental-health",
            author: "karmatms",
            date: "January 22, 2025",
            readTime: "13 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376734/18_jkbrlx.png",
            featured: false
        },
        {
            id: 18,
            title: "Mental Health First Aid: How to Help Someone in Crisis",
            excerpt: "Learn essential mental health first aid skills. Recognize crisis signs, provide immediate support, and connect people to professional help.",
            category: "mental-health",
            author: "karmatms",
            date: "January 19, 2025",
            readTime: "15 min read",
            image: "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376735/19_luad51.png",
            featured: false
        }
    ];

    // Post Links Mapping
    const postLinks = {
        5: "how-to-help-veterans-ptsd.php",
        6: "understanding-ptsd-veterans.php",
        7: "tms-anxiety-veterans.php",
        10: "why-tms-requires-multiple-sessions.php",
        11: "four-as-stress-management.php",
        12: "is-tms-therapy-permanent.php",
        13: "is-tms-therapy-legitimate.php",
        14: "how-successful-is-tms-treatment.php",
        15: "screen-time-mental-health.php",
        17: "tech-mental-health-impact.php",
        18: "mental-health-first-aid.php",
        26: "social-media-mental-wellbeing.php",
        30: "tms-therapy-for-treatment-resistant-depression.php",
        31: "how-does-adhd-treatment-work.php",
        32: "how-to-avoid-stress-during-holidays.php",
        33: "does-tms-therapy-work-for-anxiety.php",
        34: "is-depression-a-disability.php",
        35: "can-you-get-disability-for-depression.php",
        36: "is-tms-therapy-covered-by-insurance.php",
        37: "who-is-a-good-candidate-for-tms-therapy.php",
        38: "is-tms-a-hoax.php",
        39: "top-tms-clinics-palm-springs.php",
        40: "is-tms-therapy-safe.php",
        41: "what-is-prtms.php"
    };

    // State
    let activeCategory = 'all';
    let displayedPosts = [];
    let loading = false;
    let hasMore = true;
    const POSTS_PER_LOAD = 6;
    let filteredPostsCache = [];

    // Initialization
    function init() {
        renderTabs();
        updateFilteredPosts();
        loadMorePosts(); // Initial load

        // Setup Infinite Scroll
        // We use a simple scroll listener to check if the loadMoreContainer is visible
        window.addEventListener('scroll', handleScroll);
        // Also simpler usage of IntersectionObserver if available
        if (window.IntersectionObserver) {
            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting && hasMore && !loading) {
                    loadMorePosts();
                }
            }, { threshold: 0.1 });

            if (loadMoreContainer) observer.observe(loadMoreContainer);
        }
    }

    function handleScroll() {
        // Backup scroll handler logic can be added here if IO is not supported
    }

    function renderTabs() {
        tabsContainer.innerHTML = '';
        blogCategories.forEach(cat => {
            const btn = document.createElement('button');
            btn.className = `blog-tab-btn ${cat.id === activeCategory ? 'active' : ''}`;
            btn.textContent = cat.label;
            btn.onclick = () => setCategory(cat.id);
            tabsContainer.appendChild(btn);
        });
    }

    function setCategory(id) {
        if (activeCategory === id) return;
        activeCategory = id;
        displayedPosts = [];
        hasMore = true;
        renderTabs(); // Re-render to update active state
        blogGrid.innerHTML = ''; // Clear grid
        updateFilteredPosts();
        loadMorePosts();
    }

    function updateFilteredPosts() {
        // Filter
        let posts = activeCategory === 'all' ? allBlogPosts : allBlogPosts.filter(p => p.category === activeCategory);

        // Sort (Newest First)
        // Helper to parse "Month Day, Year"
        posts.sort((a, b) => new Date(b.date) - new Date(a.date));
        filteredPostsCache = posts;
    }

    function loadMorePosts() {
        if (loading || !hasMore) return;
        loading = true;
        loader.classList.remove('hidden');
        loadMoreContainer.classList.add('hidden'); // Hide scroll trigger while loading

        // Simulate network delay
        setTimeout(() => {
            const currentCount = displayedPosts.length;
            const nextBatch = filteredPostsCache.slice(currentCount, currentCount + POSTS_PER_LOAD);

            if (nextBatch.length > 0) {
                displayedPosts = [...displayedPosts, ...nextBatch];
                renderPosts(nextBatch);
            }

            loading = false;
            loader.classList.add('hidden');

            if (displayedPosts.length >= filteredPostsCache.length) {
                hasMore = false;
                loadMoreContainer.classList.add('hidden');
                endMessage.classList.remove('hidden');
            } else {
                hasMore = true;
                loadMoreContainer.classList.remove('hidden'); // Show trigger again
            }

            if (displayedPosts.length === 0) {
                noResults.classList.remove('hidden');
                endMessage.classList.add('hidden');
            } else {
                noResults.classList.add('hidden');
            }

        }, 500);
    }

    function renderPosts(posts) {
        posts.forEach((post, index) => {
            const card = document.createElement('a');
            const link = postLinks[post.id] || '#';
            card.href = link;

            // Apply blog-card class directly to the anchor to fix underlines
            card.className = "blog-card group h-full animate-fade-in-up";

            // Animation properties
            card.style.animationDuration = "0.5s";
            card.style.animationFillMode = "forwards";
            card.style.animationDelay = `${(index % POSTS_PER_LOAD) * 0.1}s`;

            card.innerHTML = `
                <div class="blog-card-image-wrapper">
                    <img src="${post.image}" alt="${post.title}" class="blog-card-image">
                    <span class="blog-card-badge">
                        ${blogCategories.find(c => c.id === post.category)?.label || post.category}
                    </span>
                </div>
                
                <div class="blog-card-content">
                    <h3 class="blog-card-title">
                        ${post.title}
                    </h3>
                    <p class="blog-card-excerpt">
                        ${post.excerpt}
                    </p>
                    
                    <div class="blog-card-footer">
                        <div class="blog-meta-row">
                            <div class="blog-meta-item">
                                <i data-lucide="user" class="w-3 h-3"></i>
                                    <span>${post.author}</span>
                            </div>
                            <div class="blog-meta-item">
                                <i data-lucide="clock" class="w-3 h-3"></i>
                                <span>${post.readTime}</span>
                            </div>
                        </div>
                        <div class="blog-action-row">
                            <span class="blog-date">${post.date}</span>
                            <span class="blog-read-more">
                                Read More <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
                            </span>
                        </div>
                    </div>
                </div>
            `;
            blogGrid.appendChild(card);
        });

        if (window.lucide) window.lucide.createIcons();
    }

    init();
}

// ==========================================================================
// 7. Global Accordion Logic (Added for Homepage FAQ)
// ==========================================================================
window.toggleAccordion = function (trigger) {
    const content = trigger.nextElementSibling;
    const isActive = trigger.classList.contains('active');

    // Close all accordions in the same container
    const category = trigger.closest('.accordion');
    if (category) {
        const allTriggers = category.querySelectorAll('.accordion-trigger');
        const allContents = category.querySelectorAll('.accordion-content');

        allTriggers.forEach(t => t.classList.remove('active'));
        allContents.forEach(c => c.classList.remove('active'));
    }

    // Toggle current
    if (!isActive) {
        trigger.classList.add('active');
        content.classList.add('active');
    }

    // Refresh icons if needed
    if (window.lucide) window.lucide.createIcons();
}

