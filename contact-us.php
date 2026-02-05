<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact KarmaTMS | TMS Therapy in Palm Springs | 760-760-5675</title>
    <meta name="description"
        content="Contact KarmaTMS for depression treatment & mental health services in Palm Springs. Call 760-760-5675. Multiple locations serving Southern California.">
    <meta name="keywords"
        content="contact KarmaTMS, TMS therapy Palm Springs, mental health consultation, KarmaTMS locations, depression treatment contact">

    <?php include 'includes/header-links.php'; ?>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 text-white"
        style="background: linear-gradient(to bottom right, #572670, rgba(87, 38, 112, 0.8));">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
                Contact KarmaTMS Mental Health Center
            </h1>
            <p class="text-xl max-w-3xl mx-auto mb-6" style="color: rgba(255, 255, 255, 0.9);">
                Get in touch with our team of mental health professionals
            </p>
            <div class="flex items-center justify-center gap-4" style="color: rgba(255, 255, 255, 0.8);">
                <i data-lucide="phone" class="w-5 h-5"></i>
                <span>Ready to Help You Today</span>
            </div>
        </div>
    </section>

    <!-- Quick Contact Actions -->
    <section class="bg-gray-50 border-b" style="padding: 30px 0px">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Call Now -->
                <a href="tel:760-760-5675"
                    class="p-6 rounded-lg text-white text-center transition-transform hover:scale-105 flex flex-col items-center gap-3"
                    style="background-color: #572670; text-decoration: none;">
                    <i data-lucide="phone" class="w-8 h-8"></i>
                    <div>
                        <div class="font-bold text-sm">Call Now</div>
                        <div class="text-xs opacity-90">760-760-5675</div>
                    </div>
                </a>

                <!-- Text Us -->
                <a href="sms:760-760-5675"
                    class="p-6 rounded-lg text-white text-center transition-transform hover:scale-105 flex flex-col items-center gap-3"
                    style="background-color: #572670; text-decoration: none;">
                    <i data-lucide="message-square" class="w-8 h-8"></i>
                    <div>
                        <div class="font-bold text-sm">Text Us</div>
                        <div class="text-xs opacity-90">Quick Response</div>
                    </div>
                </a>

                <!-- Email Us -->
                <a href="mailto:info@karmatms.com"
                    class="p-6 rounded-lg text-white text-center transition-transform hover:scale-105 flex flex-col items-center gap-3 col-span-2 md:col-span-1"
                    style="background-color: #572670; text-decoration: none;">
                    <i data-lucide="mail" class="w-8 h-8"></i>
                    <div>
                        <div class="font-bold text-sm">Email Us</div>
                        <div class="text-xs opacity-90">info@karmatms.com</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12">

                <!-- Contact Form -->
                <div>
                    <div class="bm-benefit-card shadow-lg overflow-hidden">
                        <div class="p-6 text-white" style="background-color: #572670;">
                            <h2 class="text-2xl font-bold flex items-center gap-2">
                                <i data-lucide="send" class="w-5 h-5"></i>
                                Send us a Message
                            </h2>
                        </div>
                        <div class="p-6">
                            <form action="https://app.formester.com/forms/3KjFtZ7yT/submissions" method="POST"
                                acceptCharset="UTF-8" autocomplete="on" class="space-y-6">

                                <!-- Name and Email -->
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name
                                            *</label>
                                        <input type="text" id="name" name="name" required placeholder="Your full name"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600">
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                            Address *</label>
                                        <input type="email" id="email" name="email" required
                                            placeholder="your@email.com"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600">
                                    </div>
                                </div>

                                <!-- Phone and Subject -->
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone
                                            Number</label>
                                        <input type="tel" id="phone" name="phone" required placeholder="760-760-5675"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600">
                                    </div>
                                    <div>
                                        <label for="subject"
                                            class="block text-sm font-medium text-gray-700 mb-1">Subject *</label>
                                        <select id="subject" name="subject" required
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600">
                                            <option value="">Select a subject</option>
                                            <option value="consultation">Free Consultation</option>
                                            <option value="appointment">Schedule Appointment</option>
                                            <option value="insurance">Insurance Questions</option>
                                            <option value="treatment">Treatment Information</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message
                                        *</label>
                                    <textarea id="message" name="message" required rows="5"
                                        placeholder="Please tell us how we can help you..."
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                                </div>

                                <!-- Preferred Contact and Urgency -->
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="preferredContact"
                                            class="block text-sm font-medium text-gray-700 mb-1">Preferred Contact
                                            Method</label>
                                        <select id="preferredContact" name="preferredContact"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600">
                                            <option value="phone">Phone Call</option>
                                            <option value="email">Email</option>
                                            <option value="text">Text Message</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="urgency"
                                            class="block text-sm font-medium text-gray-700 mb-1">Urgency Level</label>
                                        <select id="urgency" name="urgency"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600">
                                            <option value="normal">Normal</option>
                                            <option value="urgent">Urgent</option>
                                            <option value="emergency">Emergency</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="bm-hero-btn w-full flex items-center justify-center gap-2"
                                    style="background-color: #572670;">
                                    Send Message
                                    <i data-lucide="send" class="w-4 h-4"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">

                    <!-- Our Locations Card -->
                    <div id="locations" class="bm-benefit-card shadow-lg overflow-hidden">
                        <div class="p-6 text-white" style="background-color: #572670;">
                            <h2 class="text-2xl font-bold flex items-center gap-2">
                                <i data-lucide="map-pin" class="w-5 h-5"></i>
                                Our Locations
                            </h2>
                        </div>
                        <div class="p-6 space-y-6">

                            <!-- Palm Springs Office -->
                            <div class="pb-4 border-b">
                                <h3 class="font-bold text-base mb-2" style="color: #572670;">
                                    Palm Springs Office
                                </h3>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    560 S. Paseo Dorotea, Suite 4-B<br>
                                    Palm Springs, CA 92264
                                </p>
                                <a href="https://share.google/5d1EU2i2b6WbjZLQc" target="_blank"
                                    rel="noopener noreferrer"
                                    class="bm-outline-btn w-full mt-3 flex items-center justify-center gap-2">
                                    Get Directions
                                    <i data-lucide="chevron-right" class="w-3 h-3"></i>
                                </a>
                            </div>

                            <!-- Rancho Mirage Office -->
                            <div class="pb-4 border-b">
                                <h3 class="font-bold text-base mb-2" style="color: #572670;">
                                    Rancho Mirage Office
                                </h3>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    35400 Bob Hope Dr. Suite 206<br>
                                    Rancho Mirage, CA 92270
                                </p>
                                <a href="https://maps.app.goo.gl/6wyxkwnGZ5g2ua1a7" target="_blank"
                                    rel="noopener noreferrer"
                                    class="bm-outline-btn w-full mt-3 flex items-center justify-center gap-2">
                                    Get Directions
                                    <i data-lucide="chevron-right" class="w-3 h-3"></i>
                                </a>
                            </div>

                            <!-- Twentynine Palms Office -->
                            <div class="pb-4 border-b">
                                <h3 class="font-bold text-base mb-2" style="color: #572670;">
                                    Twentynine Palms Office
                                </h3>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    72724 29 Palms Hwy. Suite 107<br>
                                    Twentynine Palms, CA 92277
                                </p>
                                <a href="https://share.google/e8yhlNFFaLaN8z1d1" target="_blank"
                                    rel="noopener noreferrer"
                                    class="bm-outline-btn w-full mt-3 flex items-center justify-center gap-2">
                                    Get Directions
                                    <i data-lucide="chevron-right" class="w-3 h-3"></i>
                                </a>
                            </div>

                            <!-- Business Hours -->
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                                    <i data-lucide="clock" class="w-4 h-4"></i>
                                    Business Hours (All Locations)
                                </h4>
                                <div class="space-y-2">
                                    <div class="flex justify-between items-center py-1">
                                        <span class="text-gray-700 text-sm">Monday - Friday</span>
                                        <span class="font-medium text-sm" style="color: #572670;">9:00 A.M - 5:00
                                            P.M</span>
                                    </div>
                                    <div class="flex justify-between items-center py-1">
                                        <span class="text-gray-700 text-sm">Saturday - Sunday</span>
                                        <span class="font-medium text-sm" style="color: #572670;">Closed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8">
                Learn More About KarmaTMS
            </h2>
            <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">

                <!-- Link 1: Depression Treatment -->
                <a href="depression.php"
                    class="p-6 bg-gray-50 rounded-lg text-center hover:shadow-lg transition-shadow"
                    style="text-decoration: none;">
                    <h3 class="font-bold text-lg mb-2" style="color: #572670;">
                        Depression Treatment
                    </h3>
                    <p class="text-sm text-gray-600">
                        Learn about our TMS therapy for depression
                    </p>
                </a>

                <!-- Link 2: All Locations -->
                <a href="#" class="p-6 bg-gray-50 rounded-lg text-center hover:shadow-lg transition-shadow"
                    style="text-decoration: none;">
                    <h3 class="font-bold text-lg mb-2" style="color: #572670;">
                        All Locations
                    </h3>
                    <p class="text-sm text-gray-600">
                        Find the KarmaTMS center nearest you
                    </p>
                </a>

                <!-- Link 3: TMS Assessment -->
                <a href="tms-quiz.php" class="p-6 bg-gray-50 rounded-lg text-center hover:shadow-lg transition-shadow"
                    style="text-decoration: none;">
                    <h3 class="font-bold text-lg mb-2" style="color: #572670;">
                        TMS Assessment
                    </h3>
                    <p class="text-sm text-gray-600">
                        See if TMS therapy is right for you
                    </p>
                </a>

            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-gray-50" style="display:none">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 font-display">
                    Visit Our Mental Health Facilities<br>in Palm Springs
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                    Our mental health facilities in Palm Springs are conveniently located serving patients throughout
                    the Coachella Valley and surrounding areas, with experienced mental health counselors in Palm
                    Springs, CA ready to help with mental health.
                </p>
            </div>

            <div class="max-w-[1240px] mx-auto bg-white rounded-3xl overflow-hidden shadow-xl p-8 md:p-12 mb-20">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20">
                    <!-- Left Column: Contact Details -->
                    <div class="flex flex-col justify-center space-y-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">
                            Contact Our Mental Health Counselors in Palm Springs, CA
                        </h3>

                        <!-- Palm Springs -->
                        <div class="flex gap-4">
                            <div class="mt-1 flex-shrink-0">
                                <div
                                    class="w-10 h-10 rounded-full bg-[#f3e8ff] flex items-center justify-center text-[#572670]">
                                    <i data-lucide="map-pin" class="w-5 h-5"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Palm Springs</h4>
                                <p class="text-gray-600">560 S. Paseo Dorotea Suite 4-B</p>
                                <p class="text-gray-600">Palm Springs, CA 92264</p>
                            </div>
                        </div>

                        <!-- Rancho Mirage -->
                        <div class="flex gap-4">
                            <div class="mt-1 flex-shrink-0">
                                <div
                                    class="w-10 h-10 rounded-full bg-[#f3e8ff] flex items-center justify-center text-[#572670]">
                                    <i data-lucide="map-pin" class="w-5 h-5"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Rancho Mirage</h4>
                                <p class="text-gray-600">35400 Bob Hope Dr. Suite 206</p>
                                <p class="text-gray-600">Rancho Mirage, CA 92270</p>
                            </div>
                        </div>

                        <!-- Twentynine Palms -->
                        <div class="flex gap-4">
                            <div class="mt-1 flex-shrink-0">
                                <div
                                    class="w-10 h-10 rounded-full bg-[#f3e8ff] flex items-center justify-center text-[#572670]">
                                    <i data-lucide="map-pin" class="w-5 h-5"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Twentynine Palms</h4>
                                <p class="text-gray-600">72724 29 Palms Hwy. Suite 107</p>
                                <p class="text-gray-600">Twentynine Palms, CA 92277</p>
                            </div>
                        </div>

                        <hr class="border-gray-100 my-4">

                        <!-- Phone -->
                        <div class="flex gap-4">
                            <div class="mt-1 flex-shrink-0">
                                <div
                                    class="w-10 h-10 rounded-full bg-[#f3e8ff] flex items-center justify-center text-[#572670]">
                                    <i data-lucide="phone" class="w-5 h-5"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Phone</h4>
                                <a href="tel:7607605675"
                                    class="text-gray-600 hover:text-[#572670] transition-colors">760-760-5675</a>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="flex gap-4">
                            <div class="mt-1 flex-shrink-0">
                                <div
                                    class="w-10 h-10 rounded-full bg-[#f3e8ff] flex items-center justify-center text-[#572670]">
                                    <i data-lucide="clock" class="w-5 h-5"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Hours</h4>
                                <p class="text-gray-600">Monday - Friday: 8:00 AM - 6:00 PM</p>
                                <p class="text-gray-600">Saturday - Sunday: Closed</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex gap-4">
                            <div class="mt-1 flex-shrink-0">
                                <div
                                    class="w-10 h-10 rounded-full bg-[#f3e8ff] flex items-center justify-center text-[#572670]">
                                    <i data-lucide="mail" class="w-5 h-5"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Email</h4>
                                <a href="mailto:contact@karmatms.com"
                                    class="text-gray-600 hover:text-[#572670] transition-colors">contact@karmatms.com</a>
                            </div>
                        </div>

                        <div class="pt-4">
                            <a href="tel:7607605675" class="btn btn-primary inline-flex items-center gap-2">
                                <i data-lucide="phone" class="w-4 h-4"></i> Call Now
                            </a>
                        </div>
                    </div>

                    <!-- Right Column: Stacked Maps -->
                    <div class="flex flex-col gap-4 h-full justify-center">
                        <!-- Map 1: Palm Springs - Converted to iframe for mockup, ideally use Google Maps Embed API with correct location -->
                        <div class="rounded-xl overflow-hidden shadow-md h-[200px] w-full relative group">
                            <iframe
                                class="w-full h-full border-0 grayscale-[20%] group-hover:grayscale-0 transition-all duration-300"
                                loading="lazy" allowfullscreen
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.9537482845625!2d-116.54716!3d33.81835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80db1b0000000001%3A0x0!2s560%20S%20Paseo%20Dorotea%20Suite%204B!5e0!3m2!1sen!2sus!4v1600000000000!5m2!1sen!2sus"></iframe>
                        </div>

                        <!-- Map 2: Rancho Mirage -->
                        <div class="rounded-xl overflow-hidden shadow-md h-[200px] w-full relative group">
                            <iframe
                                class="w-full h-full border-0 grayscale-[20%] group-hover:grayscale-0 transition-all duration-300"
                                loading="lazy" allowfullscreen
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3322.0!2d-116.416!3d33.78!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s35400%20Bob%20Hope%20Dr%20STE%20206!5e0!3m2!1sen!2sus!4v1600000000000!5m2!1sen!2sus"></iframe>
                        </div>

                        <!-- Map 3: Twentynine Palms -->
                        <div class="rounded-xl overflow-hidden shadow-md h-[200px] w-full relative group">
                            <iframe
                                class="w-full h-full border-0 grayscale-[20%] group-hover:grayscale-0 transition-all duration-300"
                                loading="lazy" allowfullscreen
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3315.0!2d-116.05!3d34.13!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s72724%2029%20Palms%20Hwy%20%23107!5e0!3m2!1sen!2sus!4v1600000000000!5m2!1sen!2sus"></iframe>
                        </div>
                    </div>
                </div>
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

