<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/scss/main/index.scss', 'resources/js/main/sliders.js', 'resources/js/main/modals.js', 'resources/js/main/utils.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/product/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MaxStar</title>
</head>
<body>
    <header class="header">

    </header>
    <main class="main">
        @yield('content')
    </main>
    
    <footer class="footer">

    </footer>
<script src="/resources/js/main/index.js"></script>
</body>
</html>