<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--  Meta  --}}
    <meta charset="utf-8">
    <meta name="api-host" content="{API_HOST}">

    <title>Website | Uit Best</title>

    <!-- Beschrijving van de pagina -->
    <meta name="title" content="Uit Best">
    <meta name="description" content="Uit Best biedt unieke en creatieve oplossingen voor jouw bedrijf. Ontdek onze diensten in webdesign, grafisch ontwerp, en digitale marketing. Laat je inspireren door onze projecten en ontdek wat wij voor jouw bedrijf kunnen betekenen.">

    <!-- Trefwoorden voor de pagina -->
    <meta name="keywords" content="Uit Best, Creatieve Oplossingen, Webdesign Uit Best, Webdesign Best, Website, Grafisch Ontwerp, Digitale Marketing, Bedrijfsontwikkeling, Innovatie, Website Uit Best, Website Best, Best Website">

    <!-- Meta tag voor responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark" />

    <!-- Open Graph / Facebook Meta Tags -->
    <meta property="og:site_name" content="Uit Best" />
    <meta property="og:title" content="Website | Uit Best">
    <meta property="og:description" content="Uit Best biedt unieke en creatieve oplossingen voor jouw bedrijf. Ontdek onze diensten in webdesign, grafisch ontwerp, en digitale marketing. Laat je inspireren door onze projecten en ontdek wat wij voor jouw bedrijf kunnen betekenen.">
    <meta property="og:image" content="https://website.uit.best/img/UitBestCutOut.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://website.uit.best">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Website | Uit Best">
    <meta name="twitter:description" content="Uit Best biedt unieke en creatieve oplossingen voor jouw bedrijf. Ontdek onze diensten in webdesign, grafisch ontwerp, en digitale marketing. Laat je inspireren door onze projecten en ontdek wat wij voor jouw bedrijf kunnen betekenen.">
    <meta name="twitter:image" content="https://website.uit.best/img/UitBestCutOut.png">
    <meta name="twitter:maxage" content="86400" />

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
