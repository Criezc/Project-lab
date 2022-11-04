<html>

<head>
    @yield('scripts')
    @vite('resources/css/app.css')
</head>

<body class="bg-black">
    <x-navbar />
    <div class="container mx-auto px-8 py-5 h-screen">
        @yield('content')
    </div>
    <x-footer />
</body>

</html>
