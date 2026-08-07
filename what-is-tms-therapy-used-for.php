<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Is TMS Therapy Used For? Complete Guide | Karma TMS Blog</title>
    <meta name="description"
        content="What is TMS therapy used for? Discover the FDA-approved and off-label uses of Transcranial Magnetic Stimulation for depression, anxiety, OCD, PTSD, and more.">
    <meta name="keywords"
        content="what is TMS used for, TMS therapy applications, TMS treatment conditions, transcranial magnetic stimulation uses, TMS for depression anxiety OCD">
    <link rel="canonical" href="what-is-tms-therapy-used-for.php">
    <meta property="og:title" content="What Is TMS Therapy Used For? Complete Guide | Karma TMS Blog">
    <meta property="og:description"
        content="What is TMS therapy used for? Discover the FDA-approved and off-label uses of Transcranial Magnetic Stimulation for depression, anxiety, OCD, PTSD, and more.">
    <meta property="og:image" content="images/blog/what-is-tms-therapy-used-for-photo.webp">
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

        /* Table Styles */
        .comparison-table-wrapper {
            overflow-x: auto;
            margin-bottom: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border: 1px solid #e5e7eb;
        }
        
        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            background-color: white;
        }
        
        .comparison-table th {
            background-color: #572670;
            color: white;
            padding: 1.25rem 1rem;
            font-weight: 600;
            font-size: 1.05rem;
        }
        
        .comparison-table td {
            padding: 1rem;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
            line-height: 1.6;
        }
        
        .comparison-table tr:last-child td {
            border-bottom: none;
        }
        
        .comparison-table tr:nth-child(even) {
            background-color: #faf5ff;
        }
        .comparison-table tr:hover {
            background-color: #f3e8ff;
            transition: background-color 0.2s;
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
      "headline": "What Is TMS Therapy Used For? Complete Guide to TMS Treatment Applications",
      "description": "What is TMS therapy used for? Discover the FDA-approved and off-label uses of Transcranial Magnetic Stimulation for depression, anxiety, OCD, PTSD, and more.",
      "image": "images/blog/what-is-tms-therapy-used-for-photo.webp",
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
      "datePublished": "2026-07-05",
      "dateModified": "2026-07-05",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/what-is-tms-therapy-used-for.php"
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
          "name": "What is TMS therapy used for?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TMS therapy is primarily used for treatment-resistant depression and OCD. It is FDA-approved for Major Depressive Disorder and Obsessive-Compulsive Disorder. Off-label uses include anxiety, PTSD, migraines, and smoking cessation."
          }
        },
        {
          "@type": "Question",
          "name": "What conditions does TMS treat?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FDA-approved conditions include Major Depressive Disorder and OCD. TMS is also used off-label for anxiety, PTSD, chronic pain, migraines, tinnitus, and cognitive enhancement."
          }
        },
        {
          "@type": "Question",
          "name": "Is TMS therapy only for depression?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No, while most commonly associated with depression, TMS is FDA-approved for OCD and has shown promise for various other neurological and psychiatric conditions through clinical research and off-label use."
          }
        },
        {
          "@type": "Question",
          "name": "How successful is TMS for different conditions?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TMS shows 50-70% response rates for treatment-resistant depression, 60-68% for OCD, and emerging evidence for anxiety (50-60%), PTSD (40-50%), and migraines (40-65%)."
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
                <span class="text-gray-900 font-medium">What Is TMS Therapy Used For?</span>
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
                        July 5, 2026
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
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    What Is TMS Therapy Used For?
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    A comprehensive guide to the FDA-approved and emerging applications of Transcranial Magnetic Stimulation therapy.
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
                                <button class="toc-button" onclick="scrollToSection('fda-approved')">FDA-Approved Uses</button>
                                <button class="toc-button" onclick="scrollToSection('depression')">Depression (MDD)</button>
                                <button class="toc-button" onclick="scrollToSection('ocd')">Obsessive-Compulsive Disorder</button>
                                <button class="toc-button" onclick="scrollToSection('off-label')">Off-Label Uses</button>
                                <button class="toc-button" onclick="scrollToSection('emerging')">Emerging Applications</button>
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
                    <img src="images/blog/what-is-tms-therapy-used-for-photo.webp"
                        alt="Patient receiving a TMS therapy session in the treatment chair at Karma TMS"
                        width="900" height="1351"
                        class="w-full max-w-sm mx-auto block h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        <strong>If you're exploring advanced mental health treatments, you've likely heard of TMS therapy.</strong> But what exactly is it used for? At <a href="tms-therapy.php" class="text-primary hover:underline">Karma TMS</a>, we want to help you understand the full scope of this remarkable, non-invasive treatment.
                    </p>
                    <p class="mt-4 text-gray-700">
                        Transcranial Magnetic Stimulation (TMS) is a FDA-cleared therapy that uses focused magnetic pulses to stimulate specific areas of the brain. While it's best known for treating <strong>treatment-resistant depression</strong>, the applications extend far beyond that single diagnosis.
                    </p>
                    <p class="mt-4 text-gray-700">
                        This guide provides a comprehensive overview of what TMS therapy is used for—both FDA-approved indications and promising off-label applications based on current research.
                    </p>
                </div>

                <!-- Section: FDA-Approved Uses -->
                <section id="fda-approved" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">FDA-Approved Uses of TMS Therapy</h2>
                    <p class="mb-6">
                        The FDA has cleared TMS for specific conditions based on extensive clinical trials demonstrating safety and efficacy:
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white border-2 border-primary rounded-xl p-6 relative overflow-hidden">
                            <div class="absolute top-0 right-0 bg-primary text-white text-xs font-bold px-3 py-1 rounded-bl-lg">
                                FDA 2008
                            </div>
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                                    <i data-lucide="brain" class="w-6 h-6 text-primary"></i>
                                </div>
                                <h3 class="font-bold text-xl text-gray-900">Major Depressive Disorder</h3>
                            </div>
                            <p class="text-gray-600">Treatment-resistant depression in adults who haven't responded to at least one antidepressant medication.</p>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <span class="text-green-600 font-bold">Success Rate: 50-70%</span>
                            </div>
                        </div>

                        <div class="bg-white border-2 border-primary rounded-xl p-6 relative overflow-hidden">
                            <div class="absolute top-0 right-0 bg-primary text-white text-xs font-bold px-3 py-1 rounded-bl-lg">
                                FDA 2018
                            </div>
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                                    <i data-lucide="compass" class="w-6 h-6 text-primary"></i>
                                </div>
                                <h3 class="font-bold text-xl text-gray-900">Obsessive-Compulsive Disorder</h3>
                            </div>
                            <p class="text-gray-600">OCD symptoms in adults who have not responded adequately to traditional OCD treatments.</p>
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <span class="text-green-600 font-bold">Success Rate: 60-68%</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-blue-50 p-6 rounded-xl border border-blue-200 mb-6">
                        <h4 class="font-bold text-blue-900 mb-3 flex items-center gap-2">
                            <i data-lucide="info" class="w-5 h-5"></i>
                            What Does "Treatment-Resistant" Mean?
                        </h4>
                        <p class="text-blue-800">For depression, "treatment-resistant" typically means you've tried 1-4 antidepressant medications without adequate relief. For OCD, it's similar—you've tried traditional treatments including CBT with exposure and response prevention (ERP) without sufficient improvement.</p>
                    </div>
                </section>

                <!-- Section: Depression -->
                <section id="depression" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">TMS for Major Depressive Disorder (MDD)</h2>
                    <p class="mb-6">
                        Depression is the most common application for TMS therapy, and the one with the most extensive research backing.
                    </p>
                    <p class="mb-6">
                        <a href="tms-therapy-for-treatment-resistant-depression.php" class="text-primary hover:underline">TMS for treatment-resistant depression</a> offers hope for the millions of people who have tried multiple antidepressants without success. Unlike medications that affect the entire body, TMS targets the prefrontal cortex—the brain's mood control center—directly.
                    </p>

                    <ul class="list-disc pl-6 space-y-6 mb-8 marker:text-primary text-gray-600">
                        <li>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Proven Effectiveness</h3>
                            <p>Clinical trials consistently show 50-70% of patients with treatment-resistant depression experience significant symptom improvement. Up to 45% achieve full remission.</p>
                        </li>

                        <li>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Drug-Free Treatment</h3>
                            <p>For those who can't tolerate antidepressant side effects or want to avoid medications, TMS offers a non-pharmaceutical approach that doesn't enter your bloodstream.</p>
                        </li>

                        <li>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Durable Results</h3>
                            <p>Benefits can last 6-12 months or longer. Many patients maintain improvements with occasional maintenance sessions. <a href="is-tms-therapy-permanent.php" class="text-primary hover:underline">Learn about TMS longevity</a>.</p>
                        </li>
                    </ul>

                    <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 mb-6">
                        <h4 class="font-bold text-purple-900 mb-3">Who Is a Good Candidate for TMS for Depression?</h4>
                        <ul class="list-disc pl-6 space-y-2 text-gray-700">
                            <li>Adults with Major Depressive Disorder who haven't responded to 1+ antidepressants</li>
                            <li>Those experiencing intolerable medication side effects</li>
                            <li>Patients who prefer non-pharmaceutical treatment options</li>
                            <li>Individuals without metallic implants near the head</li>
                            <li>Those who can commit to daily sessions for 4-6 weeks</li>
                        </ul>
                    </div>
                </section>

                <!-- Section: OCD -->
                <section id="ocd" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">TMS for Obsessive-Compulsive Disorder (OCD)</h2>
                    <p class="mb-6">
                        In 2018, the FDA granted clearance for TMS to treat OCD, making it one of the first non-pharmaceutical interventions specifically approved for this condition.
                    </p>
                    <p class="mb-6">
                        OCD involves repetitive thoughts (obsessions) and ritualistic behaviors (compulsions) that significantly impact daily life. Traditional treatments include cognitive-behavioral therapy (CBT) with exposure and response prevention (ERP), and medications like SSRIs—but many patients don't achieve adequate relief.
                    </p>

                    <ul class="list-disc pl-6 space-y-6 mb-8 marker:text-primary text-gray-600">
                        <li>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">How TMS Helps OCD</h3>
                            <p>TMS targets the supplementary motor area (SMA) and prefrontal cortex—regions involved in the motor urges and inhibitory control that are dysregulated in OCD. By modulating these areas, TMS can reduce the intensity of compulsions and the anxiety they produce.</p>
                        </li>

                        <li>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">TMS as Adjunct Treatment</h3>
                            <p>TMS for OCD is often most effective when combined with ongoing CBT/ERP therapy. TMS can help "loosen" the brain's rigid patterns, making therapy more effective.</p>
                        </li>
                    </ul>

                    <p class="mb-6">
                        If you or a loved one struggles with OCD, <a href="contact-us.php" class="text-primary hover:underline">contact our Palm Springs clinic</a> to learn whether TMS might be right for you.
                    </p>
                </section>

                <!-- Section: Off-Label Uses -->
                <section id="off-label" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Off-Label Uses of TMS</h2>
                    <p class="mb-6">
                        Beyond FDA-approved indications, TMS is used "off-label" by clinicians based on emerging research and clinical experience. While not FDA-cleared for these conditions, studies show promising results:
                    </p>

                    <div class="comparison-table-wrapper">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>Condition</th>
                                    <th>Evidence Level</th>
                                    <th>Typical Response Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><ul class="list-disc pl-5 marker:text-primary mb-0"><li><strong>Generalized Anxiety Disorder (GAD)</strong></li></ul></td>
                                    <td>Strong (multiple RCTs)</td>
                                    <td>50-60% improvement</td>
                                </tr>
                                <tr>
                                    <td><ul class="list-disc pl-5 marker:text-primary mb-0"><li><strong>Post-Traumatic Stress Disorder (PTSD)</strong></li></ul></td>
                                    <td>Moderate (growing evidence)</td>
                                    <td>40-50% improvement</td>
                                </tr>
                                <tr>
                                    <td><ul class="list-disc pl-5 marker:text-primary mb-0"><li><strong>Chronic Pain / Fibromyalgia</strong></li></ul></td>
                                    <td>Moderate</td>
                                    <td>30-50% pain reduction</td>
                                </tr>
                                <tr>
                                    <td><ul class="list-disc pl-5 marker:text-primary mb-0"><li><strong>Migraine Headaches</strong></li></ul></td>
                                    <td>Strong (FDA-cleared for migraines)</td>
                                    <td>40-65% response</td>
                                </tr>
                                <tr>
                                    <td><ul class="list-disc pl-5 marker:text-primary mb-0"><li><strong>Smoking Cessation</strong></li></ul></td>
                                    <td>Moderate (FDA-cleared)</td>
                                    <td>30-40% quit rate</td>
                                </tr>
                                <tr>
                                    <td><ul class="list-disc pl-5 marker:text-primary mb-0"><li><strong>Auditory Hallucinations (Schizophrenia)</strong></li></ul></td>
                                    <td>Moderate</td>
                                    <td>25-50% reduction</td>
                                </tr>
                                <tr>
                                    <td><ul class="list-disc pl-5 marker:text-primary mb-0"><li><strong>Cognitive Enhancement</strong></li></ul></td>
                                    <td>Early/Preliminary</td>
                                    <td>Varies</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="bg-amber-50 p-6 rounded-xl border border-amber-200 mb-6">
                        <h4 class="font-bold text-amber-900 mb-3 flex items-center gap-2">
                            <i data-lucide="alert-circle" class="w-5 h-5"></i>
                            Important Note on Off-Label Use
                        </h4>
                        <p class="text-amber-800">Off-label use means the FDA hasn't cleared TMS specifically for that condition. However, off-label use is legal and common in medicine when supported by research. Insurance coverage for off-label uses varies. Your TMS provider can discuss whether a specific off-label application might be appropriate for you.</p>
                    </div>
                </section>

                <!-- Section: Anxiety -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-6">TMS for Anxiety Disorders</h2>
                    <p class="mb-6">
                        <a href="does-tms-therapy-work-for-anxiety.php" class="text-primary hover:underline">TMS therapy for anxiety</a> is one of the most researched off-label applications. Generalized Anxiety Disorder (GAD), social anxiety, and panic disorder have all shown responsiveness to TMS treatment.
                    </p>

                    <ul class="list-disc pl-6 space-y-6 mb-8 marker:text-primary text-gray-600">
                        <li>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Generalized Anxiety Disorder (GAD)</h3>
                            <p>Studies show TMS targeting the right dorsolateral prefrontal cortex (DLPFC) can significantly reduce anxiety symptoms. A meta-analysis found 50-60% of patients showed meaningful improvement.</p>
                        </li>

                        <li>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Social Anxiety Disorder</h3>
                            <p>TMS has shown promise in reducing social anxiety, particularly when combined with exposure therapy. Patients report decreased fear of social situations and improved functioning.</p>
                        </li>

                        <li>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Panic Disorder</h3>
                            <p>Early research suggests TMS can help reduce the frequency and intensity of panic attacks by modulating brain circuits involved in fear responses.</p>
                        </li>
                    </ul>
                </section>

                <!-- Section: PTSD -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-6">TMS for PTSD</h2>
                    <p class="mb-6">
                        Post-Traumatic Stress Disorder affects millions of veterans and trauma survivors. Traditional treatments include prolonged exposure therapy, EMDR, and medications—but many patients continue to struggle.
                    </p>
                    <p class="mb-6">
                        Research on TMS for PTSD is growing rapidly. Studies suggest that targeting the medial prefrontal cortex and anterior cingulate cortex can help reduce hyperarousal, intrusive memories, and emotional numbing associated with PTSD.
                    </p>

                    <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 mb-6">
                        <h4 class="font-bold text-purple-900 mb-3">TMS for Veterans with PTSD</h4>
                        <p class="text-gray-700 mb-4">Veterans face unique mental health challenges. <a href="tms-anxiety-veterans.php" class="text-primary hover:underline">TMS therapy for veterans</a> offers a promising option for those who haven't found relief through traditional treatments. Our Palm Springs clinic has experience working with veterans to address PTSD and related conditions.</p>
                        <p class="text-gray-700">We also accept <a href="does-tricare-cover-tms-therapy.php" class="text-primary hover:underline">TRICARE insurance</a> for eligible veterans.</p>
                    </div>
                </section>

                <!-- Section: Emerging Applications -->
                <section id="emerging" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Emerging & Investigational Applications</h2>
                    <p class="mb-6">
                        Research into TMS is ongoing. Some of the most exciting emerging applications include:
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white border border-gray-200 rounded-xl p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center">
                                    <i data-lucide="headphones" class="w-5 h-5 text-primary"></i>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900">Tinnitus</h3>
                            </div>
                            <p class="text-gray-600 text-sm">Studies suggest TMS targeting the auditory cortex may reduce the perception of ringing in the ears for some patients with chronic tinnitus.</p>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-xl p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center">
                                    <i data-lucide="brain" class="w-5 h-5 text-primary"></i>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900">Cognitive Enhancement</h3>
                            </div>
                            <p class="text-gray-600 text-sm">Researchers are exploring whether TMS can enhance memory, attention, and executive function in both healthy individuals and those with cognitive impairment.</p>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-xl p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center">
                                    <i data-lucide="zap" class="w-5 h-5 text-primary"></i>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900">Stroke Rehabilitation</h3>
                            </div>
                            <p class="text-gray-600 text-sm">TMS is being studied as a tool to enhance motor recovery after stroke by promoting neuroplasticity in affected brain regions.</p>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-xl p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center">
                                    <i data-lucide="scale" class="w-5 h-5 text-primary"></i>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900">Eating Disorders</h3>
                            </div>
                            <p class="text-gray-600 text-sm">Preliminary research suggests TMS may help reduce cravings and compulsive behaviors in conditions like bulimia and binge eating disorder.</p>
                        </div>
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
                                <span>What is TMS therapy used for?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    TMS therapy is primarily used for treatment-resistant depression and OCD. It is FDA-approved for Major Depressive Disorder and Obsessive-Compulsive Disorder. Off-label uses include anxiety, PTSD, migraines, chronic pain, and smoking cessation.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>What conditions does TMS treat?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    FDA-approved conditions include Major Depressive Disorder and OCD. TMS is also used off-label for anxiety, PTSD, chronic pain, migraines, tinnitus, and cognitive enhancement. Clinical trials are ongoing for many additional applications.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Is TMS therapy only for depression?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    No, while most commonly associated with depression, TMS is FDA-approved for OCD and has shown promise for various other neurological and psychiatric conditions through clinical research and off-label use. The scope of TMS applications continues to expand as research progresses.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How successful is TMS for different conditions?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    TMS shows 50-70% response rates for treatment-resistant depression, 60-68% for OCD, 50-60% for anxiety disorders, 40-50% for PTSD, and 40-65% for migraines. Success rates vary based on individual factors and treatment protocols.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can TMS help with anxiety?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes, TMS is increasingly used off-label for anxiety disorders including Generalized Anxiety Disorder (GAD), social anxiety, and panic disorder. Studies show 50-60% of patients with anxiety experience meaningful improvement with TMS treatment.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Discover If TMS Is Right for You
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        Whether you're struggling with depression, OCD, anxiety, or another condition, our Palm Springs team can help you explore whether TMS therapy is an appropriate treatment option.
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
                                    <a href="does-tms-therapy-work-for-anxiety.php" class="block text-black" style="color: black !important;">Does TMS Work for Anxiety?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Discover how TMS therapy effectively treats anxiety disorders and what success rates look like.</p>
                                <a href="does-tms-therapy-work-for-anxiety.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 2 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <div class="w-full h-48 bg-no-repeat bg-top" style="background-image: url('images/blog/related-bg-v2.png'); background-size: 300% auto; background-position: 50% 0;"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="tms-therapy-contraindications.php" class="block text-black" style="color: black !important;">TMS Therapy Contraindications</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Learn who is and isn't a good candidate for TMS therapy based on safety criteria.</p>
                                <a href="tms-therapy-contraindications.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <div class="w-full h-48 bg-no-repeat bg-top" style="background-image: url('images/blog/related-bg-v2.png'); background-size: 300% auto; background-position: 100% 0;"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="is-tms-therapy-safe.php" class="block text-black" style="color: black !important;">Is TMS Therapy Safe?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Understand the comprehensive safety profile of TMS and what to expect during treatment.</p>
                                <a href="is-tms-therapy-safe.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
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
