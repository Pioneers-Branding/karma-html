<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Impact of Technology on Mental Health | Karma TMS</title>
    <meta name="description"
        content="Explore the duplicate impact of technology on mental health. Understand how digital connection, social media, and screen time affect well-being.">
    <meta name="keywords"
        content="mental health and technology, social media anxiety, digital detox, screen time effects, TMS therapy palm springs, mental health apps">
    <link rel="canonical" href="tech-mental-health-impact.php">
    <meta property="og:title" content="The Impact of Technology on Mental Health | Karma TMS">
    <meta property="og:description"
        content="Explore the dual impact of technology on mental health. Understand how digital connection, social media, and screen time affect well-being.">
    <meta property="og:image"
        content="images/blog/tech-mental-health-banner.png">
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
      "headline": "Tech And Mental Health: The Impact Of Technology On Mental Health",
      "description": "Explore the dual impact of technology on mental health. Understand how digital connection, social media, and screen time affect well-being.",
      "image": "images/blog/tech-mental-health-banner.png",
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
      "datePublished": "2025-01-22",
      "dateModified": "2025-01-22",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blog/tech-mental-health-impact"
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
                <span class="text-gray-900 font-medium">Tech and Mental Health</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="relative bg-primary text-white py-20 overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Meta Tags -->
                <div class="flex flex-wrap justify-center gap-4 mb-8 text-sm font-medium">
                    <span class="flex items-center gap-2 bg-white/20 px-4 py-2 rounded-full backdrop-blur-sm">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        January 22, 2025
                    </span>
                    <span class="flex items-center gap-2 bg-white/20 px-4 py-2 rounded-full backdrop-blur-sm">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        13 min read
                    </span>
                    <span class="flex items-center gap-2 bg-white/20 px-4 py-2 rounded-full backdrop-blur-sm">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        karmatms
                    </span>
                </div>

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Tech And Mental Health: The Impact Of Technology On Mental Health
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-white/90 mb-10 max-w-3xl mx-auto font-light leading-relaxed">
                    Understanding the complex relationship between technology and mental wellbeing in our digital world
                </p>

                <!-- CTA Button -->
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="contact-us.php" class="btn bg-white text-primary hover:bg-gray-100 font-bold px-8 py-3 text-lg rounded-md transition-all">
                        Get Mental Health Support
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
                                <button class="toc-button" onclick="scrollToSection('digital-age')">
                                    The Digital Age and Mental Health
                                </button>
                                <button class="toc-button" onclick="scrollToSection('positive')">
                                    Positive Impacts of Technology
                                </button>
                                <button class="toc-button" onclick="scrollToSection('negative')">
                                    Negative Impacts of Technology
                                </button>
                                <button class="toc-button" onclick="scrollToSection('social')">
                                    Social Media and Mental Health
                                </button>
                                <button class="toc-button" onclick="scrollToSection('balance')">
                                    Creating a Healthy Balance
                                </button>
                                <button class="toc-button" onclick="scrollToSection('faqs')">
                                    Frequently Asked Questions
                                </button>
                            </nav>
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <a href="contact-us.php" class="btn w-full bg-primary text-white hover:opacity-90 justify-center mb-6">
                                    Get Support
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
                    <p class="text-xl leading-relaxed text-gray-700 font-normal">
                        Technology has fundamentally transformed how we live, work, connect, and experience the world. From smartphones that keep us perpetually connected to AI assistants that manage our lives, digital technology offers unprecedented convenience and opportunity. But this revolution comes with a hidden cost: profound impacts on our mental health that we're only beginning to understand.
                    </p>
                </div>

                <!-- Section: The Digital Age and Mental Health -->
                <section id="digital-age" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">The Digital Age and Mental Health</h2>
                    
                    <!-- Stats Box -->
                    <div class="bg-white border-2 border-[#572670] rounded-2xl p-8 mb-8 shadow-sm">
                        <div class="flex items-start gap-4">
                            <i data-lucide="smartphone" class="w-10 h-10 text-[#572670] flex-shrink-0 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-bold text-[#572670] mb-4">Digital Life by the Numbers</h3>
                                <ul class="space-y-4">
                                    <li class="flex items-start gap-3 text-gray-700">
                                        <span class="text-[#572670] font-bold">•</span>
                                        <span>Average person spends <strong>6 hours 58 minutes</strong> daily on screens</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-gray-700">
                                        <span class="text-[#572670] font-bold">•</span>
                                        <span><strong>4.9 billion</strong> people use social media worldwide</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-gray-700">
                                        <span class="text-[#572670] font-bold">•</span>
                                        <span>Adults check phones an average of <strong>96 times per day</strong></span>
                                    </li>
                                    <li class="flex items-start gap-3 text-gray-700">
                                        <span class="text-[#572670] font-bold">•</span>
                                        <span><strong>71%</strong> sleep with or next to their smartphones</span>
                                    </li>
                                    <li class="flex items-start gap-3 text-gray-700">
                                        <span class="text-[#572670] font-bold">•</span>
                                        <span>Digital technology use increased <strong>60%</strong> since 2019</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-700 leading-relaxed">
                        We're living through the largest uncontrolled psychological experiment in human history. Never before has humanity been so connected yet so isolated, so informed yet so anxious, so entertained yet so depressed. The mental health implications of this digital transformation are complex, multifaceted, and deeply personal.
                    </p>
                </section>

                <!-- Section: Positive Impacts -->
                <section id="positive" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Positive Impacts of Technology on Mental Health</h2>
                    
                    <p class="mb-6 text-gray-700">
                        Despite valid concerns, technology offers significant mental health benefits when used thoughtfully:
                    </p>

                    <div class="space-y-6">
                        <!-- Increased Access -->
                        <div class="bg-white border-2 border-green-500 rounded-2xl p-6 shadow-sm">
                            <h3 class="text-xl font-bold text-black mb-4">Increased Access to Mental Health Care</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Teletherapy breaks down geographic and mobility barriers
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Mental health apps provide 24/7 support and resources
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Online support communities connect people with shared experiences
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Digital therapy tools make treatment more affordable
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Crisis hotlines and text services offer immediate help
                                </li>
                            </ul>
                        </div>

                        <!-- Education and Awareness -->
                        <div class="bg-white border-2 border-green-500 rounded-2xl p-6 shadow-sm">
                            <h3 class="text-xl font-bold text-black mb-4">Mental Health Education and Awareness</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Information about mental health conditions is readily accessible
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Online platforms reduce stigma through shared stories
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Educational content helps people recognize symptoms early
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Self-assessment tools guide people toward appropriate help
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Research findings reach wider audiences faster
                                </li>
                            </ul>
                        </div>

                        <!-- Connection -->
                        <div class="bg-white border-2 border-green-500 rounded-2xl p-6 shadow-sm">
                            <h3 class="text-xl font-bold text-black mb-4">Connection and Community</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Video calls maintain long-distance relationships
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Online communities provide belonging for isolated individuals
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Social media enables connection for those with mobility limitations
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Digital platforms facilitate support groups and recovery communities
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Technology helps people with social anxiety practice social skills
                                </li>
                            </ul>
                        </div>

                        <!-- Tools and Tracking -->
                        <div class="bg-white border-2 border-green-500 rounded-2xl p-6 shadow-sm">
                            <h3 class="text-xl font-bold text-black mb-4">Mental Health Tools and Tracking</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Mood tracking apps identify patterns and triggers
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Meditation and mindfulness apps guide stress reduction
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Sleep tracking helps optimize rest
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Journaling apps facilitate emotional processing
                                </li>
                                <li class="flex items-start gap-2 text-gray-700">
                                    <span class="text-gray-400">•</span> Habit-building apps support positive behavioral changes
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Section: Negative Impacts -->
                <section id="negative" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Negative Impacts of Technology on Mental Health</h2>
                    <p class="text-gray-700 mb-6 font-medium">The dark side of our digital lives manifests in several concerning ways:</p>
                    
                    <div class="space-y-6">
                        <!-- Ecosystem of cards for Negative Impacts -->
                        
                        <!-- Digital Addiction -->
                        <div class="bg-white border-2 border-red-100 rounded-2xl p-6 shadow-sm hover:border-red-200 transition-colors">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Digital Addiction and Compulsive Use</h3>
                            <p class="mb-4 text-gray-700">Technology platforms are deliberately designed to be addictive, using psychological principles to maximize engagement:</p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-3 text-gray-700">
                                    <i data-lucide="alert-circle" class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5"></i>
                                    <span>Dopamine-driven feedback loops from likes and notifications</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <i data-lucide="alert-circle" class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5"></i>
                                    <span>Infinite scroll and autoplay features eliminate natural stopping points</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <i data-lucide="alert-circle" class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5"></i>
                                    <span>Variable reward schedules keep users checking compulsively</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <i data-lucide="alert-circle" class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5"></i>
                                    <span>23% of users report feeling addicted to their smartphones</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <i data-lucide="alert-circle" class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5"></i>
                                    <span>Withdrawal symptoms include anxiety, irritability, and restlessness</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Anxiety and Depression -->
                        <div class="bg-white border-2 border-red-100 rounded-2xl p-6 shadow-sm hover:border-red-200 transition-colors">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Increased Anxiety and Depression</h3>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Heavy digital media use correlates with 2.7x higher depression risk</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Constant connectivity creates persistent low-level stress</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Information overload leads to decision fatigue and anxiety</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>News consumption amplifies worry about world events</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Fear of missing out (FOMO) drives anxiety in 60% of young adults</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Sleep Disruption -->
                        <div class="bg-white border-2 border-red-100 rounded-2xl p-6 shadow-sm hover:border-red-200 transition-colors">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Sleep Disruption</h3>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Blue light suppresses melatonin production by up to 55%</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Evening screen use delays sleep onset by 30-45 minutes</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Stimulating content before bed increases nighttime wakefulness</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Poor sleep exacerbates mental health conditions</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>68% keep devices in bedrooms, disrupting sleep quality</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Reduced Attention -->
                        <div class="bg-white border-2 border-red-100 rounded-2xl p-6 shadow-sm hover:border-red-200 transition-colors">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Reduced Attention Span and Focus</h3>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Average attention span decreased from 12 to 8 seconds</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Constant task-switching impairs deep work and concentration</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Digital distractions fragment focus throughout the day</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Reduced capacity for delayed gratification and patience</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Negative impact on memory formation and learning</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Loneliness -->
                        <div class="bg-white border-2 border-red-100 rounded-2xl p-6 shadow-sm hover:border-red-200 transition-colors">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Loneliness Despite Connection</h3>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Digital interactions provide shallow substitute for face-to-face connection</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Time on devices replaces in-person social activities</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Paradox: more "friends" online but fewer meaningful relationships</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Loneliness rates have doubled since 1980s despite connectivity</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <span class="text-red-500 font-bold">•</span>
                                    <span>Missing non-verbal communication and physical presence</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Section: Social Media -->
                <section id="social" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Social Media and Mental Health</h2>
                    <p class="mb-6 text-gray-700">Social media deserves special attention as the most psychologically impactful technology:</p>

                    <!-- Paradox Box -->
                    <div class="bg-[#572670]/5 border-l-4 border-[#572670] p-6 rounded-r-xl mb-8">
                        <h3 class="text-xl font-bold text-[#572670] mb-2">The Social Media Paradox</h3>
                        <p class="text-gray-700 italic">
                            Research consistently shows that passive social media use (scrolling, viewing) is associated with negative mental health outcomes, while active use (posting, commenting, connecting) shows neutral or slightly positive effects. Yet most usage is passive.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-1 gap-6">
                        <!-- Comparison -->
                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <h4 class="font-bold text-gray-900 mb-3 text-lg">Social Comparison and Self-Esteem</h4>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> 87% of women compare themselves to images on social media</li>
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> Instagram use linked to increased body dissatisfaction</li>
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> Filtered reality creates unrealistic standards</li>
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> Self-worth becomes tied to likes and engagement metrics</li>
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> Constant comparison triggers depression and anxiety</li>
                            </ul>
                        </div>

                        <!-- Cyberbullying -->
                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <h4 class="font-bold text-gray-900 mb-3 text-lg">Cyberbullying and Online Harassment</h4>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> 59% of teens have experienced online bullying</li>
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> Anonymity and distance enable cruel behavior</li>
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> Viral negativity amplifies harm</li>
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> Higher suicide risk among cyberbullying victims</li>
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> 24/7 nature means no escape from harassment</li>
                            </ul>
                        </div>

                        <!-- Validation -->
                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <h4 class="font-bold text-gray-900 mb-3 text-lg">Validation-Seeking Behavior</h4>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> Dopamine release from likes creates addictive cycle</li>
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> Self-worth becomes externally validated</li>
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> Performance of perfect life causes stress</li>
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> Reduced authentic self-expression</li>
                                <li class="flex items-start gap-2"><span class="text-[#572670]">•</span> Constant need for approval undermines confidence</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Section: Creating a Balance -->
                <section id="balance" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Creating a Healthy Balance with Technology</h2>
                    <p class="text-gray-700 mb-8">The goal isn't to abandon technology but to use it intentionally and mindfully:</p>

                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <!-- Digital Boundaries -->
                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <h3 class="font-bold text-[#572670] mb-4 flex items-center gap-2">
                                <i data-lucide="shield" class="w-5 h-5"></i> Digital Boundaries
                            </h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Designate phone-free times and zones
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Turn off non-essential notifications
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> No screens 1 hour before bed
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Use "Do Not Disturb" liberally
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Delete social media apps; use browser instead
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Set app time limits
                                </li>
                            </ul>
                        </div>

                        <!-- Intentional Use -->
                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <h3 class="font-bold text-[#572670] mb-4 flex items-center gap-2">
                                <i data-lucide="target" class="w-5 h-5"></i> Intentional Use
                            </h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Define purpose before opening apps
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Curate feeds to be positive and educational
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Unfollow accounts that trigger negative feelings
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Engage actively, not just passively consume
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Use technology for creation, not just consumption
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Schedule specific times for social media
                                </li>
                            </ul>
                        </div>

                        <!-- Tech-Free Activities -->
                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <h3 class="font-bold text-[#572670] mb-4 flex items-center gap-2">
                                <i data-lucide="sun" class="w-5 h-5"></i> Tech-Free Activities
                            </h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Regular outdoor time in nature
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Face-to-face social interactions
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Physical exercise and movement
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Reading physical books
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Hobbies that use your hands
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Meditation and mindfulness practices
                                </li>
                            </ul>
                        </div>

                        <!-- Digital Detox -->
                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <h3 class="font-bold text-[#572670] mb-4 flex items-center gap-2">
                                <i data-lucide="battery-charging" class="w-5 h-5"></i> Digital Detox Strategies
                            </h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Weekly screen-free day
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Weekend getaways without devices
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> 30-day social media breaks
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Replace scrolling with reading or walking
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> Use analog tools (paper calendar, alarm clock)
                                </li>
                                <li class="flex items-start gap-2 text-gray-700 text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 mt-1"></i> "Phone stack" during meals with friends
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- 3-3-3 Rule -->
                    <div class="bg-primary text-white rounded-xl p-8 text-center shadow-lg">
                        <h3 class="text-2xl font-bold mb-6">The 3-3-3 Rule for Digital Wellness</h3>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg">
                                <div class="text-3xl font-bold mb-2">3 Hours</div>
                                <p class="text-sm text-white/90">Maximum recreational screen time daily</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg">
                                <div class="text-3xl font-bold mb-2">3 Times</div>
                                <p class="text-sm text-white/90">Tech-free blocks each day (morning, mealtime, evening)</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg">
                                <div class="text-3xl font-bold mb-2">3 Minutes</div>
                                <p class="text-sm text-white/90">Pause before checking devices—ask "why?"</p>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="flex flex-row items-start gap-6 p-8 border border-[#E9D5FF] rounded-2xl bg-white">
                    <!-- Author Image (Left) -->
                    <div class="flex-shrink-0">
                        <div class="p-1 bg-white rounded-full border-2 border-[#F3E8FF]">
                           <img 
                               src="https://www.prtms.com/wp-content/uploads/2023/03/Dr.-Keerthy-Sunder-scaled.jpg"
                               alt="Dr. Keerthy Sunder"
                               class="w-16 h-16 md:w-20 md:h-20 rounded-full object-cover"
                           >
                        </div>
                    </div>

                    <!-- Author Text (Right) -->
                    <div class="text-left flex-1">
                        <h4 class="text-lg font-bold mb-1" style="color:#572670;">
                            About the Author
                        </h4>

                        <h3 class="text-2xl font-bold text-gray-900 mb-2">
                            Dr. Keerthy Sunder
                        </h3>

                        <p class="text-sm font-medium text-gray-500 mb-4">
                            Board-Certified Psychiatrist | Medical Director at KarmaTMS
                        </p>

                        <p class="text-base text-gray-700 leading-relaxed">
                            Dr. Keerthy Sunder is a board-certified psychiatrist specializing in TMS therapy for veterans and treatment-resistant mental health conditions. With extensive experience in neuroscience and innovative treatment modalities, Dr. Sunder is dedicated to helping veterans overcome PTSD, depression, and anxiety through evidence-based, compassionate care.
                        </p>
                    </div>
                </div>
<br><br>

                <!-- FAQ Section -->
                <section id="faqs" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-8">
                        Frequently Asked Questions
                    </h2>

                    <div class="space-y-4">
                        
                        <!-- Q1 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How much technology use is too much for mental health?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    There is no single "right" amount, but usage becomes problematic when it interferes with daily functioning, sleep, work, or relationships. If you find yourself feeling anxious, irritable, or depressed after using devices, or if you neglect physical self-care and social interactions in favor of screen time, it may be time to reassess your habits. The "3-3-3 Rule" (3 hours max recreational use) is a good guideline.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can technology help with mental health treatment?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Absolutely. Technology has democratized access to care through teletherapy platforms, allowing patients to connect with therapists remotely. Mental health apps can provide daily support for meditation, mood tracking, and cognitive behavioral therapy (CBT) exercises. Crisis text lines also offer immediate, accessible support for those in need.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Why does social media make me feel worse about myself?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Social media fosters negative social comparison. You are often comparing your internal, messy reality with everyone else's curated, filtered "highlight reels." This can lead to feelings of inadequacy, FOMO (fear of missing out), and lower self-esteem. The addictive feedback loops of likes and comments can also tie your self-worth to external validation rather than internal confidence.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>What are signs that technology is affecting my mental health?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Common signs include feeling anxious or panicked when you cannot access your phone (nomophobia), checking your device immediately upon waking and right before sleep, difficulty concentrating on deep work, disrupted sleep patterns, and feeling more connected online than in your real-world relationships. Physical symptoms like eye strain and "text neck" can also accompany these mental shifts.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How can I reduce technology's negative impact without giving it up entirely?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Focus on intentional usage. extensive digital detoxes aren't always necessary; instead, set boundaries like "no phones at the dinner table" or "no screens after 9 PM." Curate your social media feeds to unfollow accounts that make you feel bad. Use grayscale mode to make your phone less stimulating, and prioritize "active" use (creating, messaging friends) over "passive" doom-scrolling.
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can virtual reality and AI help mental health treatment?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes, these are emerging as powerful tools. Virtual Reality (VR) is increasingly used for exposure therapy to treat PTSD and phobias by creating safe, controlled environments for patients to confront triggers. AI allows for more personalized care through chatbots that can offer basic cognitive support and predictive algorithms that might help identify early waring signs of relapse in conditions like depression.
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                
                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Struggling with Technology-Related Mental Health Issues?
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        If technology use is impacting your mental health, professional support can help. Learn about evidence-based treatments including TMS therapy.
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
                        <!-- Post 1: Disability for Depression -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1765015453/38_lkmqxw.png"
                                alt="Disability for Depression" class="w-full h-48 object-cover object-top">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="can-you-get-disability-for-depression.php" class="block text-gray-900">Can You Get Disability for Depression?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Complete guide to disability benefits for depression, covering eligibility and treatment options.</p>
                                <a href="can-you-get-disability-for-depression.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Post 2: Anxiety -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/14_dszfwi.png"
                                alt="TMS for Anxiety" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="tms-anxiety-veterans.php" class="block text-gray-900">TMS for Anxiety in Veterans</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Discover how TMS helps veterans manage anxiety beyond medication.</p>
                                <a href="tms-anxiety-veterans.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3: PTSD -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/11_itsgyr.png"
                                alt="Understanding PTSD" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="understanding-ptsd-veterans.php" class="block text-gray-900">Understanding PTSD in Veterans</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Complete guide to PTSD signs, symptoms, and treatment paths including TMS therapy.</p>
                                <a href="understanding-ptsd-veterans.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
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
            highlightNavigation(); // Initial check
        });

        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            const offset = 120; // Adjust for sticky header/toc
            
            if (section) {
                const elementPosition = section.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - offset;
            
                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });
            }
        }
    </script>
</body>

</html>
