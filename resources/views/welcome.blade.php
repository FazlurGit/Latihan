<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartridge Kings</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Header -->
<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <div class="text-3xl font-bold text-gray-800">
            <a href="#" class="flex items-center space-x-2">
                <img src="/path-to-logo.png" alt="Logo" class="h-8">
                <span>CARTRIDGE KINGS</span>
            </a>
        </div>
        <nav class="space-x-4">
            <a href="#" class=" text-gray-600 hover:text-gray-800">HOME</a>
            <a href="#" class="text-gray-600 hover:text-gray-800">INK CARTRIDGES</a>
            <a href="#" class="text-gray-600 hover:text-gray-800">TONER CARTRIDGES</a>
            <a href="#" class="text-gray-600 hover:text-gray-800">CONTACT US</a>
            <a href="#" class="text-gray-600 hover:text-gray-800">LOGIN / REGISTER</a>
        </nav>
        <div class="flex items-center space-x-4">
            <input type="text" placeholder="Search" class="border rounded-lg px-4 py-2 text-sm">
            <div class="relative">
                <a href="#" class="text-gray-600 hover:text-gray-800">
                    <span class="font-semibold">CART (1)</span>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="bg-cover bg-center py-24" style="background-image: url('/path-to-background.jpg');">
    <div class="container mx-auto text-center">
        <h1 class="text-xs font-bold text-white mb-6">FIND THE RIGHT CARTRIDGES FOR YOUR PRINTER</h1>
        <div class="bg-white p-4 rounded-lg shadow-lg inline-block space-y-4">
            <div class="grid grid-cols-3 gap-4">
                <select class="border border-gray-300 rounded-lg px-4 py-2">
                    <option>1. Printer Brand</option>
                    <!-- Option Printer Brands -->
                </select>
                <select class="border border-gray-300 rounded-lg px-4 py-2">
                    <option>2. Printer Series</option>
                    <!-- Option Printer Series -->
                </select>
                <select class="border border-gray-300 rounded-lg px-4 py-2">
                    <option>3. Printer Model</option>
                    <!-- Option Printer Models -->
                </select>
            </div>
            <button class="bg-orange-500 text-white px-8 py-2 rounded-lg font-semibold">FIND CARTRIDGES</button>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="container mx-auto my-12">
    <h2 class="text-3xl font-bold text-center mb-8">FEATURED PRODUCTS</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Product 1 -->
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <img src="/path-to-product-1.jpg" alt="HP 62 Black Ink" class="h-48 w-full object-cover mb-4">
            <h3 class="text-lg font-semibold mb-2">HP 62 Black Ink Cartridge</h3>
            <p class="text-gray-500">(HP2P04AE)</p>
            <div class="text-2xl font-bold text-gray-900 mb-4">$9.49</div>
            <button class="bg-orange-500 text-white px-6 py-2 rounded-lg font-semibold">ADD TO CART</button>
        </div>
        <!-- Product 2 -->
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <img src="/path-to-product-2.jpg" alt="Canon MF-3110 Toner" class="h-48 w-full object-cover mb-4">
            <h3 class="text-lg font-semibold mb-2">Canon MF-3110 Toner</h3>
            <p class="text-gray-500">(2P04AE)</p>
            <div class="text-2xl font-bold text-gray-900 mb-4">$36.45</div>
            <button class="bg-orange-500 text-white px-6 py-2 rounded-lg font-semibold">ADD TO CART</button>
        </div>
        <!-- Product 3 -->
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <img src="/path-to-product-3.jpg" alt="HP 62 Black Ink" class="h-48 w-full object-cover mb-4">
            <h3 class="text-lg font-semibold mb-2">HP 62 Black Ink Cartridge</h3>
            <p class="text-gray-500">(HP2P04AE)</p>
            <div class="text-2xl font-bold text-gray-900 mb-4">$5.99</div>
            <button class="bg-orange-500 text-white px-6 py-2 rounded-lg font-semibold">ADD TO CART</button>
        </div>
    </div>
</section>

</body>
</html>
