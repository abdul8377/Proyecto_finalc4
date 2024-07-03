<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0a0044 0%, #333333 50%, #ffffff 100%);
            background-size: 200% 200%;
            animation: gradientBackground 10s ease infinite;
            padding: 2rem;
        }

        @keyframes gradientBackground {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>
<body class="text-gray-100">
    <div>
        <div class="text-center mb-8 p-4 bg-white border-gray-300 rounded-lg shadow-md">
            <p class="font-bold">CATEGORIAS</p>
        </div>
        <div class="flex justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-20">
                @foreach ($categories as $category)
                <div class="bg-white shadow-md rounded-xl transition-transform transform hover:-translate-y-2 hover:shadow-lg w-72 mx-auto mt-8">
                    <div class="p-4">
                        <img src="https://img.freepik.com/fotos-premium/teclado-cerca-mouse-computadora-monitor-auriculares-mesa_94574-3093.jpg?w=1380" alt="{{ $category->name }}" class="w-full h-48 object-cover rounded-t-xl">
                        <h5 class="text-center mb-2 font-sans text-xl font-semibold leading-snug text-gray-900">
                            {{$category->name}}
                        </h5>
                    </div>
                    <div class="p-4 pt-0 text-center">
                        <a href="{{ route('products.byCategory', ['categoryId' => $category->id]) }}"
                           class="inline-block text-center font-sans font-bold uppercase transition-all duration-300 text-xs py-2 px-4 rounded-lg bg-blue-600 text-white shadow-md hover:bg-white hover:text-blue-600 hover:border hover:border-blue-600 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                            Read More
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center mt-8 p-4 bg-white border-gray-300 rounded-lg shadow-md">
            <p class="font-bold">PRODUCTOS EN OFERTA</p>
        </div>

<!--card oferta inicio-->
<div class="flex flex-wrap gap-4 justify-center mt-8">
    <!-- Card 1 -->
    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="p-6 rounded-t-lg" src="https://m.media-amazon.com/images/I/71QA954CY4L._AC_SY355_.jpg" alt="product image" />
        </a>
        <div class="px-4 pb-4">
            <a href="#">
                <h5 class="text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Maus Gamer con 16 RGB retroiluminados, batería recargable de metal, mecánico, ergonómico, impermeable, a prueba de polvo, extraíble, reposamuñecas para laptop, PC gamer</h5>
            </a>
            <div class="flex items-center mt-2 mb-4">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <!-- Aquí agregas los demás íconos de estrellas -->
                    <!-- ... -->
                </div>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-2">5.0</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-2xl font-bold text-gray-900 dark:text-white">$599</span>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>
    <!-- Card 2 -->
    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="p-6 rounded-t-lg" src="https://m.media-amazon.com/images/I/61Sc8DCAjdL._AC_SX522_.jpg" alt="product image" />
        </a>
        <div class="px-4 pb-4">
            <a href="#">
                <h5 class="text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Auriculares inalámbricos con 16 RGB retroiluminados, batería recargable de metal, mecánico, ergonómico, impermeable, a prueba de polvo, extraíble, reposamuñecas para laptop, PC gamer</h5>
            </a>
            <div class="flex items-center mt-2 mb-4">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <!-- Aquí agregas los demás íconos de estrellas -->
                    <!-- ... -->
                </div>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-2">5.0</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-2xl font-bold text-gray-900 dark:text-white">$599</span>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>
    <!-- Card 3 -->
    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="p-6 rounded-t-lg" src="https://m.media-amazon.com/images/I/81iqkzSxT3L._AC_SX522_.jpg" alt="product image" />
        </a>
        <div class="px-4 pb-4">
            <a href="#">
                <h5 class="text-lg font-semibold tracking-tight text-gray-900 dark:text-white">GRAN COMBO!!  Kit de auriculares inalámbricos con teclado y mouse para juegos con 16 RGB retroiluminados, batería recargable de metal, mecánico, ergonómico, impermeable, a prueba de polvo, extraíble, reposamuñecas para laptop, PC gamer (Rainbow RGB)</h5>
            </a>
            <div class="flex items-center mt-2 mb-4">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <!-- Aquí agregas los demás íconos de estrellas -->
                    <!-- ... -->
                </div>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-2">5.0</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-2xl font-bold text-gray-900 dark:text-white">$599</span>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>
</div>


<!--card oferta final-->
    </div>
</body>
</html>
