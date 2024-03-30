<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="font-montserrat">

    <div class="bg-[url(https://images.squarespace-cdn.com/content/v1/596e17229f74561878f79e76/1580829390325-YDH10SF9EFN4E601M9QQ/taking-notes-and-working-on-laptop.jpg?format=2500w)] bg-cover h-[365px] bg-center w-full relative">
        <div class="bg-[#2e2e2e] absolute w-full h-full opacity-50"></div>
        <x-navbar />
        <h1 class="absolute left-1/2 top-2/3 transform -translate-x-1/2 -translate-y-1/2 text-[66px] leading-[1.13em] font-bold z-50 text-white">Blog</h1>
    </div>

    {{$slot}}

    <x-footer />

@livewireScripts
</body>
</html>
