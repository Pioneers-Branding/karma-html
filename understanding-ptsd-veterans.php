<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Understanding PTSD in Veterans | Karma TMS Blog</title>
    <meta name="description"
        content="Explore the complexities of PTSD in veterans, its impact on the brain, and how TMS therapy offers a new path to healing.">
    <meta name="keywords"
        content="PTSD veterans, TMS for PTSD, combat trauma, veteran mental health palm springs, Dr. Keerthy Sunder">
    <link rel="canonical" href="understanding-ptsd-veterans.php">
    <meta property="og:title" content="Understanding PTSD in Veterans | Karma TMS Blog">
    <meta property="og:description"
        content="Explore the complexities of PTSD in veterans, its impact on the brain, and how TMS therapy offers a new path to healing.">
    <meta property="og:image"
        content="https://images.unsplash.com/photo-1596701549646-189fec54930f?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3">
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

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "Understanding PTSD in Veterans",
      "description": "Explore the complexities of PTSD in veterans, its impact on the brain, and how TMS therapy offers a new path to healing.",
      "image": "https://images.unsplash.com/photo-1596701549646-189fec54930f?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3",
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
      "datePublished": "2026-01-16",
      "dateModified": "2026-01-16",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blog/understanding-ptsd-veterans"
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
                <span class="text-gray-900 font-medium">Understanding PTSD in Veterans</span>
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
                        October 20, 2025
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
                    Understanding PTSD in Veterans: Signs, Symptoms, and Treatment Paths
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    A comprehensive guide to recognizing and treating PTSD in war veterans, including breakthrough TMS therapy
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
                                <button class="toc-button" onclick="scrollToSection('what-is-ptsd')">What is PTSD?</button>
                                <button class="toc-button" onclick="scrollToSection('symptoms')">Common Symptoms</button>
                                <button class="toc-button" onclick="scrollToSection('brain-function')">PTSD & The Brain</button>
                                <button class="toc-button" onclick="scrollToSection('tms-solution')">How TMS Helps</button>
                                <button class="toc-button" onclick="scrollToSection('benefits')">Benefits for Vets</button>
                                <button class="toc-button" onclick="scrollToSection('process')">Treatment Process</button>
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
                    <img src="images/blog/understanding-ptsd-veterans-intro.png" 
                        alt="Understanding PTSD in Veterans: Signs, Symptoms, and Treatment Paths"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        <strong>For many veterans, the battle doesn't end when they return home.</strong> The transition to civilian life is often accompanied by an invisible struggle—Post-Traumatic Stress Disorder (PTSD). It is a silent epidemic that affects relationships, employment, and overall quality of life. Understanding PTSD is not just about recognizing symptoms; it's about acknowledging the deep biological and psychological impact of trauma and finding a path forward.
                    </p>
                    <p class="mt-4 text-gray-700">
                        Patients often experience co-occurring conditions like <a href="depression.php" class="text-primary hover:underline">severe depression</a> or <a href="anxiety.php" class="text-primary hover:underline">anxiety</a>, making diagnosis and treatment complex.
                    <p class="mt-4 text-gray-700">
                        At <a href="palm-springs.php" class="text-primary hover:underline">Karma TMS</a>, we specialize in treating veterans. Led by Dr. Keerthy Sunder, our approach combines compassion with cutting-edge science to help veterans find relief when traditional therapies fall short.
                    </p>
                </div>

                <!-- Section: What is PTSD? -->
                <section id="what-is-ptsd" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What is PTSD?</h2>
                    <p class="mb-6">
                        Post-Traumatic Stress Disorder (PTSD) is a mental health condition triggered by experiencing or witnessing a terrifying event. For veterans, this often stems from combat exposure, life-threatening situations, or military sexual trauma (MST).
                    </p>
                    <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-xl mb-6">
                        <p class="text-blue-800 italic">
                            "PTSD is not a sign of weakness. It is a normal reaction to abnormal events."
                        </p>
                    </div>
                    <p class="mb-6">
                        Unlike normal stress, PTSD symptoms persist long after the danger has passed. The body's "fight or flight" system remains stuck in the "on" position, making it difficult to feel safe or relaxed.
                    </p>
                </section>

                <!-- Section: Common Symptoms -->
                <section id="symptoms" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Common Symptoms in Veterans</h2>
                    <p class="mb-6">
                        Symptoms can vary widely but generally fall into four categories:
                    </p>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <i data-lucide="refresh-cw" class="w-5 h-5 text-primary"></i> Re-experiencing
                            </h3>
                            <ul class="list-disc pl-5 space-y-2 text-sm text-gray-600">
                                <li>Flashbacks (feeling like the trauma is happening again)</li>
                                <li>Bad dreams or nightmares</li>
                                <li>Intrusive, unwanted thoughts</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <i data-lucide="shield-off" class="w-5 h-5 text-primary"></i> Avoidance
                            </h3>
                            <ul class="list-disc pl-5 space-y-2 text-sm text-gray-600">
                                <li>Staying away from places or events that remainders of trauma</li>
                                <li>Avoiding thoughts or feelings related to the event</li>
                                <li>Emotional numbness</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <i data-lucide="alert-triangle" class="w-5 h-5 text-primary"></i> Hyperarousal
                            </h3>
                            <ul class="list-disc pl-5 space-y-2 text-sm text-gray-600">
                                <li>Being easily startled or feeling "on edge" (hypervigilance)</li>
                                <li>Difficulty sleeping</li>
                                <li>Angry outbursts or irritability</li>
                            </ul>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <i data-lucide="frown" class="w-5 h-5 text-primary"></i> Mood Changes
                            </h3>
                            <ul class="list-disc pl-5 space-y-2 text-sm text-gray-600">
                                <li>Negative thoughts about oneself or the world</li>
                                <li>Distorted feelings of guilt or blame</li>
                                <li>Loss of interest in enjoyable activities</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Section: Myth vs Reality -->
                <section id="myths" class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-6">Myth vs. Reality: Understanding the Truth</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-red-50 p-6 rounded-xl border border-red-100">
                            <h4 class="font-bold text-red-900 mb-2">MYTH: PTSD Only Affects Combat Veterans</h4>
                            <p class="text-sm text-gray-700"><strong>Reality:</strong> While common in combat, PTSD can also result from training accidents, military sexual trauma (MST), or non-combat life-threatening events. Anyone can experience it.</p>
                        </div>
                        <div class="bg-red-50 p-6 rounded-xl border border-red-100">
                            <h4 class="font-bold text-red-900 mb-2">MYTH: You Can Just "Get Over It"</h4>
                            <p class="text-sm text-gray-700"><strong>Reality:</strong> PTSD causes physical changes in the brain affecting memory and emotion regulation. It is a medical condition that requires treatment, not just "willpower".</p>
                        </div>
                    </div>
                </section>

                <!-- Section: PTSD & The Brain -->
                <section id="brain-function" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">The Impact of Trauma on the Brain</h2>
                    <p class="mb-6">
                        PTSD is not "all in your head"—it is a physical change in brain function. Trauma affects three key areas:
                    </p>
                    <ul class="space-y-4 mb-6">
                        <li class="flex items-start gap-4">
                            <span class="w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center font-bold flex-shrink-0">1</span>
                            <div>
                                <strong class="text-gray-900">The Amygdala (The Alarm System):</strong> In PTSD, the amygdala is overactive, constantly signaling danger even when you are safe.
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center font-bold flex-shrink-0">2</span>
                            <div>
                                <strong class="text-gray-900">The Hippocampus (The Memory Center):</strong> Trauma can shrink this area, making it hard to distinguish between past memories and present reality.
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="w-8 h-8 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center font-bold flex-shrink-0">3</span>
                            <div>
                                <strong class="text-gray-900">The Prefrontal Cortex (The Command Center):</strong> This area regulates emotions. In PTSD, it becomes underactive, making it hard to control fear and anxiety.
                            </div>
                        </li>
                    </ul>
                </section>

                <!-- Section: How TMS Helps -->
                <section id="tms-solution" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">How TMS Therapy Works for PTSD</h2>
                    <p class="mb-6">
                        <a href="tms-therapy.php" class="text-primary hover:underline">Transcranial Magnetic Stimulation (TMS)</a> is a revolutionary treatment that targets these exact brain regions. By using focused magnetic pulses, TMS works to:
                    </p>
                    <div class="bg-green-50 border border-green-100 rounded-xl p-8 mb-8">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-green-100 p-1 rounded-full text-green-600">
                                    <i data-lucide="check" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <strong class="text-gray-900">Calm the Amygdala:</strong> Reducing the constant state of "fight or flight."
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-green-100 p-1 rounded-full text-green-600">
                                    <i data-lucide="check" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <strong class="text-gray-900">Strengthen the Prefrontal Cortex:</strong> Improving emotional regulation and control.
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-green-100 p-1 rounded-full text-green-600">
                                    <i data-lucide="check" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <strong class="text-gray-900">Restore Neural Pathways:</strong> Using neuroplasticity to heal damaged connections.
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

                 <!-- Section: Benefits -->
                <section id="benefits" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Why Veterans Choose Karma TMS</h2>
                    <p class="mb-6">
                        For veterans who have tried therapy and medications without success (<a href="tms-therapy-for-treatment-resistant-depression.php" class="text-primary hover:underline">Treatment-Resistant Depression</a> or PTSD), TMS offers a new path.
                    </p>
                    <div class="grid md:grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                            <h4 class="font-bold text-gray-900 mb-2">Non-Drug Treatment</h4>
                            <p class="text-sm text-gray-600">No systemic side effects like weight gain, drowsiness, or sexual dysfunction.</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                            <h4 class="font-bold text-gray-900 mb-2">Non-Invasive</h4>
                            <p class="text-sm text-gray-600">No surgery, no anesthesia, and no recovery time needed.</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                            <h4 class="font-bold text-gray-900 mb-2">Covered by TRICARE</h4>
                            <p class="text-sm text-gray-600">We work with TRICARE and TriWest to ensure veterans get the care they earned.</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                            <h4 class="font-bold text-gray-900 mb-2">Veteran-Led Care</h4>
                            <p class="text-sm text-gray-600">Dr. Sunder has extensive experience treating the unique needs of the veteran community.</p>
                        </div>
                    </div>
                </section>

                <!-- Section: How to Support -->
                <section id="support" class="mb-12">
                     <h2 class="text-3xl font-bold text-primary mb-6">How to Support a Veteran with PTSD</h2>
                     <div class="bg-amber-50 border border-amber-200 rounded-xl p-8">
                        <p class="mb-4 text-amber-900">If someone you love is struggling, your support can be a lifeline. Here is how you can help:</p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-amber-100 p-1 rounded-full text-amber-800"><i data-lucide="ear" class="w-4 h-4"></i></div>
                                <span class="text-gray-800"><strong>Listen without judgment:</strong> Let them talk when they are ready, but don't force it.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-amber-100 p-1 rounded-full text-amber-800"><i data-lucide="book-open" class="w-4 h-4"></i></div>
                                <span class="text-gray-800"><strong>Educate yourself:</strong> Learn their triggers (crowds, loud noises) so you can help avoid or manage them.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-amber-100 p-1 rounded-full text-amber-800"><i data-lucide="heart-handshake" class="w-4 h-4"></i></div>
                                <span class="text-gray-800"><strong>Encourage Professional Help:</strong> Gently suggest exploring treatments like <a href="tms-therapy.php" class="text-amber-900 underline font-bold">TMS Therapy</a> if medications aren't working.</span>
                            </li>
                        </ul>
                     </div>
                </section>

                <!-- Section: Treatment Process -->
                <section id="process" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">The Karma TMS Treatment Process</h2>
                    <ol class="list-decimal pl-6 space-y-4 mb-6">
                        <li><strong>Consultation:</strong> A comprehensive assessment of your service history and medical needs.</li>
                        <li><strong>Mapping:</strong> Identifying the precise location for stimulation on your head.</li>
                        <li><strong>Treatment:</strong> Relaxing 19-minute sessions where you can read or watch TV.</li>
                        <li><strong>Recovery:</strong> Most patients feel improvement within 4-6 weeks of treatment.</li>
                    </ol>
                </section>

                <!-- Final Thoughts -->
                <section id="final-thoughts" class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">You Don't Have to Fight Alone</h2>
                    <p class="mb-4">
                        PTSD is a heavy burden, but it is one you do not have to carry forever. TMS therapy represents hope—a chance to quiet the noise and find peace again.
                    </p>
                    <p class="text-gray-700 italic">
                        If you or a loved one is a veteran struggling with PTSD, contact <a href="contact-us.php" class="text-primary hover:underline font-bold">Karma TMS</a> in Palm Springs today. We are here to serve you.
                    </p>
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
                            Dr. Keerthy Sunder is a board-certified psychiatrist specializing in TMS therapy for veterans and treatment-resistant mental health conditions. With extensive experience in neuroscience and innovative treatment modalities, Dr. Sunder is dedicated to helping individuals overcome depression, anxiety, and PTSD through evidence-based, compassionate care.
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
                                <span>Does the VA cover TMS therapy?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes, the VA and TRICARE often cover TMS therapy for Treatment-Resistant Depression. Coverage for PTSD specifically can vary, but we can help verify your benefits and explore all options.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can TMS help with Moral Injury?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    While TMS targets the biological symptoms of depression and anxiety, many veterans find that the mental clarity and emotional stability gained from TMS helps them better process moral injury in therapy.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Is TMS painful?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Most patients describe the sensation as a tapping on the scalp. It is generally not painful, and any discomfort typically subsides after the first few sessions.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Will I lose my security clearance?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Seeking mental health treatment, including TMS, generally does not jeopardize security clearances. In fact, untreated conditions are often more of a concern to clearance investigators.
                                </div>
                            </div>
                        </div>

                         <!-- Q5 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How long does the treatment effect last?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Many patients experience long-lasting relief, often for a year or more. Some may require "maintenance" sessions over time, but the improvements are typically durable.
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Reclaim Your Life
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        You served us. Now let us serve you. Contact Karma TMS for a confidential consultation.
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
                        <!-- Post 1 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="images/blog/is-tms-therapy-permanent-banner-v3.png"
                                alt="Is TMS Therapy Permanent?" class="w-full h-48 object-cover object-left">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="is-tms-therapy-permanent.php" class="block text-black" style="color: black !important;">Is TMS Therapy Permanent?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Discover the long-term effectiveness of TMS and what to expect.</p>
                                <a href="is-tms-therapy-permanent.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Post 2 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="images/blog/is-tms-therapy-covered-by-insurance-intro.png"
                                alt="Insurance Coverage" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="is-tms-therapy-covered-by-insurance.php" class="block text-black" style="color: black !important;">Insurance Coverage for TMS</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Learn about insurance eligibility, costs, and approvals.</p>
                                <a href="is-tms-therapy-covered-by-insurance.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
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
                                    <a href="why-tms-requires-multiple-sessions.php" class="block text-black" style="color: black !important;">Why TMS Requires Multiple Sessions</a>
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
            
            // Re-init lucide icons
            lucide.createIcons();
        });
    </script>
</body>

</html>
