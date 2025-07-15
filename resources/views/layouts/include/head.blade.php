<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Hussain | Web Developer')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body {
            scroll-behavior: smooth;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('https://picsum.photos/1600/900') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            z-index: -1;
        }

        .btn-custom {
            padding: 12px 28px;
            font-weight: 500;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
        }

        .btn-custom-primary {
            background-color: #0d6efd;
            color: white;
            border: none;
        }

        .btn-custom-primary:hover {
            background-color: #0b5ed7;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.4);
        }

        .btn-custom-outline {
            background-color: transparent;
            border: 2px solid #0d6efd;
            color: #0d6efd;
        }

        .btn-custom-outline:hover {
            background-color: #0d6efd;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
        }

        .btn-custom-success {
            background-color: #198754;
            color: white;
            border: none;
        }

        .btn-custom-success:hover {
            background-color: #157347;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(25, 135, 84, 0.4);
        }

        .img-hover-zoom {
            transition: transform 0.4s ease, box-shadow 0.3s ease;
        }

        .img-hover-zoom:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
    </style>

    @stack('styles')
</head>