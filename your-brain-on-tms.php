<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Brain on TMS: What Actually Happens During Those 20 Minutes | Karma TMS</title>
    <meta name="description" content="What really happens inside your brain during a TMS session? We break down the neuroscience — from the magnetic pulse to the synaptic change — in plain English.">
    <meta name="keywords" content="what happens during TMS therapy, TMS brain science, how TMS works, transcranial magnetic stimulation neuroscience, TMS session experience, TMS prefrontal cortex, Palm Springs TMS">
    <link rel="canonical" href="https://karmatms.com/your-brain-on-tms.php">
    <meta property="og:title" content="Your Brain on TMS: What Actually Happens During Those 20 Minutes">
    <meta property="og:description" content="What really happens inside your brain during a TMS session? We break down the neuroscience from the magnetic pulse to the synaptic change — in plain English.">
    <meta property="og:image" content="https://res.cloudinary.com/de4kw1t2i/image/upload/v1770639701/41_plj0z5.png">
    <meta property="og:type" content="article">

    <?php include 'includes/header-links.php'; ?>

    <style>
        html { scroll-behavior: smooth; }
        a { text-decoration: none; }

        .sticky-toc { position: sticky; top: 120px; }
        .toc-button {
            display: block; width: 100%; text-align: left;
            padding: 0.5rem 0.75rem; border-radius: 0.375rem;
            font-size: 0.875rem; transition: all 0.2s;
            color: #374151; background: transparent; border: none; cursor: pointer;
        }
        .toc-button:hover { background-color: rgba(87,38,112,0.1); color: #572670; }
        .toc-button.active { background-color: #572670; color: white; font-weight: 500; }

        .accordion-item { border: 1px solid #e5e7eb; border-radius: 0.5rem; margin-bottom: 0.5rem; }
        .accordion-item[data-state="open"] { border-color: #572670; }
        .accordion-trigger {
            width: 100%; display: flex; align-items: center; justify-content: space-between;
            padding: 1.25rem; font-weight: 700; font-size: 1rem;
            text-align: left; background: none; border: none; cursor: pointer; color: #1f2937;
        }
        .accordion-trigger:hover { color: #572670; }
        .accordion-content { max-height: 0; opacity: 0; overflow: hidden; transition: max-height 0.3s ease-out, opacity 0.3s ease-out; }
        .accordion-item[data-state="open"] .accordion-content { opacity: 1; }
        .accordion-inner { padding: 0 1.25rem 1.25rem; color: #374151; }
        .accordion-header { font-size: 1.05rem; }
        .accordion-icon { transition: transform 0.3s ease; }
        .accordion-item[data-state="open"] .accordion-icon { transform: rotate(180deg); }

        .prose p { margin-bottom: 1.5rem; line-height: 1.8; }
        .prose ul { margin-bottom: 1.5rem; padding-left: 1.5rem; list-style-type: disc; }
        .prose ol { margin-bottom: 1.5rem; padding-left: 1.5rem; list-style-type: decimal; }
        .prose li { margin-bottom: 0.5rem; line-height: 1.75; }
        .prose h2 { font-size: 1.6rem; font-weight: 800; color: #1e1b4b; margin: 2.5rem 0 1rem; }
        .prose h3 { font-size: 1.2rem; font-weight: 700; color: #2d1b69; margin: 2rem 0 0.75rem; }

        .bg-hero-gradient { background: linear-gradient(135deg, #3b0764 0%, #7c3aed 100%); }
        .border { border-width: 1px !important; border-style: solid !important; }
        .border-2 { border-width: 2px !important; border-style: solid !important; }
        .border-primary { border-color: #572670 !important; }
        .bg-primary { background-color: #572670 !important; }
        .text-primary { color: #572670 !important; }
        .rounded-xl { border-radius: 0.75rem !important; }
        .rounded-full { border-radius: 9999px !important; }
        .border-gray-200 { border-color: #e5e7eb !important; }
        .text-gray-900 { color: #111827 !important; }
        .gap-6 { gap: 1.5rem !important; }
        .shadow-sm { box-shadow: 0 1px 2px 0 rgba(0,0,0,0.05); }
        .shadow-md { box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06); }
        .bg-purple-50 { background-color: #faf5ff; }
        .border-purple-100 { border-color: #f3e8ff; }
        .border-purple-500 { border-color: #a855f7; }
        .text-purple-600 { color: #9333ea; }
        .bg-blue-50 { background-color: #eff6ff; }
        .border-blue-200 { border-color: #bfdbfe; }
        .text-blue-900 { color: #1e3a8a; }
        .bg-green-50 { background-color: #f0fdf4; }
        .border-green-100 { border-color: #dcfce7; }
        .text-green-600 { color: #16a34a; }
        .bg-amber-50 { background-color: #fffbeb; }
        .border-amber-200 { border-color: #fde68a; }
        .text-amber-900 { color: #78350f; }
        .border-l-4 { border-left-width: 4px; }
        .rounded-r-xl { border-top-right-radius: 0.75rem; border-bottom-right-radius: 0.75rem; }
        @media(min-width:1024px){
            .lg\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}
            .lg\:col-span-1{grid-column:span 1/span 1}
            .lg\:col-span-3{grid-column:span 3/span 3}
        }

        /* Brain step visual */
        .brain-step {
            display: flex; align-items: flex-start; gap: 1rem;
            background: #fff; border: 1px solid #ede9fe; border-radius: 1rem;
            padding: 1.25rem 1.5rem; margin-bottom: 1rem;
            box-shadow: 0 2px 8px rgba(124,58,237,0.06);
        }
        .brain-step-num {
            min-width: 2.25rem; height: 2.25rem; background: linear-gradient(135deg,#7c3aed,#9333ea);
            color: #fff; border-radius: 50%; display: flex; align-items: center;
            justify-content: center; font-weight: 800; font-size: 0.95rem; flex-shrink: 0;
        }
        .brain-step-body strong { display: block; font-size: 1rem; color: #1e1b4b; margin-bottom: 0.25rem; }
        .brain-step-body p { margin: 0; font-size: 0.92rem; color: #4b5563; line-height: 1.65; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "Your Brain on TMS: What Actually Happens During Those 20 Minutes",
      "description": "What really happens inside your brain during a TMS session? We break down the neuroscience from the magnetic pulse to the synaptic change — in plain English.",
      "image": "https://res.cloudinary.com/de4kw1t2i/image/upload/v1770639701/41_plj0z5.png",
      "author": {
        "@type": "Person",
        "name": "Dr. Keerthy Sunder",
        "jobTitle": "Board-Certified Psychiatrist",
        "affiliation": { "@type": "Organization", "name": "Karma TMS" }
      },
      "publisher": {
        "@type": "Organization",
        "name": "Karma TMS",
        "logo": { "@type": "ImageObject", "url": "https://res.cloudinary.com/de4kw1t2i/image/upload/v1759944699/karmatms_rp4lkn.png" }
      },
      "datePublished": "2026-04-17",
      "dateModified": "2026-04-17",
      "mainEntityOfPage": { "@type": "WebPage", "@id": "https://karmatms.com/your-brain-on-tms.php" }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Does TMS therapy hurt?",
          "acceptedAnswer": { "@type": "Answer", "text": "Most patients describe a rhythmic tapping or mild knocking sensation on the scalp. It is not painful for the majority of people, though some mild scalp discomfort can occur in early sessions and typically fades within the first week." }
        },
        {
          "@type": "Question",
          "name": "What part of the brain does TMS target?",
          "acceptedAnswer": { "@type": "Answer", "text": "Standard TMS targets the left dorsolateral prefrontal cortex (DLPFC), the region most consistently underactive in major depression. PrTMS uses qEEG brain mapping to personalize the exact stimulation site for each individual patient." }
        },
        {
          "@type": "Question",
          "name": "How many sessions before TMS starts working?",
          "acceptedAnswer": { "@type": "Answer", "text": "Most patients begin to notice mood improvements between sessions 10 and 20. Some respond earlier, and for others the full benefit emerges after the complete course of 20–36 sessions." }
        },
        {
          "@type": "Question",
          "name": "Can I drive after a TMS session?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. TMS requires no sedation and has no effect on cognitive function or reaction time. Patients drive themselves to and from every session." }
        }
      ]
    }
    </script>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Breadcrumb -->
    <div class="bg-gray-50 border-b relative z-10" style="margin-top:55px;">
        <div class="container mx-auto px-4 py-3">
            <nav class="flex items-center text-xs text-gray-500" aria-label="Breadcrumb">
                <a href="index.php" class="hover:text-purple-500 transition-colors">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <a href="blog.php" class="hover:text-purple-500 transition-colors">Blog</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <span class="text-gray-900 font-medium">Your Brain on TMS</span>
            </nav>
        </div>
    </div>

    <!-- Hero -->
    <section class="relative bg-hero-gradient text-white py-20 overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl">
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="inline-flex items-center gap-1 bg-white bg-opacity-20 backdrop-blur-sm text-white text-xs font-semibold px-3 py-1 rounded-full">
                        <i data-lucide="brain" class="w-3 h-3"></i> TMS Therapy
                    </span>
                    <span class="inline-flex items-center gap-1 bg-white bg-opacity-20 backdrop-blur-sm text-white text-xs font-semibold px-3 py-1 rounded-full">
                        <i data-lucide="clock" class="w-3 h-3"></i> 10 min read
                    </span>
                    <span class="inline-flex items-center gap-1 bg-white bg-opacity-20 backdrop-blur-sm text-white text-xs font-semibold px-3 py-1 rounded-full">
                        <i data-lucide="calendar" class="w-3 h-3"></i> April 17, 2026
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
                    Your Brain on TMS: What Actually Happens During Those 20 Minutes<br>
                    <span class="text-purple-300">(Most Clinics Won't Show You This)</span>
                </h1>
                <p class="text-lg text-purple-100 leading-relaxed mb-8 max-w-2xl">
                    The coil sits against your scalp. The clicking starts. Twenty minutes later, you walk out and drive yourself to work. But inside your brain, something far more precise just happened — and most people never find out what.
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-white bg-opacity-20 flex items-center justify-content:center overflow-hidden">
                        <i data-lucide="user-circle" class="w-10 h-10 text-white opacity-80"></i>
                    </div>
                    <div>
                        <div class="font-semibold text-white">Dr. Keerthy Sunder</div>
                        <div class="text-purple-200 text-sm">Board-Certified Psychiatrist, Karma TMS</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid lg:grid-cols-4 gap-6">

            <!-- Sidebar TOC -->
            <aside class="lg:col-span-1">
                <div class="sticky-toc">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 mb-6">
                        <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2 text-sm uppercase tracking-wide">
                            <i data-lucide="list" class="w-4 h-4 text-primary"></i> Table of Contents
                        </h3>
                        <nav>
                            <button class="toc-button" onclick="scrollToSection('setup')">1. The Setup: What's Actually Happening</button>
                            <button class="toc-button" onclick="scrollToSection('pulse')">2. The Magnetic Pulse</button>
                            <button class="toc-button" onclick="scrollToSection('neurons')">3. Neurons Fire, Then Wire Together</button>
                            <button class="toc-button" onclick="scrollToSection('target')">4. Why the Left DLPFC?</button>
                            <button class="toc-button" onclick="scrollToSection('prtms')">5. PrTMS: Your Brain's Personal Map</button>
                            <button class="toc-button" onclick="scrollToSection('feels')">6. What You Actually Feel</button>
                            <button class="toc-button" onclick="scrollToSection('timeline')">7. Session-by-Session Changes</button>
                            <button class="toc-button" onclick="scrollToSection('faq')">8. FAQ</button>
                        </nav>
                    </div>

                    <!-- CTA Card -->
                    <div class="bg-primary rounded-xl p-5 text-white">
                        <h4 class="font-bold mb-2">Ready to See If TMS Is Right for You?</h4>
                        <p class="text-purple-200 text-sm mb-4">Free consultation. No referral needed. All major insurance accepted.</p>
                        <a href="contact-us.php" class="block text-center bg-white text-primary font-bold py-2.5 px-4 rounded-lg text-sm hover:bg-purple-50 transition-colors">Schedule Free Assessment</a>
                        <a href="tel:760-760-5675" class="flex items-center justify-center gap-2 mt-3 text-purple-200 text-sm hover:text-white transition-colors">
                            <i data-lucide="phone" class="w-3.5 h-3.5"></i> 760-760-5675
                        </a>
                    </div>
                </div>
            </aside>

            <!-- Article Body -->
            <article class="lg:col-span-3 prose max-w-none">

                <!-- Key Takeaway -->
                <div class="bg-purple-50 border border-purple-100 rounded-xl p-6 mb-8 not-prose">
                    <h2 class="font-bold text-purple-900 mb-3 flex items-center gap-2">
                        <i data-lucide="zap" class="w-5 h-5 text-purple-600"></i> Key Takeaway
                    </h2>
                    <p class="text-purple-800 leading-relaxed">TMS uses brief magnetic pulses to directly activate neurons in the underactive brain circuits that regulate mood. Over a full treatment course, repeated stimulation triggers lasting neuroplastic changes — rewiring the brain's default activity patterns in a way that antidepressants cannot replicate.</p>
                </div>

                <section id="setup">
                    <h2>The Setup: What's Actually Happening Before the First Click</h2>
                    <p>Before your first session, your Karma TMS clinician takes careful measurements of your head to pinpoint the exact motor threshold — the minimum stimulation intensity that produces a visible twitch in your hand. This baseline tells the technician your brain's individual excitability level. It sounds like a technicality; it is actually the difference between effective treatment and an ineffective one.</p>
                    <p>The TMS coil — a figure-eight-shaped electromagnetic device — is then positioned over your left dorsolateral prefrontal cortex (DLPFC). That positioning is precise to the millimeter. The coil never touches your brain. It doesn't need to. The magnetic field it generates passes through your scalp and skull as easily as light passes through glass, and it focuses its energy in a targeted cortical zone roughly 2–3 cm beneath the surface.</p>
                </section>

                <section id="pulse">
                    <h2>The Magnetic Pulse: Faster Than a Lightning Strike</h2>
                    <p>Each individual TMS pulse lasts less than a millisecond — shorter than the blink of an eye. The coil generates a brief, powerful magnetic field (roughly 1.5–2 Tesla — comparable to an MRI machine) that changes so rapidly it induces a small electrical current in the neurons beneath it. That current is enough to depolarize the cell membrane and trigger an action potential: the neuron fires.</p>
                    <p>In standard repetitive TMS (rTMS) for depression, pulses are delivered in rapid trains — typically 10 pulses per second for 4 seconds, followed by a short pause, repeated for the full 20-minute session. By the time the session ends, roughly 3,000 magnetic pulses have been delivered to that one cortical region.</p>

                    <div class="bg-blue-50 border-l-4 border-blue-200 rounded-r-xl p-5 my-6 not-prose">
                        <p class="text-blue-900 font-semibold mb-1">By the numbers — a single TMS session:</p>
                        <ul class="text-blue-900 text-sm space-y-1 list-disc pl-5">
                            <li>~3,000 magnetic pulses delivered</li>
                            <li>Each pulse: &lt;1 millisecond duration</li>
                            <li>Penetration depth: 2–3 cm below scalp</li>
                            <li>Target zone: ~1–2 cm³ of cortical tissue</li>
                            <li>No sedation. No systemic drug exposure. Zero downtime.</li>
                        </ul>
                    </div>
                </section>

                <section id="neurons">
                    <h2>Neurons Fire, Then Wire Together: The Neuroplasticity Mechanism</h2>
                    <p>A single session of TMS produces temporary changes in cortical excitability. But the real transformation happens across the full treatment course through a process called long-term potentiation (LTP) — the same mechanism responsible for all learning and memory formation in the brain.</p>
                    <p>When the DLPFC is stimulated repeatedly at the right frequency, the synaptic connections between its neurons — and between the DLPFC and deeper mood-regulating structures like the amygdala, hippocampus, and anterior cingulate cortex — become stronger and more efficient. The brain literally rewires itself. Circuits that were chronically underactive in depression begin to fire more readily. Over time, that new activity pattern becomes the brain's new default.</p>
                    <p>This is why TMS works better across a full course rather than as a one-off treatment, and why the effects can last months to years after the final session — the brain has been structurally changed, not just temporarily medicated.</p>
                </section>

                <section id="target">
                    <h2>Why the Left DLPFC? The Science Behind the Target</h2>
                    <p>The left dorsolateral prefrontal cortex is the brain's emotional regulator. It governs executive function, working memory, and — critically — the top-down suppression of the amygdala's fear and threat responses. In patients with major depressive disorder, neuroimaging studies consistently show reduced metabolic activity in the left DLPFC. The brain's "dimmer switch" for emotional distress is stuck in the low position.</p>
                    <p>High-frequency rTMS (10 Hz) applied to the left DLPFC is excitatory — it turns the dimmer up. Low-frequency TMS (1 Hz) applied to the right DLPFC is inhibitory — it quiets an overactive mirror region on the other side. Both approaches restore the balance that healthy mood regulation requires.</p>

                    <div class="not-prose my-6 space-y-3">
                        <div class="brain-step">
                            <div class="brain-step-num">1</div>
                            <div class="brain-step-body">
                                <strong>Magnetic field generated</strong>
                                <p>The figure-8 coil produces a 1.5T field that passes through skull without impedance.</p>
                            </div>
                        </div>
                        <div class="brain-step">
                            <div class="brain-step-num">2</div>
                            <div class="brain-step-body">
                                <strong>Electrical current induced in cortex</strong>
                                <p>Rapidly changing field generates a focal micro-current in DLPFC neurons 2–3 cm below surface.</p>
                            </div>
                        </div>
                        <div class="brain-step">
                            <div class="brain-step-num">3</div>
                            <div class="brain-step-body">
                                <strong>Action potentials fire</strong>
                                <p>Neurons depolarize and fire — activating the underactive prefrontal circuit.</p>
                            </div>
                        </div>
                        <div class="brain-step">
                            <div class="brain-step-num">4</div>
                            <div class="brain-step-body">
                                <strong>Downstream limbic modulation</strong>
                                <p>Activated DLPFC signals down to the amygdala, hippocampus, and ACC — quieting the threat-response loop.</p>
                            </div>
                        </div>
                        <div class="brain-step">
                            <div class="brain-step-num">5</div>
                            <div class="brain-step-body">
                                <strong>Long-term potentiation over weeks</strong>
                                <p>Repeated stimulation strengthens synaptic connections via LTP — the brain rewires its default mood state.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="prtms">
                    <h2>PrTMS: When Your Brain Gets Its Own Map</h2>
                    <p>Standard TMS targets the same anatomical landmark in every patient. PrTMS — Personalized Repetitive TMS, the protocol offered at Karma TMS — goes further. Before treatment begins, a quantitative EEG (qEEG) records your brain's electrical activity across 19 electrode sites simultaneously, generating a full map of your individual cortical activity patterns.</p>
                    <p>A patented algorithm then analyzes which frequencies are dysregulated in your specific brain, identifies the optimal stimulation site and pulse frequency for your neural profile, and recalibrates the treatment plan weekly as your brain responds. The result is a treatment that evolves with you — not a one-size-fits-all protocol applied regardless of your neurological profile.</p>
                    <p>For patients in the Palm Springs, Rancho Mirage, and Twentynine Palms areas, Karma TMS is one of the few clinics in Southern California offering this level of neurological precision.</p>
                </section>

                <section id="feels">
                    <h2>What You Actually Feel During a Session</h2>
                    <p>Most patients describe the sensation as a rhythmic tapping or knocking against the scalp — like someone lightly rapping their knuckles at a fast, even tempo. Some notice a mild tingling or pulling sensation in the scalp muscles. A small number of patients experience mild headache in the first few sessions; this almost universally resolves within the first week of treatment.</p>
                    <p>What you will <em>not</em> feel: sedation, confusion, disorientation, or any meaningful cognitive impairment. You remain fully awake and alert. Many patients bring a podcast. Some take a brief nap. When the 20 minutes end, you get up, collect your things, and drive yourself to wherever you need to go next.</p>

                    <div class="bg-green-50 border border-green-100 rounded-xl p-5 my-6 not-prose">
                        <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                            <i data-lucide="check-circle" class="w-5 h-5 text-green-600"></i> What Patients Commonly Report
                        </h3>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-600 flex-shrink-0 mt-0.5"></i><span><strong>First 1–2 sessions:</strong> Mild scalp discomfort or tightness, occasional headache that resolves within hours</span></li>
                            <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-600 flex-shrink-0 mt-0.5"></i><span><strong>Sessions 3–10:</strong> Sensations normalize; most patients find sessions uneventful and relaxing</span></li>
                            <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-600 flex-shrink-0 mt-0.5"></i><span><strong>Sessions 10–20:</strong> Many patients begin reporting mood improvements, better sleep, and reduced anxiety</span></li>
                            <li class="flex items-start gap-2"><i data-lucide="check" class="w-4 h-4 text-green-600 flex-shrink-0 mt-0.5"></i><span><strong>Sessions 20–36:</strong> Full therapeutic response typically reached; neuroplastic changes consolidated</span></li>
                        </ul>
                    </div>
                </section>

                <section id="timeline">
                    <h2>What's Changing in Your Brain Session by Session</h2>
                    <p>The transformation isn't sudden — and understanding that helps patients stay the course during the early sessions when the benefits haven't yet become obvious.</p>

                    <h3>Sessions 1–5: Calibration and Cortical Sensitization</h3>
                    <p>The brain is learning to respond to the stimulus. Cortical excitability is being recalibrated. At this stage, the changes are happening below the threshold of conscious awareness. No mood lift is expected yet, and its absence does not indicate the treatment isn't working.</p>

                    <h3>Sessions 6–15: Early Neuroplastic Changes</h3>
                    <p>Synaptic connections in the DLPFC and its downstream networks are beginning to strengthen. Some patients start noticing subtle shifts — slightly better mornings, less emotional heaviness, marginally improved motivation. Sleep quality often improves at this stage before mood fully lifts, because the limbic system is already being modulated.</p>

                    <h3>Sessions 16–36: Full Therapeutic Response</h3>
                    <p>The LTP-driven rewiring reaches a clinically meaningful threshold. Patients in this phase typically report the clearest improvement — reduced depressive symptoms, better cognitive clarity, renewed interest in activities, and a noticeably different emotional baseline. The brain is not just temporarily stimulated at this point; it has structurally adapted to sustain a healthier mood regulation pattern.</p>

                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-5 my-6 not-prose">
                        <p class="text-amber-900 text-sm"><strong>Important:</strong> Response varies by individual neurological profile, severity of illness, and treatment history. Patients who have failed multiple antidepressants often require the full 36-session course. PrTMS tracking allows clinicians to objectively monitor cortical changes week by week and adjust stimulation parameters accordingly.</p>
                    </div>
                </section>

                <!-- FAQ -->
                <section id="faq">
                    <h2>Frequently Asked Questions</h2>

                    <div class="accordion-item not-prose" data-state="closed">
                        <button class="accordion-trigger accordion-header" onclick="toggleAccordion(this)">
                            Does TMS therapy hurt?
                            <i data-lucide="chevron-down" class="accordion-icon w-5 h-5 text-primary flex-shrink-0"></i>
                        </button>
                        <div class="accordion-content">
                            <div class="accordion-inner">Most patients describe a rhythmic tapping or mild knocking on the scalp. It is not painful for the majority, though mild scalp discomfort can occur in early sessions and typically fades within the first week of treatment.</div>
                        </div>
                    </div>

                    <div class="accordion-item not-prose" data-state="closed">
                        <button class="accordion-trigger accordion-header" onclick="toggleAccordion(this)">
                            What part of the brain does TMS target?
                            <i data-lucide="chevron-down" class="accordion-icon w-5 h-5 text-primary flex-shrink-0"></i>
                        </button>
                        <div class="accordion-content">
                            <div class="accordion-inner">Standard TMS targets the left dorsolateral prefrontal cortex (DLPFC) — the region most consistently underactive in major depression. PrTMS uses qEEG brain mapping to personalize the exact stimulation site for each individual patient.</div>
                        </div>
                    </div>

                    <div class="accordion-item not-prose" data-state="closed">
                        <button class="accordion-trigger accordion-header" onclick="toggleAccordion(this)">
                            How many sessions before TMS starts working?
                            <i data-lucide="chevron-down" class="accordion-icon w-5 h-5 text-primary flex-shrink-0"></i>
                        </button>
                        <div class="accordion-content">
                            <div class="accordion-inner">Most patients begin noticing mood improvements between sessions 10 and 20. Some respond earlier. For others the full benefit emerges only after the complete course of 20–36 sessions.</div>
                        </div>
                    </div>

                    <div class="accordion-item not-prose" data-state="closed">
                        <button class="accordion-trigger accordion-header" onclick="toggleAccordion(this)">
                            Can I drive after a TMS session?
                            <i data-lucide="chevron-down" class="accordion-icon w-5 h-5 text-primary flex-shrink-0"></i>
                        </button>
                        <div class="accordion-content">
                            <div class="accordion-inner">Yes. TMS requires no sedation and has no effect on cognitive function or reaction time. Patients drive themselves to and from every single session.</div>
                        </div>
                    </div>

                    <div class="accordion-item not-prose" data-state="closed">
                        <button class="accordion-trigger accordion-header" onclick="toggleAccordion(this)">
                            Is TMS covered by insurance?
                            <i data-lucide="chevron-down" class="accordion-icon w-5 h-5 text-primary flex-shrink-0"></i>
                        </button>
                        <div class="accordion-content">
                            <div class="accordion-inner">Yes. Medicare, Tricare, Medi-Cal, and virtually all major commercial insurance plans cover TMS for Major Depressive Disorder when clinical criteria are met. Karma TMS handles the full pre-authorization process at no cost to you before your first appointment.</div>
                        </div>
                    </div>
                </section>

                <!-- Final CTA -->
                <div class="bg-primary rounded-2xl p-8 text-center mt-12 not-prose" style="color:#fff">
                    <h2 class="text-2xl font-extrabold mb-3" style="color:#fff;background:none;-webkit-text-fill-color:#fff">See What TMS Can Do for Your Brain</h2>
                    <p class="mb-6 max-w-xl mx-auto" style="color:rgba(233,213,255,0.9)">Our board-certified psychiatrists serve Palm Springs, Rancho Mirage, Twentynine Palms, and the entire Southern California desert region. No referral required.</p>
                    <div class="flex flex-wrap gap-4 justify-center">
                        <a href="contact-us.php" class="bg-white text-primary font-bold px-6 py-3 rounded-xl hover:bg-purple-50 transition-colors">Schedule Free Assessment</a>
                        <a href="tms-quiz.php" class="border-2 border-white text-white font-bold px-6 py-3 rounded-xl hover:bg-white hover:bg-opacity-10 transition-colors">Take the TMS Quiz</a>
                    </div>
                </div>

            </article>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script>
    function toggleAccordion(btn) {
        var item = btn.closest('.accordion-item');
        var isOpen = item.getAttribute('data-state') === 'open';
        document.querySelectorAll('.accordion-item').forEach(function(el) {
            el.setAttribute('data-state', 'closed');
            el.querySelector('.accordion-content').style.maxHeight = null;
        });
        if (!isOpen) {
            item.setAttribute('data-state', 'open');
            var content = item.querySelector('.accordion-content');
            content.style.maxHeight = content.scrollHeight + 'px';
        }
    }
    function scrollToSection(id) {
        var el = document.getElementById(id);
        if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof lucide !== 'undefined') lucide.createIcons();
    });
    </script>
</body>
</html>
