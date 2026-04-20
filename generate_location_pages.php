<?php
/**
 * Karma TMS – Location Page Generator
 * Run: php generate_location_pages.php
 * Generates all 116 city pages with unique content, SEO schema, and modern design.
 */

define('PHONE_DISPLAY', '(760) 760-5675');
define('PHONE_HREF',    'tel:7607605675');
define('SITE_URL',      'https://karmatms.com');

$hub_data = [
    'Palm Springs'      => ['addr'=>'560 S. Paseo Dorotea, Suite 4-B',     'city'=>'Palm Springs',     'zip'=>'92264', 'lat'=>'33.8303', 'lon'=>'-116.5453'],
    'Twentynine Palms'  => ['addr'=>'72724 29 Palms Hwy., Suite 107-B',    'city'=>'Twentynine Palms', 'zip'=>'92277', 'lat'=>'34.1361', 'lon'=>'-116.0542'],
    'Rancho Mirage'     => ['addr'=>'35400 Bob Hope Dr., Suite 206-B',      'city'=>'Rancho Mirage',    'zip'=>'92270', 'lat'=>'33.7397', 'lon'=>'-116.4119'],
];

// ============================================================
// CITY DATA  (slug => [name, hub, dist, region, county, geo, cond, hero_desc])
// geo: desert | mountain | high_desert | suburban | urban | rural | military | retirement | resort | remote
// cond: depression_anxiety | ptsd_anxiety | ocd_depression | treatment_resistant | general
// ============================================================
$cities = [
 'adelanto'            =>['name'=>'Adelanto',            'hub'=>'Twentynine Palms','dist'=>52, 'region'=>'High Desert',                  'county'=>'San Bernardino County','geo'=>'high_desert',  'cond'=>'treatment_resistant','hero_desc'=>'a rapidly growing High Desert city where families deserve access to advanced psychiatric care beyond conventional antidepressants'],
 'aguanga'             =>['name'=>'Aguanga',             'hub'=>'Rancho Mirage',  'dist'=>65, 'region'=>'Southwest Riverside County',   'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'depression_anxiety',  'hero_desc'=>'a quiet rural inland valley community where mental health services have historically been limited to whatever the nearest general practitioner could offer'],
 'amboy'               =>['name'=>'Amboy',               'hub'=>'Twentynine Palms','dist'=>70, 'region'=>'Mojave Desert',                'county'=>'San Bernardino County','geo'=>'remote',        'cond'=>'general',             'hero_desc'=>'a small Mojave Desert community along historic Route 66, far from urban mental health resources but within reach of our Twentynine Palms hub'],
 'angelus-oaks'        =>['name'=>'Angelus Oaks',        'hub'=>'Twentynine Palms','dist'=>52, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'ptsd_anxiety',        'hero_desc'=>'a forested San Bernardino National Forest community where seasonal isolation and limited local healthcare make advanced psychiatric access a real priority'],
 'anza'                =>['name'=>'Anza',                'hub'=>'Rancho Mirage',  'dist'=>60, 'region'=>'Anza Valley',                  'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'depression_anxiety',  'hero_desc'=>'a high-elevation rural Riverside County community where neighbors are resilient but specialized healthcare requires planning and commitment'],
 'apple-valley'        =>['name'=>'Apple Valley',        'hub'=>'Twentynine Palms','dist'=>55, 'region'=>'High Desert',                  'county'=>'San Bernardino County','geo'=>'suburban',      'cond'=>'treatment_resistant', 'hero_desc'=>'one of the High Desert\'s largest communities, where a growing population increasingly demands evidence-based mental health treatment beyond standard medications'],
 'arrowbear-lake'      =>['name'=>'Arrowbear Lake',      'hub'=>'Twentynine Palms','dist'=>62, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a serene mountain community where the beauty of the San Bernardino Range and the challenge of remote living go hand in hand'],
 'banning'             =>['name'=>'Banning',             'hub'=>'Rancho Mirage',  'dist'=>28, 'region'=>'San Gorgonio Pass',             'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'general',             'hero_desc'=>'the historic gateway city to the Coachella Valley, centrally positioned between the Inland Empire and our Rancho Mirage hub'],
 'barstow'             =>['name'=>'Barstow',             'hub'=>'Twentynine Palms','dist'=>55, 'region'=>'Mojave Desert',                'county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'ptsd_anxiety',        'hero_desc'=>'a Mojave Desert city with deep military ties and a community that has long deserved better access to specialized psychiatric and PTSD care'],
 'beaumont'            =>['name'=>'Beaumont',            'hub'=>'Rancho Mirage',  'dist'=>30, 'region'=>'Beaumont-Banning Pass',         'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'general',             'hero_desc'=>'one of California\'s fastest-growing cities, where a booming population brings new demand for modern, FDA-approved mental health treatments'],
 'bermuda-dunes'       =>['name'=>'Bermuda Dunes',       'hub'=>'Rancho Mirage',  'dist'=>8,  'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'resort',        'cond'=>'depression_anxiety',  'hero_desc'=>'a premier golf resort community in the heart of the Coachella Valley, steps from world-class psychiatric care at our Rancho Mirage hub'],
 'big-bear-city'       =>['name'=>'Big Bear City',       'hub'=>'Twentynine Palms','dist'=>72, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a mountain community at over 6,700 feet elevation where seasonal affective patterns and winter isolation make specialized psychiatric access truly essential'],
 'big-bear-lake'       =>['name'=>'Big Bear Lake',       'hub'=>'Twentynine Palms','dist'=>75, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'treatment_resistant', 'hero_desc'=>'Southern California\'s beloved mountain resort destination, where year-round residents deserve the same world-class mental health care as any major urban center'],
 'big-river'           =>['name'=>'Big River',           'hub'=>'Twentynine Palms','dist'=>95, 'region'=>'Lower Colorado River Valley',  'county'=>'San Bernardino County','geo'=>'remote',        'cond'=>'general',             'hero_desc'=>'a small Colorado River community where geographic isolation has long made accessing specialized mental health care a genuine barrier'],
 'blue-jay'            =>['name'=>'Blue Jay',            'hub'=>'Twentynine Palms','dist'=>58, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a charming mountain village on the slopes of the San Bernardino Mountains, where tight-knit community life meets the challenge of limited local healthcare'],
 'blythe'              =>['name'=>'Blythe',              'hub'=>'Twentynine Palms','dist'=>80, 'region'=>'Palo Verde Valley',             'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'ptsd_anxiety',        'hero_desc'=>'a Colorado River agricultural community where residents have long made the long drive to access the specialized mental health care they need'],
 'cabazon'             =>['name'=>'Cabazon',             'hub'=>'Palm Springs',   'dist'=>18, 'region'=>'San Gorgonio Pass',             'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'general',             'hero_desc'=>'a San Gorgonio Pass community at the crossroads between the Inland Empire and the Coachella Valley, with direct access to our Palm Springs hub'],
 'calimesa'            =>['name'=>'Calimesa',            'hub'=>'Rancho Mirage',  'dist'=>36, 'region'=>'Inland Empire',                 'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'depression_anxiety',  'hero_desc'=>'a growing foothill city on the eastern edge of the Inland Empire, where residents deserve evidence-based psychiatric care equal to any major metro area'],
 'canyon-lake'         =>['name'=>'Canyon Lake',         'hub'=>'Rancho Mirage',  'dist'=>60, 'region'=>'Southwest Riverside County',   'county'=>'Riverside County',     'geo'=>'resort',        'cond'=>'ocd_depression',      'hero_desc'=>'a private lake community in Southwest Riverside County, where residents enjoy a resort lifestyle and deserve equally exceptional mental health resources'],
 'cathedral-city'      =>['name'=>'Cathedral City',      'hub'=>'Palm Springs',   'dist'=>5,  'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'general',             'hero_desc'=>'a vibrant and diverse Coachella Valley city adjacent to Palm Springs, making our flagship Palm Springs hub exceptionally convenient'],
 'cedarpines-park'     =>['name'=>'Cedarpines Park',     'hub'=>'Twentynine Palms','dist'=>48, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a quiet mountain community on the western slopes of the San Bernardino Mountains, where natural surroundings offer peace but specialized care remains a committed drive away'],
 'cherry-valley'       =>['name'=>'Cherry Valley',       'hub'=>'Palm Springs',   'dist'=>22, 'region'=>'Beaumont-Banning Pass',         'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'depression_anxiety',  'hero_desc'=>'a rural orchard community in the scenic Beaumont-Banning Pass area, where country living meets the need for accessible, advanced psychiatric care'],
 'coachella'           =>['name'=>'Coachella',           'hub'=>'Rancho Mirage',  'dist'=>18, 'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'desert',        'cond'=>'general',             'hero_desc'=>'a culturally rich valley city known worldwide for its music festival, where a growing and diverse community deserves world-class mental health resources'],
 'colton'              =>['name'=>'Colton',              'hub'=>'Rancho Mirage',  'dist'=>38, 'region'=>'Inland Empire',                 'county'=>'San Bernardino County','geo'=>'suburban',      'cond'=>'treatment_resistant', 'hero_desc'=>'a historic Inland Empire city at the crossroads of Southern California\'s transportation network, with a diverse community ready for better psychiatric options'],
 'crestline'           =>['name'=>'Crestline',           'hub'=>'Twentynine Palms','dist'=>18, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a close-knit mountain community nestled at 4,500 feet where year-round residents face the mental health challenges of high-altitude living and limited local care'],
 'daggett'             =>['name'=>'Daggett',             'hub'=>'Twentynine Palms','dist'=>55, 'region'=>'Mojave Desert',                'county'=>'San Bernardino County','geo'=>'remote',        'cond'=>'general',             'hero_desc'=>'a small historic Mojave Desert community whose residents deserve modern psychiatric care without impossible travel distances'],
 'desert-edge'         =>['name'=>'Desert Edge',         'hub'=>'Palm Springs',   'dist'=>14, 'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'desert',        'cond'=>'general',             'hero_desc'=>'a quiet unincorporated Coachella Valley community at the edge of the desert, well positioned to access our Palm Springs hub for TMS therapy'],
 'desert-hot-springs'  =>['name'=>'Desert Hot Springs',  'hub'=>'Palm Springs',   'dist'=>8,  'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'desert',        'cond'=>'depression_anxiety',  'hero_desc'=>'a wellness-oriented hot springs community north of Palm Springs, where evidence-based approaches to mental health align with the community\'s health-forward values'],
 'desert-palms'        =>['name'=>'Desert Palms',        'hub'=>'Rancho Mirage',  'dist'=>7,  'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'desert',        'cond'=>'general',             'hero_desc'=>'a quiet unincorporated valley community perfectly positioned between Rancho Mirage and the eastern Coachella Valley'],
 'diamond-valley'      =>['name'=>'Diamond Valley',      'hub'=>'Rancho Mirage',  'dist'=>55, 'region'=>'San Jacinto Valley',            'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'depression_anxiety',  'hero_desc'=>'a rural Riverside County valley community where open spaces and limited local services make advanced mental healthcare a worthy priority'],
 'east-hemet'          =>['name'=>'East Hemet',          'hub'=>'Rancho Mirage',  'dist'=>50, 'region'=>'San Jacinto Valley',            'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'general',             'hero_desc'=>'an unincorporated suburban community adjacent to Hemet in the San Jacinto Valley, conveniently served by our Rancho Mirage hub'],
 'ehrenberg'           =>['name'=>'Ehrenberg',           'hub'=>'Twentynine Palms','dist'=>95, 'region'=>'Lower Colorado River Valley',  'county'=>'San Bernardino County','geo'=>'remote',        'cond'=>'general',             'hero_desc'=>'a small Colorado River border community where rural isolation and limited local services make the journey to our Twentynine Palms hub well worth it'],
 'fawnskin'            =>['name'=>'Fawnskin',            'hub'=>'Twentynine Palms','dist'=>73, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a small lakeside community on the north shore of Big Bear Lake, where mountain living and winter isolation underscore the need for accessible mental health treatment'],
 'flamingo-heights'    =>['name'=>'Flamingo Heights',    'hub'=>'Twentynine Palms','dist'=>18, 'region'=>'Morongo Valley',                'county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'general',             'hero_desc'=>'a small high desert community near Morongo Valley, well positioned for direct access to our Twentynine Palms TMS hub'],
 'fontana'             =>['name'=>'Fontana',             'hub'=>'Rancho Mirage',  'dist'=>45, 'region'=>'Inland Empire',                 'county'=>'San Bernardino County','geo'=>'urban',         'cond'=>'treatment_resistant', 'hero_desc'=>'one of the Inland Empire\'s largest and most dynamic cities, where a diverse and rapidly growing population deserves the most advanced psychiatric treatments available'],
 'forest-falls'        =>['name'=>'Forest Falls',        'hub'=>'Twentynine Palms','dist'=>55, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a quiet mountain community at the base of the San Gorgonio Wilderness, where the solitude of nature meets the real need for accessible mental health care'],
 'french-valley'       =>['name'=>'French Valley',       'hub'=>'Rancho Mirage',  'dist'=>60, 'region'=>'Temecula Valley',               'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'depression_anxiety',  'hero_desc'=>'an unincorporated community in the heart of the Temecula Valley, where agricultural heritage and suburban growth create genuine mental health service needs'],
 'good-hope'           =>['name'=>'Good Hope',           'hub'=>'Rancho Mirage',  'dist'=>55, 'region'=>'Western Riverside County',     'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a small rural community in western Riverside County with a clear path to advanced TMS therapy at our Rancho Mirage hub'],
 'grand-terrace'       =>['name'=>'Grand Terrace',       'hub'=>'Rancho Mirage',  'dist'=>38, 'region'=>'Inland Empire',                 'county'=>'San Bernardino County','geo'=>'suburban',      'cond'=>'depression_anxiety',  'hero_desc'=>'a tight-knit Inland Empire city between Colton and Riverside, where community-minded residents can now access FDA-approved TMS therapy nearby'],
 'grandview'           =>['name'=>'Grandview',           'hub'=>'Twentynine Palms','dist'=>58, 'region'=>'Barstow Area',                 'county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'general',             'hero_desc'=>'a small Barstow-area community in the Mojave Desert where residents deserve specialist psychiatric care without excessive travel'],
 'green-valley-lake'   =>['name'=>'Green Valley Lake',   'hub'=>'Twentynine Palms','dist'=>68, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a small mountain lake community in the San Bernardino National Forest, where the tranquility of the pines meets real healthcare access challenges'],
 'hemet'               =>['name'=>'Hemet',               'hub'=>'Rancho Mirage',  'dist'=>48, 'region'=>'San Jacinto Valley',            'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'treatment_resistant', 'hero_desc'=>'a growing San Jacinto Valley city with high mental health treatment need and a community ready for a better, more effective solution than pills alone'],
 'hesperia'            =>['name'=>'Hesperia',            'hub'=>'Twentynine Palms','dist'=>45, 'region'=>'High Desert',                  'county'=>'San Bernardino County','geo'=>'suburban',      'cond'=>'general',             'hero_desc'=>'a major High Desert city where a large and diverse population has long sought better access to evidence-based, non-pharmaceutical psychiatric care'],
 'highland'            =>['name'=>'Highland',            'hub'=>'Rancho Mirage',  'dist'=>42, 'region'=>'Inland Empire',                 'county'=>'San Bernardino County','geo'=>'suburban',      'cond'=>'depression_anxiety',  'hero_desc'=>'a foothill community between San Bernardino and Redlands, where residents enjoy mountain views and now have convenient access to advanced TMS therapy'],
 'homeland'            =>['name'=>'Homeland',            'hub'=>'Rancho Mirage',  'dist'=>55, 'region'=>'Western Riverside County',     'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a rural unincorporated community in western Riverside County where Karma TMS brings world-class psychiatric care within a reasonable drive'],
 'homestead-valley'    =>['name'=>'Homestead Valley',    'hub'=>'Palm Springs',   'dist'=>18, 'region'=>'Morongo Valley Area',           'county'=>'San Bernardino County','geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a small unincorporated community near Morongo Valley, within straightforward reach of our Palm Springs hub for convenient TMS treatment'],
 'idyllwild'           =>['name'=>'Idyllwild',           'hub'=>'Rancho Mirage',  'dist'=>45, 'region'=>'San Jacinto Mountains',         'county'=>'Riverside County',     'geo'=>'mountain',      'cond'=>'treatment_resistant', 'hero_desc'=>'a beloved arts community perched at 5,400 feet in the San Jacinto Mountains, where creativity, mountain living, and mental wellness intersect'],
 'indian-wells'        =>['name'=>'Indian Wells',        'hub'=>'Rancho Mirage',  'dist'=>8,  'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'resort',        'cond'=>'depression_anxiety',  'hero_desc'=>'an exclusive Coachella Valley resort city known for world-class tennis and luxury living, now served by equally world-class TMS psychiatric care just minutes away'],
 'indio'               =>['name'=>'Indio',               'hub'=>'Rancho Mirage',  'dist'=>15, 'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'desert',        'cond'=>'general',             'hero_desc'=>'the agricultural and entertainment hub of the eastern Coachella Valley, where a diverse and growing community deserves advanced mental health resources'],
 'johnson-valley'      =>['name'=>'Johnson Valley',      'hub'=>'Twentynine Palms','dist'=>35, 'region'=>'High Desert',                  'county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'general',             'hero_desc'=>'a wide-open high desert community known for off-road recreation, where rural isolation is real and access to specialized psychiatric care matters'],
 'joshua-tree'         =>['name'=>'Joshua Tree',         'hub'=>'Twentynine Palms','dist'=>10, 'region'=>'Joshua Tree National Park Area','county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'depression_anxiety',  'hero_desc'=>'a high desert artist community adjacent to Joshua Tree National Park, where creative independence and desert solitude create unique mental health dynamics'],
 'la-quinta'           =>['name'=>'La Quinta',           'hub'=>'Rancho Mirage',  'dist'=>12, 'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'resort',        'cond'=>'ocd_depression',      'hero_desc'=>'a resort city in the southern Coachella Valley known for championship golf courses and mountain views, with our Rancho Mirage hub just minutes away'],
 'lake-arrowhead'      =>['name'=>'Lake Arrowhead',      'hub'=>'Twentynine Palms','dist'=>60, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'treatment_resistant', 'hero_desc'=>'one of Southern California\'s most recognized mountain lake communities, where year-round residents deserve specialized TMS therapy without the trek to the city'],
 'lake-elsinore'       =>['name'=>'Lake Elsinore',       'hub'=>'Rancho Mirage',  'dist'=>60, 'region'=>'Southwest Riverside County',   'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'general',             'hero_desc'=>'California\'s largest natural freshwater lake community, where outdoor recreation meets the real need for modern, evidence-based mental health treatment'],
 'landers'             =>['name'=>'Landers',             'hub'=>'Twentynine Palms','dist'=>15, 'region'=>'High Desert',                  'county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'ptsd_anxiety',        'hero_desc'=>'a wide-open high desert community near Twentynine Palms, known for its stargazing skies and within easy reach of advanced TMS psychiatric care'],
 'lenwood'             =>['name'=>'Lenwood',             'hub'=>'Twentynine Palms','dist'=>58, 'region'=>'Barstow Area',                 'county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'general',             'hero_desc'=>'a small community in the Barstow area of the Mojave Desert, where residents deserve convenient access to specialized psychiatric treatment'],
 'loma-linda'          =>['name'=>'Loma Linda',          'hub'=>'Rancho Mirage',  'dist'=>35, 'region'=>'Inland Empire',                 'county'=>'San Bernardino County','geo'=>'suburban',      'cond'=>'depression_anxiety',  'hero_desc'=>'a recognized Blue Zone and home to one of the world\'s top medical universities, where health-conscious residents now access advanced neurological mental health treatment'],
 'lucerne-valley'      =>['name'=>'Lucerne Valley',      'hub'=>'Twentynine Palms','dist'=>50, 'region'=>'High Desert',                  'county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'depression_anxiety',  'hero_desc'=>'a quiet high desert agricultural community where open skies and wide spaces meet the challenge of limited access to specialized mental healthcare'],
 'ludlow'              =>['name'=>'Ludlow',              'hub'=>'Twentynine Palms','dist'=>70, 'region'=>'Mojave Desert',                'county'=>'San Bernardino County','geo'=>'remote',        'cond'=>'general',             'hero_desc'=>'a remote Mojave Desert stop along historic Route 66, where even the most isolated residents can reach TMS therapy at our Twentynine Palms hub'],
 'march-arb'           =>['name'=>'March ARB',           'hub'=>'Rancho Mirage',  'dist'=>47, 'region'=>'Inland Empire',                 'county'=>'Riverside County',     'geo'=>'military',      'cond'=>'ptsd_anxiety',        'hero_desc'=>'a military community at March Air Reserve Base, where active duty personnel, veterans, and their families deserve specialized psychiatric care that understands military service'],
 'mead-valley'         =>['name'=>'Mead Valley',         'hub'=>'Rancho Mirage',  'dist'=>52, 'region'=>'Western Riverside County',     'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'an unincorporated western Riverside County community where rural character and limited local services make our Rancho Mirage hub a vital mental health resource'],
 'mecca'               =>['name'=>'Mecca',               'hub'=>'Palm Springs',   'dist'=>27, 'region'=>'Coachella Valley / Salton Sea', 'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a rural Coachella Valley community near the Salton Sea, where agricultural families deserve access to the same quality mental healthcare as resort communities'],
 'menifee'             =>['name'=>'Menifee',             'hub'=>'Rancho Mirage',  'dist'=>55, 'region'=>'Southwest Riverside County',   'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'treatment_resistant', 'hero_desc'=>'one of California\'s newest and fastest-growing cities, where an expanding population demands modern, effective solutions to treatment-resistant mental health conditions'],
 'mentone'             =>['name'=>'Mentone',             'hub'=>'Twentynine Palms','dist'=>48, 'region'=>'Inland Empire / San Bernardino Foothills','county'=>'San Bernardino County','geo'=>'suburban','cond'=>'depression_anxiety','hero_desc'=>'a small Inland Empire community at the foot of the San Bernardino Mountains, within straightforward reach of our Twentynine Palms hub'],
 'moreno-valley'       =>['name'=>'Moreno Valley',       'hub'=>'Rancho Mirage',  'dist'=>45, 'region'=>'Inland Empire',                 'county'=>'Riverside County',     'geo'=>'urban',         'cond'=>'general',             'hero_desc'=>'one of the Inland Empire\'s largest cities, where a rapidly growing and diverse population has increasing demand for evidence-based psychiatric treatments'],
 'morongo-valley'      =>['name'=>'Morongo Valley',      'hub'=>'Palm Springs',   'dist'=>20, 'region'=>'San Gorgonio Pass / Morongo Basin','county'=>'San Bernardino County','geo'=>'high_desert', 'cond'=>'depression_anxiety',  'hero_desc'=>'a small high desert community in the Morongo Basin, positioned between our Palm Springs and Twentynine Palms hubs for maximum TMS accessibility'],
 'mountain-center'     =>['name'=>'Mountain Center',     'hub'=>'Rancho Mirage',  'dist'=>42, 'region'=>'San Jacinto Mountains',         'county'=>'Riverside County',     'geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a small mountain crossroads community at the heart of the San Jacinto Range, where Karma TMS bridges the gap between remote living and specialized psychiatric care'],
 'murrieta'            =>['name'=>'Murrieta',            'hub'=>'Rancho Mirage',  'dist'=>65, 'region'=>'Southwest Riverside County',   'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'treatment_resistant', 'hero_desc'=>'a thriving Southwest Riverside County city where a young and growing population seeks evidence-based alternatives to conventional psychiatric medications'],
 'needles'             =>['name'=>'Needles',             'hub'=>'Twentynine Palms','dist'=>100,'region'=>'Lower Colorado River Valley',  'county'=>'San Bernardino County','geo'=>'remote',        'cond'=>'general',             'hero_desc'=>'a remote Colorado River city where the nearest specialty psychiatric care once required a very long journey—now, our Twentynine Palms hub dramatically closes that gap'],
 'newberry-springs'    =>['name'=>'Newberry Springs',    'hub'=>'Twentynine Palms','dist'=>45, 'region'=>'Mojave Desert',                'county'=>'San Bernardino County','geo'=>'remote',        'cond'=>'general',             'hero_desc'=>'a small Mojave Desert community east of Barstow, where the solitude of open desert living underscores the need for accessible, specialized mental health treatment'],
 'north-shore'         =>['name'=>'North Shore',         'hub'=>'Palm Springs',   'dist'=>32, 'region'=>'Salton Sea',                   'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a small community on the north shore of the Salton Sea in one of California\'s most underserved regions, now with a real path to advanced TMS care'],
 'nuevo'               =>['name'=>'Nuevo',               'hub'=>'Rancho Mirage',  'dist'=>53, 'region'=>'Western Riverside County',     'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a quiet rural community in western Riverside County with a clear path to advanced mental health treatment at our Rancho Mirage hub'],
 'oak-glen'            =>['name'=>'Oak Glen',            'hub'=>'Twentynine Palms','dist'=>45, 'region'=>'Inland Empire Foothills',      'county'=>'San Bernardino County','geo'=>'rural',         'cond'=>'depression_anxiety',  'hero_desc'=>'a scenic apple-growing community in the San Bernardino foothills where country living and mental wellness now connect through accessible TMS therapy'],
 'oasis'               =>['name'=>'Oasis',               'hub'=>'Palm Springs',   'dist'=>28, 'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a small agricultural community in the eastern Coachella Valley, where Karma TMS provides access to specialized psychiatric care previously unavailable locally'],
 'palm-desert'         =>['name'=>'Palm Desert',         'hub'=>'Rancho Mirage',  'dist'=>5,  'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'desert',        'cond'=>'depression_anxiety',  'hero_desc'=>'a major Coachella Valley city celebrated for its cultural scene, outdoor lifestyle, and El Paseo shopping district—now served by Karma TMS just five miles away'],
 'parker'              =>['name'=>'Parker',              'hub'=>'Twentynine Palms','dist'=>110,'region'=>'Lower Colorado River Valley',  'county'=>'San Bernardino County','geo'=>'remote',        'cond'=>'general',             'hero_desc'=>'a Colorado River border community where residents on both sides of the state line can access TMS therapy at our Twentynine Palms facility'],
 'perris'              =>['name'=>'Perris',              'hub'=>'Rancho Mirage',  'dist'=>50, 'region'=>'Southwest Riverside County',   'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'general',             'hero_desc'=>'a rapidly growing Riverside County city where expanding suburbs and increasing mental health service demand make Karma TMS an essential resource'],
 'phelan'              =>['name'=>'Phelan',              'hub'=>'Twentynine Palms','dist'=>55, 'region'=>'High Desert',                  'county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'depression_anxiety',  'hero_desc'=>'a high desert community where rural character and limited local healthcare options make access to our Twentynine Palms hub especially meaningful'],
 'pine-cove'           =>['name'=>'Pine Cove',           'hub'=>'Rancho Mirage',  'dist'=>43, 'region'=>'San Jacinto Mountains',         'county'=>'Riverside County',     'geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a small mountain community near Idyllwild in the San Jacinto Range, where residents live at elevation but deserve ground-level access to advanced psychiatric care'],
 'pinon-hills'         =>['name'=>'Pinon Hills',         'hub'=>'Twentynine Palms','dist'=>52, 'region'=>'High Desert',                  'county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'general',             'hero_desc'=>'a high desert community where open skies and dry air meet the very real need for accessible, modern mental health treatment'],
 'pioneertown'         =>['name'=>'Pioneertown',         'hub'=>'Twentynine Palms','dist'=>15, 'region'=>'High Desert',                  'county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'ptsd_anxiety',        'hero_desc'=>'a historic High Desert community known for its Old West movie set and vibrant arts scene, with direct access to our Twentynine Palms TMS hub'],
 'quail-valley'        =>['name'=>'Quail Valley',        'hub'=>'Rancho Mirage',  'dist'=>57, 'region'=>'Southwest Riverside County',   'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a quiet rural community in Southwest Riverside County, where Karma TMS brings the region\'s most advanced psychiatric care within reach'],
 'quartzsite'          =>['name'=>'Quartzsite',          'hub'=>'Twentynine Palms','dist'=>105,'region'=>'Lower Colorado River Valley',  'county'=>'La Paz County, AZ',    'geo'=>'remote',        'cond'=>'general',             'hero_desc'=>'a desert crossroads community famous for gem shows and winter snowbirds, where our Twentynine Palms hub provides the nearest advanced TMS psychiatric care'],
 'redlands'            =>['name'=>'Redlands',            'hub'=>'Rancho Mirage',  'dist'=>38, 'region'=>'Inland Empire',                 'county'=>'San Bernardino County','geo'=>'suburban',      'cond'=>'depression_anxiety',  'hero_desc'=>'a historic citrus city in the Inland Empire, where tree-lined streets and a strong university community meet growing demand for evidence-based psychiatric treatment'],
 'rialto'              =>['name'=>'Rialto',              'hub'=>'Rancho Mirage',  'dist'=>42, 'region'=>'Inland Empire',                 'county'=>'San Bernardino County','geo'=>'suburban',      'cond'=>'treatment_resistant', 'hero_desc'=>'a diverse Inland Empire city where a large and growing community deserves better access to advanced, effective psychiatric care beyond conventional antidepressants'],
 'rice'                =>['name'=>'Rice',                'hub'=>'Twentynine Palms','dist'=>60, 'region'=>'Mojave Desert',                'county'=>'San Bernardino County','geo'=>'remote',        'cond'=>'general',             'hero_desc'=>'one of Southern California\'s most remote communities, proving that even residents far from urban centers can access TMS therapy at our Twentynine Palms hub'],
 'rimforest'           =>['name'=>'Rimforest',           'hub'=>'Twentynine Palms','dist'=>55, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a pine-scented mountain community on the San Bernardino rim, where seasonal living and limited healthcare access are daily realities that TMS therapy can address'],
 'riverside'           =>['name'=>'Riverside',           'hub'=>'Rancho Mirage',  'dist'=>48, 'region'=>'Inland Empire',                 'county'=>'Riverside County',     'geo'=>'urban',         'cond'=>'treatment_resistant', 'hero_desc'=>'Riverside County\'s proud county seat and one of Southern California\'s most historically significant cities, where a large diverse population deserves the most advanced psychiatric care available'],
 'romoland'            =>['name'=>'Romoland',            'hub'=>'Rancho Mirage',  'dist'=>55, 'region'=>'Western Riverside County',     'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a small rural community in western Riverside County where residents benefit from Karma TMS\'s commitment to making world-class mental health care regionally accessible'],
 'running-springs'     =>['name'=>'Running Springs',     'hub'=>'Twentynine Palms','dist'=>65, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a mountain community at the crossroads of the San Bernardino Mountains, where year-round residents face seasonal depression and the challenge of accessing specialized psychiatric care'],
 'san-bernardino'      =>['name'=>'San Bernardino',      'hub'=>'Rancho Mirage',  'dist'=>40, 'region'=>'Inland Empire',                 'county'=>'San Bernardino County','geo'=>'urban',         'cond'=>'general',             'hero_desc'=>'the county seat of San Bernardino County and one of Southern California\'s most populous cities, served by Karma TMS with FDA-approved TMS therapy at our Rancho Mirage hub'],
 'san-jacinto'         =>['name'=>'San Jacinto',         'hub'=>'Rancho Mirage',  'dist'=>50, 'region'=>'San Jacinto Valley',            'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'depression_anxiety',  'hero_desc'=>'a historic San Jacinto Valley city at the base of the San Jacinto Mountains, with a clear path to advanced TMS therapy at our Rancho Mirage hub'],
 'seven-oaks'          =>['name'=>'Seven Oaks',          'hub'=>'Twentynine Palms','dist'=>50, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a small mountain community in the Big Bear area where remote living meets the need for accessible, specialized mental health treatment'],
 'sky-valley'          =>['name'=>'Sky Valley',          'hub'=>'Palm Springs',   'dist'=>18, 'region'=>'Coachella Valley Foothills',    'county'=>'Riverside County',     'geo'=>'desert',        'cond'=>'general',             'hero_desc'=>'a quiet unincorporated community in the foothills above the Coachella Valley, within easy reach of our Palm Springs hub for TMS therapy'],
 'sugarloaf'           =>['name'=>'Sugarloaf',           'hub'=>'Twentynine Palms','dist'=>72, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a mountain community near Big Bear Lake where residents access specialized TMS therapy at our Twentynine Palms hub without the drive to a major metropolitan area'],
 'sun-city'            =>['name'=>'Sun City',            'hub'=>'Rancho Mirage',  'dist'=>55, 'region'=>'Southwest Riverside County',   'county'=>'Riverside County',     'geo'=>'retirement',    'cond'=>'depression_anxiety',  'hero_desc'=>'an established active adult community in Riverside County, where mental wellness in the retirement years is every bit as important as physical health'],
 'sun-city-palm-desert'=>['name'=>'Sun City Palm Desert','hub'=>'Rancho Mirage',  'dist'=>5,  'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'retirement',    'cond'=>'depression_anxiety',  'hero_desc'=>'an active 55+ community in the heart of the Coachella Valley, just five minutes from our Rancho Mirage hub—making Karma TMS the most accessible advanced psychiatric option in the region'],
 'temecula'            =>['name'=>'Temecula',            'hub'=>'Rancho Mirage',  'dist'=>68, 'region'=>'Southwest Riverside County',   'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'ocd_depression',      'hero_desc'=>'Southern California\'s renowned wine country city, where a health-aware and sophisticated community increasingly seeks evidence-based alternatives to conventional psychiatric medications'],
 'thermal'             =>['name'=>'Thermal',             'hub'=>'Palm Springs',   'dist'=>22, 'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'an agricultural community in the southern Coachella Valley where farming families can now access advanced TMS psychiatric care at our Palm Springs hub'],
 'thousand-palms'      =>['name'=>'Thousand Palms',      'hub'=>'Rancho Mirage',  'dist'=>6,  'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'desert',        'cond'=>'general',             'hero_desc'=>'a small Coachella Valley community between Rancho Mirage and Indio, perfectly positioned for easy access to our central valley TMS hub'],
 'twin-peaks'          =>['name'=>'Twin Peaks',          'hub'=>'Twentynine Palms','dist'=>57, 'region'=>'San Bernardino Mountains',     'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a mountain community perched above the valley where evergreen forests and community character coexist with the real challenge of accessing specialized mental health care'],
 'valley-of-enchantment'=>['name'=>'Valley of Enchantment','hub'=>'Twentynine Palms','dist'=>50,'region'=>'San Bernardino Mountains',    'county'=>'San Bernardino County','geo'=>'mountain',      'cond'=>'depression_anxiety',  'hero_desc'=>'a picturesque mountain community whose name reflects its natural beauty—and whose residents now have a clear path to advanced TMS care at our Twentynine Palms hub'],
 'valley-vista'        =>['name'=>'Valley Vista',        'hub'=>'Rancho Mirage',  'dist'=>52, 'region'=>'San Jacinto Valley',            'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a small rural community in the San Jacinto Valley where Karma TMS brings specialized TMS therapy to residents who have historically had limited local options'],
 'victorville'         =>['name'=>'Victorville',         'hub'=>'Twentynine Palms','dist'=>45, 'region'=>'High Desert',                  'county'=>'San Bernardino County','geo'=>'urban',         'cond'=>'treatment_resistant', 'hero_desc'=>'the High Desert\'s most populous city, where a large community now has access to FDA-approved TMS therapy for depression, anxiety, and OCD at our Twentynine Palms hub'],
 'vidal'               =>['name'=>'Vidal',               'hub'=>'Twentynine Palms','dist'=>100,'region'=>'Mojave Desert / Colorado River','county'=>'San Bernardino County','geo'=>'remote',        'cond'=>'general',             'hero_desc'=>'a remote desert junction near the Colorado River where even geographically isolated residents can access advanced TMS care at our Twentynine Palms hub'],
 'vista-santa-rosa'    =>['name'=>'Vista Santa Rosa',    'hub'=>'Palm Springs',   'dist'=>20, 'region'=>'Coachella Valley',              'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a rural agricultural community in the Coachella Valley where farming families can access specialized TMS therapy without traveling to a distant metro area'],
 'whitewater'          =>['name'=>'Whitewater',          'hub'=>'Palm Springs',   'dist'=>18, 'region'=>'San Gorgonio Pass',             'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a small community at the entrance to the San Gorgonio Pass, positioned between the Inland Empire and the desert with direct access to our Palm Springs hub'],
 'wildomar'            =>['name'=>'Wildomar',            'hub'=>'Rancho Mirage',  'dist'=>62, 'region'=>'Southwest Riverside County',   'county'=>'Riverside County',     'geo'=>'suburban',      'cond'=>'depression_anxiety',  'hero_desc'=>'one of the newer cities in Riverside County, where a growing suburban community benefits from Karma TMS\'s commitment to regional mental health access'],
 'winchester'          =>['name'=>'Winchester',          'hub'=>'Rancho Mirage',  'dist'=>58, 'region'=>'Temecula Valley Area',          'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'a rural community in the rolling hills near Temecula, where residents benefit from proximity to our Rancho Mirage hub for specialized TMS treatment'],
 'wonder-valley'       =>['name'=>'Wonder Valley',       'hub'=>'Twentynine Palms','dist'=>8,  'region'=>'High Desert',                  'county'=>'San Bernardino County','geo'=>'remote',        'cond'=>'ptsd_anxiety',        'hero_desc'=>'a sparse High Desert homestead community east of Twentynine Palms—just 8 miles from our hub—making advanced TMS care more accessible here than almost anywhere in the region'],
 'woodcrest'           =>['name'=>'Woodcrest',           'hub'=>'Rancho Mirage',  'dist'=>50, 'region'=>'Inland Empire',                 'county'=>'Riverside County',     'geo'=>'rural',         'cond'=>'general',             'hero_desc'=>'an unincorporated Riverside-area community where rural character meets the need for modern, evidence-based psychiatric treatment at our Rancho Mirage hub'],
 'yermo'               =>['name'=>'Yermo',               'hub'=>'Twentynine Palms','dist'=>60, 'region'=>'Mojave Desert',                'county'=>'San Bernardino County','geo'=>'remote',        'cond'=>'general',             'hero_desc'=>'a small Mojave Desert community near Barstow where residents can access specialized TMS care at our Twentynine Palms hub'],
 'yucaipa'             =>['name'=>'Yucaipa',             'hub'=>'Rancho Mirage',  'dist'=>34, 'region'=>'Inland Empire',                 'county'=>'San Bernardino County','geo'=>'suburban',      'cond'=>'general',             'hero_desc'=>'a growing foothill city at the eastern edge of the Inland Empire, where a family-oriented community is seeking modern solutions to mental health challenges'],
 'yucca-mesa'          =>['name'=>'Yucca Mesa',          'hub'=>'Twentynine Palms','dist'=>5,  'region'=>'High Desert',                  'county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'general',             'hero_desc'=>'a small high desert community just outside Yucca Valley with the most direct access of almost any community to our Twentynine Palms TMS hub'],
 'yucca-valley'        =>['name'=>'Yucca Valley',        'hub'=>'Twentynine Palms','dist'=>20, 'region'=>'High Desert / Morongo Basin',  'county'=>'San Bernardino County','geo'=>'high_desert',   'cond'=>'depression_anxiety',  'hero_desc'=>'the Morongo Basin\'s largest city and commercial center, where a growing desert community is increasingly seeking evidence-based psychiatric treatment beyond conventional medications'],
];

// ============================================================
// CONDITIONS LISTS
// ============================================================
$conditions_map = [
 'depression_anxiety' => [
  ['Major Depressive Disorder','brain'],['Generalized Anxiety Disorder','activity'],
  ['Treatment-Resistant Depression','shield-off'],['Persistent Depressive Disorder','clock'],
  ['Social Anxiety Disorder','users'],['Panic Disorder','zap'],
 ],
 'ptsd_anxiety' => [
  ['Post-Traumatic Stress Disorder (PTSD)','shield-alert'],['Generalized Anxiety Disorder','activity'],
  ['Major Depressive Disorder','brain'],['Panic Disorder','zap'],
  ['Treatment-Resistant Depression','shield-off'],['Acute Stress Disorder','alert-circle'],
 ],
 'ocd_depression' => [
  ['Obsessive-Compulsive Disorder (OCD)','repeat'],['Major Depressive Disorder','brain'],
  ['Treatment-Resistant Depression','shield-off'],['Bipolar Disorder (Depressive Phase)','activity'],
  ['Postpartum Depression','heart'],['Body Dysmorphic Disorder','eye'],
 ],
 'treatment_resistant' => [
  ['Treatment-Resistant Depression (TRD)','shield-off'],['Major Depressive Disorder','brain'],
  ['Bipolar Disorder (Depressive Phase)','activity'],['Chronic Pain + Comorbid Depression','heart-pulse'],
  ['Postpartum Depression','heart'],['Persistent Depressive Disorder','clock'],
 ],
 'general' => [
  ['Major Depressive Disorder','brain'],['Obsessive-Compulsive Disorder (OCD)','repeat'],
  ['Post-Traumatic Stress (PTSD)','shield-alert'],['Generalized Anxiety Disorder','activity'],
  ['Treatment-Resistant Depression','shield-off'],['Persistent Depressive Disorder','clock'],
 ],
];

// ============================================================
// FAQ POOLS  (5 pools; [question, answer])
// ============================================================
$faq_pools = [
 0 => [
  ['What is TMS therapy and how does it work?','Transcranial Magnetic Stimulation (TMS) uses precisely targeted magnetic pulses—similar in strength to an MRI—to stimulate underactive areas of the brain responsible for mood regulation. Unlike antidepressants, TMS works directly at the neurological level with no systemic side effects.'],
  ['How many sessions does a TMS treatment course require?','A standard TMS course involves 20–36 sessions, delivered five days a week over four to six weeks. Each session lasts approximately 20–40 minutes. Your psychiatrist will customize the protocol based on your diagnosis and response.'],
  ['What does a TMS session feel like?','Most patients describe a light, rhythmic tapping sensation on the scalp during the procedure. There is no anesthesia, no sedation, and no recovery time—most patients return to normal activities immediately after each session.'],
  ['Can I drive myself to and from TMS sessions?','Yes. Because TMS involves no sedation or cognitive impairment, patients drive themselves to and from every appointment. This is one of the major practical advantages over other psychiatric procedures.'],
  ['How do I get started with TMS therapy from {CITY}?','Call Karma TMS or submit a contact form online to schedule your free initial consultation. Our intake team will verify your insurance, gather your psychiatric history, and typically schedule your first appointment within one to two weeks.'],
 ],
 1 => [
  ['Who is a good candidate for TMS therapy?','Adults with Major Depressive Disorder who have not achieved adequate relief from one or more antidepressant medications are the primary TMS candidates. Our psychiatrists also evaluate patients with anxiety disorders, OCD, and PTSD for TMS suitability.'],
  ['Does TMS therapy really work for depression?','Clinical trials show 60–80% of patients achieve meaningful improvement, with 30–50% achieving full remission. Karma TMS\'s outcomes align with the top-performing TMS programs nationally, and we track every patient\'s progress throughout treatment.'],
  ['Are there any contraindications to TMS?','TMS is not recommended for individuals with ferromagnetic metal implants in or near the skull—such as certain pacemakers, cochlear implants, or aneurysm clips. Our intake process screens thoroughly for all contraindications before treatment begins.'],
  ['Is PrTMS® different from standard TMS, and which should I choose?','PrTMS® (Personalized Repetitive TMS) uses a patented qEEG-guided algorithm to calibrate the magnetic frequency and stimulation site to your brain\'s specific activity patterns. Our psychiatrists will recommend the protocol most likely to achieve the best outcome for your individual case.'],
  ['Do {CITY} residents need a referral to start TMS?','No referral is required. Karma TMS has board-certified psychiatrists on staff who conduct your evaluation and manage your care from initial consultation through the full treatment course.'],
 ],
 2 => [
  ['Does insurance cover TMS therapy for {CITY} patients?','Most major insurance plans cover TMS therapy for qualifying diagnoses. Coverage typically requires documented failure of one or more antidepressant medications. Our intake specialists verify your specific benefits before your first appointment, at no cost to you.'],
  ['Does Medicare cover TMS at Karma TMS?','Yes. Medicare Part B covers TMS for Major Depressive Disorder when specific clinical criteria are met. Our team has extensive experience navigating Medicare pre-authorization and will manage the entire process on your behalf.'],
  ['Does Karma TMS accept Tricare?','Yes. We accept Tricare for eligible active duty service members, veterans, and their families. We work directly with Tricare\'s authorization process to make access as seamless as possible for the military community.'],
  ['How much does TMS therapy cost without insurance?','The full out-of-pocket cost of a TMS course typically ranges from $6,000–$15,000 depending on session count and protocol. Most insured patients pay only their standard specialist co-pay. We offer financial consultations to explore all available options.'],
  ['What insurance plans does Karma TMS accept?','We accept virtually all major commercial insurance plans, Medicare, Medi-Cal, and Tricare. Our intake specialists will verify your specific coverage and provide a clear cost breakdown before treatment begins—no financial surprises.'],
 ],
 3 => [
  ['Are there side effects from TMS therapy?','Unlike antidepressant medications, TMS has no systemic side effects such as weight gain, sexual dysfunction, or fatigue. The most common side effect is a mild, temporary scalp sensitivity at the treatment site, which typically resolves within the first week.'],
  ['Is TMS therapy safe for long-term use?','TMS has been in clinical use since FDA clearance in 2008 and has an excellent long-term safety profile. Many patients return for annual maintenance sessions and report sustained symptom improvement with each course.'],
  ['Can TMS make my depression worse?','No. TMS does not carry the risk of inducing mania, emotional blunting, or worsening depression that some medications may cause. The treatment is precisely titrated and monitored by our psychiatrists throughout the course.'],
  ['Can I continue taking my medications during TMS treatment?','Yes. Most patients continue their existing psychiatric medications during TMS treatment. Our psychiatrists review your current regimen at consultation and can optimize your pharmaceutical plan to work alongside TMS for the best possible outcome.'],
  ['Will the commute from {CITY} affect my TMS treatment outcomes?','Consistency is the most important factor in TMS outcomes. We work with {CITY} patients to schedule appointments at times that minimize commute burden—early morning, late afternoon, or batched around a work schedule—ensuring you complete the full course.'],
 ],
 4 => [
  ['How quickly will I see results from TMS?','Many patients notice a subtle improvement in mood and energy within the second or third week of treatment. Full therapeutic benefit typically emerges over four to six weeks. Most patients who respond to TMS describe the improvement as gradual and sustained, not sudden.'],
  ['How long do TMS therapy results last?','Research shows that TMS remission is durable, with many patients maintaining improvement for one year or longer after a completed course. Some patients return for brief maintenance sessions annually to sustain their gains.'],
  ['What happens if TMS doesn\'t fully work?','Approximately 20% of patients don\'t achieve full remission in their first course. In these cases, our psychiatrists may extend treatment, adjust the protocol, or discuss complementary options. We never leave a patient without a clear, honest path forward.'],
  ['Can TMS treat anxiety and OCD as well as depression?','Yes. TMS carries FDA clearance for Major Depressive Disorder and OCD, and strong clinical evidence supports its use for generalized anxiety and PTSD. Many patients experience improvement across multiple diagnoses simultaneously.'],
  ['Is there a waiting list for TMS appointments from {CITY}?','We strive to schedule initial consultations within one to two weeks of inquiry. Once treatment is approved, sessions are typically available five days a week at our {HUB} hub, making it easy for {CITY} residents to maintain the consistent schedule that drives the best results.'],
 ],
];

// ============================================================
// SIDEBAR IMAGES  (rotate by city index mod 4)
// ============================================================
$sidebar_images = [
 'https://res.cloudinary.com/de4kw1t2i/image/upload/v1761742435/IMG_5128_fci7xz.jpg',
 'images/How%20Long%20Does%20TMS%20Therapy%20Last.png',
 'https://res.cloudinary.com/de4kw1t2i/image/upload/v1763969156/palmsprings_yjptwh.jpg',
 'https://res.cloudinary.com/de4kw1t2i/image/upload/v1761742435/IMG_5128_fci7xz.jpg',
];

// Hero bg images by geo type
$hero_images = [
 'desert'      => 'https://res.cloudinary.com/de4kw1t2i/image/upload/v1763969156/palmsprings_yjptwh.jpg',
 'mountain'    => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1600&q=80',
 'high_desert' => 'https://images.unsplash.com/photo-1471879832106-c7ab9e0cee23?w=1600&q=80',
 'suburban'    => 'https://res.cloudinary.com/de4kw1t2i/image/upload/v1763969156/palmsprings_yjptwh.jpg',
 'urban'       => 'https://res.cloudinary.com/de4kw1t2i/image/upload/v1763969156/palmsprings_yjptwh.jpg',
 'rural'       => 'https://res.cloudinary.com/de4kw1t2i/image/upload/v1763969156/palmsprings_yjptwh.jpg',
 'military'    => 'https://res.cloudinary.com/de4kw1t2i/image/upload/v1763969156/palmsprings_yjptwh.jpg',
 'retirement'  => 'https://res.cloudinary.com/de4kw1t2i/image/upload/v1763969156/palmsprings_yjptwh.jpg',
 'resort'      => 'https://res.cloudinary.com/de4kw1t2i/image/upload/v1763969156/palmsprings_yjptwh.jpg',
 'remote'      => 'https://images.unsplash.com/photo-1471879832106-c7ab9e0cee23?w=1600&q=80',
];

// ============================================================
// INTRO PARAGRAPH by geo type
// ============================================================
function getIntro($name,$data){
 $geo=$data['geo']; $region=$data['region']; $hub=$data['hub']; $dist=$data['dist']; $county=$data['county'];
 switch($geo){
  case 'desert':
   return "$name sits in the heart of the $region, where sun-drenched winters and scorching summers define life in Southern California's iconic desert landscape. While desert living offers natural beauty and community, it can intensify mental health challenges including seasonal mood fluctuations, social isolation, and depression that fails to respond to standard medications. Karma TMS now makes FDA-approved neurological psychiatric treatment accessible from $name at our $hub facility, just $dist miles away—no need to drive to Los Angeles or San Diego.";
  case 'mountain':
   return "Perched in the $region, $name is celebrated for its forested trails, mountain air, and close community bonds. But life at elevation brings its own mental health challenges: seasonal affective patterns intensify during cloud-covered winters, geographic isolation limits access to specialized healthcare, and the psychological toll of remote living is real and often underaddressed. Karma TMS bridges this gap for $name residents, offering a straightforward drive to our $hub hub where FDA-approved TMS therapy is provided by board-certified psychiatrists—no referral required.";
  case 'high_desert':
   return "The $region surrounding $name has a character all its own—independent, sun-baked, and distant from the medical infrastructure of California's coastal cities. Mental health challenges don't shrink with geographic distance; for many High Desert residents, depression and anxiety are compounded by isolation and chronically limited local treatment options. Karma TMS's $hub facility is strategically positioned to serve $county communities, making FDA-approved TMS therapy a realistic option for $name residents just $dist miles away.";
  case 'suburban':
   return "$name has grown rapidly in recent years—from a quiet $region community to one of Southern California's most dynamic suburban cities. Rapid growth brings opportunity alongside real stressors: longer commutes, economic pressure, and the mental health demands of modern suburban life. For $name residents dealing with treatment-resistant depression or anxiety, Karma TMS provides the advanced neurological treatment—FDA-approved TMS therapy—that conventional psychiatry alone often cannot deliver. Our $hub hub is just $dist miles from $name.";
  case 'urban':
   return "As one of $county's major urban centers, $name is home to a large and diverse population navigating the full spectrum of mental health challenges. Urban environments create concentrated demand for advanced, effective treatments beyond standard antidepressants. Karma TMS brings FDA-approved TMS therapy within reach of $name residents who have not found adequate relief through conventional medications, at our $hub facility just $dist miles away.";
  case 'rural':
   return "The open countryside around $name is part of what makes $county unique—but geographic distance from major medical centers has historically placed specialized psychiatric care out of reach for many residents. For $name patients dealing with depression, anxiety, or treatment-resistant mental health conditions, the journey to effective care was a real barrier. Karma TMS changes that equation: world-class neurological treatment is now a straightforward $dist-mile drive to our $hub hub.";
  case 'military':
   return "$name's military community represents some of the region's most resilient individuals—and some of the most underserved when it comes to mental health. Active duty service members, veterans, and their families face elevated rates of PTSD, depression, and anxiety that often do not respond adequately to medications alone. Karma TMS honors that service by making advanced TMS therapy—including full Tricare and VA benefits support—accessible from $name at our $hub hub, just $dist miles away.";
  case 'retirement':
   return "For $name's active adult community, mental wellness is every bit as important as physical health. Depression and anxiety in the retirement years are far more prevalent than many realize, and they frequently respond poorly to conventional antidepressants that interact with other medications. TMS therapy offers an effective, non-pharmaceutical path forward that works directly at the neurological level—and Karma TMS makes it accessible from $name at our $hub hub, just $dist miles away.";
  case 'resort':
   return "$name's resort lifestyle and exceptional climate attract residents who expect excellence in every area of life—and when mental health challenges arise, those residents deserve equally world-class care. TMS therapy at Karma TMS offers a non-invasive, FDA-approved approach to depression, anxiety, and OCD that fits naturally into $name's wellness-forward community. Our $hub hub is just $dist miles away, making exceptional psychiatric care as accessible as any of the valley's finest amenities.";
  case 'remote':
  default:
   return "The wide-open spaces around $name offer a rare freedom from urban congestion—but geographic isolation has long meant making difficult choices about which healthcare needs justify the journey. Karma TMS eliminates that dilemma for mental health. Our $hub facility serves even the most remote communities in $county, bringing FDA-approved TMS therapy within reach for $name residents who are willing to make the $dist-mile drive to access treatment that can genuinely change lives.";
 }
}

// ============================================================
// WHY CHOOSE CARDS by hub
// ============================================================
function getWhyCards($hub,$name){
 if($hub==='Twentynine Palms'){
  return [
   ['map-pin','Serving the High Desert','One of the only board-certified TMS centers in the Morongo Basin—purpose-built to serve '.$name.' and High Desert communities without requiring a trip to a major metro area.'],
   ['shield-check','Military &amp; Tricare Ready','Tricare accepted. VA-experienced psychiatrists on staff. We understand the distinct mental health challenges facing active duty members, veterans, and their families.'],
   ['user-check','No Referral Needed','Our board-certified psychiatrists conduct your full psychiatric evaluation and build your treatment plan in-house—no outside referral or pre-existing relationship required.'],
  ];
 } elseif($hub==='Palm Springs'){
  return [
   ['map-pin','Heart of the Coachella Valley','Our Palm Springs clinic anchors the western valley, making it the most convenient specialized TMS destination for '.$name.' and the communities surrounding it.'],
   ['cpu','Personalized Brain Mapping','Advanced qEEG technology maps your brain\'s individual activity patterns, ensuring every TMS pulse targets exactly the neural circuits that need stimulation.'],
   ['heart-pulse','Full Insurance Support','We manage all prior authorization, billing, and documentation so you can focus entirely on healing. Medicare, Tricare, and virtually all commercial plans accepted.'],
  ];
 } else {
  return [
   ['building-2','Central Valley Expertise','Our Rancho Mirage hub anchors the geographic center of the Coachella Valley, giving '.$name.' residents access to the most advanced psychiatric care in the entire desert region.'],
   ['users','Complete Psychiatric Team','Board-certified psychiatrists, clinical specialists, and certified TMS technicians collaborate under one roof to deliver integrated, truly personalized care.'],
   ['trending-up','Proven Clinical Outcomes','More than 80% of our patients achieve meaningful improvement in depression, anxiety, and OCD symptoms—outcomes that match the nation\'s top academic TMS programs.'],
  ];
 }
}

// ============================================================
// PAGE GENERATOR
// ============================================================
function generatePage($slug,$data,$hub_data,$conditions_map,$faq_pools,$sidebar_images,$hero_images,$city_index){
 $name     = $data['name'];
 $hub      = $data['hub'];
 $dist     = $data['dist'];
 $region   = $data['region'];
 $county   = $data['county'];
 $geo      = $data['geo'];
 $cond_key = $data['cond'];
 $hero_desc= $data['hero_desc'];

 $hub_info = $hub_data[$hub];
 $hub_addr = $hub_info['addr'].', '.$hub_info['city'].', CA '.$hub_info['zip'];
 $hub_lat  = $hub_info['lat'];
 $hub_lon  = $hub_info['lon'];

 $intro      = getIntro($name,$data);
 $why_cards  = getWhyCards($hub,$name);
 $conditions = $conditions_map[$cond_key];
 $faq_pool   = $faq_pools[$city_index % 5];
 $sidebar_img= $sidebar_images[$city_index % 4];
 $hero_img   = $hero_images[$geo] ?? $hero_images['suburban'];

 // Build conditions HTML
 $cond_html = '';
 foreach($conditions as $c){
  $cond_html .= '<li class="loc-cond-item"><i data-lucide="'.$c[1].'" class="loc-cond-icon"></i><span>'.$c[0].'</span></li>';
 }

 // Build why-cards HTML
 $why_html = '';
 foreach($why_cards as $wc){
  $why_html .= '<div class="loc-why-card"><div class="loc-why-icon-wrap"><i data-lucide="'.$wc[0].'" class="loc-why-icon"></i></div><h3 class="loc-why-title">'.$wc[1].'</h3><p class="loc-why-body">'.$wc[2].'</p></div>';
 }

 // Build FAQ HTML + schema items
 $faq_html = '';
 $faq_schema_items = [];
 foreach($faq_pool as $i=>$fq){
  $q = str_replace(['{CITY}','{HUB}'],[$name,$hub],$fq[0]);
  $a = str_replace(['{CITY}','{HUB}'],[$name,$hub],$fq[1]);
  $faq_html .= '<div class="faq-item" onclick="toggleFAQ(this)">
   <div class="faq-header"><span class="faq-question">'.$q.'</span><i data-lucide="chevron-down" class="faq-chevron"></i></div>
   <div class="faq-content"><p>'.$a.'</p></div>
  </div>';
  $faq_schema_items[] = '{"@type":"Question","name":'.json_encode($q).',"acceptedAnswer":{"@type":"Answer","text":'.json_encode($a).'}}';
 }

 $faq_schema_list = implode(',',$faq_schema_items);

 // Meta description (unique)
 $meta_desc_templates = [
  'desert'     => "TMS therapy near $name, CA — Karma TMS serves {$region} residents from our $hub hub. FDA-approved treatment for depression & anxiety. Accepting all major insurance.",
  'mountain'   => "Karma TMS serves $name mountain residents from our $hub facility. FDA-approved TMS for depression, anxiety & PTSD. Board-certified psychiatrists. No referral needed.",
  'high_desert'=> "TMS therapy for $name, CA — Karma TMS {$hub} hub serves the High Desert with FDA-approved treatment for depression, OCD & PTSD. All major insurance accepted.",
  'suburban'   => "Seeking TMS therapy near $name? Karma TMS at $hub offers FDA-approved treatment for depression, anxiety & OCD serving {$county}. Board-certified psychiatrists.",
  'urban'      => "FDA-approved TMS therapy for $name, CA — Karma TMS $hub hub treats depression, anxiety & OCD for {$county} residents. Board-certified psychiatrists. Insurance accepted.",
  'rural'      => "TMS therapy for $name, CA — Karma TMS $hub hub brings FDA-approved depression & anxiety treatment to {$county}. No referral required. All major insurance accepted.",
  'military'   => "TMS therapy near $name — Karma TMS accepts Tricare & VA benefits at our $hub hub. Specialized care for depression, PTSD & anxiety in {$county}.",
  'retirement' => "TMS therapy near $name — Karma TMS $hub hub offers Medicare-covered, non-pharmaceutical treatment for depression & anxiety in {$county}'s active adult communities.",
  'resort'     => "TMS therapy near $name, CA — Karma TMS $hub offers FDA-approved treatment for depression, anxiety & OCD. Serving the Coachella Valley's resort communities.",
  'remote'     => "TMS therapy for $name residents — Karma TMS $hub hub brings FDA-approved psychiatric care to {$county}. Depression, anxiety & PTSD treatment. Insurance accepted.",
 ];
 $meta_desc = $meta_desc_templates[$geo] ?? $meta_desc_templates['rural'];
 // Trim to 160 chars
 if(strlen(strip_tags($meta_desc))>160) $meta_desc = substr(strip_tags($meta_desc),0,157).'...';

 $title = "TMS Therapy in $name, CA | Karma TMS – $hub Hub";
 $canonical = SITE_URL."/tms-therapy-$slug.php";
 $page_url  = $canonical;

 // JSON-LD Schema
 $schema = '{
  "@context":"https://schema.org",
  "@graph":[
   {
    "@type":"MedicalBusiness",
    "name":"Karma TMS – '.$hub.' Hub",
    "url":"'.SITE_URL.'",
    "telephone":"'.PHONE_DISPLAY.'",
    "email":"contact@karmatms.com",
    "address":{"@type":"PostalAddress","streetAddress":"'.$hub_info['addr'].'","addressLocality":"'.$hub_info['city'].'","addressRegion":"CA","postalCode":"'.$hub_info['zip'].'","addressCountry":"US"},
    "geo":{"@type":"GeoCoordinates","latitude":'.$hub_lat.',"longitude":'.$hub_lon.'},
    "openingHoursSpecification":{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday"],"opens":"08:00","closes":"18:00"},
    "medicalSpecialty":["Psychiatry","MentalHealth"],
    "availableService":["TMS Therapy","PrTMS","Brain Mapping","Medication Management"],
    "areaServed":"'.$name.', '.$county.'"
   },
   {
    "@type":"FAQPage",
    "mainEntity":['.$faq_schema_list.']
   },
   {
    "@type":"BreadcrumbList",
    "itemListElement":[
     {"@type":"ListItem","position":1,"name":"Home","item":"'.SITE_URL.'/"},
     {"@type":"ListItem","position":2,"name":"Areas We Serve","item":"'.SITE_URL.'/areas-we-serve.php"},
     {"@type":"ListItem","position":3,"name":"TMS Therapy in '.$name.'","item":"'.$page_url.'"}
    ]
   }
  ]
 }';

 // Add stagger classes to why cards
 $why_html_final = '';
 $delays = ['d1','d2','d3'];
 foreach($why_cards as $wi=>$wc){
  $d = $delays[$wi] ?? '';
  $why_html_final .= '<div class="loc-why-card reveal '.$d.'"><div class="loc-why-icon-wrap"><i data-lucide="'.$wc[0].'" class="loc-why-icon"></i></div><h3 class="loc-why-title">'.$wc[1].'</h3><p class="loc-why-body">'.$wc[2].'</p></div>';
 }

 // Build the full page
 $html = '<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>'.htmlspecialchars($title).'</title>
 <meta name="description" content="'.htmlspecialchars(strip_tags($meta_desc)).'">
 <meta name="keywords" content="TMS therapy '.$name.', depression treatment '.$name.', psychiatrist near '.$name.', anxiety treatment '.$name.', mental health '.$name.' CA, TMS '.$hub.' hub, FDA approved TMS '.strtolower($county).'">
 <link rel="canonical" href="'.$canonical.'">
 <meta property="og:title" content="'.htmlspecialchars($title).'">
 <meta property="og:description" content="'.htmlspecialchars(strip_tags($meta_desc)).'">
 <meta property="og:type" content="website">
 <meta property="og:url" content="'.$canonical.'">
 <meta property="og:image" content="https://res.cloudinary.com/de4kw1t2i/image/upload/v1763969156/palmsprings_yjptwh.jpg">
 <meta name="geo.region" content="US-CA">
 <meta name="geo.placename" content="'.$name.', California">
 <?php include \'includes/header-links.php\'; ?>
 <script type="application/ld+json">'.$schema.'</script>
 <style>
  /* ---- Animations ---- */
  @keyframes fadeInUp{from{opacity:0;transform:translateY(28px)}to{opacity:1;transform:translateY(0)}}
  @keyframes fadeInLeft{from{opacity:0;transform:translateX(-24px)}to{opacity:1;transform:translateX(0)}}
  @keyframes floatA{0%,100%{transform:translate(0,0) scale(1)}50%{transform:translate(22px,-20px) scale(1.05)}}
  @keyframes floatB{0%,100%{transform:translate(0,0)}50%{transform:translate(-16px,18px) scale(.96)}}
  @keyframes pulseGlow{0%,100%{box-shadow:0 0 0 0 rgba(124,58,237,.45)}70%{box-shadow:0 0 0 14px rgba(124,58,237,0)}}
  @keyframes shimmer{0%{background-position:200% center}100%{background-position:-200% center}}
  @keyframes borderPulse{0%,100%{border-left-color:#7c3aed}50%{border-left-color:#a855f7}}
  @keyframes stepBounce{0%,100%{transform:scale(1)}50%{transform:scale(1.08)}}
  /* ---- Scroll reveal ---- */
  .reveal{opacity:0;transform:translateY(28px);transition:opacity .7s cubic-bezier(.16,1,.3,1),transform .7s cubic-bezier(.16,1,.3,1)}
  .reveal.in-view{opacity:1;transform:translateY(0)}
  .reveal-left{opacity:0;transform:translateX(-24px);transition:opacity .7s cubic-bezier(.16,1,.3,1),transform .7s cubic-bezier(.16,1,.3,1)}
  .reveal-left.in-view{opacity:1;transform:translateX(0)}
  .d1{transition-delay:.06s}.d2{transition-delay:.14s}.d3{transition-delay:.22s}.d4{transition-delay:.3s}
  /* ---- Breadcrumb ---- */
  .loc-breadcrumb{background:#f8f7ff;border-bottom:1px solid #ede9fe;padding:.65rem 0;font-size:.85rem}
  .loc-breadcrumb a{color:#7c3aed;text-decoration:none}.loc-breadcrumb a:hover{text-decoration:underline}
  .loc-breadcrumb .bc-sep{color:#9ca3af;margin:0 .4rem}.loc-breadcrumb .bc-cur{color:#6b7280}
  /* ---- Trust bar ---- */
  .loc-trust-bar{background:linear-gradient(90deg,#1e1b4b,#2d1b69,#1e1b4b);padding:1rem 0}
  .loc-trust-grid{display:flex;flex-wrap:wrap;justify-content:center;gap:1.25rem 2.5rem}
  .loc-trust-item{display:flex;align-items:center;gap:.5rem;color:#e0e7ff;font-size:.82rem;font-weight:600;animation:fadeInUp .6s both}
  .loc-trust-item i{color:#a78bfa;flex-shrink:0}
  /* ---- Hero ---- */
  .loc-hero{position:relative;color:#fff;padding:9rem 1rem 5.5rem;background:linear-gradient(135deg,#3b0764 0%,#581c87 45%,#7e22ce 100%);overflow:hidden}
  .loc-hero-bg{position:absolute;inset:0;background-size:cover;background-position:center;opacity:.1;mix-blend-mode:luminosity}
  .loc-orb{position:absolute;border-radius:50%;filter:blur(60px);pointer-events:none}
  .loc-orb-1{width:420px;height:420px;background:rgba(167,139,250,.18);top:-80px;right:-100px;animation:floatA 8s ease-in-out infinite}
  .loc-orb-2{width:300px;height:300px;background:rgba(216,180,254,.12);bottom:-60px;left:5%;animation:floatB 10s ease-in-out infinite}
  .loc-hero-inner{position:relative;z-index:2;max-width:820px}
  .loc-badge{display:inline-flex;align-items:center;gap:.4rem;background:rgba(147,51,234,.3);border:1px solid rgba(216,180,254,.45);padding:.35rem 1rem;border-radius:9999px;font-size:.78rem;font-weight:700;margin-bottom:1.4rem;letter-spacing:.05em;animation:fadeInUp .5s .1s both}
  .loc-hero h1{font-size:clamp(2rem,5vw,3.8rem);font-weight:800;line-height:1.12;margin-bottom:1.3rem;animation:fadeInUp .6s .2s both}
  .loc-hero h1 .grad{background:linear-gradient(90deg,#d8b4fe,#f0abfc,#e879f9);background-clip:text;-webkit-text-fill-color:transparent;background-size:200%;animation:shimmer 4s linear infinite}
  .loc-hero-sub{font-size:1.12rem;line-height:1.75;opacity:.92;max-width:680px;margin-bottom:2.2rem;color:rgba(221,214,254,.95);animation:fadeInUp .6s .3s both}
  .loc-hero-btns{display:flex;flex-wrap:wrap;gap:.9rem;animation:fadeInUp .6s .4s both}
  .btn-primary-hero{display:inline-flex;align-items:center;gap:.5rem;background:linear-gradient(135deg,#9333ea,#7c3aed);color:#fff;padding:.95rem 2.2rem;border-radius:12px;font-weight:700;text-decoration:none;transition:transform .2s,box-shadow .2s;box-shadow:0 8px 24px rgba(124,58,237,.45)}
  .btn-primary-hero:hover{transform:translateY(-2px);box-shadow:0 14px 32px rgba(124,58,237,.55)}
  .btn-outline-hero{display:inline-flex;align-items:center;gap:.5rem;border:2px solid rgba(255,255,255,.65);color:#fff;padding:.95rem 2.2rem;border-radius:12px;font-weight:700;text-decoration:none;transition:background .2s,transform .2s;backdrop-filter:blur(4px)}
  .btn-outline-hero:hover{background:rgba(255,255,255,.12);transform:translateY(-2px)}
  /* ---- Main layout ---- */
  .loc-main-section{padding:5rem 1rem;background:#fff}
  .loc-grid{display:grid;gap:3rem;max-width:1200px;margin:0 auto}
  @media(min-width:1024px){.loc-grid{grid-template-columns:1fr 360px}}
  /* ---- Content column ---- */
  .loc-content h2{font-size:2rem;font-weight:800;color:#1e1b4b;margin-bottom:1.25rem;background:linear-gradient(135deg,#1e1b4b,#6d28d9);background-clip:text;-webkit-text-fill-color:transparent}
  .loc-content h3{font-size:1.3rem;font-weight:700;color:#2d1b69;margin:2.25rem 0 .75rem}
  .loc-content p{line-height:1.88;color:#374151;margin-bottom:1.25rem}
  .loc-journey{background:linear-gradient(135deg,#f5f3ff,#ede9fe);border-left:5px solid #7c3aed;border-radius:1rem;padding:1.75rem 2rem;margin:2rem 0;animation:borderPulse 3s ease-in-out infinite}
  .loc-journey h4{font-size:1.1rem;font-weight:700;color:#3b0764;margin-bottom:1rem}
  .loc-journey ul{list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:.9rem}
  .loc-journey li{display:flex;gap:.75rem;color:#3b0764;font-size:.95rem;line-height:1.65}
  .loc-journey li i{flex-shrink:0;margin-top:.15rem;color:#7c3aed}
  .loc-cond-list{list-style:none;padding:0;margin:.75rem 0 0;display:grid;grid-template-columns:1fr 1fr;gap:.65rem}
  .loc-cond-item{display:flex;align-items:center;gap:.6rem;background:#f9fafb;border:1px solid #f3f4f6;border-radius:.75rem;padding:.75rem 1rem;font-size:.9rem;color:#374151;transition:border-color .2s,box-shadow .2s}
  .loc-cond-item:hover{border-color:#c4b5fd;box-shadow:0 2px 8px rgba(124,58,237,.1)}
  .loc-cond-icon{width:1rem;height:1rem;color:#7c3aed;flex-shrink:0}
  /* ---- Sidebar ---- */
  .loc-sidebar{display:flex;flex-direction:column;gap:1.5rem}
  .loc-sidebar-img{border-radius:1.25rem;overflow:hidden;box-shadow:0 12px 36px rgba(0,0,0,.14)}
  .loc-sidebar-img img{width:100%;height:auto;display:block;object-fit:cover;transition:transform .4s ease}
  .loc-sidebar-img:hover img{transform:scale(1.03)}
  .loc-info-card{background:linear-gradient(160deg,#0f172a,#1e1b4b);color:#fff;border-radius:1.25rem;padding:1.75rem;border:1px solid rgba(124,58,237,.2)}
  .loc-info-card h3{font-size:1rem;font-weight:700;margin-bottom:1.25rem;display:flex;align-items:center;gap:.5rem;color:#c4b5fd}
  .loc-info-row{margin-bottom:1.1rem;padding-bottom:.9rem;border-bottom:1px solid rgba(255,255,255,.07)}
  .loc-info-row:last-of-type{border-bottom:none}
  .loc-info-label{font-size:.68rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:#94a3b8;margin-bottom:.25rem}
  .loc-info-value{font-size:.95rem;color:#f1f5f9}
  .loc-info-cta{display:block;text-align:center;background:linear-gradient(135deg,#7c3aed,#9333ea);color:#fff;padding:.9rem;border-radius:.75rem;font-weight:700;text-decoration:none;margin-top:1.25rem;transition:transform .2s,box-shadow .2s;box-shadow:0 4px 14px rgba(124,58,237,.4);animation:pulseGlow 2.5s infinite}
  .loc-info-cta:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(124,58,237,.55)}
  .loc-reasons{background:linear-gradient(135deg,#f8f7ff,#f0effe);border-radius:1.25rem;padding:1.5rem;border:1px solid #ede9fe}
  .loc-reasons h4{font-size:.95rem;font-weight:700;color:#3b0764;margin-bottom:.9rem}
  .loc-reason-item{display:flex;align-items:flex-start;gap:.6rem;margin-bottom:.7rem;font-size:.85rem;color:#374151;line-height:1.5}
  .loc-reason-item i{color:#7c3aed;flex-shrink:0;margin-top:.1rem}
  /* ---- Why Choose ---- */
  .loc-why-section{padding:5rem 1rem;background:linear-gradient(180deg,#f8f7ff 0%,#fff 100%)}
  .loc-why-inner{max-width:1100px;margin:0 auto}
  .loc-section-heading{text-align:center;margin-bottom:3rem}
  .loc-section-heading h2{font-size:2rem;font-weight:800;color:#1e1b4b;margin-bottom:.65rem}
  .loc-section-heading p{color:#6b7280;max-width:620px;margin:0 auto;font-size:1rem}
  .loc-why-grid{display:grid;gap:1.5rem}
  @media(min-width:768px){.loc-why-grid{grid-template-columns:repeat(3,1fr)}}
  .loc-why-card{background:#fff;border-radius:1.25rem;padding:2.25rem 2rem;box-shadow:0 4px 20px rgba(0,0,0,.06);border-top:4px solid #7c3aed;transition:transform .25s,box-shadow .25s}
  .loc-why-card:hover{transform:translateY(-6px);box-shadow:0 16px 40px rgba(124,58,237,.14)}
  .loc-why-icon-wrap{width:3.25rem;height:3.25rem;background:linear-gradient(135deg,#ede9fe,#ddd6fe);border-radius:.875rem;display:flex;align-items:center;justify-content:center;margin-bottom:1.1rem;transition:transform .25s}
  .loc-why-card:hover .loc-why-icon-wrap{transform:scale(1.1)}
  .loc-why-icon{width:1.5rem;height:1.5rem;color:#7c3aed}
  .loc-why-title{font-size:1.1rem;font-weight:700;color:#1e1b4b;margin-bottom:.55rem}
  .loc-why-body{font-size:.9rem;color:#4b5563;line-height:1.7}
  /* ---- Services ---- */
  .loc-services-section{padding:5rem 1rem;background:#fff}
  .loc-services-grid{display:grid;gap:1.5rem;max-width:1100px;margin:0 auto}
  @media(min-width:768px){.loc-services-grid{grid-template-columns:repeat(3,1fr)}}
  .loc-service-card{background:#f9fafb;border-radius:1.25rem;padding:2.25rem 2rem;border-bottom:4px solid #4f46e5;transition:transform .25s,box-shadow .25s;position:relative;overflow:hidden}
  .loc-service-card::before{content:"";position:absolute;inset:0;background:linear-gradient(135deg,transparent 60%,rgba(79,70,229,.04));pointer-events:none}
  .loc-service-card:hover{transform:translateY(-5px);box-shadow:0 12px 32px rgba(79,70,229,.12)}
  .loc-svc-icon-wrap{width:3.25rem;height:3.25rem;background:linear-gradient(135deg,#e0e7ff,#c7d2fe);border-radius:.875rem;display:flex;align-items:center;justify-content:center;margin-bottom:1.1rem;transition:transform .25s}
  .loc-service-card:hover .loc-svc-icon-wrap{transform:scale(1.1)}
  .loc-svc-icon{width:1.5rem;height:1.5rem;color:#4f46e5}
  .loc-service-card h3{font-size:1.1rem;font-weight:700;color:#1e1b4b;margin-bottom:.65rem}
  .loc-service-card p{font-size:.9rem;color:#4b5563;line-height:1.7}
  /* ---- Timeline ---- */
  .loc-timeline-section{padding:5rem 1rem;background:linear-gradient(180deg,#f8f7ff,#fff)}
  .loc-timeline-grid{display:grid;gap:1.5rem;max-width:1100px;margin:0 auto}
  @media(min-width:640px){.loc-timeline-grid{grid-template-columns:repeat(2,1fr)}}
  @media(min-width:1024px){.loc-timeline-grid{grid-template-columns:repeat(4,1fr)}}
  .loc-step{background:#fff;border-radius:1.25rem;padding:1.75rem;position:relative;box-shadow:0 4px 16px rgba(0,0,0,.06);border:1px solid #f3f0ff;transition:transform .25s,box-shadow .25s;opacity:0;transform:translateY(28px);transition:opacity .7s cubic-bezier(.16,1,.3,1),transform .7s cubic-bezier(.16,1,.3,1),box-shadow .25s}
  .loc-step.in-view{opacity:1;transform:translateY(0)}
  .loc-step:hover{transform:translateY(-4px);box-shadow:0 12px 30px rgba(124,58,237,.12)}
  .loc-step-num{width:2.75rem;height:2.75rem;background:linear-gradient(135deg,#7c3aed,#9333ea);color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:1rem;margin-bottom:1rem;box-shadow:0 4px 12px rgba(124,58,237,.35)}
  .loc-step h3{font-size:1rem;font-weight:700;color:#1e1b4b;margin-bottom:.45rem}
  .loc-step p{font-size:.85rem;color:#6b7280;line-height:1.65}
  /* ---- FAQ ---- */
  .loc-faq-section{padding:5rem 1rem;background:#fff}
  .loc-faq-inner{max-width:780px;margin:0 auto}
  .faq-item{border:1px solid #e5e7eb;border-radius:.875rem;margin-bottom:.75rem;overflow:hidden;cursor:pointer;transition:box-shadow .25s,border-color .25s}
  .faq-item:hover{box-shadow:0 4px 14px rgba(0,0,0,.07)}
  .faq-header{display:flex;justify-content:space-between;align-items:center;padding:1.15rem 1.35rem;gap:1rem}
  .faq-question{font-weight:700;color:#1f2937;font-size:.95rem;line-height:1.55}
  .faq-chevron{width:1.1rem;height:1.1rem;color:#7c3aed;flex-shrink:0;transition:transform .3s cubic-bezier(.34,1.56,.64,1)}
  .faq-content{max-height:0;overflow:hidden;transition:max-height .35s ease;padding:0 1.35rem}
  .faq-content p{padding:.75rem 0 1.35rem;color:#4b5563;line-height:1.8;font-size:.95rem;margin:0}
  .faq-item.open .faq-content{max-height:500px}
  .faq-item.open .faq-chevron{transform:rotate(180deg)}
  .faq-item.open{box-shadow:0 6px 20px rgba(124,58,237,.1);border-color:#c4b5fd;background:linear-gradient(135deg,#faf9ff,#fff)}
  /* ---- Stats bar ---- */
  .loc-stats-bar{background:linear-gradient(135deg,#2d1b69,#3b0764);padding:3rem 1rem}
  .loc-stats-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem 2rem;max-width:900px;margin:0 auto;text-align:center}
  @media(min-width:640px){.loc-stats-grid{grid-template-columns:repeat(4,1fr)}}
  .loc-stat-num{font-size:2.2rem;font-weight:800;color:#f0abfc;display:block;line-height:1}
  .loc-stat-label{font-size:.8rem;color:#c4b5fd;margin-top:.35rem;font-weight:600}
  /* ---- CTA ---- */
  .loc-cta-section{padding:5.5rem 1rem;background:linear-gradient(135deg,#1e1b4b 0%,#2d1b69 50%,#3b0764 100%);position:relative;overflow:hidden}
  .loc-cta-section::before{content:"";position:absolute;width:500px;height:500px;background:rgba(167,139,250,.08);border-radius:50%;top:-150px;right:-150px;filter:blur(80px);pointer-events:none}
  .loc-cta-inner{max-width:700px;margin:0 auto;text-align:center;color:#fff;position:relative;z-index:1}
  .loc-cta-inner h2{font-size:clamp(1.75rem,4vw,2.75rem);font-weight:800;margin-bottom:1rem}
  .loc-cta-inner h2 span{background:linear-gradient(90deg,#d8b4fe,#f0abfc);background-clip:text;-webkit-text-fill-color:transparent}
  .loc-cta-inner p{color:rgba(216,180,254,.9);font-size:1.05rem;line-height:1.75;margin-bottom:2.2rem}
  .loc-cta-btns{display:flex;flex-wrap:wrap;gap:1rem;justify-content:center}
  .btn-cta-main{display:inline-flex;align-items:center;gap:.5rem;background:linear-gradient(135deg,#7c3aed,#9333ea);color:#fff;padding:.95rem 2.2rem;border-radius:.875rem;font-weight:700;text-decoration:none;transition:transform .2s,box-shadow .2s;font-size:1rem;box-shadow:0 6px 20px rgba(124,58,237,.4)}
  .btn-cta-main:hover{transform:translateY(-2px);box-shadow:0 12px 30px rgba(124,58,237,.55)}
  .btn-cta-phone{display:flex;align-items:center;gap:.5rem;color:#e9d5ff;font-weight:700;font-size:1.1rem;text-decoration:none;transition:color .2s,transform .2s}
  .btn-cta-phone:hover{color:#fff;transform:translateY(-2px)}
 </style>
</head>
<body class="bg-white">
<?php include \'includes/header.php\'; ?>

<!-- Breadcrumb -->
<nav class="loc-breadcrumb" aria-label="Breadcrumb">
 <div class="container mx-auto px-4">
  <a href="index.php">Home</a>
  <span class="bc-sep">›</span>
  <a href="areas-we-serve.php">Areas We Serve</a>
  <span class="bc-sep">›</span>
  <span class="bc-cur">TMS Therapy in '.$name.'</span>
 </div>
</nav>

<!-- Hero -->
<section class="loc-hero">
 <div class="loc-hero-bg" style="background-image:url(\''.htmlspecialchars($hero_img).'\');"></div>
 <div class="loc-orb loc-orb-1"></div>
 <div class="loc-orb loc-orb-2"></div>
 <div class="container mx-auto loc-hero-inner">
  <span class="loc-badge"><i data-lucide="map-pin" style="width:12px;height:12px"></i>Serving '.$name.', '.$county.'</span>
  <h1>TMS Therapy Near <span class="grad">'.$name.'</span>, CA</h1>
  <p class="loc-hero-sub">'.$name.' is '.htmlspecialchars($hero_desc).'. Karma TMS brings FDA-approved, non-pharmaceutical psychiatric care to your community—no referral required.</p>
  <div class="loc-hero-btns">
   <a href="contact-us.php" class="btn-primary-hero"><i data-lucide="calendar-check" style="width:16px;height:16px"></i>Schedule Free Assessment</a>
   <a href="tms-quiz.php" class="btn-outline-hero"><i data-lucide="clipboard-list" style="width:16px;height:16px"></i>Am I a Candidate?</a>
  </div>
 </div>
</section>

<!-- Trust Bar -->
<div class="loc-trust-bar">
 <div class="container mx-auto px-4">
  <div class="loc-trust-grid">
   <div class="loc-trust-item d1"><i data-lucide="check-circle"></i>FDA-Approved Since 2008</div>
   <div class="loc-trust-item d2"><i data-lucide="trending-up"></i>80%+ Patient Success Rate</div>
   <div class="loc-trust-item d3"><i data-lucide="shield-check"></i>All Major Insurance Accepted</div>
   <div class="loc-trust-item d4"><i data-lucide="award"></i>Board-Certified Psychiatrists</div>
   <div class="loc-trust-item" style="animation-delay:.38s"><i data-lucide="map-pin"></i>'.$dist.' Miles from '.$name.'</div>
  </div>
 </div>
</div>

<!-- Stats Bar -->
<div class="loc-stats-bar">
 <div class="loc-stats-grid">
  <div class="reveal d1"><span class="loc-stat-num" data-target="80">0</span><span>%</span><div class="loc-stat-label">Patient Success Rate</div></div>
  <div class="reveal d2"><span class="loc-stat-num" data-target="2008">1990</span><div class="loc-stat-label">FDA Approved Year</div></div>
  <div class="reveal d3"><span class="loc-stat-num" data-target="36">0</span><span>+</span><div class="loc-stat-label">Sessions per Course</div></div>
  <div class="reveal d4"><span class="loc-stat-num" data-target="3">0</span><div class="loc-stat-label">Southern CA Locations</div></div>
 </div>
</div>

<!-- Main Content + Sidebar -->
<section class="loc-main-section">
 <div class="loc-grid container mx-auto">

  <!-- LEFT: Content -->
  <div class="loc-content reveal-left">
   <h2>TMS Therapy for '.$name.' Residents</h2>
   <p>'.$intro.'</p>

   <h3>When Antidepressants Aren\'t Enough</h3>
   <p>For many '.$name.' residents, conventional antidepressants provide only partial relief—or come with side effects that make them difficult to tolerate. Transcranial Magnetic Stimulation (TMS) addresses this gap by working directly at the neurological level, stimulating the specific brain circuits involved in mood regulation using precisely calibrated magnetic pulses. The result: meaningful, lasting improvement in depression and anxiety without the systemic side effects of pharmaceutical treatment.</p>

   <div class="loc-journey">
    <h4>Your Treatment Journey from '.$name.'</h4>
    <ul>
     <li><i data-lucide="clipboard-check"></i><div><strong>Step 1 — Free Consultation:</strong> Our intake team verifies your insurance and schedules an in-depth evaluation with a board-certified psychiatrist to assess clinical suitability for TMS.</div></li>
     <li><i data-lucide="cpu"></i><div><strong>Step 2 — Brain Mapping (qEEG):</strong> Advanced quantitative EEG technology maps your brain\'s individual activity patterns, allowing our psychiatrists to personalize the stimulation frequency and exact target location for your treatment.</div></li>
     <li><i data-lucide="zap"></i><div><strong>Step 3 — TMS Treatment Course:</strong> Typically 20–36 sessions over four to six weeks, each lasting 20–40 minutes. Sessions are easily scheduled around your commute from '.$name.' to our '.$hub.' hub.</div></li>
     <li><i data-lucide="heart-pulse"></i><div><strong>Step 4 — Ongoing Support:</strong> Our psychiatrists monitor your progress throughout treatment and coordinate with your existing care team to ensure the best possible long-term outcome.</div></li>
    </ul>
   </div>

   <h3>Conditions We Treat for '.$name.' Patients</h3>
   <p>Our board-certified psychiatrists treat a broad range of mental health conditions. Residents from '.$name.' most commonly seek treatment for:</p>
   <ul class="loc-cond-list">'.$cond_html.'</ul>

   <h3>Insurance &amp; Accessibility for '.$name.' Residents</h3>
   <p>Navigating insurance for psychiatric care can feel overwhelming. Karma TMS handles the entire pre-authorization and billing process on your behalf. We accept Medicare, Tricare, Medi-Cal, and virtually all major commercial plans. Our dedicated intake specialists will verify your specific '.$county.' benefits before your first appointment—at no cost to you—so there are no financial surprises when treatment begins.</p>

   <p>For self-pay patients, we offer a transparent financial consultation and payment options to make treatment accessible regardless of insurance status. Our clinical team in '.$hub.' is committed to ensuring that the distance from '.$name.' is never a barrier to world-class psychiatric care.</p>
  </div>

  <!-- RIGHT: Sidebar -->
  <aside class="loc-sidebar reveal">
   <div class="sticky top-24">
    <div class="loc-sidebar-img">
     <img src="'.htmlspecialchars($sidebar_img).'" alt="TMS Therapy Services near '.$name.', '.$county.'" loading="lazy">
    </div>

    <div class="loc-info-card">
     <h3><i data-lucide="map-pin"></i>Quick Access Info</h3>
     <div class="loc-info-row"><div class="loc-info-label">Nearest Karma TMS Hub</div><div class="loc-info-value">'.$hub.'</div></div>
     <div class="loc-info-row"><div class="loc-info-label">Estimated Distance</div><div class="loc-info-value">~'.$dist.' miles from '.$name.'</div></div>
     <div class="loc-info-row"><div class="loc-info-label">Session Duration</div><div class="loc-info-value">20–40 minutes per session</div></div>
     <div class="loc-info-row"><div class="loc-info-label">Hours</div><div class="loc-info-value">Mon–Fri: 8 AM – 6 PM</div></div>
     <a href="contact-us.php" class="loc-info-cta">Verify My Insurance — Free</a>
    </div>

    <div class="loc-reasons">
     <h4>Why '.$name.' Patients Choose Karma TMS</h4>
     <div class="loc-reason-item"><i data-lucide="check"></i><span>No referral required — walk in with your history</span></div>
     <div class="loc-reason-item"><i data-lucide="check"></i><span>Full insurance verification at no cost to you</span></div>
     <div class="loc-reason-item"><i data-lucide="check"></i><span>Zero downtime — drive yourself to every session</span></div>
     <div class="loc-reason-item"><i data-lucide="check"></i><span>No systemic medication side effects</span></div>
     <div class="loc-reason-item"><i data-lucide="check"></i><span>Board-certified psychiatrists, not technicians</span></div>
    </div>
   </div>
  </aside>

 </div>
</section>

<!-- Why Choose Karma TMS -->
<section class="loc-why-section">
 <div class="loc-why-inner">
  <div class="loc-section-heading">
   <h2>Why '.$name.' Patients Choose the '.$hub.' Hub</h2>
   <p>Three reasons the '.$region.' trusts Karma TMS for advanced psychiatric care.</p>
  </div>
  <div class="loc-why-grid">'.$why_html_final.'</div>
 </div>
</section>

<!-- Treatment Modalities -->
<section class="loc-services-section">
 <div class="container mx-auto px-4">
  <div class="loc-section-heading">
   <h2>Our Core Treatment Modalities</h2>
   <p>Serving '.$name.' and the '.$region.' with integrated, personalized psychiatric solutions.</p>
  </div>
  <div class="loc-services-grid">
   <div class="loc-service-card reveal d1">
    <div class="loc-svc-icon-wrap"><i data-lucide="zap" class="loc-svc-icon"></i></div>
    <h3>Standard TMS</h3>
    <p>FDA-cleared since 2008 for Major Depressive Disorder. Precisely targeted magnetic pulses stimulate underactive prefrontal cortex circuits, restoring normal mood regulation without systemic medications or downtime.</p>
   </div>
   <div class="loc-service-card reveal d2">
    <div class="loc-svc-icon-wrap"><i data-lucide="brain" class="loc-svc-icon"></i></div>
    <h3>PrTMS<sup>®</sup></h3>
    <p>Personalized Repetitive TMS uses a patented qEEG-guided algorithm to calibrate the exact pulse frequency and stimulation location to your brain\'s unique activity profile—delivering individualized treatment that standard TMS alone cannot match.</p>
   </div>
   <div class="loc-service-card reveal d3">
    <div class="loc-svc-icon-wrap"><i data-lucide="pill" class="loc-svc-icon"></i></div>
    <h3>Medication Management</h3>
    <p>Expert psychiatric oversight to evaluate, adjust, and optimize your current pharmaceutical regimen alongside TMS treatment. Many patients achieve better outcomes through thoughtful medication coordination than with either approach alone.</p>
   </div>
  </div>
 </div>
</section>

<!-- What to Expect Timeline -->
<section class="loc-timeline-section">
 <div class="container mx-auto px-4">
  <div class="loc-section-heading">
   <h2>What to Expect as a '.$name.' Patient</h2>
   <p>Clear steps from first contact to lasting recovery.</p>
  </div>
  <div class="loc-timeline-grid">
   <div class="loc-step"><div class="loc-step-num">1</div><h3>Free Consultation</h3><p>Contact us online or by phone. Our intake team verifies insurance, gathers your history, and connects you with a psychiatrist—typically within one to two weeks.</p></div>
   <div class="loc-step"><div class="loc-step-num">2</div><h3>Psychiatric Evaluation</h3><p>A board-certified psychiatrist conducts a comprehensive evaluation and designs a personalized treatment plan, including the choice between Standard TMS and PrTMS®.</p></div>
   <div class="loc-step"><div class="loc-step-num">3</div><h3>TMS Treatment Course</h3><p>20–36 outpatient sessions over four to six weeks. Each is 20–40 minutes. You drive yourself, experience no sedation, and return to work the same day.</p></div>
   <div class="loc-step"><div class="loc-step-num">4</div><h3>Ongoing Monitoring</h3><p>Our psychiatrists track your progress throughout and after the course, coordinating with your existing care providers to sustain long-term gains.</p></div>
  </div>
 </div>
</section>

<!-- FAQ Section -->
<section class="loc-faq-section" itemscope itemtype="https://schema.org/FAQPage">
 <div class="loc-faq-inner">
  <div class="loc-section-heading">
   <h2>Common Questions from '.$name.' Patients</h2>
   <p>Everything you need to know before starting TMS therapy from '.$name.'.</p>
  </div>
  '.$faq_html.'
 </div>
</section>

<!-- Final CTA -->
<section class="loc-cta-section">
 <div class="loc-cta-inner reveal">
  <h2>Start Your Recovery from <span>'.$name.'</span></h2>
  <p>Whether you\'re in '.$name.' or anywhere across '.$county.', Karma TMS is your partner in lasting mental health recovery. The '.$hub.' hub is '.$dist.' miles away and accepting new patients now.</p>
  <div class="loc-cta-btns">
   <a href="contact-us.php" class="btn-cta-main"><i data-lucide="calendar-check" style="width:16px;height:16px"></i>Schedule Free Assessment</a>
   <a href="'.PHONE_HREF.'" class="btn-cta-phone"><i data-lucide="phone"></i>'.PHONE_DISPLAY.'</a>
  </div>
 </div>
</section>

<?php include \'includes/footer.php\'; ?>
<script>
(function(){
 // Lucide icons
 document.addEventListener("DOMContentLoaded",function(){
  if(typeof lucide!=="undefined") lucide.createIcons();
 });

 // Scroll reveal via IntersectionObserver
 var io = new IntersectionObserver(function(entries){
  entries.forEach(function(e){
   if(e.isIntersecting){
    e.target.classList.add("in-view");
    io.unobserve(e.target);
   }
  });
 },{threshold:0.1,rootMargin:"0px 0px -36px 0px"});
 document.querySelectorAll(".reveal,.reveal-left,.loc-step").forEach(function(el){io.observe(el);});

 // Counter animation for stats bar
 var counterDone = false;
 var statsIO = new IntersectionObserver(function(entries){
  if(counterDone||!entries[0].isIntersecting) return;
  counterDone = true;
  document.querySelectorAll("[data-target]").forEach(function(el){
   var target = +el.getAttribute("data-target");
   var start  = +el.textContent || 0;
   var dur    = 1400;
   var t0     = null;
   function step(ts){
    if(!t0) t0=ts;
    var p = Math.min((ts-t0)/dur,1);
    var ease = 1-Math.pow(1-p,3);
    el.textContent = Math.round(start+(target-start)*ease);
    if(p<1) requestAnimationFrame(step);
   }
   requestAnimationFrame(step);
  });
 },{threshold:0.3});
 var statsBar = document.querySelector(".loc-stats-bar");
 if(statsBar) statsIO.observe(statsBar);

 // FAQ accordion
 function toggleFAQ(el){el.classList.toggle("open");}
 window.toggleFAQ = toggleFAQ;
})();
</script>
</body>
</html>';

 return $html;
}

// ============================================================
// MAIN: Generate all pages
// ============================================================
$generated = 0;
$skipped   = 0;
$city_index= 0;

foreach($cities as $slug => $data){
 $filename = __DIR__ . "/tms-therapy-$slug.php";
 $content  = generatePage($slug,$data,$hub_data,$conditions_map,$faq_pools,$sidebar_images,$hero_images,$city_index);

 if(file_put_contents($filename,$content)!==false){
  echo "✓  tms-therapy-$slug.php\n";
  $generated++;
 } else {
  echo "✗  FAILED: tms-therapy-$slug.php\n";
  $skipped++;
 }
 $city_index++;
}

echo "\n=============================================\n";
echo "Generated: $generated  |  Failed: $skipped\n";
echo "=============================================\n";
