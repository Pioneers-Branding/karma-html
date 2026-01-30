<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impact of Social Media on Mental Health | Social Media and Wellbeing</title>
    <meta name="description"
        content="Discover how social media affects your mental health. Learn about negative effects, warning signs, and proven strategies for healthier social media habits to protect your wellbeing.">
    <meta name="keywords"
        content="social media mental health, social media anxiety, social media depression, digital wellbeing, FOMO, social comparison, healthy social media use">
    <link rel="canonical" href="social-media-mental-wellbeing.php">
    <meta property="og:title" content="Impact of Social Media on Mental Health | Social Media and Wellbeing">
    <meta property="og:description"
        content="Discover how social media affects your mental health. Learn about negative effects, warning signs, and proven strategies for healthier social media habits to protect your wellbeing.">
    <meta property="og:image"
        content="https://newoaks.s3.us-west-1.amazonaws.com/AutoDev/17785/0df1c6f4-54ea-43f5-aeab-67608371a640.webp">
    <meta property="og:type" content="article">

    <?php include 'includes/header-links.php'; ?>

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Scroll margin for sticky header offset */
        /* section {
            scroll-margin-top: 120px;
        } */

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
      "headline": "Discover the Impact of Social Media on Your Mental Well-being",
      "description": "Comprehensive analysis of how social media affects mental health, including negative effects, warning signs, and strategies for healthier social media habits.",
      "image": "https://newoaks.s3.us-west-1.amazonaws.com/AutoDev/17785/0df1c6f4-54ea-43f5-aeab-67608371a640.webp",
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
      "datePublished": "2024-08-16",
      "dateModified": "2024-08-16",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://karmatms.com/blog/social-media-mental-wellbeing"
      }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "How much social media use is too much?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Research suggests that more than 3 hours per day on social media significantly increases the risk of mental health issues. However, quality matters more than quantity—even short periods of negative social media experiences can impact wellbeing. Pay attention to how you feel after using social media rather than just tracking time."
        }
      }, {
        "@type": "Question",
        "name": "Can social media cause depression and anxiety?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "While social media doesn't directly cause mental health conditions, heavy use is strongly associated with increased rates of depression, anxiety, loneliness, and poor self-esteem. Social comparison, cyberbullying, FOMO (fear of missing out), and sleep disruption from screen time all contribute to these effects."
        }
      }, {
        "@type": "Question",
        "name": "What are the signs that social media is affecting my mental health?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Warning signs include feeling anxious or depressed after using social media, constant comparison to others, disrupted sleep patterns, neglecting real-life relationships, decreased productivity, and feeling compelled to check platforms constantly. If you experience these symptoms, it may be time to reassess your social media habits."
        }
      }, {
        "@type": "Question",
        "name": "How can I use social media more mindfully?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Practice mindful social media use by setting time limits, turning off notifications, curating your feed to follow positive accounts, avoiding doomscrolling, engaging authentically rather than passively scrolling, and taking regular digital detox breaks. Be intentional about when and why you use each platform."
        }
      }, {
        "@type": "Question",
        "name": "Should I delete social media entirely?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "A complete social media break isn't necessary for everyone. Instead, focus on creating a healthier relationship with these platforms. Consider reducing usage, unfollowing accounts that trigger negative feelings, and being more selective about your engagement. Some people benefit from temporary breaks or deleting specific platforms that cause the most stress."
        }
      }]
    }
    </script>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Breadcrumb -->
    <div class="bg-gray-50 border-b relative z-10" style="margin-top: 135px;"> 
        <div class="container mx-auto px-4 py-4">
            <nav class="flex items-center text-sm text-gray-500" aria-label="Breadcrumb">
                <a href="index.php" class="hover:text-purple-500 transition-colors">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <a href="blog.php" class="hover:text-purple-500 transition-colors">Blog</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <span class="text-gray-900 font-medium">Social Media & Mental Wellbeing</span>
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
                        August 16, 2024
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-3 py-1 rounded-full backdrop-blur-sm">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        13 min read
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-3 py-1 rounded-full backdrop-blur-sm">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        Dr. Keerthy Sunder
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Discover the Impact of Social Media on Your Mental Well-being
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Understanding the connection between social media use and mental health in the digital age
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
                                <button class="toc-button" onclick="scrollToSection('impact')">
                                    The Impact of Social Media
                                </button>
                                <button class="toc-button" onclick="scrollToSection('negative-effects')">
                                    Negative Effects
                                </button>
                                <button class="toc-button" onclick="scrollToSection('positive-aspects')">
                                    Positive Aspects
                                </button>
                                <button class="toc-button" onclick="scrollToSection('warning-signs')">
                                    Warning Signs
                                </button>
                                <button class="toc-button" onclick="scrollToSection('healthy-habits')">
                                    Healthy Social Media Habits
                                </button>
                                <button class="toc-button" onclick="scrollToSection('faqs')">
                                    Frequently Asked Questions
                                </button>
                            </nav>
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <a href="contact-us.php" class="btn w-full bg-primary text-white hover:opacity-90 justify-center">
                                    Get Support
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Article Content -->
            <article class="lg:col-span-3 prose prose-lg max-w-none text-gray-700">
                <!-- Introduction -->
                <div class="mb-12">
                    <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1764138578/28_mmumyo.png"
                        alt="Social media and mental health concept"
                        class="w-full h-auto object-cover rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        In today's hyperconnected world, social media has become an integral part of daily life for billions of people. While these platforms offer unprecedented opportunities for connection and self-expression, mounting research reveals a complex relationship between social media use and mental health. Understanding this impact is crucial for developing healthier digital habits and protecting your psychological wellbeing.
                    </p>
                </div>

                <!-- Section 1: Impact -->
                <section id="impact" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">The Impact of Social Media on Mental Health</h2>

                    <div class="bg-gradient-to-br from-purple-50 to-transparent border border-primary/20 rounded-xl mb-6 p-6">
                        <p class="text-lg font-medium text-primary mb-2">Alarming Statistics</p>
                        <p class="text-gray-700 mb-0">
                            Studies show that people who spend more than 3 hours daily on social media are twice as likely to experience symptoms of anxiety and depression. For young adults aged 18-25, this risk is even higher, with social media use strongly correlated with increased rates of mental health concerns.
                        </p>
                    </div>

                    <p class="mb-6">
                        Social media's influence on mental health operates through multiple psychological mechanisms. The constant exposure to curated, idealized versions of others' lives triggers social comparison, while the dopamine-driven feedback loops of likes and comments can create addictive patterns of use. Understanding these mechanisms helps us recognize when our social media habits might be affecting our wellbeing.
                    </p>
                </section>

                <!-- Section 2: Negative Effects -->
                <section id="negative-effects" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Negative Effects on Mental Wellbeing</h2>

                    <div class="space-y-6">
                        <div class="bg-white border text-card-foreground shadow-sm border-l-4 border-red-500 rounded-xl p-6">
                            <div class="flex items-start gap-4">
                                <i data-lucide="alert-triangle" class="w-8 h-8 text-red-500 flex-shrink-0 mt-1"></i>
                                <div>
                                    <h3 class="text-xl font-bold mb-3">Social Comparison and Low Self-Esteem</h3>
                                    <p class="text-gray-700 mb-3">
                                        Constant exposure to others' highlight reels creates unrealistic standards and fuels feelings of inadequacy. This "comparison trap" is particularly damaging because we're comparing our behind-the-scenes reality to others' carefully curated public personas.
                                    </p>
                                    <ul class="list-disc pl-6 space-y-1">
                                        <li>Decreased self-worth and confidence</li>
                                        <li>Body image issues and eating disorders</li>
                                        <li>Feelings of failure or inadequacy</li>
                                        <li>Envy and resentment toward others</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border text-card-foreground shadow-sm border-l-4 border-orange-500 rounded-xl p-6">
                            <div class="flex items-start gap-4">
                                <i data-lucide="alert-triangle" class="w-8 h-8 text-orange-500 flex-shrink-0 mt-1"></i>
                                <div>
                                    <h3 class="text-xl font-bold mb-3">FOMO (Fear of Missing Out)</h3>
                                    <p class="text-gray-700 mb-3">
                                        Social media amplifies the fear that others are having more rewarding experiences. This constant anxiety about missing out drives compulsive checking behaviors and prevents us from being present in our own lives.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border text-card-foreground shadow-sm border-l-4 border-purple-500 rounded-xl p-6">
                            <div class="flex items-start gap-4">
                                <i data-lucide="alert-triangle" class="w-8 h-8 text-purple-500 flex-shrink-0 mt-1"></i>
                                <div>
                                    <h3 class="text-xl font-bold mb-3">Cyberbullying and Online Harassment</h3>
                                    <p class="text-gray-700">
                                        The anonymity and distance of digital platforms can enable cruel behavior. Cyberbullying has been linked to increased rates of depression, anxiety, and even suicidal ideation, particularly among adolescents and young adults.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border text-card-foreground shadow-sm border-l-4 border-blue-500 rounded-xl p-6">
                            <div class="flex items-start gap-4">
                                <i data-lucide="alert-triangle" class="w-8 h-8 text-blue-500 flex-shrink-0 mt-1"></i>
                                <div>
                                    <h3 class="text-xl font-bold mb-3">Sleep Disruption</h3>
                                    <p class="text-gray-700">
                                        Blue light exposure from screens interferes with melatonin production, while the stimulating nature of social media content keeps our minds active when we should be winding down. Poor sleep quality, in turn, significantly impacts mental health.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border text-card-foreground shadow-sm border-l-4 border-green-500 rounded-xl p-6">
                            <div class="flex items-start gap-4">
                                <i data-lucide="alert-triangle" class="w-8 h-8 text-green-500 flex-shrink-0 mt-1"></i>
                                <div>
                                    <h3 class="text-xl font-bold mb-3">Reduced Real-Life Social Connections</h3>
                                    <p class="text-gray-700">
                                        Paradoxically, heavy social media use often leads to decreased face-to-face interactions and feelings of loneliness. Digital connections cannot fully replace the emotional depth and support of in-person relationships.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section 3: Positive Aspects -->
                <section id="positive-aspects" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Positive Aspects of Social Media</h2>

                    <p class="mb-6">
                        It's important to note that social media isn't inherently harmful. When used mindfully, these platforms can offer significant mental health benefits:
                    </p>

                    <div class="grid md:grid-cols-2 gap-4 my-6">
                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <i data-lucide="check-circle-2" class="w-8 h-8 text-green-600 mb-3"></i>
                            <h4 class="font-bold mb-2">Community and Support</h4>
                            <p class="text-sm text-gray-600">Finding like-minded individuals and support groups for mental health challenges</p>
                        </div>
                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <i data-lucide="check-circle-2" class="w-8 h-8 text-green-600 mb-3"></i>
                            <h4 class="font-bold mb-2">Self-Expression</h4>
                            <p class="text-sm text-gray-600">Creative outlets for sharing thoughts, art, and experiences</p>
                        </div>
                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <i data-lucide="check-circle-2" class="w-8 h-8 text-green-600 mb-3"></i>
                            <h4 class="font-bold mb-2">Mental Health Awareness</h4>
                            <p class="text-sm text-gray-600">Platforms for education, reducing stigma, and sharing resources</p>
                        </div>
                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <i data-lucide="check-circle-2" class="w-8 h-8 text-green-600 mb-3"></i>
                            <h4 class="font-bold mb-2">Maintaining Connections</h4>
                            <p class="text-sm text-gray-600">Staying in touch with distant friends and family members</p>
                        </div>
                    </div>
                </section>

                <!-- Section 4: Warning Signs -->
                <section id="warning-signs" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Warning Signs: When Social Media Harms Your Mental Health</h2>

                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-6 mb-6">
                        <p class="font-medium text-amber-900 mb-4">Watch for these red flags:</p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-amber-600 mt-1 flex-shrink-0"></i>
                                <span>You feel anxious, depressed, or lonely after using social media</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-amber-600 mt-1 flex-shrink-0"></i>
                                <span>You constantly compare yourself to others and feel inadequate</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-amber-600 mt-1 flex-shrink-0"></i>
                                <span>You experience FOMO or panic when you can't check your accounts</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-amber-600 mt-1 flex-shrink-0"></i>
                                <span>Your sleep quality has declined due to late-night scrolling</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-amber-600 mt-1 flex-shrink-0"></i>
                                <span>You neglect real-life relationships and responsibilities</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-amber-600 mt-1 flex-shrink-0"></i>
                                <span>You feel compelled to check notifications constantly</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-amber-600 mt-1 flex-shrink-0"></i>
                                <span>Your self-esteem depends on likes, comments, and follower counts</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Section 5: Healthy Habits -->
                <section id="healthy-habits" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6">Building Healthy Social Media Habits</h2>

                    <p class="mb-6">
                        Protecting your mental health doesn't necessarily mean quitting social media entirely. Instead, focus on developing a healthier relationship with these platforms:
                    </p>

                    <div class="space-y-6">
                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <h3 class="text-xl font-bold mb-3">1. Set Clear Boundaries</h3>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Establish specific times for checking social media</li>
                                <li>Use app timers to limit daily usage</li>
                                <li>Create phone-free zones (bedroom, dinner table)</li>
                                <li>Turn off non-essential notifications</li>
                            </ul>
                        </div>

                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <h3 class="text-xl font-bold mb-3">2. Curate Your Feed Mindfully</h3>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Unfollow accounts that trigger negative feelings</li>
                                <li>Follow accounts that inspire and educate</li>
                                <li>Join supportive communities aligned with your values</li>
                                <li>Hide or mute content that consistently upsets you</li>
                            </ul>
                        </div>

                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <h3 class="text-xl font-bold mb-3">3. Practice Mindful Engagement</h3>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Ask yourself why you're opening an app before doing so</li>
                                <li>Engage authentically rather than passively scrolling</li>
                                <li>Take breaks from doomscrolling</li>
                                <li>Be present in real-life moments instead of documenting everything</li>
                            </ul>
                        </div>

                        <div class="bg-white border border-primary/20 rounded-xl p-6 shadow-sm">
                            <h3 class="text-xl font-bold mb-3">4. Schedule Digital Detoxes</h3>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>Take regular breaks from social media (daily, weekly, or monthly)</li>
                                <li>Plan social media-free activities and vacations</li>
                                <li>Notice how you feel during breaks from platforms</li>
                                <li>Reconnect with offline hobbies and relationships</li>
                            </ul>
                        </div>
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
                                <span>How much social media use is too much?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                Research suggests that more than 3 hours per day on social media significantly increases the risk of mental health issues. However, quality matters more than quantity—even short periods of negative social media experiences can impact wellbeing. Pay attention to how you feel after using social media rather than just tracking time.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>Can social media cause depression and anxiety?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                While social media doesn't directly cause mental health conditions, heavy use is strongly associated with increased rates of depression, anxiety, loneliness, and poor self-esteem. Social comparison, cyberbullying, FOMO (fear of missing out), and sleep disruption from screen time all contribute to these effects.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>What are the signs that social media is affecting my mental health?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                Warning signs include feeling anxious or depressed after using social media, constant comparison to others, disrupted sleep patterns, neglecting real-life relationships, decreased productivity, and feeling compelled to check platforms constantly. If you experience these symptoms, it may be time to reassess your social media habits.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>How can I use social media more mindfully?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                Practice mindful social media use by setting time limits, turning off notifications, curating your feed to follow positive accounts, avoiding doomscrolling, engaging authentically rather than passively scrolling, and taking regular digital detox breaks. Be intentional about when and why you use each platform.
                            </div>
                        </div>

                        <div class="accordion-item" data-state="closed">
                            <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                <span>Should I delete social media entirely?</span>
                                <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                            </button>
                            <div class="accordion-content">
                                A complete social media break isn't necessary for everyone. Instead, focus on creating a healthier relationship with these platforms. Consider reducing usage, unfollowing accounts that trigger negative feelings, and being more selective about your engagement. Some people benefit from temporary breaks or deleting specific platforms that cause the most stress.
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center mb-12 shadow-lg" style="background-color: #572670">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">
                        Need Support With Your Mental Health?
                    </h3>
                    <p class="text-lg mb-8 text-white/90 max-w-2xl mx-auto">
                        If social media or other factors are affecting your mental wellbeing, we're here to help. Contact us to learn about treatment options.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="contact-us.php" class="btn bg-white text-[#572670] hover:bg-gray-100 font-semibold px-8 py-3">
                            Reach Out Today
                        </a>
                    </div>
                </div>

                <!-- Related Posts -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-8">Related Articles</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Post 1 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376734/16_ekice5.png"
                                alt="The Impact of Screen Time on Mental Health" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-primary transition-colors">
                                    <a href="screen-time-mental-health.php" class="block">The Impact of Screen Time on Mental Health</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Understand how excessive screen time affects mental wellness and strategies to find balance.</p>
                                <a href="screen-time-mental-health.php" class="text-primary font-medium text-sm inline-flex items-center">
                                    Read More <i data-lucide="arrow-right" class="w-3 h-3 ml-1"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Post 2 -->
                        <div class="bg-white border border-[#572670]/20 rounded-xl overflow-hidden hover:shadow-lg transition-all group">
                            <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763376734/18_jkbrlx.png"
                                alt="Tech And Mental Health" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2 text-primary transition-colors">
                                    <a href="tech-mental-health-impact.php" class="block">Tech And Mental Health: The Impact Of Technology</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Explore both positive and negative effects of technology on mental health.</p>
                                <a href="tech-mental-health-impact.php" class="text-primary font-medium text-sm inline-flex items-center">
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
                                    <a href="managing-anxiety-triggers.php" class="block">Managing Anxiety Triggers in Everyday Life</a>
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">Learn practical strategies to identify and manage anxiety triggers effectively.</p>
                                <a href="managing-anxiety-triggers.php" class="text-primary font-medium text-sm inline-flex items-center">
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
                
                // Close other items if needed (optional)
                // document.querySelectorAll('.accordion-item').forEach(i => i.setAttribute('data-state', 'closed'));
                
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
            
            // Initial Check
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
