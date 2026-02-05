<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is TMS Therapy Covered by Insurance? | Karma TMS Blog</title>
    <meta name="description"
        content="Learn whether depression qualifies as a disability under the ADA and Social Security, and discover treatment options like TMS.">
    <meta name="keywords"
        content="depression disability, ADA depression, social security disability depression, TMS therapy, mental health rights">
    <link rel="canonical" href="is-depression-a-disability.php">
    <meta property="og:title" content="Is Depression a Disability? | Karma TMS Blog">
    <meta property="og:description"
        content="Learn whether depression qualifies as a disability under the ADA and Social Security, and discover treatment options like TMS.">
    <meta property="og:image"
        content="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376739/25_drzbxc.png">
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
      "headline": "Is Depression a Disability?",
      "description": "Learn whether depression qualifies as a disability under the ADA and Social Security, and discover treatment options like TMS.",
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
      "datePublished": "2025-05-20",
      "dateModified": "2025-05-20",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blog/is-depression-a-disability"
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
                <span class="text-gray-900 font-medium">Is TMS Therapy Covered by Insurance?</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <!-- Hero Section -->
    <section class="relative bg-hero-gradient text-white py-20 overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="flex flex-wrap justify-center gap-4 mb-6 text-sm">
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        January 01, 2026
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
                    Is TMS Therapy Covered by Insurance? A Complete Coverage Guide
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Is TMS therapy covered by insurance? Learn eligibility, approval criteria, costs, and coverage details to access effective TMS treatment.
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
                                <button class="toc-button" onclick="scrollToSection('understanding-tms')">Understanding TMS</button>
                                <button class="toc-button" onclick="scrollToSection('coverage-us')">US Coverage</button>
                                <button class="toc-button" onclick="scrollToSection('insurance-depression')">Cover for Depression</button>
                                <button class="toc-button" onclick="scrollToSection('criteria')">Medical Requirements</button>
                                <button class="toc-button" onclick="scrollToSection('approval-process')">Approval Process</button>
                                <button class="toc-button" onclick="scrollToSection('costs')">Out-of-Pocket Costs</button>
                                <button class="toc-button" onclick="scrollToSection('denials')">Handling Denials</button>
                                <button class="toc-button" onclick="scrollToSection('other-conditions')">Other Conditions</button>
                                <button class="toc-button" onclick="scrollToSection('provider-experience')">Provider Experience</button>
                                <button class="toc-button" onclick="scrollToSection('is-it-worth-it')">Is It Worth It?</button>
                            </nav>
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <a href="contact-us.php" class="btn w-full bg-primary text-white hover:opacity-90 justify-center">
                                    Verify Insurance
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
                    <img src="images/blog/is-tms-therapy-covered-by-insurance-intro.png" 
                        alt="Is TMS Therapy Covered by Insurance? Claim form on clipboard"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        <strong>"Is TMS therapy covered by insurance?"</strong> is one of the most searched and most important questions for people considering advanced mental health treatment. When someone has lived with depression or other mental health conditions for years and traditional medications have not helped enough, Transcranial Magnetic Stimulation can feel like a real source of hope. At the same time, uncertainty about cost and insurance approval often becomes a major barrier. For patients exploring <a href="palm-springs.php" class="text-primary hover:underline">TMS Therapy in Palm Springs</a>, understanding insurance coverage clearly and realistically is the first step toward confident decision making.
                    </p>
                    <p class="mt-4 text-gray-700">
                        This in-depth guide is written to help patients and families understand how insurance coverage for TMS therapy really works in the United States, what insurance companies look for, how approvals are obtained, and how to improve the chances of coverage while staying fully aligned with current Google content quality and medical transparency guidelines.
                    </p>
                </div>

                <!-- Section: Understanding TMS -->
                <section id="understanding-tms" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Understanding TMS Therapy and Why Insurance Coverage Matters</h2>
                    <p class="mb-6">
                        Transcranial Magnetic Stimulation, commonly called <a href="tms-therapy.php" class="text-primary hover:underline">TMS therapy</a>, is a non-invasive treatment that uses focused magnetic pulses to stimulate areas of the brain involved in mood regulation. It is most often recommended for people with <a href="depression.php" class="text-primary hover:underline">major depressive disorder</a> who have not experienced adequate relief from antidepressant medications or psychotherapy.
                    </p>
                    <p class="mb-6">
                        TMS does not involve surgery, anesthesia, or medication changes. Patients remain awake during sessions and typically return to normal activities immediately afterward. However, treatment is delivered over multiple sessions, usually five days a week for several weeks. Because of this structure, the total cost of care can be significant, which makes mental health insurance coverage for TMS a critical concern for most patients.
                    </p>
                </section>

                <!-- Section: Insurance Coverage in US -->
                <section id="coverage-us" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Is TMS Therapy Covered by Insurance in the United States</h2>
                    <p class="mb-6">
                        In many cases, yes, TMS therapy is covered by insurance in the United States. Over the past decade, major insurance providers have increasingly recognized TMS as a medically necessary treatment for treatment resistant depression. As clinical evidence has grown and professional guidelines have evolved, insurance policies have expanded to include TMS under specific conditions.
                    </p>
                    <p class="mb-6">
                        Most private insurance plans, including employer sponsored policies, now offer coverage for TMS therapy when medical criteria are met. Medicare also provides coverage for TMS therapy for major depressive disorder. Medicaid coverage varies by state and by individual plan, which means eligibility depends on local regulations and benefit structures.
                    </p>
                    <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-6">
                        <p class="text-yellow-800 text-sm font-medium">
                            <i data-lucide="alert-circle" class="w-4 h-4 inline mr-1"></i>
                            It is important to understand that coverage decisions are based on your individual insurance plan, not just the name of the insurance company. Two patients with the same insurer may receive different decisions depending on their policy details.
                        </p>
                    </div>
                </section>

                <!-- Section: Does Insurance Cover for Depression -->
                <section id="insurance-depression" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Does Insurance Cover TMS Therapy for Depression</h2>
                    <p class="mb-6">
                        When patients ask does insurance cover TMS therapy, the strongest and most consistent answer applies to major depressive disorder. Depression is the condition with the most extensive research support for TMS and is the primary diagnosis approved by insurers.
                    </p>
                    <div class="bg-white border rounded-xl p-6 shadow-sm">
                        <p class="mb-4">
                            Insurance companies typically require documentation showing that depression has not adequately responded to standard treatments. This usually means that:
                        </p>
                        <ul class="list-disc pl-6 space-y-2 text-gray-700">
                            <li>Several antidepressant medications were tried at appropriate doses and durations without sufficient improvement.</li>
                            <li>In many cases, insurers also expect documentation of psychotherapy, such as cognitive behavioral therapy.</li>
                        </ul>
                    </div>
                    <p class="mt-6 text-gray-700">
                        The goal of these requirements is to confirm that TMS is being used appropriately as a next step when first line treatments have not worked.
                    </p>
                </section>

                <!-- Section: Criteria -->
                <section id="criteria" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Insurance Criteria and Medical Documentation Requirements</h2>
                    <p class="mb-6">
                        Insurance coverage for TMS therapy is based on clearly defined clinical criteria. While the exact details vary slightly between insurers, the overall structure is similar across most plans.
                    </p>
                    <p class="mb-6">
                        Patients usually must have a confirmed diagnosis of major depressive disorder. The medical record must document symptom severity, duration, and functional impairment. A detailed medication history is required, including the names of antidepressants tried, dosages, treatment duration, and reasons for discontinuation.
                    </p>
                    <p class="mb-6">
                        Some insurance plans also require evidence that psychotherapy was attempted without sufficient benefit. All of this information must be clearly documented during a comprehensive psychiatric evaluation before a pre authorization request is submitted.
                    </p>
                </section>

                <!-- Section: Approval Process -->
                <section id="approval-process" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">How the Insurance Approval Process Works</h2>
                    <p class="mb-6">
                        The insurance approval process for TMS therapy begins with a thorough clinical assessment. During this evaluation, the psychiatrist reviews diagnosis, treatment history, symptom patterns, and current functioning. This assessment forms the foundation of the insurance request.
                    </p>
                    <p class="mb-6">
                        After the evaluation, the clinic submits a pre authorization request to the insurance company. This request includes clinical notes, diagnostic codes, medication history, and a medical necessity statement explaining why TMS therapy is appropriate.
                    </p>
                    <p class="mb-6">
                        Insurance companies then review the request. This process may take several days or a few weeks. Sometimes additional information is requested before a final decision is made. Clinics experienced in TMS therapy understand how to respond efficiently to these requests to avoid unnecessary delays.
                    </p>
                </section>

                <!-- Section: Costs -->
                <section id="costs" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What Out of Pocket Costs May Still Apply</h2>
                    <p class="mb-6">
                        Even when insurance covers TMS therapy, patients may still have some out of pocket costs. These costs depend on the specific structure of the insurance plan.
                    </p>
                    <div class="grid md:grid-cols-3 gap-6 mb-6">
                        <div class="bg-purple-50 border border-purple-100 px-6 rounded-xl text-center" style="padding-top: 60px; padding-bottom: 30px;">
                            <h4 class="font-bold text-gray-800 mb-2">Deductibles</h4>
                            <p class="text-sm text-gray-600">Must be met before coverage begins.</p>
                        </div>
                        <div class="bg-purple-50 border border-purple-100 px-6 rounded-xl text-center" style="padding-top: 60px; padding-bottom: 30px;">
                            <h4 class="font-bold text-gray-800 mb-2">Copayments</h4>
                            <p class="text-sm text-gray-600">Fixed fee for each session.</p>
                        </div>
                        <div class="bg-purple-50 border border-purple-100 px-6 rounded-xl text-center" style="padding-top: 60px; padding-bottom: 30px;">
                            <h4 class="font-bold text-gray-800 mb-2">Coinsurance</h4>
                            <p class="text-sm text-gray-600">Patient pays a percentage of the cost.</p>
                        </div>
                    </div>
                    <p class="text-gray-700">
                        Because TMS involves multiple sessions, understanding these details in advance is essential for financial planning. A transparent explanation of benefits before starting treatment helps patients feel informed and reduces anxiety about unexpected expenses.
                    </p>
                </section>

                <!-- Section: Denials -->
                <section id="denials" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What to Do If Insurance Denies Coverage</h2>
                    <p class="mb-6">
                        An insurance denial does not always mean that TMS therapy is no longer an option. Many initial denials occur because of missing information, incomplete documentation, or administrative errors.
                    </p>
                    <p class="mb-6">
                        In these cases, an appeal can be submitted with additional clinical detail. Appeals often include more comprehensive treatment histories, standardized symptom rating scales, and letters of the treating psychiatrist explaining medical necessity.
                    </p>
                    <p class="mb-6">
                        Another option is a peer to peer review. During this process, the treating clinician speaks directly with the insurance company’s medical reviewer to discuss the case. When supported by strong documentation, peer reviews can lead to overturned denials.
                    </p>
                </section>

                <!-- Section: Other Conditions -->
                <section id="other-conditions" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Mental Health Insurance Coverage for TMS Beyond Depression</h2>
                    <p class="mb-6">
                        While depression is the most commonly covered condition, patients often ask about mental health insurance coverage for TMS in other diagnoses. Coverage for conditions such as <a href="ocd.php" class="text-primary hover:underline">obsessive compulsive disorder</a>, <a href="ptsd.php" class="text-primary hover:underline">post traumatic stress disorder</a>, and <a href="bipolar.php" class="text-primary hover:underline">bipolar depression</a> may be available in some cases, but it is less consistent.
                    </p>
                    <p class="mb-6">
                        Approval for these conditions depends on FDA clearance, insurer specific policies, and the strength of clinical justification. Because coverage rules are more complex, careful insurance verification is especially important when TMS is being considered for diagnoses other than depression.
                    </p>
                </section>

                <!-- Section: Provider Experience -->
                <section id="provider-experience" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Why Provider Experience Matters for Insurance Approval</h2>
                    <p class="mb-6">
                        Insurance approval for TMS therapy depends not only on medical criteria but also on how accurately and clearly information is submitted. Clinics with experience in TMS therapy understand insurer expectations, documentation standards, and appeal processes.
                    </p>
                    <div class="bg-blue-50 border border-blue-100 rounded-xl p-6">
                        <p class="text-blue-900 font-medium">
                            An experienced provider ensures that records align with insurance guidelines while remaining truthful and patient centered. This administrative expertise can significantly improve approval timelines and reduce frustration for patients.
                        </p>
                    </div>
                </section>

                <!-- Section: Is It Worth It -->
                <section id="is-it-worth-it" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Is TMS Therapy Worth It When Insurance Covers It</h2>
                    <p class="mb-6">
                        For many patients, insurance coverage makes TMS therapy accessible and worthwhile. Compared with years of medication trials, ongoing side effects, and reduced quality of life, TMS offers a non medication option supported by growing clinical evidence.
                    </p>
                    <p class="mb-6">
                        Patients who respond well often describe improvements in mood, motivation, focus, sleep, and daily functioning. While results vary from person to person, insurance coverage allows eligible patients to explore TMS therapy without carrying the full financial burden alone.
                    </p>
                </section>

                <!-- Final Thoughts -->
                <section id="final-thoughts" class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Final Thoughts</h2>
                    <p class="mb-4">
                        Is TMS therapy covered by insurance is a question that deserves a clear and honest answer. For many patients, particularly those with major depressive disorder that has not responded to standard treatments, insurance coverage is available and achievable with proper evaluation and documentation. Understanding the process, requirements, and potential costs helps patients move forward with confidence.
                    </p>
                    <p class="text-gray-700 italic">
                        If you are considering <strong>TMS Therapy in Palm Springs</strong>, <a href="index.php" class="text-primary hover:underline font-bold">Karma TMS</a>, the best next step is a comprehensive psychiatric consultation and insurance verification. With the right guidance, many patients find that TMS therapy is not only clinically meaningful but also financially accessible through their insurance plan.
                    </p>
                </section>

                <!-- Author Box -->
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
                <section id="faqs" class="mb-12 scroll-target">
                <!-- FAQ Section -->
                <section class="mb-12" id="faq">
                    <h2 class="text-3xl font-bold text-primary mb-8">
                        Frequently Asked Questions
                    </h2>

                    <div class="space-y-4">
                        
                        <!-- Q1 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Does insurance cover TMS therapy?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes, most major insurance plans and Medicare cover TMS therapy for the treatment of Major Depressive Disorder (MDD) when standard medications have not provided adequate relief.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Which insurance companies cover TMS?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Common insurers covering TMS include Aetna, Cigna, Blue Cross Blue Shield (Anthem, Blue Shield, etc.), UnitedHealthcare, TriCare, and Medicare. Coverage depends on your specific plan benefits.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Does Medicare cover TMS therapy?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Yes, Medicare covers TMS therapy for patients with Major Depressive Disorder who meet specific medical necessity criteria, such as having tried antidepressant medications without success.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>What if my insurance denies coverage for TMS?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    If coverage is denied, you have the right to appeal. Your TMS provider can help submit additional documentation, letters of medical necessity, or request a peer-to-peer review with the insurance company's medical director to overturn the decision.
                                </div>
                            </div>
                        </div>

                         <!-- Q5 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>How much does TMS cost with insurance?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Costs vary by plan. You may be responsible for a deductible, copayment (per session), or coinsurance (percentage of the cost). It is best to verify your specific benefits before starting treatment.
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleBlogFAQ(this)">
                                <span>Do I need a referral for TMS therapy coverage?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    Some insurance plans require a referral from your primary care physician or treating psychiatrist, usually those with HMO plans. PPO plans typically do not require a referral, but a prior authorization is almost always needed.
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Get Help Today
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        Don't let depression control your life. Contact us to learn about advanced treatment options.
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
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376733/15_ym6n6b.png"
                                alt="How Successful is TMS Treatment?" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-gray-900 transition-colors">
                                    <a href="how-successful-is-tms-treatment.php" class="block text-black" style="color: black !important;">How Successful is TMS Treatment?</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Dive deeper into the clinical outcomes and success rates of TMS.</p>
                                <a href="how-successful-is-tms-treatment.php" class="text-primary font-medium text-sm inline-flex items-center gap-1 hover:underline whitespace-nowrap flex-nowrap">
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
