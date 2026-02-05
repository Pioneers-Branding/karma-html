<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Does TMS Therapy Work for Anxiety? | Karma TMS Blog</title>
    <meta name="description"
        content="Discover how TMS therapy can help treat anxiety disorders. Learn about the science, benefits, and effectiveness of this non-invasive treatment option.">
    <meta name="keywords"
        content="TMS therapy for anxiety, anxiety treatment, non-invasive anxiety treatment, TMS benefits, anxiety relief, mental health palm springs">
    <link rel="canonical" href="does-tms-therapy-work-for-anxiety.php">
    <meta property="og:title" content="Does TMS Therapy Work for Anxiety? | Karma TMS Blog">
    <meta property="og:description"
        content="Discover how TMS therapy can help treat anxiety disorders. Learn about the science, benefits, and effectiveness of this non-invasive treatment option.">
    <meta property="og:image"
        content="https://images.unsplash.com/photo-1620147512372-9e00421556bb?auto=format&fit=crop&q=80&w=2000&ixlib=rb-4.0.3">
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
      "headline": "Does TMS Therapy Work for Anxiety?",
      "description": "Discover how TMS therapy can help treat anxiety disorders. Learn about the science, benefits, and effectiveness of this non-invasive treatment option.",
      "image": "https://images.unsplash.com/photo-1620147512372-9e00421556bb?auto=format&fit=crop&q=80&w=2000&ixlib=rb-4.0.3",
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
      "datePublished": "2026-02-02",
      "dateModified": "2026-02-02",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blog/does-tms-therapy-work-for-anxiety"
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
                <span class="text-gray-900 font-medium">Does TMS Therapy Work for Anxiety?</span>
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
                        February 2, 2026
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
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    Does TMS Therapy Work for Anxiety?
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Understanding how Transcranial Magnetic Stimulation (TMS) provides a new hope for chronic anxiety sufferers.
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
                                <button class="toc-button" onclick="scrollToSection('understanding-anxiety')">Understanding Anxiety</button>
                                <button class="toc-button" onclick="scrollToSection('how-tms-works')">How TMS Works</button>
                                <button class="toc-button" onclick="scrollToSection('scientific-evidence')">Scientific Evidence</button>
                                <button class="toc-button" onclick="scrollToSection('benefits')">Benefits of TMS</button>
                                <button class="toc-button" onclick="scrollToSection('candidate')">Are You a Candidate?</button>
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
                    <img src="images/blog/does-tms-therapy-work-for-anxiety-intro.png" 
                        alt="Does TMS Therapy Work for Anxiety?"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        <strong>Anxiety can feel overwhelming, affecting every aspect of your life—from work performance to personal relationships.</strong> If you've been struggling with <a href="anxiety.php" class="text-primary hover:underline">anxiety</a> and traditional treatments haven't provided adequate relief, you might be wondering: <em>does TMS therapy work for anxiety?</em>
                    </p>
                    <p class="mt-4 text-gray-700">
                        The answer is increasingly promising, with growing evidence supporting <a href="tms-therapy.php" class="text-primary hover:underline">TMS</a> as an effective treatment for various anxiety disorders.
                    </p>
                </div>

                <!-- Section: Understanding Anxiety -->
                <section id="understanding-anxiety" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Understanding Anxiety</h2>
                    <p class="mb-6">
                        Anxiety disorders are among the most common mental health conditions, affecting millions of people worldwide. While some level of anxiety is a normal part of life, anxiety disorders involve persistent, excessive worry that interferes with daily activities.
                    </p>
                    
                    <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 mb-6">
                        <h3 class="font-bold text-purple-900 mb-4">Common Anxiety Disorders Include:</h3>
                        <ul class="grid md:grid-cols-2 gap-y-2 gap-x-4">
                            <li class="flex items-center gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary"></i> <a href="anxiety.php" class="hover:text-primary">Generalized Anxiety Disorder (GAD)</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary"></i> Panic Disorder
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary"></i> Social Anxiety Disorder
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary"></i> <a href="understanding-ptsd-veterans.php" class="hover:text-primary">Post-Traumatic Stress Disorder (PTSD)</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary"></i> <a href="obsessive-compulsive-disorder.php" class="hover:text-primary">Obsessive-Compulsive Disorder (OCD)</a>
                            </li>
                        </ul>
                    </div>

                    <p class="mb-6">
                        Traditional treatments for anxiety include medications (such as SSRIs, benzodiazepines) and psychotherapy (like cognitive-behavioral therapy). While these approaches help many people, approximately <strong>30-40% of individuals</strong> don't achieve adequate relief or experience intolerable side effects from medications.
                    </p>
                </section>

                <!-- Section: What Is TMS -->
                <section id="what-is-tms" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What Is TMS Therapy for Anxiety?</h2>
                    <p class="mb-6">
                        <strong>Transcranial Magnetic Stimulation (TMS)</strong> is a non-invasive treatment that uses magnetic pulses to stimulate specific areas of the brain associated with mood and anxiety regulation. Originally FDA-approved for <a href="depression.php" class="text-primary hover:underline">depression</a>, TMS has shown remarkable effectiveness in treating anxiety disorders as well.
                    </p>

                    <h3 class="text-2xl font-bold text-gray-900 mb-6 mt-8">How TMS Differs from Traditional Anxiety Treatments</h3>
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="p-2 bg-green-100 rounded-lg text-green-600">
                                    <i data-lucide="shield-check" class="w-6 h-6"></i>
                                </div>
                                <h4 class="font-bold text-lg text-gray-900">No Systemic Side Effects</h4>
                            </div>
                            <p class="text-sm text-gray-600">Unlike medications, TMS doesn't cause weight gain, sexual dysfunction, or cognitive impairment.</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="p-2 bg-blue-100 rounded-lg text-blue-600">
                                    <i data-lucide="activity" class="w-6 h-6"></i>
                                </div>
                                <h4 class="font-bold text-lg text-gray-900">Non-Invasive</h4>
                            </div>
                            <p class="text-sm text-gray-600">No surgery, anesthesia, or recovery time required.</p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="p-2 bg-purple-100 rounded-lg text-purple-600">
                                    <i data-lucide="target" class="w-6 h-6"></i>
                                </div>
                                <h4 class="font-bold text-lg text-gray-900">Targeted Treatment</h4>
                            </div>
                            <p class="text-sm text-gray-600">Directly stimulates brain regions involved in anxiety regulation.</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="p-2 bg-amber-100 rounded-lg text-amber-600">
                                    <i data-lucide="lock" class="w-6 h-6"></i>
                                </div>
                                <h4 class="font-bold text-lg text-gray-900">No Dependency Risk</h4>
                            </div>
                            <p class="text-sm text-gray-600">Unlike benzodiazepines, TMS has no potential for addiction.</p>
                        </div>
                    </div>
                </section>

                <!-- Section: How TMS Works -->
                <section id="how-tms-works" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">How Does TMS Therapy Work for Anxiety?</h2>
                    <p class="mb-6">
                        TMS therapy works by targeting specific brain regions that are overactive or underactive in people with anxiety disorders. The most commonly targeted areas include the <strong>dorsolateral prefrontal cortex (DLPFC)</strong> and the right prefrontal cortex.
                    </p>

                    <div class="bg-gray-50 p-8 rounded-xl border border-gray-200">
                        <h3 class="font-bold text-xl text-primary mb-4">The Science Behind TMS for Anxiety</h3>
                        <p class="mb-4 text-gray-700">
                            Research shows that anxiety disorders are associated with hyperactivity in certain brain regions and poor regulation between different brain networks. TMS uses focused magnetic pulses to:
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-green-500 mt-1 flex-shrink-0"></i>
                                <span>Calm overactive brain circuits responsible for excessive worry</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-green-500 mt-1 flex-shrink-0"></i>
                                <span>Strengthen connections between the prefrontal cortex and emotional centers</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-green-500 mt-1 flex-shrink-0"></i>
                                <span>Restore balance in neurotransmitter systems (like GABA and glutamate)</span>
                            </li>
                             <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-green-500 mt-1 flex-shrink-0"></i>
                                <span>Promote neuroplasticity—the brain's ability to form new, healthier patterns</span>
                            </li>
                        </ul>
                        <p class="mt-4 text-gray-700">
                            Over the course of treatment, these targeted stimulations create lasting changes in brain function, helping to reduce anxiety symptoms naturally and sustainably.
                        </p>
                    </div>
                </section>

                <!-- Section: Benefits -->
                <section id="benefits" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-8">Benefits of TMS Therapy for Anxiety</h2>
                    <div class="space-y-6">
                        <!-- Benefit 1 -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg shadow-md">1</div>
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">Effective for Treatment-Resistant Anxiety</h3>
                                <p class="text-gray-600">TMS has shown 50-70% response rates for patients with anxiety disorders who haven't responded adequately to medications or therapy alone.</p>
                            </div>
                        </div>

                        <!-- Benefit 2 -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg shadow-md">2</div>
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">Minimal Side Effects</h3>
                                <p class="text-gray-600">The most common side effect is mild scalp discomfort during treatment. Unlike anxiety medications, TMS doesn't cause drowsiness, weight gain, or sexual side effects.</p>
                            </div>
                        </div>

                         <!-- Benefit 3 -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg shadow-md">3</div>
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">Complementary to Other Treatments</h3>
                                <p class="text-gray-600">TMS can be used alongside medications and therapy, or as a standalone treatment. Many patients find that combining TMS with therapy enhances both treatments' effectiveness.</p>
                            </div>
                        </div>
                        
                        <!-- Benefit 4 -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg shadow-md">4</div>
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">Outpatient Treatment with No Downtime</h3>
                                <p class="text-gray-600">Each TMS session lasts 20-40 minutes, and you can return to your normal activities immediately afterward. There's no sedation or recovery period required.</p>
                            </div>
                        </div>

                         <!-- Benefit 5 -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg shadow-md">5</div>
                            <div>
                                <h3 class="font-bold text-xl text-gray-900 mb-2">Long-Lasting Results</h3>
                                <p class="text-gray-600">Many patients maintain significant anxiety reduction for months or even years after completing TMS treatment. Maintenance sessions can help sustain benefits long-term.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: Clinical Evidence -->
                <section id="scientific-evidence" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Does TMS Therapy Help Anxiety Directly?</h2>
                    <p class="mb-6">
                        Yes, TMS can help anxiety directly, though the mechanisms are still being fully understood. Research indicates that TMS helps anxiety through multiple pathways.
                    </p>
                    
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-xl mb-8">
                        <h4 class="font-bold text-blue-900 mb-2">Clinical Evidence</h4>
                        <p class="text-blue-800 text-sm leading-relaxed">
                            Studies specifically examining TMS for anxiety disorders have found response rates of <strong>50-70% for generalized anxiety disorder</strong>, with many patients experiencing 50% or greater reduction in anxiety symptoms. The FDA's approval of TMS for "anxious depression" further validates its effectiveness for anxiety.
                        </p>
                    </div>

                    <h3 class="font-bold text-lg mb-4">Patient-reported improvements include:</h3>
                    <ul class="grid md:grid-cols-2 gap-3">
                        <li class="flex items-center gap-2 bg-gray-50 p-3 rounded-lg border border-gray-100">
                            <i data-lucide="smile" class="w-5 h-5 text-primary"></i> <span>Reduced excessive worry</span>
                        </li>
                        <li class="flex items-center gap-2 bg-gray-50 p-3 rounded-lg border border-gray-100">
                            <i data-lucide="zap-off" class="w-5 h-5 text-primary"></i> <span>Decreased physical symptoms</span>
                        </li>
                         <li class="flex items-center gap-2 bg-gray-50 p-3 rounded-lg border border-gray-100">
                            <i data-lucide="moon" class="w-5 h-5 text-primary"></i> <span>Improved sleep quality</span>
                        </li>
                         <li class="flex items-center gap-2 bg-gray-50 p-3 rounded-lg border border-gray-100">
                            <i data-lucide="brain-circuit" class="w-5 h-5 text-primary"></i> <span>Better emotional regulation</span>
                        </li>
                         <li class="flex items-center gap-2 bg-gray-50 p-3 rounded-lg border border-gray-100">
                            <i data-lucide="users" class="w-5 h-5 text-primary"></i> <span>Engaging in avoided situations</span>
                        </li>
                         <li class="flex items-center gap-2 bg-gray-50 p-3 rounded-lg border border-gray-100">
                            <i data-lucide="heart" class="w-5 h-5 text-primary"></i> <span>Greater sense of calm</span>
                        </li>
                    </ul>
                </section>

                 <!-- Section: What to Expect -->
                <section id="what-to-expect" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What to Expect During a TMS Session</h2>
                    <p class="mb-6">Understanding the TMS treatment process can help ease any concerns you might have:</p>

                    <div class="space-y-6">
                        <div class="border border-gray-200 rounded-xl overflow-hidden">
                            <div class="bg-primary/5 p-4 border-b border-primary/10">
                                <h3 class="font-bold text-primary flex items-center gap-2">
                                    <i data-lucide="clipboard-list" class="w-5 h-5"></i> Before Treatment
                                </h3>
                            </div>
                            <div class="p-6 bg-white">
                                <ul class="space-y-2 list-disc pl-5 text-gray-700">
                                    <li>Comprehensive psychiatric evaluation</li>
                                    <li>Brain mapping session to identify optimal treatment location</li>
                                    <li>Discussion of treatment goals and expectations</li>
                                    <li><a href="is-tms-therapy-covered-by-insurance.php" class="text-primary hover:underline">Insurance verification</a> and treatment plan development</li>
                                </ul>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-xl overflow-hidden">
                            <div class="bg-primary/5 p-4 border-b border-primary/10">
                                <h3 class="font-bold text-primary flex items-center gap-2">
                                    <i data-lucide="zap" class="w-5 h-5"></i> During Treatment
                                </h3>
                            </div>
                            <div class="p-6 bg-white">
                                <ul class="space-y-2 list-disc pl-5 text-gray-700">
                                    <li>You sit comfortably in a reclining chair</li>
                                    <li>A magnetic coil is positioned on your head</li>
                                    <li>You'll hear clicking sounds and feel tapping sensations on your scalp</li>
                                    <li>You remain awake and alert throughout the 20-40 minute session</li>
                                    <li>You can read, listen to music, or relax during treatment</li>
                                </ul>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-xl overflow-hidden">
                            <div class="bg-primary/5 p-4 border-b border-primary/10">
                                <h3 class="font-bold text-primary flex items-center gap-2">
                                    <i data-lucide="calendar-check" class="w-5 h-5"></i> Treatment Schedule
                                </h3>
                            </div>
                            <div class="p-6 bg-white">
                                <ul class="space-y-2 list-disc pl-5 text-gray-700">
                                    <li>Initial phase: 5 sessions per week for 4-6 weeks</li>
                                    <li>Most patients complete 20-36 sessions total</li>
                                    <li>Symptom improvement typically begins after 2-4 weeks</li>
                                    <li>Optional maintenance sessions to sustain benefits</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: Stats -->
                <section class="mb-12">
                     <h2 class="text-3xl font-bold text-primary mb-8 text-center">How Effective Is TMS Therapy for Anxiety?</h2>
                     <div class="grid md:grid-cols-3 gap-6 text-center">
                        <div class="p-6 bg-purple-100 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                            <div class="text-4xl font-extrabold text-primary mb-2">50-70%</div>
                            <p class="text-purple-900 font-medium">Response rate for generalized anxiety disorder</p>
                        </div>
                        <div class="p-6 bg-purple-100 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                            <div class="text-4xl font-extrabold text-primary mb-2">55%</div>
                            <p class="text-purple-900 font-medium">Response rate for anxious depression (FDA-approved)</p>
                        </div>
                        <div class="p-6 bg-purple-100 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                            <div class="text-4xl font-extrabold text-primary mb-2">60-70%</div>
                            <p class="text-purple-900 font-medium">Maintain improvements at 1-year follow-up</p>
                        </div>
                     </div>
                     <p class="text-center text-sm text-gray-500 mt-4 italic">
                        *Important Note: These success rates are particularly impressive because TMS is typically used after other treatments haven't provided adequate relief.
                     </p>
                </section>


                 <!-- Section: Candidate -->
                <section id="candidate" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Who Can Benefit from TMS Therapy?</h2>
                    <p class="mb-6">
                        TMS therapy may be right for you if:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 text-gray-700 mb-6 marker:text-primary">
                        <li>You've been diagnosed with an anxiety disorder (GAD, panic disorder, social anxiety, etc.)</li>
                        <li>You haven't found adequate relief from anxiety medications</li>
                        <li>You experience intolerable side effects from anxiety medications</li>
                        <li>You have anxiety co-occurring with <a href="depression.php" class="text-primary hover:underline">depression</a></li>
                        <li>You prefer a non-medication treatment approach</li>
                        <li>You don't have contraindications (metal implants in head, history of seizures)</li>
                    </ul>
                </section>

                 <!-- Section: Karma Experience -->
                 <section id="karma-experience" class="mb-12 bg-gray-50 rounded-xl p-8 border border-gray-200">
                    <h2 class="text-3xl font-bold text-primary mb-6">TMS Therapy Experience at Karma TMS</h2>
                    <p class="mb-6">
                        At <a href="palm-springs.php" class="text-primary hover:underline">Karma TMS</a>, we specialize in providing compassionate, evidence-based TMS therapy for anxiety and other mental health conditions. Our approach includes:
                    </p>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="flex gap-4">
                            <i data-lucide="users" class="w-8 h-8 text-primary flex-shrink-0"></i>
                            <div>
                                <h4 class="font-bold text-gray-900">Expert Care Team</h4>
                                <p class="text-sm text-gray-600">Board-certified psychiatrists and trained TMS technicians dedicated to your recovery.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <i data-lucide="cpu" class="w-8 h-8 text-primary flex-shrink-0"></i>
                            <div>
                                <h4 class="font-bold text-gray-900">Advanced Technology</h4>
                                <p class="text-sm text-gray-600">State-of-the-art TMS equipment with precise targeting and comfort features.</p>
                            </div>
                        </div>
                         <div class="flex gap-4">
                            <i data-lucide="sliders" class="w-8 h-8 text-primary flex-shrink-0"></i>
                            <div>
                                <h4 class="font-bold text-gray-900">Personalized Treatment</h4>
                                <p class="text-sm text-gray-600">Customized protocols based on your specific symptoms and response.</p>
                            </div>
                        </div>
                         <div class="flex gap-4">
                            <i data-lucide="file-check" class="w-8 h-8 text-primary flex-shrink-0"></i>
                            <div>
                                <h4 class="font-bold text-gray-900">Insurance Support</h4>
                                <p class="text-sm text-gray-600">We work with major insurance providers and help navigate coverage.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Final Thoughts -->
                <section id="final-thoughts" class="mb-12">
                    <p class="text-gray-700 italic">
                        Our experienced team understands the challenges of living with anxiety and is committed to helping you achieve lasting relief through evidence-based TMS therapy.
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
                                <span>Does TMS therapy work for anxiety disorders?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes. While originally FDA-approved for depression, extensive clinical research supports TMS as an effective treatment for anxiety disorders. In 2018, the FDA also cleared TMS for treating Obsessive-Compulsive Disorder (OCD), and it is widely used off-label for Generalized Anxiety Disorder (GAD) with excellent results.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How long does it take for TMS to help with anxiety?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Most patients begin to notice a reduction in anxiety symptoms between the second and fourth week of treatment (approximately 10-20 sessions). However, some may feel relief sooner, while others require the full course to experience significant benefits.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Is TMS better than medication for anxiety?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    For many patients, especially those with treatment-resistant anxiety, TMS can be superior because it targets the root cause in the brain without systemic side effects. Unlike medications (such as benzodiazepines or SSRIs), TMS does not cause weight gain, sexual dysfunction, sedation, or withdrawal symptoms.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can TMS make anxiety worse?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    It is rare for TMS to worsen anxiety long-term. Some patients may report a temporary increase in anxiety or irritability during the first week of treatment as the brain adjusts to stimulation. This is usually mild and transient, resolving as treatment continues.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>What types of anxiety does TMS treat?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    TMS is effective for a broad spectrum of anxiety conditions, including Generalized Anxiety Disorder (GAD), Social Anxiety Disorder, Panic Disorder, Post-Traumatic Stress Disorder (PTSD), and Obsessive-Compulsive Disorder (OCD).
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Is TMS therapy covered by insurance for anxiety?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Insurance coverage often depends on your specific diagnosis. TMS is widely covered for Major Depressive Disorder (even with anxious distress) and OCD. Coverage for "pure" anxiety disorders varies by plan. Our team at Karma TMS can help perform a free benefits check to determine your coverage options.
                                </div>
                            </div>
                        </div>

                        <!-- Q7 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How long do the anxiety relief benefits of TMS last?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    TMS offers durable results. Many patients experience relief that lasts for 6 to 12 months or longer after completing their treatment course. Occasional maintenance sessions can help extend these benefits for years.
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Find Relief Today
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        Don't let anxiety control your life any longer. See if TMS is right for you.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="contact-us.php" class="btn bg-white text-[#572670] hover:bg-gray-100 font-semibold px-8 py-3">
                            Free Consultation
                        </a>
                    </div>
                </div>

                <!-- Related Posts -->
                <!-- Related Posts -->
                <!-- Related Posts -->
                <!-- Related Posts -->
                 <section class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-8">Related Articles</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Post 1 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <div class="w-full h-48 bg-no-repeat bg-top" style="background-image: url('images/blog/related-bg-v2.png'); background-size: 300% auto; background-position: 0% 0;"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="what-are-the-4-as-of-stress-management.php" class="block text-black" style="color: black !important;">What are the 4 A's of Stress Management?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Discover the 4 A's of stress management: Avoid, Alter, Adapt, and Accept. Learn practical strategies to reduce stress.</p>
                                <a href="what-are-the-4-as-of-stress-management.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Post 2 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <div class="w-full h-48 bg-no-repeat bg-top" style="background-image: url('images/blog/related-bg-v2.png'); background-size: 300% auto; background-position: 50% 0;"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="mindfulness-practices-for-stress-management.php" class="block text-black" style="color: black !important;">Mindfulness Practices for Stress Management</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Discover evidence-based mindfulness practices for stress management and anxiety reduction.</p>
                                <a href="mindfulness-practices-for-stress-management.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <div class="w-full h-48 bg-no-repeat bg-top" style="background-image: url('images/blog/related-bg-v2.png'); background-size: 300% auto; background-position: 100% 0;"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="managing-anxiety-triggers-in-everyday-life.php" class="block text-black" style="color: black !important;">Managing Anxiety Triggers in Everyday Life</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Learn practical strategies to identify and manage anxiety triggers effectively in your daily routine.</p>
                                <a href="managing-anxiety-triggers-in-everyday-life.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
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
