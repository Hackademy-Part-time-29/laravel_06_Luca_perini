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

{{$slot}}

<x-footer></x-footer>
</body>
</html>