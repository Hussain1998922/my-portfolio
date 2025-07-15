<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hussain | Web Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.85)),
                        url('https://images.unsplash.com/photo-1498050108023-c5249f4df085') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .section-title {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #f8f9fa;
        }

        .btn-custom {
            padding: 12px 28px;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
        }

        .btn-custom-primary {
            background-color: #0d6efd;
            color: white;
        }

        .btn-custom-primary:hover {
            background-color: #0b5ed7;
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(13, 110, 253, 0.6);
        }

        .btn-custom-outline {
            background: transparent;
            color: #0d6efd;
            border: 2px solid #0d6efd;
        }

        .btn-custom-outline:hover {
            background-color: #0d6efd;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 0 16px rgba(13, 110, 253, 0.4);
        }

        .img-hover-zoom {
            transition: transform 0.4s ease, box-shadow 0.3s ease;
        }

        .img-hover-zoom:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        .skill-badge {
            background: #ffffff;
            color: #0d6efd;
            font-weight: 600;
            padding: 10px 16px;
            border-radius: 30px;
            box-shadow: 0 2px 10px rgba(0, 123, 255, 0.15);
            transition: transform 0.3s ease;
        }

        .skill-badge:hover {
            transform: scale(1.05);
        }

        footer {
            background: #111;
            color: #ccc;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Hussain</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero -->
<section id="home" class="d-flex align-items-center text-center" style="min-height: 90vh;">
    <div class="container" data-aos="fade-up">
        <h1 class="display-4 fw-bold">Hi, I'm Hussain</h1>
        <p class="lead">Full-Stack Web Developer | Laravel & PHP Specialist</p>
        <a href="#portfolio" class="btn btn-custom btn-custom-primary">View My Projects</a>
    </div>
</section>

<!-- About -->
<section id="about" class="py-5">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">About Me</h2>
        <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-right">
                <p>Hello! I'm Hussain Majeed, a passionate and detail-oriented web developer with experience in Laravel, PHP, MySQL, and JavaScript. I love creating responsive, user-friendly, and efficient applications that solve real-world problems.</p>
                <p>I’m always eager to learn and build innovative solutions. Let's collaborate and bring your ideas to life.</p>
                <a href="{{ route('cv') }}" class="btn btn-custom btn-custom-outline me-2">View My CV</a>
                <a href="#contact" class="btn btn-custom btn-custom-primary">Hire Me</a>
            </div>
            <div class="col-md-6 text-center" data-aos="zoom-in">
                <img src="{{ asset('images/hussain.jpg.jpg') }}" class="img-fluid rounded shadow img-hover-zoom" alt="Hussain Majeed" style="max-height: 350px; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Portfolio -->
<section id="portfolio" class="py-5 bg-dark text-white">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">My Projects</h2>
        <div class="row">
            @php
                $projects = [
                    [
                        'title' => 'School Management System',
                        'description' => 'A Laravel-based management system for Smart School Chunian Campus with user roles and dynamic content.',
                        'image' => 'https://picsum.photos/id/1011/400/250',
                        'code_link' => 'https://github.com/yourusername/school-management-system',
                        'demo_link' => 'https://school-demo.example.com'
                    ],
                    [
                        'title' => 'Personal Portfolio',
                        'description' => 'My personal website showcasing my web development work and skills. Built with Laravel, Bootstrap 5 and AOS.',
                        'image' => 'https://picsum.photos/id/1015/400/250',
                        'code_link' => 'https://github.com/yourusername/portfolio-site',
                        'demo_link' => 'https://yourportfolio.com'
                    ],
                    [
                        'title' => 'E-Commerce Platform',
                        'description' => 'A basic Laravel e-commerce site with shopping cart, product catalog, and admin dashboard.',
                        'image' => 'https://picsum.photos/id/1025/400/250',
                        'code_link' => 'https://github.com/yourusername/laravel-ecommerce',
                        'demo_link' => 'https://shop-demo.example.com'
                    ]
                ];
            @endphp

            @foreach($projects as $project)
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project['title'] }}</h5>
                            <p class="card-text">{{ $project['description'] }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ $project['code_link'] }}" target="_blank" class="btn btn-custom btn-custom-outline btn-sm">View Code</a>
                                <a href="{{ $project['demo_link'] }}" target="_blank" class="btn btn-custom btn-custom-primary btn-sm">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Skills -->
<section id="skills" class="py-5">
    <div class="container text-center">
        <h2 class="section-title" data-aos="fade-up">Skills</h2>
        <div class="row justify-content-center">
            @php
                $skills = ['Laravel', 'PHP', 'MySQL', 'JavaScript', 'Bootstrap', 'Git', 'REST API'];
            @endphp
            @foreach($skills as $index => $skill)
                <div class="col-6 col-sm-4 col-md-3 mb-3" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="skill-badge">{{ $skill }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h2 class="section-title" data-aos="fade-up">Contact Me</h2>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4" data-aos="fade-right">
                <div class="bg-white text-dark p-4 rounded shadow-sm">
                    <h5 class="mb-2">📞 Phone</h5>
                    <p><a href="tel:+923180041018" class="text-decoration-none text-primary">+92 318 0041018</a></p>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-left">
                <div class="bg-white text-dark p-4 rounded shadow-sm">
                    <h5 class="mb-2">📧 Email</h5>
                    <p><a href="mailto:hussainmajeed119@gmail.com" class="text-decoration-none text-primary">hussainmajeed119@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center py-4">
    <div class="container">
        &copy; {{ date('Y') }} Hussain Majeed. All rights reserved.
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });

    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");
    window.addEventListener("scroll", () => {
        let current = "";
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 90;
            if (scrollY >= sectionTop) {
                current = section.getAttribute("id");
            }
        });
        navLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href") === `#${current}`) {
                link.classList.add("active");
            }
        });
    });
</script>

</body>
</html>
