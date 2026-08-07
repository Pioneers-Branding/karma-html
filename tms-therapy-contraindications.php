<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS Therapy Contraindications: Who Should Avoid TMS? | Karma TMS Blog</title>
    <meta name="description"
        content="Is TMS therapy safe for everyone? Explore the absolute and relative contraindications of TMS therapy, including metal implants, seizures, and other risk factors.">
    <meta name="keywords"
        content="TMS therapy contraindications, who should not get TMS, TMS contraindications, TMS seizure risk, transcranial magnetic stimulation safety">
    <link rel="canonical" href="tms-therapy-contraindications.php">
    <meta property="og:title" content="TMS Therapy Contraindications: Who Should Avoid TMS? | Karma TMS Blog">
    <meta property="og:description"
        content="Is TMS therapy safe for everyone? Explore the absolute and relative contraindications of TMS therapy, including metal implants, seizures, and other risk factors.">
    <meta property="og:image" content="images/blog/tms-therapy-contraindications-photo.webp">
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

        /* Make links in article content visually obvious */
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
      "headline": "TMS Therapy Contraindications: Who Should Avoid TMS?",
      "description": "Is TMS therapy safe for everyone? Explore the absolute and relative contraindications of TMS therapy, including metal implants, seizures, and other risk factors.",
      "image": "images/blog/tms-therapy-contraindications-photo.webp",
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
          "url": "/assets/images/img-135947b0fa55.png"
        }
      },
      "datePublished": "2026-06-06",
      "dateModified": "2026-06-06",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/tms-therapy-contraindications.php"
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
                <span class="text-gray-900 font-medium">TMS Therapy Contraindications</span>
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
                        June 6, 2026
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        11 min read
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        Dr. Keerthy Sunder
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    TMS Therapy Contraindications: Who Should Avoid TMS?
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    A comprehensive safety guide explaining absolute and relative contraindications for Transcranial Magnetic Stimulation.
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
                                <button class="toc-button" onclick="scrollToSection('what-are-contraindications')">What Are Contraindications?</button>
                                <button class="toc-button" onclick="scrollToSection('absolute-contraindications')">Absolute Contraindications</button>
                                <button class="toc-button" onclick="scrollToSection('relative-contraindications')">Relative Contraindications</button>
                                <button class="toc-button" onclick="scrollToSection('why-metal-matters')">Why Metal Matters</button>
                                <button class="toc-button" onclick="scrollToSection('contraindications-vs-side-effects')">Contraindications vs. Side Effects</button>
                                <button class="toc-button" onclick="scrollToSection('safety-screening')">Safety Screening</button>
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
                    <img src="images/blog/tms-therapy-contraindications-photo.webp"
                        alt="TMS treatment chair beside the KAIA Virtual Reality Therapy and neuromodulation research suite at Karma TMS"
                        width="1600" height="667"
                        class="w-full rounded-xl mb-8 shadow-md"
                        style="aspect-ratio: 12 / 5; object-fit: cover;">

                    <p class="text-xl leading-relaxed text-gray-700">
                        <strong>Transcranial Magnetic Stimulation (TMS) has emerged as a groundbreaking, FDA-cleared treatment for individuals struggling with severe conditions.</strong> Whether you are seeking relief from <a href="depression.php" class="text-primary hover:underline">Major Depressive Disorder (MDD)</a>, chronic <a href="anxiety.php" class="text-primary hover:underline">anxiety disorders</a>, or <a href="ocd.php" class="text-primary hover:underline">Obsessive-Compulsive Disorder (OCD)</a>, finding a treatment that actually works is paramount. Because it is non-invasive and drug-free, <a href="is-tms-therapy-safe.php" class="text-primary hover:underline">TMS is exceptionally safe</a> for the vast majority of patients. It completely bypasses the systemic issues associated with standard pharmacological routes.
                    </p>
                    <p class="mt-4 text-gray-700">
                        However, like any medical procedure, it is not suitable for everyone. To guarantee patient safety, medical professionals evaluate candidates against specific criteria called **contraindications**. In this guide, we will break down who should avoid TMS, the difference between absolute and relative contraindications, how it relates to other treatments like <a href="what-is-prtms.php" class="text-primary hover:underline">personalized Repetitive TMS (prTMS)</a>, and what safety checks you can expect at our clinic.
                    </p>
                </div>

                <!-- Section: What Are Contraindications? -->
                <section id="what-are-contraindications" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What Are Contraindications?</h2>
                    <p class="mb-6">
                        In medical terms, a **contraindication** is a specific situation, condition, or factor that serves as a reason to withhold a medical treatment due to the harm that it would cause the patient. It represents a strict safety boundary designed to prevent adverse events.
                    </p>
                    <p class="mb-6">
                        When evaluating patients for TMS at <a href="palm-springs.php" class="text-primary hover:underline">Karma TMS Palm Springs</a> or <a href="rancho-mirage.php" class="text-primary hover:underline">Rancho Mirage</a>, our medical team categorizes contraindications to decide if a patient is a <a href="who-is-a-good-candidate-for-tms-therapy.php" class="text-primary hover:underline">good candidate for TMS therapy</a>.
                    </p>

                    <p class="mb-6">
                        Contraindications are divided into two main categories:
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="p-2 bg-purple-100 rounded-lg text-primary">
                                    <i data-lucide="shield-alert" class="w-6 h-6"></i>
                                </div>
                                <h4 class="font-bold text-lg text-gray-900">Absolute Contraindications</h4>
                            </div>
                            <p class="text-sm text-gray-600">Conditions that make a treatment completely unsafe. Under no circumstances should a patient receive the treatment if an absolute contraindication is present. Doing so poses immediate risks of severe injury or device failure.</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="p-2 bg-blue-100 rounded-lg text-blue-600">
                                    <i data-lucide="help-circle" class="w-6 h-6"></i>
                                </div>
                                <h4 class="font-bold text-lg text-gray-900">Relative Contraindications</h4>
                            </div>
                            <p class="text-sm text-gray-600">Conditions that increase risk, but where the benefit may outweigh the risk. Treatment can proceed with caution, adjustment, or extra monitoring. A psychiatrist will perform a personalized risk assessment.</p>
                        </div>
                    </div>
                </section>

                <!-- Section: Absolute Contraindications -->
                <section id="absolute-contraindications" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Absolute Contraindications: Who Cannot Get TMS?</h2>
                    <p class="mb-6">
                        The primary absolute contraindications for TMS therapy relate to the presence of **non-removable metallic implants in or near the head**. Because TMS works by generating a powerful local magnetic field, any ferromagnetic metal within 30 centimeters (approx. 12 inches) of the magnetic coil can react.
                    </p>

                    <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 mb-6">
                        <h3 class="font-bold text-purple-900 mb-4 flex items-center gap-2">
                            <i data-lucide="x-circle" class="w-5 h-5 text-red-500"></i> Absolute Contraindications Include:
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary mt-1.5 flex-shrink-0"></i>
                                <span><strong>Aneurysm clips or coils:</strong> Magnetic fields can heat or displace these delicate implants, risking life-threatening vessel damage.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary mt-1.5 flex-shrink-0"></i>
                                <span><strong>Cochlear implants:</strong> The magnetic pulses can permanently damage the electronics of the implant, causing hearing device failure or tissue discomfort.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary mt-1.5 flex-shrink-0"></i>
                                <span><strong>Deep Brain Stimulators (DBS):</strong> Magnetic induction can cause unexpected electrical currents in the DBS electrodes, leading to brain tissue heating or injury.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary mt-1.5 flex-shrink-0"></i>
                                <span><strong>Metallic fragments or shrapnel:</strong> Ferromagnetic metal fragments in the eyes, face, or skull could shift during stimulation. This is highly relevant for veterans who may have historic metal fragment exposure (see <a href="tms-anxiety-veterans.php" class="text-primary hover:underline">TMS for Veterans</a>).</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary mt-1.5 flex-shrink-0"></i>
                                <span><strong>Vagus Nerve Stimulators (VNS):</strong> Implants near the neck or chest may malfunction due to magnetic induction from the head coil.</span>
                            </li>
                        </ul>
                    </div>

                    <p class="mb-6">
                        Dental braces, fillings, bridges, and crown implants are typically made of non-ferromagnetic alloys and do NOT preclude you from receiving TMS therapy. However, any magnetic or electronic implants in the head or neck area are strict barriers.
                    </p>
                </section>

                <!-- Section: Relative Contraindications -->
                <section id="relative-contraindications" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Relative Contraindications: Proceeding with Caution</h2>
                    <p class="mb-6">
                        Relative contraindications do not automatically disqualify a candidate. Instead, they require a board-certified psychiatrist to perform a comprehensive clinical assessment. Many patients with relative contraindications are safely treated with adjustments to the treatment protocol.
                    </p>

                    <div class="bg-amber-50 p-6 rounded-xl border border-amber-200 mb-6">
                        <h3 class="font-bold text-amber-900 mb-4 flex items-center gap-2">
                            <i data-lucide="alert-triangle" class="w-5 h-5 text-amber-600"></i> Conditions Requiring Careful Evaluation:
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary mt-1.5 flex-shrink-0"></i>
                                <span><strong>History of Seizures or Epilepsy:</strong> Because TMS stimulates brain tissue, it carries a minuscule risk of inducing a seizure (about 1 in 30,000 treatments, which is lower than the seizure risk of many common oral antidepressants). Patients with active epilepsy or history of unprovoked seizures require strict precautions.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary mt-1.5 flex-shrink-0"></i>
                                <span><strong>Seizure-Threshold Lowering Medications:</strong> Certain medications, including high doses of stimulants, tricyclic antidepressants, or sudden withdrawal from alcohol or benzodiazepines, lower the seizure threshold. Undergoing active <a href="medication-management.php" class="text-primary hover:underline">medication management</a> is essential to monitor these interactions.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary mt-1.5 flex-shrink-0"></i>
                                <span><strong>Severe Traumatic Brain Injury (TBI):</strong> A history of recent brain trauma, stroke, or neurosurgery alters the brain's excitability and structural integrity, requiring custom safety protocols.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary mt-1.5 flex-shrink-0"></i>
                                <span><strong>Cardiac Pacemakers or ICDs:</strong> While these are located in the chest and are far from the head coil, care must be taken to ensure the magnetic field does not interfere with their electronic pacing.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="circle-dot" class="w-4 h-4 text-primary mt-1.5 flex-shrink-0"></i>
                                <span><strong>Bipolar Disorder:</strong> In patients with Bipolar Disorder, TMS (like antidepressants) carries a small risk of inducing a switch from depression into mania. Careful observation and mood-stabilizing medications are used to mitigate this.</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Section: Why Metal Matters -->
                <section id="why-metal-matters" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">The Science: Why Does Metal React with TMS?</h2>
                    <p class="mb-6">
                        According to the <a href="https://en.wikipedia.org/wiki/Transcranial_magnetic_stimulation" target="_blank" rel="nofollow noopener noreferrer" class="text-primary hover:underline">Wikipedia entry on Transcranial Magnetic Stimulation</a>, the procedure operates on the principles of **electromagnetic induction** (discovered by Michael Faraday).
                    </p>
                    <p class="mb-6">
                        When the TMS coil is activated, it generates a magnetic pulse that passes through the skull. If this magnetic field encounters a conductive metal implant, it can induce local electric currents inside the metal itself. This induction leads to two primary issues:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 mb-6">
                        <li><strong>Thermal Heating:</strong> Induced currents can heat the metallic implant, potentially causing localized thermal damage to surrounding brain tissue.</li>
                        <li><strong>Displacement Forces:</strong> Ferromagnetic metals are physically attracted to the magnet, which can apply physical force or torque, risking displacement of crucial implants (like aneurysm clips).</li>
                        <li><strong>Signal Corruption:</strong> Electromagnetic pulses can interfere with the battery and circuitry of electronic implants, causing them to shut down or malfunction.</li>
                    </ul>
                    <p class="mb-6">
                        To avoid these hazards, physicians screen all patients using high-sensitivity questionnaires and review full medical histories before starting a TMS course.
                    </p>
                </section>

                <!-- Section: Contraindications vs Side Effects -->
                <section id="contraindications-vs-side-effects" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Contraindications vs. Side Effects: Understanding the Difference</h2>
                    <p class="mb-6">
                        It is common for patients to confuse **contraindications** (reasons why you should not receive a treatment at all) with **side effects** (mild, temporary reactions to a treatment). 
                    </p>
                    <p class="mb-6">
                        While a contraindication prevents you from undergoing TMS, side effects are merely things you might experience during or after a session. As discussed in our article, <a href="is-tms-therapy-safe.php" class="text-primary hover:underline">Is TMS Therapy Safe?</a>, typical side effects are mild and transient, including:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 mb-6">
                        <li>A light tapping sensation on the scalp during treatment.</li>
                        <li>Mild, temporary scalp discomfort at the stimulation site.</li>
                        <li>A mild headache during the first week of sessions, which easily responds to over-the-counter pain relievers.</li>
                    </ul>
                    <p class="mb-6">
                        Because TMS is completely non-systemic, it does not cause the common side effects of oral medications, such as weight gain, nausea, sexual dysfunction, or brain fog.
                    </p>
                </section>

                <!-- Section: Safety Screening -->
                <section id="safety-screening" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What to Expect During the Safety Screening</h2>
                    <p class="mb-6">
                        At Karma TMS, safety is our highest priority. Before you can begin your first treatment session, you will undergo a comprehensive screening process:
                    </p>

                    <div class="space-y-6 mb-8">
                        <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                            <div class="bg-primary/5 p-4 border-b border-primary/10">
                                <h3 class="font-bold text-primary flex items-center gap-2">
                                    <i data-lucide="clipboard-list" class="w-5 h-5"></i> Step 1: Detailed Medical Questionnaire
                                </h3>
                            </div>
                            <div class="p-6 bg-white">
                                <p class="text-gray-700">We ask direct questions about any past surgeries, metal implants, pacemakers, shrapnel exposure, or piercings that cannot be removed. Knowing your surgical history is vital to ensuring a safe experience.</p>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                            <div class="bg-primary/5 p-4 border-b border-primary/10">
                                <h3 class="font-bold text-primary flex items-center gap-2">
                                    <i data-lucide="stethoscope" class="w-5 h-5"></i> Step 2: Clinical Assessment
                                </h3>
                            </div>
                            <div class="p-6 bg-white">
                                <p class="text-gray-700">Our medical director, <a href="about.php" class="text-primary hover:underline">Dr. Keerthy Sunder</a>, will review your mental health history, medication list, and overall neurological health to confirm whether you are a candidate. We also verify insurance coverage to help navigate payment (see <a href="is-tms-therapy-covered-by-insurance.php" class="text-primary hover:underline">TMS Insurance Coverage</a>).</p>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                            <div class="bg-primary/5 p-4 border-b border-primary/10">
                                <h3 class="font-bold text-primary flex items-center gap-2">
                                    <i data-lucide="sliders" class="w-5 h-5"></i> Step 3: Personalized Mapping
                                </h3>
                            </div>
                            <div class="p-6 bg-white">
                                <p class="text-gray-700">If cleared, we proceed with brain mapping to determine your precise treatment coordinates and motor threshold. For patients choosing <a href="prtms.php" class="text-primary hover:underline">personalized TMS (prTMS)</a>, we perform regular qEEG maps to fine-tune the magnetic frequency matching your natural brainwaves.</p>
                            </div>
                        </div>
                    </div>

                    <p class="mb-6">
                        Because a full TMS course requires daily attendance for several weeks, understanding the schedule is critical. You can read more about why this frequency is required in our article, <a href="why-tms-requires-multiple-sessions.php" class="text-primary hover:underline">Why TMS Requires Multiple Sessions</a>.
                    </p>
                </section>

                <!-- Section: Stats -->
                <section class="mb-12">
                     <h2 class="text-3xl font-bold text-primary mb-8 text-center">Is TMS Therapy Safe? Key Facts</h2>
                     <div class="grid md:grid-cols-3 gap-6 text-center">
                        <div class="p-6 bg-purple-100 rounded-xl shadow-sm">
                            <div class="text-4xl font-extrabold text-primary mb-2">0.003%</div>
                            <p class="text-purple-900 font-medium">Risk of seizure (extremely rare across clinical trials)</p>
                        </div>
                        <div class="p-6 bg-purple-100 rounded-xl shadow-sm">
                            <div class="text-4xl font-extrabold text-primary mb-2">100%</div>
                            <p class="text-purple-900 font-medium">Non-systemic (no weight gain or sexual side effects)</p>
                        </div>
                        <div class="p-6 bg-purple-100 rounded-xl shadow-sm">
                            <div class="text-4xl font-extrabold text-primary mb-2">Zero</div>
                            <p class="text-purple-900 font-medium">Anesthesia or sedation required during sessions</p>
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
                                <span>Can I get TMS if I have dental fillings, crowns, or braces?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes. Dental fillings, crowns, implants, and braces are not ferromagnetic and are located in the mouth area, which is well outside the immediate electromagnetic stimulation field. They do not pose a hazard during TMS treatment.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can I receive TMS if I have a pacemaker?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes, in most cases. Modern pacemakers are located in the chest area, which is far enough from the head to avoid magnetic interference. However, our medical team will evaluate the model of your pacemaker and consult with your cardiologist to ensure complete safety.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Are there any mental health conditions that prevent me from getting TMS?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    A history of active psychosis, unstable bipolar disorder (where TMS could trigger a manic episode), or active substance abuse are considered relative contraindications. Dr. Sunder will evaluate these conditions and coordinate an appropriate treatment approach.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Can pregnant women receive TMS therapy?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes. Because TMS is local and does not circulate in the bloodstream, it has no systemic side effects, making it a highly attractive option for pregnant women who want to avoid the risks associated with antidepressant medications.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Is TMS Right for You?
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        Speak with our medical specialists to verify your eligibility and find the safest path to mental wellness.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="contact-us.php" class="btn bg-white text-[#572670] hover:bg-gray-100 font-semibold px-8 py-3">
                            Schedule Your Screening
                        </a>
                    </div>
                </div>

                <!-- Related Posts -->
                 <section class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-8">Related Articles</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Post 1 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <div class="w-full h-48 bg-no-repeat bg-top" style="background-image: url('images/blog/related-bg-v2.png'); background-size: 300% auto; background-position: 0% 0;"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="is-tms-therapy-safe.php" class="block text-black" style="color: black !important;">Is TMS Therapy Safe?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Explore the safety profile, common side effects, and clinical safety record of Transcranial Magnetic Stimulation.</p>
                                <a href="is-tms-therapy-safe.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Post 2 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <div class="w-full h-48 bg-no-repeat bg-top" style="background-image: url('images/blog/related-bg-v2.png'); background-size: 300% auto; background-position: 50% 0;"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="who-is-a-good-candidate-for-tms-therapy.php" class="block text-black" style="color: black !important;">Who Is a Good Candidate?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Learn who is best suited for TMS, including diagnostic guidelines, success predictors, and criteria.</p>
                                <a href="who-is-a-good-candidate-for-tms-therapy.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-4 h-4 flex-shrink-0 mt-[1px]"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <div class="w-full h-48 bg-no-repeat bg-top" style="background-image: url('images/blog/related-bg-v2.png'); background-size: 300% auto; background-position: 100% 0;"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="tms-therapy-pros-and-cons.php" class="block text-black" style="color: black !important;">TMS Therapy Pros & Cons</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">A balanced look at the key benefits, side effects, costs, and timeline of TMS therapy.</p>
                                <a href="tms-therapy-pros-and-cons.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
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
