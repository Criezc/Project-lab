<html>

<head>
    @yield('scripts')
    @vite('resources/css/app.css')
</head>

<body class="bg-secondaryBlack min-h-screen w-full">
    <x-navbar />
    <div class="container mx-auto px-8 py-5 min-h-screen w-full">
        @yield('content')
    </div>
    <x-footer />
</body>

</html>
