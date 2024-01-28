<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- favicon -->
    <link rel="icon" href="/img/favicon.ico" sizes="16x16 24x24 32x32">
    <!-- /favicon -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>
    <!--inclusione assets con direttiva vite-->
    @vite('resources/js/app.js')
    <!--/inclusione assets con direttiva vite-->
</head>
<body>
    @include('shared.header')
    <main>
        @yield('main')
    </main>
    @include('shared.footer')

</body>
</html>