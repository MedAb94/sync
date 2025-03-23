<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ session('direction', 'ltr') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title', config('app.name', 'Laravel'))
    </title>

    {{--    favicon--}}
    <link rel="icon" href="/assets/media/favicon.png" type="image/x-icon"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Flag Icon CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                SYNC CO
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link scroll-link" href="#home"
                                            data-target="home">{{ __('navbar.home') }}</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#solutions"
                                            data-target="solutions">{{ __('navbar.solutions') }}</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#services"
                                            data-target="services">{{ __('navbar.services') }}</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#contact"
                                            data-target="contact">{{ __('navbar.contact') }}</a></li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Language Switcher -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLangDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            🌍 {{ strtoupper(app()->getLocale()) }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarLangDropdown">
                            <li><a class="dropdown-item" href="{{ route('change.lang', 'ar') }}"><span
                                        class="fi fi-mr"></span></span> العربية</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('change.lang', 'en') }}"><span
                                        class="fi fi-us"></span> English</a></li>
                            <li><a class="dropdown-item" href="{{ route('change.lang', 'fr') }}"><span
                                        class="fi fi-fr"></span> Français</a></li>

                        </ul>

                    </li>

                    <!-- Authentication Links -->
                    {{--                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('auth.login') }}</a></li>--}}
                    {{--                    <li class="nav-item"><a class="nav-link"--}}
                    {{--                                            href="{{ route('register') }}">{{ __('auth.register') }}</a></li>--}}
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
        <a href="https://wa.me/22243204060?text=Hello%2C%20I%20would%20like%20to%20inquire%20about%20your%20services."
           target="_blank" id="whatsapp-btn" class="floating-btn">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp">
        </a>


        <!-- Back to Top Button -->
        <button id="back-to-top" class="floating-btn hidden">
            ⬆️
        </button>
    </main>
    <!-- WhatsApp Button -->
    <!-- WhatsApp Button -->


</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".scroll-link").forEach(link => {
            link.addEventListener("click", function (e) {
                e.preventDefault();

                const targetId = this.getAttribute("data-target");
                const isHome = window.location.pathname === "/";

                if (isHome) {
                    // Scroll smoothly if already on the homepage
                    const targetSection = document.getElementById(targetId);
                    if (targetSection) {
                        window.scrollTo({
                            top: targetSection.offsetTop - 50, // Adjust for navbar height
                            behavior: "smooth"
                        });
                    }
                } else {
                    // Redirect to home with a hash to scroll after page loads
                    window.location.href = `/${targetId ? '#' + targetId : ''}`;
                }
            });
        });

        // Scroll to the correct section after a redirect
        if (window.location.hash) {
            const targetSection = document.querySelector(window.location.hash);
            if (targetSection) {
                setTimeout(() => {
                    window.scrollTo({
                        top: targetSection.offsetTop - 50,
                        behavior: "smooth"
                    });
                }, 500);
            }
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        let successAlert = document.getElementById("success-alert");
        if (successAlert) {
            setTimeout(() => {
                successAlert.style.transition = "opacity 0.5s";
                successAlert.style.opacity = "0";
                setTimeout(() => successAlert.remove(), 500);
            }, 5000); // Hide after 5 seconds
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        let backToTop = document.getElementById("back-to-top");

        // Show the button when scrolling down
        window.addEventListener("scroll", function () {
            if (window.scrollY > 200) {
                backToTop.classList.add("show");
            } else {
                backToTop.classList.remove("show");
            }
        });

        // Scroll to top when button is clicked
        backToTop.addEventListener("click", function () {
            window.scrollTo({top: 0, behavior: "smooth"});
        });
    });

</script>

</body>
<footer class="bg-dark text-light py-4">
    <div class="container text-center">
        <p class="mb-0">&copy; {{ date('Y') }} Sync Co. All Rights Reserved.</p>
        <p class="mb-0">Designed with ❤️ by <strong>Sync Co</strong> Team</p>
    </div>
</footer>
</html>
