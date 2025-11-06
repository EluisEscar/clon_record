@extends('layouts.tienda')
@section('title', 'Catálogo de Productos - RECORD')

@section('content')

{{-- Hero / Banner superior --}}
<section class="relative w-full h-[420px] md:h-[480px] lg:h-[300px] overflow-hidden">
  <img 
    src="{{ Vite::asset('resources/images/banner_menaje.jpg') }}" 
    alt="Nosotros RECORD Perú" 
    class="absolute inset-0 w-full h-full object-cover object-center"
/>
</section>

{{-- Catálogo de Productos --}}
<section class="max-w-7xl mx-auto px-6 py-12">
  <h1 class="text-3xl md:text-4xl font-extrabold text-center mb-8">
    Catálogo de Productos
  </h1>

  <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
    @foreach ($productos as $producto)
      <div class="bg-white border rounded-2xl shadow-sm hover:shadow-lg transition overflow-hidden">
        <img src="{{ asset($producto->imagen_principal) }}" 
             alt="{{ $producto->titulo }}" 
             class="w-full h-56 object-cover">

        <div class="p-4 text-center">
          <h3 class="font-semibold text-gray-900 text-sm mb-1">
            {{ $producto->titulo }}
          </h3>

          <p class="text-red-600 font-bold text-lg mb-2">
            S/ {{ number_format($producto->precio_regular, 2) }}
          </p>

          <button class="w-full bg-red-600 text-white font-semibold rounded-full py-2 hover:bg-red-700 transition">
            AGREGAR AL CARRITO
          </button>
        </div>
      </div>
    @endforeach
  </div>
</section>
@endsection
