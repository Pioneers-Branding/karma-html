<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Help Veterans with PTSD: Therapy, TMS, and Beyond | Karma TMS Blog</title>
    <meta name="description"
        content="Learn practical ways to support veterans with PTSD. Discover recognizing symptoms, effective communication strategies, and treatment options like TMS therapy.">
    <meta name="keywords"
        content="veterans PTSD support, help veteran with PTSD, PTSD symptoms in veterans, TMS for PTSD, mental health palm springs, karma tms, veteran mental health">
    <link rel="canonical" href="how-to-help-veterans-ptsd.php">
    <meta property="og:title" content="How to Help Veterans with PTSD: Therapy, TMS, and Beyond | Karma TMS Blog">
    <meta property="og:description"
        content="Learn practical ways to support veterans with PTSD. Discover recognizing symptoms, effective communication strategies, and treatment options like TMS therapy.">
    <meta property="og:image"
        content="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763033666/4_toy7pb.png">
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
            transition: color 0.2s;
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
        
        .prose h3 {
             font-size: 1.5rem;
             font-weight: 700;
             margin-top: 2rem;
             margin-bottom: 1rem;
             color: #1f2937;
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
        
        .bg-indigo-50 { background-color: #eef2ff; }
        .border-indigo-100 { border-color: #e0e7ff; }

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
        .bg-purple-100 { background-color: #f3e8ff; }

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
        .text-purple-900 {
            color: #581c87 !important;
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
      "headline": "How to Help Veterans with PTSD: Therapy, TMS, and Beyond",
      "description": "Learn practical ways to support veterans with PTSD. Discover recognizing symptoms, effective communication strategies, and treatment options like TMS therapy.",
      "image": "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763033666/4_toy7pb.png",
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
      "datePublished": "2025-11-15",
      "dateModified": "2026-02-03",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blog/how-to-help-veterans-ptsd"
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
                <span class="text-gray-900 font-medium">How to Help Veterans with PTSD</span>
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
                        November 15, 2025
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
                    How to Help Veterans with PTSD: Therapy, TMS, and Beyond
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    A comprehensive guide to understanding, supporting, and empowering veterans living with Post-Traumatic Stress Disorder.
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
                                <button class="toc-button" onclick="scrollToSection('understanding')">Understanding PTSD</button>
                                <button class="toc-button" onclick="scrollToSection('symptoms')">Recognizing Symptoms</button>
                                <button class="toc-button" onclick="scrollToSection('support-strategies')">Practical Ways to Help</button>
                                <button class="toc-button" onclick="scrollToSection('what-to-avoid')">What to Avoid</button>
                                <button class="toc-button" onclick="scrollToSection('treatment')">Treatment Options</button>
                                <button class="toc-button" onclick="scrollToSection('conclusion')">Conclusion</button>
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
                    <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763033666/4_toy7pb.png" 
                        alt="Veteran Support"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        Transitioning from military service to civilian life is a significant challenge, especially for veterans carrying the invisible wounds of war. <a href="ptsd.php" class="text-primary hover:underline font-semibold">Post-Traumatic Stress Disorder (PTSD)</a> is a common condition that affects many veterans, impacting their daily lives, relationships, and overall well-being. Knowing how to help veterans with PTSD starts with understanding their experience and offering support with patience and compassion.
                    </p>
                </div>

                <!-- Section: Understanding PTSD -->
                <section id="understanding" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Understanding PTSD in Veterans</h2>
                    <p>
                        PTSD is a mental health condition triggered by experiencing or witnessing a terrifying event. For veterans, this often involves combat exposure, life-threatening situations, sexual trauma, or witnessing the death of fellow service members.
                    </p>
                    <p>
                        It's important to recognize that PTSD is not a sign of weakness; it is a normal reaction to abnormal events. The brain's "fight or flight" system remains on high alert even when the danger has passed, leading to persistent symptoms that can last for months or years.
                    </p>
                </section>

                <!-- Section: Recognizing Symptoms -->
                <section id="symptoms" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6 flex items-center gap-3">
                         <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white text-lg">1</span>
                        Recognizing the Signs
                    </h2>
                    <p class="mb-6">
                        Veterans may not always vocalize their struggles. Being aware of the common symptoms can help you identify when a loved one might need support.
                    </p>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-blue-50 p-6 rounded-xl border border-blue-100 h-full">
                            <h4 class="font-bold text-blue-900 text-lg mb-3">Re-experiencing Symptoms</h4>
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-1.5 flex-shrink-0"></div>Flashbacks (reliving the trauma)</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-1.5 flex-shrink-0"></div>Nightmares or bad dreams</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-1.5 flex-shrink-0"></div>Frightening thoughts</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-1.5 flex-shrink-0"></div>Physical reactions to triggers</li>
                            </ul>
                        </div>

                        <div class="bg-orange-50 p-6 rounded-xl border border-orange-100 h-full">
                            <h4 class="font-bold text-orange-900 text-lg mb-3">Hyperarousal Symptoms</h4>
                            <ul class="space-y-2 text-sm text-gray-700">
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-orange-400 mt-1.5 flex-shrink-0"></div>Being easily startled or "jumpy"</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-orange-400 mt-1.5 flex-shrink-0"></div>Feeling tense or "on edge"</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-orange-400 mt-1.5 flex-shrink-0"></div>Difficulty sleeping</li>
                                <li class="flex items-start gap-2"><div class="w-1.5 h-1.5 rounded-full bg-orange-400 mt-1.5 flex-shrink-0"></div>Angry outbursts</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Section: Practical Ways to Help -->
                <section id="support-strategies" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6 flex items-center gap-3">
                         <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white text-lg">2</span>
                        Practical Ways to Help
                    </h2>
                    <p>
                        Supporting a veteran with PTSD requires patience, understanding, and proactive effort. Here are meaningful ways you can make a difference:
                    </p>

                    <div class="my-6 space-y-4">
                        <div class="bg-white border-l-4 border-primary shadow-sm rounded-r-xl p-6">
                            <h4 class="font-bold text-lg text-primary mb-2">1. Be a Good Listener</h4>
                            <p class="text-gray-700">Listen without judgment. You don't need to have answers or offer advice; simply being present and validating their feelings ("It sounds like you're carrying a heavy burden") can be incredibly powerful. Don't pressure them to talk if they aren't ready.</p>
                        </div>

                        <div class="bg-white border-l-4 border-primary shadow-sm rounded-r-xl p-6">
                            <h4 class="font-bold text-lg text-primary mb-2">2. Educate Yourself</h4>
                            <p class="text-gray-700">The more you know about PTSD, the better you can understand what your loved one is going through. Learn about triggers, symptoms, and treatment options. This knowledge helps you separate the symptoms from the person.</p>
                        </div>

                         <div class="bg-white border-l-4 border-primary shadow-sm rounded-r-xl p-6">
                            <h4 class="font-bold text-lg text-primary mb-2">3. Create a Safe Environment</h4>
                            <p class="text-gray-700">Veterans with PTSD often feel unsafe. Help minimize stress at home by maintaining a predictable routine, reducing loud noises, and avoiding sudden surprises. Ask them what makes them feel safe and try to accommodate those needs.</p>
                        </div>
                        
                         <div class="bg-white border-l-4 border-primary shadow-sm rounded-r-xl p-6">
                            <h4 class="font-bold text-lg text-primary mb-2">4. Encourage Professional Help</h4>
                            <p class="text-gray-700">While your support is vital, professional treatment is often necessary for recovery. Gently encourage them to seek help from the VA or a mental health clinic specializing in veterans' care. Offer to help research providers or drive them to appointments.</p>
                        </div>
                    </div>
                </section>

                <!-- Section: What to Avoid -->
                <section id="what-to-avoid" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6 flex items-center gap-3">
                         <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white text-lg">3</span>
                        What to Avoid
                    </h2>
                    <p>
                        Good intentions can sometimes lead to unhelpful comments. Here are some things to steer clear of:
                    </p>
                    <ul class="grid md:grid-cols-2 gap-4 mt-4">
                        <li class="flex items-start gap-2 bg-red-50 p-4 rounded-lg">
                            <i data-lucide="x-circle" class="w-5 h-5 text-red-600 mt-1 flex-shrink-0"></i>
                            <span class="text-gray-800">Don't say "Just get over it" or "It's in the past."</span>
                        </li>
                        <li class="flex items-start gap-2 bg-red-50 p-4 rounded-lg">
                            <i data-lucide="x-circle" class="w-5 h-5 text-red-600 mt-1 flex-shrink-0"></i>
                            <span class="text-gray-800">Don't minimize their experiences or compare them to others.</span>
                        </li>
                        <li class="flex items-start gap-2 bg-red-50 p-4 rounded-lg">
                            <i data-lucide="x-circle" class="w-5 h-5 text-red-600 mt-1 flex-shrink-0"></i>
                            <span class="text-gray-800">Don't force them to share details of traumatic events.</span>
                        </li>
                        <li class="flex items-start gap-2 bg-red-50 p-4 rounded-lg">
                            <i data-lucide="x-circle" class="w-5 h-5 text-red-600 mt-1 flex-shrink-0"></i>
                            <span class="text-gray-800">Don't touch or startle them from behind without warning.</span>
                        </li>
                    </ul>
                </section>

                <!-- Section: Treatment Options -->
                <section id="treatment" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6 flex items-center gap-3">
                         <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white text-lg">4</span>
                        Treatment Options: Hope for Recovery
                    </h2>
                    <p>
                        Recovery from PTSD is possible with effective treatment. Common approaches include:
                    </p>
                    
                    <div class="bg-indigo-50 rounded-xl p-6 border border-indigo-100 mt-4">
                        <ul class="space-y-4">
                             <li class="flex items-start gap-3">
                                <div class="bg-white p-2 rounded-full text-indigo-600 shadow-sm"><i data-lucide="brain" class="w-5 h-5"></i></div>
                                <div>
                                    <strong>Psychotherapy:</strong> Evidence-based therapies like Cognitive Processing Therapy (CPT) and Prolonged Exposure (PE) therapy.
                                </div>
                            </li>
                             <li class="flex items-start gap-3">
                                <div class="bg-white p-2 rounded-full text-indigo-600 shadow-sm"><i data-lucide="pill" class="w-5 h-5"></i></div>
                                <div>
                                    <strong><a href="medication-management.php" class="text-indigo-700 underline font-semibold">Medication</a>:</strong> Antidepressants can help manage symptoms like sadness, worry, and anger.
                                </div>
                            </li>
                             <li class="flex items-start gap-3">
                                <div class="bg-white p-2 rounded-full text-indigo-600 shadow-sm"><i data-lucide="zap" class="w-5 h-5"></i></div>
                                <div>
                                    <strong>TMS Therapy:</strong> <a href="ptsd.php" class="text-indigo-700 underline font-semibold">Transcranial Magnetic Stimulation (TMS)</a> is a breakthrough, non-invasive treatment for treatment-resistant PTSD. It uses magnetic pulses to stimulate brain areas linked to mood and emotional regulation, offering hope when other treatments haven't worked.
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Section: Summary/Conclusion -->
                <section id="conclusion" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Conclusion</h2>
                    <p class="mb-4">
                        Helping a veteran with PTSD is a journey of understanding, patience, and consistent support. By learning to recognize the signs, communicating effectively, and encouraging professional treatment, you can play a vital role in their path to recovery.
                    </p>
                    <p class="mb-6">
                        At <a href="index.php" class="text-primary hover:underline font-medium">Karma TMS</a>, we are dedicated to supporting veterans in the <a href="palm-springs.php" class="text-primary hover:underline">Palm Springs</a> area. We offer advanced treatments like TMS therapy alongside compassionate care. If you or a loved one is struggling, please <a href="contact-us.php" class="text-primary hover:underline font-medium">reach out to us today</a>. You don't have to fight this battle alone.
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
                            Dr. Keerthy Sunder is a board-certified psychiatrist with extensive experience in treating trauma and PTSD. He is committed to providing veterans with the highest standard of care using integrative and innovative treatment methods.
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
                                <span>How do I know if a veteran has PTSD?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Common signs include flashbacks, nightmares, severe anxiety, uncontrollable thoughts about the event, hypervigilance (being constantly on guard), angry outbursts, and avoiding places or things that remind them of the trauma.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can PTSD be cured?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    While there usually isn't a quick "cure," PTSD is highly treatable. With appropriate therapies like CPT, PE, and TMS, along with medication, many veterans experience significant symptom reduction and regain a high quality of life.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How does TMS therapy help with PTSD?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    TMS uses magnetic fields to stimulate nerve cells in the brain to improve symptoms of PTSD. It targets specific areas affecting mood regulation and anxiety. It is FDA-cleared and can be an effective alternative for those who haven't found relief with antidepressants.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>What if the veteran refuses help?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    You cannot force someone to get help, but you can continue to offer support and information. Focus on how their symptoms are affecting their life and relationships, rather than "diagnosing" them. In a crisis, contact the Veterans Crisis Line (988, Press 1).
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Are there support groups for families of veterans?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes, organizations like the VA, NAMI (National Alliance on Mental Illness), and various veterans' non-profits offer support groups for families. These provide a safe space to share experiences and learn coping strategies.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 text-white" style="color: #ffffff !important;">
                        Support Your Recovery Journey
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        Karma TMS offers specialized care for veterans. Contact us to learn more about our PTSD treatment options.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="contact-us.php" class="btn bg-white text-[#572670] hover:bg-gray-100 font-semibold px-8 py-3">
                            Contact Us Today
                        </a>
                    </div>
                </div>

                <!-- Related Articles -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-primary mb-6 border-l-4 border-primary pl-4">Related Articles</h2>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Post 1: Disability for Depression -->
                        <div class="bg-white border border-purple-200 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1765015453/38_lkmqxw.png"
                                alt="Disability for Depression" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="can-you-get-disability-for-depression.php" class="block text-black" style="color: black !important;">Can You Get Disability for Depression?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Complete guide to disability benefits for depression, covering eligibility and treatment options.</p>
                                <a href="can-you-get-disability-for-depression.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Post 2: Anxiety -->
                        <div class="bg-white border border-purple-200 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                             <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763033666/6_rrkhgo.png"
                                alt="TMS for Anxiety" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="tms-anxiety-veterans.php" class="block text-black" style="color: black !important;">TMS for Anxiety in Veterans</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Discover how TMS helps veterans manage anxiety beyond medication.</p>
                                <a href="tms-anxiety-veterans.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3: Understanding PTSD -->
                        <div class="bg-white border border-purple-200 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763033666/5_kvtlku.png"
                                alt="Understanding PTSD" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="understanding-ptsd-veterans.php" class="block text-black" style="color: black !important;">Understanding PTSD in Veterans</a>
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

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();

        function scrollToSection(id) {
            const element = document.getElementById(id);
            if (element) {
                const offset = 100;
                const bodyRect = document.body.getBoundingClientRect().top;
                const elementRect = element.getBoundingClientRect().top;
                const elementPosition = elementRect - bodyRect;
                const offsetPosition = elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }

        // Active state for TOC
        document.addEventListener('scroll', () => {
            const sections = ['intro', 'understanding', 'symptoms', 'support-strategies', 'what-to-avoid', 'treatment', 'conclusion', 'faq'];
            const buttons = document.querySelectorAll('.toc-button');
            
            let current = '';

            sections.forEach(section => {
                const element = document.getElementById(section);
                if (element) {
                    const rect = element.getBoundingClientRect();
                    if (rect.top <= 150) {
                        current = section;
                    }
                }
            });

            buttons.forEach(button => {
                button.classList.remove('active');
                if (button.getAttribute('onclick').includes(current)) {
                    button.classList.add('active');
                }
            });
        });

        // FAQ Toggle
        function toggleBlogFAQ(button) {
            const item = button.parentElement;
            const content = button.nextElementSibling;
            const isOpen = item.getAttribute('data-state') === 'open';
            
            // Close all first
            document.querySelectorAll('.accordion-item').forEach(i => {
                i.setAttribute('data-state', 'closed');
                i.querySelector('.accordion-content').style.maxHeight = null;
            });

            if (!isOpen) {
                item.setAttribute('data-state', 'open');
                content.style.maxHeight = content.scrollHeight + "px";
            }
        }
    </script>
</body>

</html>
