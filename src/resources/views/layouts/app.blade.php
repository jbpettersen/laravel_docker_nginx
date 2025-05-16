<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modulvelger</title> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
    @livewireStyles
</head>
<body class="font-sans antialiased">
    @yield('content')
    @livewireScripts
</body>
</html>
