<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Is PrTMS & How Does It Work? A Complete Guide | Karma TMS</title>
    <meta name="description"
        content="Discover PrTMS (Personalized Repetitive Transcranial Magnetic Stimulation), a non-invasive, drug-free mental health treatment in Palm Springs. Learn how it works, what conditions it treats, and how it differs from traditional TMS.">
    <meta name="keywords"
        content="What Is PrTMS, How Does PrTMS Work, Personalized Repetitive Transcranial Magnetic Stimulation, PrTMS vs TMS, drug-free depression treatment, Palm Springs mental health, qEEG brain mapping">
    <link rel="canonical" href="what-is-prtms.php">
    <meta property="og:title" content="What Is PrTMS & How Does It Work? A Complete Guide | Karma TMS">
    <meta property="og:description"
        content="Discover PrTMS (Personalized Repetitive Transcranial Magnetic Stimulation), a non-invasive, drug-free mental health treatment in Palm Springs. Learn how it works, what conditions it treats, and how it differs from traditional TMS.">
    <meta property="og:image"
        content="images/blog/how-successful-is-tms-treatment-banner.png">
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
        .prose table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }
        .prose th, .prose td {
            border: 1px solid #e5e7eb;
            padding: 0.75rem;
            text-align: left;
        }
        .prose th {
            background-color: #f9fafb;
            font-weight: 600;
            color: #572670;
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
                <span class="text-gray-900 font-medium">What Is PrTMS?</span>
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
                        February 11, 2026
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        8 min read
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        Dr. Keerthy Sunder
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    What Is PrTMS & How Does It Work? A Complete Guide by Karma TMS
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Discover Personalized Repetitive Transcranial Magnetic Stimulation (PrTMS)—a precision-based, drug-free solution for depression, anxiety, and more.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="contact-us.php" class="btn bg-white hover:bg-gray-100 font-bold px-8 py-3 text-lg" style="color: #572670 !important;">
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
                <div class="sticky-toc lg:sticky lg:top-32">
                    <div class="bg-white rounded-2xl border border-gray-800 shadow-none overflow-hidden p-6">
                        <h3 class="font-bold text-xl mb-6 text-[#572670]">Table of Contents</h3>
                        <nav class="space-y-4" id="toc-nav">
                            <button class="toc-button text-gray-600 hover:text-[#572670] transition-colors text-left w-full font-medium" onclick="scrollToSection('intro')">Introduction</button>
                            <button class="toc-button text-gray-600 hover:text-[#572670] transition-colors text-left w-full font-medium" onclick="scrollToSection('what-is-prtms')">What Is PrTMS?</button>
                            <button class="toc-button text-gray-600 hover:text-[#572670] transition-colors text-left w-full font-medium" onclick="scrollToSection('how-it-works')">How It Works</button>
                            <button class="toc-button text-gray-600 hover:text-[#572670] transition-colors text-left w-full font-medium" onclick="scrollToSection('prtms-vs-tms')">PrTMS vs Traditional</button>
                            <button class="toc-button text-gray-600 hover:text-[#572670] transition-colors text-left w-full font-medium" onclick="scrollToSection('conditions')">Conditions Treated</button>
                            <button class="toc-button text-gray-600 hover:text-[#572670] transition-colors text-left w-full font-medium" onclick="scrollToSection('benefits')">Benefits</button>
                            <button class="toc-button text-gray-600 hover:text-[#572670] transition-colors text-left w-full font-medium" onclick="scrollToSection('what-to-expect')">What to Expect</button>
                            <button class="toc-button text-gray-600 hover:text-[#572670] transition-colors text-left w-full font-medium" onclick="scrollToSection('safety')">Safety</button>
                            <button class="toc-button text-gray-600 hover:text-[#572670] transition-colors text-left w-full font-medium" onclick="scrollToSection('why-karma-tms')">Why Karma TMS?</button>
                            <button class="toc-button text-gray-600 hover:text-[#572670] transition-colors text-left w-full font-medium" onclick="scrollToSection('faq-prtms')">FAQs</button>
                        </nav>
                        <div class="mt-8 pt-4">
                            <a href="contact-us.php" class="block w-full text-center py-3 rounded-lg bg-[#572670] text-white font-bold hover:bg-[#451d59] transition-colors">
                                Book Consultation
                            </a>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Article Content -->
            <article class="lg:col-span-3 prose prose-lg max-w-none text-gray-700">
                <!-- Introduction -->
                <div class="mb-12" id="intro">
                    <img src="images/blog/how-successful-is-tms-treatment-banner.png" 
                        alt="What Is PrTMS?"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        Mental health care has advanced significantly over the past decade. While traditional treatments like <a href="medication-management.php" class="text-primary hover:underline">medication management</a> and talk therapy remain important, many individuals struggling with <a href="depression.php" class="text-primary hover:underline">depression</a>, <a href="anxiety.php" class="text-primary hover:underline">anxiety</a>, <a href="ptsd.php" class="text-primary hover:underline">PTSD</a>, <a href="ocd.php" class="text-primary hover:underline">OCD</a>, and other mood disorders are seeking more personalized and drug-free solutions.
                    </p>
                    <p class="mt-4 text-gray-700">
                        One of the most innovative breakthroughs in modern neuroscience is <strong>Personalized Repetitive Transcranial Magnetic Stimulation (PrTMS)</strong>.
                    </p>
                    <p class="text-gray-700">
                        At <a href="index.php" class="text-primary hover:underline font-bold">Karma TMS</a> in Palm Springs, we specialize in advanced, brain-based therapies like PrTMS to help patients in Palm Springs, <a href="rancho-mirage.php" class="text-primary hover:underline">Rancho Mirage</a>, and 29 Palms experience real, lasting relief.
                    </p>
                    <p class="mb-4 text-gray-900 font-semibold">In this comprehensive guide, you’ll learn:</p>
                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>What PrTMS is and how it functions</li>
                        <li>How it differs from traditional TMS therapy</li>
                        <li>What conditions it can effectively treat</li>
                        <li>What to expect during a typical treatment session</li>
                        <li>Why residents in Palm Springs and surrounding areas are choosing PrTMS</li>
                    </ul>
                </div>

                <!-- Section: What Is PrTMS? -->
                <section id="what-is-prtms" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What Is PrTMS?</h2>
                    <p class="mb-6">
                        <strong>PrTMS (Personalized Repetitive Transcranial Magnetic Stimulation)</strong> is a non-invasive, drug-free treatment that uses magnetic pulses to regulate and restore healthy brainwave activity.
                    </p>
                    <p class="mb-6">
                        Unlike traditional TMS, which typically follows standardized protocols, PrTMS uses advanced <a href="brain-mapping.php" class="text-primary hover:underline">brain mapping technology (EEG-based diagnostics)</a> to tailor each treatment session to the individual’s unique brain activity. This makes it a precision-based mental health treatment, designed specifically for your brain’s current functional state.
                    </p>
                    <div class="bg-gray-50 border-l-4 border-primary p-6 rounded-r-xl mb-8">
                        <h3 class="text-xl font-bold text-primary mb-3">In Simple Terms</h3>
                        <p class="mb-0 text-gray-700">
                            PrTMS works like a “tune-up” for the brain. When brainwave patterns are dysregulated — whether too fast, too slow, or out of sync — symptoms like depression, anxiety, and mood instability can occur. PrTMS identifies these irregular patterns and gently guides the brain back into healthier rhythms.
                        </p>
                    </div>
                </section>

                <!-- Section: How Does PrTMS Work? -->
                <section id="how-it-works" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">How Does PrTMS Work?</h2>
                    <p class="mb-6">
                        To understand how PrTMS works, it helps to first understand how the brain communicates. Your brain operates using electrical impulses called brainwaves. These waves regulate mood, focus, sleep, memory, emotional regulation, and stress response. When brainwaves become dysregulated, mental health symptoms often follow.
                    </p>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Step 1: Brain Mapping with EEG</h3>
                    <p class="mb-4">
                        At Karma TMS in Palm Springs, the PrTMS process begins with a <strong>Quantitative EEG (qEEG) brain scan</strong>. This scan:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>Measures your brainwave patterns</li>
                        <li>Identifies irregular frequency patterns</li>
                        <li>Detects areas of underactivity or overactivity</li>
                        <li>Creates a personalized neural profile</li>
                    </ul>
                    <p class="mb-6">This is what makes PrTMS different — treatment is based on objective brain data, not guesswork.</p>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Step 2: Personalized Frequency Matching</h3>
                    <p class="mb-4">
                        PrTMS devices are programmed to deliver magnetic pulses that match your brain’s natural frequency. Instead of forcing the brain into a pre-set pattern, PrTMS identifies your dominant brainwave frequency and delivers magnetic stimulation tuned precisely to that frequency.
                    </p>
                    <p class="mb-6">
                        This process encourages neural synchronization and promotes <strong>neuroplasticity</strong> — the brain’s ability to reorganize and heal itself.
                    </p>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Step 3: Rebalancing Brain Networks</h3>
                    <p class="mb-4">
                        Magnetic pulses pass painlessly through the scalp and skull to stimulate specific regions of the brain associated with mood regulation and cognitive control. Over time, this stimulation strengthens underactive neural circuits, calms overactive areas, improves communication between brain regions, and restores healthy brainwave rhythms.
                    </p>
                    <p class="mb-6">
                        Patients often describe feeling clearer, calmer, and more emotionally balanced as treatment progresses.
                    </p>
                </section>

                <!-- Section: PrTMS vs Traditional TMS -->
                <section id="prtms-vs-tms" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">PrTMS vs Traditional TMS: What’s the Difference?</h2>
                    <p class="mb-6">
                        Many people in Palm Springs and Rancho Mirage are familiar with standard <a href="tms-therapy.php" class="text-primary hover:underline">TMS therapy</a>. While both treatments use magnetic stimulation, there are important differences.
                    </p>
                    <div class="overflow-x-auto mb-8">
                        <table>
                            <thead>
                                <tr>
                                    <th>Feature</th>
                                    <th>Traditional TMS</th>
                                    <th>PrTMS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Personalization</strong></td>
                                    <td>Standard protocol</td>
                                    <td>Fully personalized based on EEG</td>
                                </tr>
                                <tr>
                                    <td><strong>Brain Mapping</strong></td>
                                    <td>Not always required</td>
                                    <td>Required (qEEG-based)</td>
                                </tr>
                                <tr>
                                    <td><strong>Frequency</strong></td>
                                    <td>Fixed frequency</td>
                                    <td>Matched to your brain</td>
                                </tr>
                                <tr>
                                    <td><strong>Precision</strong></td>
                                    <td>Targeted region</td>
                                    <td>Targeted + frequency optimized</td>
                                </tr>
                                <tr>
                                    <td><strong>Approach</strong></td>
                                    <td>Symptom-based</td>
                                    <td>Data-driven</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mb-6 font-semibold">Why Personalization Matters</p>
                    <p class="mb-6">
                        Mental health is not one-size-fits-all. Two people with depression may have completely different brainwave patterns. PrTMS addresses this by customizing treatment to each individual — improving effectiveness and reducing unnecessary stimulation.
                    </p>
                </section>

                <!-- Section: What Conditions Can PrTMS Treat? -->
                <section id="conditions" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What Conditions Can PrTMS Treat?</h2>
                    <p class="mb-6">
                        At Karma TMS, we offer PrTMS for patients in Palm Springs, Rancho Mirage, and 29 Palms struggling with:
                    </p>
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Depression & Anxiety</h3>
                            <ul class="list-disc pl-6 space-y-1 text-gray-700">
                                <li><a href="depression.php" class="text-primary hover:underline">Major Depressive Disorder</a></li>
                                <li><a href="tms-therapy-for-treatment-resistant-depression.php" class="text-primary hover:underline">Treatment-resistant depression</a></li>
                                <li><a href="anxiety.php" class="text-primary hover:underline">Generalized anxiety</a></li>
                                <li><a href="anxiety.php" class="text-primary hover:underline">Social anxiety</a> & panic disorder</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Trauma & Stress</h3>
                            <ul class="list-disc pl-6 space-y-1 text-gray-700">
                                <li><a href="ptsd.php" class="text-primary hover:underline">PTSD</a></li>
                                <li>Trauma-related symptoms</li>
                                <li>Hypervigilance</li>
                                <li>Emotional reactivity</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Cognitive & Behavioral</h3>
                            <ul class="list-disc pl-6 space-y-1 text-gray-700">
                                <li><a href="ocd.php" class="text-primary hover:underline">OCD (Obsessive-Compulsive Disorder)</a></li>
                                <li><a href="how-does-adhd-treatment-work.php" class="text-primary hover:underline">ADHD</a> (Focus issues & impulsivity)</li>
                                <li>Brain fog & cognitive fatigue</li>
                            </ul>
                        </div>
                         <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Other Conditions</h3>
                            <ul class="list-disc pl-6 space-y-1 text-gray-700">
                                <li><a href="bipolar.php" class="text-primary hover:underline">Bipolar Depression</a> (in select cases)</li>
                                <li>Sleep disorders associated with mood</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mb-6">
                        Because PrTMS focuses on brainwave regulation, it can be beneficial across multiple mood and cognitive disorders.
                    </p>
                </section>

                <!-- Section: Benefits of PrTMS -->
                <section id="benefits" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Benefits of PrTMS</h2>
                    <p class="mb-6">
                        Many patients in the Coachella Valley choose PrTMS because it offers significant advantages over medication-based treatment.
                    </p>
                    <ol class="list-decimal pl-6 space-y-4 text-gray-700">
                        <li><strong>Drug-Free:</strong> No daily medication required.</li>
                        <li><strong>Non-Invasive:</strong> No surgery, no anesthesia, no recovery time.</li>
                        <li><strong>Minimal Side Effects:</strong> Most common side effect is mild scalp discomfort during sessions.</li>
                        <li><strong>Personalized Treatment:</strong> Guided by objective brain data.</li>
                        <li><strong>Long-Lasting Results:</strong> Many patients experience sustained symptom relief.</li>
                    </ol>
                </section>

                <!-- Section: What to Expect -->
                <section id="what-to-expect" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What to Expect During PrTMS at Karma TMS</h2>
                    <p class="mb-6">
                        If you’re considering PrTMS in Palm Springs or nearby areas, here’s what your journey typically looks like:
                    </p>
                    
                    <div class="space-y-6">
                        <div class="bg-gray-50 p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-primary mb-2">1. Initial Consultation</h3>
                            <p class="text-gray-700 mb-0">Comprehensive psychiatric evaluation, review of medical history, and discussion of symptoms to ensure PrTMS is right for you.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-primary mb-2">2. Brain Mapping Session</h3>
                            <p class="text-gray-700 mb-0">A qEEG scan is performed to analyze your brainwave patterns. This data is used to develop your personalized treatment protocol.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-primary mb-2">3. Treatment Sessions</h3>
                            <p class="text-gray-700 mb-0">Sessions typically last 30–45 minutes in a comfortable outpatient setting. You remain awake and alert, and there is no downtime afterward. Most plans involve multiple sessions per week over several weeks.</p>
                        </div>
                    </div>
                    <p class="mt-6 mb-6">
                        Many patients begin noticing improvements within the first few weeks, though individual results vary.
                    </p>
                </section>

                <!-- Section: Is PrTMS Safe? -->
                <section id="safety" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Is PrTMS Safe?</h2>
                    <p class="mb-6">
                        Yes. PrTMS is FDA-cleared technology and has been widely studied for <a href="is-tms-therapy-safe.php" class="text-primary hover:underline">safety</a> and effectiveness. It does not involve systemic medication, sedation, memory loss, or cognitive impairment.
                    </p>
                    <p class="mb-6">
                        At Karma TMS, safety protocols are carefully followed, and treatment is overseen by experienced mental health professionals including <a href="about.php" class="text-primary hover:underline">Dr. Keerthy Sunder</a>.
                    </p>
                </section>

                 <!-- Section: Why Choose Karma TMS in Palm Springs? -->
                 <section id="why-karma-tms" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Why Choose Karma TMS in Palm Springs?</h2>
                    <p class="mb-6">
                        When seeking PrTMS in Palm Springs, Rancho Mirage, or 29 Palms, experience and personalization matter. At Karma TMS, we offer:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>Advanced qEEG brain mapping</li>
                        <li>Customized PrTMS protocols</li>
                        <li>Compassionate, integrative psychiatric care</li>
                        <li>A calm, supportive environment</li>
                        <li>A focus on long-term wellness</li>
                    </ul>
                    <p class="mb-6">
                        Our goal is not just symptom reduction — it’s restoring balance to your brain and your life. We understand the unique needs of residents in the Coachella Valley and are committed to providing cutting-edge care close to home.
                    </p>
                </section>
                
                 <!-- Section: Candidates and Results -->
                <section class="mb-12 scroll-target">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Who Is a Good Candidate?</h3>
                    <p class="mb-4">You may be a <a href="who-is-a-good-candidate-for-tms-therapy.php" class="text-primary hover:underline">candidate</a> if medications haven't worked, you experience side effects, you prefer drug-free options, or you want a personalized approach.</p>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 mt-8">How Long Do Results Last?</h3>
                    <p class="mb-4">Because PrTMS supports <a href="why-does-tms-require-multiple-sessions.php" class="text-primary hover:underline">neuroplasticity</a>, it helps the brain form healthier patterns rather than temporarily masking symptoms. Many patients experience sustained improvement, though some may benefit from maintenance sessions.</p>
                </section>

                <!-- FAQ Section -->
                <section class="mb-12 scroll-target" id="faq-prtms">
                    <h2 class="text-3xl font-bold text-primary mb-8">
                        Frequently Asked Questions (FAQs)
                    </h2>

                    <div class="space-y-4">
                        
                        <!-- Q1 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How is PrTMS different from regular TMS?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    PrTMS uses qEEG brain mapping to customize stimulation frequency based on your brain’s unique activity, while traditional TMS typically uses a standardized protocol.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Is PrTMS painful?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Most patients describe a tapping sensation on the scalp during treatment. It is generally well tolerated, with minimal discomfort.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How many sessions will I need?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Treatment plans vary but typically involve multiple sessions per week over several weeks. Your personalized plan will be determined after your brain mapping evaluation.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Does insurance cover PrTMS?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Coverage depends on your <a href="is-tms-therapy-covered-by-insurance.php" class="text-primary hover:underline">insurance</a> provider and diagnosis. Our team at Karma TMS can help verify your benefits and discuss payment options.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How soon will I see results?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Some patients notice improvement within a few weeks, while others may take longer. Consistency is key for optimal outcomes.
                                </div>
                            </div>
                        </div>

                         <!-- Q6 -->
                         <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can PrTMS replace medication?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    In some cases, patients are able to reduce or eliminate medication under medical supervision. However, treatment decisions are individualized and guided by your psychiatrist.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Final Thoughts / CTA -->
                <section id="final-thoughts" class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Take the Next Step Toward Mental Wellness</h2>
                    <p class="mb-4">
                        If you or a loved one in Palm Springs, Rancho Mirage, or 29 Palms is struggling with depression, anxiety, PTSD, or other mood disorders, PrTMS may offer a breakthrough solution. At Karma TMS, we combine advanced neuroscience with compassionate care to help you regain clarity, stability, and hope.
                    </p>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Discover If PrTMS Is Right For You
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        Contact Karma TMS today to schedule your consultation and discover whether personalized PrTMS treatment is right for you.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="contact-us.php" class="btn bg-white hover:bg-gray-100 font-semibold px-8 py-3" style="color: #572670 !important;">
                            Schedule Consultation
                        </a>
                    </div>
                </div>

                <!-- Related Posts -->
                 <section class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-8 animate-fade-in-up">Related Articles</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        
                        <!-- Post 1: Permanent -->
                        <div class="bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all group h-full flex flex-col border border-gray-900 animate-fade-in-up" style="animation-delay: 0.1s;">
                             <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500 overflow-hidden">
                                <img src="images/blog/is-tms-permanent-hero.png" alt="Is TMS Therapy Permanent" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="font-bold text-lg mb-2 text-black leading-tight">
                                    <a href="is-tms-therapy-permanent.php" class="block text-black" style="color: #000000 !important;">Is TMS Therapy Permanent?</a>
                                </h3>
                                <p class="text-sm text-gray-600 mb-4 line-clamp-3">
                                    Discover the long-term effectiveness of TMS and what to expect.
                                </p>
                                <a href="is-tms-therapy-permanent.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline mt-auto">Read More <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                            </div>
                        </div>

                        <!-- Post 2: Insurance -->
                        <div class="bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all group h-full flex flex-col border border-gray-900 animate-fade-in-up" style="animation-delay: 0.2s;">
                             <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500 overflow-hidden">
                                <img src="images/blog/is-tms-therapy-covered-by-insurance-intro.png" alt="Insurance Coverage for TMS" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="font-bold text-lg mb-2 text-black leading-tight">
                                    <a href="is-tms-therapy-covered-by-insurance.php" class="block text-black" style="color: #000000 !important;">Insurance Coverage for TMS</a>
                                </h3>
                                <p class="text-sm text-gray-600 mb-4 line-clamp-3">
                                    Learn about insurance eligibility, costs, and approvals.
                                </p>
                                <a href="is-tms-therapy-covered-by-insurance.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline mt-auto">Read More <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                            </div>
                        </div>

                        <!-- Post 3: Multiple Sessions -->
                        <div class="bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all group h-full flex flex-col border border-gray-900 animate-fade-in-up" style="animation-delay: 0.3s;">
                             <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500 overflow-hidden">
                                <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/11_itsgyr.png" alt="Why TMS Requires Multiple Sessions" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="font-bold text-lg mb-2 text-black leading-tight">
                                    <a href="why-does-tms-require-multiple-sessions.php" class="block text-black" style="color: #000000 !important;">Why TMS Requires Multiple Sessions</a>
                                </h3>
                                <p class="text-sm text-gray-600 mb-4 line-clamp-3">
                                    Understand the protocol and why neuroplasticity takes time.
                                </p>
                                <a href="why-does-tms-require-multiple-sessions.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline mt-auto">Read More <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
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
