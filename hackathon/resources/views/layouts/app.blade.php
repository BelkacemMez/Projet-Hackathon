<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <title>Generateur</title>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="#">Home</a>
        </nav>
    </div>

    <main class="py-4">
        @yield('content')
    </main>

</body>
</html>
