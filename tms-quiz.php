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

            <iframe src="https://api.leadconnectorhq.com/widget/survey/n3rMMIveLmczuWCiuhxY"
                style="border:none;width:100%;" scrolling="no" id="n3rMMIveLmczuWCiuhxY" title="survey"></iframe>
            <script src="https://link.msgsndr.com/js/form_embed.js"></script>

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