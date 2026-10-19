<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheila Baguio | Student Profile</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --rose: #d63384;
            --plum: #4a2b3f;
            --muted: #8c7286;
            --blush: #fdf2f7;
            --line: #f3dcea;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 32px 16px;
            color: var(--plum);
            overflow-x: hidden;
            background:
                radial-gradient(600px 300px at 10% 0%, #fce4f1 0%, transparent 60%),
                radial-gradient(500px 300px at 100% 100%, #efe6fb 0%, transparent 60%),
                linear-gradient(135deg, #fdf6fa 0%, #faf4fe 100%);
        }

        /* ---------- Card with entrance animation ---------- */
        .profile-card {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 620px;
            background: #fff;
            border: 1px solid #f7e3ee;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 24px 60px rgba(194, 37, 92, 0.10);
            transition: transform 0.15s ease-out, box-shadow 0.3s ease;
            animation: cardIn 0.7s ease backwards;
        }

        @keyframes cardIn {
            from { opacity: 0; transform: translateY(30px) scale(0.97); }
            to   { opacity: 1; transform: none; }
        }

        /* ---------- Animated gradient banner ---------- */
        .banner {
            height: 110px;
            background-image:
                radial-gradient(rgba(255, 255, 255, 0.5) 1.5px, transparent 1.6px),
                linear-gradient(120deg, #f5a7c7, #e2a8e8, #b9a4f2, #f5a7c7);
            background-size: 26px 26px, 300% 300%;
            animation: bannerShift 8s ease infinite;
        }

        @keyframes bannerShift {
            0%, 100% { background-position: 0 0, 0% 50%; }
            50%      { background-position: 0 0, 100% 50%; }
        }

        /* ---------- Header ---------- */
        .profile-header {
            padding: 0 32px 26px;
            text-align: center;
        }

        .picture-wrap {
            position: relative;
            width: 112px;
            height: 112px;
            margin: -56px auto 0;
        }

        /* Spinning gradient ring behind the photo */
        .picture-wrap::before {
            content: "";
            position: absolute;
            inset: -5px;
            border-radius: 50%;
            background: conic-gradient(#f5a7c7, #b9a4f2, #f78fb3, #f5a7c7);
            animation: spin 5s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .profile-picture {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            background: #f7d9e6;
            transition: transform 0.3s ease;
        }

        .picture-wrap:hover .profile-picture {
            transform: scale(1.05);
        }

        .profile-header h1 {
            margin-top: 14px;
            font-family: "Playfair Display", serif;
            font-size: 27px;
            font-weight: 600;
            color: var(--plum);
        }

        .subtitle {
            margin-top: 4px;
            font-size: 13.5px;
            font-weight: 500;
            color: var(--muted);
        }

        /* Shimmering badge */
        .badge {
            display: inline-block;
            margin-top: 12px;
            padding: 6px 16px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.4px;
            color: var(--rose);
            border: 1px solid #f6cfdf;
            border-radius: 999px;
            background: linear-gradient(110deg, #fdf2f7 30%, #fce7f1 50%, #fdf2f7 70%);
            background-size: 200% 100%;
            animation: shimmer 3s linear infinite;
        }

        @keyframes shimmer {
            to { background-position: -200% 0; }
        }

        /* ---------- Body ---------- */
        .profile-body {
            padding: 26px 32px 30px;
        }

        .profile-body > * {
            animation: fadeUp 0.6s ease backwards;
        }

        .profile-body > *:nth-child(1) { animation-delay: 0.15s; }
        .profile-body > *:nth-child(2) { animation-delay: 0.25s; }
        .profile-body > *:nth-child(3) { animation-delay: 0.35s; }
        .profile-body > *:nth-child(4) { animation-delay: 0.45s; }
        .profile-body > *:nth-child(5) { animation-delay: 0.55s; }
        .profile-body > *:nth-child(6) { animation-delay: 0.65s; }
        .profile-body > *:nth-child(7) { animation-delay: 0.75s; }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px); }
            to   { opacity: 1; transform: none; }
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 14px;
            font-size: 11.5px;
            font-weight: 600;
            letter-spacing: 1.6px;
            text-transform: uppercase;
            color: var(--rose);
        }

        .section-title::after {
            content: "";
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, var(--line), transparent);
        }

        /* Info rows light up pink on hover */
        .info-row {
            display: grid;
            grid-template-columns: 40px minmax(0, 1fr);
            align-items: center;
            gap: 14px;
            padding: 11px 8px;
            border-bottom: 1px solid #f6ecf2;
            border-radius: 10px;
            transition: background 0.25s ease, transform 0.25s ease;
        }

        .info-row:hover {
            background: var(--blush);
            transform: translateX(4px);
        }

        .icon-chip {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            background: linear-gradient(135deg, #fdf2f7, #f6effc);
            border: 1px solid #f4dde9;
            border-radius: 12px;
            transition: transform 0.25s ease;
        }

        .info-row:hover .icon-chip {
            transform: scale(1.1) rotate(-6deg);
        }

        .info-label {
            display: block;
            margin-bottom: 2px;
            font-size: 10.5px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: var(--muted);
        }

        .info-value {
            font-size: 14px;
            font-weight: 500;
            color: var(--plum);
            overflow-wrap: anywhere;
        }

        /* ---------- Skills ---------- */
        .section {
            margin-top: 26px;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill-pill {
            padding: 8px 16px;
            font-size: 13px;
            font-weight: 500;
            color: var(--rose);
            background: #fff;
            border: 1px solid #f2cadd;
            border-radius: 999px;
            transition: all 0.3s ease;
        }

        .skill-pill:hover {
            background: linear-gradient(135deg, #f5a7c7, #b9a4f2);
            border-color: transparent;
            color: #fff;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 6px 16px rgba(194, 37, 92, 0.25);
        }

        .about p {
            font-size: 14px;
            line-height: 1.9;
            color: #6b5a68;
        }

        /* ---------- Footer hearts ---------- */
        .footer-note {
            margin-top: 26px;
            padding-top: 18px;
            border-top: 1px dashed #f0cfe0;
            text-align: center;
            font-size: 13px;
            color: #d4a9c0;
            letter-spacing: 8px;
        }

        .footer-note span {
            display: inline-block;
            animation: pulse 1.5s ease-in-out infinite;
        }

        .footer-note span:nth-child(2) { animation-delay: 0.25s; }
        .footer-note span:nth-child(3) { animation-delay: 0.5s; }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.6; }
            50%      { transform: scale(1.35); opacity: 1; }
        }

        .hint {
            margin-top: 8px;
            font-size: 11px;
            letter-spacing: 0.5px;
            color: #d8b7c9;
        }

        /* ---------- Floating decorations ---------- */
        .ambient {
            position: fixed;
            bottom: -30px;
            pointer-events: none;
            opacity: 0;
            z-index: 0;
            animation: rise linear forwards;
        }

        @keyframes rise {
            0%   { transform: translateY(0) rotate(0deg); opacity: 0; }
            10%  { opacity: 0.7; }
            90%  { opacity: 0.5; }
            100% { transform: translateY(-110vh) rotate(360deg); opacity: 0; }
        }

        .click-heart {
            position: fixed;
            pointer-events: none;
            z-index: 999;
            color: #f27ba9;
            animation: heartFloat 1.2s ease-out forwards;
        }

        @keyframes heartFloat {
            0%   { opacity: 1; transform: translate(-50%, -50%) scale(0.5); }
            100% { opacity: 0; transform: translate(-50%, -300%) scale(1.5) rotate(20deg); }
        }

        @media (max-width: 480px) {
            .profile-header { padding: 0 20px 22px; }

            .picture-wrap {
                width: 92px;
                height: 92px;
                margin-top: -46px;
            }

            .profile-header h1 { font-size: 23px; }

            .profile-body { padding: 22px 20px 26px; }
        }
    </style>
</head>

<body>
    <main class="profile-card">

        <div class="banner"></div>

        <header class="profile-header">
            <div class="picture-wrap">
                <img
                    src="{{ asset('images/profile.jpg') }}"
                    alt="Sheila's profile picture"
                    class="profile-picture"
                >
            </div>

            <h1>Sheila Baguio</h1>
            <p class="subtitle">BS Information Technology</p>

            <span class="badge">✨ UI/UX Design Enthusiast</span>
        </header>

        <section class="profile-body">

            <h2 class="section-title">Student Information</h2>

            <div class="info-row">
                <span class="icon-chip">🎓</span>
                <div>
                    <span class="info-label">Course & Year</span>
                    <span class="info-value">BS Information Technology — 3rd Year</span>
                </div>
            </div>

            <div class="info-row">
                <span class="icon-chip">🪪</span>
                <div>
                    <span class="info-label">Student ID</span>
                    <span class="info-value">25254632</span>
                </div>
            </div>

            <div class="info-row">
                <span class="icon-chip">✉️</span>
                <div>
                    <span class="info-label">Email Address</span>
                    <span class="info-value">baguio.sheila05@gmail.com</span>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Skills & Interests</h2>
                <div class="skills">
                    <span class="skill-pill">🎨 UI/UX Design</span>
                    <span class="skill-pill">✏️ Wireframing</span>
                    <span class="skill-pill">📱 Prototyping</span>
                </div>
            </div>

            <div class="section about">
                <h2 class="section-title">About Me</h2>
                <p>
                    I am a third-year BSIT student at UIC, and UI/UX design is what I enjoy most.
                    I like taking confusing interfaces and making them simple and easy to use —
                    from sketching wireframes to building prototypes. I'm always learning, and
                    I believe good design gets better with feedback and iteration.
                </p>
            </div>

            <div class="footer-note">
                <span>♡</span> <span>♡</span> <span>♡</span>
                <p class="hint">psst… click anywhere for sparkles ✨</p>
            </div>

        </section>
    </main>

    <script>
        // ---- 3D tilt effect on the card ----
        const card = document.querySelector('.profile-card');

        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const rotateX = ((y - rect.height / 2) / (rect.height / 2)) * -4;
            const rotateY = ((x - rect.width / 2) / (rect.width / 2)) * 4;
            card.style.transform =
                `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
        });

        // ---- Sparkles/hearts pop where you click ----
        const symbols = ['♡', '✨', '🌸', '💫'];

        document.addEventListener('click', (e) => {
            const heart = document.createElement('span');
            heart.className = 'click-heart';
            heart.textContent = symbols[Math.floor(Math.random() * symbols.length)];
            heart.style.left = e.clientX + 'px';
            heart.style.top = e.clientY + 'px';
            heart.style.fontSize = (14 + Math.random() * 8) + 'px';
            document.body.appendChild(heart);
            setTimeout(() => heart.remove(), 1200);
        });

        // ---- Ambient floating sparkles in the background ----
        const floaties = ['✨', '♡', '🌸', '⭐'];

        function spawnFloaty() {
            const el = document.createElement('span');
            el.className = 'ambient';
            el.textContent = floaties[Math.floor(Math.random() * floaties.length)];
            el.style.left = Math.random() * 100 + 'vw';
            el.style.fontSize = (12 + Math.random() * 14) + 'px';
            el.style.animationDuration = (8 + Math.random() * 7) + 's';
            document.body.appendChild(el);
            setTimeout(() => el.remove(), 16000);
        }

        for (let i = 0; i < 6; i++) spawnFloaty();      // some right away
        setInterval(spawnFloaty, 1800);                 // then keep going
    </script>
</body>
</html>