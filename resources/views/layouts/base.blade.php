<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ url('styles/bulma.min.css')  }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.2.95/css/materialdesignicons.min.css">
    @yield('styles')
</head>
<body>
    <div class="container mt-4 py-6 px-3">
        @yield('content')
    </div>
    @yield('scripts')
</body>
</html>
