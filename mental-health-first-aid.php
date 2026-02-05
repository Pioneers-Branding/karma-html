<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health First Aid: A Comprehensive Guide | Karma TMS</title>
    <meta name="description"
        content="Learn about Mental Health First Aid (MHFA), the ALGEE action plan, and how to support someone experiencing a mental health crisis. Expert guide from Karma TMS.">
    <meta name="keywords"
        content="Mental Health First Aid, MHFA, ALGEE action plan, mental health support, crisis intervention, mental health awareness, help for depression">
    <link rel="canonical" href="mental-health-first-aid.php">
    <meta property="og:title" content="Mental Health First Aid: A Comprehensive Guide | Karma TMS">
    <meta property="og:description"
        content="Learn about Mental Health First Aid (MHFA), the ALGEE action plan, and how to support someone experiencing a mental health crisis. Expert guide from Karma TMS.">
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
            padding: 1rem;
            font-weight: 600;
            text-align: left;
            background: none;
            border: none;
            cursor: pointer;
            color: inherit;
        }

        .accordion-trigger:hover {
            color: #572670;
        }

        .accordion-content {
            padding: 0 1rem 1rem 1rem;
            color: #374151;
            display: none;
        }

        .accordion-item[data-state="open"] .accordion-content {
            display: block;
        }

        .accordion-icon {
            transition: transform 0.2s;
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

        .border-red-500 { border-color: #ef4444; }
        .text-red-500 { color: #ef4444; }

        .border-orange-500 { border-color: #f97316; }
        .text-orange-500 { color: #f97316; }

        .border-purple-500 { border-color: #a855f7; }
        .text-purple-500 { color: #a855f7; }

        .border-green-500 { border-color: #22c55e; }
        .text-green-500 { color: #22c55e; }

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
      "headline": "Mental Health First Aid: A Comprehensive Guide",
      "description": "Learn about Mental Health First Aid (MHFA), the ALGEE action plan, and how to support someone experiencing a mental health crisis.",
      "image": "https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376739/25_drzbxc.png",
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
      "datePublished": "2024-05-15",
      "dateModified": "2024-05-15",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blog/mental-health-first-aid"
      }
    }
    </script>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Breadcrumb -->
    <div class="bg-gray-50 border-b relative z-10" style="margin-top: 40px;"> 
        <div class="container mx-auto px-4 py-4">
            <nav class="flex items-center text-sm text-gray-500" aria-label="Breadcrumb">
                <a href="index.php" class="hover:text-purple-500 transition-colors">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <a href="blog.php" class="hover:text-purple-500 transition-colors">Blog</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <span class="text-gray-900 font-medium">Mental Health First Aid</span>
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
                        May 15, 2024
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
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    Mental Health First Aid: How to Support Someone in Crisis
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Learn the evidence-based strategies to identify, understand, and respond to signs of mental health and substance use challenges.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="contact-us.php" class="btn bg-white text-primary hover:bg-gray-100 font-bold px-8 py-3 text-lg">
                        Get Support
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
                                <button class="toc-button" onclick="scrollToSection('what-is-mhfa')">
                                    What is Mental Health First Aid?
                                </button>
                                <button class="toc-button" onclick="scrollToSection('why-important')">
                                    Why is it Important?
                                </button>
                                <button class="toc-button" onclick="scrollToSection('recognizing-crisis')">
                                    Recognizing a Crisis
                                </button>
                                <button class="toc-button" onclick="scrollToSection('how-to-help')">
                                    The ALGEE Action Plan
                                </button>
                                <button class="toc-button" onclick="scrollToSection('crisis-situations')">
                                    Specific Crisis Situations
                                </button>
                                <button class="toc-button" onclick="scrollToSection('self-care')">
                                    Self-Care for Helpers
                                </button>
                                
                                <button class="toc-button mt-4" onclick="scrollToSection('when-to-act')">
                                    When to Seek Professional Help
                                </button>
                                <button class="toc-button" onclick="scrollToSection('faqs')">
                                    Frequently Asked Questions
                                </button>
                            </nav>
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <a href="contact-us.php" class="btn w-full bg-primary text-white hover:opacity-90 justify-center font-bold">
                                    Schedule Consultation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Article Content -->
            <article class="lg:col-span-3 prose max-w-none text-gray-700">
                <!-- Introduction -->
                <div class="mb-12">
                     <img src="images/blog/mental-health-first-aid.png"
                        alt="Mental Health First Aid Concept"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-lg leading-relaxed text-gray-700">
                        Just as we learn CPR to help someone in a physical crisis, <a href="mental-health-first-aid.php" class="text-primary hover:underline font-medium">Mental Health First Aid (MHFA)</a> teaches us how to assist someone experiencing a mental health challenge or crisis. It is a vital skill that empowers individuals to provide initial support until appropriate professional help is received or until the crisis resolves.
                    </p>
                </div>

                <!-- Section 1: What is MHFA? -->
                <section id="what-is-mhfa" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">What is Mental Health First Aid?</h2>
                    
                    <p class="mb-6">
                        Mental Health First Aid is an evidence-based training program that helps you identify, understand, and respond to signs of mental illnesses and substance use disorders. The training gives you the skills you need to reach out and provide initial support to someone who may be developing a mental health or substance use problem and help connect them to the appropriate care.
                    </p>

                    <div class="bg-gradient-to-br from-purple-50 to-transparent border border-primary/20 rounded-xl mb-6 p-6">
                        <p class="text-lg font-medium text-primary mb-2">Core Goals of MHFA</p>
                        <ul class="list-disc pl-6 space-y-2 text-gray-700">
                            <li>Preserve life where a person may be a danger to themselves or others.</li>
                            <li>Provide help to prevent the mental health problem from becoming more serious.</li>
                            <li>Promote recovery of good mental health.</li>
                            <li>Provide comfort to a person experiencing a mental health problem.</li>
                        </ul>
                    </div>
                </section>

                <!-- Section 2: Why Important? -->
                <section id="why-important" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Why is Mental Health First Aid Important?</h2>

                    <div class="space-y-6">
                        <div class="bg-white border text-card-foreground shadow-sm border-l-4 border-blue-500 rounded-xl p-6">
                            <div class="flex items-start gap-4">
                                <i data-lucide="users" class="w-8 h-8 text-blue-500 flex-shrink-0 mt-1"></i>
                                <div>
                                    <h3 class="text-xl font-bold mb-3">Prevalence of Mental Health Issues</h3>
                                    <p class="text-gray-700">
                                        Nearly one in five adults in the U.S. lives with a mental illness. Despite this high prevalence, many people delay seeking help due to stigma or lack of knowledge. MHFA bridges this gap.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border text-card-foreground shadow-sm border-l-4 border-green-500 rounded-xl p-6">
                            <div class="flex items-start gap-4">
                                <i data-lucide="heart-handshake" class="w-8 h-8 text-green-500 flex-shrink-0 mt-1"></i>
                                <div>
                                    <h3 class="text-xl font-bold mb-3">Reducing Stigma</h3>
                                    <p class="text-gray-700">
                                        By talking openly about mental health and treating it with the same seriousness as physical health, MHFA helps destigmatize mental illness and encourages people to seek the support they need.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border text-card-foreground shadow-sm border-l-4 border-orange-500 rounded-xl p-6">
                            <div class="flex items-start gap-4">
                                <i data-lucide="clock" class="w-8 h-8 text-orange-500 flex-shrink-0 mt-1"></i>
                                <div>
                                    <h3 class="text-xl font-bold mb-3">Early Intervention</h3>
                                    <p class="text-gray-700">
                                        The earlier a person receives help, the better their recovery outcomes. Mental Health First Aiders are often the first to notice changes in behavior and can intervene before a crisis escalates.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <!-- Section: Recognizing a Mental Health Crisis -->
                <!-- Section: Recognizing a Mental Health Crisis -->
                <section id="recognizing-crisis" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Recognizing a Mental Health Crisis</h2>
                    <p class="mb-6 text-gray-700">
                        A mental health crisis exists when someone's behavior puts them at risk of hurting themselves or others and/or prevents them from being able to care for themselves effectively. Warning signs vary but often include:
                    </p>

                    <div class="space-y-8">
                        <!-- Immediate Danger -->
                        <div class="bg-white border-2 border-red-500 rounded-xl p-8">
                             <h3 class="flex items-center gap-2 text-2xl font-bold text-black mb-6">
                                <i data-lucide="alert-circle" class="w-8 h-8 text-red-500"></i>
                                Immediate Danger Signs (Call 911 or 988)
                             </h3>
                             <ul class="space-y-3 text-gray-700 list-disc pl-6">
                                <li>Talk of suicide or wanting to die</li>
                                <li>Looking for ways to kill oneself (researching methods, obtaining means)</li>
                                <li>Talking about feeling hopeless or having no reason to live</li>
                                <li>Extreme mood swings</li>
                                <li>Threatening to hurt others or destroy property</li>
                                <li>Acting violently or out of control</li>
                                <li>Seeing or hearing things that aren't there</li>
                                <li>Inability to perform daily tasks or care for self</li>
                             </ul>
                        </div>

                        <!-- Behavioral Changes -->
                        <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm">
                            <h3 class="text-2xl font-bold text-black mb-6">
                                Behavioral Changes
                            </h3>
                            <ul class="space-y-3 text-gray-700 list-disc pl-6">
                                <li>Withdrawal from friends, family, and activities</li>
                                <li>Dramatic changes in eating or sleeping patterns</li>
                                <li>Rapid or dramatic shifts in emotions</li>
                                <li>Increased use of alcohol or drugs</li>
                                <li>Giving away prized possessions</li>
                                <li>Taking unnecessary risks</li>
                                <li>Neglecting personal hygiene</li>
                                <li>Increased agitation or inability to stay still</li>
                            </ul>
                        </div>

                        <!-- Emotional/Mental Changes -->
                        <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm">
                            <h3 class="text-2xl font-bold text-black mb-6">
                                Emotional/Mental Changes
                            </h3>
                            <ul class="space-y-3 text-gray-700 list-disc pl-6">
                                <li>Expressing feelings of being trapped or in unbearable pain</li>
                                <li>Talking about being a burden to others</li>
                                <li>Saying goodbye to people as if they won't be seen again</li>
                                <li>Extreme feelings of worthlessness or guilt</li>
                                <li>Sudden calmness after period of depression or anxiety</li>
                                <li>Paranoid thoughts or excessive worry</li>
                                <li>Inability to concentrate or think clearly</li>
                                <li>Unexplained physical problems</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Section: How to Help (Detailed ALGEE) -->
                <section id="how-to-help" class="mb-12 scroll-target">
                     <h2 class="text-3xl font-bold text-primary mb-6">How to Help Someone in Crisis</h2>
                     <p class="mb-8">Use the ALGEE action plan, an evidence-based approach for Mental Health First Aid:</p>

                     <div class="space-y-8">
                        <!-- A - Assess -->
                        <div class="bg-white border border-primary/20 rounded-xl overflow-hidden shadow-sm">
                            <div class="bg-primary/5 p-4 border-b border-primary/10 flex items-center gap-4">
                                <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl">A</div>
                                <h3 class="text-xl font-bold text-gray-900">Assess for Risk of Suicide or Harm</h3>
                            </div>
                            <div class="p-6">
                                <p class="mb-4 text-gray-700">If you're concerned someone may be suicidal, ask directly: <strong>"Are you thinking about killing yourself?"</strong> This doesn't increase risk—it shows you care and gives them permission to talk.</p>
                                <div class="bg-red-50 p-4 rounded-lg border border-red-100">
                                    <p class="font-bold text-red-800 mb-2">If risk is present:</p>
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-2 text-red-700">
                                            <i data-lucide="check" class="w-4 h-4"></i> Call 988 (Suicide & Crisis Lifeline) immediately
                                        </li>
                                        <li class="flex items-center gap-2 text-red-700">
                                            <i data-lucide="check" class="w-4 h-4"></i> Don't leave them alone
                                        </li>
                                        <li class="flex items-center gap-2 text-red-700">
                                            <i data-lucide="check" class="w-4 h-4"></i> Remove access to lethal means
                                        </li>
                                        <li class="flex items-center gap-2 text-red-700">
                                            <i data-lucide="check" class="w-4 h-4"></i> Take all threats seriously
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- L - Listen -->
                        <div class="bg-white border border-primary/20 rounded-xl overflow-hidden shadow-sm">
                            <div class="bg-primary/5 p-4 border-b border-primary/10 flex items-center gap-4">
                                <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl">L</div>
                                <h3 class="text-xl font-bold text-gray-900">Listen Nonjudgmentally</h3>
                            </div>
                            <div class="p-6">
                                <p class="mb-4 text-gray-700">Sometimes the most powerful help you can offer is simply listening without judgment. This means:</p>
                                <ul class="space-y-3 text-gray-700 list-disc pl-6">
                                    <li>Give your full attention—put away phone, make eye contact</li>
                                    <li>Don't interrupt or offer solutions immediately</li>
                                    <li>Avoid phrases like "just think positive" or "others have it worse"</li>
                                    <li>Use reflective listening: "It sounds like you're feeling..."</li>
                                    <li>Allow silence—don't rush to fill it</li>
                                    <li>Take their feelings seriously, even if you don't understand</li>
                                </ul>
                            </div>
                        </div>

                        <!-- G - Give Reassurance -->
                        <div class="bg-white border border-primary/20 rounded-xl overflow-hidden shadow-sm">
                            <div class="bg-primary/5 p-4 border-b border-primary/10 flex items-center gap-4">
                                <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl">G</div>
                                <h3 class="text-xl font-bold text-gray-900">Give Reassurance and Information</h3>
                            </div>
                            <div class="p-6">
                                <p class="mb-4 text-gray-700">Provide hope without minimizing their experience:</p>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="bg-green-50 p-4 rounded-lg">
                                        <h4 class="font-bold text-green-800 mb-2">Helpful Statements:</h4>
                                        <ul class="space-y-1 text-green-700 text-sm">
                                            <li>• "I'm here for you"</li>
                                            <li>• "You're not alone in this"</li>
                                            <li>• "This is treatable and you can feel better"</li>
                                            <li>• "Your life matters to me"</li>
                                            <li>• "Let's figure this out together"</li>
                                        </ul>
                                    </div>
                                    <div class="bg-red-50 p-4 rounded-lg">
                                        <h4 class="font-bold text-red-800 mb-2">Avoid Saying:</h4>
                                        <ul class="space-y-1 text-red-700 text-sm">
                                            <li>• "Just snap out of it"</li>
                                            <li>• "Everyone feels like this sometimes"</li>
                                            <li>• "You have so much to live for"</li>
                                            <li>• "This is all in your head"</li>
                                            <li>• "Things could be worse"</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- E - Encourage Professional Help -->
                        <div class="bg-white border border-primary/20 rounded-xl overflow-hidden shadow-sm">
                            <div class="bg-primary/5 p-4 border-b border-primary/10 flex items-center gap-4">
                                <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl">E</div>
                                <h3 class="text-xl font-bold text-gray-900">Encourage Appropriate Professional Help</h3>
                            </div>
                            <div class="p-6">
                                <p class="mb-4 text-gray-700">Help them access professional support:</p>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-start gap-2"><i data-lucide="arrow-right-circle" class="w-5 h-5 text-primary mt-0.5"></i> Suggest they talk to a therapist, counselor, or <a href="contact-us.php" class="text-primary hover:underline font-medium">doctor</a></li>
                                    <li class="flex items-start gap-2"><i data-lucide="arrow-right-circle" class="w-5 h-5 text-primary mt-0.5"></i> Offer to help them find <a href="services.php" class="text-primary hover:underline font-medium">resources</a> or make appointments</li>
                                    <li class="flex items-start gap-2"><i data-lucide="arrow-right-circle" class="w-5 h-5 text-primary mt-0.5"></i> If they're resistant, respect their autonomy while staying supportive</li>
                                    <li class="flex items-start gap-2"><i data-lucide="arrow-right-circle" class="w-5 h-5 text-primary mt-0.5"></i> Provide crisis line numbers: <strong>988</strong> or Crisis Text Line (text HOME to 741741)</li>
                                    <li class="flex items-start gap-2"><i data-lucide="arrow-right-circle" class="w-5 h-5 text-primary mt-0.5"></i> If in immediate danger, accompany them to emergency room</li>
                                </ul>
                            </div>
                        </div>

                        <!-- E - Encourage Self-Help -->
                        <div class="bg-white border border-primary/20 rounded-xl overflow-hidden shadow-sm">
                            <div class="bg-primary/5 p-4 border-b border-primary/10 flex items-center gap-4">
                                <div class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl">E</div>
                                <h3 class="text-xl font-bold text-gray-900">Encourage Self-Help and Other Support Strategies</h3>
                            </div>
                            <div class="p-6">
                                <p class="mb-4 text-gray-700">Suggest coping strategies while they wait for professional help:</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-700">Connect with loved ones</span>
                                    <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-700">Physical activity</span>
                                    <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-700">Regular sleep schedule</span>
                                    <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-700">Relaxation techniques</span>
                                    <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-700">Join support groups</span>
                                    <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-700">Reduce substance use</span>
                                    <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-700">Engage in hobbies</span>
                                </div>
                            </div>
                        </div>
                     </div>
                </section>

                <!-- Section: Specific Crisis Situations -->
                 <section id="crisis-situations" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Specific Crisis Situations</h2>
                    
                    <div class="space-y-6">
                        <!-- Panic Attack -->
                        <div class="bg-blue-50 border border-blue-200 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-3">Panic Attack</h3>
                            <p class="mb-3 text-blue-800 font-medium">Panic attacks are terrifying but not dangerous. Help by:</p>
                            <ul class="space-y-1 text-blue-900 list-disc pl-5">
                                <li>Staying calm yourself—your calm helps them feel safe</li>
                                <li>Moving to a quiet, less stimulating environment</li>
                                <li>Encouraging slow, deep breathing</li>
                                <li>Reminding them this will pass (usually within 10-20 minutes)</li>
                                <li>Helping them focus on the present moment</li>
                                <li>Not leaving them alone until symptoms subside</li>
                            </ul>
                        </div>

                        <!-- Suicidal Thoughts -->
                        <div class="bg-red-50 border border-red-200 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-red-900 mb-3">Suicidal Thoughts or Behavior</h3>
                            <p class="mb-3 text-red-800 font-medium">This is a medical emergency. Take immediate action:</p>
                            <ul class="space-y-1 text-red-900 list-disc pl-5">
                                <li>Ask directly: "Are you thinking about suicide?"</li>
                                <li>If yes: Call 988 or 911 immediately</li>
                                <li>Remove access to firearms, medications, sharp objects</li>
                                <li>Don't leave them alone</li>
                                <li>Listen without judgment</li>
                                <li>Don't promise to keep suicide plans secret</li>
                                <li>Take all statements seriously</li>
                            </ul>
                        </div>

                        <!-- Psychosis -->
                        <div class="bg-purple-50 border border-purple-200 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-purple-900 mb-3">Psychosis (Hallucinations/Delusions)</h3>
                            <p class="mb-3 text-purple-800 font-medium">Someone experiencing psychosis may see or hear things others don't, or have fixed false beliefs:</p>
                            <ul class="space-y-1 text-purple-900 list-disc pl-5">
                                <li>Stay calm and speak in a clear, concise manner</li>
                                <li>Don't argue about the reality of their experiences</li>
                                <li>Validate their feelings without agreeing with delusions</li>
                                <li>Reduce stimulation (noise, lights, crowds)</li>
                                <li>Call for professional help—this requires medical attention</li>
                                <li>Ensure safety for everyone present</li>
                            </ul>
                        </div>

                        <!-- Severe Depression -->
                         <div class="bg-gray-50 border border-gray-200 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Severe Depression</h3>
                            <p class="mb-3 text-gray-800 font-medium">When depression becomes debilitating:</p>
                            <ul class="space-y-1 text-gray-700 list-disc pl-5">
                                <li>Check in regularly—isolation worsens depression</li>
                                <li>Help with basic tasks if they're overwhelmed</li>
                                <li>Encourage professional treatment</li>
                                <li>Be patient—depression isn't weakness or laziness</li>
                                <li>Watch for suicidal thoughts</li>
                                <li>Learn about treatment options like <a href="is-tms-therapy-legitimate.php" class="text-primary hover:underline font-medium">TMS therapy</a></li>
                            </ul>
                        </div>

                         <!-- Substance Abuse -->
                        <div class="bg-orange-50 border border-orange-200 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-orange-900 mb-3">Substance Abuse Emergency</h3>
                            <p class="mb-3 text-orange-800 font-medium">Overdose or severe intoxication:</p>
                            <ul class="space-y-1 text-orange-900 list-disc pl-5">
                                <li>Call 911 immediately if person is unconscious, having seizures, or trouble breathing</li>
                                <li>Administer Narcan if available and you're trained</li>
                                <li>Place person on their side if unconscious to prevent choking</li>
                                <li>Stay with them until help arrives</li>
                                <li>Don't leave them to "sleep it off"</li>
                                <li>After crisis passes, encourage addiction treatment</li>
                            </ul>
                        </div>
                    </div>
                 </section>

                 <!-- Section: Self Care for Helpers -->
                 <section id="self-care" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Self-Care for Helpers</h2>
                    <p class="mb-8">Providing mental health first aid can be emotionally draining. Taking care of yourself enables you to help others effectively.</p>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <h3 class="text-xl font-bold text-primary mb-4">Recognize Compassion Fatigue</h3>
                            <p class="text-sm text-gray-500 mb-3">Signs you need to step back and recharge:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-center gap-2"><i data-lucide="battery-warning" class="w-4 h-4 text-orange-500"></i> Feeling emotionally exhausted</li>
                                <li class="flex items-center gap-2"><i data-lucide="battery-warning" class="w-4 h-4 text-orange-500"></i> Difficulty sleeping or concentrating</li>
                                <li class="flex items-center gap-2"><i data-lucide="battery-warning" class="w-4 h-4 text-orange-500"></i> Decreased empathy or numbness</li>
                                <li class="flex items-center gap-2"><i data-lucide="battery-warning" class="w-4 h-4 text-orange-500"></i> Irritability or mood changes</li>
                                <li class="flex items-center gap-2"><i data-lucide="battery-warning" class="w-4 h-4 text-orange-500"></i> Physical symptoms (headaches, fatigue)</li>
                                <li class="flex items-center gap-2"><i data-lucide="battery-warning" class="w-4 h-4 text-orange-500"></i> Withdrawal from others</li>
                            </ul>
                        </div>

                         <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <h3 class="text-xl font-bold text-primary mb-4">Set Boundaries & Practice Self-Care</h3>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Set Boundaries</h4>
                                    <ul class="space-y-1 text-gray-700 text-sm">
                                        <li class="flex items-center gap-2"><i data-lucide="shield" class="w-3 h-3 text-green-600"></i> Recognize your limitations</li>
                                        <li class="flex items-center gap-2"><i data-lucide="shield" class="w-3 h-3 text-green-600"></i> It's okay to say you need help</li>
                                        <li class="flex items-center gap-2"><i data-lucide="shield" class="w-3 h-3 text-green-600"></i> Don't try to be someone's sole support</li>
                                        <li class="flex items-center gap-2"><i data-lucide="shield" class="w-3 h-3 text-green-600"></i> Set limits on availability</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Practice Self-Care</h4>
                                    <ul class="space-y-1 text-gray-700 text-sm">
                                        <li class="flex items-center gap-2"><i data-lucide="heart" class="w-3 h-3 text-pink-600"></i> Maintain your own mental health routines</li>
                                        <li class="flex items-center gap-2"><i data-lucide="heart" class="w-3 h-3 text-pink-600"></i> Talk to someone about the experience</li>
                                        <li class="flex items-center gap-2"><i data-lucide="heart" class="w-3 h-3 text-pink-600"></i> Engage in stress-relieving activities</li>
                                        <li class="flex items-center gap-2"><i data-lucide="heart" class="w-3 h-3 text-pink-600"></i> Get adequate sleep and nutrition</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- Section 4: When to Act -->
                <section id="when-to-act" class="mb-12 scroll-target mt-20">
                    <br><br>
                    <h2 class="text-3xl font-bold text-primary mb-6">When to Seek Professional Help</h2>
                    <p class="mb-6">
                        While Mental Health First Aid is a powerful tool, it is not a substitute for professional medical or psychiatric care. If you or someone you know is experiencing the following, it is crucial to seek professional help:
                    </p>
                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-6 mb-6">
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2">
                                <i data-lucide="alert-circle" class="w-5 h-5 text-amber-600 mt-1 flex-shrink-0"></i>
                                <span>Inability to cope with daily problems or activities</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="alert-circle" class="w-5 h-5 text-amber-600 mt-1 flex-shrink-0"></i>
                                <span>Extreme mood swings or persistent sadness</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="alert-circle" class="w-5 h-5 text-amber-600 mt-1 flex-shrink-0"></i>
                                <span>Marked changes in eating or sleeping habits</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="alert-circle" class="w-5 h-5 text-amber-600 mt-1 flex-shrink-0"></i>
                                <span>Substance abuse or excessive alcohol consumption</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="alert-circle" class="w-5 h-5 text-amber-600 mt-1 flex-shrink-0"></i>
                                <span>Thoughts of suicide or harming others</span>
                            </li>
                        </ul>
                    </div>
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
                            Dr. Keerthy Sunder is a board-certified psychiatrist specializing in TMS therapy for veterans
                            and treatment-resistant mental health conditions. With extensive experience in neuroscience
                            and innovative treatment modalities, Dr. Sunder is dedicated to helping veterans overcome
                            PTSD, depression, and anxiety through evidence-based, compassionate care.
                        </p>
                    </div>
                </div>

                <!-- FAQ Section -->
                <section id="faqs" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-[#572670] mb-8">Frequently Asked Questions</h2>

                    <div class="space-y-4">
                        <!-- FAQ Items -->
                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>What is the first step in Mental Health First Aid?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                The first step in the ALGEE action plan is to Assess for Risk of Suicide or Harm. This involves observing behaviors and speaking with the person to determine if they are in immediate danger. If a crisis is suspected, ensuring safety is the top priority.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>Can anyone become a Mental Health First Aider?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                Yes, Mental Health First Aid training is available to the general public. It is valuable for teachers, first responders, parents, human resource professionals, and anyone interested in making their community healthier, happier, and safer.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>Does MHFA replace therapy?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                No, Mental Health First Aid does not teach you to be a therapist or diagnose conditions. Instead, it teaches you to listen without judgment, give reassurance, and help the person access appropriate professional help.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>What does ALGEE stand for?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                ALGEE stands for: <strong>A</strong>ssess for risk of suicide or harm, <strong>L</strong>isten non-judgmentally, <strong>G</strong>ive reassurance and information, <strong>E</strong>ncourage appropriate professional help, and <strong>E</strong>ncourage self-help and other support strategies.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>How do I start a conversation about mental health?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                Choose a private, comfortable setting. Start with "I" statements, such as "I've noticed you've been seeming down lately, and I'm concerned." Listen more than you speak, and avoid trying to "fix" the problem immediately. Simply being there and showing you care is a powerful first step.
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        We Are Here to Help
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        If you or a loved one needs professional mental health support, including advanced treatments like TMS therapy, contact Karma TMS today.
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
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376734/18_jkbrlx.png"
                                alt="Tech And Mental Health" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-primary transition-colors">
                                    <a href="tech-mental-health-impact.php" class="block">Tech And Mental Health</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Understanding the impact of technology on mental wellbeing.</p>
                                <a href="tech-mental-health-impact.php" class="text-primary font-medium text-sm inline-flex items-center whitespace-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-3 h-3 ml-1"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Post 2 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1764138578/28_mmumyo.png"
                                alt="Social Media and Mental Health" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-primary transition-colors">
                                    <a href="social-media-mental-wellbeing.php" class="block">Social Media & Wellbeing</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">How social habits impact your mental health.</p>
                                <a href="social-media-mental-wellbeing.php" class="text-primary font-medium text-sm inline-flex items-center whitespace-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-3 h-3 ml-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Post 3 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376737/22_wiizht.png"
                                alt="Managing Anxiety Triggers" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-primary transition-colors">
                                    <a href="managing-anxiety-triggers.php" class="block">Managing Anxiety Triggers</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Practical strategies for daily anxiety management.</p>
                                <a href="managing-anxiety-triggers.php" class="text-primary font-medium text-sm inline-flex items-center whitespace-nowrap">
                                    Read More <i data-lucide="arrow-right" class="w-3 h-3 ml-1"></i>
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
        // Interactive Table of Contents & Accordion Logic
        document.addEventListener('DOMContentLoaded', function () {
            // Accordion Logic
            window.toggleAccordion = function(button) {
                const item = button.parentElement;
                const currentState = item.getAttribute('data-state');
                const newState = currentState === 'open' ? 'closed' : 'open';
                item.setAttribute('data-state', newState);
            };

            // Scroll Spy for Table of Contents
            const sections = document.querySelectorAll('.scroll-target');
            const navButtons = document.querySelectorAll('.toc-button');
            const offset = 150; // Offset for fixed header

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
