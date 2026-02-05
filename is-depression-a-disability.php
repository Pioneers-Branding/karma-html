<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is Depression a Disability? | Karma TMS Blog</title>
    <meta name="description"
        content="Learn whether depression qualifies as a disability under the ADA and Social Security, and discover treatment options like TMS.">
    <meta name="keywords"
        content="depression disability, ADA depression, social security disability depression, TMS therapy, mental health rights">
    <link rel="canonical" href="is-depression-a-disability.php">
    <meta property="og:title" content="Is Depression a Disability? | Karma TMS Blog">
    <meta property="og:description"
        content="Learn whether depression qualifies as a disability under the ADA and Social Security, and discover treatment options like TMS.">
    <meta property="og:image"
        content="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376739/25_drzbxc.png">
    <meta property="og:type" content="article">

    <?php include 'includes/header-links.php'; ?>

    <style>
        html {
            scroll-behavior: smooth;
        }

        .sticky-toc {
            position: sticky;
            top: 120px;
        }

        .toc-button {
            display: block;
            width: 100%;
            text-align: left;
            padding: 0.5rem 0.75rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            transition: all 0.2s;
            color: #374151;
            background: transparent;
            border: none;
            cursor: pointer;
        }

        .toc-button:hover {
            background-color: rgba(87, 38, 112, 0.1);
            color: #572670;
        }

        .toc-button.active {
            background-color: #572670;
            color: white;
            font-weight: 500;
        }

        /* Accordion Styles */
        .accordion-item {
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .accordion-item[data-state="open"] {
            border-color: #572670;
        }

        .accordion-trigger {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.25rem;
            font-weight: 700;
            font-size: 1rem;
            text-align: left;
            background: none;
            border: none;
            cursor: pointer;
            color: #1f2937;
        }

        .accordion-trigger:hover {
            color: #572670;
        }

        .accordion-content {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
        }

        .accordion-item[data-state="open"] .accordion-content {
            opacity: 1;
        }

        .accordion-inner {
            padding: 0 1.25rem 1.25rem 1.25rem;
            color: #374151;
        }
        
        .accordion-header {
            font-size: 1.05rem;
        }

        .accordion-icon {
            transition: transform 0.3s ease;
        }

        .accordion-item[data-state="open"] .accordion-icon {
            transform: rotate(180deg);
        }

        /* Proportional prose styles */
        .prose p {
            margin-bottom: 1.5rem;
            line-height: 1.75;
        }
        .prose ul {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
            list-style-type: disc;
        }
        .prose li {
            margin-bottom: 0.5rem;
        }

        a {
            text-decoration: none;
        }

        /* Hero Gradient Fix */
        .bg-hero-gradient {
            background: linear-gradient(135deg, #572670 0%, #7B3FA0 100%);
        }
        
        .bg-white-10 {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .backdrop-blur-sm {
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
        }

        /* Custom Grid Fixes */
        @media (min-width: 1024px) {
            .lg\:grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
            .lg\:col-span-1 {
                grid-column: span 1 / span 1;
            }
            .lg\:col-span-3 {
                grid-column: span 3 / span 3;
            }
        }
        
        /* Utility missing fixes */
        .border-l-4 {
            border-left-width: 4px;
        }
        
        .rounded-r-xl {
            border-top-right-radius: 0.75rem;
            border-bottom-right-radius: 0.75rem;
        }

        .bg-blue-50 { background-color: #eff6ff; }
        .border-blue-200 { border-color: #bfdbfe; }
        .text-blue-900 { color: #1e3a8a; }
        .text-blue-600 { color: #2563eb; }

        .border-purple-500 { border-color: #a855f7; }
        .text-purple-500 { color: #a855f7; }

        .bg-amber-50 { background-color: #fffbeb; }
        .border-amber-200 { border-color: #fde68a; }
        .text-amber-900 { color: #78350f; }
        
        .bg-green-50 { background-color: #f0fdf4; }
        .border-green-100 { border-color: #dcfce7; }
        .text-green-600 { color: #16a34a; }

        .shadow-sm {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        
        .shadow-md {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        /* Explicit Utility Overrides */
        .border {
            border-width: 1px !important;
            border-style: solid !important;
        }
        .border-2 {
            border-width: 2px !important;
            border-style: solid !important;
        }
        .border-primary {
            border-color: #572670 !important;
        }
        .bg-primary {
            background-color: #572670 !important;
        }
        .text-primary {
            color: #572670 !important;
        }
        .rounded-xl {
            border-radius: 0.75rem !important;
        }
        .rounded-full {
            border-radius: 9999px !important;
        }
        .border-gray-200 {
            border-color: #e5e7eb !important;
        }
        .text-gray-900 {
            color: #111827 !important;
        }
        .gap-6 {
            gap: 1.5rem !important;
        }
    </style>

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "Is Depression a Disability?",
      "description": "Learn whether depression qualifies as a disability under the ADA and Social Security, and discover treatment options like TMS.",
      "image": "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376739/25_drzbxc.png",
      "author": {
        "@type": "Person",
        "name": "KarmaTMS",
        "jobTitle": "Mental Health Clinic",
        "affiliation": {
          "@type": "Organization",
          "name": "KarmaTMS"
        }
      },
      "publisher": {
        "@type": "Organization",
        "name": "KarmaTMS",
        "logo": {
          "@type": "ImageObject",
          "url": "https://newoaks.s3.us-west-1.amazonaws.com/AutoDev/17785/ebadb369-a58d-421c-b937-24f900be5867.png"
        }
      },
      "datePublished": "2025-05-20",
      "dateModified": "2025-05-20",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blog/is-depression-a-disability"
      }
    }
    </script>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Breadcrumb -->
    <div class="bg-gray-50 border-b relative z-10" style="margin-top: 55px;"> 
        <div class="container mx-auto px-4 py-3">
            <nav class="flex items-center text-xs text-gray-500" aria-label="Breadcrumb">
                <a href="index.php" class="hover:text-purple-500 transition-colors">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <a href="blog.php" class="hover:text-purple-500 transition-colors">Blog</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <span class="text-gray-900 font-medium">Is Depression a Disability?</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <!-- Hero Section -->
    <section class="relative bg-hero-gradient text-white py-20 overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="flex flex-wrap justify-center gap-4 mb-6 text-sm">
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        December 1, 2025
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        14 min read
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        KarmaTMS Medical Team
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    Is Depression a Disability?<br>
                    Understanding Rights,<br>
                    Treatment, and Support Options
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Comprehensive guide to disability rights, legal protections, and effective treatments for depression
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="contact-us.php" class="btn bg-white text-primary hover:bg-gray-100 font-bold px-8 py-3 text-lg">
                        Schedule Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-20">
        <div class="grid lg:grid-cols-4 gap-8">
            <!-- Table of Contents - Sticky Sidebar -->
            <aside class="lg:col-span-1">
                <div class="sticky-toc lg:sticky lg:top-24">
                    <div class="bg-white rounded-xl border border-primary/20 shadow-sm overflow-hidden">
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-4 text-primary">Table of Contents</h3>
                            <nav class="space-y-2" id="toc-nav">
                                <button class="toc-button" onclick="scrollToSection('intro')">
                                    Introduction
                                </button>
                                <button class="toc-button" onclick="scrollToSection('legal-definition')">
                                    Legal Definition
                                </button>
                                <button class="toc-button" onclick="scrollToSection('qualifications')">
                                    When it Qualifies
                                </button>
                                <button class="toc-button" onclick="scrollToSection('ada-coverage')">
                                    ADA Coverage
                                </button>
                                <button class="toc-button" onclick="scrollToSection('ssa-benefits')">
                                    Social Security Benefits
                                </button>
                                <button class="toc-button" onclick="scrollToSection('workplace-rights')">
                                    Workplace Rights
                                </button>
                                <button class="toc-button" onclick="scrollToSection('treatment-options')">
                                    Treatment Options
                                </button>
                                <button class="toc-button" onclick="scrollToSection('tms-therapy')">
                                    TMS Therapy
                                </button>
                            </nav>
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <a href="contact-us.php" class="btn w-full bg-primary text-white hover:opacity-90 justify-center">
                                    Book Consultation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Article Content -->
            <article class="lg:col-span-3 prose prose-lg max-w-none text-gray-700">
                <!-- Introduction -->
                <div class="mb-12" id="intro">
                    <img src="images/blog/is-depression-a-disability-intro.png" 
                        alt="Is Depression a Disability? Woman sitting with knees up looking sad"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        If you're living with depression, you may wonder: <strong>"Is depression a disability?"</strong> The answer is yes—depression can qualify as a disability under federal laws like the Americans with Disabilities Act (ADA) and Social Security Administration (SSA) guidelines. Understanding your rights and available support is crucial for protecting yourself at work, accessing benefits, and finding effective treatment. This comprehensive guide explains when depression qualifies as a disability, what protections you're entitled to, and how innovative treatments like <a href="tms-therapy.php" class="text-primary hover:underline">TMS therapy</a> can help restore your independence and wellness.
                    </p>
                </div>

                <!-- Section: Understanding Depression as a Disability -->
                <section id="legal-definition" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Understanding Depression as a Disability</h2>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Legal Definition of Disability</h3>
                    <p class="mb-6">
                        Under the ADA, a disability is defined as a physical or mental impairment that substantially limits one or more major life activities. <a href="depression.php" class="text-primary hover:underline">Depression</a> qualifies when it significantly impacts activities such as working, concentrating, sleeping, caring for oneself, or interacting with others.
                    </p>
                </section>

                <!-- Section: When Does Depression Qualify? -->
                <section id="qualifications" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">When Does Depression Qualify as a Disability?</h2>
                    <p class="mb-6">
                        Not all depression automatically qualifies as a disability. Several factors determine whether your depression meets legal disability standards:
                    </p>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Severity of Symptoms</h3>
                    <p class="mb-4">
                        Your depression must be more than occasional sadness or temporary mood changes. Qualifying depression involves persistent, severe symptoms that interfere with daily functioning. This includes:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 mb-6 text-gray-700">
                        <li>Persistent depressed mood lasting most of the day, nearly every day</li>
                        <li>Markedly diminished interest or pleasure in activities</li>
                        <li>Significant changes in appetite or weight</li>
                        <li>Insomnia or hypersomnia</li>
                        <li>Psychomotor agitation or retardation</li>
                        <li>Fatigue or loss of energy</li>
                        <li>Feelings of worthlessness or excessive guilt</li>
                        <li>Diminished ability to think or concentrate</li>
                        <li>Recurrent thoughts of death or suicide</li>
                    </ul>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Duration and Persistence</h3>
                    <p class="mb-6">
                        For ADA protection, depression typically must be long-term or expected to last a significant period. For Social Security Disability, symptoms must have lasted or be expected to last at least 12 consecutive months, or result in death.
                    </p>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Functional Limitations</h3>
                    <p class="mb-4">
                        The key factor is how depression limits your ability to perform major life activities. This includes:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 mb-6 text-gray-700">
                        <li>Difficulty maintaining employment or attending work regularly</li>
                        <li>Impaired concentration affecting job performance</li>
                        <li>Inability to maintain social relationships</li>
                        <li>Challenges with self-care and daily hygiene</li>
                        <li>Difficulty managing household responsibilities</li>
                        <li>Problems making decisions or planning activities</li>
                    </ul>

                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 mb-6">
                        <h4 class="font-bold text-blue-900 mb-2">Depression Coexisting with Anxiety</h4>
                        <p class="text-blue-800 text-sm">
                            Many people with depression also experience <a href="anxiety.php" class="text-blue-700 hover:underline font-medium">anxiety disorders</a>. When both conditions are present, they can compound functional limitations. Anxiety disorders can also qualify as disabilities under the same legal frameworks, providing additional protection and support options.
                        </p>
                    </div>
                </section>

                <!-- Section: ADA Coverage -->
                <section id="ada-coverage" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">The Americans with Disabilities Act (ADA) and Depression</h2>
                    <p class="mb-6">
                        The ADA, enacted in 1990, prohibits discrimination against individuals with disabilities in employment, public services, and public accommodations. Understanding how the ADA applies to depression is essential for protecting your rights.
                    </p>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">ADA Coverage for Mental Health Conditions</h3>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white border text-card-foreground shadow-sm rounded-xl p-6">
                            <h4 class="font-bold text-gray-900 mb-3 text-lg">Who is Protected?</h4>
                            <ul class="text-sm text-gray-600 list-disc pl-5 space-y-2">
                                <li>Have a current diagnosis of depression that substantially limits major life activities</li>
                                <li>Have a history or record of depression (even if currently in remission)</li>
                                <li>Are regarded by others as having a substantially limiting impairment</li>
                            </ul>
                        </div>
                        <div class="bg-white border text-card-foreground shadow-sm rounded-xl p-6">
                            <h4 class="font-bold text-gray-900 mb-3 text-lg">What the ADA Prohibits</h4>
                            <p class="text-sm text-gray-600 mb-2">Employers with 15 or more employees cannot:</p>
                            <ul class="text-sm text-gray-600 list-disc pl-5 space-y-2">
                                <li><strong>Discriminate in hiring:</strong> Refuse to hire you because of depression</li>
                                <li><strong>Discriminate in employment:</strong> Fire, demote, or deny promotions due to your condition</li>
                                <li><strong>Harass employees:</strong> Create a hostile work environment based on mental health status</li>
                                <li><strong>Retaliate:</strong> Punish employees for requesting accommodations or filing complaints</li>
                                <li><strong>Ask prohibited questions:</strong> Inquire about mental health conditions before making a job offer</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-6">
                        <h4 class="font-bold text-yellow-900 mb-2 flex items-center gap-2">
                            <i data-lucide="alert-circle" class="w-5 h-5"></i>
                            Important Note on Disclosure
                        </h4>
                        <p class="text-yellow-800 text-sm">
                            You are not required to disclose your depression diagnosis during job interviews. Employers can only ask about your ability to perform specific job functions. However, to receive ADA protections and accommodations, you will need to disclose that you have a condition requiring accommodation at some point.
                        </p>
                    </div>
                </section>

                <!-- Section: SSA Benefits -->
                <section id="ssa-benefits" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Social Security Disability Benefits for Depression</h2>
                    <p class="mb-6">
                        The Social Security Administration (SSA) provides disability benefits to individuals who cannot work due to severe medical conditions, including depression. There are two primary programs:
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <h3 class="font-bold text-xl text-gray-900 mb-3">SSDI (Social Security Disability Insurance)</h3>
                            <p class="text-gray-700 text-sm mb-4">SSDI is for individuals who have worked and paid Social Security taxes. Benefits are based on your work history and earnings record.</p>
                            <ul class="text-sm text-gray-600 list-disc pl-5 space-y-1">
                                <li>Requires sufficient work credits</li>
                                <li>Monthly benefit amount varies</li>
                                <li>Medicare eligibility after 24 months</li>
                                <li>No income or asset limits</li>
                            </ul>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <h3 class="font-bold text-xl text-gray-900 mb-3">SSI (Supplemental Security Income)</h3>
                            <p class="text-gray-700 text-sm mb-4">SSI is a needs-based program for individuals with limited income and resources, regardless of work history.</p>
                            <ul class="text-sm text-gray-600 list-disc pl-5 space-y-1">
                                <li>No work credits required</li>
                                <li>Fixed monthly payment amount</li>
                                <li>Medicaid eligibility in most states</li>
                                <li>Strict income and asset limits</li>
                            </ul>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">SSA Criteria for Depression Disability</h3>
                    <p class="mb-4">The SSA evaluates depression under its listing for "Depressive, bipolar and related disorders." To qualify, you must demonstrate:</p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="bg-white border border-gray-200 p-4 rounded-xl">
                            <h4 class="font-bold text-primary mb-2">1. Medical Documentation (5+ symptoms):</h4>
                            <div class="grid md:grid-cols-2 gap-2 text-sm text-gray-700">
                                <span class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500"></i> Depressed mood</span>
                                <span class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500"></i> Diminished interest</span>
                                <span class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500"></i> Appetite/weight change</span>
                                <span class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500"></i> Sleep disturbance</span>
                                <span class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500"></i> Psychomotor agitation</span>
                                <span class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500"></i> Decreased energy</span>
                                <span class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500"></i> Guilt/worthlessness</span>
                                <span class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500"></i> Difficulty concentrating</span>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-200 p-4 rounded-xl">
                            <h4 class="font-bold text-primary mb-2">2. Functional Limitations (Marked or Extreme):</h4>
                            <ul class="text-sm text-gray-700 list-disc pl-5">
                                <li>Understanding, remembering, or applying information</li>
                                <li>Interacting with others</li>
                                <li>Concentrating, persisting, or maintaining pace</li>
                                <li>Adapting or managing oneself</li>
                            </ul>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Applying for Social Security Disability</h3>
                    <div class="space-y-4 mb-8">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">1</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Gather Medical Evidence</h4>
                                <p class="text-sm text-gray-600">Collect comprehensive medical records, treatment history, diagnostic evaluations, and documentation of how depression limits your functioning.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">2</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Complete the Application</h4>
                                <p class="text-sm text-gray-600">Apply online at ssa.gov, by phone, or at your local office. Be thorough about how depression affects your daily life.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">3</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Provide Detailed Functional Reports</h4>
                                <p class="text-sm text-gray-600">Describe specifically how depression affects your activities. Be specific with examples of limitations.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">4</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Consider Professional Assistance</h4>
                                <p class="text-sm text-gray-600">Working with a disability attorney can help strengthen your application and navigate appeals.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-green-50 border border-green-100 rounded-xl p-6">
                        <h4 class="font-bold text-green-900 mb-2">Approval Rates and Timeframes</h4>
                        <p class="text-green-800 text-sm">
                            Initial approval rates are approx. 35-40%. Many successful claims are approved on appeal. The process takes 3-6 months. Continue treatment and document your condition throughout.
                        </p>
                    </div>
                </section>

                <!-- Section: Workplace Rights -->
                <section id="workplace-rights" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Workplace Rights and Reasonable Accommodations</h2>
                    <p class="mb-6">
                        If your depression qualifies as a disability under the ADA, you have the right to request reasonable accommodations that enable you to perform your job effectively.
                    </p>

                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Common Workplace Accommodations</h3>
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white border text-card-foreground shadow-sm rounded-xl p-6">
                            <h4 class="font-bold text-purple-700 mb-2">Schedule Flexibility</h4>
                            <ul class="text-sm text-gray-600 list-disc pl-5">
                                <li>Modified work schedule (later start times)</li>
                                <li>Flexible leave for appointments</li>
                                <li>Intermittent FMLA leave</li>
                                <li>Part-time or reduced hours</li>
                                <li>Telecommuting options</li>
                            </ul>
                        </div>
                        <div class="bg-white border text-card-foreground shadow-sm rounded-xl p-6">
                            <h4 class="font-bold text-purple-700 mb-2">Workplace Environment</h4>
                            <ul class="text-sm text-gray-600 list-disc pl-5">
                                <li>Quiet or private workspace</li>
                                <li>Noise-canceling headphones</li>
                                <li>Natural lighting access</li>
                                <li>Designated rest area access</li>
                                <li>Workspace away from distractions</li>
                            </ul>
                        </div>
                        <div class="bg-white border text-card-foreground shadow-sm rounded-xl p-6">
                            <h4 class="font-bold text-purple-700 mb-2">Job Modifications</h4>
                            <ul class="text-sm text-gray-600 list-disc pl-5">
                                <li>Restructuring marginal job functions</li>
                                <li>Modified productivity standards</li>
                                <li>Additional training or mentoring</li>
                                <li>Written instructions</li>
                            </ul>
                        </div>
                        <div class="bg-white border text-card-foreground shadow-sm rounded-xl p-6">
                            <h4 class="font-bold text-purple-700 mb-2">Support & Communication</h4>
                            <ul class="text-sm text-gray-600 list-disc pl-5">
                                <li>Regular feedback</li>
                                <li>Designated point of contact</li>
                                <li>EAP access</li>
                                <li>Sensitivity training for supervisors</li>
                            </ul>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">How to Request Accommodations</h3>
                    <ol class="list-decimal pl-6 space-y-4 mb-6 text-gray-700">
                        <li><strong>Make a formal request:</strong> Submit a written request to your supervisor or HR stating you have a medical condition requiring accommodation.</li>
                        <li><strong>Provide medical documentation:</strong> Your healthcare provider may need to complete forms or provide a letter.</li>
                        <li><strong>Engage in interactive process:</strong> Work with your employer to identify effective accommodations.</li>
                        <li><strong>Document everything:</strong> Keep copies of all requests and communications.</li>
                    </ol>

                    <p class="text-gray-700 text-sm italic">
                        <strong>Know Your Rights:</strong> Employers must provide reasonable accommodations unless causing "undue hardship." If denied, you may file a complaint with the EEOC.
                    </p>
                </section>

                <!-- Section: Treatment Options -->
                <section id="treatment-options" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Treatment Options to Restore Independence</h2>
                    <p class="mb-6">
                        While legal protections are important, effective treatment is essential for managing depression. Many treatments are available, including innovative approaches like <a href="palm-springs.php" class="text-primary hover:underline">TMS therapy in Palm Springs</a>.
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-gray-50 p-6 rounded-xl">
                            <h4 class="font-bold text-gray-900 mb-2">Psychotherapy</h4>
                            <p class="text-sm text-gray-600">CBT, interpersonal therapy, and other evidence-based approaches help address thought patterns and coping skills.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-xl">
                            <h4 class="font-bold text-gray-900 mb-2">Medication Management</h4>
                            <p class="text-sm text-gray-600"><a href="medication-management.php" class="text-primary hover:underline">Antidepressant medications</a> can be effective. Working with a psychiatrist ensures proper selection and monitoring.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-xl">
                            <h4 class="font-bold text-gray-900 mb-2">Lifestyle Modifications</h4>
                            <p class="text-sm text-gray-600">Exercise, nutrition, sleep, and stress management support recovery and complement professional treatment.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-xl">
                            <h4 class="font-bold text-gray-900 mb-2">Support Groups</h4>
                            <p class="text-sm text-gray-600">Connecting with others reduces isolation. Many communities offer in-person and online support groups.</p>
                        </div>
                    </div>
                </section>

                <!-- Section: TMS Therapy and KarmaTMS -->
                <section id="tms-therapy" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">TMS Therapy: A Game-Changer for Treatment-Resistant Depression</h2>
                    
                    <div class="bg-[#ecfdf5] border border-[#d1fae5] rounded-xl p-8 mb-8">
                        <h3 class="text-xl font-bold mb-4 text-[#059669]">Why TMS Works When Other Treatments Fail</h3>
                        <p class="mb-6 text-gray-700 leading-relaxed">
                            Transcranial Magnetic Stimulation (TMS) is an FDA-approved, non-invasive treatment that uses magnetic pulses to stimulate underactive brain regions associated with depression. Unlike medications, TMS directly targets the neurological basis of depression without systemic side effects.
                        </p>
                        <ul class="space-y-3 text-gray-700 list-disc pl-5 marker:text-[#059669]">
                            <li>50-60% response rate for treatment-resistant depression</li>
                            <li>30-40% achieve complete remission</li>
                            <li>No cognitive impairment or sedation</li>
                            <li>Can continue working during treatment</li>
                            <li>Long-lasting results with maintenance options</li>
                            <li>Covered by most insurance plans, including Medicare</li>
                        </ul>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">TMS Therapy at KarmaTMS Palm Springs</h3>
                    <p class="mb-6">
                        At KarmaTMS, we specialize in helping individuals with treatment-resistant depression regain their independence. Our comprehensive approach includes:
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-primary mt-1"></i>
                            <div>
                                <strong class="text-gray-900">Personalized Treatment Plans:</strong> Customized protocols based on your specific symptoms.
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-primary mt-1"></i>
                            <div>
                                <strong class="text-gray-900">Insurance Coordination:</strong> We work with major plans including Medicare.
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-primary mt-1"></i>
                            <div>
                                <strong class="text-gray-900">Convenient Scheduling:</strong> Sessions fit your work schedule with no downtime.
                            </div>
                        </li>
                         <li class="flex items-start gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-primary mt-1"></i>
                            <div>
                                <strong class="text-gray-900">Veterans Support:</strong> Specialized care for veterans with service-related depression or PTSD.
                            </div>
                        </li>
                    </ul>
                </section>

                <!-- Author Box -->
                 <div class="bg-white rounded-xl p-6 md:p-8 mb-12 flex gap-4 md:gap-8 items-start shadow-sm w-full" style="border: 1px solid rgba(87, 38, 112, 0.2);">
                    <div class="flex-shrink-0">
                        <div class="p-1 rounded-full border-2" style="border-color: rgba(87, 38, 112, 0.3);">
                            <img src="https://www.prtms.com/wp-content/uploads/2023/03/Dr.-Keerthy-Sunder-scaled.jpg" 
                                alt="Dr. Keerthy Sunder" 
                                class="rounded-full object-cover" style="width:140px;height:140px;border-radius:50%">
                        </div>
                    </div>
                    <div class="flex-1 min-w-0 text-left">
                        <h4 class="text-2xl md:text-3xl font-bold mb-1 ml-1" style="color: #572670;">About the Author</h4>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2 ml-1"><a href="about.php" class="text-gray-900 hover:text-primary transition-colors">Dr. Keerthy Sunder</a></h3>
                        <p class="text-gray-500 font-medium mb-3 text-base ml-1">Board-Certified Psychiatrist | KarmaTMS</p>
                        <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                            Dr. Keerthy Sunder is a board-certified psychiatrist specializing in TMS therapy for veterans and treatment-resistant mental health conditions. With extensive experience in neuroscience and innovative treatment modalities, Dr. Sunder is dedicated to helping individuals overcome depression, anxiety, and PTSD through evidence-based, compassionate care.
                        </p>
                    </div>
                </div>

                <!-- FAQ Section -->
                <section id="faqs" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-8">
                        Frequently Asked Questions
                    </h2>

                    <div class="space-y-4">
                        
                        <!-- Q1 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Does depression qualify for disability?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes, depression can qualify for disability benefits if it is severe enough to prevent you from working for at least 12 months and meets the SSA's medical criteria.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>What is the ADA definition of disability?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    The ADA defines disability as a physical or mental impairment that substantially limits one or more major life activities.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can I get fired for having depression?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    It is illegal to terminate an employee solely due to a disability. However, you must still be able to perform the essential functions of your job, with or without accommodation.
                                </div>
                            </div>
                        </div>

                         <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How can TMS help if I am disabled by depression?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    TMS treats the root cause of depression in the brain. For many, it leads to significant symptom reduction or remission, which may help restore your ability to function and work.
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Get Help Today
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        Don't let depression control your life. Contact us to learn about advanced treatment options.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="contact-us.php" class="btn bg-white text-[#572670] hover:bg-gray-100 font-semibold px-8 py-3">
                            Schedule Consultation
                        </a>
                    </div>
                </div>

                <!-- Related Posts -->
                 <section class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-8">Related Articles</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Post 1 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="images/blog/is-tms-therapy-permanent-banner-v3.png"
                                alt="Is TMS Therapy Permanent?" class="w-full h-48 object-cover object-left">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="is-tms-therapy-permanent.php" class="block text-black" style="color: black !important;">Is TMS Therapy Permanent?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Discover the long-term effectiveness of TMS and what to expect.</p>
                                <a href="is-tms-therapy-permanent.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Post 2 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/15_ym6n6b.png"
                                alt="How Successful is TMS Treatment?" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="how-successful-is-tms-treatment.php" class="block text-black" style="color: black !important;">How Successful is TMS Treatment?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Dive deeper into the clinical outcomes and success rates of TMS.</p>
                                <a href="how-successful-is-tms-treatment.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/11_itsgyr.png"
                                alt="Why TMS Requires Multiple Sessions" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="why-tms-requires-multiple-sessions.php" class="block text-black" style="color: black !important;">Why TMS Requires Multiple Sessions</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Understand the protocol and why neuroplasticity takes time.</p>
                                <a href="why-tms-requires-multiple-sessions.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script>
        window.toggleBlogFAQ = function(button) {
            const currentItem = button.parentElement;
            const isAlreadyOpen = currentItem.getAttribute('data-state') === 'open';

            // 1. Close ALL items
            document.querySelectorAll('.accordion-item').forEach(item => {
                item.setAttribute('data-state', 'closed');
                const content = item.querySelector('.accordion-content');
                if (content) {
                    content.style.maxHeight = '0px'; 
                }
            });

            // 2. If the clicked one was NOT open, open it now
            if (!isAlreadyOpen) {
                currentItem.setAttribute('data-state', 'open');
                const content = currentItem.querySelector('.accordion-content');
                if (content) {
                   content.style.maxHeight = content.scrollHeight + 'px';
                }
            }
        };

        document.addEventListener('DOMContentLoaded', function () {
            // Scroll Spy for Table of Contents
            const sections = document.querySelectorAll('.scroll-target');
            const navButtons = document.querySelectorAll('.toc-button');
            const offset = 150; 

            function highlightNavigation() {
                let scrollY = window.scrollY;
                
                sections.forEach(current => {
                    const sectionHeight = current.offsetHeight;
                    const sectionTop = current.offsetTop - offset;
                    const sectionId = current.getAttribute('id');
                    
                    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                        navButtons.forEach(btn => {
                            btn.classList.remove('active');
                            if (btn.getAttribute('onclick').includes(sectionId)) {
                                btn.classList.add('active');
                            }
                        });
                    }
                });
            }

            window.addEventListener('scroll', highlightNavigation);
            highlightNavigation();

            // Smooth Scroll Function
            window.scrollToSection = function(id) {
                const element = document.getElementById(id);
                if (element) {
                    const headerOffset = 100;
                    const elementPosition = element.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });
                }
            };
            
            // Re-init lucide icons
            lucide.createIcons();
        });
    </script>
</body>

</html>
