<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How Successful is TMS Treatment? | Karma TMS Blog</title>
    <meta name="description"
        content="Discover the success rates of TMS therapy for depression and anxiety. Learn about response and remission rates, and long-term outcomes.">
    <meta name="keywords"
        content="TMS success rate, TMS effectiveness, depression treatment outcomes, TMS remission rate, Karma TMS success, mental health recovery">
    <link rel="canonical" href="how-successful-is-tms-treatment.php">
    <meta property="og:title" content="How Successful is TMS Treatment? | Karma TMS Blog">
    <meta property="og:description"
        content="Dive deeper into the clinical outcomes and success rates of TMS. What defines success? How long does it last? Get the stats here.">
    <meta property="og:image"
        content="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/15_ym6n6b.png">
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

        a{
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
      "headline": "How Successful is TMS Treatment?",
      "description": "Discover the success rates of TMS therapy for depression and anxiety. Learn about response and remission rates.",
      "image": "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/15_ym6n6b.png",
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
      "datePublished": "2025-05-12",
      "dateModified": "2025-05-12",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blog/how-successful-tms-treatment"
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
                <span class="text-gray-900 font-medium">How Successful is TMS Treatment?</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="relative bg-hero-gradient text-white py-20 overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="flex flex-wrap justify-center gap-4 mb-6 text-sm">
                    <span class="flex items-center gap-1 bg-white-10 px-3 py-1 rounded-full backdrop-blur-sm">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        May 12, 2025
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-3 py-1 rounded-full backdrop-blur-sm">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        7 min read
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-3 py-1 rounded-full backdrop-blur-sm">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        KarmatmsAdmin
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    How Successful is TMS Treatment? Success Rates, Statistics & Real-World Outcomes
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Dive deeper into the clinical outcomes, understanding response vs. remission, and what to expect from your TMS journey.
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
                                <button class="toc-button" onclick="scrollToSection('definitions')">
                                    Response vs. Remission
                                </button>
                                <button class="toc-button" onclick="scrollToSection('stats')">
                                    The Statistics
                                </button>
                                <button class="toc-button" onclick="scrollToSection('factors')">
                                    Factors Influencing Success
                                </button>
                                <button class="toc-button" onclick="scrollToSection('longterm')">
                                    Long-Term Results
                                </button>
                                <button class="toc-button" onclick="scrollToSection('faqs')">
                                    FAQs
                                </button>
                                <button class="toc-button" onclick="scrollToSection('conclusion')">
                                    Conclusion
                                </button>
                            </nav>
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <a href="contact-us.php" class="btn w-full bg-primary text-white hover:opacity-90 justify-center mb-6">
                                    Book Consultation
                                </a>
                                <img src="images/blog/how-successful-sidebar.png" alt="How Successful is TMS?" class="w-full rounded-xl shadow-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Article Content -->
            <article class="lg:col-span-3 prose prose-lg max-w-none text-gray-700">
                <!-- Introduction -->
                <div class="mb-12" id="intro">
                    <img src="images/blog/how-successful-is-tms-treatment-banner.png" 
                        alt="How Successful is TMS Treatment?"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        When considering a new medical treatment, especially for mental health conditions like <a href="depression.php" class="text-primary hover:underline">Major Depressive Disorder (MDD)</a> or <a href="anxiety.php" class="text-primary hover:underline">Anxiety</a>, the most pressing question is often: "Does it work?" For patients who have not found relief with traditional medications, TMS involves a significant commitment of time and hope. Fortunately, the data is compelling.
                    </p>
                </div>

                <!-- Section 1: Definitions -->
                <section id="definitions" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Understanding "Success": Response vs. Remission</h2>
                    
                    <p class="mb-6">
                        In clinical psychiatry, success is typically measured in two ways: <strong>Response</strong> and <strong>Remission</strong>.
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white border text-card-foreground shadow-sm rounded-xl p-6">
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Response</h4>
                            <p class="text-sm text-gray-600">A "clinical response" is generally defined as a 50% or greater reduction in symptom severity. This means you feel significantly better, your daily functioning improves, and the burden of depression lifts substantially.</p>
                        </div>
                        <div class="bg-white border text-card-foreground shadow-sm rounded-xl p-6">
                            <h4 class="font-bold text-gray-900 mb-2 text-lg">Remission</h4>
                            <p class="text-sm text-gray-600">Remission means the virtual disappearance of symptoms. The patient is no longer considered clinically depressed and returns to their pre-depression baseline of functioning.</p>
                        </div>
                    </div>
                </section>

                <!-- Section 2: Stats -->
                <section id="stats" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">The Statistics: What the Data Shows</h2>
                    
                    <p class="mb-6">
                        TMS has been extensively studied in both clinical trials and real-world practice. For patients dealing with <a href="tms-therapy-for-treatment-resistant-depression.php" class="text-primary hover:underline">Treatment-Resistant Depression (TRD)</a>—those who have failed multiple medications—TMS outcomes are remarkably positive.
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-green-50 border border-green-100 rounded-xl p-6 text-center">
                            <div class="text-4xl font-bold text-green-600 mb-2">50-60%</div>
                            <p class="font-medium text-gray-900">Response Rate</p>
                            <p class="text-xs text-gray-600 mt-2">Of patients achieve at least 50% improvement</p>
                        </div>
                        <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 text-center">
                            <div class="text-4xl font-bold text-blue-600 mb-2">~33%</div>
                            <p class="font-medium text-gray-900">Remission Rate</p>
                            <p class="text-xs text-gray-600 mt-2">Of patients achieve complete symptom relief</p>
                        </div>
                    </div>
                    
                    <p class="mb-6">
                        To put this in perspective: The famous STAR*D study showed that for patients who have already failed 2 or more antidepressants, the chance of achieving remission with a 3rd medication is less than 15%. TMS more than doubles this likelihood.
                    </p>
                </section>

                <!-- Section 3: Factors -->
                <section id="factors" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Factors Influencing Success</h2>
                    <p class="mb-6">
                        While TMS is highly effective, individual results can vary. Several factors can influence outcome success:
                    </p>
                    <ul class="list-disc pl-6 space-y-4 mb-6">
                        <li><strong>Treatment Adherence:</strong> Completing the full course of 36 sessions is critical for "rewiring" the brain's neural pathways.</li>
                        <li><strong>Concurrent Therapy:</strong> Combining TMS with psychotherapy often yields better results than either treatment alone.</li>
                        <li><strong>Lifestyle Factors:</strong> Sleep, diet, and substance use (alcohol/drugs) can impact the brain's ability to heal (neuroplasticity).</li>
                    </ul>
                </section>

                <!-- Section 4: Long-term -->
                <section id="longterm" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Long-Term Results & Durability</h2>
                    <p class="mb-6">
                        TMS is not just a quick fix; it creates structural changes in the brain. Research indicates that the benefits are durable.
                    </p>
                    <div class="bg-purple-50 border border-purple-200 rounded-xl p-6 mb-6">
                         <p class="text-gray-900 font-medium mb-2">12-Month Durability</p>
                         <p class="text-gray-700">Follow-up studies show that approximately <strong>60-70% of patients</strong> who respond to TMS maintain their improvement 12 months after treatment.</p>
                    </div>
                </section>

                <!-- Additional Visuals - Converted to HTML for Clarity -->
                <section class="mb-12">
                    <!-- TMS Effectiveness for Depression -->
                    <div class="mb-10">
                        <h2 class="text-3xl font-bold text-primary mb-4">TMS Effectiveness for Depression</h2>
                        <p class="mb-6"><a href="depression.php" class="text-primary hover:underline">Depression</a> is the most extensively studied condition for TMS therapy, with the strongest evidence base.</p>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Clinical Trial Results</h3>
                        
                        <div class="space-y-6">
                            <!-- Industry Sponsored Trials -->
                            <div class="bg-white border-2 border-primary rounded-xl p-6 shadow-sm">
                                <h4 class="text-lg font-bold text-gray-900 mb-4">Industry-Sponsored Trials</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-start gap-2"><span class="text-primary font-bold">•</span> Response rate: 58%</li>
                                    <li class="flex items-start gap-2"><span class="text-primary font-bold">•</span> Remission rate: 37%</li>
                                    <li class="flex items-start gap-2"><span class="text-primary font-bold">•</span> Average symptom reduction: 47%</li>
                                    <li class="flex items-start gap-2"><span class="text-primary font-bold">•</span> Treatment completion rate: 92%</li>
                                </ul>
                            </div>

                            <!-- NIMH Independent Study -->
                            <div class="bg-white border-2 border-primary rounded-xl p-6 shadow-sm">
                                <h4 class="text-lg font-bold text-gray-900 mb-4">NIMH Independent Study</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-start gap-2"><span class="text-primary font-bold">•</span> Response rate: 58%</li>
                                    <li class="flex items-start gap-2"><span class="text-primary font-bold">•</span> Remission rate: 37%</li>
                                    <li class="flex items-start gap-2"><span class="text-primary font-bold">•</span> Benefits maintained at 6-month follow-up</li>
                                    <li class="flex items-start gap-2"><span class="text-primary font-bold">•</span> Validated real-world effectiveness</li>
                                </ul>
                            </div>

                            <!-- Large-Scale Meta-Analysis -->
                            <div class="bg-white border-2 border-primary rounded-xl p-6 shadow-sm">
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Large-Scale Meta-Analysis</h4>
                                <p class="text-sm text-gray-600 mb-4">Pooled analysis of 29 randomized controlled trials (1,371 patients):</p>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-start gap-2"><span class="text-primary font-bold">•</span> Overall response rate: 52%</li>
                                    <li class="flex items-start gap-2"><span class="text-primary font-bold">•</span> Remission rate: 31%</li>
                                    <li class="flex items-start gap-2"><span class="text-primary font-bold">•</span> Significantly superior to sham treatment (placebo)</li>
                                    <li class="flex items-start gap-2"><span class="text-primary font-bold">•</span> Consistent results across different study populations</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Comparison Table -->
                    <div class="mb-10">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Comparison to Other Treatments</h2>
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse bg-white rounded-xl overflow-hidden shadow-sm">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th class="p-4 text-left font-bold border-r border-[#7B3FA0]">Treatment</th>
                                        <th class="p-4 text-center font-bold border-r border-[#7B3FA0]">Response Rate</th>
                                        <th class="p-4 text-center font-bold">Remission Rate</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 border border-gray-200">
                                    <tr>
                                        <td class="p-4 font-medium text-gray-900 border-r border-gray-200">TMS Therapy</td>
                                        <td class="p-4 text-center text-gray-700 border-r border-gray-200">50-60%</td>
                                        <td class="p-4 text-center text-gray-700">30-40%</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="p-4 font-medium text-gray-900 border-r border-gray-200">Second Antidepressant Trial</td>
                                        <td class="p-4 text-center text-gray-700 border-r border-gray-200">20-30%</td>
                                        <td class="p-4 text-center text-gray-700">10-15%</td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 font-medium text-gray-900 border-r border-gray-200">Electroconvulsive Therapy (ECT)</td>
                                        <td class="p-4 text-center text-gray-700 border-r border-gray-200">70-90%</td>
                                        <td class="p-4 text-center text-gray-700">50-60%</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="p-4 font-medium text-gray-900 border-r border-gray-200">Psychotherapy Alone</td>
                                        <td class="p-4 text-center text-gray-700 border-r border-gray-200">40-50%</td>
                                        <td class="p-4 text-center text-gray-700">25-35%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-xs text-gray-500 mt-2">*Response and remission rates for treatment-resistant depression populations</p>
                    </div>

                    <!-- Future Conditions -->
                    <div class="mb-10">
                        <h2 class="text-3xl font-bold text-primary mb-4">TMS Success with Other Conditions</h2>
                        <p class="mb-6">While depression has the most extensive research, TMS shows promising results for several other mental health conditions:</p>

                        <div class="space-y-6">
                            <!-- Anxiety -->
                            <div class="bg-white border rounded-xl p-6 shadow-sm">
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Anxiety Disorders</h4>
                                <p class="text-primary font-medium mb-3"><a href="anxiety.php" class="text-primary hover:underline">Anxiety</a> responds well to TMS therapy, particularly when it co-occurs with depression.</p>
                                <ul class="space-y-2 text-gray-700 text-sm">
                                    <li class="flex items-start gap-2"><span class="text-gray-400">•</span> <strong>Generalized Anxiety:</strong> 50-70% response rate</li>
                                    <li class="flex items-start gap-2"><span class="text-gray-400">•</span> <strong>Panic Disorder:</strong> 40-60% symptom reduction</li>
                                    <li class="flex items-start gap-2"><span class="text-gray-400">•</span> <strong>Anxious Depression:</strong> FDA-approved indication with 55% response rate</li>
                                    <li class="flex items-start gap-2"><span class="text-gray-400">•</span> Significant reduction in worry, tension, and physical anxiety symptoms</li>
                                </ul>
                            </div>

                            <!-- OCD -->
                            <div class="bg-white border rounded-xl p-6 shadow-sm">
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Obsessive-Compulsive Disorder (OCD)</h4>
                                <p class="text-primary font-medium mb-3"><a href="ocd.php" class="text-primary hover:underline">OCD</a> is the second condition to receive FDA approval for TMS treatment.</p>
                                <ul class="space-y-2 text-gray-700 text-sm">
                                    <li class="flex items-start gap-2"><span class="text-gray-400">•</span> <strong>Response Rate:</strong> 35-45% show significant improvement</li>
                                    <li class="flex items-start gap-2"><span class="text-gray-400">•</span> <strong>FDA Approval:</strong> Granted in 2018 based on strong clinical evidence</li>
                                    <li class="flex items-start gap-2"><span class="text-gray-400">•</span> Reduces both obsessions and compulsive behaviors</li>
                                    <li class="flex items-start gap-2"><span class="text-gray-400">•</span> Effective for treatment-resistant cases</li>
                                </ul>
                            </div>

                            <!-- PTSD -->
                            <div class="bg-white border rounded-xl p-6 shadow-sm">
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Post-Traumatic Stress Disorder (PTSD)</h4>
                                <p class="text-primary font-medium mb-3">Emerging evidence shows TMS can help with <a href="ptsd.php" class="text-primary hover:underline">PTSD</a> symptoms, especially in veterans.</p>
                                <ul class="space-y-2 text-gray-700 text-sm">
                                    <li class="flex items-start gap-2"><span class="text-gray-400">•</span> <strong>Response Rate:</strong> 40-55% in preliminary studies</li>
                                    <li class="flex items-start gap-2"><span class="text-gray-400">•</span> Reduces intrusive thoughts, hypervigilance, and emotional numbness</li>
                                    <li class="flex items-start gap-2"><span class="text-gray-400">•</span> Particularly effective when combined with trauma therapy</li>
                                    <li class="flex items-start gap-2"><span class="text-gray-400">•</span> VA hospitals expanding TMS access for PTSD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Conclusion -->
                <section id="conclusion" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Conclusion</h2>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        The success rates of TMS therapy offer a beacon of hope for those who have exhausted other options. With high response rates, a favorable safety profile, and durable results, it stands as one of the most effective treatments in modern psychiatry.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        If you are ready to see if you can be part of the success story, <strong><a href="contact-us.php" class="text-primary hover:underline">schedule a consultation with Dr. Sunder</a></strong> today.
                    </p>
                </section>

                <!-- Author Box -->
                <div class="bg-white rounded-xl p-6 md:p-8 mb-12 flex gap-4 md:gap-8 items-start shadow-sm w-full" style="border: 1px solid rgba(87, 38, 112, 0.2);">
                    <div class="flex-shrink-0">
                        <div class="p-1 rounded-full border-2" style="border-color: rgba(87, 38, 112, 0.3);">
                            <img src="https://www.prtms.com/wp-content/uploads/2023/03/Dr.-Keerthy-Sunder-scaled.jpg" 
                                alt="Dr. Keerthy Sunder" 
                                class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover" style="width:200px;height:200px;border-radius:50%">
                        </div>
                    </div>
                    <div class="flex-1 min-w-0 text-left">
                        <h4 class="text-lg md:text-xl font-bold mb-1" style="color: #572670;">Medical Director</h4>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2"><a href="about.php" class="text-gray-900 hover:text-primary transition-colors">Dr. Keerthy Sunder</a></h3>
                        <p class="text-gray-500 font-medium mb-3 text-sm">Board-Certified Psychiatrist | KarmaTMS</p>
                        <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                            Dr. Keerthy Sunder oversees all TMS treatments at KarmaTMS. He is dedicated to providing legitimate, evidence-based care to the Palm Springs community.
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
                                <span>Is TMS therapy FDA approved?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes, TMS therapy is FDA-approved. It was deemed safe and effective for the treatment of Major Depressive Disorder (MDD) in 2008. Since then, the FDA has also cleared TMS for treating Obsessive-Compulsive Disorder (OCD), smoking cessation, and anxiety symptoms associated with depression.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Is TMS therapy scientifically proven?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Absolutely. TMS therapy is backed by decades of clinical research and numerous peer-reviewed studies. Clinical trials have consistently demonstrated its effectiveness, with success rates often showing that 50-60% of patients experience significant improvement, and approximately one-third achieve full remission from their symptoms.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Do major medical organizations recognize TMS therapy?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes. TMS is recognized as a standard-of-care treatment by leading medical organizations worldwide, including the American Psychiatric Association (APA) and the National Institute of Mental Health (NIMH). It is widely practiced in top-tier medical centers such as Mayo Clinic, Johns Hopkins, and Cleveland Clinic.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Will my insurance cover TMS therapy?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Most major insurance providers, including Medicare, Anthem Blue Cross, Blue Shield, UnitedHealthcare, Cigna, and Aetna, cover TMS therapy for the treatment of Major Depressive Disorder. Coverage typically requires that you have tried medication and psychotherapy without sufficient relief.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How does TMS compare to other depression treatments?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Unlike antidepressants, which are systemic and circulate chemicals throughout the entire body, TMS is a targeted treatment that works directly on the specific area of the brain involved in mood regulation. This means it avoids common medication side effects like weight gain, sexual dysfunction, and drowsiness. It is also non-invasive, unlike Electroconvulsive Therapy (ECT), and requires no anesthesia or recovery time.
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Are there any risks or side effects with TMS?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    TMS is considered very safe and well-tolerated. It does not involve surgery or anesthesia. The most common side effect is mild scalp discomfort or a headache during or after treatment, which typically diminishes as your body adjusts. Serious side effects are extremely rare.
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Ready to Try a Proven Treatment?
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        Schedule a free consultation to discuss if FDA-approved TMS therapy is right for you.
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
                                    <a href="is-tms-therapy-permanent.php" class="block text-gray-900">Is TMS Therapy Permanent?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Discover the long-term effectiveness of TMS and what to expect.</p>
                                <a href="is-tms-therapy-permanent.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Post 2 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/14_dszfwi.png"
                                alt="Is TMS Therapy Legitimate?" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="is-tms-therapy-legitimate.php" class="block text-gray-900">Is TMS Therapy Legitimate?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Learn about the science, FDA approval, and legitimacy of TMS.</p>
                                <a href="is-tms-therapy-legitimate.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
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
                                    <a href="why-tms-requires-multiple-sessions.php" class="block text-gray-900">Why TMS Requires Multiple Sessions</a>
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
        });
    </script>
</body>

</html>
