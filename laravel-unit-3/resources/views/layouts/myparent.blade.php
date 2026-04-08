<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Layout')</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: linear-gradient(135deg, #1e1e2f, #2a2a40);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .navbar .logo {
            color: #fff;
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: #ccc;
            text-decoration: none;
            font-size: 16px;
            padding: 8px 14px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            background: #6c63ff;
            color: #fff;
            transform: translateY(-2px);
        }

        .nav-links a.active {
            background: #6c63ff;
            color: white;
        }

        .content {
            padding: 20px;
            min-height: 60vh;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">BJP - Washing Machine Yojana</div>
    <div class="nav-links">
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        <a href="/profile" class="{{ request()->is('profile') ? 'active' : '' }}">Profile</a>
    </div>
</div>

<div class="content">
    @yield('content')
</div>

<div class="footer">
    <p>Copyright &copy; 2024 Your Company Name</p>
</div>

</body>
</html>
