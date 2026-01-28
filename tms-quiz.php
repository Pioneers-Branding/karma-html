<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS Candidacy Assessment | KarmaTMS Mental Health Center</title>
    <meta name="description"
        content="Take our brief TMS Candidacy Assessment to see if Transcranial Magnetic Stimulation therapy might be right for you.">

    <?php include 'includes/header-links.php'; ?>

    <style>
        /* Quiz Specific Styles */
        .step {
            display: none;
            /* Hidden by default */
        }

        .step.active {
            display: block;
            /* Show active step */
        }

        /* Custom Radio Button Styling */
        .quiz-option input[type="radio"] {
            display: none;
        }

        .quiz-option label {
            display: flex;
            align-items: center;
            padding: 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.2s;
        }

        .quiz-option label:hover {
            border-color: #572670;
            background-color: #f3e8f8;
        }

        .quiz-option input[type="radio"]:checked+label {
            border-color: #572670;
            background-color: #f3e8f8;
            color: #572670;
            font-weight: 500;
        }

        .quiz-option input[type="radio"]:checked+label::before {
            content: '';
            display: inline-block;
            width: 1rem;
            height: 1rem;
            margin-right: 0.75rem;
            border-radius: 50%;
            background-color: #572670;
            box-shadow: inset 0 0 0 3px #fff;
        }

        .quiz-option label::before {
            content: '';
            display: inline-block;
            width: 1rem;
            height: 1rem;
            margin-right: 0.75rem;
            border-radius: 50%;
            border: 1px solid #cbd5e1;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <main class="min-h-screen py-32 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6"
                    style="background: rgba(87, 38, 112, 0.1);">
                    <i data-lucide="brain" class="w-8 h-8 text-[#572670]"></i>
                </div>
                <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">TMS Candidacy Assessment</h1>
                <p class="text-lg text-gray-600">
                    This brief assessment helps determine if TMS therapy might be right for you.
                </p>
            </div>

            <!-- Progress Bar -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-2 text-sm text-gray-600">
                    <span id="progress-text">Step 1 of 6</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div id="progress-bar" class="bg-[#572670] h-2.5 rounded-full transition-all duration-300"
                        style="width: 16%"></div>
                </div>
            </div>

            <!-- Quiz Form -->
            <form id="tms-quiz-form" action="https://app.formester.com/forms/NXlBvsLlW/submissions" method="POST">
                <input type="hidden" name="redirect_to" value="thank-you.html">

                <!-- Step 1 -->
                <div class="step active" data-step="1">
                    <div class="bm-benefit-card p-8 bg-white">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Have you tried antidepressant medications for
                            your current episode?</h2>
                        <div class="space-y-3">
                            <div class="quiz-option">
                                <input type="radio" id="q1-opt1" name="antidepressant_history"
                                    value="No, I have not tried any antidepressants" required>
                                <label for="q1-opt1">No, I have not tried any antidepressants</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q1-opt2" name="antidepressant_history"
                                    value="Yes, I have tried 1 antidepressant">
                                <label for="q1-opt2">Yes, I have tried 1 antidepressant</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q1-opt3" name="antidepressant_history"
                                    value="Yes, I have tried 2 antidepressants">
                                <label for="q1-opt3">Yes, I have tried 2 antidepressants</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q1-opt4" name="antidepressant_history"
                                    value="Yes, I have tried 3 or more antidepressants">
                                <label for="q1-opt4">Yes, I have tried 3 or more antidepressants</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="step" data-step="2">
                    <div class="bm-benefit-card p-8 bg-white">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">How long have you been experiencing symptoms of
                            depression?</h2>
                        <div class="space-y-3">
                            <div class="quiz-option">
                                <input type="radio" id="q2-opt1" name="symptom_duration" value="Less than 1 month">
                                <label for="q2-opt1">Less than 1 month</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q2-opt2" name="symptom_duration" value="1-3 months">
                                <label for="q2-opt2">1-3 months</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q2-opt3" name="symptom_duration" value="3-6 months">
                                <label for="q2-opt3">3-6 months</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q2-opt4" name="symptom_duration" value="More than 6 months">
                                <label for="q2-opt4">More than 6 months</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="step" data-step="3">
                    <div class="bm-benefit-card p-8 bg-white">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">How would you rate the severity of your
                            depression symptoms?</h2>
                        <div class="space-y-3">
                            <div class="quiz-option">
                                <input type="radio" id="q3-opt1" name="symptom_severity"
                                    value="Mild - minimal impact on daily activities">
                                <label for="q3-opt1">Mild - minimal impact on daily activities</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q3-opt2" name="symptom_severity"
                                    value="Moderate - some impact on daily activities">
                                <label for="q3-opt2">Moderate - some impact on daily activities</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q3-opt3" name="symptom_severity"
                                    value="Severe - significant impact on daily activities">
                                <label for="q3-opt3">Severe - significant impact on daily activities</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q3-opt4" name="symptom_severity"
                                    value="Very severe - unable to function normally">
                                <label for="q3-opt4">Very severe - unable to function normally</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="step" data-step="4">
                    <div class="bm-benefit-card p-8 bg-white">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Do you experience any of the following
                            symptoms? (Select the one that best describes you)</h2>
                        <div class="space-y-3">
                            <div class="quiz-option">
                                <input type="radio" id="q4-opt1" name="symptoms_experienced"
                                    value="None of the below symptoms">
                                <label for="q4-opt1">None of the below symptoms</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q4-opt2" name="symptoms_experienced"
                                    value="Sleep problems, appetite changes, or fatigue">
                                <label for="q4-opt2">Sleep problems, appetite changes, or fatigue</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q4-opt3" name="symptoms_experienced"
                                    value="Loss of interest, difficulty concentrating, feelings of worthlessness">
                                <label for="q4-opt3">Loss of interest, difficulty concentrating, feelings of
                                    worthlessness</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q4-opt4" name="symptoms_experienced"
                                    value="Thoughts of self-harm or suicide">
                                <label for="q4-opt4">Thoughts of self-harm or suicide</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="step" data-step="5">
                    <div class="bm-benefit-card p-8 bg-white">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Have you experienced side effects from
                            antidepressant medications?</h2>
                        <div class="space-y-3">
                            <div class="quiz-option">
                                <input type="radio" id="q5-opt1" name="medication_side_effects"
                                    value="I have not taken antidepressant medications">
                                <label for="q5-opt1">I have not taken antidepressant medications</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q5-opt2" name="medication_side_effects"
                                    value="No significant side effects">
                                <label for="q5-opt2">No significant side effects</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q5-opt3" name="medication_side_effects"
                                    value="Some bothersome side effects">
                                <label for="q5-opt3">Some bothersome side effects</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q5-opt4" name="medication_side_effects"
                                    value="Severe or intolerable side effects">
                                <label for="q5-opt4">Severe or intolerable side effects</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 6: Last Question + Contact Form -->
                <div class="step" data-step="6">
                    <!-- Last Question -->
                    <div class="bm-benefit-card p-8 bg-white mb-8">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">How much do your symptoms interfere with your
                            work, relationships, or daily activities?</h2>
                        <div class="space-y-3">
                            <div class="quiz-option">
                                <input type="radio" id="q6-opt1" name="daily_interference" value="Minimal interference">
                                <label for="q6-opt1">Minimal interference</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q6-opt2" name="daily_interference"
                                    value="Some interference but manageable">
                                <label for="q6-opt2">Some interference but manageable</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q6-opt3" name="daily_interference"
                                    value="Significant interference">
                                <label for="q6-opt3">Significant interference</label>
                            </div>
                            <div class="quiz-option">
                                <input type="radio" id="q6-opt4" name="daily_interference"
                                    value="Severe interference - unable to function">
                                <label for="q6-opt4">Severe interference - unable to function</label>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form (Merged) -->
                    <div class="bm-benefit-card p-8 bg-white">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">Contact Information</h2>
                        <p class="text-gray-600 mb-6">Please provide your contact details so we can discuss your
                            assessment results and next steps.</p>

                        <div class="space-y-6">
                            <div>
                                <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1">Full
                                    Name <span class="text-red-500">*</span></label>
                                <input type="text" id="full_name" name="full_name"
                                    class="w-full h-11 py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#572670] focus:border-transparent"
                                    placeholder="Enter your full name">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                    Address <span class="text-red-500">*</span></label>
                                <input type="email" id="email" name="email"
                                    class="w-full h-11 py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#572670] focus:border-transparent"
                                    placeholder="your.email@example.com">
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone
                                    Number <span class="text-red-500">*</span></label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full h-11 py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#572670] focus:border-transparent"
                                    placeholder="(555) 123-4567">
                            </div>

                            <div>
                                <label for="condition" class="block text-sm font-medium text-gray-700 mb-1">Primary
                                    Condition <span class="text-red-500">*</span></label>
                                <select id="condition" name="condition"
                                    class="w-full h-11 py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#572670] focus:border-transparent bg-white">
                                    <option value="" disabled selected>Select your primary condition</option>
                                    <option value="Depression">Depression</option>
                                    <option value="Anxiety">Anxiety</option>
                                    <option value="OCD">OCD</option>
                                    <option value="PTSD">PTSD</option>
                                    <option value="Bipolar Disorder">Bipolar Disorder</option>
                                    <option value="Addiction">Addiction</option>
                                    <option value="Stress">Stress</option>
                                    <option value="Women's Mood Disorders">Women's Mood Disorders</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Additional
                                    Message (Optional)</label>
                                <textarea id="message" name="message" rows="4"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#572670] focus:border-transparent"
                                    placeholder="Tell us more about your situation or any questions you have..."></textarea>
                            </div>

                            <div class="flex items-start gap-3">
                                <input type="checkbox" id="consent" name="consent" class="mt-1 w-4 h-4 text-[#572670]">
                                <label for="consent" class="text-sm text-gray-600">
                                    I understand that I will receive emails and calls from the Karma team after
                                    submitting
                                    this form. My data will be used for communication purposes only. <span
                                        class="text-red-500">*</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex flex-row flex-wrap justify-between mt-8 gap-4">
                    <button type="button" id="prev-btn"
                        class="hidden px-6 py-3 rounded-lg border border-gray-300 text-gray-700 font-medium hover:bg-gray-50 transition-colors">
                        <i data-lucide="arrow-left" class="w-4 h-4 inline mr-2"></i> Previous
                    </button>
                    <button type="button" id="next-btn" class="ml-auto btn btn-primary font-medium px-6 py-3">
                        Next <i data-lucide="arrow-right" class="w-4 h-4 inline ml-2"></i>
                    </button>
                    <button type="submit" id="submit-btn" class="hidden ml-auto btn btn-primary font-medium px-6 py-3">
                        Submit Assessment <i data-lucide="arrow-right" class="w-4 h-4 inline ml-2"></i>
                    </button>
                </div>
            </form>

            <div class="mt-8 text-center text-sm text-gray-500 mb-8">
                <p>This assessment takes approximately 3-5 minutes to complete.</p>
                <p>Your responses are confidential and will help us provide personalized recommendations.</p>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
            const totalSteps = 6;
            let currentStep = 1;
            const form = document.getElementById('tms-quiz-form');
            const nextBtn = document.getElementById('next-btn');
            const prevBtn = document.getElementById('prev-btn');
            const submitBtn = document.getElementById('submit-btn');
            const progressBar = document.getElementById('progress-bar');
            const progressText = document.getElementById('progress-text');

            function updateUI() {
                // Show/Hide Steps
                document.querySelectorAll('.step').forEach(step => {
                    step.classList.remove('active');
                    if (parseInt(step.dataset.step) === currentStep) {
                        step.classList.add('active');
                    }
                });

                // Update Progress Button Visibility
                if (currentStep === 1) {
                    prevBtn.classList.add('hidden');
                } else {
                    prevBtn.classList.remove('hidden');
                }

                if (currentStep === totalSteps) {
                    nextBtn.classList.add('hidden');
                    submitBtn.classList.remove('hidden');
                } else {
                    nextBtn.classList.remove('hidden');
                    submitBtn.classList.add('hidden');
                }

                // Update Progress Bar
                const progressPercentage = (currentStep / totalSteps) * 100;
                progressBar.style.width = `${progressPercentage}%`;
                progressText.textContent = `Step ${currentStep} of ${totalSteps}`;

                // Scroll to top
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            function validateStep(step) {
                const currentStepEl = document.querySelector(`.step[data-step="${step}"]`);

                // Always check for radio button if it exists in the step
                const radioGroup = currentStepEl.querySelector('input[type="radio"]');
                if (radioGroup) {
                    const checked = currentStepEl.querySelector('input[type="radio"]:checked');
                    if (!checked) {
                        alert('Please select an option to continue.');
                        return false;
                    }
                }

                // Special validation for Final Step (Step 6) which now includes the contact form inputs
                if (step === 6) {
                    const fullName = document.getElementById('full_name').value.trim();
                    const email = document.getElementById('email').value.trim();
                    const phone = document.getElementById('phone').value.trim();
                    const condition = document.getElementById('condition').value;
                    const consent = document.getElementById('consent').checked;

                    if (!fullName || !email || !phone || !condition) {
                        alert('Please fill in all required contact fields marked with *');
                        return false;
                    }

                    if (!consent) {
                        alert('Please agree to the consent terms to submit.');
                        return false;
                    }
                }
                return true;
            }

            nextBtn.addEventListener('click', () => {
                if (validateStep(currentStep)) {
                    currentStep++;
                    updateUI();
                }
            });

            prevBtn.addEventListener('click', () => {
                if (currentStep > 1) {
                    currentStep--;
                    updateUI();
                }
            });

            form.addEventListener('submit', (e) => {
                if (!validateStep(currentStep)) {
                    e.preventDefault();
                }
            });

            // Initialize UI
            updateUI();
        });
    </script>
</body>

</html>

