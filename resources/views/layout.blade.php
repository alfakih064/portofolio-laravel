<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Fakih Shah | UI/UX Designer</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    <header class="navbar">
        <div class="logo">Al Fakih Shah</div>
        <nav>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                <li><a href="{{ route('case-studies') }}">Case Studies</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
            </ul>
        </nav>
        <a href="#contact" class="btn talk-btn">Let's Talk</a>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 Al Fakih Shah. All Rights Reserved.</p>
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
