<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safe Password Sharing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="{{ asset('js/tailwind.config.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body class="font-rubik bg-gradient-to-r from-violet-500 to-fuchsia-500">
    <header>
        <nav class=" p-3 ">
            <p class="font-bold text-3xl">Avionics International B.V.</p>
        </nav>
    </header>
    <main class="p-5">
        @yield('content')
    </main>
</body>
</html>