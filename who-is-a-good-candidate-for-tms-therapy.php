<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who Is a Good Candidate for TMS Therapy? | Karma TMS Blog</title>
    <meta name="description"
        content="Wondering if TMS therapy is right for you? Learn the key signs of a good candidate, including treatment-resistant depression and medication side effects.">
    <meta name="keywords"
        content="TMS candidate, TMS therapy eligibility, treatment resistant depression, depression treatment palm springs, TMS contraindications">
    <link rel="canonical" href="who-is-a-good-candidate-for-tms-therapy.php">
    <meta property="og:title" content="Who Is a Good Candidate for TMS Therapy? | Karma TMS Blog">
    <meta property="og:description"
        content="Wondering if TMS therapy is right for you? Learn the key signs of a good candidate, including treatment-resistant depression and medication side effects.">
    <meta property="og:image"
        content="images/blog/is-tms-therapy-covered-by-insurance-intro.png">
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
      "headline": "Who Is a Good Candidate for TMS Therapy?",
      "description": "Wondering if TMS therapy is right for you? Learn the key signs of a good candidate, including treatment-resistant depression and medication side effects.",
      "image": "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376739/25_drzbxc.png",
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
      "datePublished": "2026-01-20",
      "dateModified": "2026-01-20",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blog/who-is-a-good-candidate-for-tms-therapy"
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
                <span class="text-gray-900 font-medium">Who Is a Good Candidate for TMS Therapy?</span>
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
                        January 20, 2026
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
                    Who Is a Good Candidate for TMS Therapy?
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Are you struggling with depression despite taking medication? improved sleep, mood, and energy might be closer than you think. Learn who benefits most from TMS.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="contact-us.php" class="btn bg-white text-primary hover:bg-gray-100 font-bold px-8 py-3 text-lg">
                        Check Eligibility
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
                                <button class="toc-button" onclick="scrollToSection('signs-candidate')">Signs You Are a Candidate</button>
                                <button class="toc-button" onclick="scrollToSection('trd')">Treatment-Resistant Depression</button>
                                <button class="toc-button" onclick="scrollToSection('med-side-effects')">Medication Side Effects</button>
                                <button class="toc-button" onclick="scrollToSection('not-a-candidate')">Who Is NOT a Candidate?</button>
                                <button class="toc-button" onclick="scrollToSection('contraindications')">Contraindications</button>
                                <button class="toc-button" onclick="scrollToSection('evaluation')">Evaluation Process</button>
                                <button class="toc-button" onclick="scrollToSection('faq')">FAQ</button>
                            </nav>
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <a href="contact-us.php" class="btn w-full bg-primary text-white hover:opacity-90 justify-center">
                                    Am I a Candidate?
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
                    <img src="images/blog/who-is-a-good-candidate-for-tms-therapy-intro.png" 
                        alt="Who is a good candidate for TMS Therapy?"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        <strong>For millions of people living with depression, finding the right treatment is a frustrating journey.</strong> You may have tried multiple antidepressants, attended therapy sessions, and adjusted your lifestyle, yet the heavy fog of depression remains. If this sounds familiar, you might be asking: <em>"Am I a good candidate for TMS therapy?"</em>
                    </p>
                    <p class="mt-4 text-gray-700">
                        Transcranial Magnetic Stimulation (TMS) has emerged as a life-changing solution for <a href="tms-therapy-for-treatment-resistant-depression.php" class="text-primary hover:underline">treatment-resistant depression</a>. It is non-invasive, FDA-approved, and does not require surgery or sedation. But it’s not for everyone. Understanding the criteria for candidacy is the first step toward reclaiming your mental health.
                    </p>
                </div>

                <!-- Section: Signs You Are a Good Candidate -->
                <section id="signs-candidate" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Signs You Are a Good Candidate for TMS</h2>
                    <p class="mb-6">
                        Before starting treatment, a qualified psychiatrist will evaluate your medical history. Generally, you may be an excellent candidate for <a href="tms-therapy.php" class="text-primary hover:underline">TMS Therapy</a> if:
                    </p>
                    
                    <div class="bg-green-50 border border-green-100 rounded-xl p-8 mb-8">
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-green-100 p-1 rounded-full text-green-600">
                                    <i data-lucide="check" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <strong class="text-gray-900">Medications Haven't Worked:</strong> You have tried at least two different antidepressants (from different classes) without significant improvement.
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-green-100 p-1 rounded-full text-green-600">
                                    <i data-lucide="check" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <strong class="text-gray-900">Side Effects are Intolerable:</strong> Medications cause weight gain, sexual dysfunction, insulation, or other side effects that disrupt your quality of life.
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-green-100 p-1 rounded-full text-green-600">
                                    <i data-lucide="check" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <strong class="text-gray-900">Depression Interferes with Daily Life:</strong> Your symptoms prevent you from working, maintaining relationships, or enjoying hobbies.
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-green-100 p-1 rounded-full text-green-600">
                                    <i data-lucide="check" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <strong class="text-gray-900">You Want a Non-Systemic Option:</strong> You prefer a treatment that targets the brain directly rather than affecting the whole body like pills do.
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Section: The Busy Life Factor -->
                <section id="busy-life" class="mb-12 scroll-target">
                    <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-xl">
                        <h3 class="text-xl font-bold text-blue-900 mb-2">The "Busy Life" Factor</h3>
                        <p class="text-blue-800">
                            <strong>Worried about time?</strong> You might be a perfect candidate if you have a busy schedule. Unlike ketamine treatments or ECT, which require recovery time and a driver, TMS sessions take just <strong>19 minutes</strong>. You can drive yourself to your appointment, watch TV during treatment, and head straight back to work or pick up the kids immediately after. No downtime, no grogginess.
                        </p>
                    </div>
                </section>

                <!-- Section: Treatment Resistant Depression -->
                <section id="trd" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Understanding Treatment-Resistant Depression (TRD)</h2>
                    <p class="mb-6">
                        The strongest indicator that you are a candidate for TMS is a diagnosis of <strong>Treatment-Resistant Depression</strong>. This doesn't mean your depression <em>can't</em> be treated; it means standard medications aren't the right tool for your specific brain chemistry.
                    </p>
                    <p class="mb-6">
                        Research shows that after two failed medication trials, the chance of a third medication working drops significantly. At this stage, <a href="is-tms-therapy-covered-by-insurance.php" class="text-primary hover:underline">insurance providers</a> and medical guidelines often recommend TMS as the next appropriate step.
                    </p>
                </section>

                <!-- Section: Side Effects -->
                <section id="med-side-effects" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">For Those Who Cannot Tolerate Antidepressants</h2>
                    <p class="mb-6">
                        Many patients stop taking antidepressants not because they don't want help, but because the "cure" feels worse than the disease. Common medication side effects include:
                    </p>
                    <div class="grid md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                            <strong>Physical:</strong> Weight gain, fatigue, nausea, dry mouth.
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                            <strong>Emotional:</strong> Emotional blunting ("zombie" feeling), anxiety.
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                            <strong>Sexual:</strong> Loss of libido, erectile dysfunction.
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                            <strong>Cognitive:</strong> Brain fog, difficulty concentrating.
                        </div>
                    </div>
                    <p class="mb-6">
                        If these side effects have forced you to discontinue medication, TMS offers a compelling alternative. It is locally active in the brain and does not circulate in the bloodstream, avoiding these systemic issues.
                    </p>
                </section>

                <!-- Section: Comparison Table -->
                <section id="comparison" class="mb-12">
                    <h3 class="text-2xl font-bold text-primary mb-6">TMS vs. Antidepressants: A Quick Breakdown</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="p-4 text-left font-bold text-gray-700">Feature</th>
                                    <th class="p-4 text-left font-bold text-primary">TMS Therapy</th>
                                    <th class="p-4 text-left font-bold text-gray-600">Antidepressants</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr>
                                    <td class="p-4 font-medium text-gray-900">Systemic Side Effects</td>
                                    <td class="p-4 text-gray-900">None (Non-systemic)</td>
                                    <td class="p-4 text-gray-600">Common (Weight gain, fatigue, insomnia)</td>
                                </tr>
                                <tr>
                                    <td class="p-4 font-medium text-gray-900">Treatment Target</td>
                                    <td class="p-4 text-gray-700">Specific Mood Centers</td>
                                    <td class="p-4 text-gray-600">Entire Body/Bloodstream</td>
                                </tr>
                                <tr>
                                    <td class="p-4 font-medium text-gray-900">Cognitive Impact</td>
                                    <td class="p-4 text-gray-900">Improves Clarity/Focus</td>
                                    <td class="p-4 text-gray-600">Can cause "Brain Fog"</td>
                                </tr>
                                <tr>
                                    <td class="p-4 font-medium text-gray-900">Sustainability</td>
                                    <td class="p-4 text-gray-700">Long-term remission possible</td>
                                    <td class="p-4 text-gray-600">Requires daily ongoing use</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-sm text-gray-500 mt-3 italic">*Individual results may vary. Consult withDr. Sunder for personalized medical advice.</p>
                </section>

                <!-- Section: Who is NOT a Candidate -->
                <section id="not-a-candidate" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Who Is NOT a Good Candidate for TMS?</h2>
                    <p class="mb-6">
                        While TMS is extremely safe, it is not suitable for everyone. Because the treatment involves magnetic fields (similar to an MRI), certain physical conditions can be exclusionary.
                    </p>
                    
                    <h3 id="contraindications" class="text-xl font-bold text-gray-900 mb-4">Key Contraindications</h3>
                    <div class="bg-red-50 border border-red-100 rounded-xl p-6 mb-8">
                        <p class="text-red-800 mb-4 font-medium">You may NOT be able to receive TMS if you have:</p>
                        <ul class="list-disc pl-5 space-y-2 text-red-700">
                            <li><strong>Non-removable metal in the head or neck:</strong> This includes aneurysm clips, stents, deep brain stimulators, shrapnel, or metallic implants (cochlear implants).</li>
                            <li><strong>Implanted medical devices:</strong> Pacemakers or medication pumps (depending on location and device type).</li>
                            <li><strong>History of seizures:</strong> Patients with epilepsy or a high risk of seizure may be excluded, as TMS carries a very small risk (less than 0.1%) of inducing a seizure during treatment.</li>
                        </ul>
                        <p class="mt-4 text-sm text-red-600 italic">*Note: Dental fillings and braces are generally safe and acceptable.</p>
                    </div>
                </section>

                <!-- Section: Evaluation -->
                <section id="evaluation" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">The Medical Evaluation: What to Expect</h2>
                    <p class="mb-6">
                        Determining if you are a good candidate starts with a consultation at <a href="palm-springs.php" class="text-primary hover:underline">Karma TMS in Palm Springs</a>. During this visit, we will review:
                    </p>
                    <ol class="list-decimal pl-6 space-y-4 mb-6">
                        <li><strong>Your Diagnosis:</strong> confirming major depressive disorder (or other treatable conditions like OCD).</li>
                        <li><strong>Medication History:</strong> documenting past treatments to satisfy insurance Prior Authorization requirements.</li>
                        <li><strong>Safety Check:</strong> screening for metal implants and seizure history.</li>
                        <li><strong>Treatment Goals:</strong> discussing what you hope to achieve with TMS.</li>
                    </ol>
                    <p class="mb-6">
                        This thorough process ensures that TMS is safe for you and gives you the highest probability of success.
                    </p>
                </section>

                <!-- Section: Imagine Results -->
                <section class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Imagine a Life Without the Fog</h2>
                    <p class="mb-6">
                        Being a "good candidate" isn't just about meeting medical criteria—it's about being ready for change. When TMS works, patients often describe it as a "lifting of the heavy blanket" they’ve lived under for years. 
                    </p>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center p-6 bg-purple-50 rounded-xl border border-purple-100">
                            <div class="inline-flex items-center justify-center w-12 h-12 bg-purple-100 text-primary rounded-full mb-4">
                                <i data-lucide="sun" class="w-6 h-6"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Morning Energy</h4>
                            <p class="text-sm text-gray-600">Waking up feeling rested and ready to face the day, rather than dreading it.</p>
                        </div>
                        <div class="text-center p-6 bg-purple-50 rounded-xl border border-purple-100">
                            <div class="inline-flex items-center justify-center w-12 h-12 bg-purple-100 text-primary rounded-full mb-4">
                                <i data-lucide="smile" class="w-6 h-6"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Real Laughter</h4>
                            <p class="text-sm text-gray-600">Feeling genuine joy and connection with loved ones again.</p>
                        </div>
                        <div class="text-center p-6 bg-purple-50 rounded-xl border border-purple-100">
                            <div class="inline-flex items-center justify-center w-12 h-12 bg-purple-100 text-primary rounded-full mb-4">
                                <i data-lucide="brain" class="w-6 h-6"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Mental Clarity</h4>
                            <p class="text-sm text-gray-600">Sharper focus at work and the ability to complete tasks without overwhelming fatigue.</p>
                        </div>
                    </div>
                </section>

                <!-- Final Thoughts -->
                <section id="final-thoughts" class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Final Thoughts</h2>
                    <p class="mb-4">
                        If you are feeling stuck in your recovery, know that you are not out of options. Being a "good candidate" simply means you are a person who deserves a treatment that actually works. TMS has helped thousands of patients find remission when medications failed.
                    </p>
                    <p class="text-gray-700 italic">
                        Ready to find out if TMS is right for you? Contact <a href="contact-us.php" class="text-primary hover:underline font-bold">Karma TMS</a> today to schedule your comprehensive evaluation in Palm Springs.
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
                                <span>Can I have TMS if I have anxiety?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes! In fact, many patients with depression also suffer from anxiety (anxious depression), and the FDA has cleared specific TMS protocols for anxiety symptoms. It is often an excellent option for comorbid conditions.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Is there an age limit for TMS therapy?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    TMS is FDA-cleared for adults 18 and older. However, it is occasionally used off-label for adolescents in specific cases under strict medical supervision. There is no upper age limit, and it is safe and effective for elderly patients.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Do I have to stop taking my medication?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Not necessarily. Many patients continue their medication during TMS. Your psychiatrist will determine the best plan. Some patients are able to reduce or taper off medications <em>after</em> achieving remission with TMS.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>I have dental fillings. Am I a candidate?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes. Standard dental fillings, braces, and retainers are generally safe and do not prevent you from receiving TMS therapy, as they are not ferromagnetic or are far enough from the magnetic coil.
                                </div>
                            </div>
                        </div>

                         <!-- Q5 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Is TMS safe if I am pregnant?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    TMS is often considered a safer alternative to medications during pregnancy because it is non-systemic (doesn't enter the bloodstream). However, you should always consult with your OB-GYN and psychiatrist to weigh the benefits and risks.
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Take the First Step
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        A better life is possible. Contact us to find out if you are a candidate for TMS therapy today.
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
