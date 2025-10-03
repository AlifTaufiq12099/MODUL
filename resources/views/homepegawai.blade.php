<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(45deg, #667eea, #764ba2, #f093fb, #f5576c);
            background-size: 400% 400%;
            animation: gradientShift 8s ease infinite;
            overflow-x: hidden;
            position: relative;
        }

        /* Animasi gradient background */
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s infinite ease-in-out;
        }

        .particle:nth-child(1) {
            width: 20px;
            height: 20px;
            left: 10%;
            animation-delay: 0s;
            animation-duration: 8s;
        }

        .particle:nth-child(2) {
            width: 15px;
            height: 15px;
            left: 20%;
            animation-delay: 1s;
            animation-duration: 6s;
        }

        .particle:nth-child(3) {
            width: 25px;
            height: 25px;
            left: 30%;
            animation-delay: 2s;
            animation-duration: 10s;
        }

        .particle:nth-child(4) {
            width: 18px;
            height: 18px;
            left: 40%;
            animation-delay: 3s;
            animation-duration: 7s;
        }

        .particle:nth-child(5) {
            width: 22px;
            height: 22px;
            left: 50%;
            animation-delay: 4s;
            animation-duration: 9s;
        }

        .particle:nth-child(6) {
            width: 16px;
            height: 16px;
            left: 60%;
            animation-delay: 5s;
            animation-duration: 8s;
        }

        .particle:nth-child(7) {
            width: 24px;
            height: 24px;
            left: 70%;
            animation-delay: 6s;
            animation-duration: 6s;
        }

        .particle:nth-child(8) {
            width: 19px;
            height: 19px;
            left: 80%;
            animation-delay: 7s;
            animation-duration: 11s;
        }

        .particle:nth-child(9) {
            width: 21px;
            height: 21px;
            left: 90%;
            animation-delay: 8s;
            animation-duration: 7s;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Geometric shapes */
        .geometric-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .shape {
            position: absolute;
            opacity: 0.1;
        }

        .triangle {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 30px solid rgba(255, 255, 255, 0.2);
            animation: rotate 15s linear infinite;
        }

        .square {
            width: 25px;
            height: 25px;
            background: rgba(255, 255, 255, 0.1);
            animation: spin 20s linear infinite;
        }

        .circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            animation: pulse 4s ease-in-out infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg) translateX(50px) rotate(0deg); }
            to { transform: rotate(360deg) translateX(50px) rotate(-360deg); }
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.1; }
            50% { transform: scale(1.2); opacity: 0.2; }
        }

        /* Waves animation */
        .waves {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 200px;
            background: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3cdefs%3e%3cpattern id='a' patternUnits='userSpaceOnUse' width='87' height='50.232' patternTransform='scale(2) rotate(0)'%3e%3crect x='0' y='0' width='100%25' height='100%25' fill='hsla(0,0%25,100%25,0)'/%3e%3cpath d='M0 54.424l14.5-4.348L29 42.816l14.5 4.348L58 54.424l14.5-7.26L87 42.816v7.608L72.5 57.684 58 50.232l-14.5 4.348L29 57.684 14.5 50.424 0 62.032v-7.608z' stroke-width='1' stroke='hsla(258,59%25,59%25,.2)' fill='hsla(258,59%25,59%25,.1)'/%3e%3c/pattern%3e%3c/defs%3e%3crect width='100%25' height='100%25' fill='url(%23a)'/%3e%3c/svg%3e");
            animation: wave 10s ease-in-out infinite;
            pointer-events: none;
            z-index: 1;
        }

        @keyframes wave {
            0%, 100% { transform: translateX(0px); }
            50% { transform: translateX(-50px); }
        }

        /* Card styling improvements */
        .container {
            position: relative;
            z-index: 10;
        }

        .card {
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 35px 65px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background: linear-gradient(135deg,     rgba(255, 55, 205, 0.9), rgba(111, 66, 193, 0.9));
            backdrop-filter: blur(10px);
            border: none;
            position: relative;
            overflow: hidden;
        }

        .card-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: shimmer 4s linear infinite;
        }

        @keyframes shimmer {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .badge {
            background: linear-gradient(45deg, #17a2b8, #20c997);
            animation: badgeGlow 3s ease-in-out infinite alternate;
            transition: transform 0.2s ease;
        }

        .badge:hover {
            transform: scale(1.1);
        }

        @keyframes badgeGlow {
            from { box-shadow: 0 0 5px rgba(23, 162, 184, 0.3); }
            to { box-shadow: 0 0 20px rgba(23, 162, 184, 0.6); }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .particle {
                display: none;
            }
            .geometric-shapes .shape {
                opacity: 0.05;
            }
        }

        /* Loading animation for page */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 1;
            transition: opacity 0.5s ease;
        }

        .loader {
            width: 50px;
            height: 50px;
            border: 5px solid rgba(255, 255, 255, 0.3);
            border-top: 5px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
    </style>
</head>
<body>
    <!-- Page Loader -->
    <div class="page-loader" id="pageLoader">
        <div class="loader"></div>
    </div>

    <!-- Floating Particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Geometric Shapes -->
    <div class="geometric-shapes">
        <div class="shape triangle" style="top: 10%; left: 5%;"></div>
        <div class="shape square" style="top: 20%; right: 10%;"></div>
        <div class="shape circle" style="top: 50%; left: 3%;"></div>
        <div class="shape triangle" style="bottom: 30%; right: 5%;"></div>
        <div class="shape square" style="bottom: 15%; left: 8%;"></div>
        <div class="shape circle" style="top: 30%; right: 20%;"></div>
    </div>

    <!-- Waves -->
    <div class="waves"></div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-lg border-0">
                    <div class="card-header text-white text-center">
                        <h3>Profil Pegawai</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="mb-3 text-center">{{ $name ?? 'John Doe' }}</h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item"><strong>Usia:</strong> {{ $my_age ?? '25' }} tahun</li>
                            <li class="list-group-item"><strong>Semester Saat Ini:</strong> {{ $current_semester ?? '6' }}</li>
                            <li class="list-group-item"><strong>Info Semester:</strong> {{ $info_semester ?? 'Semester Akhir' }}</li>
                            <li class="list-group-item"><strong>Waktu Tersisa untuk Studi:</strong> {{ $time_to_study_left ?? '180' }} hari</li>
                            <li class="list-group-item"><strong>Tanggal Harus Wisuda:</strong> {{ $tgl_harus_wisuda ?? '15 Jul 2024' }}</li>
                            <li class="list-group-item"><strong>Tujuan Masa Depan:</strong> {{ $future_goal ?? 'Menjadi Software Engineer' }}</li>
                        </ul>
                        <h5 class="mt-4">Hobi:</h5>
                        <div class="mb-2">
                            @if(isset($hobbies))
                                @foreach($hobbies as $hobi)
                                    <span class="badge bg-info text-dark me-1 mb-1">{{ $hobi }}</span>
                                @endforeach
                            @else
                                <span class="badge bg-info text-dark me-1 mb-1">Programming</span>
                                <span class="badge bg-info text-dark me-1 mb-1">Reading</span>
                                <span class="badge bg-info text-dark me-1 mb-1">Music</span>
                                <span class="badge bg-info text-dark me-1 mb-1">Gaming</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Hide page loader after everything is loaded
        window.addEventListener('load', function() {
            const loader = document.getElementById('pageLoader');
            setTimeout(() => {
                loader.style.opacity = '0';
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500);
            }, 1000);
        });

        // Add mouse movement parallax effect
        document.addEventListener('mousemove', function(e) {
            const mouseX = e.clientX;
            const mouseY = e.clientY;
            const centerX = window.innerWidth / 2;
            const centerY = window.innerHeight / 2;

            // Calculate parallax offset
            const offsetX = (mouseX - centerX) * 0.01;
            const offsetY = (mouseY - centerY) * 0.01;

            // Apply parallax to shapes
            const shapes = document.querySelectorAll('.shape');
            shapes.forEach((shape, index) => {
                const speed = (index + 1) * 0.5;
                shape.style.transform = `translate(${offsetX * speed}px, ${offsetY * speed}px)`;
            });

            // Apply parallax to particles
            const particles = document.querySelectorAll('.particle');
            particles.forEach((particle, index) => {
                const speed = (index + 1) * 0.2;
                particle.style.transform += ` translate(${offsetX * speed}px, ${offsetY * speed}px)`;
            });
        });

        // Add scroll effect
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;

            const shapes = document.querySelector('.geometric-shapes');
            if (shapes) {
                shapes.style.transform = `translateY(${rate}px)`;
            }
        });

        // Random movement for particles
        setInterval(function() {
            const particles = document.querySelectorAll('.particle');
            particles.forEach(particle => {
                const randomX = Math.random() * 100;
                particle.style.left = randomX + '%';
            });
        }, 3000);

        // Dynamic color changes
        let colorIndex = 0;
        const colors = [
            'linear-gradient(45deg, #667eea, #764ba2, #f093fb, #f5576c)',
            'linear-gradient(45deg, #4facfe, #00f2fe, #43e97b, #38f9d7)',
            'linear-gradient(45deg, #fa709a, #fee140, #ff9a9e, #fecfef)',
            'linear-gradient(45deg, #a8edea, #fed6e3, #d299c2, #fef9d7)'
        ];

        setInterval(function() {
            colorIndex = (colorIndex + 1) % colors.length;
            document.body.style.background = colors[colorIndex];
            document.body.style.backgroundSize = '400% 400%';
        }, 10000);

        // Card entrance animation
        document.addEventListener('DOMContentLoaded', function() {
            const card = document.querySelector('.card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(50px)';

            setTimeout(() => {
                card.style.transition = 'opacity 1s ease, transform 1s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 1500);
        });
    </script>
</body>
</html>
