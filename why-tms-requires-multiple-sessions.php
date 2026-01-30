<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why TMS Requires Multiple Sessions | Karma TMS Blog</title>
    <meta name="description"
        content="Understand why TMS therapy requires multiple sessions for lasting results. Learn about neuroplasticity, treatment protocols, and what to expect during your TMS journey.">
    <meta name="keywords"
        content="TMS therapy sessions, neuroplasticity, depression treatment, mental health recovery, TMS protocol, brain stimulation duration">
    <link rel="canonical" href="why-tms-requires-multiple-sessions.php">
    <meta property="og:title" content="Why TMS Requires Multiple Sessions | Karma TMS Blog">
    <meta property="og:description"
        content="Understand why TMS therapy requires multiple sessions for lasting results. Learn about neuroplasticity, treatment protocols, and what to expect during your TMS journey.">
    <meta property="og:image"
        content="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/11_itsgyr.png">
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
            padding: 1rem;
            font-weight: 700;
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
            /* Max-height is handled by JS for precise animation */
        }

        .accordion-inner {
            padding: 0 1rem 1rem 1rem;
            color: #374151;
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

        .bg-blue-50 { background-color: #eff6ff; }
        .border-blue-200 { border-color: #bfdbfe; }
        .border-blue-500 { border-color: #3b82f6; }
        .text-blue-500 { color: #3b82f6; }
        .text-blue-900 { color: #1e3a8a; }

        .border-purple-500 { border-color: #a855f7; }
        .text-purple-500 { color: #a855f7; }

        .bg-amber-50 { background-color: #fffbeb; }
        .border-amber-200 { border-color: #fde68a; }
        .text-amber-900 { color: #78350f; }
        .text-amber-600 { color: #d97706; }
        
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
      "headline": "Why TMS Requires Multiple Sessions",
      "description": "Understand why TMS therapy requires multiple sessions for lasting results. Learn about neuroplasticity, treatment protocols, and what to expect during your TMS journey.",
      "image": "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/11_itsgyr.png",
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
      "datePublished": "2025-07-22",
      "dateModified": "2025-07-22",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blog/why-tms-requires-multiple-sessions"
      }
    }
    </script>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Breadcrumb -->
    <div class="bg-gray-50 border-b relative z-10" style="margin-top: 135px;"> 
        <div class="container mx-auto px-4 py-4">
            <nav class="flex items-center text-sm text-gray-500" aria-label="Breadcrumb">
                <a href="index.php" class="hover:text-purple-500 transition-colors">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <a href="blog.php" class="hover:text-purple-500 transition-colors">Blog</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <span class="text-gray-900 font-medium">Why TMS Requires Multiple Sessions</span>
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
                        July 22, 2025
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-3 py-1 rounded-full backdrop-blur-sm">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        10 min read
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-3 py-1 rounded-full backdrop-blur-sm">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        Dr. Keerthy Sunder
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Why Does TMS Require Multiple Sessions?
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Understanding the science of neuroplasticity and why a full course of treatment is key to lasting recovery
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="contact-us.php" class="btn bg-white text-primary hover:bg-gray-100 font-bold px-8 py-3 text-lg">
                        Start Your Journey
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
                                <button class="toc-button" onclick="scrollToSection('not-a-pill')">
                                    Not Like Taking a Pill
                                </button>
                                <button class="toc-button" onclick="scrollToSection('gym-analogy')">
                                    The "Gym for the Brain"
                                </button>
                                <button class="toc-button" onclick="scrollToSection('neuroplasticity')">
                                    Neuroplasticity Explained
                                </button>
                                <button class="toc-button" onclick="scrollToSection('protocol')">
                                    Standard Protocol
                                </button>
                                <button class="toc-button" onclick="scrollToSection('what-to-expect')">
                                    What to Expect
                                </button>
                                <button class="toc-button" onclick="scrollToSection('timeline')">
                                    Treatment Timeline
                                </button>
                                <button class="toc-button" onclick="scrollToSection('faqs')">
                                    Frequently Asked Questions
                                </button>
                            </nav>
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <a href="contact-us.php" class="btn w-full bg-primary text-white hover:opacity-90 justify-center">
                                    Get Evaluated
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
                    <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/11_itsgyr.png"
                        alt="TMS therapy session illustration"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        When patients inquire about <a href="tms-therapy.php" class="text-primary hover:underline">TMS therapy in Palm Springs</a>, one of the most common questions is: "Why does it take so many sessions?" Unlike a medication that enters your system immediately, TMS is a retraining process for your brain. Understanding the biological mechanisms behind this treatment reveals why a sustained course is necessary for profound, lasting change.
                    </p>
                </div>

                <!-- Section 1: Not Like a Pill -->
                <section id="not-a-pill" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">TMS Is Not Like Taking a Pill</h2>
                    
                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 mb-6">
                        <p class="text-gray-700 mb-0">
                            <strong>The key difference:</strong> Antidepressants work by chemically altering neurotransmitter levels in the entire brain. TMS works by using magnetic fields to stimulate specific, underactive neural circuits to "wake them up" and strengthen their connections over time.
                        </p>
                    </div>

                    <p class="mb-6">
                        Think of depression as a state where certain pathways in your brain—specifically those regulating mood in the prefrontal cortex—have gone dormant or become weak. Simply stimulating them once isn't enough to reverse developed patterns of inactivity. To create lasting change, these pathways need repeated, consistent stimulation.
                    </p>
                </section>

                <!-- Section 2: Gym Analogy -->
                <section id="gym-analogy" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">The "Gym for the Brain" Analogy</h2>

                    <p class="mb-6">
                        The best way to understand TMS treatment is to compare it to physical exercise. If you go to the gym once, you won't see visible muscle growth or significant weight loss. However, if you go consistently for six weeks, the cumulative effect leads to a transformed physique.
                    </p>

                    <div class="bg-white border text-card-foreground shadow-sm border-l-4 border-purple-500 rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <i data-lucide="dumbbell" class="w-8 h-8 text-purple-500 flex-shrink-0 mt-1"></i>
                            <div>
                                <h3 class="text-xl font-bold mb-3">Building Mental Muscle</h3>
                                <p class="text-gray-700">
                                    Each TMS session is like a "workout" for your neurons. A single session releases neurotransmitters and fires neurons, but the goal is to build <em>strength</em> and <em>endurance</em> in these circuits. It takes time for the brain to build new synaptic connections—a process known as neuroplasticity.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section 3: Neuroplasticity -->
                <section id="neuroplasticity" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Harnessing Neuroplasticity</h2>
                    
                    <p class="mb-6">
                        Neuroplasticity is the brain's ability to reorganize itself by forming new neural connections. TMS therapy relies heavily on a specific type of neuroplasticity called <strong>Long-Term Potentiation (LTP)</strong>.
                    </p>

                    <ul class="list-disc pl-6 space-y-4 mb-6">
                        <li>
                            <strong>Stimulation:</strong> The magnetic pulses cause neurons to fire.
                        </li>
                        <li>
                            <strong>Strengthening:</strong> Repeated firing strengthens the synapse (connection) between neurons.
                        </li>
                        <li>
                            <strong>Growth:</strong> Over weeks of daily treatment, these connections become permanent, allowing mood-regulating circuits to function independently again.
                        </li>
                    </ul>

                    <p>
                        This biological growth takes time. You are literally growing new physical infrastructure in your brain, akin to how learning a new language or instrument physically changes brain structure over time.
                    </p>
                </section>

                <!-- Section 4: Protocol -->
                <section id="protocol" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Why the Standard Protocol is 36 Sessions</h2>

                    <p class="mb-6">
                        The FDA-cleared protocol for depression typically involves 36 sessions, usually administered 5 days a week for 6-7 weeks. This protocol isn't arbitrary; it's based on extensive clinical trials that determined the "dose" required for remission.
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 my-8">
                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <h4 class="font-bold text-primary mb-2">Weeks 1-2: Activation</h4>
                            <p class="text-sm text-gray-600">The brain begins to wake up. Patients typically don't feel major mood shifts yet, but sleep and energy may start to improve.</p>
                        </div>
                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <h4 class="font-bold text-primary mb-2">Weeks 3-4: The "Dip" & Lift</h4>
                            <p class="text-sm text-gray-600">Some patients experience a temporary plateau or "dip" as the brain adjusts, often followed by noticeable improvements in mood.</p>
                        </div>
                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <h4 class="font-bold text-primary mb-2">Weeks 5-6: Consolidation</h4>
                            <p class="text-sm text-gray-600">Gains solidify. Good days become more frequent and consistent as the neural pathways strengthen.</p>
                        </div>
                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <h4 class="font-bold text-primary mb-2">Taper Period</h4>
                            <p class="text-sm text-gray-600">The final 6 sessions are often tapered (e.g., 3 times a week, then 2) to wean the brain off the support.</p>
                        </div>
                    </div>
                </section>

                <!-- Section 5: What to Expect -->
                <section id="what-to-expect" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Commitment Yields Results</h2>

                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-6 mb-6">
                        <p class="font-medium text-amber-900 mb-2">Consistency is Crucial</p>
                        <p class="text-sm text-amber-800">
                            Because TMS relies on cumulative effects, missing sessions can disrupt the momentum of neuroplasticity. Sticking to the daily schedule gives you the highest statistical chance of achieving remission.
                        </p>
                    </div>

                    <p class="mb-6">
                        While the time commitment might seem daunting, it is a short-term investment for a long-term gain. Many patients who have struggled with depression for decades find that 6 weeks of dedicated time is a small price to pay for lifting the fog of depression.
                    </p>
                </section>

                <!-- Section: Treatment Timeline -->
                <section id="timeline" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Your Treatment Timeline</h2>

                    <div class="rounded-r-xl p-6 mb-6" style="background-color: rgba(87, 38, 112, 0.05); border-left: 4px solid #572670;">
                        <h3 class="text-lg font-bold mb-4 text-gray-900">Standard Treatment Protocol</h3>
                        <ul class="space-y-3 text-gray-700 list-none pl-0">
                            <li class="flex items-start">
                                <span class="text-primary font-bold mr-2">•</span>
                                <span><strong class="font-semibold text-gray-900">Total Sessions:</strong> 30-36 sessions</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-primary font-bold mr-2">•</span>
                                <span><strong class="font-semibold text-gray-900">Duration:</strong> 6 weeks</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-primary font-bold mr-2">•</span>
                                <span><strong class="font-semibold text-gray-900">Frequency:</strong> 5 days per week (Monday-Friday)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-primary font-bold mr-2">•</span>
                                <span><strong class="font-semibold text-gray-900">Session Length:</strong> 20-40 minutes each</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-primary font-bold mr-2">•</span>
                                <span><strong class="font-semibold text-gray-900">Total Time Commitment:</strong> Approximately 20-30 hours over 6 weeks</span>
                            </li>
                        </ul>
                    </div>

                    <p class="text-gray-700 leading-relaxed">
                        While this is the standard protocol, some patients may need additional sessions based on their individual response and condition severity. Your psychiatrist will work with you to determine the optimal treatment duration.
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
                        <h4 class="text-lg md:text-xl font-bold mb-1" style="color: #572670;">About the Author</h4>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Dr. Keerthy Sunder</h3>
                        <p class="text-gray-500 font-medium mb-3 text-sm">Board-Certified Psychiatrist | Medical Director at KarmaTMS</p>
                        <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                            Dr. Keerthy Sunder is a board-certified psychiatrist specializing in TMS therapy and integrative mental health. He advocates for evidence-based, non-invasive treatments to help patients achieve lasting recovery without relying solely on medication.
                        </p>
                    </div>
                </div>

                <!-- FAQ Section -->
<section id="faqs" class="mb-12 scroll-target">
  <h2 class="text-3xl font-bold text-[#572670] mb-8">
    Frequently Asked Questions
  </h2>

  <div class="space-y-4">

    <div class="accordion-item" data-state="closed">
      <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
        <span>Why can't I just have one TMS session?</span>
        <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
      </button>
      <div class="accordion-content">
        <div class="accordion-inner">
          A single TMS session doesn't provide lasting neuroplastic changes. Think of it like physical therapy - one session might feel good, but lasting change requires consistent, repeated stimulation to create new neural pathways and strengthen beneficial brain connections.
        </div>
      </div>
    </div>

    <div class="accordion-item" data-state="closed">
      <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
        <span>How many TMS sessions do I need?</span>
        <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
      </button>
      <div class="accordion-content">
        <div class="accordion-inner">
          Most patients require 30–36 sessions over 6 weeks (5 sessions per week). However, some may need fewer or more depending on their condition severity and response. Your treatment team will monitor your progress and adjust accordingly.
        </div>
      </div>
    </div>

    <div class="accordion-item" data-state="closed">
      <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
        <span>Can I skip sessions or spread them out?</span>
        <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
      </button>
      <div class="accordion-content">
        <div class="accordion-inner">
          Consistency is critical for TMS effectiveness. Missing sessions can delay results and reduce overall effectiveness. The 5-days-per-week protocol is based on research showing this frequency optimizes neuroplastic changes while allowing the brain to consolidate improvements.
        </div>
      </div>
    </div>

    <div class="accordion-item" data-state="closed">
      <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
        <span>When will I start seeing results?</span>
        <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
      </button>
      <div class="accordion-content">
        <div class="accordion-inner">
          Most patients begin noticing improvements around weeks 2–3, though some may see changes earlier or later. Full benefits typically emerge by week 4-6. The gradual improvement reflects the time needed for neuroplastic changes to accumulate and stabilize.
        </div>
      </div>
    </div>

    <div class="accordion-item" data-state="closed">
      <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
        <span>What happens if I stop treatment early?</span>
        <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
      </button>
      <div class="accordion-content">
        <div class="accordion-inner">
          Stopping TMS before completing the full course often results in incomplete symptom relief. While some improvement may remain, you likely won't experience the full therapeutic benefits. If you're considering stopping early, discuss with your provider about maintenance protocols or treatment modifications.
        </div>
      </div>
    </div>

    <div class="accordion-item" data-state="closed">
      <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
        <span>Will I need maintenance sessions after completing treatment?</span>
        <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
      </button>
      <div class="accordion-content">
        <div class="accordion-inner">
          Some patients maintain their improvements without additional sessions, while others benefit from periodic maintenance treatments (monthly or quarterly) to sustain results. Your provider will help develop a personalized maintenance plan based on your response to treatment.
        </div>
      </div>
    </div>

  </div>
</section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Ready to Commit to Better Mental Health?
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        Don't let the time commitment hold you back. 6 weeks can change the rest of your life. Contact us today to see if <a href="tms-therapy.php" class="underline text-white hover:text-gray-200">TMS therapy in Palm Springs, CA</a> is right for you.
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
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/14_dszfwi.png"
                                alt="Is TMS Therapy Legitimate?" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-primary transition-colors">
                                    <a href="tms-therapy.php" class="block">Is TMS Therapy Legitimate?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Explore the FDA approval and scientific backing of TMS therapy.</p>
                                <a href="tms-therapy.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Post 2 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/15_ym6n6b.png"
                                alt="How Successful is TMS?" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-primary transition-colors">
                                    <a href="research.php" class="block">How Successful is TMS Treatment?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Dive into the success rates and clinical outcomes of TMS therapy.</p>
                                <a href="research.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1764138578/28_mmumyo.png"
                                alt="Social Media and Mental Health" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-primary transition-colors">
                                    <a href="social-media-mental-wellbeing.php" class="block">Social Media & Mental Wellbeing</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Understand the impact of social media habits on your mental health.</p>
                                <a href="social-media-mental-wellbeing.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
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
