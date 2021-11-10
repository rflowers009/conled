<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name', 'The Constant-Ledger') }}</title>
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">

    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>