<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css','resources/css/app.js'])
</head>
<body>
    <header>
        <x-Navbar :title="$title" ></x-Navbar>
    </header>

    <section class="hero">
        <div class="head-container">
            <h1>Benvenuti nello Studio Legale</h1>
            <p>Il nostro team è qui per aiutarvi con le vostre questioni legali.</p>
        </div>
    </section>

<x-footer></x-footer>
</body>
</html>