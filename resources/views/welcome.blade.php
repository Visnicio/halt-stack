<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to HALT</title>

    {{-- HALT's dependencies --}}
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/htmx.js')}}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body class="bg-blue-950 bg-gradient-to-bl from-blue-950 to-purple-900 text-white min-h-screen flex flex-col justify-center items-center">
    <header class="font-bold text-2xl">Welcome to the HALT stack </header>
    <div>For the giga chads, no cringe bundlers here.</div>

    <div class="mt-10">Just import what you need.</div>
    <ul class="list-disc">
        <li>HTMX</li>
        <li>AlpineJS</li>
        <li>Laravel</li>
        <li>TailwindCSS</li>
    </ul>

    <button type="button" hx-get="/hello-world" class="mt-10 p-2 text-black rounded-lg bg-white hover:bg-gray-400">Click to change text via HTMX</button>
</body>
</html>
