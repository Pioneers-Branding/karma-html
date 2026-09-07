<?php
$pageTitle = "A Celebration of Cultural Collaboration in Joshua Tree | Karma TMS";
$pageDescription = "Join us for A Celebration of Cultural Collaboration on August 29, 2026. Indian classical traditions meet American jazz in the high desert at Joshua Tree Retreat Center.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Celebration of Cultural Collaboration in Joshua Tree | Karma TMS Blog</title>
    <meta name="description"
        content="A look back at A Celebration of Cultural Collaboration on August 29, 2026. Indian classical traditions met American jazz in the high desert at Joshua Tree Retreat Center.">
    <meta name="keywords"
        content="cultural collaboration Joshua tree, Indian classical music, American jazz, Sunder Foundation, Karma TMS events, Joshua tree retreat center, mental health and music, community wellness">
    <link rel="canonical" href="cultural-collaboration-event.php">
    <meta property="og:title" content="A Celebration of Cultural Collaboration in Joshua Tree | Karma TMS">
    <meta property="og:description"
        content="Indian classical traditions met American jazz in the high desert. A look back at an unforgettable evening of live music and dance by the Sunder Foundation and Karma TMS.">
    <meta property="og:image" content="images/f30da5d6-629d-4d49-9453-c9de8f87edb6.jpeg">
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

        /* Hero Gradient */
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

        /* Explicit Utility Overrides */
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
    </style>

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Event",
      "name": "A Celebration of Cultural Collaboration",
      "description": "Indian classical traditions met American jazz in the high desert. An evening of live music & dance presented by the Sunder Foundation.",
      "image": "https://karmatms.com/images/f30da5d6-629d-4d49-9453-c9de8f87edb6.jpeg",
      "startDate": "2026-08-29T17:30:00-07:00",
      "endDate": "2026-08-29T21:30:00-07:00",
      "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
      "eventStatus": "https://schema.org/EventScheduled",
      "location": {
        "@type": "Place",
        "name": "Noble Hall, Joshua Tree Retreat Center",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "59700 Twentynine Palms Highway",
          "addressLocality": "Joshua Tree",
          "addressRegion": "CA",
          "postalCode": "92252",
          "addressCountry": "US"
        }
      },
      "offers": {
        "@type": "Offer",
        "price": "15.00",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock",
        "validFrom": "2026-08-01T00:00:00-07:00"
      },
      "performer": [
        {"@type": "Person", "name": "Anindo & Anubrata Chatterjee"},
        {"@type": "Person", "name": "George Brooks"},
        {"@type": "Person", "name": "Rajib Karmakar"},
        {"@type": "Organization", "name": "Svetlana Tulasi Dance Company"},
        {"@type": "Person", "name": "Shobana Vankipuram"}
      ],
      "organizer": {
        "@type": "Organization",
        "name": "Sunder Foundation",
        "url": "https://karmatms.com"
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
                <span class="text-gray-900 font-medium">Cultural Collaboration Event</span>
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
                        August 15, 2026
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        6 min read
                    </span>
                    <span class="flex items-center gap-1 bg-white-10 px-4 py-1.5 rounded-full backdrop-blur-sm">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        Karma TMS Team
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    A Celebration of Cultural Collaboration in Joshua Tree
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                    Indian classical traditions met American jazz in the high desert. A look back at an evening of profound musical synergy and community connection.
                </p>
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
                                <button class="toc-button" onclick="scrollToSection('event-overview')">Event Overview</button>
                                <button class="toc-button" onclick="scrollToSection('power-of-music')">Music & Mental Health</button>
                                <button class="toc-button" onclick="scrollToSection('featured-artists')">Featured Artists</button>
                                <button class="toc-button" onclick="scrollToSection('jazz-and-classical')">Indian Classical meets Jazz</button>
                                <button class="toc-button" onclick="scrollToSection('ptsd-veterans-music')">Music Therapy for Veterans</button>
                                <button class="toc-button" onclick="scrollToSection('joshua-tree-magic')">The Joshua Tree Magic</button>
                                <button class="toc-button" onclick="scrollToSection('community-partners')">Community Partners</button>
                                <button class="toc-button" onclick="scrollToSection('get-tickets')">Missed the Event?</button>
                            </nav>
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <a href="contact-us.php" class="btn w-full bg-primary text-white hover:opacity-90 justify-center text-center flex items-center py-2 rounded-lg">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Article Content -->
            <article class="lg:col-span-3 prose prose-lg max-w-none text-gray-700">
                <!-- Introduction -->
                <div class="mb-12" id="event-overview">
                    <img src="images/f30da5d6-629d-4d49-9453-c9de8f87edb6.jpeg"
                        alt="A Celebration of Cultural Collaboration Flyer featuring Indian classical dancer and an American jazz saxophonist"
                        class="w-full rounded-xl mb-8 shadow-md">

                    <p class="text-xl leading-relaxed text-gray-700">
                        <strong>The high desert resonated with a unique fusion of global sounds.</strong> On <strong>Saturday, August 29, 2026</strong>, the Sunder Foundation presented "A Celebration of Cultural Collaboration," a spectacular evening where the intricate rhythms of Indian classical traditions met the improvisational spirit of American jazz.
                    </p>
                    <p class="mt-4 text-gray-700">
                        Taking place at the historic <strong>Noble Hall in the Joshua Tree Retreat Center</strong>, this event was a transformative experience. Gathering lovers of world music and supporters of community arts, this event was designed to inspire, connect, and elevate the human spirit.
                    </p>

                    <div class="grid md:grid-cols-2 gap-4 my-8">
                        <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 flex items-start gap-4">
                            <div class="bg-white p-3 rounded-full shadow-sm text-primary">
                                <i data-lucide="calendar" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">When</h4>
                                <p class="text-gray-700">Saturday, August 29, 2026<br>5:30 PM - 9:30 PM</p>
                            </div>
                        </div>
                        <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 flex items-start gap-4">
                            <div class="bg-white p-3 rounded-full shadow-sm text-primary">
                                <i data-lucide="map-pin" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Where</h4>
                                <p class="text-gray-700">Noble Hall • Joshua Tree Retreat Center<br>59700 Twentynine Palms Highway</p>
                            </div>
                        </div>
                        <div class="bg-purple-50 p-6 rounded-xl border border-purple-100 flex items-start gap-4 md:col-span-2">
                            <div class="bg-white p-3 rounded-full shadow-sm text-primary">
                                <i data-lucide="ticket" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Admission</h4>
                                <p class="text-gray-700">$15 per ticket (Dinner Included)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section: Music & Mental Health -->
                <section id="power-of-music" class="mb-12 scroll-target bg-blue-50 border border-blue-100 p-8 rounded-2xl shadow-sm">
                    <h2 class="text-3xl font-bold text-primary mb-6 flex items-center">
                        <i data-lucide="heart-pulse" class="w-8 h-8 text-blue-500 mr-3"></i>
                        The Healing Power of Music and Community
                    </h2>
                    <p class="mb-6 text-gray-700">
                        At <a href="tms-therapy.php" class="text-blue-700 hover:underline font-semibold">Karma TMS</a>, we understand that mental wellness extends far beyond clinical treatments. Healing is holistic, and the environment, community, and experiences we immerse ourselves in play a profound role in brain health.
                    </p>
                    <p class="mb-6 text-gray-700">
                        Music, particularly the complex structures of Indian classical ragas and the expressive freedom of jazz, has been shown to stimulate neuroplasticity—the brain's ability to form new connections. Attending live cultural events can significantly reduce stress, combat feelings of isolation, and promote emotional regulation. This aligns perfectly with our mission of treating <a href="depression.php" class="text-blue-700 hover:underline font-semibold">depression</a>, <a href="anxiety.php" class="text-blue-700 hover:underline font-semibold">anxiety</a>, and <a href="ptsd.php" class="text-blue-700 hover:underline font-semibold">PTSD</a> by fostering resilience and joy.
                    </p>

                    <!-- In-between CTA -->
                    <div class="bg-gradient-to-br from-[#572670] to-[#7B3FA0] rounded-xl text-white p-8 text-center my-6 shadow-md" style="background-color: #572670">
                        <h3 class="text-2xl font-bold mb-3 text-white">Struggling with Your Mental Health?</h3>
                        <p class="mb-6 text-white/90">While music heals the soul, sometimes the brain needs a different kind of tune-up. Discover how TMS therapy can help rewire your brain for a brighter tomorrow.</p>
                        <a href="tms-quiz.php" class="inline-block bg-white text-[#572670] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-colors shadow-sm">
                            Take Our TMS Assessment
                        </a>
                    </div>
                </section>

                <!-- Section: Featured Artists -->
                <section id="featured-artists" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6 flex items-center">
                        <i data-lucide="star" class="w-8 h-8 text-amber-500 mr-3"></i>
                        World-Class Acclaimed Musicians & Dancers
                    </h2>
                    <p class="mb-6">
                        The evening featured an incredible lineup of acclaimed artists who are masters in their respective fields:
                    </p>
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="text-primary mb-3"><i data-lucide="music" class="w-8 h-8"></i></div>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Anindo & Anubrata Chatterjee</h3>
                            <p class="text-gray-600">World-renowned tabla maestros bringing the heartbeat of India to the desert.</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="text-primary mb-3"><i data-lucide="mic-2" class="w-8 h-8"></i></div>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">George Brooks</h3>
                            <p class="text-gray-600">A prolific American saxophonist known for his seamless integration of jazz and Indian classical music.</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="text-primary mb-3"><i data-lucide="radio" class="w-8 h-8"></i></div>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Rajib Karmakar</h3>
                            <p class="text-gray-600">A virtuosic sitar player whose innovative approach pushes the boundaries of traditional music.</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="text-primary mb-3"><i data-lucide="users" class="w-8 h-8"></i></div>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Svetlana Tulasi Dance Company</h3>
                            <p class="text-gray-600">Breathtaking classical dance performances that translate rhythm into mesmerizing visual storytelling.</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow md:col-span-2">
                            <div class="text-primary mb-3"><i data-lucide="mic" class="w-8 h-8"></i></div>
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Shobana Vankipuram</h3>
                            <p class="text-gray-600">An exceptional vocalist whose voice bridges cultures and emotions.</p>
                        </div>
                    </div>
                    <p>
                        Together, these artists created an atmosphere of "Cultural Collaboration" in celebration of the 250th Anniversary of the United States of America (1776-2026), reflecting the beautiful diversity and unity that defines our nation.
                    </p>
                </section>

                <!-- Section: Jazz and Indian Classical -->
                <section id="jazz-and-classical" class="mb-12 scroll-target bg-amber-50 border border-amber-200 p-8 rounded-2xl shadow-sm">
                    <h2 class="text-3xl font-bold text-amber-900 mb-6 flex items-center">
                        <i data-lucide="music-4" class="w-8 h-8 text-amber-600 mr-3"></i>
                        A Shared Language: Indian Classical and American Jazz
                    </h2>
                    <p class="mb-6 text-gray-800">
                        At first glance, the ancient traditions of Indian classical music and the distinctly American roots of jazz might seem worlds apart. However, both art forms share a profound underlying philosophy: <strong>the power of improvisation.</strong>
                    </p>
                    <p class="mb-6 text-gray-800">
                        In Indian classical music, the <em>Raga</em> provides a melodic framework, while the <em>Tala</em> provides the rhythmic cycle. Within these boundaries, the musicians are entirely free to improvise, creating spontaneous melodies that reflect their emotional state and the energy of the audience. Similarly, jazz relies heavily on spontaneous solos layered over chord progressions and swinging rhythms.
                    </p>
                    <p class="mb-6 text-gray-800">
                        When these two genres collide, as they did at the Noble Hall, the result is a mesmerizing dialogue. The soaring notes of George Brooks' saxophone seamlessly intertwined with Rajib Karmakar's sitar, anchored by the incredibly complex polyrhythms of the tabla. This musical conversation is deeply meditative, requiring the artists to be entirely present in the moment—a state of mindfulness that we often encourage our patients to cultivate during their <a href="tms-therapy.php" class="text-amber-700 hover:underline font-semibold">TMS therapy</a> journey.
                    </p>
                </section>

                <!-- Section: PTSD and Veterans -->
                <section id="ptsd-veterans-music" class="mb-12 scroll-target bg-green-50 border border-green-200 p-8 rounded-2xl shadow-sm">
                    <h2 class="text-3xl font-bold text-green-900 mb-6 flex items-center">
                        <i data-lucide="shield-check" class="w-8 h-8 text-green-600 mr-3"></i>
                        Music Therapy: Supporting Our Veterans with PTSD
                    </h2>
                    <p class="mb-6 text-gray-800">
                        A significant focus of this event was honoring and supporting our local veteran community. The Mojave Desert is home to thousands of active-duty military members and veterans, many of whom are stationed at or retired near the nearby MCAGCC 29 Palms military base.
                    </p>
                    <p class="mb-6 text-gray-800">
                        Organizations like the <strong>Military Spouses' Association</strong> and <strong>Mil-Tree</strong> played a pivotal role in bringing this event to life. Mil-Tree, in particular, focuses on bridging the gap between the military and civilian communities through arts and dialogue.
                    </p>
                    <p class="mb-6 text-gray-800">
                        For veterans grappling with <a href="understanding-ptsd-veterans.php" class="text-green-700 hover:underline font-semibold">Post-Traumatic Stress Disorder (PTSD)</a>, the arts offer a non-verbal outlet for processing trauma. Listening to complex, emotionally resonant music can lower cortisol levels, reduce the hyper-arousal symptoms associated with PTSD, and foster a sense of safety and community. At Karma TMS, we frequently treat veterans using advanced, non-invasive therapies, but we firmly believe that community gatherings and the arts are an essential piece of the holistic healing puzzle.
                    </p>
                </section>

                <!-- Section: Joshua Tree Magic -->
                <section id="joshua-tree-magic" class="mb-12 scroll-target bg-purple-50 border border-purple-100 p-8 rounded-2xl shadow-sm">
                    <h2 class="text-3xl font-bold text-purple-900 mb-6 flex items-center">
                        <i data-lucide="moon-star" class="w-8 h-8 text-purple-500 mr-3"></i>
                        The Magic of the Joshua Tree Retreat Center
                    </h2>
                    <p class="mb-6 text-gray-800">
                        The venue itself played an integral role in the evening's success. The <strong>Joshua Tree Retreat Center</strong>, home to the Institute of Mentalphysics, is the oldest and largest retreat center in the Western United States. Set against the stunning backdrop of the high desert, with its unique flora, ancient rock formations, and unparalleled starry skies, the center has long been a sanctuary for spiritual seekers and wellness advocates.
                    </p>
                    <p class="mb-6 text-gray-800">
                        Hosting "A Celebration of Cultural Collaboration" in Noble Hall added an architectural and spiritual dimension to the music. The acoustics of the hall, combined with the tranquil desert energy outside, created an environment where the audience could completely surrender to the music, leaving behind the stress and anxiety of daily life.
                    </p>
                </section>

                <!-- Section: Community Partners -->
                <section id="community-partners" class="mb-12 scroll-target">
                    <h2 class="text-3xl font-bold text-primary mb-6 flex items-center">
                        <i data-lucide="handshake" class="w-8 h-8 text-primary mr-3"></i>
                        Presented in Partnership With The Community
                    </h2>
                    <p class="mb-6">
                        This extraordinary event was made possible through the collaboration of several vital community organizations dedicated to wellness, arts, and service:
                    </p>
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                            <h3 class="font-bold text-lg text-primary mb-2">Sunder Foundation</h3>
                            <p class="text-gray-600 text-sm">The primary presenter of the evening, dedicated to fostering cultural exchange, education, and community well-being.</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                            <h3 class="font-bold text-lg text-primary mb-2">KDA Karma TMS</h3>
                            <p class="text-gray-600 text-sm">"When you tune your brain, you tune your life." We are proud to co-sponsor an event that aligns with our vision of holistic mental health.</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                            <h3 class="font-bold text-lg text-primary mb-2">Military Spouses' Association (MCAGCC 29 Palms)</h3>
                            <p class="text-gray-600 text-sm">Supporting the military families who sacrifice so much for our country. We deeply value our <a href="understanding-ptsd-veterans.php" class="text-primary hover:underline">veterans and their families</a>.</p>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                            <h3 class="font-bold text-lg text-primary mb-2">Joshua Tree Retreat Center & Mil-Tree</h3>
                            <p class="text-gray-600 text-sm">The Institute of Mentalphysics provides the perfect serene backdrop, while Mil-Tree fosters community healing through the arts.</p>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <div id="get-tickets" class="bg-white border border-gray-200 rounded-xl p-8 text-center mb-12 scroll-target shadow-sm">
                    <h3 class="text-2xl font-bold mb-4 text-primary">
                        Missed the Event?
                    </h3>
                    <p class="text-lg mb-6 text-gray-700 max-w-2xl mx-auto">
                        Stay tuned for future events by the Sunder Foundation and Karma TMS! We are constantly working on new ways to bring the community together through music and wellness.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <div class="text-center">
                            <p class="font-semibold text-gray-800 mb-2">Have questions about our mental health services?</p>
                            <a href="contact-us.php" class="btn bg-white text-primary border-2 border-primary hover:bg-gray-50 font-semibold px-8 py-3 rounded-full inline-block transition-colors">
                                Contact Karma TMS
                            </a>
                        </div>
                    </div>
                </div>

            </article>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script>
        function scrollToSection(id) {
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
        }
    </script>
</body>
</html>
