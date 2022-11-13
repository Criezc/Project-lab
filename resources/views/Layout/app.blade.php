<html>

<head>
    @yield('scripts')
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="bg-secondaryBlack min-h-screen w-full">
    <x-navbar />
    <div class="container mx-auto px-8 py-5 min-h-screen w-full">
        @yield('content')
    </div>
    <x-footer />
</body>

</html>
