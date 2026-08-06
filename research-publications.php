<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research & Publications | Karma TMS Clinical Studies & Global Impact</title>
    <meta name="description"
        content="Explore Karma TMS's peer-reviewed research, clinical publications, honors, and global humanitarian work led by Dr. Keerthy Sunder.">

    <?php include 'includes/header-links.php'; ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            corePlugins: {
                preflight: false,
            },
            theme: {
                extend: {
                    colors: {
                        brand: {
                            purple: '#572670',
                            purpleHover: '#3a174d',
                            orange: '#ea580c',
                            orangeHover: '#c2410c',
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <style>
        .rp-filter-badge {
            cursor: pointer;
            transition: all 0.2s ease;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
            border: 1px solid #e5e7eb;
            background-color: white;
        }

        .rp-filter-badge:hover {
            background-color: rgba(87, 38, 112, 0.08);
        }

        .rp-filter-badge.active {
            background-color: #572670;
            color: white;
            border-color: #572670;
        }

        .rp-pub-card,
        .rp-impact-card,
        .rp-mission-card {
            transition: all 0.3s ease;
        }

        .rp-pub-card:hover,
        .rp-impact-card:hover,
        .rp-mission-card:hover {
            box-shadow: 0 14px 30px rgba(87, 38, 112, 0.12);
            transform: translateY(-2px);
        }

        .rp-category-chip {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            background: rgba(87, 38, 112, 0.1);
            color: #572670;
        }

        .rp-year-chip {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
            border: 1px solid #e5e7eb;
            color: #4b5563;
        }

        .rp-award-hero {
            background: linear-gradient(135deg, #572670 0%, #8B5CF6 100%);
            border-radius: 1.25rem;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(87, 38, 112, 0.25);
        }

        .rp-award-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            min-height: 320px;
        }

        .rp-stat-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.15);
            color: white;
            padding: 0.4rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
            backdrop-filter: blur(6px);
        }

        .rp-mission-card {
            background: linear-gradient(to bottom right, white, #faf5ff);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .rp-mission-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 0.75rem;
            margin-bottom: 1.25rem;
        }

        .rp-stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: #572670;
            line-height: 1;
        }

        .rp-foundation-banner {
            background: linear-gradient(135deg, #572670 0%, #3a174d 100%);
            border-radius: 1.25rem;
            color: white;
            padding: 3rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .rp-foundation-banner::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 85% 15%, rgba(139, 92, 246, 0.35), transparent 55%);
            pointer-events: none;
        }

        .rp-foundation-logo {
            background: white;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            display: inline-block;
        }

        .rp-foundation-logo img {
            height: 48px;
            width: auto;
            display: block;
        }

        .rp-author-line {
            font-size: 0.875rem;
            color: #4b5563;
            margin-bottom: 0.25rem;
        }

        .rp-journal-line {
            font-size: 0.875rem;
            font-weight: 600;
            color: #572670;
            margin-bottom: 0.75rem;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-4 text-white"
        style="background: linear-gradient(to bottom right, #572670, rgba(87, 38, 112, 0.85));">
        <div class="container mx-auto px-4 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1 mb-5 rounded-full"
                style="background: rgba(255,255,255,0.14); backdrop-filter: blur(6px);">
                <i data-lucide="microscope" class="w-4 h-4"></i>
                <span class="text-sm font-medium">Our Research</span>
            </div>
            <h1 class="text-4xl lg:text-6xl font-bold mb-4">
                Research &amp; Publications
            </h1>
            <p class="text-xl max-w-3xl mx-auto" style="color: rgba(255, 255, 255, 0.9);">
                Explore our latest clinical findings, peer-reviewed publications, and contributions to the field of
                psychiatric medicine through innovation and global leadership.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-3 mt-8">
                <a href="#publications" class="bm-hero-btn" style="background: white; color: #572670;">
                    <i data-lucide="book-open" class="w-4 h-4 mr-2"></i>
                    Explore Research
                </a>
                <a href="#global-impact" class="bm-outline-btn"
                    style="border-color: white; color: white;">
                    <i data-lucide="globe-2" class="w-4 h-4 mr-2"></i>
                    Global Impact
                </a>
            </div>
        </div>
    </section>

    <!-- Honors & Recognition Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3">
                    Honors &amp; Recognition
                </h2>
                <p class="text-lg text-gray-600">
                    Celebrating excellence in clinical leadership and advocacy.
                </p>
            </div>

            <div class="rp-award-hero grid md:grid-cols-2 gap-0 max-w-6xl mx-auto">
                <div class="p-0">
                    <img src="assets/gallery/research/Dr_sunder_Award_05.webp"
                        alt="Dr. Keerthy Sunder receiving the Golden Axon Leadership Award"
                        class="rp-award-img">
                </div>
                <div class="p-8 md:p-10 text-white flex flex-col justify-center">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="rp-stat-pill"><i data-lucide="award" class="w-4 h-4"></i> 2023</span>
                        <span class="rp-stat-pill"><i data-lucide="brain" class="w-4 h-4"></i> Neuroscience</span>
                        <span class="rp-stat-pill"><i data-lucide="globe" class="w-4 h-4"></i> Global Impact</span>
                    </div>
                    <h3 class="text-2xl lg:text-3xl font-bold mb-3">
                        Golden Axon Leadership Award
                    </h3>
                    <p class="text-base mb-3" style="color: rgba(255,255,255,0.92);">
                        Society for Brain Mapping and Therapeutics (SBMT Gala)
                    </p>
                    <p class="leading-relaxed" style="color: rgba(255,255,255,0.85);">
                        Presented to Dr. Keerthy Sunder, founder of Karma TMS, this prestigious accolade recognizes
                        visionaries who have made significant contributions to raising awareness and funding for
                        neurological disorders.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Impact Areas -->
    <section id="global-impact" class="py-20" style="background-color: #faf5ff;">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3">
                    Global Impact Areas
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Karma TMS advances mental health on three interconnected fronts — science, culture, and policy.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <div class="rp-impact-card bm-benefit-card p-8 text-center">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                        style="background-color: #572670;">
                        <i data-lucide="flask-conical" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Science &amp; Innovation</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Pioneering advancements in TMS technology, EEG-guided PrTMS protocols, and personalized
                        psychiatric treatment for depression, PTSD, and concussion.
                    </p>
                </div>

                <div class="rp-impact-card bm-benefit-card p-8 text-center">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                        style="background-color: #572670;">
                        <i data-lucide="palette" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Arts &amp; Culture</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Supporting mental health awareness through partnerships with visual and performing arts
                        organizations that destigmatize care and celebrate recovery.
                    </p>
                </div>

                <div class="rp-impact-card bm-benefit-card p-8 text-center">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                        style="background-color: #572670;">
                        <i data-lucide="landmark" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Policy &amp; Advocacy</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Active leadership in global summits — including the G20-affiliated N20 Neuroscience Summit —
                        shaping the future of mental healthcare policy.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Published Research -->
    <section id="publications" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3">
                    Published Research
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Advancing the field of psychiatry through rigorous peer-reviewed studies, clinical trials, and
                    academic contributions.
                </p>
            </div>

            <!-- PubMed Bibliography Card -->
            <div class="bm-benefit-card overflow-hidden shadow-xl mb-12 max-w-5xl mx-auto p-0">
                <div class="p-6 text-white flex flex-col md:flex-row md:items-center md:justify-between gap-4"
                    style="background-color: #572670;">
                    <div>
                        <h3 class="text-xl font-bold flex items-center gap-2">
                            <i data-lucide="library" class="w-5 h-5"></i>
                            Full Bibliography on PubMed
                        </h3>
                        <p class="text-sm mt-1" style="color: rgba(255,255,255,0.85);">
                            24+ peer-reviewed publications authored or co-authored by Dr. Keerthy Sunder.
                        </p>
                    </div>
                    <a href="https://pubmed.ncbi.nlm.nih.gov/?term=Sunder+K" target="_blank" rel="noopener noreferrer"
                        class="bm-hero-btn" style="background: white; color: #572670;">
                        <i data-lucide="external-link" class="w-4 h-4 mr-2"></i>
                        View Full Bibliography
                    </a>
                </div>
            </div>

            <!-- Publications Timeline -->
            <div class="max-w-4xl mx-auto space-y-12 text-left">
<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-purple ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors">
                                    Spectral EEG-Guided Adaptive Neuromodulation for Age-Related Cognitive Changes: A
                                    Longitudinal Case Report
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Feb 2026</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-purple uppercase tracking-wider bg-brand-purple/5 px-2 py-0.5 rounded">Frontiers
                                    in Medical Case Reports</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Mahajan Y, <strong class="text-gray-900">Sunder
                                        K</strong>, et al.</span>
                                <span class="text-gray-500">| DOI: 10.47746/FMCR.2026.7103</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Explores functional, affective, sleep, and quality-of-life outcomes following
                                EEG-spectra-guided PrTMS in a 73-year-old patient experiencing age-related cognitive
                                changes, demonstrating substantial improvements in perceived cognitive function,
                                mood, anxiety, and sleep.
                            </p>
                            <a href="https://dx.doi.org/10.47746/FMCR.2026.7103" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-orange ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-orange transition-colors">
                                    rTMS for Recurrent Major Depressive Disorder and Generalized Anxiety Disorder
                                    Comorbid with Atrial Fibrillation: A Case Report
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Feb 2026</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-orange uppercase tracking-wider bg-brand-orange/5 px-2 py-0.5 rounded">Frontiers
                                    in Psychiatry</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Reddy V, Frutkin N, Singh A, <strong
                                        class="text-gray-900">Sunder K</strong>, et al.</span>
                                <span class="text-gray-500">| DOI: 10.3389/fpsyt.2026.1719274</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Examines rTMS treatment of recurrent MDD and GAD in a patient with atrial
                                fibrillation, demonstrating a 55% reduction in PHQ-9 scores and 22.2% reduction in
                                GAD-7 scores, marking the first study demonstrating safety and efficacy of figure-8
                                coil rTMS at 10 Hz in MDD comorbid with AF.
                            </p>
                            <a href="https://doi.org/10.3389/fpsyt.2026.1719274" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-blue-600 ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-blue-600 transition-colors">
                                    Maintenance Transcranial Photobiomodulation Following an Acute rTMS Course for
                                    Recurrent Major Depressive Disorder and Generalized Anxiety Disorder: A Case
                                    Series
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Jan 2026</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-blue-600 uppercase tracking-wider bg-blue-50 px-2 py-0.5 rounded">Acta
                                    Scientific Neurology</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Odron M, Reddy V, Mohankumar K, <strong
                                        class="text-gray-900">Sunder K</strong>, et al.</span>
                                <span class="text-gray-500">| DOI: 10.31080/ASNE.2026.09.0893</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Underscores the feasibility of transcranial photobiomodulation (tPBM) as a
                                maintenance strategy following an acute rTMS course for treatment-resistant MDD and
                                GAD, with all three patients sustaining clinical response over approximately 6 months
                                post-rTMS.
                            </p>
                            <a href="https://dx.doi.org/10.31080/ASNE.2026.09.0893" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-purple ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors">
                                    rTMS for Recurrent Major Depressive Disorder and Generalized Anxiety Disorder
                                    Comorbid with Thalamic Pain Syndrome: A Case Report
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Nov 2025</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-purple uppercase tracking-wider bg-brand-purple/5 px-2 py-0.5 rounded">EC
                                    Clinical and Medical Case Reports</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Reddy V, McDaniel H, Katta A, <strong
                                        class="text-gray-900">Sunder K</strong>, et al.</span>
                                <span class="text-gray-500">| DOI: 10.31080/ECMCR.2025.08.1033</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Examines rTMS for recurrent MDD and GAD in a patient with Thalamic Pain Syndrome,
                                achieving a 95.5% reduction in PHQ-9 scores and 88.2% reduction in GAD-7 scores,
                                with notable improvement in neuropathic pain symptoms and quality of life.
                            </p>
                            <a href="https://dx.doi.org/10.31080/ECMCR.2025.08.1033" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-orange ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-orange transition-colors">
                                    rTMS for Recurrent Major Depressive Disorder and Generalized Anxiety Disorder
                                    Comorbid with Heart Failure, Renal Disease, Type 2 Diabetes, and HIV: A Case
                                    Report
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Jun 2025</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-orange uppercase tracking-wider bg-brand-orange/5 px-2 py-0.5 rounded">EC
                                    Clinical and Medical Case Reports</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Odron M, Mohankumar K, Mahajan S, <strong
                                        class="text-gray-900">Sunder K</strong>, et al.</span>
                                <span class="text-gray-500">| DOI: 10.31080/ECMCR.2025.08.0857</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Explores rTMS therapeutic outcomes in a patient with recurrent MDD and GAD comorbid
                                with multiple co-occurring systemic diseases—heart failure, renal disease, type 2
                                diabetes, and HIV—achieving more than 50% symptom reduction by week 5 and more than
                                80% improvement from week 6 onward.
                            </p>
                            <a href="https://dx.doi.org/10.31080/ECMCR.2025.08.0857" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-gray-600 ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-gray-600 transition-colors">
                                    Personalized rTMS in Pediatric Patients with Autism: A Case Series Exploring
                                    Therapeutic Outcomes
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Mar 2025</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-gray-500 uppercase tracking-wider bg-gray-100 px-2 py-0.5 rounded">EC
                                    Neurology</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Mohankumar K, Sanjay L, Kumar SK, <strong
                                        class="text-gray-900">Sunder K</strong>, et al.</span>
                                <span class="text-gray-500">| DOI: 10.31080/ECNE.2025.17.0170</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Evaluates PrTMS therapeutic outcomes in three pediatric patients with autism
                                spectrum disorder over six weeks, showing an average reduction of 7.5 points in CARS
                                scores and 9-point reduction in ADHD symptoms as measured by the NICHQ Vanderbilt
                                Assessment Scale.
                            </p>
                            <a href="https://dx.doi.org/10.31080/ECNE.2025.17.0170" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-red-500 ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-red-500 transition-colors">
                                    Personalized Repetitive Transcranial Magnetic Stimulation (PrTMS) Coupled with
                                    Transcranial Photobiomodulation (tPBM) For Co-Occurring Traumatic Brain Injury
                                    (TBI) and Post-Traumatic Stress Disorder (PTSD)
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Feb 2025</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-red-500 uppercase tracking-wider bg-red-50 px-2 py-0.5 rounded">Acta
                                    Scientific Neurology</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Mahajan S, Bodahanapati A, Katta A, <strong
                                        class="text-gray-900">Sunder K</strong>, et al.</span>
                                <span class="text-gray-500">| DOI: 10.31080/ASNE.2025.08.0809</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Provides evidence demonstrating the beneficial effects of PrTMS coupled with tPBM
                                in treating co-occurring TBI and PTSD in a 28-year-old male, achieving a 64.29%
                                reduction in GAD-7, 50% decrease in PHQ-9, 74.07% reduction in NSI, and 68.63%
                                decrease in PCL-5 scores.
                            </p>
                            <a href="https://dx.doi.org/10.31080/ASNE.2025.08.0809" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-purple ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors">
                                    EEG-Spectra-Guided Personalized rTMS in PTSD with Co-occurring Psychiatric
                                    Disorders: A Case Series
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Jan 2025</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-purple uppercase tracking-wider bg-brand-purple/5 px-2 py-0.5 rounded">Acta
                                    Scientific Neurology</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Mohankumar K, Karthikeya S, Mahajan S, <strong
                                        class="text-gray-900">Sunder K</strong>, et al.</span>
                                <span class="text-gray-500">| PMID: 39581107</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Explores therapeutic outcomes of PrTMS in two PTSD patients with co-occurring
                                psychiatric disorders, using spectral EEG-guided alpha brainwave optimization. PCL-5
                                scores showed an average reduction of 20.5 points by treatment midpoint, while GAD-7
                                and PHQ-9 decreased by 7 and 8.5 points, respectively.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/39581107/" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-blue-600 ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-blue-600 transition-colors">
                                    Pilot Study of Personalized Transcranial Magnetic Stimulation with Spectral
                                    Electroencephalogram Analyses for Assessing and Treating Persons with Autism
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Aug 2024</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-blue-600 uppercase tracking-wider bg-blue-50 px-2 py-0.5 rounded">Journal
                                    of Personalized Medicine</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Makale MT, Nybo C, Blum K, Dennen CA, Elman I,
                                    Murphy KT, <strong class="text-gray-900">Sunder K</strong>.</span>
                                <span class="text-gray-500">| DOI: 10.3390/jpm14080857</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Open-label pilot study of PrTMS in 123 ABA-treated autism spectrum condition
                                persons, demonstrating that 44% of subjects had ASC scale scores reduced below
                                diagnostic cutoffs, with spectral EEG regression flattening implying a more balanced
                                E/I ratio.
                            </p>
                            <a href="https://doi.org/10.3390/jpm14080857" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-purple ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors">
                                    Dopamine Dysregulation in Reward and Autism Spectrum Disorder
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Jul 2024</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-purple uppercase tracking-wider bg-brand-purple/5 px-2 py-0.5 rounded">Brain
                                    Sciences</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Blum K, Bowirrat A, <strong class="text-gray-900">Sunder
                                        K</strong>, Thanos PK, et al.</span>
                                <span class="text-gray-500">| DOI: 10.3390/brainsci14070733</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Comprehensive review of dopamine dysregulation in autism spectrum disorder,
                                summarizing genetic and epigenetic alterations, disrupted mesolimbic reward pathways,
                                and proposing a multi-level framework organizing ASD pathogenesis from genetic
                                changes through to neurocognitive and social behavioral manifestations.
                            </p>
                            <a href="https://doi.org/10.3390/brainsci14070733" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-orange ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-orange transition-colors">
                                    Addiction and Reward Deficiency Syndrome (RDS): A Gene-Based Therapeutic Strategy?
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Nov 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-orange uppercase tracking-wider bg-brand-orange/5 px-2 py-0.5 rounded">Addiction
                                    Medicine</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Bowirrat A, <strong class="text-gray-900">Sunder
                                        K</strong>, et al.</span>
                                <span class="text-gray-500">| PMID: 38050640</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Exploring gene-based therapeutic strategies for Reward Deficiency Syndrome and its
                                implication in addiction treatment, proposing new pathways for intervention.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/38050640/" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-blue-600 ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-blue-600 transition-colors">
                                    Genetic Addiction Risk Score (GARS): Clinical Utility in Reward Deficiency Syndrome
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Sep 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-blue-600 uppercase tracking-wider bg-blue-50 px-2 py-0.5 rounded">Medical
                                    Archives</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Blum K, <strong class="text-gray-900">Sunder
                                        K</strong>, et al.</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Analyzing the clinical utility of GARS in diagnosing and treating Reward Deficiency
                                Syndrome, offering a precision medicine approach to improved patient care.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/37885438/" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-purple ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors">
                                    Preliminary Observations of Personalized Repetitive Magnetic Stimulation (PrTMS)
                                    Guided by EEG Spectra for Concussion
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Aug 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-purple uppercase tracking-wider bg-brand-purple/5 px-2 py-0.5 rounded">Brain
                                    Sciences</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Makale MT, <strong class="text-gray-900">Sunder
                                        K</strong>, et al.</span>
                                <span class="text-gray-500">| PMID: 37626535</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                A comprehensive study on the efficacy of personalized rTMS protocols in treating
                                concussive symptoms with EEG guidance, demonstrating significant improvements in patient
                                outcomes.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/39118673/" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-orange ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-orange transition-colors">
                                    Preliminary Observations of Personalized Repetitive Magnetic Stimulation (PrTMS)
                                    Guided by EEG Spectra for Concussion
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Aug 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-orange uppercase tracking-wider bg-brand-orange/5 px-2 py-0.5 rounded">Brain
                                    Sciences</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Makale MT, Nybo C, Keifer J, Blum K, Dennen CA,
                                    Baron D, <strong class="text-gray-900">Sunder K</strong>, et al.</span>
                                <span class="text-gray-500">| PMID: 37626535</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Pilot clinical data showing positive therapeutic outcomes for concussion using PrTMS
                                guided by spectral EEG, demonstrating the modality's efficacy in restoring alpha
                                oscillatory synchrony and improving cognitive function in concussion patients.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/37626535/" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-purple ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors">
                                    Personalized Repetitive Transcranial Magnetic Stimulation (PrTMS) for
                                    Post-Traumatic Stress Disorder (PTSD) in Military Combat Veterans
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Jul 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-purple uppercase tracking-wider bg-brand-purple/5 px-2 py-0.5 rounded">Heliyon</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Makale MT, Nybo C, Keifer J, Blum K, Baron D,
                                    <strong class="text-gray-900">Sunder K</strong>, et al.</span>
                                <span class="text-gray-500">| DOI: 10.1016/j.heliyon.2023.e18943</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Examines the effects of PrTMS in treatment-resistant PTSD among military combat
                                veterans, demonstrating statistically significant improvements in PTSD symptoms,
                                anxiety, and depression through spectral EEG-guided personalized neuromodulation
                                protocols.
                            </p>
                            <a href="https://doi.org/10.1016/j.heliyon.2023.e18943" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-purple ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors">
                                    Impact of Neuro-psychiatric Disorders on the Global Economy
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Mar 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-gray-500 uppercase tracking-wider bg-gray-100 px-2 py-0.5 rounded">Psychology</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Blum K, <strong class="text-gray-900">Sunder
                                        K</strong>, et al.</span>
                                <span class="text-gray-500">| PMID: 37560184</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                A critical analysis of the economic burden of neuro-psychiatric disorders on a global
                                scale, highlighting the cost-effectiveness of early intervention.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/37560184/" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-gray-600 ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-gray-600 transition-colors">
                                    Exploratory Analysis of Dopamine D2 Agonist Therapy
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Feb 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-gray-500 uppercase tracking-wider bg-gray-100 px-2 py-0.5 rounded">Pharmacology</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Blum K, <strong class="text-gray-900">Sunder
                                        K</strong>, Badgaiyan RD</span>
                                <span class="text-gray-500">| PMID: 37361347</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Investigating the potential of Dopamine D2 Agonist Therapy in treating various
                                psychiatric conditions, emphasizing mechanism of action and clinical response.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/37361347/" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

<!-- <article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-red-500 ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-red-500 transition-colors">
                                    Hemiplegic Migraines Exacerbated using an Injectable GLP-1 Agonist
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Jan 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-red-500 uppercase tracking-wider bg-red-50 px-2 py-0.5 rounded">Case
                                    Report</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic"><strong class="text-gray-900">Sunder K</strong>, et
                                    al.</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Case study detailing the exacerbation of hemiplegic migraines in patients using specific
                                GLP-1 agonists for weight loss, providing critical safety data for clinicians.
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article> -->

<article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-purple ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors">
                                    PrTMS for Concussions
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-purple uppercase tracking-wider bg-brand-purple/5 px-2 py-0.5 rounded">Acupuncture
                                    &amp; Integrative Medicine</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Makale MT, Nybo C, Blum K, Dennen CA, Elman I,
                                    <strong class="text-gray-900">Sunder K</strong>, et al.</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Presents pilot clinical data on PrTMS guided by EEG spectra for the treatment of
                                concussion, highlighting improvements in cognitive function, mood, and sleep quality
                                through personalized neuromodulation protocols.
                            </p>
                            <a href="assets/publications/PrTMS%20for%20Concussions.pdf"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>
            </div>
        </div>
    </section>

    <!-- Mission / Impact Beyond Borders -->
    <section class="py-20" style="background-color: #faf5ff;">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="rp-category-chip mb-3">Our Mission</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3 mt-3">
                    Impact Beyond Borders
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We believe mental health is a fundamental human right. Our outreach programs span continents,
                    bringing expertise to where it's needed most.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 max-w-6xl mx-auto">
                <!-- Ukraine Medical Relief Network -->
                <div class="rp-mission-card">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80"
                        alt="Humanitarian medical relief" class="rp-mission-img">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="rp-category-chip">Humanitarian</span>
                        <span class="rp-year-chip">Active Mission</span>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">Ukraine Medical Relief Network</h3>
                    <p class="text-gray-700 leading-relaxed mb-5">
                        Coordinating over 100,000 medical professionals to provide neurocritical care training and
                        essential supplies to frontline doctors.
                    </p>
                    <div class="grid grid-cols-3 gap-4 pt-4 border-t border-gray-200">
                        <div class="text-center">
                            <div class="rp-stat-number">100k+</div>
                            <div class="text-xs text-gray-600 mt-1">Doctors Networked</div>
                        </div>
                        <div class="text-center">
                            <div class="rp-stat-number">$5M+</div>
                            <div class="text-xs text-gray-600 mt-1">Aid Delivered</div>
                        </div>
                        <div class="text-center">
                            <div class="rp-stat-number">Global</div>
                            <div class="text-xs text-gray-600 mt-1">Coverage</div>
                        </div>
                    </div>
                </div>

                <!-- N20 Summit -->
                <div class="rp-mission-card">
                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80"
                        alt="N20 Neuroscience Summit" class="rp-mission-img">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="rp-category-chip">Policy Summit</span>
                        <span class="rp-year-chip">New Delhi · 2023</span>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2">N20 Neuroscience Summit</h3>
                    <p class="text-gray-700 leading-relaxed mb-5">
                        Leading discussions on Brain &amp; Spine Health innovation with global policymakers at the
                        G20-affiliated Neuroscience20 summit, advocating for equitable access to modern psychiatric
                        care.
                    </p>
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-200">
                        <i data-lucide="users-round" class="w-5 h-5" style="color: #572670;"></i>
                        <span class="text-sm text-gray-700">Delegates from 40+ countries</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Foundation Banner -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="rp-foundation-banner max-w-6xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8 items-center relative" style="z-index: 1;">
                    <div class="md:col-span-2">
                        <div class="rp-foundation-logo mb-5">
                            <img src="assets/gallery/lotus-logo.png" class="w-32 h-auto"        
                                alt="Sunder Foundation">
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold mb-3">
                            Healing Communities. Empowering Minds.
                        </h3>
                        <p class="leading-relaxed" style="color: rgba(255,255,255,0.9);">
                            The philanthropic partner of Karma TMS — dedicated to educational grants, mental health
                            awareness, scientific research funding, support for the arts, and social entrepreneurship on
                            a global scale.
                        </p>
                    </div>
                    <div class="text-center md:text-right">
                        <a href="https://sunderfoundation.org/" target="_blank" rel="noopener noreferrer"
                            class="bm-hero-btn" style="background: white; color: #572670;">
                            Visit Foundation
                            <i data-lucide="arrow-up-right" class="w-4 h-4 ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    
</body>

</html>
