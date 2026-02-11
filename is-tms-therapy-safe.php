<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is TMS Therapy Safe? What Patients Should Know | Karma TMS</title>
    <meta name="description"
        content="Is TMS therapy safe? Discover how this FDA-cleared treatment works, its side effects, and why it's a safe option for depression in Palm Springs and Rancho Mirage.">
    <meta name="keywords"
        content="Is TMS therapy safe, TMS therapy side effects, TMS vs medication safety, TMS safety Palm Springs, Transcranial Magnetic Stimulation risks">
    <link rel="canonical" href="is-tms-therapy-safe.php">
    <meta property="og:title" content="Is TMS Therapy Safe? What Patients Should Know | Karma TMS">
    <meta property="og:description"
        content="Is TMS therapy safe? Discover how this FDA-cleared treatment works, its side effects, and why it's a safe option for depression in Palm Springs and Rancho Mirage.">
    <meta property="og:image"
        content="images/blog/is-tms-therapy-safe-intro.png">
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
                <span class="text-gray-900 font-medium">Is TMS Therapy Safe?</span>
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
                        February 7, 2026
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
                    Is TMS Therapy Safe? What Patients Should Know Before Starting Treatment
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Understand the safety profile, potential side effects, and benefits of Transcranial Magnetic Stimulation.
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
                                <button class="toc-button" onclick="scrollToSection('intro')">Introduction</button>
                                <button class="toc-button" onclick="scrollToSection('how-it-works')">How TMS Works</button>
                                <button class="toc-button" onclick="scrollToSection('fda-approved')">FDA Approval</button>
                                <button class="toc-button" onclick="scrollToSection('is-tms-safe')">Why It's Safe</button>
                                <button class="toc-button" onclick="scrollToSection('side-effects')">Side Effects</button>
                                <button class="toc-button" onclick="scrollToSection('risks')">Potential Risks</button>
                                <button class="toc-button" onclick="scrollToSection('who-is-it-for')">Candidates</button>
                                <button class="toc-button" onclick="scrollToSection('tms-vs-meds')">TMS vs. Meds</button>
                                <button class="toc-button" onclick="scrollToSection('faq-safety')">FAQs</button>
                                <button class="toc-button" onclick="scrollToSection('final-thoughts')">Final Thoughts</button>
                            </nav>
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <a href="contact-us.php" class="btn w-full bg-primary text-white hover:opacity-90 justify-center">
                                    Book Free Consult
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
                    <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1770639701/41_plj0z5.png" 
                        alt="Is TMS Therapy Safe?"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        When exploring treatment options for <a href="depression.php" class="text-primary hover:underline">depression</a> and other mental health conditions, safety is often the first and most important concern. <a href="tms-therapy.php" class="text-primary hover:underline">Transcranial Magnetic Stimulation (TMS)</a> has gained attention as a non-invasive, medication-free treatment—but many people still ask the same question: <strong>Is TMS therapy safe?</strong>
                    </p>
                    <p class="mt-4 text-gray-700">
                        This blog explains how TMS works, what research says about its safety, possible side effects, and what patients in <a href="palm-springs.php" class="text-primary hover:underline">Palm Springs</a>, 29 Palms, and <a href="rancho-mirage.php" class="text-primary hover:underline">Rancho Mirage</a> should know before beginning treatment.
                    </p>
                    <p class="text-gray-700">
                        <strong>Transcranial Magnetic Stimulation (TMS)</strong> is a non-invasive mental health treatment that uses magnetic pulses to stimulate specific areas of the brain involved in mood regulation. Unlike medications, TMS:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>Does not circulate through the bloodstream</li>
                        <li>Does not cause systemic side effects</li>
                        <li>Does not require anesthesia or sedation</li>
                         <li>Allows patients to resume normal activities immediately</li>
                    </ul>
                    <p class="text-gray-700">
                        TMS is commonly used for individuals who have not experienced adequate relief from traditional treatments.
                    </p>
                </div>

                <!-- Section: How TMS Therapy Works -->
                <section id="how-it-works" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">How TMS Therapy Works</h2>
                    <p class="mb-6">
                        TMS works by delivering focused magnetic pulses through a coil placed gently on the scalp. These pulses stimulate targeted neurons in the brain, helping to improve communication within mood-related neural circuits.
                    </p>
                    <p class="mb-6">
                        Over a series of sessions, this stimulation supports <a href="brain-mapping.php" class="text-primary hover:underline">neuroplasticity</a>, allowing the brain to form healthier patterns of activity associated with improved mood and emotional regulation.
                    </p>
                </section>

                <!-- Section: Is TMS Therapy FDA-Approved? -->
                <section id="fda-approved" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Is TMS Therapy FDA-Approved?</h2>
                    <p class="mb-6">
                        Yes. TMS therapy has been FDA-cleared for the treatment of <a href="depression.php" class="text-primary hover:underline">major depressive disorder</a> and other specific conditions. FDA clearance means the therapy has undergone rigorous evaluation for both safety and effectiveness.
                    </p>
                    <p class="mb-6">
                        Since its approval, TMS has been widely studied and used in clinical settings across the United States.
                    </p>
                </section>

                <!-- Section: What Makes TMS a Safe Treatment Option? -->
                <section id="is-tms-safe" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What Makes TMS a Safe Treatment Option?</h2>
                    <p class="mb-6">
                        TMS therapy is considered safe because it is:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li><strong>Non-invasive</strong> (no surgery, injections, or implants)</li>
                        <li><strong>Targeted</strong> (affects only specific brain areas)</li>
                        <li><strong>Medication-free</strong></li>
                        <li><strong>Well tolerated</strong> by most patients</li>
                    </ul>
                    <p class="mb-6">
                        Unlike electroconvulsive therapy (ECT), TMS does not cause memory loss or require anesthesia.
                    </p>
                </section>

                <!-- Section: Common Side Effects of TMS Therapy -->
                <section id="side-effects" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Common Side Effects of TMS Therapy</h2>
                    <p class="mb-6">
                        Most side effects associated with TMS are mild and temporary. The most commonly reported side effects include:
                    </p>
                     <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>Mild scalp discomfort during treatment</li>
                        <li>Temporary headaches</li>
                        <li>Tingling or tapping sensations on the scalp</li>
                        <li>Facial muscle twitching during stimulation</li>
                    </ul>
                    <p class="mb-6">
                        These effects usually decrease as the body adjusts to treatment and often resolve shortly after sessions.
                    </p>
                </section>

                 <!-- Section: Are There Serious Risks With TMS Therapy? -->
                <section id="risks" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Are There Serious Risks With TMS Therapy?</h2>
                    <p class="mb-6">
                        Serious side effects from TMS are rare. The most discussed risk is seizure, but this occurs in an extremely small percentage of patients and is minimized through proper screening and adherence to safety protocols.
                    </p>
                    <p class="mb-6">
                        Before treatment begins, patients undergo a thorough evaluation to identify any potential risk factors.
                    </p>
                </section>

                <!-- Section: Who May Not Be a Good Candidate for TMS? -->
                <section id="who-is-it-for" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Who May Not Be a Good Candidate for TMS?</h2>
                    <p class="mb-6">
                        While TMS is safe for many individuals, it may not be appropriate for people who:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>Have certain types of implanted metal or medical devices in or near the head</li>
                        <li>Have a history of uncontrolled seizures</li>
                        <li>Have specific neurological conditions that require special consideration</li>
                    </ul>
                    <p class="mb-6">
                        A professional evaluation ensures TMS is both safe and appropriate for each individual.
                    </p>
                </section>

                <!-- Section: TMS Therapy vs. Medication Safety -->
                <section id="tms-vs-meds" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">TMS Therapy vs. Medication Safety</h2>
                    <p class="mb-6">
                        Many people seek TMS because of difficulties with medication side effects. Compared to antidepressants, TMS:
                    </p>
                     <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>Does not cause weight gain</li>
                        <li>Does not cause sexual dysfunction</li>
                        <li>Does not lead to digestive issues</li>
                        <li>Does not require daily dosing</li>
                    </ul>
                    <p class="mb-6">
                        This makes TMS an appealing option for those who want an alternative or complementary treatment approach, often discussed during <a href="medication-management.php" class="text-primary hover:underline">medication management</a> consultations.
                    </p>
                </section>
                
                 <!-- Section: Safety Monitoring During TMS Treatment -->
                <section id="monitoring" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Safety Monitoring During TMS Treatment</h2>
                    <p class="mb-6">
                        Throughout treatment, patients are closely monitored for comfort, response, and side effects. Adjustments can be made to ensure safety and tolerability. Ongoing monitoring helps ensure a positive and supportive treatment experience from start to finish.
                    </p>
                </section>

                 <!-- Section: Is TMS Therapy Safe for Long-Term Use? -->
                <section id="long-term" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Is TMS Therapy Safe for Long-Term Use?</h2>
                    <p class="mb-6">
                        Research indicates that TMS therapy does not cause long-term negative effects on brain function. In fact, many patients experience sustained improvement even after completing a treatment course. Maintenance options may be considered for some individuals, depending on symptoms and clinical guidance.
                    </p>
                </section>

                <!-- FAQ Section -->
                <section class="mb-12 scroll-target" id="faq-safety">
                    <h2 class="text-3xl font-bold text-primary mb-8">
                        Frequently Asked Questions About TMS Therapy Safety
                    </h2>

                    <div class="space-y-4">
                        
                        <!-- Q1 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Is TMS therapy painful?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Most patients describe the sensation as uncomfortable at first but not painful. Discomfort usually lessens over time.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can I drive after a TMS session?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes. TMS does not impair alertness or coordination, so patients can drive and return to daily activities immediately.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Does TMS cause memory loss?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    No. Unlike some other brain stimulation therapies, TMS does not cause memory impairment.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How soon do side effects appear?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    If side effects occur, they typically happen during or shortly after a session and are temporary.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Is TMS safe for older adults?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes. Age alone does not disqualify someone from TMS, and many older adults tolerate it well.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: TMS Therapy in Palm Springs, 29 Palms & Rancho Mirage -->
                <section id="local-context" class="mb-12 scroll-target">
                     <h2 class="text-3xl font-bold text-primary mb-6">TMS Therapy in Palm Springs, 29 Palms & Rancho Mirage</h2>
                     <p class="mb-6">
                        Access to safe, evidence-based mental health treatment is essential for communities across the Coachella Valley. Patients in <a href="palm-springs.php" class="text-primary hover:underline">Palm Springs</a>, 29 Palms, and <a href="rancho-mirage.php" class="text-primary hover:underline">Rancho Mirage</a> can explore TMS therapy as a modern, non-invasive option under professional care.
                     </p>
                </section>


                <!-- Final Thoughts -->
                <section id="final-thoughts" class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Final Thoughts</h2>
                    <p class="mb-4">
                        TMS therapy is widely recognized as a safe, effective, and well-tolerated treatment for individuals seeking alternatives to medication. With FDA clearance, strong clinical research, and minimal side effects, TMS offers hope to those navigating persistent mental health challenges.
                    </p>
                    <p class="mb-4">
                        At <a href="index.php" class="text-primary hover:underline font-bold">Karma TMS</a>, patient safety, comfort, and personalized care are central to every treatment plan.
                    </p>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Schedule a TMS Consultation Today
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        If you’re considering TMS therapy and want to learn whether it’s right for you, schedule a consultation with a qualified mental health professional serving Palm Springs, 29 Palms, and Rancho Mirage.
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
                        
                        <!-- Post 1: Four A's -->
                        <div class="bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all group h-full flex flex-col" style="border: 1px solid #000000 !important;">
                             <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500 overflow-hidden">
                                <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/12_t62v1m.png" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="font-bold text-lg mb-2 text-black leading-tight">
                                    <a href="four-as-stress-management.php" class="block text-black" style="color: #000000 !important;">The Four A's of Stress Management</a>
                                </h3>
                                <p class="text-sm text-gray-600 mb-4 line-clamp-3">
                                    Master stress management with the Four A's: Avoid, Alter, Adapt, and Accept.
                                </p>
                                <a href="four-as-stress-management.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline mt-auto">Read More <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                            </div>
                        </div>

                        <!-- Post 2: Social Media -->
                        <div class="bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all group h-full flex flex-col" style="border: 1px solid #000000 !important;">
                             <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500 overflow-hidden">
                                <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1764138578/28_mmumyo.png" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="font-bold text-lg mb-2 text-black leading-tight">
                                    <a href="social-media-mental-wellbeing.php" class="block text-black" style="color: #000000 !important;">Social Media & Mental Wellbeing</a>
                                </h3>
                                <p class="text-sm text-gray-600 mb-4 line-clamp-3">
                                    Understand the impact of social media habits on your mental health.
                                </p>
                                <a href="social-media-mental-wellbeing.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline mt-auto">Read More <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                            </div>
                        </div>

                        <!-- Post 3: Multiple Sessions -->
                        <div class="bg-white rounded-xl overflow-hidden hover:shadow-lg transition-all group h-full flex flex-col" style="border: 1px solid #000000 !important;">
                             <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500 overflow-hidden">
                                <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/11_itsgyr.png" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="font-bold text-lg mb-2 text-black leading-tight">
                                    <a href="why-does-tms-require-multiple-sessions.php" class="block text-black" style="color: #000000 !important;">Why TMS Requires Multiple Sessions</a>
                                </h3>
                                <p class="text-sm text-gray-600 mb-4 line-clamp-3">
                                    Understand the science of neuroplasticity and why a full course of treatment is key.
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
