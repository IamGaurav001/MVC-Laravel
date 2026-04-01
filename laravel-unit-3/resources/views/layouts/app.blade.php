<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <style>
        /* Thodi basic styling Navigation bar ke liye */
        nav {
            background-color: #333;
            padding: 15px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-size: 16px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
            color: #ddd;
        }
        .main-content {
            padding: 20px;
            min-height: 400px;
        }
        footer {
            text-align: center;
            background-color: #f8f9fa;
            padding: 20px 0;
            margin-top: 30px;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <!-- 1. Navigation Menu (Home, About, Profile, Login, Logout) -->
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/profile">Profile</a>
            <a href="/login">Login</a>
            <a href="/logout">Logout</a>
        </nav>
    </header>

    <!-- 2. Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- 3. Footer with Landscape Image -->
    <footer>
        <p><strong>Hi I am Footer</strong></p>
        <!-- Yaha width aur height set kar di hai. object-fit: cover image ko stretch hone se bachata hai -->
        <img src="{{ asset('images/img1.png') }}" alt="Footer Landscape Image" width="800" height="200" style="object-fit: cover; border-radius: 10px;">
    </footer>

</body>
</html>