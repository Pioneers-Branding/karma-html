<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS Therapy for Treatment Resistant Depression - Complete Guide | Karma TMS</title>
    <meta name="description"
        content="Comprehensive guide to TMS therapy as an effective treatment for treatment-resistant depression, including success rates, benefits, and what to expect.">
    <meta name="keywords"
        content="TMS therapy, treatment resistant depression, TRD, depression treatment, TMS success rates, non-invasive depression treatment">
    <link rel="canonical" href="tms-therapy-for-treatment-resistant-depression.php">
    <meta property="og:title" content="TMS Therapy for Treatment Resistant Depression - Complete Guide">
    <meta property="og:description"
        content="Discover how TMS offers new hope for those who haven't found relief with traditional depression treatments.">
    <meta property="og:image"
        content="https://images.unsplash.com/photo-1704650334658-11e83f293ff3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3MTg3MTl8MHwxfHNlYXJjaHwxfHxBbiUyMGltYWdlJTIwZGVwaWN0aW5nJTIwVE1TJTIwdGhlcmFweSUyMGZvciUyMHRyZWF0bWVudC1yZXNpc3RhbnQlMjBkZXByZXNzaW9uJTJDJTIwc2hvd2Nhc2luZyUyMGElMjBzZXJlbmUlMjBhbmQlMjBwcm9mZXNzaW9uYWwlMjBzZXR0aW5nLnxlbnwwfHx8fDE3NjQxMzc5ODh8MA&ixlib=rb-4.1.0&q=80&w=1200">
    <meta property="og:type" content="article">

    <?php include 'includes/header-links.php'; ?>

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Scroll margin for sticky header offset */
        section {
            scroll-margin-top: 120px;
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

        /* Accordion Styles matching shadcn UI roughly */
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
            padding: 1rem;
            font-weight: 600;
            text-align: left;
            background: none;
            border: none;
            cursor: pointer;
            color: inherit;
        }

        .accordion-trigger:hover {
            color: #572670;
        }

        .accordion-content {
            padding: 0 1rem 1rem 1rem;
            color: #374151;
            display: none;
        }

        .accordion-item[data-state="open"] .accordion-content {
            display: block;
        }

        .accordion-icon {
            transition: transform 0.2s;
        }

        .accordion-item[data-state="open"] .accordion-icon {
            transform: rotate(180deg);
        }
        a{
            text-decoration: none;
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

        /* Custom Grid Fixes for missing Tailwind classes */
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

        .bg-blue-50 {
            background-color: #eff6ff;
        }
        .border-blue-200 {
            border-color: #bfdbfe;
        }
        .text-blue-900 {
            color: #1e3a8a;
        }
        
        .shadow-sm {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        
        .shadow-md {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        /* Explicit Utility Overrides for Static PHP */
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
        .text-green-600 {
            color: #16a34a !important;
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
      "headline": "TMS Therapy for Treatment Resistant Depression",
      "description": "Comprehensive guide to TMS therapy as an effective treatment for treatment-resistant depression, including success rates, benefits, and what to expect.",
      "image": "https://images.unsplash.com/photo-1704650334658-11e83f293ff3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3MTg3MTl8MHwxfHNlYXJjaHwxfHxBbiUyMGltYWdlJTIwZGVwaWN0aW5nJTIwVE1TJTIwdGhlcmFweSUyMGZvciUyMHRyZWF0bWVudC1yZXNpc3RhbnQlMjBkZXByZXNzaW9uJTJDJTIwc2hvd2Nhc2luZyUyMGElMjBzZXJlbmUlMjBhbmQlMjBwcm9mZXNzaW9uYWwlMjBzZXR0aW5nLnxlbnwwfHx8fDE3NjQxMzc5ODh8MA&ixlib=rb-4.1.0&q=80&w=800",
      "author": {
        "@type": "Person",
        "name": "Dr. Keerthy Sunder",
        "jobTitle": "Board-Certified Psychiatrist | Medical Director at KarmaTMS",
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
      "datePublished": "2024-05-28",
      "dateModified": "2024-05-28",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blogs/TMSTherapyForTreatmentResistantDepression"
      }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "What is treatment-resistant depression?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Treatment-resistant depression (TRD) is diagnosed when symptoms persist despite trying at least two different antidepressant medications at adequate doses and durations. It affects approximately 30-40% of people with major depressive disorder and requires alternative treatment approaches like TMS therapy."
        }
      }, {
        "@type": "Question",
        "name": "How effective is TMS therapy for treatment-resistant depression?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Clinical studies show that 50-60% of patients with treatment-resistant depression experience significant symptom improvement with TMS therapy, and about 30-40% achieve complete remission. These results are particularly impressive given that these patients haven't responded to traditional treatments."
        }
      }, {
        "@type": "Question",
        "name": "Does TMS therapy hurt?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Most patients describe TMS as a tapping sensation on the scalp. Some people experience mild discomfort or headache during the first few sessions, but this typically subsides quickly. TMS is non-invasive and doesn't require anesthesia or sedation."
        }
      }, {
        "@type": "Question",
        "name": "How long do TMS results last?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Many patients maintain improvements for a year or longer after completing TMS treatment. Studies show that approximately 70% of patients maintain their improvement at one-year follow-up. Some patients may benefit from occasional maintenance sessions to sustain results."
        }
      }, {
        "@type": "Question",
        "name": "Can I continue my medications during TMS treatment?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, most patients continue their current medications during TMS therapy. Your psychiatrist will review your medication regimen and make any necessary adjustments. TMS can be used alongside medications or as a standalone treatment depending on your individual needs."
        }
      }, {
        "@type": "Question",
        "name": "Is TMS therapy covered by insurance?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Most major insurance providers cover TMS therapy for treatment-resistant depression when specific criteria are met. Coverage typically requires documentation of prior antidepressant trials. Our team can help verify your insurance benefits and navigate the approval process."
        }
      }]
    }
    </script>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Breadcrumb -->
    <div class="bg-gray-50 border-b relative z-10" style="margin-top: 1px;"> 
        <div class="container mx-auto px-4 py-4">
            <nav class="flex items-center text-sm text-gray-500" aria-label="Breadcrumb">
                <a href="index.php" class="hover:text-purple-500 transition-colors">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <a href="blog.php" class="hover:text-purple-500 transition-colors">Blog</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <span class="text-gray-900 font-medium">TMS for Treatment Resistant Depression</span>
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
                        May 28, 2024
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-3 py-1 rounded-full backdrop-blur-sm">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        14 min read
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-3 py-1 rounded-full backdrop-blur-sm">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        Dr. Keerthy Sunder
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    TMS Therapy for Treatment Resistant Depression
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Discover how TMS offers new hope for those who haven't found relief with traditional depression
                    treatments
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
                                <button class="toc-button" onclick="scrollToSection('understanding-trd')">
                                    Understanding Treatment-Resistant Depression
                                </button>
                                <button class="toc-button" onclick="scrollToSection('how-tms-works')">
                                    How TMS Works
                                </button>
                                <button class="toc-button" onclick="scrollToSection('benefits')">
                                    Benefits of TMS
                                </button>
                                <button class="toc-button" onclick="scrollToSection('success-rates')">
                                    Success Rates
                                </button>
                                <button class="toc-button" onclick="scrollToSection('treatment-process')">
                                    Treatment Process
                                </button>
                                <button class="toc-button" onclick="scrollToSection('good-candidate')">
                                    Who is a Good Candidate
                                </button>
                                <button class="toc-button" onclick="scrollToSection('faqs')">
                                    Frequently Asked Questions
                                </button>
                            </nav>
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <a href="contact-us.php" class="btn w-full bg-primary text-white hover:opacity-90 justify-center">
                                    Schedule Consultation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Article Content -->
            <article class="lg:col-span-3 prose prose-lg max-w-none text-gray-700">
                <!-- Introduction -->
                <div class="mb-12">
                    <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1764138579/32_og3ayd.png"
                        alt="TMS therapy for treatment resistant depression"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        For millions of people living with depression, traditional treatments like medication and
                        therapy provide significant relief. However, approximately 30-40% of individuals with major
                        depressive disorder experience treatment-resistant depression (TRD), meaning they haven't found
                        adequate relief after trying multiple antidepressants. For these individuals, Transcranial
                        Magnetic Stimulation (TMS) therapy offers a scientifically proven, FDA-approved alternative
                        that's transforming lives.
                    </p>
                </div>

                <!-- Section 1: Understanding TRD -->
                <section id="understanding-trd" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Understanding Treatment-Resistant Depression</h2>

                    <div class="bg-gradient-to-br from-purple-50 to-transparent border border-primary/20 rounded-xl mb-3 p-6">
                        <p class="text-lg font-medium text-primary" style="margin-bottom: 10px;">What is Treatment-Resistant Depression?</p>
                        <p class="text-gray-700 mb-0" style="margin-bottom: 10px;">
                            Treatment-resistant depression is diagnosed when symptoms persist despite trying at least
                            two different antidepressant medications at adequate doses and durations.
                        </p>
                    </div>

                    <p class="mb-4">
                        Living with <a href="depression.php" class="text-primary font-medium">treatment-resistant depression</a> can feel hopeless, but it's important to understand that this is a medical condition, not a personal failure. Several factors can contribute to TRD:
                    </p>

                    <ul class="list-disc pl-6 mb-6 space-y-2">
                        <li>Genetic factors affecting medication metabolism</li>
                        <li>Co-occurring mental health conditions</li>
                        <li>Underlying medical conditions</li>
                        <li>Unique brain chemistry and structure</li>
                        <li>Previous trauma or chronic stress</li>
                    </ul>
                </section>

                <!-- Section 2: How TMS Works -->
                <section id="how-tms-works" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">How TMS Therapy Works for
                        Treatment-Resistant Depression</h2>

                    <p class="mb-4">
                        <a href="tms-therapy.php" class="text-primary font-medium">TMS therapy</a> uses
                        magnetic pulses to stimulate specific areas of the brain that are underactive in people with
                        depression. Unlike medications that affect your entire body, TMS directly targets the brain
                        regions responsible for mood regulation.
                    </p>

                    <div class="border border-primary/20 rounded-xl p-6 mb-8 shadow-sm">
                        <h3 class="text-xl font-bold mb-4 text-primary">The Science Behind TMS</h3>
                        <p class="text-gray-700 mb-4">
                            Research shows that people with depression often have reduced activity in the left
                            dorsolateral prefrontal cortex (DLPFC), a brain region crucial for mood regulation. TMS
                            therapy delivers focused magnetic pulses to this area, stimulating neural activity and
                            promoting the release of neurotransmitters like serotonin and dopamine.
                        </p>
                        <p class="text-gray-700 mb-0">
                            Over the course of treatment, these repeated stimulations create lasting changes in brain
                            circuitry, a process called neuroplasticity, which helps restore normal mood function.
                        </p>
                    </div>
                </section>

                <!-- Section 3: Benefits -->
                <section id="benefits" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Benefits of TMS for Treatment-Resistant
                        Depression</h2>

                    <div class="grid md:grid-cols-2 gap-6 my-6">
                        <div class="bg-white border border-gray-200 rounded-xl p-6 h-full shadow-sm">
                            <div class="mb-4">
                                <i data-lucide="check-circle" class="w-8 h-8 text-green-600"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2 text-gray-900">Non-Invasive</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">No surgery, anesthesia, or hospitalization required</p>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-xl p-6 h-full shadow-sm">
                            <div class="mb-4">
                                <i data-lucide="check-circle" class="w-8 h-8 text-green-600"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2 text-gray-900">Minimal Side Effects</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">No weight gain, sexual dysfunction, or cognitive impairment</p>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-xl p-6 h-full shadow-sm">
                            <div class="mb-4">
                                <i data-lucide="check-circle" class="w-8 h-8 text-green-600"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2 text-gray-900">FDA-Approved</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">Cleared for treatment-resistant depression since 2008</p>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-xl p-6 h-full shadow-sm">
                            <div class="mb-4">
                                <i data-lucide="check-circle" class="w-8 h-8 text-green-600"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2 text-gray-900">Outpatient Treatment</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">Return to normal activities immediately after sessions</p>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-xl p-6 h-full shadow-sm">
                            <div class="mb-4">
                                <i data-lucide="check-circle" class="w-8 h-8 text-green-600"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2 text-gray-900">High Success Rates</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">50-60% of patients achieve significant symptom improvement</p>
                        </div>

                        <div class="bg-white border border-gray-200 rounded-xl p-6 h-full shadow-sm">
                            <div class="mb-4">
                                <i data-lucide="check-circle" class="w-8 h-8 text-green-600"></i>
                            </div>
                            <h4 class="font-bold text-lg mb-2 text-gray-900">Lasting Results</h4>
                            <p class="text-sm text-gray-600 leading-relaxed">Benefits often continue long after treatment completion</p>
                        </div>
                    </div>
                </section>

                <!-- Section 4: Success Rates -->
                <section id="success-rates" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">TMS Success Rates for Treatment-Resistant
                        Depression</h2>

                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 mb-8">
                        <p class="font-medium text-blue-900 mb-2">Clinical Evidence</p>
                        <p class="text-gray-700 mb-0">
                            Large-scale clinical studies demonstrate impressive success rates for TMS therapy in treating
                            treatment-resistant depression:
                        </p>
                    </div>

                    <ul class="list-disc pl-6 mb-6 space-y-3 text-lg">
                        <li><strong>50-60%</strong> of patients experience significant symptom improvement</li>
                        <li><strong>30-40%</strong> achieve complete remission</li>
                        <li><strong>70%</strong> maintain improvements at one-year follow-up</li>
                        <li><strong>Minimal side effects</strong> compared to medications</li>
                    </ul>
                </section>

                <!-- Section 5: Treatment Process -->
                <section id="treatment-process" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What to Expect During TMS Treatment</h2>

                    <div class="space-y-4">
                        <div class="bg-white border-2 border-primary rounded-xl p-6 relative">
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-base flex-shrink-0 mt-1">
                                    1
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-1 text-gray-900">Initial Consultation</h4>
                                    <p class="text-gray-700 mb-0 text-gray-600 leading-relaxed">
                                        Meet with a psychiatrist to review your treatment history, symptoms, and
                                        determine if TMS is right for you.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border-2 border-primary rounded-xl p-6 relative">
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-base flex-shrink-0 mt-1">
                                    2
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-1 text-gray-900">Brain Mapping</h4>
                                    <p class="text-gray-700 mb-0 text-gray-600 leading-relaxed">
                                        Precise mapping to identify the optimal treatment location and determine the
                                        right magnetic pulse intensity for your brain.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border-2 border-primary rounded-xl p-6 relative">
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-base flex-shrink-0 mt-1">
                                    3
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-1 text-gray-900">Treatment Sessions</h4>
                                    <p class="text-gray-700 mb-0 text-gray-600 leading-relaxed">
                                        Attend sessions 5 days per week for 4-6 weeks. Each session lasts 20-40
                                        minutes, and you can read, listen to music, or relax during treatment.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border-2 border-primary rounded-xl p-6 relative">
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-base flex-shrink-0 mt-1">
                                    4
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-1 text-gray-900">Progress Monitoring</h4>
                                    <p class="text-gray-700 mb-0 text-gray-600 leading-relaxed">
                                        Regular assessments to track symptom improvement. Many patients notice changes
                                        within 2-3 weeks.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border-2 border-primary rounded-xl p-6 relative">
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-base flex-shrink-0 mt-1">
                                    5
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-1 text-gray-900">Follow-Up Care</h4>
                                    <p class="text-gray-700 mb-0 text-gray-600 leading-relaxed">
                                        Continued support and maintenance planning to ensure lasting results. Some
                                        patients benefit from occasional maintenance sessions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section 6: Good Candidate -->
                <section id="good-candidate" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-[#572670] mb-6">Who is a Good Candidate for TMS?</h2>

                    <p class="mb-6">
                        TMS therapy may be right for you if:
                    </p>

                    <div class="bg-white border border-[#572670]/20 rounded-xl shadow-sm">
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-green-600 mt-1 flex-shrink-0"></i>
                                <span>You've been diagnosed with major depressive disorder</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-green-600 mt-1 flex-shrink-0"></i>
                                <span>You haven't found adequate relief from at least two antidepressant medications</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-green-600 mt-1 flex-shrink-0"></i>
                                <span>You experience intolerable side effects from medications</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-green-600 mt-1 flex-shrink-0"></i>
                                <span>You're looking for a non-medication option</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-green-600 mt-1 flex-shrink-0"></i>
                                <span>You don't have contraindications like metal implants in your head</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Author Box -->
                <!-- Author Box -->
                <div class="bg-white rounded-xl p-6 md:p-8 mb-12 flex gap-4 md:gap-8 items-start shadow-sm w-full" style="border: 1px solid rgba(87, 38, 112, 0.2);">
                    <div class="flex-shrink-0">
                        <div class="p-1 rounded-full border-2" style="border-color: rgba(87, 38, 112, 0.3);">
                            <img src="https://www.prtms.com/wp-content/uploads/2023/03/Dr.-Keerthy-Sunder-scaled.jpg" 
                                alt="Dr. Keerthy Sunder" 
                                class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover" style="width:200px; height:200px;border-radius: 50%;">
                        </div>
                    </div>
                    <div class="flex-1 min-w-0 text-left">
                        <h4 class="text-lg md:text-xl font-bold mb-1" style="color: #572670;">About the Author</h4>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Dr. Keerthy Sunder</h3>
                        <p class="text-gray-500 font-medium mb-3 text-sm">Board-Certified Psychiatrist | Medical Director at KarmaTMS</p>
                        <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                            Dr. Keerthy Sunder is a board-certified psychiatrist specializing in TMS therapy for veterans
                            and treatment-resistant mental health conditions. With extensive experience in neuroscience
                            and innovative treatment modalities, Dr. Sunder is dedicated to helping veterans overcome
                            PTSD, depression, and anxiety through evidence-based, compassionate care.
                        </p>
                    </div>
                </div>

                <!-- FAQ Section -->
                <section id="faqs" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-[#572670] mb-8">Frequently Asked Questions</h2>

                    <div class="space-y-4">
                        <!-- FAQ Items -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>What is treatment-resistant depression?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                Treatment-resistant depression (TRD) is diagnosed when symptoms persist despite trying at least two different antidepressant medications at adequate doses and durations. It affects approximately 30-40% of people with major depressive disorder and requires alternative treatment approaches like TMS therapy.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>How effective is TMS therapy for treatment-resistant depression?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                Clinical studies show that 50-60% of patients with treatment-resistant depression experience significant symptom improvement with TMS therapy, and about 30-40% achieve complete remission. These results are particularly impressive given that these patients haven't responded to traditional treatments.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>Does TMS therapy hurt?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                Most patients describe TMS as a tapping sensation on the scalp. Some people experience mild discomfort or headache during the first few sessions, but this typically subsides quickly. TMS is non-invasive and doesn't require anesthesia or sedation.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>How long do TMS results last?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                Many patients maintain improvements for a year or longer after completing TMS treatment. Studies show that approximately 70% of patients maintain their improvement at one-year follow-up. Some patients may benefit from occasional maintenance sessions to sustain results.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>Can I continue my medications during TMS treatment?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                Yes, most patients continue their current medications during TMS therapy. Your psychiatrist will review your medication regimen and make any necessary adjustments. TMS can be used alongside medications or as a standalone treatment depending on your individual needs.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>Is TMS therapy covered by insurance?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                Most major insurance providers cover TMS therapy for treatment-resistant depression when specific criteria are met. Coverage typically requires documentation of prior antidepressant trials. Our team can help verify your insurance benefits and navigate the approval process.
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Don't Give Up Hope
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        If traditional depression treatments haven't worked for you, TMS therapy could be the breakthrough
                        you've been looking for. Schedule a free consultation to learn more.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="contact-us.php" class="btn bg-white text-[#572670] hover:bg-gray-100 font-semibold px-8 py-3">
                            Schedule Free Consultation
                        </a>
                     
                    </div>
                </div>

                <!-- Related Posts -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-[#572670] mb-8">Related Articles</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Post 1 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376737/22_wiizht.png"
                                alt="Managing Anxiety Triggers" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 group-hover:text-[#572670] transition-colors">
                                    <a href="#" class="block">Managing Anxiety Triggers in Everyday Life</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Learn practical strategies to identify and manage anxiety triggers effectively.</p>
                                <a href="#" class="text-[#572670] font-medium text-sm inline-flex items-center">
                                    Read More <i data-lucide="arrow-right" class="w-3 h-3 ml-1"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Post 2 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376735/21_tyzclt.png"
                                alt="Family Dynamics" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 group-hover:text-[#572670] transition-colors">
                                    <a href="#" class="block">The Role of Family Dynamics in Mental Health Recovery</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Discover how family relationships influence mental health outcomes and recovery.</p>
                                <a href="#" class="text-[#572670] font-medium text-sm inline-flex items-center">
                                    Read More <i data-lucide="arrow-right" class="w-3 h-3 ml-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376735/19_luad51.png"
                                alt="Mental Health First Aid" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 group-hover:text-[#572670] transition-colors">
                                    <a href="#" class="block">Mental Health First Aid: How to Help Someone in Crisis</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Essential skills to recognize crisis signs and provide immediate support.</p>
                                <a href="#" class="text-[#572670] font-medium text-sm inline-flex items-center">
                                    Read More <i data-lucide="arrow-right" class="w-3 h-3 ml-1"></i>
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
        // Interactive Table of Contents & Accordion Logic
        document.addEventListener('DOMContentLoaded', function () {
            // Accordion Logic
            window.toggleAccordion = function(button) {
                const item = button.parentElement;
                const currentState = item.getAttribute('data-state');
                const newState = currentState === 'open' ? 'closed' : 'open';
                
                // Close other items if needed (optional, keeping exclusive open behavior)
                // document.querySelectorAll('.accordion-item').forEach(i => i.setAttribute('data-state', 'closed'));
                
                item.setAttribute('data-state', newState);
            };

            // Scroll Spy for Table of Contents
            const sections = document.querySelectorAll('.scroll-target');
            const navButtons = document.querySelectorAll('.toc-button');
            const offset = 150; // Offset for fixed header

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
            
            // Initial Check
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
