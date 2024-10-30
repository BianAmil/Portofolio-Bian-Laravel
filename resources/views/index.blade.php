<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bits - Wear. Clean. Repeat.</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-sans">
    <!-- Header -->
    <header class="flex justify-between items-center px-8 py-4">
        <div class="text-4xl font-bold">BITS</div>
        <nav class="space-x-8 text-lg">
            <a href="#" class="hover:text-gray-600">NEW</a>
            <a href="#" class="hover:text-gray-600">CATEGORY</a>
            <a href="{{ route('about') }}"  class="hover:text-gray-600">ABOUT</a>
            <a href="{{ route('login') }}" class="hover:text-gray-600">LOGIN</a>
        </nav>
        <div>
            <input type="text" placeholder="Search" class="border rounded-lg px-4 py-2" />
        </div>
    </header>

    <!-- Main Section -->
    <section class="flex items-center justify-between px-8 py-16">
        <div class="w-1/2">
            <h1 class="text-6xl font-bold leading-tight">WEAR. CLEAN. REPEAT.</h1>
            <p class="mt-4 text-2xl">Discover your perfect fit.</p>
            
        </div>
        <div class="w-1/2">
            <img src="images/v1_37.png" alt="Sweater" class="object-cover rounded-xl" />
        </div>
    </section>

    <!-- Product Section -->
    <section class="px-8 py-8">
        <h2 class="text-xl font-bold mb-4">Discover more our Product</h2>
        <div class="flex space-x-6">
            <!-- Product 1 -->
            <div class="w-1/3">
                <img src="images/v1_77.png" alt="Product 1" class="rounded-xl" />
            </div>
            <!-- Product 2 -->
            <div class="w-1/3">
                <img src="images/v1_78.png" alt="Product 2" class="rounded-xl" />
            </div>
            <!-- Product 3 -->
            <div class="w-1/3">
                <img src="images/v1_82.png" alt="Product 3" class="rounded-xl" />
            </div>
        </div>
    </section>
</body>
</html>
