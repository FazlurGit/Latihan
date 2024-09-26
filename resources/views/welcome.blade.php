<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartridge Kings</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<!-- Header -->

<header class="bg-grey shadow">
    <div class="container px-4 py-4 flex justify-between items-center">
        <div class="text-xs font-bold text-gray-800">
            <a href="#" class="flex items-center space-x-2">
            </a>
        </div>
        <nav class="space-x-8">
            <a class="text-black-600 hover:text-black-800">Franchise Opportunities</a>
            <a class="text-black-600 hover:text-black-800">Help</a>
            <a class="text-black-600 hover:text-black-800">Feedback</a>
        </nav>
        <div class="flex items-center space-x-4">
            <div class="relative">
                <a href="#" class="text-gray-600 hover:text-gray-800">
                <a class="text-black-600 hover:text-black-800">hello@email.com</a>
                <a class="text-black-600 hover:text-black-800 ml-4">0800 022 022</a>
                </nav>
                </a>
            </div>
        </div>
    </div>
</header>

<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6 flex justify-center items-center">
        <!-- Logo and Title -->
        <div class="text-5xl font-bold text-gray-800 mr-24"> <!-- Tambah margin-right agar ada jarak lebih lebar -->
            <a href="#" class="flex items-center space-x-2">
                <img src="/path-to-logo.png" class="h-8">
                <span>CARTRIDGE KINGS</span>
            </a>
        </div>

        <!-- Search bar -->
        <div class="flex items-center ml-24"> <!-- Tambah margin-left untuk memberi jarak lebih luas -->
            <input type="text" placeholder="Search" class="border rounded-lg px-4 py-2 text-sm">
        </div>

        <!-- Cart -->
        <div class="relative ml-4"> <!-- Sesuaikan margin-left untuk elemen Cart -->
            <button class="bg-orange-500 text-white px-8 py-2 rounded-lg font-semibold">CART (1)</button>
        </div>
    </div>
</header>


<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <div class="text-3xl font-bold text-gray-800">
            <a href="#" class="flex items-center space-x-2">
            </a>
        </div>
        <nav class="bg-blue-500 flex space-x-9">
            <a href="#" class="text-white hover:bg-blue-600 px-8 py-3">HOME</a>
            <a href="#" class="text-white hover:bg-blue-600 px-8 py-3">INK CARTRIDGES</a>
            <a href="#" class="text-white hover:bg-blue-600 px-8 py-3">TONER CARTRIDGES</a>
            <a href="#" class="text-white hover:bg-blue-600 px-8 py-3">CONTACT US</a>
            <a href="#" class="text-white hover:bg-blue-600 px-8 py-3">LOGIN / REGISTER</a>
        </nav>
        <div class="flex items-center space-x-4">

                </a>
            </div>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="bg-cover bg-center py-24" style="background-image: url('/path-to-background.jpg');">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold text-white mb-6 drop-shadow-xl">FIND THE RIGHT CARTRIDGES FOR YOUR PRINTER</h1>
        <div class="bg-white p-10 rounded-lg shadow-lg inline-block space-y-4">
            <div class="grid grid-cols-4 gap-5">
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
                <button class="bg-orange-500 text-white px-6 py-2 rounded-lg font-semibold">FIND CARTRIDGES</button>
            </div>
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

<body class="bg-gray-100"></body>

</html>
