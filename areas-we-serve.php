<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas We Serve | Karma TMS - Coachella Valley & High Desert</title>
    <meta name="description"
        content="Karma TMS provides advanced TMS therapy and mental health care to cities across the Coachella Valley, High Desert, and Riverside County. Find a location near you.">
    <meta name="keywords"
        content="TMS therapy Coachella Valley, mental health services California, Palm Springs TMS, High Desert psychiatry, 29 Palms mental health, Southern California TMS">

    <?php include 'includes/header-links.php'; ?>

    <style>
        .location-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 2rem;
        }

        .location-item {
            padding: 0.5rem;
            color: #4b5563;
            font-size: 0.95rem;
            border-left: 2px solid #9333ea;
            padding-left: 1rem;
            transition: all 0.3s ease;
        }

        .location-item:hover {
            color: #9333ea;
            background-color: #f5f3ff;
            border-left-width: 4px;
        }

        .region-card {
            background: white;
            border-radius: 1rem;
            padding: 2.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            margin-bottom: 3rem;
            border: 1px solid #f3f4f6;
        }

        .region-title {
            color: #1a1a1a;
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .region-title span {
            color: #9333ea;
        }

        .city-badge {
            display: inline-block;
            background: #f3f4f6;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            color: #6b7280;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative text-white pt-32 pb-24 px-4"
        style="background: linear-gradient(to bottom right, #581c87, #6b21a8, #7e22ce);">
        <div class="absolute inset-0"
            style="background-image: url('/assets/images/img-40bc88067423.jpg'); background-size: cover; background-position: center; opacity: 0.1;">
        </div>
        <div class="container mx-auto relative" style="z-index: 10;">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Nearby Cities <span style="color: #d8b4fe;">We Serve</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-8 max-w-3xl" style="color: rgba(216, 180, 254, 1);">
                Providing breakthrough TMS therapy and compassionate psychiatry to patients throughout Southern California's desert and metropolitan regions.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6">Serving the Community</h2>
                    <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                        Karma TMS is proud to be a regional leader in mental health, accepting patients from cities, towns, and communities across the Coachella Valley, High Desert, and Riverside County regions.
                    </p>
                </div>

                <!-- Near Me Intent Feature Card -->
                <div class="region-card" style="background: linear-gradient(135deg, #f5f3ff 0%, #ede9fe 100%); border: 2px solid #c084fc; margin-bottom: 2.5rem;">
                    <div>
                        <span class="city-badge" style="background: #9333ea; color: white;">Fast Proximity Routing</span>
                        <h2 class="region-title" style="margin-bottom: 0.75rem;">
                            <i data-lucide="navigation" class="w-8 h-8 text-purple-600"></i>
                            <span>Looking for TMS Therapy</span> Near You?
                        </h2>
                        <p class="text-gray-700 max-w-2xl text-base leading-relaxed mb-4">
                            Use our regional proximity directory to instantly discover which Karma TMS clinical center is closest to your home or office, along with exact mileage, estimated drive times, and accepted insurance plans.
                        </p>
                        <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; font-size: 0.9rem;">
                            <a href="tms-therapy-near-me.php" style="background: #7e22ce; color: white; padding: 0.6rem 1.25rem; border-radius: 9999px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                                <i data-lucide="map-pin" class="w-4 h-4"></i> TMS Therapy Near Me (Main Hub)
                            </a>
                            <a href="tms-clinic-near-me.php" style="background: white; color: #6b21a8; border: 1px solid #c084fc; padding: 0.6rem 1.25rem; border-radius: 9999px; font-weight: 700; text-decoration: none;">
                                TMS Clinic Near Me
                            </a>
                            <a href="tms-therapy-near-me-coachella-valley.php" style="background: white; color: #6b21a8; border: 1px solid #c084fc; padding: 0.6rem 1.25rem; border-radius: 9999px; font-weight: 700; text-decoration: none;">
                                Coachella Valley Near Me
                            </a>
                            <a href="tms-therapy-near-me-high-desert.php" style="background: white; color: #6b21a8; border: 1px solid #c084fc; padding: 0.6rem 1.25rem; border-radius: 9999px; font-weight: 700; text-decoration: none;">
                                High Desert Near Me
                            </a>
                            <a href="depression-tms-therapy-near-me.php" style="background: white; color: #6b21a8; border: 1px solid #c084fc; padding: 0.6rem 1.25rem; border-radius: 9999px; font-weight: 700; text-decoration: none;">
                                Depression TMS Near Me
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Coachella Valley Hub -->
                <div class="region-card">
                    <span class="city-badge">Coachella Valley Hub</span>
                    <h2 class="region-title">
                        <i data-lucide="map-pin" class="w-8 h-8 text-purple-600"></i>
                        <span>Coachella Valley</span> & Surrounding Cities
                    </h2>
                    <p class="text-gray-600 mb-4">Our Palm Springs center serves the heart of the desert and extended areas including:</p>
                    <div class="location-grid">
                                                <a href="tms-therapy-cathedral-city.php" class="location-item" style="text-decoration: none; display: block;">Cathedral City</a>
                        <a href="tms-therapy-palm-desert.php" class="location-item" style="text-decoration: none; display: block;">Palm Desert</a>
                                                <a href="tms-therapy-indian-wells.php" class="location-item" style="text-decoration: none; display: block;">Indian Wells</a>
                        <a href="tms-therapy-la-quinta.php" class="location-item" style="text-decoration: none; display: block;">La Quinta</a>
                        <a href="tms-therapy-indio.php" class="location-item" style="text-decoration: none; display: block;">Indio</a>
                        <a href="tms-therapy-coachella.php" class="location-item" style="text-decoration: none; display: block;">Coachella</a>
                        <a href="tms-therapy-desert-hot-springs.php" class="location-item" style="text-decoration: none; display: block;">Desert Hot Springs</a>
                        <a href="tms-therapy-thousand-palms.php" class="location-item" style="text-decoration: none; display: block;">Thousand Palms</a>
                        <a href="tms-therapy-bermuda-dunes.php" class="location-item" style="text-decoration: none; display: block;">Bermuda Dunes</a>
                        <a href="tms-therapy-mecca.php" class="location-item" style="text-decoration: none; display: block;">Mecca</a>
                        <a href="tms-therapy-thermal.php" class="location-item" style="text-decoration: none; display: block;">Thermal</a>
                        <a href="tms-therapy-north-shore.php" class="location-item" style="text-decoration: none; display: block;">North Shore</a>
                        <a href="tms-therapy-cabazon.php" class="location-item" style="text-decoration: none; display: block;">Cabazon</a>
                        <a href="tms-therapy-whitewater.php" class="location-item" style="text-decoration: none; display: block;">Whitewater</a>
                        <a href="tms-therapy-banning.php" class="location-item" style="text-decoration: none; display: block;">Banning</a>
                        <a href="tms-therapy-beaumont.php" class="location-item" style="text-decoration: none; display: block;">Beaumont</a>
                        <a href="tms-therapy-san-jacinto.php" class="location-item" style="text-decoration: none; display: block;">San Jacinto</a>
                        <a href="tms-therapy-hemet.php" class="location-item" style="text-decoration: none; display: block;">Hemet</a>
                        <a href="tms-therapy-menifee.php" class="location-item" style="text-decoration: none; display: block;">Menifee</a>
                        <a href="tms-therapy-perris.php" class="location-item" style="text-decoration: none; display: block;">Perris</a>
                        <a href="tms-therapy-moreno-valley.php" class="location-item" style="text-decoration: none; display: block;">Moreno Valley</a>
                        <a href="tms-therapy-murrieta.php" class="location-item" style="text-decoration: none; display: block;">Murrieta</a>
                        <a href="tms-therapy-temecula.php" class="location-item" style="text-decoration: none; display: block;">Temecula</a>
                        <a href="tms-therapy-winchester.php" class="location-item" style="text-decoration: none; display: block;">Winchester</a>
                        <a href="tms-therapy-idyllwild.php" class="location-item" style="text-decoration: none; display: block;">Idyllwild</a>
                        <a href="tms-therapy-mountain-center.php" class="location-item" style="text-decoration: none; display: block;">Mountain Center</a>
                        <a href="tms-therapy-anza.php" class="location-item" style="text-decoration: none; display: block;">Anza</a>
                        <a href="tms-therapy-borrego-springs.php" class="location-item" style="text-decoration: none; display: block;">Borrego Springs</a>
                        <a href="tms-therapy-ranchita.php" class="location-item" style="text-decoration: none; display: block;">Ranchita</a>
                        <a href="tms-therapy-warner-springs.php" class="location-item" style="text-decoration: none; display: block;">Warner Springs</a>
                        <a href="tms-therapy-salton-city.php" class="location-item" style="text-decoration: none; display: block;">Salton City</a>
                        <a href="tms-therapy-desert-shores.php" class="location-item" style="text-decoration: none; display: block;">Desert Shores</a>
                        <a href="tms-therapy-bombay-beach.php" class="location-item" style="text-decoration: none; display: block;">Bombay Beach</a>
                        <a href="tms-therapy-niland.php" class="location-item" style="text-decoration: none; display: block;">Niland</a>
                        <a href="tms-therapy-calipatria.php" class="location-item" style="text-decoration: none; display: block;">Calipatria</a>
                        <a href="tms-therapy-lake-elsinore.php" class="location-item" style="text-decoration: none; display: block;">Lake Elsinore</a>
                        <a href="tms-therapy-wildomar.php" class="location-item" style="text-decoration: none; display: block;">Wildomar</a>
                    </div>
                </div>

                <!-- High Desert Hub -->
                <div class="region-card">
                    <span class="city-badge">High Desert Hub</span>
                    <h2 class="region-title">
                        <i data-lucide="map-pin" class="w-8 h-8 text-purple-600"></i>
                        <span>High Desert</span> & Mountain Communities
                    </h2>
                    <p class="text-gray-600 mb-4">Serving residents throughout the High Desert Basin, mountain communities, and Colorado River regions:</p>
                    <div class="location-grid">
                        <a href="tms-therapy-morongo-valley.php" class="location-item" style="text-decoration: none; display: block;">Morongo Valley</a>
                        <a href="tms-therapy-yucca-valley.php" class="location-item" style="text-decoration: none; display: block;">Yucca Valley</a>
                        <a href="tms-therapy-joshua-tree.php" class="location-item" style="text-decoration: none; display: block;">Joshua Tree</a>
                        <a href="tms-therapy-wonder-valley.php" class="location-item" style="text-decoration: none; display: block;">Wonder Valley</a>
                        <a href="tms-therapy-landers.php" class="location-item" style="text-decoration: none; display: block;">Landers</a>
                        <a href="tms-therapy-lucerne-valley.php" class="location-item" style="text-decoration: none; display: block;">Lucerne Valley</a>
                        <a href="tms-therapy-apple-valley.php" class="location-item" style="text-decoration: none; display: block;">Apple Valley</a>
                        <a href="tms-therapy-victorville.php" class="location-item" style="text-decoration: none; display: block;">Victorville</a>
                        <a href="tms-therapy-hesperia.php" class="location-item" style="text-decoration: none; display: block;">Hesperia</a>
                        <a href="tms-therapy-adelanto.php" class="location-item" style="text-decoration: none; display: block;">Adelanto</a>
                        <a href="tms-therapy-barstow.php" class="location-item" style="text-decoration: none; display: block;">Barstow</a>
                        <a href="tms-therapy-amboy.php" class="location-item" style="text-decoration: none; display: block;">Amboy</a>
                        <a href="tms-therapy-ludlow.php" class="location-item" style="text-decoration: none; display: block;">Ludlow</a>
                        <a href="tms-therapy-needles.php" class="location-item" style="text-decoration: none; display: block;">Needles</a>
                        <a href="tms-therapy-blythe.php" class="location-item" style="text-decoration: none; display: block;">Blythe</a>
                        <a href="tms-therapy-palo-verde.php" class="location-item" style="text-decoration: none; display: block;">Palo Verde</a>
                        <a href="tms-therapy-cibola.php" class="location-item" style="text-decoration: none; display: block;">Cibola</a>
                        <a href="tms-therapy-quartzsite.php" class="location-item" style="text-decoration: none; display: block;">Quartzsite</a>
                        <a href="tms-therapy-parker.php" class="location-item" style="text-decoration: none; display: block;">Parker</a>
                        <a href="tms-therapy-yucaipa.php" class="location-item" style="text-decoration: none; display: block;">Yucaipa</a>
                        <a href="tms-therapy-redlands.php" class="location-item" style="text-decoration: none; display: block;">Redlands</a>
                        <a href="tms-therapy-san-bernardino.php" class="location-item" style="text-decoration: none; display: block;">San Bernardino</a>
                        <a href="tms-therapy-riverside.php" class="location-item" style="text-decoration: none; display: block;">Riverside</a>
                        <a href="tms-therapy-big-bear-lake.php" class="location-item" style="text-decoration: none; display: block;">Big Bear Lake</a>
                        <a href="tms-therapy-big-bear-city.php" class="location-item" style="text-decoration: none; display: block;">Big Bear City</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
                <!-- Dedicated Condition & Service Location Hubs -->
                <div class="region-card" style="border: 2px solid #e9d5ff; background: linear-gradient(to bottom, #ffffff, #faf5ff);">
                    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem;">
                        <div>
                            <span class="city-badge" style="background: #f3e8ff; color: #7e22ce;">Specialized Care by Location</span>
                            <h2 class="region-title" style="margin-bottom: 0.5rem;">
                                <i data-lucide="stethoscope" class="w-8 h-8 text-purple-600"></i>
                                <span>Condition-Specific</span> Clinical Centers
                            </h2>
                            <p class="text-gray-600">Karma TMS delivers specialized clinical protocols targeted to specific psychiatric diagnoses at our accredited medical centers and serving neighboring desert communities.</p>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
                        <!-- Depression -->
                        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 0.75rem; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1f2937; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i data-lucide="activity" class="w-5 h-5 text-purple-600"></i> Depression Centers
                            </h3>
                            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.4rem; font-size: 0.9rem;">
                                <li><a href="depression-treatment-palm-springs.php" style="color: #6b21a8; font-weight: 600; text-decoration: none;">&bull; Palm Springs Hub</a></li>
                                <li><a href="depression-treatment-rancho-mirage.php" style="color: #4b5563; text-decoration: none;">&bull; Rancho Mirage Hub</a></li>
                                <li><a href="depression-treatment-twentynine-palms.php" style="color: #4b5563; text-decoration: none;">&bull; Twentynine Palms Hub</a></li>
                                <li><a href="depression-treatment-palm-desert.php" style="color: #4b5563; text-decoration: none;">&bull; Palm Desert Area</a></li>
                                <li><a href="depression-treatment-la-quinta.php" style="color: #4b5563; text-decoration: none;">&bull; La Quinta Area</a></li>
                            </ul>
                        </div>

                        <!-- Anxiety -->
                        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 0.75rem; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1f2937; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i data-lucide="heart" class="w-5 h-5 text-purple-600"></i> Anxiety Centers
                            </h3>
                            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.4rem; font-size: 0.9rem;">
                                <li><a href="anxiety-treatment-palm-springs.php" style="color: #6b21a8; font-weight: 600; text-decoration: none;">&bull; Palm Springs Hub</a></li>
                                <li><a href="anxiety-treatment-rancho-mirage.php" style="color: #4b5563; text-decoration: none;">&bull; Rancho Mirage Hub</a></li>
                                <li><a href="anxiety-treatment-twentynine-palms.php" style="color: #4b5563; text-decoration: none;">&bull; Twentynine Palms Hub</a></li>
                                <li><a href="anxiety-treatment-palm-desert.php" style="color: #4b5563; text-decoration: none;">&bull; Palm Desert Area</a></li>
                            </ul>
                        </div>

                        <!-- OCD -->
                        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 0.75rem; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1f2937; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i data-lucide="shield" class="w-5 h-5 text-purple-600"></i> OCD Centers
                            </h3>
                            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.4rem; font-size: 0.9rem;">
                                <li><a href="ocd-treatment-palm-springs.php" style="color: #6b21a8; font-weight: 600; text-decoration: none;">&bull; Palm Springs Hub</a></li>
                                <li><a href="ocd-treatment-rancho-mirage.php" style="color: #4b5563; text-decoration: none;">&bull; Rancho Mirage Hub</a></li>
                                <li><a href="ocd-treatment-twentynine-palms.php" style="color: #4b5563; text-decoration: none;">&bull; Twentynine Palms Hub</a></li>
                                <li><a href="ocd-treatment-palm-desert.php" style="color: #4b5563; text-decoration: none;">&bull; Palm Desert Area</a></li>
                            </ul>
                        </div>

                        <!-- PTSD & Veterans -->
                        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 0.75rem; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1f2937; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i data-lucide="shield-alert" class="w-5 h-5 text-purple-600"></i> PTSD & Veteran Trauma
                            </h3>
                            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.4rem; font-size: 0.9rem;">
                                <li><a href="ptsd-treatment-twentynine-palms.php" style="color: #6b21a8; font-weight: 600; text-decoration: none;">&bull; 29 Palms Military Hub (TRICARE)</a></li>
                                <li><a href="ptsd-treatment-palm-springs.php" style="color: #4b5563; text-decoration: none;">&bull; Palm Springs Hub</a></li>
                                <li><a href="ptsd-treatment-rancho-mirage.php" style="color: #4b5563; text-decoration: none;">&bull; Rancho Mirage Hub</a></li>
                            </ul>
                        </div>

                        <!-- Bipolar Disorder -->
                        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 0.75rem; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1f2937; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i data-lucide="sparkles" class="w-5 h-5 text-purple-600"></i> Bipolar Depression
                            </h3>
                            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.4rem; font-size: 0.9rem;">
                                <li><a href="bipolar-treatment-palm-springs.php" style="color: #6b21a8; font-weight: 600; text-decoration: none;">&bull; Palm Springs Hub</a></li>
                                <li><a href="bipolar-treatment-rancho-mirage.php" style="color: #4b5563; text-decoration: none;">&bull; Rancho Mirage Hub</a></li>
                                <li><a href="bipolar-treatment-twentynine-palms.php" style="color: #4b5563; text-decoration: none;">&bull; Twentynine Palms Hub</a></li>
                            </ul>
                        </div>

                        <!-- Addiction -->
                        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 0.75rem; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1f2937; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i data-lucide="zap" class="w-5 h-5 text-purple-600"></i> Addiction & Cravings
                            </h3>
                            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.4rem; font-size: 0.9rem;">
                                <li><a href="addiction-treatment-palm-springs.php" style="color: #6b21a8; font-weight: 600; text-decoration: none;">&bull; Palm Springs Hub</a></li>
                                <li><a href="addiction-treatment-rancho-mirage.php" style="color: #4b5563; text-decoration: none;">&bull; Rancho Mirage Hub</a></li>
                                <li><a href="addiction-treatment-twentynine-palms.php" style="color: #4b5563; text-decoration: none;">&bull; Twentynine Palms Hub</a></li>
                            </ul>
                        </div>

                        <!-- Women's Mood -->
                        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 0.75rem; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1f2937; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i data-lucide="smile" class="w-5 h-5 text-purple-600"></i> Women's Mood
                            </h3>
                            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.4rem; font-size: 0.9rem;">
                                <li><a href="womens-mood-treatment-palm-springs.php" style="color: #6b21a8; font-weight: 600; text-decoration: none;">&bull; Palm Springs Hub</a></li>
                                <li><a href="womens-mood-treatment-rancho-mirage.php" style="color: #4b5563; text-decoration: none;">&bull; Rancho Mirage Hub</a></li>
                                <li><a href="womens-mood-treatment-twentynine-palms.php" style="color: #4b5563; text-decoration: none;">&bull; Twentynine Palms Hub</a></li>
                            </ul>
                        </div>

                        <!-- Specialized Services -->
                        <div style="background: white; border: 1px solid #e5e7eb; border-radius: 0.75rem; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1f2937; margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i data-lucide="cpu" class="w-5 h-5 text-purple-600"></i> Advanced Modalities
                            </h3>
                            <div style="font-size: 0.85rem; color: #6b7280; margin-bottom: 0.35rem; font-weight: 600;">Personalized PrTMS®:</div>
                            <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 0.6rem;">
                                <a href="prtms-palm-springs.php" style="color: #6b21a8; font-size: 0.8rem; background: #f3e8ff; padding: 2px 8px; border-radius: 4px; text-decoration: none;">Palm Springs</a>
                                <a href="prtms-rancho-mirage.php" style="color: #6b21a8; font-size: 0.8rem; background: #f3e8ff; padding: 2px 8px; border-radius: 4px; text-decoration: none;">Rancho Mirage</a>
                                <a href="prtms-twentynine-palms.php" style="color: #6b21a8; font-size: 0.8rem; background: #f3e8ff; padding: 2px 8px; border-radius: 4px; text-decoration: none;">29 Palms</a>
                            </div>
                            <div style="font-size: 0.85rem; color: #6b7280; margin-bottom: 0.35rem; font-weight: 600;">qEEG Brain Mapping:</div>
                            <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 0.6rem;">
                                <a href="brain-mapping-palm-springs.php" style="color: #6b21a8; font-size: 0.8rem; background: #f3e8ff; padding: 2px 8px; border-radius: 4px; text-decoration: none;">Palm Springs</a>
                                <a href="brain-mapping-rancho-mirage.php" style="color: #6b21a8; font-size: 0.8rem; background: #f3e8ff; padding: 2px 8px; border-radius: 4px; text-decoration: none;">Rancho Mirage</a>
                                <a href="brain-mapping-twentynine-palms.php" style="color: #6b21a8; font-size: 0.8rem; background: #f3e8ff; padding: 2px 8px; border-radius: 4px; text-decoration: none;">29 Palms</a>
                            </div>
                            <div style="font-size: 0.85rem; color: #6b7280; margin-bottom: 0.35rem; font-weight: 600;">Medication Management:</div>
                            <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                                <a href="medication-management-palm-springs.php" style="color: #6b21a8; font-size: 0.8rem; background: #f3e8ff; padding: 2px 8px; border-radius: 4px; text-decoration: none;">Palm Springs</a>
                                <a href="medication-management-rancho-mirage.php" style="color: #6b21a8; font-size: 0.8rem; background: #f3e8ff; padding: 2px 8px; border-radius: 4px; text-decoration: none;">Rancho Mirage</a>
                                <a href="medication-management-twentynine-palms.php" style="color: #6b21a8; font-size: 0.8rem; background: #f3e8ff; padding: 2px 8px; border-radius: 4px; text-decoration: none;">29 Palms</a>
                            </div>
                        </div>
                    </div>
                </div>

    
                <!-- Hyperlocal Depression Care by Community -->
                <div class="region-card" style="border: 1px solid #d8b4fe;">
            <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid #e5e7eb;">
                <h4 style="font-size: 0.9rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; color: #4c1d95; margin-bottom: 0.75rem;">Hyperlocal Depression Care by Community</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 0.5rem 1rem; font-size: 0.85rem;">
                    <a href="tms-therapy-for-depression-near-palm-desert.php" style="color: #6b21a8; text-decoration: none;">&bull; Palm Desert</a>
                    <a href="tms-therapy-for-depression-near-cathedral-city.php" style="color: #6b21a8; text-decoration: none;">&bull; Cathedral City</a>
                    <a href="tms-therapy-for-depression-near-la-quinta.php" style="color: #6b21a8; text-decoration: none;">&bull; La Quinta</a>
                    <a href="tms-therapy-for-depression-near-indio.php" style="color: #6b21a8; text-decoration: none;">&bull; Indio</a>
                    <a href="tms-therapy-for-depression-near-desert-hot-springs.php" style="color: #6b21a8; text-decoration: none;">&bull; Desert Hot Springs</a>
                    <a href="tms-therapy-for-depression-near-indian-wells.php" style="color: #6b21a8; text-decoration: none;">&bull; Indian Wells</a>
                    <a href="tms-therapy-for-depression-near-yucca-valley.php" style="color: #6b21a8; text-decoration: none;">&bull; Yucca Valley</a>
                    <a href="tms-therapy-for-depression-near-joshua-tree.php" style="color: #6b21a8; text-decoration: none;">&bull; Joshua Tree</a>
                    <a href="tms-therapy-for-depression-near-twentynine-palms.php" style="color: #6b21a8; text-decoration: none;">&bull; Twentynine Palms</a>
                    <a href="tms-therapy-for-depression-near-mcagcc-29-palms.php" style="color: #6b21a8; text-decoration: none;">&bull; MCAGCC 29 Palms</a>
                    <a href="tms-therapy-for-depression-near-coachella.php" style="color: #6b21a8; text-decoration: none;">&bull; Coachella</a>
                    <a href="tms-therapy-for-depression-near-thousand-palms.php" style="color: #6b21a8; text-decoration: none;">&bull; Thousand Palms</a>
                    <a href="tms-therapy-for-depression-near-morongo-valley.php" style="color: #6b21a8; text-decoration: none;">&bull; Morongo Valley</a>
                    <a href="tms-therapy-for-depression-near-landers.php" style="color: #6b21a8; text-decoration: none;">&bull; Landers</a>
                    <a href="tms-therapy-for-depression-near-banning.php" style="color: #6b21a8; text-decoration: none;">&bull; Banning</a>
                    <a href="tms-therapy-for-depression-near-beaumont.php" style="color: #6b21a8; text-decoration: none;">&bull; Beaumont</a>
                </div>
            </div>
                </div>

    <!-- Final CTA Section -->
    <section class="py-20 text-white" style="background: linear-gradient(to bottom right, #581c87, #6b21a8, #7e22ce);">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold mb-6">Access World-Class Care Near You</h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto" style="color: rgba(216, 180, 254, 1);">
                No matter your location in the High Desert or Coachella Valley, Karma TMS is your partner in mental wellness. Take the first step today.
            </p>
            <div class="flex flex-row flex-wrap gap-4 justify-center">
                <a href="contact-us.php" class="bm-hero-btn text-white" style="background-color: #9333ea; padding: 1rem 2.5rem; border-radius: 9999px; font-weight: 700;">
                    Schedule Consultation
                </a>
                <a href="tms-quiz.php" class="bm-outline-btn text-white" style="background-color: #1a1a1a; padding: 1rem 2.5rem; border-radius: 9999px; font-weight: 700; border: 1px solid white;">
                    Take TMS Quiz
                </a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
    </script>
</body>

</html>