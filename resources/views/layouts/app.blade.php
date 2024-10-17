<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-[100vh] w-[100vw] bg-[#23243c] flex justify-center items-center  overflow-x-hidden">
        @yield('content')
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>