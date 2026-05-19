<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Brain on TMS: What Actually Happens During Those 20 Minutes</title>
    <meta name="description"
        content="What really happens inside your brain during a TMS session? We break down the neuroscience — from the magnetic pulse to the synaptic change — in plain English.">
    <meta name="keywords"
        content="what happens during TMS therapy, TMS brain science, how TMS works, transcranial magnetic stimulation neuroscience, TMS session experience, TMS prefrontal cortex, Palm Springs TMS">
    <link rel="canonical" href="your-brain-on-tms.php">
    <meta property="og:title" content="Your Brain on TMS: What Actually Happens During Those 20 Minutes">
    <meta property="og:description"
        content="A board-certified psychiatrist explains exactly what happens in your brain during a 20-minute TMS session — from the magnetic pulse to synaptic change.">
    <meta property="og:image"
        content="https://karmatms.com/images/blog/your-brain-on-tms-banner.png">
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
            display: block !important;
            width: 100% !important;
            text-align: left !important;
            padding: 0.5rem 0.75rem !important;
            border-radius: 0.375rem !important;
            font-size: 0.875rem !important;
            transition: all 0.2s !important;
            color: #374151 !important;
            background: transparent !important;
            background-color: transparent !important;
            border: none !important;
            cursor: pointer !important;
            box-shadow: none !important;
        }

        .toc-button:hover {
            background-color: rgba(87, 38, 112, 0.1) !important;
            color: #572670 !important;
        }

        .toc-button.active {
            background-color: #572670 !important;
            color: white !important;
            font-weight: 500 !important;
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
        .border-blue-500 { border-color: #3b82f6; }
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
      "headline": "Your Brain on TMS: What Actually Happens During Those 20 Minutes",
      "description": "A board-certified psychiatrist explains exactly what happens in your brain during a 20-minute TMS session — from the magnetic pulse to synaptic change.",
      "image": "https://karmatms.com/images/blog/your-brain-on-tms-banner.png",
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
      "datePublished": "2026-04-17",
      "dateModified": "2026-04-17",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/your-brain-on-tms/"
      }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "Does TMS therapy hurt?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Most patients describe a rhythmic tapping or mild knocking sensation on the scalp. It is not painful for the majority of people, though some mild scalp discomfort can occur in early sessions and typically fades within the first week."
        }
      }, {
        "@type": "Question",
        "name": "What part of the brain does TMS target?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Standard TMS targets the left dorsolateral prefrontal cortex (DLPFC), the region most consistently underactive in major depression."
        }
      }, {
        "@type": "Question",
        "name": "How many sessions before TMS starts working?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Most patients begin to notice mood improvements between sessions 10 and 20. The full benefit emerges after the complete course of 20–36 sessions."
        }
      }, {
        "@type": "Question",
        "name": "Can I drive after a TMS session?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. TMS requires no sedation and has no effect on cognitive function or reaction time."
        }
      }]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.karmatms.com/"},
        {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://www.karmatms.com/blog.php"},
        {"@type": "ListItem", "position": 3, "name": "Your Brain on TMS: What Actually Happens During Those 20 Minutes", "item": "https://www.karmatms.com/your-brain-on-tms.php"}
      ]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalWebPage",
      "@id": "https://www.karmatms.com/your-brain-on-tms.php#medicalwebpage",
      "name": "Your Brain on TMS: What Actually Happens During Those 20 Minutes",
      "url": "https://www.karmatms.com/your-brain-on-tms.php",
      "description": "A board-certified psychiatrist explains exactly what happens in your brain during a 20-minute TMS session — from the magnetic pulse to synaptic change.",
      "inLanguage": "en-US",
      "medicalAudience": {"@type": "MedicalAudience", "audienceType": "Patients"},
      "about": {"@type": "MedicalTherapy", "name": "Transcranial Magnetic Stimulation (TMS)"},
      "reviewedBy": {
        "@type": "Person",
        "name": "Dr. Keerthy Sunder",
        "jobTitle": "Board-Certified Psychiatrist",
        "url": "https://www.karmatms.com/team.php"
      },
      "publisher": {
        "@type": "MedicalOrganization",
        "name": "Karma TMS PC",
        "url": "https://www.karmatms.com"
      },
      "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": ["h1", "h2", ".text-xl"]
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
                <span class="text-gray-900 font-medium">Your Brain on TMS</span>
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
                        April 17, 2026
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
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Your Brain on TMS: What Actually Happens During Those 20 Minutes
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    The coil sits against your scalp. The clicking starts. Twenty minutes later, you walk out and drive yourself to work. But inside your brain, something far more precise just happened.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="contact-us.php" class="btn bg-white text-primary hover:bg-gray-100 font-bold px-8 py-3 text-lg">
                        Book Your Consultation
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
                                <button class="toc-button" onclick="scrollToSection('setup')">The Setup Before First Click</button>
                                <button class="toc-button" onclick="scrollToSection('pulse')">The Magnetic Pulse</button>
                                <button class="toc-button" onclick="scrollToSection('neurons')">Neurons Fire and Wire Together</button>
                                <button class="toc-button" onclick="scrollToSection('target')">Why the Left DLPFC?</button>
                                <button class="toc-button" onclick="scrollToSection('prtms')">PrTMS: Personalized Brain Mapping</button>
                                <button class="toc-button" onclick="scrollToSection('feels')">What You Actually Feel</button>
                                <button class="toc-button" onclick="scrollToSection('timeline')">Session-by-Session Changes</button>
                                <button class="toc-button" onclick="scrollToSection('faq')">FAQ</button>
                                <button class="toc-button" onclick="scrollToSection('conclusion')">Conclusion</button>
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
                    <img src="images/blog/your-brain-on-tms-banner.png"
                         alt="Your Brain on TMS — What Happens During a Session"
                         class="w-full object-cover rounded-xl mb-8 shadow-md"
                         style="max-height: 480px; object-fit: cover;">

                    <p class="text-xl leading-relaxed text-gray-700">
                        For most patients walking into their first <a href="tms-therapy.php" class="text-primary hover:underline"><strong>TMS therapy</strong></a> session, the experience feels almost anticlimactic. A coil sits against your scalp, you hear a rhythmic clicking, and twenty minutes later you walk out and drive yourself home. But behind that quiet exterior, something extraordinary is happening at the cellular level — and it explains <a href="why-tms-works-when-antidepressants-dont.php" class="text-primary hover:underline">why TMS succeeds where decades of antidepressant medication often fail</a>.
                    </p>
                    <p class="mt-4 text-gray-700">
                        This guide walks you through exactly what happens inside your brain during those twenty minutes — the magnetic pulse, the neural firing, the long-term rewiring — in plain English, with no jargon and no sales pitch. By the end you will understand why TMS is fundamentally different from any pill you have ever swallowed. If you are wondering whether TMS is right for you, our <a href="tms-quiz.php" class="text-primary hover:underline">2-minute candidacy quiz</a> can help.
                    </p>
                </div>

                <!-- Section: The Setup -->
                <section id="setup" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">The Setup: What's Happening Before the First Click</h2>
                    <p class="mb-6">
                        Before your first session, your Karma TMS clinician takes careful measurements of your head to pinpoint your <strong>motor threshold</strong> — the minimum stimulation intensity that produces a visible twitch in your hand. That number tells the technician your brain's individual excitability level.
                    </p>
                    <p class="mb-6">
                        The TMS coil — a figure-eight-shaped electromagnetic device — is then positioned over your <a href="brain-mapping.php" class="text-primary hover:underline">left dorsolateral prefrontal cortex (DLPFC)</a>. That positioning is precise to the millimeter. The coil never touches your brain. It does not need to. The magnetic field passes through your scalp and skull as easily as light passes through glass, focusing energy in a targeted cortical zone roughly 2–3 cm beneath the surface.
                    </p>
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-xl">
                        <p class="text-blue-900 font-medium">
                            That millimeter-level coil positioning is the difference between effective treatment and an ineffective one. It is also why a board-certified psychiatrist — not a technician alone — should oversee your treatment plan.
                        </p>
                    </div>
                </section>

                <!-- Section: The Magnetic Pulse -->
                <section id="pulse" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">The Magnetic Pulse: Faster Than a Lightning Strike</h2>
                    <p class="mb-6">
                        Each individual TMS pulse lasts less than a millisecond — shorter than the blink of an eye. The coil generates a brief, powerful magnetic field (roughly 1.5–2 Tesla, comparable to an MRI) that changes so rapidly it induces a tiny electrical current in the neurons beneath it. That current is enough to depolarize the cell membrane and trigger an action potential: the neuron fires.
                    </p>
                    <p class="mb-6">
                        In standard repetitive TMS for <a href="depression.php" class="text-primary hover:underline">depression</a>, pulses are delivered in rapid trains — typically 10 pulses per second for 4 seconds, followed by a short pause, repeated for the full 20-minute session. By the time the session ends, roughly <strong>3,000 magnetic pulses</strong> have been delivered to that one cortical region. The same approach is also FDA-approved for <a href="ocd.php" class="text-primary hover:underline">OCD</a> and is being studied for <a href="anxiety.php" class="text-primary hover:underline">anxiety disorders</a> and <a href="ptsd.php" class="text-primary hover:underline">PTSD</a>.
                    </p>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">By the Numbers — A Single Session</h3>
                    <ul class="list-disc pl-5 mb-6">
                        <li><strong>~3,000 magnetic pulses</strong> delivered per session</li>
                        <li>Each pulse lasts <strong>under 1 millisecond</strong></li>
                        <li>Penetration depth: <strong>2–3 cm</strong> below the scalp</li>
                        <li>Target zone: roughly <strong>1–2 cm³</strong> of cortical tissue</li>
                        <li>No sedation, no systemic drug exposure, zero downtime</li>
                    </ul>
                </section>

                <!-- Section: Neurons -->
                <section id="neurons" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Neurons Fire, Then Wire Together</h2>
                    <p class="mb-6">
                        A single session of TMS produces temporary changes in cortical excitability. The real transformation happens across the full treatment course through a process called <strong>long-term potentiation (LTP)</strong> — the same mechanism responsible for all learning and memory formation in the brain.
                    </p>
                    <p class="mb-6">
                        When the DLPFC is stimulated repeatedly at the right frequency, the synaptic connections between its neurons — and between the DLPFC and deeper mood-regulating structures like the amygdala, hippocampus, and anterior cingulate cortex — become stronger and more efficient. The brain literally rewires itself. Circuits that were chronically underactive in <a href="depression.php" class="text-primary hover:underline">depression</a> begin to fire more readily. Over time, that new activity pattern becomes the brain's new default.
                    </p>
                    <p>
                        This is why TMS works better across a full course rather than as a one-off treatment, and why <a href="is-tms-therapy-permanent.php" class="text-primary hover:underline">the effects can last months to years after the final session</a> — the brain has been structurally changed, not just temporarily medicated. For most patients, <a href="how-long-does-tms-take-to-work-for-depression.php" class="text-primary hover:underline">noticeable improvement begins within a few weeks</a> of consistent treatment.
                    </p>
                </section>

                <!-- Section: Why DLPFC -->
                <section id="target" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Why the Left DLPFC? The Science Behind the Target</h2>
                    <p class="mb-6">
                        The left dorsolateral prefrontal cortex is the brain's emotional regulator. It governs executive function, working memory, and — critically — the top-down suppression of the amygdala's fear and threat responses. In patients with <a href="depression.php" class="text-primary hover:underline">major depressive disorder</a>, neuroimaging studies consistently show reduced metabolic activity in the left DLPFC. The brain's "dimmer switch" for emotional distress is stuck in the low position.
                    </p>
                    <p class="mb-6">
                        High-frequency rTMS (10 Hz) applied to the left DLPFC is excitatory — it turns the dimmer up. Low-frequency TMS (1 Hz) applied to the right DLPFC is inhibitory — it quiets an overactive mirror region on the other side. Both approaches restore the balance that healthy mood regulation requires.
                    </p>
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <h3 class="font-bold text-lg text-gray-900 mb-2 flex items-center gap-2">
                                <span class="bg-gray-100 text-gray-600 w-8 h-8 rounded-full flex items-center justify-center text-sm">1</span>
                                Magnetic Field Generated
                            </h3>
                            <p class="text-gray-600 ml-10">
                                The figure-8 coil produces a 1.5T field that passes through skull tissue without impedance.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <h3 class="font-bold text-lg text-gray-900 mb-2 flex items-center gap-2">
                                <span class="bg-gray-100 text-gray-600 w-8 h-8 rounded-full flex items-center justify-center text-sm">2</span>
                                Electrical Current Induced in Cortex
                            </h3>
                            <p class="text-gray-600 ml-10">
                                The rapidly changing magnetic field generates a focal micro-current in DLPFC neurons 2–3 cm below the surface.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <h3 class="font-bold text-lg text-gray-900 mb-2 flex items-center gap-2">
                                <span class="bg-gray-100 text-gray-600 w-8 h-8 rounded-full flex items-center justify-center text-sm">3</span>
                                Action Potentials Fire
                            </h3>
                            <p class="text-gray-600 ml-10">
                                Neurons depolarize and fire — activating the underactive prefrontal circuit at the heart of depression.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <h3 class="font-bold text-lg text-gray-900 mb-2 flex items-center gap-2">
                                <span class="bg-gray-100 text-gray-600 w-8 h-8 rounded-full flex items-center justify-center text-sm">4</span>
                                Long-Term Potentiation Over Weeks
                            </h3>
                            <p class="text-gray-600 ml-10">
                                Repeated stimulation strengthens synaptic connections via LTP — the brain rewires its default mood state.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Section: PrTMS -->
                <section id="prtms" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">PrTMS: When Your Brain Gets Its Own Map</h2>
                    <p class="mb-6">
                        Standard TMS targets the same anatomical landmark in every patient. <a href="prtms.php" class="text-primary hover:underline">PrTMS — Personalized Repetitive TMS</a>, the protocol offered at Karma TMS — goes further. Before treatment begins, a quantitative EEG (qEEG) records your brain's electrical activity across 19 electrode sites simultaneously, generating a full map of your individual cortical activity patterns.
                    </p>
                    <p class="mb-6">
                        A patented algorithm then analyzes which frequencies are dysregulated in your specific brain, identifies the optimal stimulation site and pulse frequency for your neural profile, and recalibrates the treatment plan weekly as your brain responds.
                    </p>
                    <p>
                        For patients across <a href="areas-we-serve.php" class="text-primary hover:underline">Palm Springs, Rancho Mirage, Twentynine Palms, and the surrounding desert region</a>, Karma TMS is one of the few clinics in Southern California offering this level of neurological precision. Our <a href="team.php" class="text-primary hover:underline">board-certified psychiatry team</a> oversees every PrTMS protocol from initial qEEG mapping to final tapering session.
                    </p>
                </section>

                <!-- Section: What You Feel -->
                <section id="feels" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What You Actually Feel During a Session</h2>
                    <p class="mb-6">
                        Most patients describe the sensation as a rhythmic tapping or knocking against the scalp — like someone lightly rapping their knuckles at a fast, even tempo. Some notice a mild tingling or pulling sensation in the scalp muscles. A small number of patients experience mild headache in the first few sessions; this almost universally resolves within the first week.
                    </p>
                    <p class="mb-6">
                        What you will <em>not</em> feel: sedation, confusion, disorientation, or any meaningful cognitive impairment. You remain fully awake and alert. Many patients bring a podcast. Some take a brief nap. When the 20 minutes end, you get up, collect your things, and drive yourself wherever you need to go next.
                    </p>
                </section>

                <!-- Section: Timeline -->
                <section id="timeline" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What's Changing in Your Brain Session by Session</h2>
                    <p class="mb-6">
                        The transformation is not sudden — and understanding that helps patients stay the course during the early sessions when the benefits have not yet become obvious.
                    </p>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Sessions 1–5: Calibration and Cortical Sensitization</h3>
                    <p class="mb-6">
                        The brain is learning to respond to the stimulus. Cortical excitability is being recalibrated. At this stage, the changes are happening below the threshold of conscious awareness. No mood lift is expected yet, and its absence does not indicate the treatment is not working.
                    </p>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Sessions 6–15: Early Neuroplastic Changes</h3>
                    <p class="mb-6">
                        Synaptic connections in the DLPFC and its downstream networks begin to strengthen. Some patients start noticing subtle shifts — slightly better mornings, less emotional heaviness, marginally improved motivation. Sleep quality often improves at this stage before mood fully lifts.
                    </p>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Sessions 16–36: Full Therapeutic Response</h3>
                    <p>
                        The LTP-driven rewiring reaches a clinically meaningful threshold. Patients in this phase typically report the clearest improvement — reduced depressive symptoms, better cognitive clarity, renewed interest in activities, and a noticeably different emotional baseline.
                    </p>
                </section>

                <!-- FAQ Section -->
                <section class="mb-12" id="faq">
                    <h2 class="text-3xl font-bold text-primary mb-8">
                        Frequently Asked Questions
                    </h2>
                    <div class="space-y-4">
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Does TMS therapy hurt?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Most patients describe a rhythmic tapping or mild knocking on the scalp. It is not painful for the majority, though mild scalp discomfort can occur in early sessions and typically fades within the first week.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>What part of the brain does TMS target?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Standard TMS targets the left dorsolateral prefrontal cortex (DLPFC) — the region most consistently underactive in major depression. PrTMS uses qEEG brain mapping to personalize the exact stimulation site for each patient.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How many sessions before TMS starts working?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Most patients begin noticing mood improvements between sessions 10 and 20. The full therapeutic benefit typically emerges across the complete 20–36 session course.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can I drive after a TMS session?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes. TMS requires no sedation and has no effect on cognitive function or reaction time. Patients drive themselves to and from every single session.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Conclusion -->
                <section id="conclusion" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-6">Conclusion</h2>
                    <p class="mb-6">
                        TMS is not a black box and it is not magic. It is a precise, FDA-cleared neurological intervention that directly activates the brain circuit at the heart of depression. Over a full course of treatment, your brain physically rewires itself — and that change can outlast medication by months or years.
                    </p>
                    <p class="mb-6">
                        At <a href="about.php" class="text-primary hover:underline">Karma TMS</a>, our board-certified psychiatrists handle the full process — from <a href="insurance-pricing.php" class="text-primary hover:underline">insurance verification</a> to <a href="brain-mapping.php" class="text-primary hover:underline">brain mapping</a> to the final tapering session. If you are ready to find out whether TMS is right for you, we are here to help. Learn more about <a href="is-tms-therapy-safe.php" class="text-primary hover:underline">TMS safety</a> or read about the <a href="how-successful-is-tms-treatment.php" class="text-primary hover:underline">documented success rates</a>.
                    </p>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Ready to See What TMS Can Do for Your Brain?
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        Schedule a free consultation with our board-certified psychiatrists in Palm Springs, Rancho Mirage, or Twentynine Palms.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="contact-us.php" class="btn bg-white text-[#572670] hover:bg-gray-100 font-semibold px-8 py-3">
                            Free Consultation
                        </a>
                    </div>
                </div>

                <!-- Related Posts -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-8">Related Articles</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group h-full flex flex-col">
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500 shrink-0">
                                <img src="images/blog/why-tms-works-when-antidepressants-dont-banner.png" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="why-tms-works-when-antidepressants-dont.php" class="block text-black">Why TMS Works When Antidepressants Don't</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4 flex-grow">A psychiatrist explains why TMS succeeds where medication often fails.</p>
                                <a href="why-tms-works-when-antidepressants-dont.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline mt-auto">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group h-full flex flex-col">
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500 shrink-0">
                                <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1770807746/41_bfa16u.jpg" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="what-is-prtms.php" class="block text-black">What Is PrTMS?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4 flex-grow">Personalized brain mapping that goes beyond standard TMS.</p>
                                <a href="what-is-prtms.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline mt-auto">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group h-full flex flex-col">
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500 shrink-0">
                                <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1770639701/41_plj0z5.png" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="is-tms-therapy-safe.php" class="block text-black">Is TMS Therapy Safe?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4 flex-grow">FDA-cleared safety profile and what every patient should know.</p>
                                <a href="is-tms-therapy-safe.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline mt-auto">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
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
                            Dr. Keerthy Sunder is a board-certified psychiatrist specializing in TMS therapy and integrative psychiatry. He is dedicated to helping patients in Southern California find lasting relief from depression, anxiety, and treatment-resistant mental health conditions.
                        </p>
                    </div>
                </div>

            </article>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide) {
                lucide.createIcons();
            }
        });

        window.toggleBlogFAQ = function(button) {
            const currentItem = button.parentElement;
            const isAlreadyOpen = currentItem.getAttribute('data-state') === 'open';

            document.querySelectorAll('.accordion-item').forEach(item => {
                item.setAttribute('data-state', 'closed');
                const content = item.querySelector('.accordion-content');
                if (content) {
                    content.style.maxHeight = '0px';
                }
            });

            if (!isAlreadyOpen) {
                currentItem.setAttribute('data-state', 'open');
                const content = currentItem.querySelector('.accordion-content');
                if (content) {
                    content.style.maxHeight = content.scrollHeight + 'px';
                }
            }
        };

        function scrollToSection(id) {
            const element = document.getElementById(id);
            if (element) {
                const offset = 100;
                const elementPosition = element.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - offset;
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }

        function updateTOCHighlight() {
            const sectionIds = ['intro', 'setup', 'pulse', 'neurons', 'target', 'prtms', 'feels', 'timeline', 'faq', 'conclusion'];
            const navButtons = document.querySelectorAll('.toc-button');
            let current = '';

            sectionIds.forEach(id => {
                const el = document.getElementById(id);
                if (el) {
                    const rect = el.getBoundingClientRect();
                    if (rect.top <= 140) {
                        current = id;
                    }
                }
            });

            navButtons.forEach(button => {
                button.classList.remove('active');
                const onclickVal = button.getAttribute('onclick') || '';
                if (current && onclickVal.includes("'" + current + "'")) {
                    button.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateTOCHighlight);
        // Run once on load to set initial state
        setTimeout(updateTOCHighlight, 200);
    </script>
</body>

</html>


