<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
     <!-- Styles -->
     @livewireStyles
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body class="font-sans antialiased">

    <div class="sticky top-0 z-50">
        @livewire('navigation-livewire')
    </div>
    <!-- carrusell -->
    <div
    id="carouselExampleIndicators"
    class="relative mb-8"
    data-twe-carousel-init
    data-twe-ride="carousel"
    data-twe-interval="2000">
    <!--Carousel indicators-->
    <div
      class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
      data-twe-carousel-indicators>
      <button
        type="button"
        data-twe-target="#carouselExampleIndicators"
        data-twe-slide-to="0"
        data-twe-carousel-active
        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
        aria-current="true"
        aria-label="Slide 1"></button>
      <button
        type="button"
        data-twe-target="#carouselExampleIndicators"
        data-twe-slide-to="1"
        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
        aria-label="Slide 2"></button>
      <button
        type="button"
        data-twe-target="#carouselExampleIndicators"
        data-twe-slide-to="2"
        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
        aria-label="Slide 3"></button>
    </div>

    <!--Carousel items-->
    <div
      class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
      <!--First item-->
      <div
        class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-twe-carousel-item
        data-twe-carousel-active>
        <img
          src="https://www.profesionalreview.com/wp-content/uploads/2017/10/Razer-Cynosa-Chroma-y-Cynosa-Chroma-Pro.jpg"
          class="block w-full h-[500px] object-cover"
          alt="Wild Landscape" />
        <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 p-4 text-white text-center rounded-lg">
          <h2 class="text-2xl font-bold">TECLADO - Razer Cynosa Chroma</h2>
          <p>El teclado mecánico ideal para gamers con retroiluminación RGB.</p>
        </div>
      </div>
      <!--Second item-->
      <div
        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-twe-carousel-item>
        <img
          src="https://image.benq.com/is/image/benqco/S21-1200x600?$ResponsivePreset$"
          class="block w-full h-[500px] object-cover"
          alt="Camera" />
        <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 p-4 text-white text-center rounded-lg">
          <h2 class="text-2xl font-bold">MONITOR - Forza G5 gaming</h2>
          <p>Un monitor con excelente resulución para tus mejores sesiones de juego.</p>
        </div>
      </div>
      <!--Third item-->
      <div
        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
        data-twe-carousel-item>
        <img
          src="https://i.blogs.es/086109/mejores-auriculares-gaming-guia-de-compra/1366_2000.jpg"
          class="block w-full h-[500px] object-cover"
          alt="Exotic Fruits" />
        <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 p-4 text-white text-center rounded-lg">
          <h2 class="text-2xl font-bold">Auriculares Gaming - Nova Chaplin</h2>
          <p>Auriculares de alta calidad para una experiencia de juego inmersiva.</p>
        </div>
      </div>
    </div>

    <!--Carousel controls - prev item-->
    <button
      class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
      type="button"
      data-twe-target="#carouselExampleIndicators"
      data-twe-slide="prev">
      <span class="inline-block h-8 w-8">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
      </span>
      <span
        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
        >Previous</span>
    </button>
    <!--Carousel controls - next item-->
    <button
      class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
      type="button"
      data-twe-target="#carouselExampleIndicators"
      data-twe-slide="next">
      <span class="inline-block h-8 w-8">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
      </span>
      <span
        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
        >Next</span>
    </button>
  </div>


    <!-- fin carrusell -->
    <section
        class="relative bg-[url(https://img.freepik.com/foto-gratis/configuracion-juegos-computadora-silla_23-2149829122.jpg?w=1380&t=st=1719988290~exp=1719988890~hmac=7e78d36741ac5a346a1ede6089f25845edf6d8a26bf16abcb3387014652f7cb7)] bg-cover bg-center bg-no-repeat">
        <div
            class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-300 lg:items-center lg:px-8">
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
                    Let us find your

                    <strong class="block font-extrabold text-rose-500"> Forever Home. </strong>
                </h1>

                <p class="mt-4 max-w-lg text-white sm:text-xl/relaxed">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                    numquam ea!
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="#"
                        class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                        Get Started
                    </a>

                    <a href="#"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>
    @livewire('cardcategory-livewire')
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    @stack('modals')
    @livewireScripts

     <script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
    </body>

    </html>
