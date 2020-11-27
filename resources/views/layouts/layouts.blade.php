<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>
    <nav class="p-4 bg-gray-700 w-full flex items-center justify-between mb-6">
        <ul class="flex items-center">
            <li class="bg-white py-1 px-6 mx-1 rounded">
                <a href="{{ route('home') }}" class="text-gray-700 font-bold">
                    Home
                </a>
            </li>
            <li class="bg-white py-1 px-6 mx-1 rounded">
                <a href="" class="text-gray-700 font-bold">
                    Post
                </a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li class="bg-white py-1 px-6 mx-1 rounded">
                <a href="" class="text-gray-700 font-bold">
                Kenedi FullStack Education
                </a>
            </li>
            @auth
            <li class="bg-white py-1 px-6 mx-1 rounded">
                <a href="{{ route('logout') }}" class="text-gray-700 font-bold">
                    Logout
                </a>
            </li>
            @endauth
            @guest
            <li class="bg-white py-1 px-6 mx-1 rounded">
                <a href="{{ route('login') }}" class="text-gray-700 font-bold">
                    Login
                </a>
            </li>
            <li class="bg-white py-1 px-6 mx-1 rounded">
                <a href="{{ route('register') }}" class="text-gray-700 font-bold">
                    Register
                </a>
            </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>