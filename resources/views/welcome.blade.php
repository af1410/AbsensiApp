<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | {{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #1e90ff, #87cefa);
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 20px 10px;
            position: relative;
            color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header img {
            width: 50px;
            height: 50px;
            margin-left: 10px;
        }

        .clock {
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            margin-right: 10px;
        }

        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 20px;
        }

        .content h1 {
            font-size: 3rem;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1.5s ease-in-out;
        }

        .content p {
            font-size: 1.2rem;
            color: #f0f8ff;
            margin-bottom: 30px;
            animation: fadeIn 2s ease-in-out;
        }

        .nav-links {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
            animation: fadeInUp 2.5s ease-in-out;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 12px 25px;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            background-color: rgba(255, 255, 255, 0.4);
            color: #1e90ff;
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 0.9rem;
            backdrop-filter: blur(10px);
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <script>
        function updateClock() {
            const clockElement = document.getElementById('clock');
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            clockElement.textContent = `${hours}:${minutes}:${seconds}`;
        }
        setInterval(updateClock, 1000);
        window.onload = updateClock;
    </script>
</head>

<body>
    <header>
        <img src="{{ asset('img/favicon.png') }}" alt="Logo">
        <div class="clock" id="clock"></div>
    </header>

    <div class="content">
        <h1>Hello, Welcome to Absensi App!</h1>
        <p>Pilih Login Sebagai:</p>

        <div class="nav-links">
            @auth('web')
            <a href="{{ url('/dashboard') }}">User Dashboard</a>
            @else
            <a href="{{ route('login') }}">Log in as User</a>
            @endauth

            @auth('admin')
            <a href="{{ url('/admin/dashboard') }}">Admin Dashboard</a>
            @else
            <a href="{{ route('admin.login') }}">Log in as Admin</a>
            @endauth

            @auth('hrd')
            <a href="{{ url('/hrd/dashboard') }}">HRD Dashboard</a>
            @else
            <a href="{{ route('hrd.login') }}">Log in as HRD</a>
            @endauth
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Absensi App. All rights reserved.</p>
    </footer>
</body>

</html>