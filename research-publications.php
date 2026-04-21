<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research & Publications | Karma TMS Clinical Studies & Global Impact</title>
    <meta name="description"
        content="Explore Karma TMS's peer-reviewed research, clinical publications, honors, and global humanitarian work led by Dr. Keerthy Sunder.">

    <?php include 'includes/header-links.php'; ?>

    <style>
        .rp-filter-badge {
            cursor: pointer;
            transition: all 0.2s ease;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
            border: 1px solid #e5e7eb;
            background-color: white;
        }

        .rp-filter-badge:hover {
            background-color: rgba(87, 38, 112, 0.08);
        }

        .rp-filter-badge.active {
            background-color: #572670;
            color: white;
            border-color: #572670;
        }

        .rp-pub-card,
        .rp-impact-card,
        .rp-mission-card {
            transition: all 0.3s ease;
        }

        .rp-pub-card:hover,
        .rp-impact-card:hover,
        .rp-mission-card:hover {
            box-shadow: 0 14px 30px rgba(87, 38, 112, 0.12);
            transform: translateY(-2px);
        }

        .rp-category-chip {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            background: rgba(87, 38, 112, 0.1);
            color: #572670;
        }

        .rp-year-chip {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
            border: 1px solid #e5e7eb;
            color: #4b5563;
        }

        .rp-award-hero {
            background: linear-gradient(135deg, #572670 0%, #8B5CF6 100%);
            border-radius: 1.25rem;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(87, 38, 112, 0.25);
        }

        .rp-award-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            min-height: 320px;
        }

        .rp-stat-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.15);
            color: white;
            padding: 0.4rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
            backdrop-filter: blur(6px);
        }

        .rp-mission-card {
            background: linear-gradient(to bottom right, white, #faf5ff);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .rp-mission-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 0.75rem;
            margin-bottom: 1.25rem;
        }

        .rp-stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: #572670;
            line-height: 1;
        }

        .rp-foundation-banner {
            background: linear-gradient(135deg, #572670 0%, #3a174d 100%);
            border-radius: 1.25rem;
            color: white;
            padding: 3rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .rp-foundation-banner::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 85% 15%, rgba(139, 92, 246, 0.35), transparent 55%);
            pointer-events: none;
        }

        .rp-foundation-logo {
            background: white;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            display: inline-block;
        }

        .rp-foundation-logo img {
            height: 48px;
            width: auto;
            display: block;
        }

        .rp-author-line {
            font-size: 0.875rem;
            color: #4b5563;
            margin-bottom: 0.25rem;
        }

        .rp-journal-line {
            font-size: 0.875rem;
            font-weight: 600;
            color: #572670;
            margin-bottom: 0.75rem;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-4 text-white"
        style="background: linear-gradient(to bottom right, #572670, rgba(87, 38, 112, 0.85));">
        <div class="container mx-auto px-4 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1 mb-5 rounded-full"
                style="background: rgba(255,255,255,0.14); backdrop-filter: blur(6px);">
                <i data-lucide="microscope" class="w-4 h-4"></i>
                <span class="text-sm font-medium">Our Research</span>
            </div>
            <h1 class="text-4xl lg:text-6xl font-bold mb-4">
                Research &amp; Publications
            </h1>
            <p class="text-xl max-w-3xl mx-auto" style="color: rgba(255, 255, 255, 0.9);">
                Explore our latest clinical findings, peer-reviewed publications, and contributions to the field of
                psychiatric medicine through innovation and global leadership.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-3 mt-8">
                <a href="#publications" class="bm-hero-btn" style="background: white; color: #572670;">
                    <i data-lucide="book-open" class="w-4 h-4 mr-2"></i>
                    Explore Research
                </a>
                <a href="#global-impact" class="bm-outline-btn"
                    style="border-color: white; color: white;">
                    <i data-lucide="globe-2" class="w-4 h-4 mr-2"></i>
                    Global Impact
                </a>
            </div>
        </div>
    </section>

    <!-- Honors & Recognition Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3">
                    Honors &amp; Recognition
                </h2>
                <p class="text-lg text-gray-600">
                    Celebrating excellence in clinical leadership and advocacy.
                </p>
            </div>

            <div class="rp-award-hero grid md:grid-cols-2 gap-0 max-w-6xl mx-auto">
                <div class="p-0">
                    <img src="https://sunderfoundation.org/wp-content/uploads/2023/03/Dr_sunder_Award_05.jpg"
                        alt="Dr. Keerthy Sunder receiving the Golden Axon Leadership Award"
                        class="rp-award-img">
                </div>
                <div class="p-8 md:p-10 text-white flex flex-col justify-center">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="rp-stat-pill"><i data-lucide="award" class="w-4 h-4"></i> 2023</span>
                        <span class="rp-stat-pill"><i data-lucide="brain" class="w-4 h-4"></i> Neuroscience</span>
                        <span class="rp-stat-pill"><i data-lucide="globe" class="w-4 h-4"></i> Global Impact</span>
                    </div>
                    <h3 class="text-2xl lg:text-3xl font-bold mb-3">
                        Golden Axon Leadership Award
                    </h3>
                    <p class="text-base mb-3" style="color: rgba(255,255,255,0.92);">
                        Society for Brain Mapping and Therapeutics (SBMT Gala)
                    </p>
                    <p class="leading-relaxed" style="color: rgba(255,255,255,0.85);">
                        Presented to Dr. Keerthy Sunder, founder of Karma TMS, this prestigious accolade recognizes
                        visionaries who have made significant contributions to raising awareness and funding for
                        neurological disorders.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Impact Areas -->
    <section id="global-impact" class="py-20" style="background-color: #faf5ff;">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3">
                    Global Impact Areas
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Karma TMS advances mental health on three interconnected fronts — science, culture, and policy.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <div class="rp-impact-card bm-benefit-card p-8 text-center">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                        style="background-color: #572670;">
                        <i data-lucide="flask-conical" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Science &amp; Innovation</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Pioneering advancements in TMS technology, EEG-guided PrTMS protocols, and personalized
                        psychiatric treatment for depression, PTSD, and concussion.
                    </p>
                </div>

                <div class="rp-impact-card bm-benefit-card p-8 text-center">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                        style="background-color: #572670;">
                        <i data-lucide="palette" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Arts &amp; Culture</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Supporting mental health awareness through partnerships with visual and performing arts
                        organizations that destigmatize care and celebrate recovery.
                    </p>
                </div>

                <div class="rp-impact-card bm-benefit-card p-8 text-center">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                        style="background-color: #572670;">
                        <i data-lucide="landmark" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Policy &amp; Advocacy</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Active leadership in global summits — including the G20-affiliated N20 Neuroscience Summit —
                        shaping the future of mental healthcare policy.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Published Research -->
    <section id="publications" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3">
                    Published Research
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Advancing the field of psychiatry through rigorous peer-reviewed studies, clinical trials, and
                    academic contributions.
                </p>
            </div>

            <!-- PubMed Bibliography Card -->
            <div class="bm-benefit-card overflow-hidden shadow-xl mb-12 max-w-5xl mx-auto p-0">
                <div class="p-6 text-white flex flex-col md:flex-row md:items-center md:justify-between gap-4"
                    style="background-color: #572670;">
                    <div>
                        <h3 class="text-xl font-bold flex items-center gap-2">
                            <i data-lucide="library" class="w-5 h-5"></i>
                            Full Bibliography on PubMed
                        </h3>
                        <p class="text-sm mt-1" style="color: rgba(255,255,255,0.85);">
                            24+ peer-reviewed publications authored or co-authored by Dr. Keerthy Sunder.
                        </p>
                    </div>
                    <a href="https://pubmed.ncbi.nlm.nih.gov/?term=Sunder+K" target="_blank" rel="noopener noreferrer"
                        class="bm-hero-btn" style="background: white; color: #572670;">
                        <i data-lucide="external-link" class="w-4 h-4 mr-2"></i>
                        View Full Bibliography
                    </a>
                </div>
            </div>

            <!-- Filter Badges -->
            <div class="mb-8">
                <div class="flex flex-wrap gap-2 justify-center" id="rpFilterBadges"></div>
            </div>

            <!-- Publications Grid -->
            <div id="rpPublicationsGrid" class="grid md:grid-cols-2 gap-6 max-w-6xl mx-auto"></div>
        </div>
    </section>

    <!-- Mission / Impact Beyond Borders -->
    <section class="py-20" style="background-color: #faf5ff;">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="rp-category-chip mb-3">Our Mission</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3 mt-3">
                    Impact Beyond Borders
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We believe mental health is a fundamental human right. Our outreach programs span continents,
                    bringing expertise to where it's needed most.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 max-w-6xl mx-auto">
                <!-- Ukraine Medical Relief Network -->
                <div class="rp-mission-card">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80"
                        alt="Humanitarian medical relief" class="rp-mission-img">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="rp-category-chip">Humanitarian</span>
                        <span class="rp-year-chip">Active Mission</span>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Ukraine Medical Relief Network</h3>
                    <p class="text-gray-700 leading-relaxed mb-5">
                        Coordinating over 100,000 medical professionals to provide neurocritical care training and
                        essential supplies to frontline doctors.
                    </p>
                    <div class="grid grid-cols-3 gap-4 pt-4 border-t border-gray-200">
                        <div class="text-center">
                            <div class="rp-stat-number">100k+</div>
                            <div class="text-xs text-gray-600 mt-1">Doctors Networked</div>
                        </div>
                        <div class="text-center">
                            <div class="rp-stat-number">$5M+</div>
                            <div class="text-xs text-gray-600 mt-1">Aid Delivered</div>
                        </div>
                        <div class="text-center">
                            <div class="rp-stat-number">Global</div>
                            <div class="text-xs text-gray-600 mt-1">Coverage</div>
                        </div>
                    </div>
                </div>

                <!-- N20 Summit -->
                <div class="rp-mission-card">
                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80"
                        alt="N20 Neuroscience Summit" class="rp-mission-img">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="rp-category-chip">Policy Summit</span>
                        <span class="rp-year-chip">New Delhi · 2023</span>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">N20 Neuroscience Summit</h3>
                    <p class="text-gray-700 leading-relaxed mb-5">
                        Leading discussions on Brain &amp; Spine Health innovation with global policymakers at the
                        G20-affiliated Neuroscience20 summit, advocating for equitable access to modern psychiatric
                        care.
                    </p>
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-200">
                        <i data-lucide="users-round" class="w-5 h-5" style="color: #572670;"></i>
                        <span class="text-sm text-gray-700">Delegates from 40+ countries</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Foundation Banner -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="rp-foundation-banner max-w-6xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8 items-center relative" style="z-index: 1;">
                    <div class="md:col-span-2">
                        <div class="rp-foundation-logo mb-5">
                            <img src="https://sunderfoundation.org/wp-content/uploads/2022/11/SF_logo_H_web.png"
                                alt="Sunder Foundation">
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold mb-3">
                            Healing Communities. Empowering Minds.
                        </h3>
                        <p class="leading-relaxed" style="color: rgba(255,255,255,0.9);">
                            The philanthropic partner of Karma TMS — dedicated to educational grants, mental health
                            awareness, scientific research funding, support for the arts, and social entrepreneurship on
                            a global scale.
                        </p>
                    </div>
                    <div class="text-center md:text-right">
                        <a href="https://sunderfoundation.org/" target="_blank" rel="noopener noreferrer"
                            class="bm-hero-btn" style="background: white; color: #572670;">
                            Visit Foundation
                            <i data-lucide="arrow-up-right" class="w-4 h-4 ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        const rpPublications = [
            {
                title: 'Preliminary Observations of Personalized Repetitive Magnetic Stimulation (PrTMS) Guided by EEG Spectra for Concussion',
                authors: 'Makale MT, Sunder K, et al.',
                journal: 'Brain Sciences',
                date: 'August 2023',
                year: '2023',
                category: 'tms',
                categoryLabel: 'TMS / Neurostimulation',
                pmid: '37626535',
                abstract: 'A comprehensive study on the efficacy of personalized rTMS protocols in treating concussive symptoms with EEG guidance, demonstrating significant improvements in patient outcomes.',
                link: 'https://pubmed.ncbi.nlm.nih.gov/37626535/'
            },
            {
                title: 'Addiction and Reward Deficiency Syndrome (RDS): A Gene-Based Therapeutic Strategy?',
                authors: 'Bowirrat A, Sunder K, et al.',
                journal: 'Addiction Medicine',
                date: 'November 2023',
                year: '2023',
                category: 'addiction',
                categoryLabel: 'Addiction',
                pmid: '38050640',
                abstract: 'Exploring gene-based therapeutic strategies for Reward Deficiency Syndrome and its implication in addiction treatment, proposing new pathways for intervention.',
                link: 'https://pubmed.ncbi.nlm.nih.gov/38050640/'
            },
            {
                title: 'Genetic Addiction Risk Score (GARS): Clinical Utility in Reward Deficiency Syndrome',
                authors: 'Blum K, Sunder K, et al.',
                journal: 'Medical Archives',
                date: 'September 2023',
                year: '2023',
                category: 'addiction',
                categoryLabel: 'Addiction',
                pmid: '37885438',
                abstract: 'Analyzing the clinical utility of GARS in diagnosing and treating Reward Deficiency Syndrome, offering a precision-medicine approach to improved patient care.',
                link: 'https://pubmed.ncbi.nlm.nih.gov/37885438/'
            },
            {
                title: 'Impact of Neuro-psychiatric Disorders on the Global Economy',
                authors: 'Blum K, Sunder K, et al.',
                journal: 'Psychology',
                date: 'March 2023',
                year: '2023',
                category: 'policy',
                categoryLabel: 'Policy',
                pmid: '37560184',
                abstract: 'A critical analysis of the economic burden of neuro-psychiatric disorders on a global scale, highlighting the cost-effectiveness of early intervention.',
                link: 'https://pubmed.ncbi.nlm.nih.gov/37560184/'
            },
            {
                title: 'Exploratory Analysis of Dopamine D2 Agonist Therapy',
                authors: 'Blum K, Sunder K, Badgaiyan RD',
                journal: 'Pharmacology',
                date: 'February 2023',
                year: '2023',
                category: 'pharmacology',
                categoryLabel: 'Pharmacology',
                pmid: '37361347',
                abstract: 'Investigating the potential of Dopamine D2 Agonist Therapy in treating various psychiatric conditions, emphasizing mechanism of action and clinical response.',
                link: 'https://pubmed.ncbi.nlm.nih.gov/37361347/'
            }
        ];

        const rpCategories = [
            { value: 'all', label: 'All Publications' },
            { value: 'tms', label: 'TMS / Neurostimulation' },
            { value: 'addiction', label: 'Addiction' },
            { value: 'pharmacology', label: 'Pharmacology' },
            { value: 'policy', label: 'Policy' }
        ];

        let rpSelected = 'all';

        function rpRenderCard(p) {
            return `
                <article class="rp-pub-card bm-benefit-card p-6" style="text-align:left;">
                    <div class="flex items-center justify-between mb-3 flex-wrap gap-2">
                        <span class="rp-category-chip">${p.categoryLabel}</span>
                        <span class="rp-year-chip">${p.date}</span>
                    </div>
                    <h3 class="font-bold text-lg text-gray-900 mb-2 leading-tight">${p.title}</h3>
                    <p class="rp-author-line">By ${p.authors}</p>
                    <p class="rp-journal-line">${p.journal}${p.pmid ? ' · PMID ' + p.pmid : ''}</p>
                    <p class="text-gray-700 text-sm leading-relaxed mb-4">${p.abstract}</p>
                    <a href="${p.link}" target="_blank" rel="noopener noreferrer"
                        class="bm-outline-btn w-full inline-flex items-center justify-center">
                        View Article
                        <i data-lucide="external-link" class="ml-2 w-4 h-4"></i>
                    </a>
                </article>
            `;
        }

        function rpRenderBadges() {
            const html = rpCategories.map(c => {
                const active = rpSelected === c.value ? 'active' : '';
                return `<span class="rp-filter-badge ${active}" onclick="rpSelectCategory('${c.value}')">${c.label}</span>`;
            }).join('');
            document.getElementById('rpFilterBadges').innerHTML = html;
        }

        function rpRenderGrid() {
            const filtered = rpSelected === 'all'
                ? rpPublications
                : rpPublications.filter(p => p.category === rpSelected);
            document.getElementById('rpPublicationsGrid').innerHTML = filtered.map(rpRenderCard).join('');
            if (window.lucide) lucide.createIcons();
        }

        function rpSelectCategory(value) {
            rpSelected = value;
            rpRenderBadges();
            rpRenderGrid();
        }

        document.addEventListener('DOMContentLoaded', () => {
            rpRenderBadges();
            rpRenderGrid();
            if (window.lucide) lucide.createIcons();
        });
    </script>
</body>

</html>
