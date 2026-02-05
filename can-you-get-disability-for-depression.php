<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Can You Get Disability for Depression? Understanding Your Rights, Benefits, and Treatment Options | Karma TMS Blog</title>
    <meta name="description"
        content="Complete guide to disability benefits for depression, including eligibility requirements, application process, and treatment options">
    <meta name="keywords"
        content="disability for depression, SSDI for depression, is depression a disability, mental health disability benefits, TMS therapy and disability, severe depression help">
    <link rel="canonical" href="can-you-get-disability-for-depression.php">
    <meta property="og:title" content="Can You Get Disability for Depression? Understanding Your Rights, Benefits, and Treatment Options | Karma TMS Blog">
    <meta property="og:description"
        content="Complete guide to disability benefits for depression, including eligibility requirements, application process, and treatment options">
    <meta property="og:image"
        content="images/blog/can-you-get-disability-for-depression-intro.png">
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
            transition: color 0.2s;
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
        
        .prose h3 {
             font-size: 1.5rem;
             font-weight: 700;
             margin-top: 2rem;
             margin-bottom: 1rem;
             color: #1f2937;
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
        
        .bg-indigo-50 { background-color: #eef2ff; }
        .border-indigo-100 { border-color: #e0e7ff; }

        .border-purple-500 { border-color: #a855f7; }
        .text-purple-500 { color: #a855f7; }
        .bg-purple-50 { background-color: #faf5ff; }
        .border-purple-100 { border-color: #f3e8ff; }

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
        .text-purple-900 {
            color: #581c87 !important;
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
      "headline": "Can You Get Disability for Depression?",
      "description": "Wondering if you can get disability for depression? Learn about the criteria, application process, and how treatments like TMS can impact your claim.",
      "image": "https://karmatms.com/images/blog/is-depression-a-disability-intro.png",
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
      "datePublished": "2025-11-20",
      "dateModified": "2026-02-03",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blog/can-you-get-disability-for-depression"
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
                <span class="text-gray-900 font-medium">Can You Get Disability for Depression?</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="relative bg-hero-gradient text-white py-20 overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="flex flex-wrap justify-center gap-4 mb-6 text-sm">
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        November 20, 2025
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        12 min read
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        Dr. Keerthy Sunder
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Can You Get Disability for Depression? Understanding Your Rights, Benefits, and Treatment Options
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Understanding your rights and the path to benefits when depression impacts your ability to work.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="contact-us.php" class="btn bg-white text-primary hover:bg-gray-100 font-bold px-8 py-3 text-lg">
                        Schedule Free Consultation
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
                                <button class="toc-button" onclick="scrollToSection('intro')">Introduction</button>
                                <button class="toc-button" onclick="scrollToSection('is-it-disability')">Understanding Disability</button>
                                <button class="toc-button" onclick="scrollToSection('ssdi-vs-ssi')">SSDI vs SSI</button>
                                <button class="toc-button" onclick="scrollToSection('criteria')">Eligibility Criteria</button>
                                <button class="toc-button" onclick="scrollToSection('how-to-prove')">How to Apply</button>
                                <button class="toc-button" onclick="scrollToSection('tms-role')">Treatment Options</button>
                                <button class="toc-button" onclick="scrollToSection('conclusion')">Conclusion</button>
                                <button class="toc-button" onclick="scrollToSection('faq')">FAQ</button>
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
                    <img src="images/blog/can-you-get-disability-for-depression-intro.png" 
                        alt="Depression and Disability"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                       If you're struggling with severe depression, you may be wondering: <strong>"Can you get disability for depression?"</strong> The answer is yes—depression can qualify you for disability benefits through Social Security Disability Insurance (SSDI) or Supplemental Security Income (SSI) if it significantly impairs your ability to work and maintain daily functioning. This comprehensive guide explains eligibility requirements, the application process, necessary documentation, and how innovative treatments like <a href="tms-therapy.php" class="text-primary hover:underline font-semibold">TMS therapy</a> can help you manage symptoms and potentially return to work.
                    </p>
                </div>

                <!-- Section: Is Depression a Disability? -->
                <section id="is-it-disability" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Understanding Disability Benefits for Depression</h2>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">What Qualifies Depression as a Disability?</h3>
                    <p>
                        The Social Security Administration (SSA) recognizes <a href="depression.php" class="text-primary hover:underline">major depressive disorder</a> as a qualifying disability when it substantially limits your ability to perform basic work activities and is expected to last at least 12 months or result in death. The severity of symptoms, duration, treatment history, and functional limitations all factor into disability determinations.
                    </p>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 mt-8">Why Depression May Qualify for Disability</h3>
                    <p>
                        Depression isn't just feeling sad—it's a serious mental health condition that can profoundly impact every aspect of life. When depression is severe and persistent, it can create significant functional impairments that prevent you from:
                    </p>
                    <ul class="space-y-3 mt-4 pl-0 list-none">
                        <li class="flex items-start gap-3">
                            <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></div>
                            <span><strong>Maintaining employment:</strong> Difficulty concentrating, reduced productivity, frequent absences, inability to complete tasks</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></div>
                            <span><strong>Following instructions:</strong> Impaired cognitive function affecting understanding and memory</span>
                        </li>
                        <li class="flex items-start gap-3">
                             <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></div>
                            <span><strong>Interacting with others:</strong> Social withdrawal, difficulty communicating with coworkers or supervisors</span>
                        </li>
                        <li class="flex items-start gap-3">
                             <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></div>
                            <span><strong>Managing stress:</strong> Inability to handle workplace pressure or adapt to changes</span>
                        </li>
                        <li class="flex items-start gap-3">
                             <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></div>
                            <span><strong>Self-care activities:</strong> Neglecting personal hygiene, nutrition, or medical care</span>
                        </li>
                        <li class="flex items-start gap-3">
                             <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></div>
                            <span><strong>Maintaining regular schedules:</strong> Sleep disturbances affecting attendance and punctuality</span>
                        </li>
                    </ul>
                    
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-6 my-8 rounded-r-xl">
                        <h4 class="text-lg font-bold text-blue-900 mb-2">Depression and Anxiety Often Co-Occur</h4>
                        <p class="text-blue-800">
                            Many people with depression also experience <a href="anxiety.php" class="text-blue-700 hover:underline underline">anxiety disorders</a>, which can compound functional limitations. Co-occurring conditions strengthen disability claims by demonstrating multiple impairments affecting work capacity and daily functioning.
                        </p>
                    </div>
                </section>
                
                <!-- Section: SSDI vs SSI -->
                <section id="ssdi-vs-ssi" class="mb-12 scroll-target">
                     <h2 class="text-3xl font-bold text-primary mb-6">SSDI vs SSI: Understanding Your Benefit Options</h2>
                     <p class="mb-6">The Social Security Administration offers two primary disability benefit programs. Understanding the differences helps you determine which program(s) you may qualify for.</p>
                     
                     <div class="grid md:grid-cols-2 gap-6">
                         <!-- SSDI Card -->
                         <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                             <div class="flex items-center gap-3 mb-4">
                                 <div class="bg-primary/10 p-3 rounded-lg text-primary">
                                     <i data-lucide="briefcase" class="w-6 h-6"></i>
                                 </div>
                                 <h3 class="text-xl font-bold text-gray-900">Social Security Disability Insurance (SSDI)</h3>
                             </div>
                             <p class="text-gray-600 mb-4 text-sm">SSDI is for individuals who have worked and paid Social Security taxes. Benefits are based on your work history and earning record.</p>
                             <ul class="space-y-2 text-sm text-gray-700">
                                 <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5"></i> Requires sufficient work credits (typically 20 in last 10 years)</li>
                                 <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5"></i> Monthly benefit varies based on earnings</li>
                                 <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5"></i> Medicare eligibility after 24 months</li>
                                 <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5"></i> No income or asset limits</li>
                                 <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5"></i> Family members may qualify</li>
                             </ul>
                         </div>
                         
                         <!-- SSI Card -->
                          <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                             <div class="flex items-center gap-3 mb-4">
                                 <div class="bg-green-100 p-3 rounded-lg text-green-600">
                                     <i data-lucide="dollar-sign" class="w-6 h-6"></i>
                                 </div>
                                 <h3 class="text-xl font-bold text-gray-900">Supplemental Security Income (SSI)</h3>
                             </div>
                             <p class="text-gray-600 mb-4 text-sm">SSI is a needs-based program for individuals with limited income and resources, regardless of work history.</p>
                             <ul class="space-y-2 text-sm text-gray-700">
                                 <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5"></i> No work credits required</li>
                                 <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5"></i> Fixed monthly payment (~$914 in 2024)</li>
                                 <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5"></i> Immediate Medicaid eligibility in most states</li>
                                 <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5"></i> Strict income limits</li>
                                 <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5"></i> Resource limits ($2k individual / $3k couple)</li>
                             </ul>
                         </div>
                     </div>
                     
                     <div class="mt-6 p-4 bg-gray-50 rounded-lg border border-gray-200">
                         <h4 class="font-bold text-gray-900 mb-2">Can You Receive Both? (Concurrent Benefits)</h4>
                         <p class="text-sm text-gray-700">Yes, it's possible to receive concurrent benefits if you qualify for SSDI but your benefit amount is low. SSI can supplement your SSDI to bring your total income up to the SSI federal benefit rate.</p>
                     </div>
                </section>

                <!-- Section: Criteria -->
                <section id="criteria" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6 flex items-center gap-3">
                         <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white text-lg">1</span>
                        Eligibility Criteria for Depression Disability Benefits
                    </h2>
                    <p class="mb-6">
                        To qualify for benefits, you must meet both medical and non-medical requirements established by the SSA.
                    </p>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Medical Criteria: Listing 12.04</h3>
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-indigo-50 p-6 rounded-xl border border-indigo-100">
                            <h4 class="font-bold text-indigo-900 text-lg mb-3">Required Symptoms (5 or more)</h4>
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-1.5 flex-shrink-0"></div>Depressed mood</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-1.5 flex-shrink-0"></div>Diminished interest in all activities</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-1.5 flex-shrink-0"></div>Appetite/weight changes</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-1.5 flex-shrink-0"></div>Sleep disturbance (insomnia/hypersomnia)</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-1.5 flex-shrink-0"></div>Psychomotor agitation/retardation</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-1.5 flex-shrink-0"></div>Decreased energy or fatigue</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-1.5 flex-shrink-0"></div>Feelings of guilt or worthlessness</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-1.5 flex-shrink-0"></div>Focus/concentration issues</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-indigo-500 mt-1.5 flex-shrink-0"></div>Thoughts of death or suicide</li>
                            </ul>
                        </div>

                        <div class="bg-purple-50 p-6 rounded-xl border border-purple-100">
                            <h4 class="font-bold text-purple-900 text-lg mb-3">Functional Limitations</h4>
                            <p class="text-sm mb-2 italic">Must show extreme limitation in one, or marked in two:</p>
                            <ul class="space-y-3 text-sm text-gray-700">
                                <li class="flex flex-col gap-1">
                                    <span class="font-semibold text-purple-800">Understanding, remembering, using info</span>
                                    <span class="text-xs text-gray-600">Difficulty learning or using new information for work tasks.</span>
                                </li>
                                <li class="flex flex-col gap-1">
                                    <span class="font-semibold text-purple-800">Interacting with others</span>
                                    <span class="text-xs text-gray-600">Problems with coworkers, supervisors, or the public.</span>
                                </li>
                                <li class="flex flex-col gap-1">
                                    <span class="font-semibold text-purple-800">Concentrating & Persisting</span>
                                    <span class="text-xs text-gray-600">Inability to focus or work at a consistent pace.</span>
                                </li>
                                <li class="flex flex-col gap-1">
                                    <span class="font-semibold text-purple-800">Adapting or managing oneself</span>
                                    <span class="text-xs text-gray-600">Difficulty regulating emotions or behavior.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Non-Medical Criteria</h3>
                    <ul class="space-y-4">
                        <li class="bg-gray-50 p-4 rounded-lg">
                            <strong>Work History (SSDI):</strong> 20 work credits in the last 10 years (typically).
                        </li>
                        <li class="bg-gray-50 p-4 rounded-lg">
                            <strong>Inability to Work:</strong> Unable to engage in Substantial Gainful Activity (earning >$1,550/mo in 2024).
                        </li>
                        <li class="bg-gray-50 p-4 rounded-lg">
                            <strong>Duration:</strong> Condition must last or be expected to last 12+ months.
                        </li>
                    </ul>
                </section>

                <!-- Section: How to Apply -->
                <section id="how-to-prove" class="mb-12 scroll-target"> <!-- ID kept same for TOC compatibility, but logical name is 'Application Process' -->
                    <h2 class="text-3xl font-bold text-primary mb-6 flex items-center gap-3">
                         <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white text-lg">2</span>
                        How to Apply for Disability Benefits
                    </h2>
                    <p class="mb-6">Applying requires careful preparation. Follow these steps to strengthen your application.</p>

                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">1</div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-900">Gather Comprehensive Medical Documentation</h4>
                                <p class="text-gray-600 text-sm mt-1">Collect all records: psychiatric evals, treatment history, medications, therapy notes, hospitalization records, and brain imaging.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">2</div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-900">Document Functional Limitations</h4>
                                <p class="text-gray-600 text-sm mt-1">Give specific examples: "I can't read a paragraph without losing focus," or detail sleep issues, social withdrawal, and hygiene neglect.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">3</div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-900">Get Strong Medical Support</h4>
                                <p class="text-gray-600 text-sm mt-1">Ask doctors for detailed source statements, RFC assessments, and letters supporting your inability to work.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">4</div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-900">Complete the Application</h4>
                                <p class="text-gray-600 text-sm mt-1">Apply online at ssa.gov, by phone (1-800-772-1213), or at a local office. Be specific and honest.</p>
                            </div>
                        </div>
                        
                         <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">5</div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-900">Continue Treatment</h4>
                                <p class="text-gray-600 text-sm mt-1">Maintain regular treatment. Gaps can hurt your claim.</p>
                            </div>
                        </div>
                        
                         <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">6</div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-900">Consider Representation</h4>
                                <p class="text-gray-600 text-sm mt-1">Disability attorneys can improve chances, working on contingency (paid only if you win).</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 bg-amber-50 rounded-xl p-6 border border-amber-200">
                        <h4 class="font-bold text-amber-900 flex items-center gap-2">
                            <i data-lucide="alert-circle" class="w-5 h-5"></i>
                            Timeline & Approval
                        </h4>
                        <p class="text-amber-800 text-sm mt-2">
                            Initial decisions take 3-6 months. Only ~35-40% are approved initially. <strong>Don't give up if denied</strong>—many succeed during appeals.
                        </p>
                    </div>
                </section>
                
                 <!-- Section: Short vs Long Term -->
                <section class="mb-12 scroll-target">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Short-Term vs. Long-Term Disability</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse rounded-lg overflow-hidden shadow-sm">
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="p-4 border-b">Feature</th>
                                    <th class="p-4 border-b">Short-Term Disability</th>
                                    <th class="p-4 border-b">Long-Term Disability</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                <tr class="border-b">
                                    <td class="p-4 font-semibold text-gray-900">Source</td>
                                    <td class="p-4 text-gray-600">Employer/Private</td>
                                    <td class="p-4 text-gray-600">Social Security (SSDI/SSI) or Private</td>
                                </tr>
                                <tr class="border-b bg-gray-50">
                                    <td class="p-4 font-semibold text-gray-900">Duration</td>
                                    <td class="p-4 text-gray-600">3-6 months (up to 1 yr)</td>
                                    <td class="p-4 text-gray-600">12+ months or permanent</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-4 font-semibold text-gray-900">Waiting Period</td>
                                    <td class="p-4 text-gray-600">7-14 days</td>
                                    <td class="p-4 text-gray-600">5 months (SSDI)</td>
                                </tr>
                                <tr class="border-b bg-gray-50">
                                    <td class="p-4 font-semibold text-gray-900">Benefit Amount</td>
                                    <td class="p-4 text-gray-600">50-70% of salary</td>
                                    <td class="p-4 text-gray-600">Varies by earnings / Fixed SSI</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt-4 text-sm text-gray-600">
                        <strong>Bridge Strategy:</strong> Many use short-term disability as a "bridge" while applying for SSDI, which takes longer.
                    </p>
                </section>

                <!-- Section: Treatment Options -->
                <section id="tms-role" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6 flex items-center gap-3">
                         <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white text-lg">3</span>
                        Treatment Options: Path to Recovery
                    </h2>
                    <p class="mb-6">
                        While benefits provide support, effective treatment is essential for managing depression and potentially restoring your ability to work.
                    </p>
                    
                    <div class="bg-purple-50 rounded-xl p-6 border border-purple-100 mb-8">
                        <h4 class="text-xl font-bold text-primary mb-3">TMS Therapy: A Breakthrough</h4>
                        <p class="mb-4">
                            <a href="tms-therapy.php" class="text-primary hover:underline font-semibold">Transcranial Magnetic Stimulation (TMS)</a> is an FDA-approved, non-invasive treatment that uses magnetic pulses to stimulate underactive brain regions.
                        </p>
                        <div class="grid sm:grid-cols-2 gap-4 mb-4">
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li class="flex items-start gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-purple-600 mt-0.5"></i> 50-60% response rate for <a href="tms-therapy-for-treatment-resistant-depression.php" class="text-primary hover:underline">treatment-resistant depression</a></li>
                                <li class="flex items-start gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-purple-600 mt-0.5"></i> 30-40% achieve complete remission</li>
                            </ul>
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li class="flex items-start gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-purple-600 mt-0.5"></i> No cognitive impairment or sedation</li>
                                <li class="flex items-start gap-2"><i data-lucide="check-circle" class="w-4 h-4 text-purple-600 mt-0.5"></i> Covered by most insurance (incl. Medicare)</li>
                            </ul>
                        </div>
                         <a href="how-does-tms-work.php" class="text-primary font-bold text-sm hover:underline">Learn more about how TMS works →</a>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Other Comprehensive Approaches</h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white p-4 border rounded-lg">
                            <h5 class="font-bold text-gray-900 mb-2">Psychotherapy</h5>
                            <p class="text-xs text-gray-600">CBT, DBT, and interpersonal therapy to address negative thought patterns.</p>
                        </div>
                        <div class="bg-white p-4 border rounded-lg">
                             <h5 class="font-bold text-gray-900 mb-2">Medication</h5>
                            <p class="text-xs text-gray-600">Professional management to optimize dosing and minimize side effects.</p>
                        </div>
                         <div class="bg-white p-4 border rounded-lg">
                             <h5 class="font-bold text-gray-900 mb-2">Lifestyle</h5>
                            <p class="text-xs text-gray-600">Exercise, nutrition, sleep, and social connection groups.</p>
                        </div>
                    </div>

                    <div class="mt-8 bg-gray-50 border-l-4 border-gray-600 p-6 rounded-r-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Special Considerations for Veterans</h4>
                        <p class="text-gray-700 text-sm">
                            Veterans with service-connected depression or <a href="ptsd.php" class="text-primary hover:underline">PTSD</a> may be eligible for VA disability in addition to Social Security. TMS is increasingly available through VA centers and community care.
                        </p>
                    </div>
                </section>
                
                 <!-- TMS at Karma Section -->
                <section class="mb-12 scroll-target">
                     <h2 class="text-2xl font-bold text-primary mb-6">TMS Therapy at KarmaTMS Palm Springs</h2>
                     <p class="mb-6">At KarmaTMS, we specialize in helping individuals regain their independence through advanced TMS therapy.</p>
                     
                     <div class="grid grid-cols-2 gap-4 text-sm">
                         <div class="flex items-start gap-3">
                             <div class="bg-purple-100 p-2 rounded text-purple-700"><i data-lucide="user-check" class="w-5 h-5"></i></div>
                             <div>
                                 <strong class="block text-gray-900">Personalized Plans</strong>
                                 <span class="text-gray-600">Custom protocols for your specific symptoms.</span>
                             </div>
                         </div>
                         <div class="flex items-start gap-3">
                             <div class="bg-purple-100 p-2 rounded text-purple-700"><i data-lucide="shield-check" class="w-5 h-5"></i></div>
                             <div>
                                 <strong class="block text-gray-900">Insurance Coordination</strong>
                                 <span class="text-gray-600">We verify benefits and handle paperwork.</span>
                             </div>
                         </div>
                           <div class="flex items-start gap-3">
                             <div class="bg-purple-100 p-2 rounded text-purple-700"><i data-lucide="calendar-clock" class="w-5 h-5"></i></div>
                             <div>
                                 <strong class="block text-gray-900">Flexible Scheduling</strong>
                                 <span class="text-gray-600">20-40 min sessions with no downtime.</span>
                             </div>
                         </div>
                           <div class="flex items-start gap-3">
                             <div class="bg-purple-100 p-2 rounded text-purple-700"><i data-lucide="heart-handshake" class="w-5 h-5"></i></div>
                             <div>
                                 <strong class="block text-gray-900">Compassionate Care</strong>
                                 <span class="text-gray-600">Expert staff supporting you every step.</span>
                             </div>
                         </div>
                     </div>
                </section>

                <!-- Section: Summary/Conclusion -->
                <section id="conclusion" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Conclusion</h2>
                    <p class="mb-4">
                        Securing disability benefits for depression is a complex process, but it is possible for those who are genuinely unable to work. Focus on maintaining consistent medical care and documenting your symptoms accurately.
                    </p>
                    <p class="mb-6">
                        At <a href="index.php" class="text-primary hover:underline font-medium">Karma TMS</a> in Palm Springs, we understand the burden of severe depression. We offer comprehensive evaluations and cutting-edge treatments to help you regain control of your life. If you are struggling, please <a href="contact-us.php" class="text-primary hover:underline font-medium">contact us today</a>.
                    </p>
                </section>

                <!-- Author Box -->
                 <div class="bg-purple-50 border border-purple-100 rounded-xl p-6 md:p-8 mb-12 flex gap-4 md:gap-8 items-start shadow-sm w-full">
                    <div class="flex-shrink-0">
                        <div class="p-1 rounded-full border-2" style="border-color: rgba(87, 38, 112, 0.3);">
                            <img src="https://www.prtms.com/wp-content/uploads/2023/03/Dr.-Keerthy-Sunder-scaled.jpg" 
                                alt="Dr. Keerthy Sunder" 
                                class="rounded-full object-cover" style="width:140px;height:140px;border-radius:50%">
                        </div>
                    </div>
                    <div class="flex-1 min-w-0 text-left">
                        <h4 class="text-2xl md:text-3xl font-bold mb-1 ml-2" style="color: #572670;">About the Author</h4>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2 ml-2"><a href="about.php" class="text-gray-900 hover:text-primary transition-colors">Dr. Keerthy Sunder</a></h3>
                        <p class="text-gray-500 font-medium mb-3 text-base ml-2">Board-Certified Psychiatrist | KarmaTMS</p>
                        <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                            Dr. Keerthy Sunder is a board-certified psychiatrist dedicated to helping patients overcome <a href="tms-therapy-for-treatment-resistant-depression.php" class="text-primary hover:underline">treatment-resistant mental health conditions</a>. He specializes in advanced therapies including <a href="tms-therapy.php" class="text-primary hover:underline">TMS</a> and personalized <a href="medication-management.php" class="text-primary hover:underline">medication management</a>.
                        </p>
                    </div>
                </div>

                <!-- FAQ Section -->
                <section class="mb-12" id="faq">
                    <h2 class="text-3xl font-bold text-primary mb-8">
                        Frequently Asked Questions
                    </h2>
                    
                    <div class="space-y-4">
                        
                        <!-- Q1 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How much does disability pay for depression?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    The amount varies based on your work history and earnings (for SSDI). For 2025, the average SSDI monthly benefit is around $1,500, but it can be higher. SSI payments are set by federal rates.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Is it hard to get disability for depression and anxiety?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes, it can be difficult because mental health conditions are invisible and subjective. Roughly 60-70% of initial applications are denied. Providing strong medical evidence and following treatment plans improves your chances.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can I work while applying for disability?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    You can work a limited amount, but if you earn more than the "Substantial Gainful Activity" (SGA) limit (approx. $1,550/month in 2024), you will generally be considered not disabled.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Does seeing a therapist qualify as medical evidence?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes, records from licensed therapists, psychologists, and psychiatrists are critical evidence. They document the frequency, severity, and duration of your symptoms.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can I get temporary disability for depression?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Social Security Disability requires the condition to last at least 12 months. However, short-term disability insurance provided by employers or private policies may cover depression for shorter periods.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 text-white" style="color: #ffffff !important;">
                        Find Relief from Depression
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        Don't let depression define your future. Karma TMS offers proven treatments to help you feel like yourself again.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="contact-us.php" class="btn bg-white text-[#572670] hover:bg-gray-100 font-semibold px-8 py-3">
                            Start Your Recovery
                        </a>
                    </div>
                </div>

                <!-- Related Articles -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-primary mb-6 border-l-4 border-primary pl-4">Related Articles</h2>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Post 1: Is Depression a Disability -->
                        <div class="bg-white border border-purple-200 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1765015452/37_kghe3l.png"
                                alt="Is Depression a Disability" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-base mb-2 text-gray-900 transition-colors">
                                    <a href="is-depression-a-disability.php" class="block text-black" style="color: black !important;">Is Depression a Disability?</a>
                                </h3>
                                <p class="text-gray-600 text-xs mb-4">Comprehensive guide on depression as a disability, including legal rights and support resources.</p>
                                <a href="is-depression-a-disability.php" class="text-primary font-medium text-xs inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Post 2: Anxiety -->
                        <div class="bg-white border border-purple-200 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                             <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763033666/6_rrkhgo.png"
                                alt="TMS for Anxiety" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-base mb-2 text-gray-900 transition-colors">
                                    <a href="tms-anxiety-veterans.php" class="block text-black" style="color: black !important;">TMS for Anxiety in Veterans</a>
                                </h3>
                                <p class="text-gray-600 text-xs mb-4">Discover how TMS helps veterans manage anxiety beyond medication.</p>
                                <a href="tms-anxiety-veterans.php" class="text-primary font-medium text-xs inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3: Understanding PTSD -->
                        <div class="bg-white border border-purple-200 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763033666/5_kvtlku.png"
                                alt="Understanding PTSD" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-base mb-2 text-gray-900 transition-colors">
                                    <a href="understanding-ptsd-veterans.php" class="block text-black" style="color: black !important;">Understanding PTSD in Veterans</a>
                                </h3>
                                <p class="text-gray-600 text-xs mb-4">Complete guide to PTSD signs, symptoms, and treatment paths including TMS therapy.</p>
                                <a href="understanding-ptsd-veterans.php" class="text-primary font-medium text-xs inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
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

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();

        function scrollToSection(id) {
            const element = document.getElementById(id);
            if (element) {
                const offset = 100;
                const bodyRect = document.body.getBoundingClientRect().top;
                const elementRect = element.getBoundingClientRect().top;
                const elementPosition = elementRect - bodyRect;
                const offsetPosition = elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }

        // Active state for TOC
        document.addEventListener('scroll', () => {
            const sections = ['intro', 'is-it-disability', 'ssdi-vs-ssi', 'criteria', 'how-to-prove', 'tms-role', 'conclusion', 'faq'];
            const buttons = document.querySelectorAll('.toc-button');
            
            let current = '';

            sections.forEach(section => {
                const element = document.getElementById(section);
                if (element) {
                    const rect = element.getBoundingClientRect();
                    if (rect.top <= 150) {
                        current = section;
                    }
                }
            });

            buttons.forEach(button => {
                button.classList.remove('active');
                if (button.getAttribute('onclick').includes(current)) {
                    button.classList.add('active');
                }
            });
        });

        // FAQ Toggle
        function toggleBlogFAQ(button) {
            const item = button.parentElement;
            const content = button.nextElementSibling;
            const isOpen = item.getAttribute('data-state') === 'open';
            
            // Close all first
            document.querySelectorAll('.accordion-item').forEach(i => {
                i.setAttribute('data-state', 'closed');
                i.querySelector('.accordion-content').style.maxHeight = null;
            });

            if (!isOpen) {
                item.setAttribute('data-state', 'open');
                content.style.maxHeight = content.scrollHeight + "px";
            }
        }
    </script>
</body>

</html>
