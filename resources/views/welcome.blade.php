<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Welcome to My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body, html {
            height: 100%;
            overflow: hidden;
        }

        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            background-size: 600% 600%;
            animation: gradientShift 15s ease infinite;
            z-index: -2;
        }

        .blobs {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .blob {
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            filter: blur(100px);
            animation: moveBlobs 20s linear infinite;
        }

        .blob:nth-child(1) { top: 10%; left: 15%; animation-delay: 0s; }
        .blob:nth-child(2) { top: 60%; left: 70%; animation-delay: 5s; }
        .blob:nth-child(3) { top: 30%; left: 50%; animation-delay: 10s; }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes moveBlobs {
            0% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(50px, -30px) scale(1.2); }
            100% { transform: translate(0, 0) scale(1); }
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
            color: white;
            padding: 20px;
            animation: fadeIn 3s ease-in-out;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            padding: 12px 30px;
            font-size: 1rem;
            color: white;
            background-color: rgba(255, 255, 255, 0.2);
            border: 2px solid white;
            border-radius: 30px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: white;
            color: #2c5364;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="background"></div>

    <div class="blobs">
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
    </div>

    <div class="content">
        <div>
            <h1>Welcome to My Portfolio</h1>
            <p>Explore my work, skills, and experience</p>
            <a href="{{ url('/index') }}" class="btn">Enter Home Page</a>
        </div>
    </div>



</body>
</html>
