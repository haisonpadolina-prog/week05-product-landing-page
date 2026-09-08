<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Daily Drip Café | Fresh Brews. Better Days. — Anabu, Imus')</title>
    <meta
        name="description"
        content="@yield('description', 'Daily Drip Café in Anabu, Imus, Cavite. Premium coffee, frappes, matcha, and fruit tea for your everyday moments. Starting at ₱67.')"
    >

    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
