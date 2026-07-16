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

    <!-- Written Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    What Our Patients Say
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Real stories and experiences shared by our patients
                </p>
            </div>
            <div class="max-w-6xl mx-auto">
                <!-- Review Pixel -->
                <script type="text/javascript">
                !function(){
                    var e, t=document;
                    e=function(){
                        if(window.EMRPixel)return console.info("EMR: Pixel already loaded");
                        var e=t.createElement("script");
                        e.defer=!0,e.src="https://cdn2.revw.me/js/pixel.js?t="+864e5*Math.ceil(new Date/864e5);
                        var n=t.getElementsByTagName("script")[0];
                        n.charset="utf-8",n.parentNode.insertBefore(e,n),e.onload=function(){EMRPixel.init("reviewmagnet.in",77)}
                    };
                    "interactive"===t.readyState||"complete"===t.readyState?e():t.addEventListener("DOMContentLoaded",e)
                }();
                </script><emr-simple-carousel widget-id="0d48d0ef-ed40-4645-89ff-9ffc1366063e"></emr-simple-carousel>
                <!-- Review Pixel End -->
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
                quote: 'Depression is a miserable way to deal with life on a daily basis. When the meds don\'t seem to do the trick, TMS therapy is a sensible addition to treatment that has helped me in the battle.',
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
                quote: 'TMS has helped me incredibly. It took more than halfway through the sessions to see results but it definitely started to kick in. I highly recommend anyone suffering with depression etc to try TMS.',
                hasVideo: false,
                videoId: '',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1739296408127-b6cc9c5c094b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3MTg3MTl8MHwxfHNlYXJjaHwxfHxBJTIwcHJvZmlsZSUyMGF2YXRhciUyMGltYWdlJTIwb2YlMjBhJTIwcGVyc29uJTJDJTIwbGlrZWx5JTIwdXNlZCUyMGZvciUyLHRlc3RpbW9uaWFscyUyMG9yJTIwdXNlciUyMHJlcHJlc2VudGF0aW9uLnxlbnwwfHx8fDE3NTkyMzY3MDh8MA&ixlib=rb-4.1.0&q=80&w=200$w=512',
                date: '2024-02-03'
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
                avatar: 'https://images.unsplash.com/photo-1739296408127-b6cc9c5c094b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3MTg3MTl8MHwxfHNlYXJjaHwxfHxBJTIwcHJvZmlsZSUyMGF2YXRhciUyMGltYWdlJTIwb2YlMjBhJTIwcGVyc29uJTJDJTIwbGlrZWx5JTIwdXNlZCUyMGZvciUyLHRlc3RpbW9uaWFscyUyMG9yJTIwdXNlciUyMHJlcHJlc2VudGF0aW9uLnxlbnwwfHx8fDE3NTkyMzY3MDh8MA&ixlib=rb-4.1.0&q=80&w=200$w=512',
                date: '2024-02-12'
            },
            {
                id: 3,
                name: 'TMS Testimonial',
                location: 'Palm Springs, CA',
                condition: 'Depression & Anxiety Recovery',
                rating: 5,
                quote: 'Watch this patient share their personal journey and success with TMS therapy at Karma TMS.',
                hasVideo: true,
                videoId: 'sCHXbmZniyI',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=200&auto=format&fit=crop',
                date: '2024-01-28'
            },
            {
                id: 12,
                name: 'American Legion Andrea',
                location: 'Palm Springs, CA',
                condition: 'PTSD & Anxiety Treatment',
                rating: 5,
                quote: 'Andrea shares her powerful journey overcoming PTSD, anxiety, and sleep issues using TMS.',
                hasVideo: true,
                videoId: 'enYBQoGL6oo',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?q=80&w=200&auto=format&fit=crop',
                date: '2024-02-10'
            },
            {
                id: 13,
                name: 'Karma TMS Testimonial - April',
                location: 'Palm Springs, CA',
                condition: 'Anxiety & Sleep disturbances',
                rating: 5,
                quote: 'April discusses finding relief from chronic anxiety and sleep issues through TMS treatment.',
                hasVideo: true,
                videoId: 'EmWvKq17i8A',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1567532939604-b6b5b0db2604?q=80&w=200&auto=format&fit=crop',
                date: '2024-02-15'
            },
            {
                id: 15,
                name: 'Patient Testimonials Collection',
                location: 'Coachella Valley, CA',
                condition: 'Testimonials Compilation',
                rating: 5,
                quote: 'Colección de testimonios sobre la experiencia transformadora con la terapia TMS en Karma TMS.',
                hasVideo: true,
                videoId: '1106562016',
                videoType: 'vimeo',
                avatar: 'https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=200&auto=format&fit=crop',
                date: '2024-01-28'
            },
            {
                id: 16,
                name: 'Patient Success Stories',
                location: 'Coachella Valley, CA',
                condition: 'Testimonials Compilation',
                rating: 5,
                quote: 'Casos de éxito y testimonios de pacientes que han realizado el tratamiento de TMS.',
                hasVideo: true,
                videoId: '1098237681',
                videoType: 'vimeo',
                vimeoHash: 'b204c02062',
                avatar: 'https://images.unsplash.com/photo-1556761175-4b46a572b786?q=80&w=200&auto=format&fit=crop',
                date: '2024-01-20'
            },
            {
                id: 6,
                name: 'Luis',
                location: 'Palm Desert, CA',
                condition: 'Anxiety',
                rating: 5,
                quote: 'The comprehensive care I received at Karma TMS was exceptional. The staff made me feel comfortable and supported throughout my journey.',
                hasVideo: false,
                videoId: '',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1484863137850-59afcfe05386?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                date: '2024-03-01'
            },
            {
                id: 7,
                name: 'Lucia',
                location: 'Cathedral City, CA',
                condition: 'PTSD',
                rating: 5,
                quote: 'TMS therapy has given me hope again. I can finally envision a future free from the weight of my symptoms.',
                hasVideo: false,
                videoId: '',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1565979612809-d90c6ca38df9?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                date: '2024-03-05'
            },
            {
                id: 8,
                name: 'Thomas M.',
                location: 'Indian Wells, CA',
                condition: 'OCD',
                rating: 5,
                quote: 'After years of struggling, Karma TMS offered me a treatment that actually works. I\'m grateful every single day.',
                hasVideo: false,
                videoId: '',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1739296408127-b6cc9c5c094b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3MTg3MTl8MHwxfHNlYXJjaHwxfHxBJTIwcHJvZmlsZSUyMGF2YXRhciUyMGltYWdlJTIwb2YlMjBhJTIwcGVyc29uJTJDJTIwbGlrZWx5JTIwdXNlZCUyMGZvciUyMHRlc3RpbW9uaWFscyUyMG9yJTIwdXNlciUyMHJlcHJlc2VudGF0aW9uLnxlbnwwfHx8fDE3NTkyMzY3MDh8MA&ixlib=rb-4.1.0&q=80&w=200$w=512',
                date: '2024-03-10'
            },
            {
                id: 9,
                name: 'Benjamin A.',
                location: 'Rancho Mirage, CA',
                condition: 'Bipolar Depression',
                rating: 5,
                quote: 'The professional approach and cutting-edge technology at Karma TMS made all the difference in my recovery journey.',
                hasVideo: false,
                videoId: '',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&auto=format&fit=crop',
                date: '2024-02-20'
            },
            {
                id: 10,
                name: 'Nicole J.',
                location: 'La Quinta, CA',
                condition: 'Anxiety',
                rating: 5,
                quote: 'I was skeptical at first, but the results speak for themselves. TMS therapy transformed my life in ways I never thought possible.',
                hasVideo: false,
                videoId: '',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1739296408127-b6cc9c5c094b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3MTg3MTl8MHwxfHNlYXJjaHwxfHxBJTIwcHJvZmlsZSUyMGF2YXRhciUyMGltYWdlJTIwb2YlMjBhJTIwcGVyc29uJTJDJTIwbGlrZWx5JTIwdXNlZCUyMGZvciUyMHRlc3RpbW9uaWFscyUyMG9yJTIwdXNlciUyMHJlcHJlc2VudGF0aW9uLnxlbnwwfHx8fDE3NTkyMzY3MDh8MA&ixlib=rb-4.1.0&q=80&w=200$w=512',
                date: '2024-03-15'
            },
            {
                id: 11,
                name: 'Lynette I.',
                location: 'TwentyNine Palms, CA',
                condition: 'Depression',
                rating: 5,
                quote: 'The compassionate team at Karma TMS guided me through every step. I finally feel like myself again after years of struggle.',
                hasVideo: false,
                videoId: '',
                videoType: 'youtube',
                avatar: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=150&auto=format&fit=crop',
                date: '2024-02-25'
            }
        ];

        // State
        let currentVideoIndex = 0;

        // Get video testimonials
        const videoTestimonials = testimonials.filter(t => t.hasVideo);

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



        // Select video
        function selectVideo(index) {
            currentVideoIndex = index;
            renderVideoPlayer();
            renderVideoList();
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', () => {
            // Initial render
            renderVideoList();
            renderVideoPlayer();
            lucide.createIcons();
        });
    </script>
</body>

</html>