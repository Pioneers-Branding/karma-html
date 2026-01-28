<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions | KarmaTMS FAQ</title>
    <meta name="description"
        content="Get answers to common questions about TMS therapy, treatment process, insurance coverage, and eligibility. Expert answers from KarmaTMS.">

    <?php include 'includes/header-links.php'; ?>

    <style>
        .faq-category-card {
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
            text-align: left;
        }

        .faq-category-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .faq-icon-box {
            background-color: #dbeafe;
            color: #2563eb;
            padding: 0.5rem;
            border-radius: 0.5rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .accordion-item {
            border-bottom: 1px solid #f3f4f6;
        }

        .accordion-item:last-child {
            border-bottom: none;
        }

        .accordion-trigger {
            width: 100%;
            text-align: left;
            padding: 1rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            background: none;
            border: none;
            font-family: inherit;
            transition: all 0.2s ease;
        }

        .accordion-trigger:hover {
            color: #2563eb;
        }

        .accordion-trigger .question-text {
            font-weight: 500;
            color: #111827;
            padding-right: 1rem;
            flex: 1;
            text-align: left;
        }

        .accordion-trigger:hover .question-text {
            color: #2563eb;
        }

        .accordion-icon {
            transition: transform 0.3s ease;
            flex-shrink: 0;
        }

        .accordion-trigger.active .accordion-icon {
            transform: rotate(180deg);
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .accordion-content.active {
            max-height: 500px;
        }

        .accordion-content-inner {
            padding-bottom: 1rem;
            padding-top: 0;
            text-align: left;
        }

        .answer-text {
            color: #6b7280;
            line-height: 1.75;
            text-align: left;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Header Section -->
    <section class="pt-32 pb-20 px-4" style="background: linear-gradient(to bottom, #dbeafe, #ffffff);">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Frequently Asked Questions
                </h1>
                <p class="text-xl text-gray-600 mb-2">
                    Get answers to common questions about TMS therapy and our treatment approach
                </p>
                <p class="text-gray-500">
                    Can't find what you're looking for? Contact us directly for personalized answers.
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Accordion Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="grid gap-6">

                    <!-- Category 1: TMS Therapy -->
                    <div class="faq-category-card bm-benefit-card p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="faq-icon-box">
                                <i data-lucide="brain" class="w-5 h-5"></i>
                            </div>
                            <h2 class="text-2xl font-semibold text-gray-900">
                                TMS Therapy
                            </h2>
                        </div>

                        <div class="accordion">
                            <!-- Question 1 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">What is TMS therapy and how does it work?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            TMS (Transcranial Magnetic Stimulation) is a non-invasive treatment that
                                            uses magnetic fields to stimulate nerve cells in the brain. It targets
                                            specific areas associated with mood control to help alleviate symptoms of
                                            depression, anxiety, and other mental health conditions.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">Is TMS therapy safe?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            Yes, TMS therapy is FDA-approved and considered very safe. It's
                                            non-invasive, requires no anesthesia, and has minimal side effects. The most
                                            common side effect is mild scalp discomfort during treatment, which
                                            typically decreases over time.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">How long does a TMS treatment session take?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            Each TMS session typically lasts 18-37 minutes, depending on the specific
                                            protocol. Most patients receive treatment 5 days a week for 4-6 weeks,
                                            though the exact duration varies based on individual needs.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">When will I see results from TMS therapy?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            While individual responses vary, many patients begin to notice improvements
                                            after 2-4 weeks of treatment. Some patients may see changes sooner, while
                                            others may require the full treatment course to experience significant
                                            benefits.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 5 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">Can I drive after TMS treatment?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            Yes, you can drive immediately after TMS treatment. Unlike ECT, TMS doesn't
                                            affect your consciousness or memory, so you can resume normal activities
                                            right after your session.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category 2: Depression & Anxiety -->
                    <div class="faq-category-card bm-benefit-card p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="faq-icon-box">
                                <i data-lucide="heart" class="w-5 h-5"></i>
                            </div>
                            <h2 class="text-2xl font-semibold text-gray-900">
                                Depression & Anxiety
                            </h2>
                        </div>

                        <div class="accordion">
                            <!-- Question 1 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">How effective is TMS for depression?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            Clinical studies show that approximately 50-60% of people with
                                            treatment-resistant depression experience a significant reduction in
                                            symptoms with TMS therapy. About one-third achieve complete remission of
                                            their depression.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">Can TMS help with anxiety disorders?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            Yes, TMS can be effective for various anxiety disorders including
                                            generalized anxiety disorder, panic disorder, and PTSD. The treatment
                                            targets brain regions involved in emotional regulation and stress response.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">What if antidepressants haven't worked for me?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            TMS is specifically designed for people who haven't responded well to
                                            traditional antidepressant medications. It's considered a treatment for
                                            'treatment-resistant depression' and offers hope when medications have been
                                            ineffective.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">Can I continue my medications during TMS
                                        treatment?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            In most cases, yes. TMS can be used alongside antidepressant medications.
                                            Our medical team will review all your current medications to ensure there
                                            are no contraindications before starting treatment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category 3: Treatment Process -->
                    <div class="faq-category-card bm-benefit-card p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="faq-icon-box">
                                <i data-lucide="users" class="w-5 h-5"></i>
                            </div>
                            <h2 class="text-2xl font-semibold text-gray-900">
                                Treatment Process
                            </h2>
                        </div>

                        <div class="accordion">
                            <!-- Question 1 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">What happens during the first TMS appointment?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            Your first appointment includes a comprehensive evaluation, brain mapping to
                                            determine the precise treatment location, and motor threshold testing. This
                                            process typically takes 60-90 minutes and ensures personalized treatment
                                            parameters.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">Do I need to prepare anything before TMS
                                        treatment?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            No special preparation is needed. Simply arrive as you normally would.
                                            Remove any metal objects from your head/neck area (jewelry, hairpins, etc.)
                                            and inform us of any changes in medications or health status.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">What does TMS treatment feel like?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            Most patients describe the sensation as a tapping or knocking feeling on the
                                            scalp. Some may experience mild discomfort initially, but this typically
                                            decreases as you become accustomed to the treatment over the first few
                                            sessions.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">How many TMS sessions will I need?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            The standard protocol involves 36 sessions over 6-7 weeks (5 sessions per
                                            week). However, the exact number may vary based on your individual response
                                            and our clinical assessment. Some patients may benefit from additional
                                            sessions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category 4: Eligibility & Insurance -->
                    <div class="faq-category-card bm-benefit-card p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="faq-icon-box">
                                <i data-lucide="users" class="w-5 h-5"></i>
                            </div>
                            <h2 class="text-2xl font-semibold text-gray-900">
                                Eligibility & Insurance
                            </h2>
                        </div>

                        <div class="accordion">
                            <!-- Question 1 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">Am I a candidate for TMS therapy?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            Good candidates for TMS typically have treatment-resistant depression or
                                            anxiety, haven't responded well to medications, or can't tolerate medication
                                            side effects. Our team will conduct a thorough evaluation to determine if
                                            TMS is right for you.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">Does insurance cover TMS therapy?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            Most major insurance plans, including Medicare, cover TMS therapy for
                                            treatment-resistant depression. We work with your insurance company to
                                            verify coverage and handle pre-authorization requirements.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">What if I'm not covered by insurance?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            We offer flexible payment plans and financing options to make TMS therapy
                                            accessible. Our financial counselors will work with you to find a solution
                                            that fits your budget and needs.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="accordion-item">
                                <button class="accordion-trigger" onclick="toggleAccordion(this)">
                                    <span class="question-text">Are there any conditions that would prevent me from
                                        receiving TMS?</span>
                                    <i data-lucide="chevron-down" class="accordion-icon w-5 h-5"></i>
                                </button>
                                <div class="accordion-content">
                                    <div class="accordion-content-inner">
                                        <p class="answer-text">
                                            TMS may not be suitable if you have certain types of metal implants in your
                                            head, a history of seizures, or certain neurological conditions. Our medical
                                            team will review your complete medical history during the consultation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        // Toggle accordion
        function toggleAccordion(trigger) {
            const content = trigger.nextElementSibling;
            const isActive = trigger.classList.contains('active');

            // Close all accordions in the same category
            const category = trigger.closest('.accordion');
            const allTriggers = category.querySelectorAll('.accordion-trigger');
            const allContents = category.querySelectorAll('.accordion-content');

            allTriggers.forEach(t => t.classList.remove('active'));
            allContents.forEach(c => c.classList.remove('active'));

            // If it wasn't active, open it
            if (!isActive) {
                trigger.classList.add('active');
                content.classList.add('active');
            }

            // Recreate icons
            lucide.createIcons();
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
    </script>
</body>

</html>

