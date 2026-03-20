<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas We Serve | Karma TMS - Nearby Cities & Communities</title>
    <meta name="description"
        content="Karma TMS provides advanced mental health care and TMS therapy to cities across the Coachella Valley, High Desert, and Riverside County. Find a location near you.">
    <meta name="keywords"
        content="TMS therapy cities, mental health services California, Palm Springs cities, 29 Palms towns, Rancho Mirage nearby areas, psychiatry Southern California">

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
            style="background-image: url('https://res.cloudinary.com/de4kw1t2i/image/upload/v1763969156/palmsprings_yjptwh.jpg'); background-size: cover; background-position: center; opacity: 0.1;">
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
                        Karma TMS is proud to be a regional leader in mental health, accepting patients from over 150 nearby cities, towns, and unincorporated communities across three primary service hubs.
                    </p>
                </div>

                <!-- Palm Springs Region -->
                <div class="region-card">
                    <span class="city-badge">Coachella Valley Hub</span>
                    <h2 class="region-title">
                        <i data-lucide="map-pin" class="w-8 h-8 text-purple-600"></i>
                        <span>Palm Springs</span> & Surrounding Cities
                    </h2>
                    <p class="text-gray-600 mb-4">Our Palm Springs center serves the heart of the desert and extended areas including:</p>
                    <div class="location-grid">
                        <a href="tms-therapy-desert-hot-springs.php" class="location-item" style="text-decoration: none; display: block;">Desert Hot Springs</a>
                        <a href="tms-therapy-cathedral-city.php" class="location-item" style="text-decoration: none; display: block;">Cathedral City</a>
                        <a href="tms-therapy-palm-desert.php" class="location-item" style="text-decoration: none; display: block;">Palm Desert</a>
                        <a href="tms-therapy-indian-wells.php" class="location-item" style="text-decoration: none; display: block;">Indian Wells</a>
                        <a href="tms-therapy-la-quinta.php" class="location-item" style="text-decoration: none; display: block;">La Quinta</a>
                        <a href="tms-therapy-indio.php" class="location-item" style="text-decoration: none; display: block;">Indio</a>
                        <a href="tms-therapy-coachella.php" class="location-item" style="text-decoration: none; display: block;">Coachella</a>
                        <a href="tms-therapy-thousand-palms.php" class="location-item" style="text-decoration: none; display: block;">Thousand Palms</a>
                        <a href="tms-therapy-bermuda-dunes.php" class="location-item" style="text-decoration: none; display: block;">Bermuda Dunes</a>
                        <a href="tms-therapy-thermal.php" class="location-item" style="text-decoration: none; display: block;">Thermal</a>
                        <a href="tms-therapy-vista-santa-rosa.php" class="location-item" style="text-decoration: none; display: block;">Vista Santa Rosa</a>
                        <a href="tms-therapy-oasis.php" class="location-item" style="text-decoration: none; display: block;">Oasis</a>
                        <a href="tms-therapy-mecca.php" class="location-item" style="text-decoration: none; display: block;">Mecca</a>
                        <a href="tms-therapy-north-shore.php" class="location-item" style="text-decoration: none; display: block;">North Shore</a>
                        <a href="tms-therapy-desert-edge.php" class="location-item" style="text-decoration: none; display: block;">Desert Edge</a>
                        <a href="tms-therapy-sky-valley.php" class="location-item" style="text-decoration: none; display: block;">Sky Valley</a>
                        <a href="tms-therapy-whitewater.php" class="location-item" style="text-decoration: none; display: block;">Whitewater</a>
                        <a href="tms-therapy-cabazon.php" class="location-item" style="text-decoration: none; display: block;">Cabazon</a>
                        <a href="tms-therapy-banning.php" class="location-item" style="text-decoration: none; display: block;">Banning</a>
                        <a href="tms-therapy-beaumont.php" class="location-item" style="text-decoration: none; display: block;">Beaumont</a>
                        <a href="tms-therapy-cherry-valley.php" class="location-item" style="text-decoration: none; display: block;">Cherry Valley</a>
                        <a href="tms-therapy-calimesa.php" class="location-item" style="text-decoration: none; display: block;">Calimesa</a>
                        <a href="tms-therapy-yucaipa.php" class="location-item" style="text-decoration: none; display: block;">Yucaipa</a>
                        <a href="tms-therapy-redlands.php" class="location-item" style="text-decoration: none; display: block;">Redlands</a>
                        <a href="tms-therapy-highland.php" class="location-item" style="text-decoration: none; display: block;">Highland</a>
                        <a href="tms-therapy-san-bernardino.php" class="location-item" style="text-decoration: none; display: block;">San Bernardino</a>
                        <a href="tms-therapy-riverside.php" class="location-item" style="text-decoration: none; display: block;">Riverside</a>
                        <a href="tms-therapy-moreno-valley.php" class="location-item" style="text-decoration: none; display: block;">Moreno Valley</a>
                        <a href="tms-therapy-perris.php" class="location-item" style="text-decoration: none; display: block;">Perris</a>
                        <a href="tms-therapy-menifee.php" class="location-item" style="text-decoration: none; display: block;">Menifee</a>
                        <a href="tms-therapy-murrieta.php" class="location-item" style="text-decoration: none; display: block;">Murrieta</a>
                        <a href="tms-therapy-temecula.php" class="location-item" style="text-decoration: none; display: block;">Temecula</a>
                        <a href="tms-therapy-hemet.php" class="location-item" style="text-decoration: none; display: block;">Hemet</a>
                        <a href="tms-therapy-san-jacinto.php" class="location-item" style="text-decoration: none; display: block;">San Jacinto</a>
                        <a href="tms-therapy-idyllwild.php" class="location-item" style="text-decoration: none; display: block;">Idyllwild</a>
                        <a href="tms-therapy-pine-cove.php" class="location-item" style="text-decoration: none; display: block;">Pine Cove</a>
                        <a href="tms-therapy-mountain-center.php" class="location-item" style="text-decoration: none; display: block;">Mountain Center</a>
                        <a href="tms-therapy-anza.php" class="location-item" style="text-decoration: none; display: block;">Anza</a>
                        <a href="tms-therapy-aguanga.php" class="location-item" style="text-decoration: none; display: block;">Aguanga</a>
                        <a href="tms-therapy-winchester.php" class="location-item" style="text-decoration: none; display: block;">Winchester</a>
                        <a href="tms-therapy-nuevo.php" class="location-item" style="text-decoration: none; display: block;">Nuevo</a>
                        <a href="tms-therapy-homestead-valley.php" class="location-item" style="text-decoration: none; display: block;">Homestead Valley</a>
                        <a href="tms-therapy-lucerne-valley.php" class="location-item" style="text-decoration: none; display: block;">Lucerne Valley</a>
                        <a href="tms-therapy-apple-valley.php" class="location-item" style="text-decoration: none; display: block;">Apple Valley</a>
                        <a href="tms-therapy-victorville.php" class="location-item" style="text-decoration: none; display: block;">Victorville</a>
                        <a href="tms-therapy-hesperia.php" class="location-item" style="text-decoration: none; display: block;">Hesperia</a>
                        <a href="tms-therapy-adelanto.php" class="location-item" style="text-decoration: none; display: block;">Adelanto</a>
                        <a href="tms-therapy-phelan.php" class="location-item" style="text-decoration: none; display: block;">Phelan</a>
                        <a href="tms-therapy-pinon-hills.php" class="location-item" style="text-decoration: none; display: block;">Pinon Hills</a>
                        <a href="tms-therapy-colton.php" class="location-item" style="text-decoration: none; display: block;">Colton</a>
                        <a href="tms-therapy-loma-linda.php" class="location-item" style="text-decoration: none; display: block;">Loma Linda</a>
                    </div>
                </div>

                <!-- Twentynine Palms Region -->
                <div class="region-card">
                    <span class="city-badge">High Desert Hub</span>
                    <h2 class="region-title">
                        <i data-lucide="map-pin" class="w-8 h-8 text-purple-600"></i>
                        <span>Twentynine Palms</span> & High Desert Cities
                    </h2>
                    <p class="text-gray-600 mb-4">Serving our military community at the MCAGCC and residents throughout the High Desert Basin:</p>
                    <div class="location-grid">
                        <a href="tms-therapy-yucca-valley.php" class="location-item" style="text-decoration: none; display: block;">Yucca Valley</a>
                        <a href="tms-therapy-joshua-tree.php" class="location-item" style="text-decoration: none; display: block;">Joshua Tree</a>
                        <a href="tms-therapy-morongo-valley.php" class="location-item" style="text-decoration: none; display: block;">Morongo Valley</a>
                        <a href="tms-therapy-pioneertown.php" class="location-item" style="text-decoration: none; display: block;">Pioneertown</a>
                        <a href="tms-therapy-landers.php" class="location-item" style="text-decoration: none; display: block;">Landers</a>
                        <a href="tms-therapy-wonder-valley.php" class="location-item" style="text-decoration: none; display: block;">Wonder Valley</a>
                        <a href="tms-therapy-flamingo-heights.php" class="location-item" style="text-decoration: none; display: block;">Flamingo Heights</a>
                        <a href="tms-therapy-yucca-mesa.php" class="location-item" style="text-decoration: none; display: block;">Yucca Mesa</a>
                        <a href="tms-therapy-johnson-valley.php" class="location-item" style="text-decoration: none; display: block;">Johnson Valley</a>
                        <a href="tms-therapy-lucerne-valley.php" class="location-item" style="text-decoration: none; display: block;">Lucerne Valley</a>
                        <a href="tms-therapy-big-bear-lake.php" class="location-item" style="text-decoration: none; display: block;">Big Bear Lake</a>
                        <a href="tms-therapy-big-bear-city.php" class="location-item" style="text-decoration: none; display: block;">Big Bear City</a>
                        <a href="tms-therapy-sugarloaf.php" class="location-item" style="text-decoration: none; display: block;">Sugarloaf</a>
                        <a href="tms-therapy-fawnskin.php" class="location-item" style="text-decoration: none; display: block;">Fawnskin</a>
                        <a href="tms-therapy-running-springs.php" class="location-item" style="text-decoration: none; display: block;">Running Springs</a>
                        <a href="tms-therapy-arrowbear-lake.php" class="location-item" style="text-decoration: none; display: block;">Arrowbear Lake</a>
                        <a href="tms-therapy-green-valley-lake.php" class="location-item" style="text-decoration: none; display: block;">Green Valley Lake</a>
                        <a href="tms-therapy-lake-arrowhead.php" class="location-item" style="text-decoration: none; display: block;">Lake Arrowhead</a>
                        <a href="tms-therapy-blue-jay.php" class="location-item" style="text-decoration: none; display: block;">Blue Jay</a>
                        <a href="tms-therapy-rimforest.php" class="location-item" style="text-decoration: none; display: block;">Rimforest</a>
                        <a href="tms-therapy-twin-peaks.php" class="location-item" style="text-decoration: none; display: block;">Twin Peaks</a>
                        <a href="tms-therapy-crestline.php" class="location-item" style="text-decoration: none; display: block;">Crestline</a>
                        <a href="tms-therapy-cedarpines-park.php" class="location-item" style="text-decoration: none; display: block;">Cedarpines Park</a>
                        <a href="tms-therapy-valley-of-enchantment.php" class="location-item" style="text-decoration: none; display: block;">Valley of Enchantment</a>
                        <a href="tms-therapy-forest-falls.php" class="location-item" style="text-decoration: none; display: block;">Forest Falls</a>
                        <a href="tms-therapy-angelus-oaks.php" class="location-item" style="text-decoration: none; display: block;">Angelus Oaks</a>
                        <a href="tms-therapy-seven-oaks.php" class="location-item" style="text-decoration: none; display: block;">Seven Oaks</a>
                        <a href="tms-therapy-mentone.php" class="location-item" style="text-decoration: none; display: block;">Mentone</a>
                        <a href="tms-therapy-yucaipa.php" class="location-item" style="text-decoration: none; display: block;">Yucaipa</a>
                        <a href="tms-therapy-calimesa.php" class="location-item" style="text-decoration: none; display: block;">Calimesa</a>
                        <a href="tms-therapy-oak-glen.php" class="location-item" style="text-decoration: none; display: block;">Oak Glen</a>
                        <a href="tms-therapy-banning.php" class="location-item" style="text-decoration: none; display: block;">Banning</a>
                        <a href="tms-therapy-beaumont.php" class="location-item" style="text-decoration: none; display: block;">Beaumont</a>
                        <a href="tms-therapy-barstow.php" class="location-item" style="text-decoration: none; display: block;">Barstow</a>
                        <a href="tms-therapy-lenwood.php" class="location-item" style="text-decoration: none; display: block;">Lenwood</a>
                        <a href="tms-therapy-grandview.php" class="location-item" style="text-decoration: none; display: block;">Grandview</a>
                        <a href="tms-therapy-yermo.php" class="location-item" style="text-decoration: none; display: block;">Yermo</a>
                        <a href="tms-therapy-daggett.php" class="location-item" style="text-decoration: none; display: block;">Daggett</a>
                        <a href="tms-therapy-newberry-springs.php" class="location-item" style="text-decoration: none; display: block;">Newberry Springs</a>
                        <a href="tms-therapy-ludlow.php" class="location-item" style="text-decoration: none; display: block;">Ludlow</a>
                        <a href="tms-therapy-amboy.php" class="location-item" style="text-decoration: none; display: block;">Amboy</a>
                        <a href="tms-therapy-needles.php" class="location-item" style="text-decoration: none; display: block;">Needles</a>
                        <a href="tms-therapy-blythe.php" class="location-item" style="text-decoration: none; display: block;">Blythe</a>
                        <a href="tms-therapy-ehrenberg.php" class="location-item" style="text-decoration: none; display: block;">Ehrenberg</a>
                        <a href="tms-therapy-quartzsite.php" class="location-item" style="text-decoration: none; display: block;">Quartzsite</a>
                        <a href="tms-therapy-parker.php" class="location-item" style="text-decoration: none; display: block;">Parker</a>
                        <a href="tms-therapy-big-river.php" class="location-item" style="text-decoration: none; display: block;">Big River</a>
                        <a href="tms-therapy-vidal.php" class="location-item" style="text-decoration: none; display: block;">Vidal</a>
                        <a href="tms-therapy-rice.php" class="location-item" style="text-decoration: none; display: block;">Rice</a>
                        <a href="tms-therapy-hesperia.php" class="location-item" style="text-decoration: none; display: block;">Hesperia</a>
                        <a href="tms-therapy-apple-valley.php" class="location-item" style="text-decoration: none; display: block;">Apple Valley</a>
                    </div>
                </div>

                <!-- Rancho Mirage Region -->
                <div class="region-card">
                    <span class="city-badge">Central Valley Hub</span>
                    <h2 class="region-title">
                        <i data-lucide="map-pin" class="w-8 h-8 text-purple-600"></i>
                        <span>Rancho Mirage</span> & Surrounding Areas
                    </h2>
                    <p class="text-gray-600 mb-4">Providing specialized care from our central hub to neighboring cities and regions:</p>
                    <div class="location-grid">
                        <a href="tms-therapy-palm-desert.php" class="location-item" style="text-decoration: none; display: block;">Palm Desert</a>
                        <a href="tms-therapy-cathedral-city.php" class="location-item" style="text-decoration: none; display: block;">Cathedral City</a>
                        <a href="tms-therapy-indian-wells.php" class="location-item" style="text-decoration: none; display: block;">Indian Wells</a>
                        <a href="tms-therapy-la-quinta.php" class="location-item" style="text-decoration: none; display: block;">La Quinta</a>
                        <a href="tms-therapy-indio.php" class="location-item" style="text-decoration: none; display: block;">Indio</a>
                        <a href="tms-therapy-coachella.php" class="location-item" style="text-decoration: none; display: block;">Coachella</a>
                        <a href="tms-therapy-thousand-palms.php" class="location-item" style="text-decoration: none; display: block;">Thousand Palms</a>
                        <a href="tms-therapy-desert-palms.php" class="location-item" style="text-decoration: none; display: block;">Desert Palms</a>
                        <a href="tms-therapy-sun-city-palm-desert.php" class="location-item" style="text-decoration: none; display: block;">Sun City Palm Desert</a>
                        <a href="tms-therapy-bermuda-dunes.php" class="location-item" style="text-decoration: none; display: block;">Bermuda Dunes</a>
                        <a href="tms-therapy-desert-hot-springs.php" class="location-item" style="text-decoration: none; display: block;">Desert Hot Springs</a>
                        <a href="tms-therapy-sky-valley.php" class="location-item" style="text-decoration: none; display: block;">Sky Valley</a>
                        <a href="tms-therapy-desert-edge.php" class="location-item" style="text-decoration: none; display: block;">Desert Edge</a>
                        <a href="tms-therapy-morongo-valley.php" class="location-item" style="text-decoration: none; display: block;">Morongo Valley</a>
                        <a href="tms-therapy-yucca-valley.php" class="location-item" style="text-decoration: none; display: block;">Yucca Valley</a>
                        <a href="tms-therapy-joshua-tree.php" class="location-item" style="text-decoration: none; display: block;">Joshua Tree</a>
                        <a href="tms-therapy-banning.php" class="location-item" style="text-decoration: none; display: block;">Banning</a>
                        <a href="tms-therapy-beaumont.php" class="location-item" style="text-decoration: none; display: block;">Beaumont</a>
                        <a href="tms-therapy-calimesa.php" class="location-item" style="text-decoration: none; display: block;">Calimesa</a>
                        <a href="tms-therapy-yucaipa.php" class="location-item" style="text-decoration: none; display: block;">Yucaipa</a>
                        <a href="tms-therapy-redlands.php" class="location-item" style="text-decoration: none; display: block;">Redlands</a>
                        <a href="tms-therapy-loma-linda.php" class="location-item" style="text-decoration: none; display: block;">Loma Linda</a>
                        <a href="tms-therapy-grand-terrace.php" class="location-item" style="text-decoration: none; display: block;">Grand Terrace</a>
                        <a href="tms-therapy-colton.php" class="location-item" style="text-decoration: none; display: block;">Colton</a>
                        <a href="tms-therapy-rialto.php" class="location-item" style="text-decoration: none; display: block;">Rialto</a>
                        <a href="tms-therapy-fontana.php" class="location-item" style="text-decoration: none; display: block;">Fontana</a>
                        <a href="tms-therapy-san-bernardino.php" class="location-item" style="text-decoration: none; display: block;">San Bernardino</a>
                        <a href="tms-therapy-highland.php" class="location-item" style="text-decoration: none; display: block;">Highland</a>
                        <a href="tms-therapy-riverside.php" class="location-item" style="text-decoration: none; display: block;">Riverside</a>
                        <a href="tms-therapy-moreno-valley.php" class="location-item" style="text-decoration: none; display: block;">Moreno Valley</a>
                        <a href="tms-therapy-woodcrest.php" class="location-item" style="text-decoration: none; display: block;">Woodcrest</a>
                        <a href="tms-therapy-march-arb.php" class="location-item" style="text-decoration: none; display: block;">March ARB</a>
                        <a href="tms-therapy-perris.php" class="location-item" style="text-decoration: none; display: block;">Perris</a>
                        <a href="tms-therapy-mead-valley.php" class="location-item" style="text-decoration: none; display: block;">Mead Valley</a>
                        <a href="tms-therapy-good-hope.php" class="location-item" style="text-decoration: none; display: block;">Good Hope</a>
                        <a href="tms-therapy-homeland.php" class="location-item" style="text-decoration: none; display: block;">Homeland</a>
                        <a href="tms-therapy-romoland.php" class="location-item" style="text-decoration: none; display: block;">Romoland</a>
                        <a href="tms-therapy-menifee.php" class="location-item" style="text-decoration: none; display: block;">Menifee</a>
                        <a href="tms-therapy-sun-city.php" class="location-item" style="text-decoration: none; display: block;">Sun City</a>
                        <a href="tms-therapy-quail-valley.php" class="location-item" style="text-decoration: none; display: block;">Quail Valley</a>
                        <a href="tms-therapy-canyon-lake.php" class="location-item" style="text-decoration: none; display: block;">Canyon Lake</a>
                        <a href="tms-therapy-lake-elsinore.php" class="location-item" style="text-decoration: none; display: block;">Lake Elsinore</a>
                        <a href="tms-therapy-wildomar.php" class="location-item" style="text-decoration: none; display: block;">Wildomar</a>
                        <a href="tms-therapy-murrieta.php" class="location-item" style="text-decoration: none; display: block;">Murrieta</a>
                        <a href="tms-therapy-temecula.php" class="location-item" style="text-decoration: none; display: block;">Temecula</a>
                        <a href="tms-therapy-french-valley.php" class="location-item" style="text-decoration: none; display: block;">French Valley</a>
                        <a href="tms-therapy-winchester.php" class="location-item" style="text-decoration: none; display: block;">Winchester</a>
                        <a href="tms-therapy-hemet.php" class="location-item" style="text-decoration: none; display: block;">Hemet</a>
                        <a href="tms-therapy-san-jacinto.php" class="location-item" style="text-decoration: none; display: block;">San Jacinto</a>
                        <a href="tms-therapy-east-hemet.php" class="location-item" style="text-decoration: none; display: block;">East Hemet</a>
                        <a href="tms-therapy-valley-vista.php" class="location-item" style="text-decoration: none; display: block;">Valley Vista</a>
                        <a href="tms-therapy-diamond-valley.php" class="location-item" style="text-decoration: none; display: block;">Diamond Valley</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

