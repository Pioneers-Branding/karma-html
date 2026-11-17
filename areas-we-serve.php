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

        .location-dist {
            display: block;
            font-size: 0.78rem;
            color: #9ca3af;
            margin-top: 0.1rem;
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
                Karma TMS has three clinics: Palm Springs, Rancho Mirage, and Twentynine Palms. We welcome patients from the communities below, who travel to the clinic closest to them.
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
                        Karma TMS is proud to be a regional leader in mental health, accepting patients from cities, towns, and communities across the Coachella Valley, High Desert, mountain communities, and Inland Empire. Every patient is seen at one of our three clinics.
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

                <!-- Our Clinic Locations -->
                <div class="region-card" style="border: 2px solid #c084fc;">
                    <span class="city-badge" style="background: #9333ea; color: white;">Our 3 Clinic Locations</span>
                    <h2 class="region-title">
                        <i data-lucide="building-2" class="w-8 h-8 text-purple-600"></i>
                        <span>Where</span> Karma TMS Sees Patients
                    </h2>
                    <p class="text-gray-700 mb-2" style="font-size: 1.05rem;"><strong>Karma TMS has exactly three clinics.</strong> We do not have offices in any of the other cities listed on this page. Those communities are areas whose residents travel to one of these clinics:</p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1rem; margin-top: 1.5rem;">
                        <div style="background: white; border: 1px solid #e9d5ff; border-radius: 0.75rem; padding: 1.25rem;">
                            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1f2937; margin-bottom: 0.35rem; display: flex; align-items: center; gap: 0.5rem;"><i data-lucide="building-2" class="w-5 h-5 text-purple-600"></i> Palm Springs Clinic</h3>
                            <p style="color: #4b5563; font-size: 0.9rem; margin-bottom: 0.75rem;">560 S. Paseo Dorotea, Suite 4-B, Palm Springs, CA 92264</p>
                            <a href="https://www.google.com/maps/dir/?api=1&amp;destination=Karma%20TMS%2C%20560%20S.%20Paseo%20Dorotea%2C%20Suite%204-B%2C%20Palm%20Springs%2C%20CA%2092264" target="_blank" rel="noopener noreferrer" style="color: #7e22ce; font-weight: 700; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">Get Directions <i data-lucide="arrow-up-right" class="w-4 h-4"></i></a>
                        </div>
                        <div style="background: white; border: 1px solid #e9d5ff; border-radius: 0.75rem; padding: 1.25rem;">
                            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1f2937; margin-bottom: 0.35rem; display: flex; align-items: center; gap: 0.5rem;"><i data-lucide="building-2" class="w-5 h-5 text-purple-600"></i> Rancho Mirage Clinic</h3>
                            <p style="color: #4b5563; font-size: 0.9rem; margin-bottom: 0.75rem;">35400 Bob Hope Dr., Suite 206-B, Rancho Mirage, CA 92270</p>
                            <a href="https://www.google.com/maps/dir/?api=1&amp;destination=Karma%20TMS%2C%2035400%20Bob%20Hope%20Dr.%2C%20Suite%20206-B%2C%20Rancho%20Mirage%2C%20CA%2092270" target="_blank" rel="noopener noreferrer" style="color: #7e22ce; font-weight: 700; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">Get Directions <i data-lucide="arrow-up-right" class="w-4 h-4"></i></a>
                        </div>
                        <div style="background: white; border: 1px solid #e9d5ff; border-radius: 0.75rem; padding: 1.25rem;">
                            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1f2937; margin-bottom: 0.35rem; display: flex; align-items: center; gap: 0.5rem;"><i data-lucide="building-2" class="w-5 h-5 text-purple-600"></i> Twentynine Palms Clinic</h3>
                            <p style="color: #4b5563; font-size: 0.9rem; margin-bottom: 0.75rem;">72724 29 Palms Hwy., Suite 107-B, Twentynine Palms, CA 92277</p>
                            <a href="https://www.google.com/maps/dir/?api=1&amp;destination=Karma%20TMS%2C%2072724%2029%20Palms%20Hwy.%2C%20Suite%20107-B%2C%20Twentynine%20Palms%2C%20CA%2092277" target="_blank" rel="noopener noreferrer" style="color: #7e22ce; font-weight: 700; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">Get Directions <i data-lucide="arrow-up-right" class="w-4 h-4"></i></a>
                        </div>
                    </div>
                </div>

                <div class="region-card">
                    <span class="city-badge">Closest clinic: Palm Springs</span>
                    <h2 class="region-title">
                        <i data-lucide="map-pin" class="w-8 h-8 text-purple-600"></i>
                        <span>Communities Closest to</span> Palm Springs
                    </h2>
                    <p class="text-gray-600 mb-4">Patients from these communities are usually closest to our Palm Springs clinic at 560 S. Paseo Dorotea, Suite 4-B, Palm Springs, CA 92264. Distances are typical drive distances and times to that clinic. Each town page compares all three clinics.</p>
                    <div class="location-grid">
                        <a href="tms-therapy-desert-hot-springs.php" class="location-item" style="text-decoration: none; display: block;">Desert Hot Springs<span class="location-dist">~11 mi &middot; 20 min</span></a>
                        <a href="tms-therapy-desert-edge.php" class="location-item" style="text-decoration: none; display: block;">Desert Edge<span class="location-dist">~12 mi &middot; 20 min</span></a>
                        <a href="tms-therapy-whitewater.php" class="location-item" style="text-decoration: none; display: block;">Whitewater<span class="location-dist">~18 mi &middot; 25 min</span></a>
                        <a href="tms-therapy-cabazon.php" class="location-item" style="text-decoration: none; display: block;">Cabazon<span class="location-dist">~23 mi &middot; 30 min</span></a>
                        <a href="tms-therapy-sky-valley.php" class="location-item" style="text-decoration: none; display: block;">Sky Valley<span class="location-dist">~18 mi &middot; 30 min</span></a>
                        <a href="tms-therapy-banning.php" class="location-item" style="text-decoration: none; display: block;">Banning<span class="location-dist">~30 mi &middot; 35 min</span></a>
                        <a href="tms-therapy-morongo-valley.php" class="location-item" style="text-decoration: none; display: block;">Morongo Valley<span class="location-dist">~25 mi &middot; 35 min</span></a>
                        <a href="tms-therapy-beaumont.php" class="location-item" style="text-decoration: none; display: block;">Beaumont<span class="location-dist">~35 mi &middot; 40 min</span></a>
                        <a href="tms-therapy-cherry-valley.php" class="location-item" style="text-decoration: none; display: block;">Cherry Valley<span class="location-dist">~35 mi &middot; 45 min</span></a>
                        <a href="tms-therapy-calimesa.php" class="location-item" style="text-decoration: none; display: block;">Calimesa<span class="location-dist">~40 mi &middot; 50 min</span></a>
                        <a href="tms-therapy-yucaipa.php" class="location-item" style="text-decoration: none; display: block;">Yucaipa<span class="location-dist">~45 mi &middot; 55 min</span></a>
                        <a href="tms-therapy-san-jacinto.php" class="location-item" style="text-decoration: none; display: block;">San Jacinto<span class="location-dist">~45 mi &middot; 55 min</span></a>
                        <a href="tms-therapy-oak-glen.php" class="location-item" style="text-decoration: none; display: block;">Oak Glen<span class="location-dist">~45 mi &middot; 55 min</span></a>
                        <a href="tms-therapy-redlands.php" class="location-item" style="text-decoration: none; display: block;">Redlands<span class="location-dist">~50 mi &middot; 1 hr</span></a>
                        <a href="tms-therapy-hemet.php" class="location-item" style="text-decoration: none; display: block;">Hemet<span class="location-dist">~50 mi &middot; 1 hr</span></a>
                        <a href="tms-therapy-mentone.php" class="location-item" style="text-decoration: none; display: block;">Mentone<span class="location-dist">~50 mi &middot; 1 hr</span></a>
                        <a href="tms-therapy-moreno-valley.php" class="location-item" style="text-decoration: none; display: block;">Moreno Valley<span class="location-dist">~50 mi &middot; 1 hr</span></a>
                        <a href="tms-therapy-east-hemet.php" class="location-item" style="text-decoration: none; display: block;">East Hemet<span class="location-dist">~50 mi &middot; 1 hr 5 min</span></a>
                        <a href="tms-therapy-pine-cove.php" class="location-item" style="text-decoration: none; display: block;">Pine Cove<span class="location-dist">~50 mi &middot; 1 hr 5 min</span></a>
                        <a href="tms-therapy-nuevo.php" class="location-item" style="text-decoration: none; display: block;">Nuevo<span class="location-dist">~50 mi &middot; 1 hr 5 min</span></a>
                        <a href="tms-therapy-loma-linda.php" class="location-item" style="text-decoration: none; display: block;">Loma Linda<span class="location-dist">~55 mi &middot; 1 hr 5 min</span></a>
                        <a href="tms-therapy-highland.php" class="location-item" style="text-decoration: none; display: block;">Highland<span class="location-dist">~55 mi &middot; 1 hr 5 min</span></a>
                        <a href="tms-therapy-valley-vista.php" class="location-item" style="text-decoration: none; display: block;">Valley Vista<span class="location-dist">~50 mi &middot; 1 hr 5 min</span></a>
                        <a href="tms-therapy-homeland.php" class="location-item" style="text-decoration: none; display: block;">Homeland<span class="location-dist">~55 mi &middot; 1 hr 5 min</span></a>
                        <a href="tms-therapy-colton.php" class="location-item" style="text-decoration: none; display: block;">Colton<span class="location-dist">~60 mi &middot; 1 hr 5 min</span></a>
                        <a href="tms-therapy-winchester.php" class="location-item" style="text-decoration: none; display: block;">Winchester<span class="location-dist">~55 mi &middot; 1 hr 10 min</span></a>
                        <a href="tms-therapy-grand-terrace.php" class="location-item" style="text-decoration: none; display: block;">Grand Terrace<span class="location-dist">~60 mi &middot; 1 hr 10 min</span></a>
                        <a href="tms-therapy-march-arb.php" class="location-item" style="text-decoration: none; display: block;">March ARB<span class="location-dist">~55 mi &middot; 1 hr 10 min</span></a>
                        <a href="tms-therapy-san-bernardino.php" class="location-item" style="text-decoration: none; display: block;">San Bernardino<span class="location-dist">~60 mi &middot; 1 hr 10 min</span></a>
                        <a href="tms-therapy-riverside.php" class="location-item" style="text-decoration: none; display: block;">Riverside<span class="location-dist">~60 mi &middot; 1 hr 10 min</span></a>
                        <a href="tms-therapy-romoland.php" class="location-item" style="text-decoration: none; display: block;">Romoland<span class="location-dist">~60 mi &middot; 1 hr 15 min</span></a>
                        <a href="tms-therapy-forest-falls.php" class="location-item" style="text-decoration: none; display: block;">Forest Falls<span class="location-dist">~55 mi &middot; 1 hr 15 min</span></a>
                        <a href="tms-therapy-perris.php" class="location-item" style="text-decoration: none; display: block;">Perris<span class="location-dist">~60 mi &middot; 1 hr 15 min</span></a>
                        <a href="tms-therapy-mead-valley.php" class="location-item" style="text-decoration: none; display: block;">Mead Valley<span class="location-dist">~60 mi &middot; 1 hr 15 min</span></a>
                        <a href="tms-therapy-rialto.php" class="location-item" style="text-decoration: none; display: block;">Rialto<span class="location-dist">~65 mi &middot; 1 hr 15 min</span></a>
                        <a href="tms-therapy-angelus-oaks.php" class="location-item" style="text-decoration: none; display: block;">Angelus Oaks<span class="location-dist">~60 mi &middot; 1 hr 15 min</span></a>
                        <a href="tms-therapy-french-valley.php" class="location-item" style="text-decoration: none; display: block;">French Valley<span class="location-dist">~60 mi &middot; 1 hr 15 min</span></a>
                        <a href="tms-therapy-fontana.php" class="location-item" style="text-decoration: none; display: block;">Fontana<span class="location-dist">~65 mi &middot; 1 hr 15 min</span></a>
                        <a href="tms-therapy-menifee.php" class="location-item" style="text-decoration: none; display: block;">Menifee<span class="location-dist">~60 mi &middot; 1 hr 15 min</span></a>
                        <a href="tms-therapy-woodcrest.php" class="location-item" style="text-decoration: none; display: block;">Woodcrest<span class="location-dist">~60 mi &middot; 1 hr 20 min</span></a>
                        <a href="tms-therapy-good-hope.php" class="location-item" style="text-decoration: none; display: block;">Good Hope<span class="location-dist">~60 mi &middot; 1 hr 20 min</span></a>
                        <a href="tms-therapy-sun-city.php" class="location-item" style="text-decoration: none; display: block;">Sun City<span class="location-dist">~60 mi &middot; 1 hr 20 min</span></a>
                        <a href="tms-therapy-quail-valley.php" class="location-item" style="text-decoration: none; display: block;">Quail Valley<span class="location-dist">~65 mi &middot; 1 hr 25 min</span></a>
                        <a href="tms-therapy-canyon-lake.php" class="location-item" style="text-decoration: none; display: block;">Canyon Lake<span class="location-dist">~65 mi &middot; 1 hr 25 min</span></a>
                        <a href="tms-therapy-valley-of-enchantment.php" class="location-item" style="text-decoration: none; display: block;">Valley of Enchantment<span class="location-dist">~75 mi &middot; 1 hr 30 min</span></a>
                        <a href="tms-therapy-murrieta.php" class="location-item" style="text-decoration: none; display: block;">Murrieta<span class="location-dist">~70 mi &middot; 1 hr 30 min</span></a>
                        <a href="tms-therapy-lake-elsinore.php" class="location-item" style="text-decoration: none; display: block;">Lake Elsinore<span class="location-dist">~70 mi &middot; 1 hr 30 min</span></a>
                        <a href="tms-therapy-temecula.php" class="location-item" style="text-decoration: none; display: block;">Temecula<span class="location-dist">~70 mi &middot; 1 hr 30 min</span></a>
                        <a href="tms-therapy-seven-oaks.php" class="location-item" style="text-decoration: none; display: block;">Seven Oaks<span class="location-dist">~70 mi &middot; 1 hr 30 min</span></a>
                        <a href="tms-therapy-wildomar.php" class="location-item" style="text-decoration: none; display: block;">Wildomar<span class="location-dist">~70 mi &middot; 1 hr 30 min</span></a>
                        <a href="tms-therapy-crestline.php" class="location-item" style="text-decoration: none; display: block;">Crestline<span class="location-dist">~75 mi &middot; 1 hr 30 min</span></a>
                        <a href="tms-therapy-twin-peaks.php" class="location-item" style="text-decoration: none; display: block;">Twin Peaks<span class="location-dist">~75 mi &middot; 1 hr 30 min</span></a>
                        <a href="tms-therapy-rimforest.php" class="location-item" style="text-decoration: none; display: block;">Rimforest<span class="location-dist">~75 mi &middot; 1 hr 30 min</span></a>
                        <a href="tms-therapy-cedarpines-park.php" class="location-item" style="text-decoration: none; display: block;">Cedarpines Park<span class="location-dist">~75 mi &middot; 1 hr 35 min</span></a>
                        <a href="tms-therapy-arrowbear-lake.php" class="location-item" style="text-decoration: none; display: block;">Arrowbear Lake<span class="location-dist">~70 mi &middot; 1 hr 35 min</span></a>
                        <a href="tms-therapy-running-springs.php" class="location-item" style="text-decoration: none; display: block;">Running Springs<span class="location-dist">~70 mi &middot; 1 hr 35 min</span></a>
                        <a href="tms-therapy-diamond-valley.php" class="location-item" style="text-decoration: none; display: block;">Diamond Valley<span class="location-dist">~60 mi &middot; 1 hr 35 min</span></a>
                        <a href="tms-therapy-blue-jay.php" class="location-item" style="text-decoration: none; display: block;">Blue Jay<span class="location-dist">~80 mi &middot; 1 hr 35 min</span></a>
                        <a href="tms-therapy-lake-arrowhead.php" class="location-item" style="text-decoration: none; display: block;">Lake Arrowhead<span class="location-dist">~80 mi &middot; 1 hr 40 min</span></a>
                        <a href="tms-therapy-green-valley-lake.php" class="location-item" style="text-decoration: none; display: block;">Green Valley Lake<span class="location-dist">~75 mi &middot; 1 hr 45 min</span></a>
                        <a href="tms-therapy-phelan.php" class="location-item" style="text-decoration: none; display: block;">Phelan<span class="location-dist">~90 mi &middot; 1 hr 45 min</span></a>
                        <a href="tms-therapy-pinon-hills.php" class="location-item" style="text-decoration: none; display: block;">Pinon Hills<span class="location-dist">~90 mi &middot; 1 hr 50 min</span></a>
                        <a href="tms-therapy-hesperia.php" class="location-item" style="text-decoration: none; display: block;">Hesperia<span class="location-dist">~95 mi &middot; 1 hr 50 min</span></a>
                        <a href="tms-therapy-victorville.php" class="location-item" style="text-decoration: none; display: block;">Victorville<span class="location-dist">~100 mi &middot; 1 hr 55 min</span></a>
                        <a href="tms-therapy-adelanto.php" class="location-item" style="text-decoration: none; display: block;">Adelanto<span class="location-dist">~100 mi &middot; 2 hr</span></a>
                    </div>
                </div>

                <div class="region-card">
                    <span class="city-badge">Closest clinic: Rancho Mirage</span>
                    <h2 class="region-title">
                        <i data-lucide="map-pin" class="w-8 h-8 text-purple-600"></i>
                        <span>Communities Closest to</span> Rancho Mirage
                    </h2>
                    <p class="text-gray-600 mb-4">Patients from these communities are usually closest to our Rancho Mirage clinic at 35400 Bob Hope Dr., Suite 206-B, Rancho Mirage, CA 92270. Distances are typical drive distances and times to that clinic. Each town page compares all three clinics.</p>
                    <div class="location-grid">
                        <a href="tms-therapy-palm-desert.php" class="location-item" style="text-decoration: none; display: block;">Palm Desert<span class="location-dist">~3 mi &middot; 6 min</span></a>
                        <a href="tms-therapy-cathedral-city.php" class="location-item" style="text-decoration: none; display: block;">Cathedral City<span class="location-dist">~4 mi &middot; 8 min</span></a>
                        <a href="tms-therapy-indian-wells.php" class="location-item" style="text-decoration: none; display: block;">Indian Wells<span class="location-dist">~6 mi &middot; 11 min</span></a>
                        <a href="tms-therapy-bermuda-dunes.php" class="location-item" style="text-decoration: none; display: block;">Bermuda Dunes<span class="location-dist">~8 mi &middot; 15 min</span></a>
                        <a href="tms-therapy-desert-palms.php" class="location-item" style="text-decoration: none; display: block;">Desert Palms<span class="location-dist">~8 mi &middot; 15 min</span></a>
                        <a href="tms-therapy-sun-city-palm-desert.php" class="location-item" style="text-decoration: none; display: block;">Sun City Palm Desert<span class="location-dist">~8 mi &middot; 15 min</span></a>
                        <a href="tms-therapy-thousand-palms.php" class="location-item" style="text-decoration: none; display: block;">Thousand Palms<span class="location-dist">~8 mi &middot; 15 min</span></a>
                        <a href="tms-therapy-la-quinta.php" class="location-item" style="text-decoration: none; display: block;">La Quinta<span class="location-dist">~11 mi &middot; 20 min</span></a>
                        <a href="tms-therapy-indio.php" class="location-item" style="text-decoration: none; display: block;">Indio<span class="location-dist">~12 mi &middot; 20 min</span></a>
                        <a href="tms-therapy-coachella.php" class="location-item" style="text-decoration: none; display: block;">Coachella<span class="location-dist">~16 mi &middot; 25 min</span></a>
                        <a href="tms-therapy-thermal.php" class="location-item" style="text-decoration: none; display: block;">Thermal<span class="location-dist">~22 mi &middot; 30 min</span></a>
                        <a href="tms-therapy-vista-santa-rosa.php" class="location-item" style="text-decoration: none; display: block;">Vista Santa Rosa<span class="location-dist">~19 mi &middot; 35 min</span></a>
                        <a href="tms-therapy-mecca.php" class="location-item" style="text-decoration: none; display: block;">Mecca<span class="location-dist">~30 mi &middot; 40 min</span></a>
                        <a href="tms-therapy-oasis.php" class="location-item" style="text-decoration: none; display: block;">Oasis<span class="location-dist">~30 mi &middot; 45 min</span></a>
                        <a href="tms-therapy-desert-shores.php" class="location-item" style="text-decoration: none; display: block;">Desert Shores<span class="location-dist">~40 mi &middot; 50 min</span></a>
                        <a href="tms-therapy-anza.php" class="location-item" style="text-decoration: none; display: block;">Anza<span class="location-dist">~35 mi &middot; 55 min</span></a>
                        <a href="tms-therapy-north-shore.php" class="location-item" style="text-decoration: none; display: block;">North Shore<span class="location-dist">~40 mi &middot; 55 min</span></a>
                        <a href="tms-therapy-mountain-center.php" class="location-item" style="text-decoration: none; display: block;">Mountain Center<span class="location-dist">~40 mi &middot; 1 hr</span></a>
                        <a href="tms-therapy-idyllwild.php" class="location-item" style="text-decoration: none; display: block;">Idyllwild<span class="location-dist">~45 mi &middot; 1 hr 5 min</span></a>
                        <a href="tms-therapy-salton-city.php" class="location-item" style="text-decoration: none; display: block;">Salton City<span class="location-dist">~50 mi &middot; 1 hr 5 min</span></a>
                        <a href="tms-therapy-aguanga.php" class="location-item" style="text-decoration: none; display: block;">Aguanga<span class="location-dist">~45 mi &middot; 1 hr 5 min</span></a>
                        <a href="tms-therapy-bombay-beach.php" class="location-item" style="text-decoration: none; display: block;">Bombay Beach<span class="location-dist">~55 mi &middot; 1 hr 20 min</span></a>
                        <a href="tms-therapy-borrego-springs.php" class="location-item" style="text-decoration: none; display: block;">Borrego Springs<span class="location-dist">~75 mi &middot; 1 hr 35 min</span></a>
                        <a href="tms-therapy-warner-springs.php" class="location-item" style="text-decoration: none; display: block;">Warner Springs<span class="location-dist">~70 mi &middot; 1 hr 40 min</span></a>
                        <a href="tms-therapy-niland.php" class="location-item" style="text-decoration: none; display: block;">Niland<span class="location-dist">~70 mi &middot; 1 hr 40 min</span></a>
                        <a href="tms-therapy-calipatria.php" class="location-item" style="text-decoration: none; display: block;">Calipatria<span class="location-dist">~80 mi &middot; 1 hr 50 min</span></a>
                        <a href="tms-therapy-ranchita.php" class="location-item" style="text-decoration: none; display: block;">Ranchita<span class="location-dist">~80 mi &middot; 1 hr 55 min</span></a>
                        <a href="tms-therapy-blythe.php" class="location-item" style="text-decoration: none; display: block;">Blythe<span class="location-dist">~110 mi &middot; 2 hr 5 min</span></a>
                        <a href="tms-therapy-ehrenberg.php" class="location-item" style="text-decoration: none; display: block;">Ehrenberg<span class="location-dist">~115 mi &middot; 2 hr 10 min</span></a>
                        <a href="tms-therapy-palo-verde.php" class="location-item" style="text-decoration: none; display: block;">Palo Verde<span class="location-dist">~120 mi &middot; 2 hr 20 min</span></a>
                        <a href="tms-therapy-quartzsite.php" class="location-item" style="text-decoration: none; display: block;">Quartzsite<span class="location-dist">~130 mi &middot; 2 hr 25 min</span></a>
                    </div>
                </div>

                <div class="region-card">
                    <span class="city-badge">Closest clinic: Twentynine Palms</span>
                    <h2 class="region-title">
                        <i data-lucide="map-pin" class="w-8 h-8 text-purple-600"></i>
                        <span>Communities Closest to</span> Twentynine Palms
                    </h2>
                    <p class="text-gray-600 mb-4">Patients from these communities are usually closest to our Twentynine Palms clinic at 72724 29 Palms Hwy., Suite 107-B, Twentynine Palms, CA 92277. Distances are typical drive distances and times to that clinic. Each town page compares all three clinics.</p>
                    <div class="location-grid">
                        <a href="tms-therapy-wonder-valley.php" class="location-item" style="text-decoration: none; display: block;">Wonder Valley<span class="location-dist">~11 mi &middot; 20 min</span></a>
                        <a href="tms-therapy-joshua-tree.php" class="location-item" style="text-decoration: none; display: block;">Joshua Tree<span class="location-dist">~16 mi &middot; 20 min</span></a>
                        <a href="tms-therapy-yucca-valley.php" class="location-item" style="text-decoration: none; display: block;">Yucca Valley<span class="location-dist">~21 mi &middot; 30 min</span></a>
                        <a href="tms-therapy-yucca-mesa.php" class="location-item" style="text-decoration: none; display: block;">Yucca Mesa<span class="location-dist">~25 mi &middot; 35 min</span></a>
                        <a href="tms-therapy-flamingo-heights.php" class="location-item" style="text-decoration: none; display: block;">Flamingo Heights<span class="location-dist">~30 mi &middot; 40 min</span></a>
                        <a href="tms-therapy-landers.php" class="location-item" style="text-decoration: none; display: block;">Landers<span class="location-dist">~30 mi &middot; 45 min</span></a>
                        <a href="tms-therapy-homestead-valley.php" class="location-item" style="text-decoration: none; display: block;">Homestead Valley<span class="location-dist">~30 mi &middot; 45 min</span></a>
                        <a href="tms-therapy-pioneertown.php" class="location-item" style="text-decoration: none; display: block;">Pioneertown<span class="location-dist">~30 mi &middot; 50 min</span></a>
                        <a href="tms-therapy-johnson-valley.php" class="location-item" style="text-decoration: none; display: block;">Johnson Valley<span class="location-dist">~40 mi &middot; 50 min</span></a>
                        <a href="tms-therapy-amboy.php" class="location-item" style="text-decoration: none; display: block;">Amboy<span class="location-dist">~50 mi &middot; 1 hr 10 min</span></a>
                        <a href="tms-therapy-lucerne-valley.php" class="location-item" style="text-decoration: none; display: block;">Lucerne Valley<span class="location-dist">~60 mi &middot; 1 hr 25 min</span></a>
                        <a href="tms-therapy-rice.php" class="location-item" style="text-decoration: none; display: block;">Rice<span class="location-dist">~75 mi &middot; 1 hr 25 min</span></a>
                        <a href="tms-therapy-apple-valley.php" class="location-item" style="text-decoration: none; display: block;">Apple Valley<span class="location-dist">~80 mi &middot; 1 hr 45 min</span></a>
                        <a href="tms-therapy-sugarloaf.php" class="location-item" style="text-decoration: none; display: block;">Sugarloaf<span class="location-dist">~80 mi &middot; 1 hr 50 min</span></a>
                        <a href="tms-therapy-big-bear-lake.php" class="location-item" style="text-decoration: none; display: block;">Big Bear Lake<span class="location-dist">~80 mi &middot; 1 hr 55 min</span></a>
                        <a href="tms-therapy-ludlow.php" class="location-item" style="text-decoration: none; display: block;">Ludlow<span class="location-dist">~75 mi &middot; 1 hr 55 min</span></a>
                        <a href="tms-therapy-big-bear-city.php" class="location-item" style="text-decoration: none; display: block;">Big Bear City<span class="location-dist">~80 mi &middot; 1 hr 55 min</span></a>
                        <a href="tms-therapy-fawnskin.php" class="location-item" style="text-decoration: none; display: block;">Fawnskin<span class="location-dist">~85 mi &middot; 1 hr 55 min</span></a>
                        <a href="tms-therapy-vidal.php" class="location-item" style="text-decoration: none; display: block;">Vidal<span class="location-dist">~100 mi &middot; 1 hr 55 min</span></a>
                        <a href="tms-therapy-barstow.php" class="location-item" style="text-decoration: none; display: block;">Barstow<span class="location-dist">~100 mi &middot; 2 hr 10 min</span></a>
                        <a href="tms-therapy-grandview.php" class="location-item" style="text-decoration: none; display: block;">Grandview<span class="location-dist">~100 mi &middot; 2 hr 10 min</span></a>
                        <a href="tms-therapy-big-river.php" class="location-item" style="text-decoration: none; display: block;">Big River<span class="location-dist">~105 mi &middot; 2 hr 15 min</span></a>
                        <a href="tms-therapy-parker.php" class="location-item" style="text-decoration: none; display: block;">Parker<span class="location-dist">~110 mi &middot; 2 hr 15 min</span></a>
                        <a href="tms-therapy-lenwood.php" class="location-item" style="text-decoration: none; display: block;">Lenwood<span class="location-dist">~105 mi &middot; 2 hr 20 min</span></a>
                        <a href="tms-therapy-yermo.php" class="location-item" style="text-decoration: none; display: block;">Yermo<span class="location-dist">~110 mi &middot; 2 hr 25 min</span></a>
                        <a href="tms-therapy-daggett.php" class="location-item" style="text-decoration: none; display: block;">Daggett<span class="location-dist">~110 mi &middot; 2 hr 25 min</span></a>
                        <a href="tms-therapy-newberry-springs.php" class="location-item" style="text-decoration: none; display: block;">Newberry Springs<span class="location-dist">~110 mi &middot; 2 hr 40 min</span></a>
                        <a href="tms-therapy-needles.php" class="location-item" style="text-decoration: none; display: block;">Needles<span class="location-dist">~130 mi &middot; 2 hr 45 min</span></a>
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