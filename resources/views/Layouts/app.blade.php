<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nvidia</title>
    @stack('styles')
</head>

<body class="body">
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    @stack('scripts')
</body>
</html>