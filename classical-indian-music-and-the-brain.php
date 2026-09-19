<?php
$pageTitle = "Classical Indian Music and the Brain: Neuroscience, Relaxation & Brain Health | Karma TMS";
$pageDescription = "Karma TMS and the Sunder Foundation explore what happens inside the brain when centuries-old Indian musical traditions meet modern neuroscience, EEG brain mapping, and alpha brainwaves.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classical Indian Music and the Brain: Neuroscience, Relaxation & Brain Health | Karma TMS Blog</title>
    <meta name="description"
        content="Karma TMS and the Sunder Foundation explore what happens inside the brain when centuries-old Indian musical traditions meet modern neuroscience and EEG brain mapping.">
    <meta name="keywords"
        content="classical Indian music brain, neuroscience of music, EEG brain mapping music, alpha brain waves music, relaxation and brain health, Karma TMS, Sunder Foundation, Dr Cameron Good, Dr Keerthy Sunder, Hindustani Carnatic music brain">
    <link rel="canonical" href="https://www.karmatms.com/classical-indian-music-and-the-brain.php">
    <meta property="og:title" content="Classical Indian Music and the Brain: Exploring the Neuroscience of Music, Relaxation and Brain Health">
    <meta property="og:description"
        content="Karma TMS and the Sunder Foundation explore what happens inside the human brain when centuries-old Indian musical traditions meet modern neuroscience and live EEG brain mapping.">
    <meta property="og:image" content="https://www.karmatms.com/images/blog/classical-indian-music-and-the-brain-hero.jpg">
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

        .accordion-icon {
            transition: transform 0.3s ease;
        }

        .accordion-item[data-state="open"] .accordion-icon {
            transform: rotate(180deg);
        }

        /* Proportional prose styles */
        .prose p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
            color: #374151;
            font-size: 1.05rem;
        }
        .prose ul {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
            list-style-type: disc;
        }
        .prose li {
            margin-bottom: 0.5rem;
            color: #374151;
            font-size: 1.025rem;
        }

        a {
            text-decoration: none;
        }

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

        /* Hero Gradient */
        .bg-hero-gradient {
            background: linear-gradient(135deg, #4A154B 0%, #572670 50%, #7B3FA0 100%);
        }

        .bg-white-10 {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .backdrop-blur-sm {
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
        }

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

        .border-l-4 {
            border-left-width: 4px;
        }
        .rounded-r-xl {
            border-top-right-radius: 0.75rem;
            border-bottom-right-radius: 0.75rem;
        }
        .bg-purple-50 { background-color: #faf5ff; }
        .border-purple-200 { border-color: #e9d5ff; }
        .border-purple-500 { border-color: #a855f7; }
        .text-purple-900 { color: #581c87; }
        .text-purple-700 { color: #7e22ce; }
        
        .bg-indigo-50 { background-color: #eef2ff; }
        .border-indigo-200 { border-color: #c7d2fe; }
        .border-indigo-500 { border-color: #6366f1; }
        .text-indigo-900 { color: #312e81; }

        .shadow-sm {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        .shadow-md {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .border { border-width: 1px !important; border-style: solid !important; }
        .border-2 { border-width: 2px !important; border-style: solid !important; }
        .border-primary { border-color: #572670 !important; }
        .bg-primary { background-color: #572670 !important; }
        .text-primary { color: #572670 !important; }
        .rounded-xl { border-radius: 0.75rem !important; }
        .rounded-full { border-radius: 9999px !important; }
        .border-gray-200 { border-color: #e5e7eb !important; }
        .text-gray-900 { color: #111827 !important; }
    </style>

    <!-- Schema.org JSON-LD: BlogPosting, FAQPage, BreadcrumbList & MedicalOrganization -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BlogPosting",
          "@id": "https://www.karmatms.com/classical-indian-music-and-the-brain.php#article",
          "isPartOf": {
            "@type": "WebPage",
            "@id": "https://www.karmatms.com/classical-indian-music-and-the-brain.php"
          },
          "headline": "Classical Indian Music and the Brain: Exploring the Neuroscience of Music, Relaxation and Brain Health",
          "description": "Karma TMS and the Sunder Foundation explore what happens inside the human brain when centuries-old Indian musical traditions meet modern neuroscience and EEG brain mapping.",
          "image": {
            "@type": "ImageObject",
            "url": "https://www.karmatms.com/images/blog/classical-indian-music-and-the-brain-hero.jpg",
            "width": 1200,
            "height": 675
          },
          "datePublished": "2026-09-19T08:00:00-07:00",
          "dateModified": "2026-09-19T08:00:00-07:00",
          "author": {
            "@type": "Person",
            "name": "Dr. Keerthy Sunder",
            "jobTitle": "Board-Certified Psychiatrist",
            "worksFor": {
              "@type": "MedicalOrganization",
              "name": "Karma TMS PC",
              "url": "https://www.karmatms.com/"
            }
          },
          "publisher": {
            "@type": "MedicalOrganization",
            "name": "Karma TMS PC",
            "url": "https://www.karmatms.com/",
            "logo": {
              "@type": "ImageObject",
              "url": "https://www.karmatms.com/assets/images/img-135947b0fa55.png"
            }
          },
          "sponsor": {
            "@type": "Organization",
            "name": "Sunder Foundation"
          },
          "about": [
            { "@type": "Thing", "name": "Neuroscience of Music" },
            { "@type": "Thing", "name": "Alpha Brain Waves" },
            { "@type": "Thing", "name": "Classical Indian Music" },
            { "@type": "MedicalDevice", "name": "EEG Brain Mapping" },
            { "@type": "MedicalTherapy", "name": "TMS Therapy" }
          ],
          "mainEntityOfPage": "https://www.karmatms.com/classical-indian-music-and-the-brain.php"
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.karmatms.com/classical-indian-music-and-the-brain.php#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What was observed during the live EEG brain mapping demonstration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "During the live Indian classical music performance, neuroscientist Dr. Cameron Good wore an EEG cap. The recording revealed a notable increase in alpha brain-wave activity (8–12 Hz), which is associated with relaxed wakefulness, reduced mental chatter, and calm focus."
              }
            },
            {
              "@type": "Question",
              "name": "Does music replace clinical mental health treatments like TMS therapy?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. While music and relaxation practices support brain health and lifestyle wellness, they do not replace evidence-based medical or psychiatric treatments for clinical depression, severe anxiety, or PTSD. Neuromodulation treatments like TMS therapy directly target specific underactive brain circuits in a clinical setting."
              }
            },
            {
              "@type": "Question",
              "name": "What is qEEG Brain Mapping at Karma TMS?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Quantitative EEG (qEEG) brain mapping is a diagnostic technique that measures electrical activity across different regions of the brain. It produces a visual 'map' showing brain wave distribution (alpha, beta, theta, delta), helping clinicians evaluate brain function and personalize treatments such as PrTMS®."
              }
            }
          ]
        },
        {
          "@type": "BreadcrumbList",
          "@id": "https://www.karmatms.com/classical-indian-music-and-the-brain.php#breadcrumb",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "https://www.karmatms.com/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "Blog",
              "item": "https://www.karmatms.com/blog.php"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Classical Indian Music and the Brain",
              "item": "https://www.karmatms.com/classical-indian-music-and-the-brain.php"
            }
          ]
        }
      ]
    }
    </script>
</head>

<body class="bg-white" style="font-family: 'Outfit', sans-serif;">
    <?php include 'includes/header.php'; ?>

    <!-- Breadcrumb -->
    <div class="bg-gray-50 border-b relative z-10" style="margin-top: 55px;">
        <div class="container mx-auto px-4 py-3">
            <nav class="flex items-center text-xs text-gray-500" aria-label="Breadcrumb">
                <a href="index.php" class="hover:text-purple-600 transition-colors">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <a href="blog.php" class="hover:text-purple-600 transition-colors">Blog</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <span class="text-gray-900 font-medium truncate">Classical Indian Music & the Brain</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="relative bg-hero-gradient text-white py-16 lg:py-20 overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="flex flex-wrap justify-center gap-3 mb-6 text-xs font-semibold uppercase tracking-wider">
                    <span class="bg-purple-800/80 text-purple-100 px-3 py-1 rounded-full border border-purple-400/30">Wellness & Neuroscience</span>
                    <span class="bg-purple-800/80 text-purple-100 px-3 py-1 rounded-full border border-purple-400/30">Brain Mapping</span>
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-6 leading-tight">
                    Classical Indian Music and the Brain: Exploring the Neuroscience of Music, Relaxation and Brain Health
                </h1>
                <p class="text-lg md:text-xl text-purple-100 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Karma TMS and the Sunder Foundation explore what happens inside the brain when centuries-old Indian musical traditions meet modern neuroscience.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-6 text-sm text-purple-200 border-t border-purple-400/30 pt-6">
                    <div class="flex items-center gap-2">
                        <i data-lucide="user" class="w-4 h-4 text-purple-300"></i>
                        <span>By Dr. Keerthy Sunder</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="calendar" class="w-4 h-4 text-purple-300"></i>
                        <span>September 19, 2026</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="clock" class="w-4 h-4 text-purple-300"></i>
                        <span>10 min read</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Area -->
    <section class="py-12 lg:py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">

                <!-- Sticky Table of Contents Sidebar -->
                <div class="lg:col-span-1">
                    <div class="sticky-toc bg-gray-50 p-6 rounded-2xl border border-gray-200 shadow-sm">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-4">Table of Contents</h3>
                        <div class="space-y-1">
                            <button onclick="scrollToSection('overview')" class="toc-button active">Overview & Cultural Event</button>
                            <button onclick="scrollToSection('music-brain')" class="toc-button">Music & the Human Brain</button>
                            <button onclick="scrollToSection('eeg-demonstration')" class="toc-button">Live EEG Demonstration</button>
                            <button onclick="scrollToSection('alpha-waves')" class="toc-button">What Are Alpha Brain Waves?</button>
                            <button onclick="scrollToSection('music-relaxation')" class="toc-button">Can Music Help Us Relax?</button>
                            <button onclick="scrollToSection('flow-state')" class="toc-button">Flow State to Brain Health</button>
                            <button onclick="scrollToSection('indian-music-science')" class="toc-button">Why Indian Classical Music?</button>
                            <button onclick="scrollToSection('emotion-memory')" class="toc-button">Emotion, Memory & Music</button>
                            <button onclick="scrollToSection('science-culture')" class="toc-button">Where Neuroscience Meets Culture</button>
                            <button onclick="scrollToSection('healthy-lifestyle')" class="toc-button">Music in a Healthy Lifestyle</button>
                            <button onclick="scrollToSection('future-brain-health')" class="toc-button">The Multidisciplinary Future</button>
                            <button onclick="scrollToSection('ancient-tradition')" class="toc-button">From Ancient Tradition</button>
                            <button onclick="scrollToSection('faq')" class="toc-button">Key Takeaways & FAQs</button>
                        </div>

                        <!-- Mini CTA in TOC -->
                        <div class="mt-8 pt-6 border-t border-gray-200 text-center">
                            <h4 class="text-sm font-bold text-gray-900 mb-2">Curious About Your Brain Waves?</h4>
                            <p class="text-xs text-gray-600 mb-4">Discover how qEEG brain mapping can evaluate your cognitive function and relaxation states.</p>
                            <a href="brain-mapping.php" class="inline-block w-full py-2.5 px-4 bg-primary text-white text-xs font-semibold rounded-lg hover:bg-purple-900 transition-colors">
                                Explore Brain Mapping
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Article Prose Content -->
                <div class="lg:col-span-3 prose max-w-none">

                    <!-- Featured Hero Image Display -->
                    <div class="mb-10 rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                        <img src="images/blog/classical-indian-music-and-the-brain-hero.jpg" 
                             alt="Classical Indian Music and Neuroscience Brain Mapping - Sitar Tabla EEG waves" 
                             class="w-full h-auto object-cover max-h-[480px]">
                        <div class="bg-gray-900 text-gray-300 text-xs px-4 py-2.5 flex items-center justify-between">
                            <span>Visualization: Classical Indian musical traditions intersecting with neuroscience and EEG brainwave activity.</span>
                            <span class="text-purple-400 font-semibold">Karma TMS & Sunder Foundation</span>
                        </div>
                    </div>

                    <!-- Section 1: Overview -->
                    <div id="overview" class="scroll-mt-32">
                        <p class="text-xl text-gray-700 font-medium leading-relaxed mb-6">
                            For thousands of years, classical Indian music has been practiced, preserved and passed from one generation to another. Its intricate melodies, rhythms and improvisational traditions have long been associated with concentration, emotional expression, meditation and a sense of connection.
                        </p>
                        <p>
                            But what actually happens inside the brain when we listen to this music?
                        </p>
                        <p>
                            That question was at the heart of a unique cultural and scientific event hosted by the <strong class="text-gray-900">Sunder Foundation</strong> alongside <strong class="text-gray-900">Karma TMS</strong>, bringing together Indian classical musicians, neuroscience and community in an evening designed to explore the relationship between music, the human brain and mental wellbeing.
                        </p>
                        <p>
                            The event brought together musical traditions from both Northern and Southern India, alongside a cross-cultural collaboration featuring renowned saxophonist <strong class="text-gray-900">George Brooks</strong>. While the evening celebrated India’s rich musical heritage, it also provided an opportunity to explore an increasingly interesting question in neuroscience: <em>Can music influence the way our brain functions — and could understanding that relationship help us better understand relaxation, focus and overall brain health?</em>
                        </p>
                    </div>

                    <!-- Callout Highlight Card -->
                    <div class="my-8 p-6 bg-purple-50 border border-purple-100 rounded-2xl shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="p-2 bg-purple-100 rounded-lg text-purple-700 mt-1">
                                <i data-lucide="music" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-purple-900 mb-1">Key Scientific Inquiry</h4>
                                <p class="text-gray-700 text-sm mb-0">
                                    "How does the brain respond to centuries-old musical traditions, and can real-time EEG brain mapping reveal the neurological signature of relaxation and flow states?"
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-10"></div>

                    <!-- Section 2: Music, Neuroscience and the Human Brain -->
                    <div id="music-brain" class="scroll-mt-32">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Music, Neuroscience and the Human Brain</h2>
                        <p>
                            Music is far more than sound waves hitting the eardrum.
                        </p>
                        <p>
                            When we listen to music, multiple areas of the brain can become involved simultaneously, including complex neural networks associated with auditory processing, emotion, memory, attention, executive function, and movement.
                        </p>
                        <p>
                            The emotional response to music can also be highly individual. A particular melody may trigger vivid memories, create a deep feeling of calm, encourage rhythmic movement, or simply help someone become fully absorbed in the present moment.
                        </p>
                        <p>
                            At the Karma TMS and Sunder Foundation event, this connection between music and the brain became the focus of a live scientific demonstration. As one participant described the purpose of the evening, the goal was to <em>“elevate our vibrations”</em> and potentially help people enter a state of flow, connection, and ease while temporarily disconnecting from the busyness of everyday life.
                        </p>
                        <p>
                            That experience was not simply discussed conceptually — it was observed in real time through quantitative brain mapping.
                        </p>
                    </div>

                    <div class="mb-10"></div>

                    <!-- Section 3: Live EEG Demonstration -->
                    <div id="eeg-demonstration" class="scroll-mt-32">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Measuring the Brain During a Live Indian Classical Music Performance</h2>
                        <p>
                            As musicians performed live, neuroscientist and sleep specialist <strong class="text-gray-900">Dr. Cameron Good</strong> participated in an EEG brain-mapping demonstration on stage.
                        </p>
                        <p>
                            Using a specialized electroencephalogram (EEG) cap equipped with precision sensors, Dr. Good listened attentively to the live classical performance while researchers observed real-time changes in spectral brain activity.
                        </p>

                        <!-- Event Video Embed Component -->
                        <div class="my-10 rounded-2xl overflow-hidden shadow-xl border border-purple-200 bg-gray-900">
                            <div class="relative w-full overflow-hidden" style="padding-top: 56.25%;">
                                <iframe 
                                    src="https://drive.google.com/file/d/1fA8fgO5fKvW2AUadGNS6PBwSo-rGPruT/preview" 
                                    class="absolute top-0 left-0 w-full h-full border-0" 
                                    allow="autoplay; encrypted-media; picture-in-picture" 
                                    allowfullscreen 
                                    title="Classical Indian Music & Brain Mapping Event Demonstration Video">
                                </iframe>
                            </div>
                            <div class="p-4 bg-gradient-to-r from-gray-900 via-purple-950 to-gray-900 text-white flex items-center gap-3 border-t border-purple-900/50">
                                <div class="w-10 h-10 rounded-full bg-purple-600/30 flex items-center justify-center text-purple-300 border border-purple-500/30 flex-shrink-0">
                                    <i data-lucide="video" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-white mb-0.5">Live Event Demonstration: Classical Indian Music & EEG Brain Mapping</h4>
                                    <p class="text-xs text-purple-200 mb-0">Watch the live EEG recording session hosted by Karma TMS and the Sunder Foundation.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Demonstration Highlight Box -->
                        <div class="my-8 p-6 bg-purple-50 border border-purple-100 rounded-2xl shadow-sm">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="bg-purple-700 text-white p-2 rounded-lg">
                                    <i data-lucide="activity" class="w-5 h-5"></i>
                                </span>
                                <h3 class="text-lg font-bold text-purple-900 m-0">Key Finding: Increase in Alpha Brain-Wave Activity</h3>
                            </div>
                            <p class="text-gray-700 text-base leading-relaxed mb-0">
                                According to the event's presentation, the live EEG recording showed a <strong>notable increase in alpha brain-wave activity</strong> during the classical Indian musical performance. This shift signaled a transition toward relaxed wakefulness and focused calmness.
                            </p>
                        </div>

                        <p>
                            Alpha activity is commonly associated with relaxed wakefulness and has been studied extensively in relation to attention, relaxation, meditation, and cognitive flexibility.
                        </p>
                        <p>
                            This observation provides an intriguing starting point for exploring the relationship between classical Indian music and brain activity. However, it is essential to maintain scientific rigor: one EEG demonstration should not be interpreted as proving that classical Indian music treats a medical condition or produces the exact same neurological response in every individual.
                        </p>
                        <p>
                            Instead, it raises a compelling scientific question: <em>What can we learn by studying how different forms of complex music affect brain wave frequencies and neural connectivity?</em>
                        </p>
                    </div>

                    <div class="mb-10"></div>

                    <!-- Section 4: What Are Alpha Brain Waves? -->
                    <div id="alpha-waves" class="scroll-mt-32">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">What Are Alpha Brain Waves?</h2>
                        <p>
                            Alpha waves are a type of electrical brain activity that typically fall within the <strong>8–12 Hz frequency range</strong>. They represent a rhythmic oscillation produced by synchronous electrical activity in brain cells.
                        </p>
                        <p>
                            Alpha waves are most commonly observed when a person is awake but deeply relaxed — particularly when the eyes are closed and the individual is not actively processing demanding external or high-stress information.
                        </p>

                        <!-- Infographic / Feature Card Grid for Alpha Waves -->
                        <div class="my-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="p-5 border border-purple-200 bg-purple-50/50 rounded-xl">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 rounded-full bg-purple-200 text-purple-800 flex items-center justify-center font-bold text-xs">8-12</div>
                                    <h4 class="font-bold text-gray-900 m-0">Frequency Range</h4>
                                </div>
                                <p class="text-sm text-gray-600 mb-0">Oscillating between 8 and 12 cycles per second, bridging conscious thought (Beta) and deep sleep/meditation (Theta/Delta).</p>
                            </div>

                            <div class="p-5 border border-purple-200 bg-purple-50/50 rounded-xl">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 rounded-full bg-purple-200 text-purple-800 flex items-center justify-center font-bold text-xs"><i data-lucide="feather" class="w-4 h-4"></i></div>
                                    <h4 class="font-bold text-gray-900 m-0">Relaxed Wakefulness</h4>
                                </div>
                                <p class="text-sm text-gray-600 mb-0">Indicates a calm, lucid state of mind where stress hormones decrease and cognitive clarity is restored.</p>
                            </div>

                            <div class="p-5 border border-purple-200 bg-purple-50/50 rounded-xl">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 rounded-full bg-purple-200 text-purple-800 flex items-center justify-center font-bold text-xs"><i data-lucide="target" class="w-4 h-4"></i></div>
                                    <h4 class="font-bold text-gray-900 m-0">Attention & Gating</h4>
                                </div>
                                <p class="text-sm text-gray-600 mb-0">Helps filter out irrelevant sensory distractions, allowing sustained focus without tension.</p>
                            </div>

                            <div class="p-5 border border-purple-200 bg-purple-50/50 rounded-xl">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 rounded-full bg-purple-200 text-purple-800 flex items-center justify-center font-bold text-xs"><i data-lucide="smile" class="w-4 h-4"></i></div>
                                    <h4 class="font-bold text-gray-900 m-0">Stress Reduction</h4>
                                </div>
                                <p class="text-sm text-gray-600 mb-0">Increased alpha power is strongly linked to reduced anxiety, improved mood regulation, and enhanced restorative rest.</p>
                            </div>
                        </div>

                        <p>
                            Researchers across neuroscience and clinical psychiatry study alpha activity in connection with relaxation, attention filtering, sensory processing, meditation, stress reduction, cognitive states, and sleep-wake transitions.
                        </p>
                        <p>
                            The increase in alpha activity observed during the Karma TMS event provides an intriguing neurological perspective on what attendees were experiencing subjectively. People weren't simply describing the live performance as calming — the event provided an opportunity to observe actual measurable changes in brain activity as the music unfolded.
                        </p>
                    </div>

                    <div class="mb-10"></div>

                    <!-- Section 5: Can Music Help Us Relax? -->
                    <div id="music-relaxation" class="scroll-mt-32">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Can Music Help Us Relax?</h2>
                        <p>
                            The relationship between music and relaxation has been studied extensively, although human responses vary depending on individual background, musical characteristics, and environmental context.
                        </p>
                        <p>
                            Factors such as tempo, rhythm, harmonic structure, familiarity, personal memories, and cultural associations all play a role in how an individual's nervous system responds to auditory stimuli.
                        </p>
                        <p>
                            Classical Indian music offers an especially interesting domain for neuroscience study because many of its foundational traditions involve sustained attention to melody (<em>Raga</em>), microtonal variations (<em>Swaras</em>), intricate rhythm (<em>Tala</em>), continuous drone (<em>Tanpura</em>), and spontaneous improvisation.
                        </p>
                        <p>
                            For listeners familiar with the tradition, these elements can create a deeply immersive experience. For listeners new to the genre, the unfamiliarity itself can spark novelty and mindful engagement, drawing attention away from repetitive everyday thoughts.
                        </p>
                    </div>

                    <div class="mb-10"></div>

                    <!-- Section 6: From Flow State to Brain Health -->
                    <div id="flow-state" class="scroll-mt-32">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">From Flow State to Brain Health</h2>
                        <p>
                            One of the core psychological concepts highlighted during the event was the concept of a <strong>flow state</strong> — a state of optimal immersion and deep engagement where a person's attention becomes highly focused, self-consciousness quietens, and awareness of temporal distractions decreases.
                        </p>
                        <p>
                            Attentive music listening can serve as a powerful catalyst for entering flow. The combination of live acoustic performance, communal presence, and active listening creates an environment where individuals can step away from the relentless stimulation of modern digital life.
                        </p>
                        
                        <!-- Dr. Cameron Good Quote Box -->
                        <div class="my-8 p-6 md:p-8 bg-purple-50 border border-purple-100 rounded-2xl shadow-sm">
                            <div class="flex items-start gap-4">
                                <i data-lucide="quote" class="w-8 h-8 text-purple-600 flex-shrink-0"></i>
                                <div>
                                    <p class="text-purple-950 italic text-lg leading-relaxed mb-3">
                                        "Experiences like this help us think about mental health and quality of life not only in terms of treating illness, but also in terms of actively maintaining a healthy brain and a healthy lifestyle."
                                    </p>
                                    <span class="text-xs uppercase tracking-wider font-semibold text-purple-700">— Dr. Cameron Good, Neuroscientist & Sleep Specialist</span>
                                </div>
                            </div>
                        </div>

                        <p>
                            That distinction is profound. <strong>Brain health is not simply the absence of mental illness.</strong>
                        </p>
                        <p>
                            Brain health encompasses restorative sleep, cognitive flexibility, emotional regulation, social connectedness, stress management, neuroplasticity, and engaging in activities that bring deep meaning and presence to life.
                        </p>
                    </div>

                    <div class="mb-10"></div>

                    <!-- Section 7: Why Indian Classical Music Is Interesting to Neuroscience -->
                    <div id="indian-music-science" class="scroll-mt-32">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Why Indian Classical Music Is Interesting to Neuroscience</h2>
                        <p>
                            Indian classical music provides a rich subject for cognitive neuroscientists because of its complex mathematical structures and thousands of years of systemic refinement.
                        </p>

                        <!-- Hindustani vs Carnatic Comparison Box -->
                        <div class="my-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="p-6 bg-gray-50 rounded-xl border border-gray-200">
                                <h4 class="text-lg font-bold text-purple-900 mb-2">Hindustani Tradition</h4>
                                <p class="text-sm text-gray-600 mb-0">
                                    Originating in Northern India, Hindustani classical music emphasizes gradual modal development (<em>Alap</em>), emotional mood evocative of specific times of day or seasons, and elaborate rhythmic dialogues.
                                </p>
                            </div>
                            <div class="p-6 bg-gray-50 rounded-xl border border-gray-200">
                                <h4 class="text-lg font-bold text-purple-900 mb-2">Carnatic Tradition</h4>
                                <p class="text-sm text-gray-600 mb-0">
                                    Originating in Southern India, Carnatic music features rich composition structures (<em>Kritis</em>), intricate rhythmic cycles (<em>Tala</em> patterns), and dynamic microtonal ornamentations.
                                </p>
                            </div>
                        </div>

                        <p>
                            By bringing Hindustani and Carnatic masters together with Western jazz saxophonist George Brooks, the event demonstrated how different musical systems interact. Rather than treating art and neuroscience as separate domains, the evening illustrated how artistic expression and scientific inquiry can illuminate each other.
                        </p>
                    </div>

                    <div class="mb-10"></div>

                    <!-- Section 8: The Connection Between Music, Emotion and Memory -->
                    <div id="emotion-memory" class="scroll-mt-32">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">The Connection Between Music, Emotion and Memory</h2>
                        <p>
                            Music has a unique ability to evoke powerful emotional and memory responses almost instantaneously. A single melody can transport someone to a specific moment from decades past; a specific instrument can evoke deep cultural heritage; a subtle shift in key or rhythm can alter heart rate and attentional focus.
                        </p>
                        <p>
                            These responses occur because music activates neural circuits far beyond the primary auditory cortex — engaging the limbic system (emotion), hippocampus (memory), motor cortex (movement), and prefrontal cortex (executive processing).
                        </p>
                        <p>
                            This multi-system engagement explains why music has been central to human culture, healing rituals, and community bonding across millennia. The Karma TMS and Sunder Foundation event provided a modern lens through which to observe this timeless human experience.
                        </p>
                    </div>

                    <div class="mb-10"></div>

                    <!-- Section 9: Where Neuroscience Meets Culture -->
                    <div id="science-culture" class="scroll-mt-32">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Where Neuroscience Meets Culture</h2>
                        <p>
                            Perhaps the most vital insight from the event was that science and culture do not need to exist in separate silos.
                        </p>
                        <ul>
                            <li><strong>Neuroscience</strong> gives us objective tools (like EEG and qEEG brain mapping) to investigate brain activity.</li>
                            <li><strong>Music</strong> offers a rich, expressive human experience through which those questions can be explored.</li>
                            <li><strong>Community</strong> creates the warm environment in which these shared experiences become meaningful.</li>
                        </ul>
                        <p>
                            Together, they form a holistic model for considering mental wellbeing — one that honors both ancient human wisdom and modern empirical science.
                        </p>
                    </div>

                    <div class="mb-10"></div>

                    <!-- Section 10: Could Music Become Part of a Healthy Lifestyle? -->
                    <div id="healthy-lifestyle" class="scroll-mt-32">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Could Music Become Part of a Healthy Lifestyle?</h2>
                        <p>
                            In daily life, people already turn to music for diverse needs:
                        </p>
                        <ul class="my-6 space-y-2">
                            <li><strong>Relaxation after work</strong>: Transitioning from high-stress work environments to calm states.</li>
                            <li><strong>Exercise & energy</strong>: Enhancing physical activity, endurance, and mood.</li>
                            <li><strong>Focus & study</strong>: Facilitating concentration and sustained cognitive attention.</li>
                            <li><strong>Meditation & sleep</strong>: Promoting relaxation and restorative sleep hygiene.</li>
                            <li><strong>Social connection</strong>: Building community bonds through shared musical experiences.</li>
                            <li><strong>Emotional processing</strong>: Providing a creative outlet for self-expression and emotional regulation.</li>
                            <li><strong>Cultural connection</strong>: Honoring heritage, memory, and traditional artistic identity.</li>
                            <li><strong>Stress relief</strong>: Reducing anxiety and lowering physiological stress markers.</li>
                        </ul>
                        <p>
                            Understanding how different musical structures influence brainwave activity could help clinicians and wellness practitioners tailor music-based practices to support mental clarity, stress reduction, and sleep hygiene.
                        </p>
                        <p>
                            This does not mean listening to music replaces medical or psychiatric treatment for clinical disorders. Rather, it highlights that brain health is influenced by a combination of biological, psychological, social, and lifestyle factors.
                        </p>
                    </div>

                    <div class="mb-10"></div>

                    <!-- Section 11: The Future of Brain Health May Be Multidisciplinary -->
                    <div id="future-brain-health" class="scroll-mt-32">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">The Future of Brain Health May Be Multidisciplinary</h2>
                        <p>
                            The work being explored by organizations such as <strong class="text-gray-900">Karma TMS</strong> and the <strong class="text-gray-900">Sunder Foundation</strong> reflects a growing movement toward integrated, multidisciplinary brain health.
                        </p>
                        <p>
                            At Karma TMS, clinical care centers on advanced neuromodulation therapies — including <a href="tms-therapy.php">FDA-cleared TMS therapy</a> and <a href="prtms.php">Personalized PRTMS®</a> — to treat conditions like depression, anxiety, OCD, and PTSD. Events like this cultural collaboration highlight how clinical neuroscience can also intersect with lifestyle habits, art, and community.
                        </p>
                        <p>
                            The question isn't simply whether music can “heal” the brain. The more compelling question is: <em>How does the brain respond to music, and what can those responses teach us about human wellbeing?</em>
                        </p>
                    </div>

                    <!-- Section 12: From Ancient Tradition to Modern Neuroscience -->
                    <div id="ancient-tradition" class="scroll-mt-32">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">From Ancient Tradition to Modern Neuroscience</h2>
                        
                        <div class="space-y-4 text-gray-700 leading-relaxed text-base md:text-lg mb-8">
                            <p class="text-xl text-gray-800 font-medium leading-relaxed">
                                Classical Indian music has survived for thousands of years because generations of listeners have found profound beauty, spiritual grounding, and emotional connection within its soundscapes.
                            </p>
                            <p>
                                Modern neuroscience gives us another way to appreciate that experience. By placing EEG technology alongside a live Indian classical music performance, Karma TMS and the Sunder Foundation created an opportunity to connect an ancient cultural tradition with contemporary scientific inquiry.
                            </p>
                            <p>
                                The increase in alpha activity observed during the event offers an intriguing glimpse into that relationship — while also reminding us that much remains to be explored.
                            </p>
                            <p>
                                Perhaps the most valuable outcome wasn't a definitive answer. It was a new question.
                            </p>
                        </div>

                        <!-- Highlight Question Card -->
                        <div class="my-8 p-6 md:p-8 bg-purple-50 border border-purple-100 rounded-2xl shadow-sm text-center">
                            <h3 class="text-xl md:text-2xl font-bold text-purple-900 mb-4 leading-snug">
                                What else can we discover about the human brain when science, music and culture come together?
                            </h3>
                            <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-0 max-w-3xl mx-auto">
                                For Karma TMS and the Sunder Foundation, that question represents an opportunity to continue exploring the connection between <strong>neuroscience, mental wellbeing, brain health and quality of life</strong>.
                            </p>
                        </div>

                        <!-- Final Closing Statement Banner -->
                        <div class="p-6 bg-gradient-to-r from-purple-900 via-indigo-900 to-purple-900 text-white rounded-2xl shadow-md text-center">
                            <p class="text-lg md:text-xl font-bold text-purple-100 italic mb-0 flex items-center justify-center gap-3">
                                <i data-lucide="headphones" class="w-6 h-6 text-purple-300 flex-shrink-0"></i>
                                <span>And sometimes, understanding the brain may begin simply by listening.</span>
                            </p>
                        </div>
                    </div>

                    <!-- FAQ & Key Takeaways Section -->
                    <div id="faq" class="scroll-mt-32 mt-12">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Frequently Asked Questions & Key Takeaways</h2>
                        
                        <div class="space-y-4">
                            <div class="accordion-item" data-state="closed">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span>What was observed during the live EEG brain mapping demonstration?</span>
                                    <i data-lucide="chevron-down" class="w-5 h-5 accordion-icon"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-inner">
                                        During the live Indian classical music performance, neuroscientist Dr. Cameron Good wore an EEG cap. The recording revealed a notable increase in <strong>alpha brain-wave activity (8–12 Hz)</strong>, which is associated with relaxed wakefulness, reduced mental chatter, and calm focus.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item" data-state="closed">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span>Does music replace clinical mental health treatments like TMS therapy?</span>
                                    <i data-lucide="chevron-down" class="w-5 h-5 accordion-icon"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-inner">
                                        No. While music and relaxation practices support brain health and lifestyle wellness, they do not replace evidence-based medical or psychiatric treatments for clinical depression, severe anxiety, or PTSD. Neuromodulation treatments like TMS therapy directly target specific underactive brain circuits in a clinical setting.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item" data-state="closed">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span>What is qEEG Brain Mapping at Karma TMS?</span>
                                    <i data-lucide="chevron-down" class="w-5 h-5 accordion-icon"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-inner">
                                        Quantitative EEG (qEEG) brain mapping is a diagnostic technique that measures electrical activity across different regions of the brain. It produces a visual "map" showing brain wave distribution (alpha, beta, theta, delta), helping clinicians evaluate brain function and personalize treatments such as PrTMS®.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Author Box -->
                    <div class="bg-purple-50 border border-purple-100 rounded-2xl p-6 md:p-8 mt-12 flex flex-col md:flex-row gap-6 md:gap-8 items-start shadow-sm w-full">
                        <div class="flex-shrink-0">
                            <div class="p-1 rounded-full border-2" style="border-color: rgba(87, 38, 112, 0.3);">
                                <img src="https://www.prtms.com/wp-content/uploads/2023/03/Dr.-Keerthy-Sunder-scaled.jpg"
                                    alt="Dr. Keerthy Sunder"
                                    class="rounded-full object-cover" style="width:140px;height:140px;border-radius:50%">
                            </div>
                        </div>
                        <div class="flex-1 min-w-0 text-left">
                            <h4 class="text-xl md:text-2xl font-bold mb-1" style="color: #572670;">About the Author</h4>
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2"><a href="about.php" class="text-gray-900 hover:text-primary transition-colors underline">Dr. Keerthy Sunder</a></h3>
                            <p class="text-gray-500 font-medium mb-3 text-base">Board-Certified Psychiatrist | KarmaTMS</p>
                            <p class="text-gray-600 leading-relaxed text-base">
                                Dr. Keerthy Sunder is a board-certified psychiatrist specializing in TMS therapy and integrative psychiatry. He is passionate about bringing advanced, evidence-based treatments to the Palm Springs community to help patients achieve lasting mental wellness.
                            </p>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div class="mt-12 p-8 md:p-10 bg-purple-50 border border-purple-100 rounded-2xl text-center shadow-sm">
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">Explore Advanced Brain Health & Neuromodulation</h3>
                        <p class="text-gray-600 max-w-2xl mx-auto text-base md:text-lg leading-relaxed mb-8">
                            Interested in learning more about your brain function or searching for non-invasive treatment options for depression and anxiety? Schedule a consultation with the specialists at Karma TMS.
                        </p>
                        <div class="flex flex-wrap items-center justify-center gap-6">
                            <a href="contact-us.php" class="text-purple-700 hover:text-purple-900 font-bold text-base md:text-lg underline transition-colors">
                                Schedule Consultation
                            </a>
                            <a href="brain-mapping.php" class="px-6 py-3 bg-white text-purple-700 hover:text-purple-900 font-semibold text-base md:text-lg rounded-xl border border-purple-400 hover:border-purple-600 shadow-sm transition-all">
                                Learn About Brain Mapping
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        function toggleAccordion(button) {
            const item = button.parentElement;
            const isOpen = item.getAttribute('data-state') === 'open';
            
            document.querySelectorAll('.accordion-item').forEach(i => {
                i.setAttribute('data-state', 'closed');
                const content = i.querySelector('.accordion-content');
                if (content) content.style.maxHeight = '0px';
            });

            if (!isOpen) {
                item.setAttribute('data-state', 'open');
                const content = item.querySelector('.accordion-content');
                if (content) content.style.maxHeight = content.scrollHeight + 'px';
            }
        }

        function scrollToSection(id) {
            const element = document.getElementById(id);
            if (element) {
                const offset = 120;
                const elementPosition = element.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - offset;
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }

        function updateTOCHighlight() {
            const sectionIds = ['overview', 'music-brain', 'eeg-demonstration', 'alpha-waves', 'music-relaxation', 'flow-state', 'indian-music-science', 'emotion-memory', 'science-culture', 'healthy-lifestyle', 'future-brain-health', 'ancient-tradition', 'faq'];
            const navButtons = document.querySelectorAll('.toc-button');
            let current = '';

            sectionIds.forEach(id => {
                const el = document.getElementById(id);
                if (el) {
                    const rect = el.getBoundingClientRect();
                    if (rect.top <= 160) {
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
        setTimeout(updateTOCHighlight, 200);
    </script>
</body>

</html>
