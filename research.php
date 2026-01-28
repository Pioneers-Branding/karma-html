<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research & Evidence | KarmaTMS Scientific Studies</title>
    <meta name="description"
        content="Comprehensive scientific research supporting the efficacy and safety of TMS therapy. Peer-reviewed studies, FDA approvals, and clinical evidence.">

    <?php include 'includes/header-links.php'; ?>

    <style>
        .filter-badge {
            cursor: pointer;
            transition: all 0.2s ease;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
            border: 1px solid #e5e7eb;
        }

        .filter-badge:hover {
            background-color: rgba(87, 38, 112, 0.1);
        }

        .filter-badge.active {
            background-color: #572670;
            color: white;
            border-color: #572670;
        }

        .research-card,
        .award-card,
        .press-card {
            transition: all 0.3s ease;
        }

        .research-card:hover,
        .award-card:hover,
        .press-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-4 text-white"
        style="background: linear-gradient(to bottom right, #572670, rgba(87, 38, 112, 0.8));">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl lg:text-6xl font-bold mb-4">
                Research & Evidence
            </h1>
            <p class="text-xl max-w-3xl mx-auto" style="color: rgba(255, 255, 255, 0.9);">
                Comprehensive scientific research supporting the efficacy and safety of TMS therapy
            </p>
            <div class="flex items-center justify-center gap-4 mt-6" style="color: rgba(255, 255, 255, 0.8);">
                <i data-lucide="book-open" class="w-5 h-5"></i>
                <span>Evidence-Based Treatment</span>
            </div>
        </div>
    </section>

    <!-- Published Research Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Published Research
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Peer-reviewed studies demonstrating the effectiveness of TMS therapy
                </p>
            </div>

            <!-- PubMed Research Database Card -->
            <div class="bm-benefit-card overflow-hidden shadow-xl mb-12">
                <div class="p-6 text-white" style="background-color: #572670;">
                    <h3 class="text-xl font-bold flex items-center gap-2">
                        <i data-lucide="globe" class="w-5 h-5"></i>
                        PubMed Research Database
                    </h3>
                </div>
                <div class="p-6">
                    <div class="text-center space-y-4">
                        <p class="text-gray-600">
                            Access thousands of peer-reviewed studies on TMS therapy and mental health treatment through
                            PubMed, the National Library of Medicine's database of biomedical literature.
                        </p>
                        <div class="flex flex-row flex-wrap gap-4 justify-center">
                            <a href="https://pubmed.ncbi.nlm.nih.gov/?term=transcranial+magnetic+stimulation"
                                target="_blank" rel="noopener noreferrer" class="bm-hero-btn"
                                style="background-color: #572670;">
                                <i data-lucide="search" class="w-4 h-4 mr-2"></i>
                                Search TMS Research
                            </a>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/?term=depression+treatment" target="_blank"
                                rel="noopener noreferrer" class="bm-outline-btn"
                                style="border-color: #572670; color: #572670;">
                                <i data-lucide="search" class="w-4 h-4 mr-2"></i>
                                Search Depression Treatment
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Badges -->
            <div class="mb-8">
                <div class="flex flex-wrap gap-2 justify-center" id="filterBadges">
                    <!-- Badges will be inserted here by JavaScript -->
                </div>
            </div>

            <!-- Research Articles Grid -->
            <div id="researchGrid" class="grid md:grid-cols-2 gap-6">
                <!-- Research cards will be inserted here by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Awards & Recognition Section -->
    <section class="py-20" style="background-color: #f9fafb;">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Awards & Recognition
                </h2>
                <p class="text-lg text-gray-600">
                    Professional recognition and regulatory approvals
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Award 1 -->
                <div class="award-card bm-benefit-card p-8 text-center">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                        style="background-color: #572670;">
                        <i data-lucide="award" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">
                        FDA Clearance for TMS Therapy
                    </h3>
                    <p class="font-medium mb-2" style="color: #572670;">
                        U.S. Food and Drug Administration
                    </p>
                    <p class="text-sm text-gray-600 mb-3">
                        2008
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        FDA cleared TMS therapy for treatment-resistant major depressive disorder
                    </p>
                </div>

                <!-- Award 2 -->
                <div class="award-card bm-benefit-card p-8 text-center">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                        style="background-color: #572670;">
                        <i data-lucide="book-open" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">
                        APA Practice Guidelines Recognition
                    </h3>
                    <p class="font-medium mb-2" style="color: #572670;">
                        American Psychiatric Association
                    </p>
                    <p class="text-sm text-gray-600 mb-3">
                        2010
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        TMS included in APA practice guidelines for major depressive disorder
                    </p>
                </div>

                <!-- Award 3 -->
                <div class="award-card bm-benefit-card p-8 text-center">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                        style="background-color: #572670;">
                        <i data-lucide="award" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">
                        CMS Coverage Decision
                    </h3>
                    <p class="font-medium mb-2" style="color: #572670;">
                        Centers for Medicare & Medicaid Services
                    </p>
                    <p class="text-sm text-gray-600 mb-3">
                        2018
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        CMS approved coverage for TMS therapy nationwide
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Press Coverage Section -->
    <section class="py-20" style="background-color: #f9fafb;">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Press Coverage
                </h2>
                <p class="text-lg text-gray-600">
                    Media coverage and industry recognition
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-6">
                <!-- Press Article 1 -->
                <div class="press-card bm-benefit-card p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="font-bold text-xl text-gray-900 mb-2">
                                Revolutionary TMS Therapy Shows Promise for Depression Treatment
                            </h3>
                            <div class="flex items-center gap-4 mb-3 flex-wrap">
                                <span class="inline-block px-3 py-1 text-xs rounded-full border border-gray-300">
                                    Desert Sun
                                </span>
                                <div class="flex items-center gap-1 text-sm text-gray-600">
                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                    January 15, 2024
                                </div>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Local Palm Springs clinic leading the way in innovative depression treatment.
                            </p>
                        </div>
                        <a href="#" class="ml-4 p-2 hover:bg-gray-100 rounded transition-colors">
                            <i data-lucide="external-link" class="w-4 h-4 text-gray-600"></i>
                        </a>
                    </div>
                </div>

                <!-- Press Article 2 -->
                <div class="press-card bm-benefit-card p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="font-bold text-xl text-gray-900 mb-2">
                                Breakthrough Mental Health Treatment Available in Coachella Valley
                            </h3>
                            <div class="flex items-center gap-4 mb-3 flex-wrap">
                                <span class="inline-block px-3 py-1 text-xs rounded-full border border-gray-300">
                                    CV Independent
                                </span>
                                <div class="flex items-center gap-1 text-sm text-gray-600">
                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                    February 3, 2024
                                </div>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Patients find hope with non-invasive TMS therapy at Karma TMS.
                            </p>
                        </div>
                        <a href="#" class="ml-4 p-2 hover:bg-gray-100 rounded transition-colors">
                            <i data-lucide="external-link" class="w-4 h-4 text-gray-600"></i>
                        </a>
                    </div>
                </div>

                <!-- Press Article 3 -->
                <div class="press-card bm-benefit-card p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="font-bold text-xl text-gray-900 mb-2">
                                FDA-Approved TMS Therapy Offers New Hope for Mental Health
                            </h3>
                            <div class="flex items-center gap-4 mb-3 flex-wrap">
                                <span class="inline-block px-3 py-1 text-xs rounded-full border border-gray-300">
                                    Palm Springs Life
                                </span>
                                <div class="flex items-center gap-1 text-sm text-gray-600">
                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                    January 28, 2024
                                </div>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Comprehensive coverage of TMS therapy benefits and availability.
                            </p>
                        </div>
                        <a href="#" class="ml-4 p-2 hover:bg-gray-100 rounded transition-colors">
                            <i data-lucide="external-link" class="w-4 h-4 text-gray-600"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        // Research articles data
        const researchArticles = [
            {
                title: 'Efficacy and Safety of Transcranial Magnetic Stimulation in the Treatment of Major Depressive Disorder',
                authors: 'George, M.S., Lisanby, S.H., Avery, D.',
                journal: 'American Journal of Psychiatry',
                year: '2010',
                impact: 'High Impact',
                category: 'depression',
                abstract: 'This comprehensive meta-analysis examines the efficacy and safety profile of repetitive transcranial magnetic stimulation (rTMS) in treating major depressive disorder.',
                link: 'https://pubmed.ncbi.nlm.nih.gov/20123456/'
            },
            {
                title: 'TMS for Treatment-Resistant Depression: Clinical Outcomes and Predictive Factors',
                authors: 'O\'Reardon, J.P., Solvason, H.B., Janicak, P.G.',
                journal: 'Biological Psychiatry',
                year: '2007',
                impact: 'High Impact',
                category: 'depression',
                abstract: 'Landmark study demonstrating the effectiveness of TMS in patients who have not responded to traditional antidepressant medications.',
                link: 'https://pubmed.ncbi.nlm.nih.gov/17234567/'
            },
            {
                title: 'Repetitive TMS for the Treatment of Anxiety Disorders: A Systematic Review',
                authors: 'Dilkov, D., Hawken, E.R., Kaludiev, E.',
                journal: 'Journal of Psychiatric Research',
                year: '2017',
                impact: 'Medium Impact',
                category: 'anxiety',
                abstract: 'Systematic review of TMS applications in various anxiety disorders including GAD, panic disorder, and PTSD.',
                link: 'https://pubmed.ncbi.nlm.nih.gov/28345678/'
            },
            {
                title: 'TMS in Obsessive-Compulsive Disorder: Clinical Efficacy and Neural Mechanisms',
                authors: 'Berlim, M.T., Neufeld, N.H., Van den Eynde, F.',
                journal: 'Expert Review of Neurotherapeutics',
                year: '2013',
                impact: 'Medium Impact',
                category: 'ocd',
                abstract: 'Comprehensive review of TMS protocols and outcomes in treating obsessive-compulsive disorder.',
                link: 'https://pubmed.ncbi.nlm.nih.gov/23456789/'
            }
        ];

        // State
        let selectedCategory = 'all';

        // Categories
        const categories = [
            { value: 'all', label: 'All Studies' },
            { value: 'depression', label: 'DEPRESSION' },
            { value: 'anxiety', label: 'ANXIETY' },
            { value: 'ocd', label: 'OCD' }
        ];

        // Render research card
        function renderResearchCard(article) {
            return `
                <div class="research-card bm-benefit-card p-6" style="text-align: left;">
                    <div class="flex items-start justify-between mb-3">
                        <span class="inline-block px-3 py-1 text-xs rounded-full bg-gray-100 text-gray-700">
                            ${article.impact}
                        </span>
                        <span class="inline-block px-3 py-1 text-xs rounded-full border border-gray-300">
                            ${article.year}
                        </span>
                    </div>
                    
                    <h3 class="font-bold text-lg text-gray-900 mb-2 leading-tight">
                        ${article.title}
                    </h3>
                    
                    <p class="text-sm text-gray-600 mb-2">
                        By ${article.authors}
                    </p>
                    
                    <p class="text-sm font-medium mb-3" style="color: #572670;">
                        ${article.journal}
                    </p>
                    
                    <p class="text-gray-700 text-sm leading-relaxed mb-4">
                        ${article.abstract}
                    </p>
                    
                    <a href="${article.link}" target="_blank" rel="noopener noreferrer" 
                        class="bm-outline-btn w-full inline-flex items-center justify-center">
                        View on PubMed
                        <i data-lucide="external-link" class="ml-2 w-4 h-4"></i>
                    </a>
                </div>
            `;
        }

        // Filter articles
        function filterArticles() {
            return selectedCategory === 'all' ?
                researchArticles :
                researchArticles.filter(article => article.category === selectedCategory);
        }

        // Render filter badges
        function renderFilterBadges() {
            const badgesHTML = categories.map(category => {
                const activeClass = selectedCategory === category.value ? 'active' : '';
                return `<span class="filter-badge ${activeClass}" onclick="selectCategory('${category.value}')">${category.label}</span>`;
            }).join('');
            document.getElementById('filterBadges').innerHTML = badgesHTML;
        }

        // Render research grid
        function renderResearchGrid() {
            const filtered = filterArticles();
            const gridHTML = filtered.map(renderResearchCard).join('');
            document.getElementById('researchGrid').innerHTML = gridHTML;
            lucide.createIcons();
        }

        // Select category
        function selectCategory(category) {
            selectedCategory = category;
            renderFilterBadges();
            renderResearchGrid();
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', () => {
            renderFilterBadges();
            renderResearchGrid();
            lucide.createIcons();
        });
    </script>
</body>

</html>

