<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Can TMS Therapy Make Depression Worse? | Karma TMS Blog</title>
    <meta name="description"
        content="Can TMS therapy make depression worse? Learn about potential temporary worsening symptoms, how to recognize them, and why TMS remains a safe, effective treatment for most patients.">
    <meta name="keywords"
        content="can TMS make depression worse, TMS side effects, TMS worsening symptoms, transcranial magnetic stimulation depression, TMS therapy risks">
    <link rel="canonical" href="can-tms-therapy-make-depression-worse.php">
    <meta property="og:title" content="Can TMS Therapy Make Depression Worse? | Karma TMS Blog">
    <meta property="og:description"
        content="Can TMS therapy make depression worse? Learn about potential temporary worsening symptoms, how to recognize them, and why TMS remains a safe, effective treatment for most patients.">
    <meta property="og:image" content="images/blog/tms_depression_worse_real.png">
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

        /* Make links in article content visually obvious */
        .prose a {
            color: #7B3FA0 !important;
            text-decoration: underline !important;
            font-weight: 600;
            transition: color 0.2s;
        }
        .prose a:hover {
            color: #572670 !important;
            text-decoration: none !important;
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

        .bg-purple-50 { background-color: #faf5ff; }
        .border-purple-100 { border-color: #f3e8ff; }

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
      "headline": "Can TMS Therapy Make Depression Worse? What Patients Need to Know",
      "description": "Can TMS therapy make depression worse? Learn about potential temporary worsening symptoms, how to recognize them, and why TMS remains a safe, effective treatment for most patients.",
      "image": "images/blog/tms_depression_worse_real.png",
      "author": {
        "@type": "Person",
        "name": "Dr. Keerthy Sunder",
        "jobTitle": "Board-Certified Psychiatrist",
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
      "datePublished": "2026-07-13",
      "dateModified": "2026-07-13",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/can-tms-therapy-make-depression-worse.php"
      }
    }
    </script>

    <!-- FAQ Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Can TMS therapy make depression worse?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "While rare, some patients may experience temporary worsening of symptoms during the first 1-2 weeks of TMS therapy before improvement begins. However, for the vast majority of patients, TMS is safe and effective with no long-term worsening of depression."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take for TMS to start working?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most patients begin to notice improvements in mood between weeks 2-4 of treatment. Some may experience temporary worsening in the first 1-2 weeks before positive effects kick in."
          }
        },
        {
          "@type": "Question",
          "name": "What are common TMS side effects?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The most common TMS side effects include mild scalp discomfort, headaches during treatment, and temporary fatigue. These typically diminish over the first week of treatment."
          }
        },
        {
          "@type": "Question",
          "name": "Is TMS therapy safe?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, TMS therapy is FDA-cleared and has an excellent safety profile. Unlike medications, it has no systemic side effects and does not cause memory problems or cognitive impairment."
          }
        }
      ]
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
                <span class="text-gray-900 font-medium">Can TMS Make Depression Worse?</span>
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
                        July 13, 2026
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        10 min read
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        Dr. Keerthy Sunder
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    Can TMS Therapy Make Depression Worse?
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Separating facts from fears. What the research really shows about TMS and symptom changes during treatment.
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
                                <button class="toc-button" onclick="scrollToSection('understanding-tms')">Understanding TMS</button>
                                <button class="toc-button" onclick="scrollToSection('temporary-worsening')">Temporary Worsening</button>
                                <button class="toc-button" onclick="scrollToSection('when-to-be-concerned')">When to Be Concerned</button>
                                <button class="toc-button" onclick="scrollToSection('safety-profile')">TMS Safety Profile</button>
                                <button class="toc-button" onclick="scrollToSection('managing-expectations')">Managing Expectations</button>
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
                    <img src="images/blog/tms_depression_worse_real.png"
                        alt="Can TMS Therapy Make Depression Worse"
                        class="w-full object-cover rounded-xl mb-8 shadow-md"
                        style="max-height: 480px; object-fit: cover;">

                    <p class="text-xl leading-relaxed text-gray-700">
                        <strong>If you've been researching TMS therapy for depression, you may have come across concerns: "Can TMS therapy make depression worse?"</strong> It's a valid question, especially when considering a treatment that directly affects your brain. At <a href="tms-therapy.php" class="text-primary hover:underline">Karma TMS</a>, we believe informed patients make better decisions—and transparency builds trust.
                    </p>
                    <p class="mt-4 text-gray-700">
                        The short answer: While temporary fluctuations in mood can occur during TMS treatment, <strong>long-term worsening of depression from TMS is extremely rare</strong>. In fact, TMS is one of the most well-studied, FDA-cleared treatments for depression with an excellent safety profile. Let's explore what the science actually says.
                    </p>
                </div>

                <!-- Section: Understanding TMS -->
                <section id="understanding-tms" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Understanding How TMS Works</h2>
                    <p class="mb-6">
                        Before addressing whether TMS can make depression worse, it's important to understand what <a href="what-is-tms-therapy.php" class="text-primary hover:underline">TMS therapy</a> actually does to your brain.
                    </p>
                    <p class="mb-6">
                        Transcranial Magnetic Stimulation uses focused magnetic pulses to stimulate specific areas of the prefrontal cortex—the brain region responsible for mood regulation. Unlike antidepressant medications that work systemically throughout your body, TMS targets exactly where the problem originates.
                    </p>
                    <p class="mb-6">
                        Think of it like rehabilitation for your brain. Just as physical therapy might cause temporary soreness as muscles heal and strengthen, TMS can sometimes cause temporary adjustments in how your brain processes emotions during the early stages of treatment.
                    </p>

                    <div class="bg-blue-50 p-6 rounded-xl border border-blue-200 mb-6">
                        <h4 class="font-bold text-blue-900 mb-3 flex items-center gap-2">
                            <i data-lucide="info" class="w-5 h-5"></i>
                            Key Fact
                        </h4>
                        <p class="text-blue-800">Clinical studies show that 50-70% of patients with treatment-resistant depression experience significant improvement with TMS therapy. Less than 1% report any lasting negative effects.</p>
                    </div>
                </section>

                <!-- Section: Temporary Worsening -->
                <section id="temporary-worsening" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Can You Feel Worse Before Feeling Better?</h2>
                    <p class="mb-6">
                        This is perhaps the most common source of anxiety for patients considering TMS. The phenomenon is sometimes called the "lag effect"—the time between starting treatment and experiencing its benefits.
                    </p>
                    <p class="mb-6">
                        Some patients report feeling slightly more anxious, irritable, or emotionally sensitive during the first 1-2 weeks of TMS treatment. This is <strong>not</strong> the same as "making depression worse." Here's why:
                    </p>

                    <div class="space-y-6 mb-8">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold text-lg shadow-sm">!</div>
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">Temporary Adjustment Period</h3>
                                <p class="text-gray-600">Your brain is literally rewiring itself. Neuroplasticity—the brain's ability to form new neural connections—takes time. During this adjustment phase, some patients may experience mood fluctuations that typically resolve within the first two weeks.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold text-lg shadow-sm">!</div>
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">Heightened Awareness</h3>
                                <p class="text-gray-600">As depression begins to lift, you may become more aware of emotions you've been suppressing. This increased emotional sensitivity is actually a sign that TMS is working—your brain is reconnecting with feelings it had numbed.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold text-lg shadow-sm">!</div>
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">Expectation vs. Reality</h3>
                                <p class="text-gray-600">Some patients expect immediate results. When improvement doesn't happen overnight, they may interpret this as the treatment "not working" or making things worse. Be sure to discuss <a href="how-long-does-tms-take-to-work-for-depression.php" class="text-primary hover:underline">realistic TMS timelines</a> with your provider.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-green-50 p-6 rounded-xl border border-green-100 mb-6">
                        <h4 class="font-bold text-green-900 mb-3 flex items-center gap-2">
                            <i data-lucide="check-circle" class="w-5 h-5"></i>
                            Good News
                        </h4>
                        <p class="text-green-800">Studies consistently show that any initial worsening of symptoms is temporary and typically resolves within the first 2 weeks of treatment. Most patients report significant improvement by week 3-4.</p>
                    </div>
                </section>

                <!-- Section: When to Be Concerned -->
                <section id="when-to-be-concerned" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">When You Should Be Concerned</h2>
                    <p class="mb-6">
                        While temporary fluctuations are normal, there are certain situations that warrant immediate attention from your TMS provider or psychiatrist:
                    </p>

                    <div class="comparison-table-wrapper">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>Normal (Not Concerning)</th>
                                    <th>Contact Your Provider</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mild headache after sessions that resolves with OTC pain relievers</td>
                                    <td>Severe or persistent headache lasting more than 24 hours</td>
                                </tr>
                                <tr>
                                    <td>Slight increase in anxiety during weeks 1-2</td>
                                    <td>Panic attacks or overwhelming anxiety</td>
                                </tr>
                                <tr>
                                    <td>Feeling more emotionally sensitive</td>
                                    <td>Thoughts of self-harm or suicide</td>
                                </tr>
                                <tr>
                                    <td>Mild fatigue after sessions</td>
                                    <td>Extreme fatigue that prevents daily functioning</td>
                                </tr>
                                <tr>
                                    <td>Anticipation anxiety before treatment</td>
                                    <td>New or worsening suicidal ideation</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="bg-red-50 p-6 rounded-xl border border-red-200 mb-6">
                        <h4 class="font-bold text-red-900 mb-3 flex items-center gap-2">
                            <i data-lucide="alert-triangle" class="w-5 h-5"></i>
                            Important Safety Note
                        </h4>
                        <p class="text-red-800">If you experience thoughts of self-harm or suicide at any point during TMS treatment, contact emergency services (988 Suicide & Crisis Lifeline) immediately. While TMS itself is not associated with increased suicidal ideation, depression itself can include these thoughts—this is a medical emergency regardless of treatment.</p>
                    </div>
                </section>

                <!-- Section: Safety Profile -->
                <section id="safety-profile" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">TMS Safety Profile: What Research Shows</h2>
                    <p class="mb-6">
                        Let's address the question directly: <strong>Can TMS therapy make depression worse in the long term?</strong> The evidence strongly suggests no.
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white border border-gray-200 rounded-xl p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                                    <i data-lucide="shield-check" class="w-6 h-6 text-green-600"></i>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900">FDA-Cleared Since 2008</h3>
                            </div>
                            <p class="text-gray-600">TMS received FDA clearance for treatment-resistant depression after extensive clinical trials demonstrating both safety and efficacy.</p>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-xl p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                                    <i data-lucide="activity" class="w-6 h-6 text-green-600"></i>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900">No Systemic Effects</h3>
                            </div>
                            <p class="text-gray-600">Unlike medications, TMS doesn't enter your bloodstream, so there are no systemic side effects like weight gain, sexual dysfunction, or fatigue.</p>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-xl p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                                    <i data-lucide="brain" class="w-6 h-6 text-green-600"></i>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900">No Cognitive Impact</h3>
                            </div>
                            <p class="text-gray-600">Unlike ECT (electroconvulsive therapy), TMS does not cause memory loss, confusion, or cognitive impairment.</p>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-xl p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                                    <i data-lucide="heart" class="w-6 h-6 text-green-600"></i>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900">Non-Invasive</h3>
                            </div>
                            <p class="text-gray-600">No surgery, no implants, no anesthesia. You remain fully awake and can drive yourself to and from appointments.</p>
                        </div>
                    </div>

                    <p class="mb-6">
                        The most comprehensive review to date, published in <em>JAMA Psychiatry</em>, analyzed data from over 200 clinical trials and found that TMS was associated with minimal adverse effects, with most side effects being mild and self-limiting.
                    </p>
                </section>

                <!-- Section: Managing Expectations -->
                <section id="managing-expectations" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Managing Your TMS Treatment Expectations</h2>
                    <p class="mb-6">
                        The key to having a positive TMS experience is setting realistic expectations. Here's what most patients experience during their <a href="tms-therapy-for-treatment-resistant-depression.php" class="text-primary hover:underline">TMS treatment journey</a>:
                    </p>

                    <div class="space-y-6 mb-8">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg shadow-sm">1</div>
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">Week 1-2: Adjustment Phase</h3>
                                <p class="text-gray-600">Some patients may feel slightly more anxious or experience mild headaches. This is normal and typically resolves. Stay committed to the treatment plan.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg shadow-sm">2</div>
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">Week 2-4: Early Improvements</h3>
                                <p class="text-gray-600">Most patients begin noticing subtle improvements in sleep, energy, and mood. These gains often continue to build over time.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg shadow-sm">3</div>
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">Week 4-6: Significant Changes</h3>
                                <p class="text-gray-600">Clinical improvements typically become more pronounced. Many patients report substantial relief from depressive symptoms by the end of their treatment course.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg shadow-sm">4</div>
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">Post-Treatment: Maintenance</h3>
                                <p class="text-gray-600">Results can last 6-12 months or longer. Some patients benefit from occasional maintenance sessions. <a href="is-tms-therapy-permanent.php" class="text-primary hover:underline">Learn more about TMS durability</a>.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 mb-6">
                        <h4 class="font-bold text-purple-900 mb-2">Questions to Ask Your TMS Provider:</h4>
                        <ul class="list-disc pl-6 space-y-2 text-gray-700">
                            <li>What side effects should I expect during the first two weeks?</li>
                            <li>When should I expect to see improvements?</li>
                            <li>What should I do if I feel worse instead of better?</li>
                            <li>Are there any warning signs that require immediate attention?</li>
                            <li>What does your clinic do to monitor patient progress?</li>
                        </ul>
                    </div>
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
                            Dr. Keerthy Sunder is a board-certified psychiatrist specializing in TMS therapy and integrative psychiatry. He is passionate about bringing advanced, evidence-based treatments to the Palm Springs community to help patients achieve lasting mental wellness.
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
                                <span>Can TMS therapy make depression worse?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    While rare, some patients may experience temporary worsening of symptoms during the first 1-2 weeks of TMS therapy before improvement begins. However, for the vast majority of patients, TMS is safe and effective with no long-term worsening of depression. Any initial symptoms typically resolve as the treatment continues.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How long does it take for TMS to start working?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Most patients begin to notice improvements in mood between weeks 2-4 of treatment. Some may experience temporary worsening in the first 1-2 weeks before positive effects kick in. Peak improvement is typically seen around weeks 4-6 of the treatment course.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>What are common TMS side effects?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    The most common TMS side effects include mild scalp discomfort or tapping sensation during treatment, headaches (usually mild and temporary), and slight fatigue after sessions. These typically diminish over the first week of treatment. Unlike medications, TMS has no systemic side effects.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Is TMS therapy safe?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes, TMS therapy is FDA-cleared and has an excellent safety profile. Unlike medications, it has no systemic side effects and does not cause memory problems, cognitive impairment, or seizures under normal treatment parameters. It requires no anesthesia and no recovery time.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can I stop TMS if I feel worse?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    If you're experiencing concerning symptoms, it's important to communicate with your TMS provider immediately rather than stopping treatment on your own. Your provider can adjust the treatment parameters, address side effects, or determine if continuing is appropriate. Abruptly stopping may mean missing out on benefits that come with continued treatment.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Have More Questions About TMS?
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        Our Palm Springs team is here to address your concerns and help you make an informed decision about TMS therapy.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="contact-us.php" class="btn bg-white text-[#572670] hover:bg-gray-100 font-semibold px-8 py-3">
                            Schedule Free Consultation
                        </a>
                    </div>
                </div>

                <!-- Related Posts -->
                 <section class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-8">Related Articles</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Post 1 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <div class="w-full h-48 bg-no-repeat bg-top" style="background-image: url('images/blog/related-bg-v2.png'); background-size: 300% auto; background-position: 0% 0;"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="is-tms-therapy-safe.php" class="block text-black" style="color: black !important;">Is TMS Therapy Safe?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Learn about the comprehensive safety profile of TMS therapy and what to expect during treatment.</p>
                                <a href="is-tms-therapy-safe.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 2 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <div class="w-full h-48 bg-no-repeat bg-top" style="background-image: url('images/blog/related-bg-v2.png'); background-size: 300% auto; background-position: 50% 0;"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="how-long-does-tms-take-to-work-for-depression.php" class="block text-black" style="color: black !important;">How Long Does TMS Take to Work?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Get a week-by-week breakdown of what to expect during your TMS treatment journey.</p>
                                <a href="how-long-does-tms-take-to-work-for-depression.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <div class="w-full h-48 bg-no-repeat bg-top" style="background-image: url('images/blog/related-bg-v2.png'); background-size: 300% auto; background-position: 100% 0;"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="why-tms-works-when-antidepressants-dont.php" class="block text-black" style="color: black !important;">Why TMS Works When Antidepressants Don't</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Understand the neuroscience behind why TMS succeeds where traditional medications fail.</p>
                                <a href="why-tms-works-when-antidepressants-dont.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
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
