@extends('layouts.tienda')

@section('title','Inicio - RECORD Perú')
@section('content')
<section class="bg-gray-100 py-12">
  <div class="max-w-7xl mx-auto px-4">
    <h1 class="text-3xl font-extrabold text-gray-800 mb-4">
      Bienvenido a RECORD Perú
    </h1>
    <p class="text-gray-600 text-lg mb-8">
      Explora nuestros productos destacados y aprovecha las mejores ofertas en línea.
    </p>
  {{-- Sección de beneficios --}}
    <section class="bg-white border-y py-6">
      <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-8">

        {{-- Item 1 --}}
        <div class="flex items-center gap-4 text-center md:text-left">
          {{-- Icono camión --}}
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="#E11D48" class="w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 3h13v13H3V3Zm13 5h5l-2 3h-3V8Zm2 7a2 2 0 1 1-4 0m6 0a2 2 0 1 1-4 0m-8 0a2 2 0 1 1-4 0" />
          </svg>

          <div>
            <h3 class="font-semibold text-gray-900">Delivery Gratis</h3>
            <p class="text-sm text-gray-500">Por compras sobre S/ 499</p>
          </div>
        </div>

        {{-- Separador vertical --}}
        <div class="hidden md:block w-px h-10 bg-gray-300"></div>

        {{-- Item 2 --}}
        <div class="flex items-center gap-4 text-center md:text-left">
          {{-- Icono tienda --}}
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="#E11D48" class="w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 7h16l-1 13H5L4 7Zm1-4h14v3H5V3Zm5 8v6m4-6v6" />
          </svg>

          <div>
            <h3 class="font-semibold text-gray-900">Tiendas Record</h3>
            <p class="text-sm text-gray-500">Ubícanos en nuestras sedes</p>
          </div>
        </div>

        {{-- Separador vertical --}}
        <div class="hidden md:block w-px h-10 bg-gray-300"></div>

        {{-- Item 3 --}}
        <div class="flex items-center gap-4 text-center md:text-left">
          {{-- Icono teléfono --}}
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="#E11D48" class="w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2 3h5l2 5-2.5 1.5A11 11 0 0 0 14.5 21L16 18l5 2v5a2 2 0 0 1-2 2A19 19 0 0 1 2 5a2 2 0 0 1 2-2Z" />
          </svg>
          <div>
            <h3 class="font-semibold text-gray-900">Servicio al Cliente</h3>
            <p class="text-sm text-gray-500">(511) 618-4100</p>
          </div>
        </div>
      </div>
    </section>
    {{-- Sección de categorías destacadas --}}
    <section class="bg-gray-100 py-12">
      <div class="max-w-7xl mx-auto px-6 text-center">

        {{-- Título principal --}}
        <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-2">
          Categorías
        </h2>
        <p class="text-gray-600 mb-8">
          Encuentra los mejores electrodomésticos destacados de nuestra tienda.
        </p>

        {{-- Rejilla de categorías --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          
          {{-- Menaje --}}
          <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer">
            <img src="{{ Vite::asset('resources/images/menaje.jpg') }}" 
                alt="Menaje" class="w-full h-56 object-cover">
            <div class="py-4">
              <h3 class="text-lg font-bold text-gray-800 uppercase tracking-wide">Menaje</h3>
            </div>
          </div>

          {{-- Electrodomésticos --}}
          <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer">
            <img src="{{ Vite::asset('resources/images/electrodomestico.jpg') }}" 
                alt="Electrodomésticos" class="w-full h-56 object-cover">
            <div class="py-4">
              <h3 class="text-lg font-bold text-gray-800 uppercase tracking-wide">Electrodomésticos</h3>
            </div>
          </div>

          {{-- Lavaderos --}}
          <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer">
            <img src="{{ Vite::asset('resources/images/lavadero.jpg') }}" 
                alt="Lavaderos" class="w-full h-56 object-cover">
            <div class="py-4">
              <h3 class="text-lg font-bold text-gray-800 uppercase tracking-wide">Lavaderos</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-42">
      <!--<div class="rounded-xl overflow-hidden shadow-lg">-->
          <video 
            src="{{ Vite::asset('resources/videos/presentacion.mp4') }}"  
            autoplay 
            muted 
            loop 
            class="w-full h-auto">
          </video>
        </div>
      </div>
    </section>
    {{-- Sección de Productos Destacados --}}
    <section class="bg-gradient-to-b from-[#f5e7dc] to-[#f8f5f2] py-14">
      <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-10">
          Productos Destacados
        </h2>

        {{-- Swiper container --}}
        <div class="swiper mySwiper pb-10">
          <div class="swiper-wrapper">

            {{-- Producto 1 --}}
            <div class="swiper-slide">
              <div class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition">
                <div class="relative">
                  <img src="{{ Vite::asset('resources/images/prod-ollas-1.png') }}" alt="Ollas" class="rounded-xl mx-auto">
                  <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">
                    26%
                  </span>
                </div>
                <h3 class="text-sm font-semibold text-gray-800 mt-3">
                  Juego de Ollas Negro 9 piezas Record
                </h3>
                <div class="mt-2">
                  <p class="text-lg font-bold text-red-600">S/ 199.00</p>
                  <p class="text-sm line-through text-gray-400">S/ 269.00</p>
                </div>
                <button class="mt-4 w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 rounded-full text-sm">
                  AGREGAR AL CARRITO
                </button>
              </div>
            </div>

            {{-- Producto 2 --}}
            <div class="swiper-slide">
              <div class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition">
                <div class="relative">
                  <img src="{{ Vite::asset('resources/images/prod-ollas-2.png') }}" alt="Ollas Acero" class="rounded-xl mx-auto">
                  <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">
                    20%
                  </span>
                </div>
                <h3 class="text-sm font-semibold text-gray-800 mt-3">
                  Juego de Ollas Belleza Acero Inoxidable 10pzas Record
                </h3>
                <div class="mt-2">
                  <p class="text-lg font-bold text-red-600">S/ 639.90</p>
                  <p class="text-sm line-through text-gray-400">S/ 799.90</p>
                </div>
                <button class="mt-4 w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 rounded-full text-sm">
                  AGREGAR AL CARRITO
                </button>
              </div>
            </div>

            {{-- Producto 3 --}}
            <div class="swiper-slide">
              <div class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition">
                <div class="relative">
                  <img src="{{ Vite::asset('resources/images/prod-sarten.png') }}" alt="Sartenes" class="rounded-xl mx-auto">
                  <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">
                    20%
                  </span>
                </div>
                <h3 class="text-sm font-semibold text-gray-800 mt-3">
                  Tripack de Sartenes Wok 28 + Sartén 18 y 22 Antiadherente
                </h3>
                <div class="mt-2">
                  <p class="text-lg font-bold text-red-600">S/ 102.90</p>
                  <p class="text-sm line-through text-gray-400">S/ 129.90</p>
                </div>
                <button class="mt-4 w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 rounded-full text-sm">
                  AGREGAR AL CARRITO
                </button>
              </div>
            </div>

          </div>

          {{-- Flechas de navegación --}}
          <div class="swiper-button-next !text-red-600"></div>
          <div class="swiper-button-prev !text-red-600"></div>

          {{-- Paginación (los puntos) --}}
          <div class="swiper-pagination !bottom-0"></div>
        </div>
      </div>
    </section>
    {{-- Sección de productos destacados tipo banner --}}
  <section class="bg-gradient-to-b from-[#f8f5f2] to-[#f4ece4] py-16">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        {{-- Producto 1 --}}
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
          <img src="{{ Vite::asset('resources/images/ollas-inox-piacere.jpg') }}" 
              alt="Ollas Inox Piaccere" class="w-full h-64 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-extrabold text-red-600">Inox Piaccere</h3>
            <p class="text-gray-700 mb-5">Juego de 9 piezas</p>
            <a href="#"
              class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold tracking-wide rounded-full px-6 py-3 text-sm uppercase transition">
              ¡Comprar ahora!
            </a>
          </div>
        </div>

        {{-- Producto 2 --}}
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
          <img src="{{ Vite::asset('resources/images/ollas-inox-marquesa.jpg') }}" 
              alt="Ollas Inox Marquesa" class="w-full h-64 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-extrabold text-red-600">Inox Marquesa</h3>
            <p class="text-gray-700 mb-5">Juego de 10 piezas</p>
            <a href="#"
              class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold tracking-wide rounded-full px-6 py-3 text-sm uppercase transition">
              ¡Comprar ahora!
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-extrabold text-gray-900 mb-10">
        Conoce Nuestros Lavaderos
      </h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

        {{-- Línea Regular --}}
        <div class="bg-white rounded-2xl border shadow-sm hover:shadow-md transition overflow-hidden">
          <img src="{{ Vite::asset('resources/images/regular_desk.jpg') }}" 
              alt="Línea Regular" 
              class="w-full h-52 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-bold text-red-600">Línea Regular</h3>
          </div>
        </div>

        {{-- Línea Océano --}}
        <div class="bg-white rounded-2xl border shadow-sm hover:shadow-md transition overflow-hidden">
          <img src="{{ Vite::asset('resources/images/oceano_desk.jpg') }}" 
              alt="Línea Océano" 
              class="w-full h-52 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-bold text-red-600">Línea Océano</h3>
          </div>
        </div>

        {{-- Línea Signature --}}
        <div class="bg-white rounded-2xl border shadow-sm hover:shadow-md transition overflow-hidden">
          <img src="{{ Vite::asset('resources/images/signature_desk.jpg') }}" 
              alt="Línea Signature" 
              class="w-full h-52 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-bold text-red-600">Línea Signature</h3>
          </div>
        </div>

        {{-- Línea Schock --}}
        <div class="bg-white rounded-2xl border shadow-sm hover:shadow-md transition overflow-hidden">
          <img src="{{ Vite::asset('resources/images/shock_desk.jpg') }}" 
              alt="Línea Schock" 
              class="w-full h-52 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-bold text-red-600">Línea Schock</h3>
          </div>
        </div>

      </div>
    </div>
  </section>
    <section class="max-w-[100rem] mx-auto px-8 py-10">
    <div class="grid grid-cols-1 md:grid-cols-[65%_35%] rounded-2xl overflow-hidden shadow-lg">
      {{-- Columna izquierda: Video --}}
      <div class="relative bg-black h-[380px] md:h-[360px] lg:h-[340px]">
        <video 
          src="{{ Vite::asset('resources/videos/presentacion2.mp4') }}" 
          autoplay 
          muted 
          loop 
          playsinline
          class="w-full h-full object-cover">
        </video>
      </div>
      {{-- Columna derecha: Texto institucional --}}
      <div class="bg-red-600 flex flex-col justify-center items-center text-white px-10 py-8 text-center">
        {{-- Logo superior --}}
        <div class="flex flex-col items-center mb-4">
          <img src="{{ Vite::asset('resources/images/header.png') }}" alt="Logo RECORD" class="h-14 mb-3">
        </div>
        {{-- Texto principal --}}
        <h2 class="text-lg sm:text-xl font-bold mb-2">
          Record es calidad que perdura.
        </h2>
        <p class="text-sm sm:text-base leading-relaxed max-w-sm">
          Por eso, nuestras ollas, sartenes, electrodomésticos y lavaderos han acompañado 
          a las familias peruanas durante más de 90 años.
        </p>
      </div>
    </div>
  </section>
<section class="max-w-7xl mx-auto px-6 py-16 text-center">
  <h2 class="text-2xl md:text-3xl font-extrabold mb-10">
    Descubre Nuestras Recetas
  </h2>

  {{-- Grid de recetas --}}
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    
    {{-- Tarjeta 1 --}}
    <div class="bg-white rounded-xl shadow-sm border hover:shadow-md transition overflow-hidden">
      <img src="{{ Vite::asset('resources/images/receta1.jpg') }}" alt="Garbanzos con croquetas de atún" class="w-full h-48 object-cover">
      <div class="p-4 text-left">
        <span class="inline-block bg-red-50 text-red-600 text-xs font-semibold px-3 py-1 rounded-full mb-2">
          Principiante
        </span>
        <h3 class="font-semibold text-gray-800 leading-tight">
          Garbanzos Con Croquetas De Atún
        </h3>
      </div>
    </div>

    {{-- Tarjeta 2 --}}
    <div class="bg-white rounded-xl shadow-sm border hover:shadow-md transition overflow-hidden">
      <img src="{{ Vite::asset('resources/images/receta2.jpg') }}" alt="Kam Lu Wantan" class="w-full h-48 object-cover">
      <div class="p-4 text-left">
        <span class="inline-block bg-red-50 text-red-600 text-xs font-semibold px-3 py-1 rounded-full mb-2">
          Principiante
        </span>
        <h3 class="font-semibold text-gray-800 leading-tight">
          Kam Lu Wantan
        </h3>
      </div>
    </div>

    {{-- Tarjeta 3 --}}
    <div class="bg-white rounded-xl shadow-sm border hover:shadow-md transition overflow-hidden">
      <img src="{{ Vite::asset('resources/images/receta3.jpg') }}" alt="Sushi Tempura" class="w-full h-48 object-cover">
      <div class="p-4 text-left">
        <span class="inline-block bg-red-50 text-red-600 text-xs font-semibold px-3 py-1 rounded-full mb-2">
          Principiante
        </span>
        <h3 class="font-semibold text-gray-800 leading-tight">
          Sushi Tempura
        </h3>
      </div>
    </div>

    {{-- Tarjeta 4 --}}
    <div class="bg-white rounded-xl shadow-sm border hover:shadow-md transition overflow-hidden">
      <img src="{{ Vite::asset('resources/images/receta4.jpg') }}" alt="Pan de Queso Cheddar y Orégano" class="w-full h-48 object-cover">
      <div class="p-4 text-left">
        <span class="inline-block bg-red-50 text-red-600 text-xs font-semibold px-3 py-1 rounded-full mb-2">
          Principiante
        </span>
        <h3 class="font-semibold text-gray-800 leading-tight">
          Pan De Queso Cheddar Y Orégano
        </h3>
      </div>
    </div>

  </div>

  {{-- Botón inferior --}}
  <div class="mt-10">
    <a href="#"
       class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold tracking-wide px-10 py-3 rounded-full transition">
      VER TODO
    </a>
  </div>
</section>

  </div>
</section>
@endsection