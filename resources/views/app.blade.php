<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--  Meta  --}}
    <meta charset="utf-8">
    <meta name="api-host" content="{API_HOST}">

    <title>Uit Best | Web Development</title>

    <!-- Beschrijving van de pagina -->
    <meta name="description" content="Uit Best biedt unieke en creatieve oplossingen voor jouw bedrijf. Ontdek onze diensten in webdesign, grafisch ontwerp, en digitale marketing. Laat je inspireren door onze projecten en ontdek wat wij voor jouw bedrijf kunnen betekenen.">

    <!-- Trefwoorden voor de pagina -->
    <meta name="keywords" content="Uit Best, Creatieve Oplossingen, Webdesign, Grafisch Ontwerp, Digitale Marketing, Bedrijfsontwikkeling, Innovatie">

    <!-- Meta tag voor responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph / Facebook Meta Tags -->
    <meta property="og:title" content="Uit Best - Creatieve Oplossingen voor Jouw Bedrijf">
    <meta property="og:description" content="Ontdek unieke en creatieve oplossingen voor jouw bedrijf met Uit Best. Van webdesign tot digitale marketing, laat ons je helpen groeien.">
    <meta property="og:image" content="/img/YourBusinessImage.jpg">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://website.uit.best">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Uit Best - Creatieve Oplossingen voor Jouw Bedrijf">
    <meta name="twitter:description" content="Ontdek unieke en creatieve oplossingen voor jouw bedrijf met Uit Best. Van webdesign tot digitale marketing, laat ons je helpen groeien.">
    <meta name="twitter:image" content="/img/YourBusinessImage.jpg">

    {{--  Styles  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">

    <link rel="icon" href="/img/UitBestCutOut.png" />

    {{--  Scripts  --}}
    @vite('resources/css/app.css')

</head>
<body>
    <div id="app"></div>

    @vite('resources/js/app.js')
</body>
</html>
