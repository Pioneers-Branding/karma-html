<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Testimonials | KarmaTMS Success Stories</title>
    <meta name="description"
        content="Real stories from real patients who have transformed their lives with TMS therapy at Karma TMS. Watch video testimonials and read success stories.">

    <?php include 'includes/header-links.php'; ?>

    <style>
        .testimonial-card {
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .video-card {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .video-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .video-card.active {
            box-shadow: 0 0 0 2px #572670;
            background-color: rgba(87, 38, 112, 0.05);
        }

        .filter-badge {
            cursor: pointer;
            transition: all 0.2s ease;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
            border: 1px solid #e5e7eb;
        }

        .filter-badge:hover {
            background-color: rgba(87, 38, 112, 0.1);
        }

        .filter-badge.active {
            background-color: #572670;
            color: white;
            border-color: #572670;
        }

        .line-clamp-4 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .aspect-video {
            aspect-ratio: 16 / 9;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-4 text-white"
        style="background: linear-gradient(to bottom right, #572670, rgba(87, 38, 112, 0.8));">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl lg:text-6xl font-bold mb-4">
                Patient Testimonials
            </h1>
            <p class="text-xl max-w-3xl mx-auto" style="color: rgba(255, 255, 255, 0.9);">
                Real stories from real patients who have transformed their lives with TMS therapy at Karma TMS
            </p>
            <div class="flex items-center justify-center gap-4 mt-6" style="color: rgba(255, 255, 255, 0.8);">
                <i data-lucide="users" class="w-5 h-5"></i>
                <span>Over 500+ Success Stories</span>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="px-4 border-b" style="background-color: #f9fafb; padding-top: 3rem; padding-bottom: 3rem;">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <!-- Filter Badges -->
                <div class="flex flex-wrap items-center justify-center gap-3">
                    <div id="filterBadges" class="flex gap-2 flex-wrap">
                        <!-- Badges will be inserted here by JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Grid -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div id="testimonialsGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Testimonial cards will be inserted here by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Video Testimonials Section -->
    <section class="py-20" style="background-color: #f9fafb;">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Video Testimonials
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Watch our patients share their personal TMS therapy journeys
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 items-start">
                <!-- Main Video Player -->
                <div class="order-2 lg:order-1">
                    <div class="bm-benefit-card overflow-hidden shadow-lg">
                        <div id="videoPlayer" class="aspect-video bg-black">
                            <!-- Video iframe will be inserted here by JavaScript -->
                        </div>
                    </div>
                </div>

                <!-- Video List -->
                <div id="videoList" class="order-1 lg:order-2 space-y-4">
                    <!-- Video cards will be inserted here by JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        // Testimonials data
        const testimonials = [
            {
                id: 1,
                name: 'Patricia D.',
                location: 'Palm Springs, CA',
                condition: 'Treatment-Resistant Depression',
                rating: 5,
                quote: 'Depression is a miserable way to deal with life on a daily basis. When the med dont seem to do the trick, TMS therapy is a sensible addition to treatment that has helped me in the battle.',
                hasVideo: false,
                videoId: '',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1738980420952-56cc02acd17f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3MTg3MTl8MHwxfHNlYXJjaHwxfHxBJTIwcHJvZmlsZSUyMGF2YXRhciUyMGltYWdlJTIwb2YlMjBhJTIwcGVyc29uJTJDJTIwbGlrZWx5JTIwdXNlZCUyMGZvciUyMHRlc3RpbW9uaWFscyUyMG9yJTIwdXNlciUyMHJlcHJlc2VudGF0aW9uLnxlbnwwfHx8fDE3NTkyMzY3MDd8MA&ixlib=rb-4.1.0&q=80&w=200$w=512',
                date: '2024-01-15'
            },
            {
                id: 2,
                name: 'Thomas M.',
                location: 'Desert Hot Springs, CA',
                condition: 'Postpartum Depression',
                rating: 5,
                quote: 'TMS has helped me incredibly. It took more than half way throughout the sessions to see results but it definitely started to kick in. I highly recommend anyone suffering with depression etc to try TMS.',
                hasVideo: true,
                videoId: 'xewffol4oOQ',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1739296408127-b6cc9c5c094b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3MTg3MTl8MHwxfHNlYXJjaHwxfHxBJTIwcHJvZmlsZSUyMGF2YXRhciUyMGltYWdlJTIwbGlrZWx5JTIwdXNlZCUyMGZvciUyMHRlc3RpbW9uaWFscyUyMG9yJTIwdXNlciUyMHJlcHJlc2VudGF0aW9uLnxlbnwwfHx8fDE3NTkyMzY3MDh8MA&ixlib=rb-4.1.0&q=80&w=200$w=512',
                date: '2024-02-03'
            },
            {
                id: 3,
                name: 'Luis',
                location: 'Coachella Valley, CA',
                condition: 'Depression Treatment',
                rating: 5,
                quote: 'Testimonio en espaÃ±ol sobre mi experiencia transformadora con la terapia TMS en Karma TMS.',
                hasVideo: true,
                videoId: '1106562016',
                videoType: 'vimeo',
                avatar: 'https://images.unsplash.com/photo-1484863137850-59afcfe05386?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                date: '2024-01-28'
            },
            {
                id: 4,
                name: 'Nicole J.',
                location: 'Rancho Mirage, CA',
                condition: 'Major Depression',
                rating: 5,
                quote: 'TMS therapy changed my life! This was a leap of faith and it worked out for me, TMS saved my life!',
                hasVideo: false,
                videoId: '',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1739296408127-b6cc9c5c094b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3MTg3MTl8MHwxfHNlYXJjaHwxfHxBJTIwcHJvZmlsZSUyMGF2YXRhciUyMGltYWdlJTIwbGlrZWx5JTIwdXNlZCUyMGZvciUyMHRlc3RpbW9uaWFscyUyMG9yJTIwdXNlciUyMHJlcHJlc2VudGF0aW9uLnxlbnwwfHx8fDE3NTkyMzY3MDh8MA&ixlib=rb-4.1.0&q=80&w=200$w=512',
                date: '2024-02-12'
            },
            {
                id: 5,
                name: 'Lucia',
                location: 'Coachella Valley, CA',
                condition: 'Mental Health Treatment',
                rating: 5,
                quote: 'La terapia TMS ha cambiado mi vida. Recomiendo este tratamiento a cualquier persona que busque una soluciÃ³n efectiva.',
                hasVideo: true,
                videoId: '1098237681',
                videoType: 'vimeo',
                vimeoHash: 'b204c02062',
                avatar: 'https://images.unsplash.com/photo-1565979612809-d90c6ca38df9?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                date: '2024-01-20'
            }
        ];

        // State
        let searchTerm = '';
        let selectedCondition = 'All';
        let currentVideoIndex = 0;

        // Get unique conditions
        const conditions = ['All', ...Array.from(new Set(testimonials.map(t => t.condition)))];

        // Get video testimonials
        const videoTestimonials = testimonials.filter(t => t.hasVideo);

        // Render star rating
        function renderStarRating(rating) {
            let stars = '';
            for (let i = 0; i < 5; i++) {
                const filled = i < rating ? 'fill-yellow-400 text-yellow-400' : 'text-gray-300';
                stars += `<i data-lucide="star" class="w-4 h-4 ${filled}"></i>`;
            }
            return `<div class="flex gap-1">${stars}</div>`;
        }

        // Render testimonial card
        function renderTestimonialCard(testimonial) {
            return `
                <div class="testimonial-card bm-benefit-card p-6 shadow-md" style="text-align: left;">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden bg-gray-200">
                            <img src="${testimonial.avatar}" alt="${testimonial.name}" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900" style="text-align: left;">${testimonial.name}</h3>
                            <p class="text-sm text-gray-600" style="text-align: left;">${testimonial.location}</p>
                        </div>
                    </div>
                    
                    <div style="text-align: left;">
                        ${renderStarRating(testimonial.rating)}
                    </div>
                    
                    <i data-lucide="quote" class="w-6 h-6 my-3" style="color: rgba(87, 38, 112, 0.3); display: block;"></i>
                    <blockquote class="text-gray-700 leading-relaxed line-clamp-4" style="text-align: left;">
                        "${testimonial.quote}"
                    </blockquote>
                    
                    <div class="mt-4 pt-4 border-t" style="text-align: left;">
                        <span class="inline-block px-3 py-1 text-xs rounded-full bg-gray-100 text-gray-700">
                            ${testimonial.condition}
                        </span>
                    </div>
                </div>
            `;
        }

        // Render video card
        function renderVideoCard(video, index) {
            const activeClass = currentVideoIndex === index ? 'active' : '';

            return `
                <div class="video-card bm-benefit-card p-4 ${activeClass}" onclick="selectVideo(${index})" style="text-align: left;">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-200">
                            <img src="${video.avatar}" alt="${video.name}" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900" style="text-align: left;">${video.name}</h4>
                            <p class="text-sm text-gray-600" style="text-align: left;">${video.condition}</p>
                        </div>
                    </div>
                </div>
            `;
        }

        // Filter testimonials
        function filterTestimonials() {
            return testimonials.filter(testimonial => {
                const matchesSearch = testimonial.name.toLowerCase().includes(searchTerm.toLowerCase()) ||
                    testimonial.quote.toLowerCase().includes(searchTerm.toLowerCase()) ||
                    testimonial.condition.toLowerCase().includes(searchTerm.toLowerCase());
                const matchesCondition = selectedCondition === 'All' || testimonial.condition === selectedCondition;
                return matchesSearch && matchesCondition;
            });
        }

        // Render filter badges
        function renderFilterBadges() {
            const badgesHTML = conditions.map(condition => {
                const activeClass = selectedCondition === condition ? 'active' : '';
                return `<span class="filter-badge ${activeClass}" onclick="selectCondition('${condition}')">${condition}</span>`;
            }).join('');
            document.getElementById('filterBadges').innerHTML = badgesHTML;
        }

        // Render testimonials grid
        function renderTestimonials() {
            const filtered = filterTestimonials();
            const gridHTML = filtered.map(renderTestimonialCard).join('');
            document.getElementById('testimonialsGrid').innerHTML = gridHTML;
            lucide.createIcons();
        }

        // Render video list
        function renderVideoList() {
            const listHTML = videoTestimonials.map((video, index) => renderVideoCard(video, index)).join('');
            document.getElementById('videoList').innerHTML = listHTML;
            lucide.createIcons();
        }

        // Render video player
        function renderVideoPlayer() {
            const video = videoTestimonials[currentVideoIndex];
            let playerHTML = '';

            if (video.videoType === 'vimeo') {
                const vimeoUrl = `https://player.vimeo.com/video/${video.videoId}${video.vimeoHash ? `?h=${video.vimeoHash}&` : '?'}badge=0&autopause=0&player_id=0&app_id=58479`;
                playerHTML = `
                    <div style="padding: 56.25% 0 0 0; position: relative;">
                        <iframe
                            src="${vimeoUrl}"
                            frameborder="0"
                            allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                            title="${video.name} Testimonial">
                        </iframe>
                    </div>
                `;
            } else {
                playerHTML = `
                    <iframe
                        width="100%"
                        height="100%"
                        src="https://www.youtube.com/embed/${video.videoId}?controls=1&modestbranding=1"
                        title="${video.name} Testimonial"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                `;
            }

            document.getElementById('videoPlayer').innerHTML = playerHTML;
        }

        // Select condition filter
        function selectCondition(condition) {
            selectedCondition = condition;
            renderFilterBadges();
            renderTestimonials();
        }

        // Select video
        function selectVideo(index) {
            currentVideoIndex = index;
            renderVideoPlayer();
            renderVideoList();
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', () => {
            // Initial render
            renderFilterBadges();
            renderTestimonials();
            renderVideoList();
            renderVideoPlayer();
            lucide.createIcons();
        });
    </script>
</body>

</html>

