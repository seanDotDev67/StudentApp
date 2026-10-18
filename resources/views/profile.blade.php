<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sean Lapaz | Student Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 32px 16px;
            background: #f3f5f8;
            color: #252b36;
        }

        .profile-card {
            width: 100%;
            max-width: 620px;
            background: #fff;
            border: 1px solid #e3e7ed;
            border-radius: 10px;
            overflow: hidden;
        }

        .profile-header {
            padding: 32px;
            display: flex;
            align-items: center;
            gap: 24px;
            border-bottom: 1px solid #e9edf2;
        }

        .profile-picture {
            width: 104px;
            height: 104px;
            flex-shrink: 0;
            border-radius: 8px;
            object-fit: cover;
            background: #e8edf3;
            border: 1px solid #e0e5ec;
        }

        .profile-header h1 {
            margin-bottom: 7px;
            font-size: 25px;
            font-weight: 650;
            letter-spacing: -0.5px;
            color: #202b3c;
        }

        .profile-header p {
            font-size: 14px;
            color: #687386;
        }

        .profile-body {
            padding: 28px 32px 32px;
        }

        .section-title {
            margin-bottom: 16px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #526780;
        }

        .info-row {
            display: grid;
            grid-template-columns: 145px minmax(0, 1fr);
            gap: 12px;
            padding: 15px 0;
            border-bottom: 1px solid #edf0f4;
        }

        .info-label {
            font-size: 14px;
            color: #687386;
        }

        .info-value {
            min-width: 0;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.6;
            color: #293445;
            overflow-wrap: anywhere;
        }

        .about {
            margin-top: 28px;
            padding-top: 24px;
            border-top: 1px solid #e9edf2;
        }

        .about h2 {
            margin-bottom: 12px;
            font-size: 18px;
            font-weight: 650;
            color: #202b3c;
        }

        .about p {
            font-size: 14px;
            line-height: 1.85;
            color: #596475;
        }

        @media (max-width: 480px) {
            .profile-header {
                padding: 24px 20px;
                gap: 16px;
            }

            .profile-picture {
                width: 82px;
                height: 82px;
            }

            .profile-header h1 {
                font-size: 21px;
            }

            .profile-body {
                padding: 24px 20px;
            }

            .info-row {
                grid-template-columns: 1fr;
                gap: 5px;
            }
        }
    </style>
</head>

<body>
    <main class="profile-card">

        <header class="profile-header">
            <img
                src="{{ asset('images/profile.jpg') }}"
                alt="Sean Lapaz's profile picture"
                class="profile-picture"
            >

            <div>
                <h1>Sean Andrei Lapaz</h1>
                <p>BS Information Technology Student</p>
            </div>
        </header>

        <section class="profile-body">

            <h2 class="section-title">Student Information</h2>

            <div class="info-row">
                <span class="info-label">Course & Year</span>
                <span class="info-value">
                    BS Information Technology — 3rd Year
                </span>
            </div>

            <div class="info-row">
                <span class="info-label">Student ID</span>
                <span class="info-value">25247875</span>
            </div>

            <div class="info-row">
                <span class="info-label">Email Address</span>
                <span class="info-value">seanlapaz227@gmail.com</span>
            </div>

            <div class="about">
                <h2>About Me</h2>
                <p>
                    I am a third-year Information Technology student
                    interested in software development and web technologies.
                    I enjoy building projects, exploring how applications
                    work behind the scenes, and improving my programming
                    skills through hands-on experience. My goal is to
                    develop practical skills and create software that
                    solves real-world problems.
                </p>
            </div>

        </section>
    </main>
</body>
</html>