<!--
@extends('layouts.tienda')
@section('title', 'Catálogo (Demo UI)')
@section('content')

<section class="relative w-full h-[420px] md:h-[480px] lg:h-[300px] overflow-hidden">
  <img 
    src="{{ Vite::asset('resources/images/banner_menaje.jpg') }}" 
    alt="Nosotros RECORD Perú" 
    class="absolute inset-0 w-full h-full object-cover object-center"
/>
</section>
<section class="max-w-7xl mx-auto px-6 py-10">

  {{-- Título --}}
  <h1 class="text-3xl md:text-4xl font-extrabold text-center">Catálogo de Productos</h1>

  {{-- Barra superior: chips demo + ordenar + contador (solo UI) --}}
  <div class="mt-6 flex flex-wrap items-center gap-3 justify-between">
    <div class="flex items-center gap-2 flex-wrap">
      <span class="inline-flex items-center gap-2 rounded-full bg-red-50 border border-red-200 px-3 py-1 text-sm text-red-700">
        Precio: S/ 100 - 300
        <button class="inline-grid place-content-center rounded-full bg-red-600 text-white w-4 h-4 text-[10px]">×</button>
      </span>
      <span class="inline-flex items-center gap-2 rounded-full bg-red-50 border border-red-200 px-3 py-1 text-sm text-red-700">
        Categoría: Menaje
        <button class="inline-grid place-content-center rounded-full bg-red-600 text-white w-4 h-4 text-[10px]">×</button>
      </span>
      <button class="text-sm text-red-600 font-semibold hover:underline">Eliminar todos</button>
    </div>

    <div class="flex items-center gap-4">
      <span class="text-sm text-gray-500">
        {{ $productos->count() }} productos de un total de {{ $totalProductos }}
      </span>
      <div class="flex items-center gap-2">
        <label class="text-sm text-gray-600">Ordenar por:</label>
        <select class="rounded-lg border-gray-300 text-sm">
          <option>Top ventas</option>
          <option>Precio: menor a mayor</option>
          <option>Precio: mayor a menor</option>
          <option>Novedades</option>
          <option>Nombre A-Z</option>
        </select>
      </div>
    </div>
  </div>

  {{-- Layout: Sidebar filtros + Grid productos (solo UI) --}}
  <div class="mt-8 grid grid-cols-1 lg:grid-cols-[280px_1fr] gap-8">

    {{-- SIDEBAR DE FILTROS --}}
    <aside class="bg-white border rounded-2xl p-5 h-max">
      <form class="space-y-6" onsubmit="return false;">

        {{-- Buscar --}}
        <div>
          <label class="text-sm font-semibold text-gray-900">Buscar</label>
          <input type="text" placeholder="Nombre o código…"
                 class="mt-1 w-full rounded-lg border-gray-300 text-sm">
        </div>

        {{-- Rango de precio (manual) --}}
        <div>
          <label class="text-sm font-semibold text-gray-900">Precio</label>
          <div class="mt-2 flex items-center gap-2">
            <input type="number" placeholder="Mín." class="w-1/2 rounded-lg border-gray-300 text-sm">
            <span class="text-gray-400">—</span>
            <input type="number" placeholder="Máx." class="w-1/2 rounded-lg border-gray-300 text-sm">
          </div>
          <button class="mt-2 text-xs text-gray-600 underline">Restablecer</button>
        </div>

        {{-- Categorías --}}
        <div>
          <label class="text-sm font-semibold text-gray-900">Categorías</label>
          <div class="mt-3 space-y-2 text-sm">
            <label class="flex items-center gap-2">
              <input type="checkbox" class="rounded border-gray-300"> Menaje
            </label>
            <label class="flex items-center gap-2">
              <input type="checkbox" class="rounded border-gray-300"> Electrodomésticos
            </label>
            <label class="flex items-center gap-2">
              <input type="checkbox" class="rounded border-gray-300"> Lavaderos
            </label>
            <label class="flex items-center gap-2">
              <input type="checkbox" class="rounded border-gray-300"> Combos
            </label>
          </div>
        </div>

        {{-- Tipo de cocina (demo) --}}
        <div>
          <label class="text-sm font-semibold text-gray-900">Tipo de cocina</label>
          <div class="mt-3 space-y-2 text-sm">
            <label class="flex items-center gap-2">
              <input type="checkbox" class="rounded border-gray-300"> Gas
            </label>
            <label class="flex items-center gap-2">
              <input type="checkbox" class="rounded border-gray-300"> Eléctrica
            </label>
            <label class="flex items-center gap-2">
              <input type="checkbox" class="rounded border-gray-300"> Inducción
            </label>
          </div>
        </div>

        {{-- Disponibilidad --}}
        <div>
          <label class="text-sm font-semibold text-gray-900">Disponibilidad</label>
          <div class="mt-3 space-y-2 text-sm">
            <label class="flex items-center gap-2">
              <input type="checkbox" class="rounded border-gray-300"> En stock
            </label>
            <label class="flex items-center gap-2">
              <input type="checkbox" class="rounded border-gray-300"> Oferta
            </label>
          </div>
        </div>

        <div class="pt-2 flex gap-2">
          <button class="w-1/2 rounded-full bg-red-600 text-white py-2 text-sm font-semibold hover:bg-red-700">Aplicar</button>
          <button class="w-1/2 rounded-full border border-gray-300 py-2 text-sm font-semibold hover:bg-gray-50">Limpiar</button>
        </div>
      </form>
    </aside>

{{-- GRID DE PRODUCTOS (cards dinámicas compactas) --}}
<div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">

  @foreach ($productos as $producto)
    <article class="bg-white border rounded-2xl shadow-sm hover:shadow-lg transition overflow-hidden">

      <div class="w-full h-48 bg-white flex items-center justify-center">
        <img 
          src="{{ asset($producto->imagen_principal) }}" 
          alt="{{ $producto->titulo }}" 
          class="max-h-full max-w-full object-contain">


        @if($producto->especificaciones['oferta'] ?? false)
          <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">
            {{ $producto->especificaciones['badge'] ?? 'Oferta' }}
          </span>
        @endif
      </div>

      {{-- Texto súper compacto --}}
      <div class="px-4 pb-4 pt-2 text-center">
        <h3 class="font-semibold text-gray-900 text-[12px] leading-tight mb-1 line-clamp-2">
          {{ $producto->titulo }}
        </h3>

        <div class="mb-2">
          <span class="text-red-600 font-extrabold text-base">
            S/ {{ number_format($producto->precio_regular, 2) }}
          </span>

          @if (!empty($producto->especificaciones['precio_tachado']))
            <span class="text-gray-400 line-through text-[11px] ml-1">
              S/ {{ number_format($producto->especificaciones['precio_tachado'], 2) }}
            </span>
          @endif
        </div>

        <button class="w-full bg-red-600 text-white text-[11px] font-semibold rounded-full py-1.5 hover:bg-red-700 transition">
          AGREGAR AL CARRITO
        </button>
      </div>

    </article>
  @endforeach

</div>

{{-- PAGINACIÓN --}}
<div class="lg:col-span-2 mt-8">
  {{ $productos->links() }}
</div>

</section>
@endsection
-->
@extends('layouts.tienda')
@section('title', $categoria->nombre ?? 'Catálogo de Productos')
@section('content')

<section class="max-w-7xl mx-auto px-6 py-10">

    {{-- ======== TÍTULO ======== --}}
    <h1 class="text-3xl md:text-4xl font-extrabold text-center">
        @if(isset($subcategoria))
            {{ $subcategoria->nombre }}
        @elseif(isset($categoria))
            {{ $categoria->nombre }}
        @else
            Catálogo de Productos
        @endif
    </h1>

    {{-- Contador + Ordenar --}}
    <div class="mt-6 flex flex-wrap items-center justify-between gap-3">
        
        {{-- Chips (solo demo, puedes borrarlos si quieres) --}}
        <div class="flex items-center gap-2 flex-wrap">
            @if(isset($categoria))
            <span class="inline-flex items-center gap-2 rounded-full bg-red-50 border border-red-200 px-3 py-1 text-sm text-red-700">
                Categoría: {{ $categoria->nombre }}
            </span>
            @endif

            @if(isset($subcategoria))
            <span class="inline-flex items-center gap-2 rounded-full bg-red-50 border border-red-200 px-3 py-1 text-sm text-red-700">
                Subcategoría: {{ $subcategoria->nombre }}
            </span>
            @endif
        </div>

        {{-- Contador + Orden --}}
        <div class="flex items-center gap-4">
            <span class="text-sm text-gray-500">
                {{ $productos->count() }} productos de un total de {{ $totalProductos }}
            </span>
            <div class="flex items-center gap-2">
                <label class="text-sm text-gray-600">Ordenar por:</label>
                <select class="rounded-lg border-gray-300 text-sm">
                    <option>Top ventas</option>
                    <option>Precio: menor a mayor</option>
                    <option>Precio: mayor a menor</option>
                    <option>Novedades</option>
                    <option>Nombre A-Z</option>
                </select>
            </div>
        </div>
    </div>

    {{-- ======== LAYOUT (Sidebar + Grid productos) ======== --}}
    <div class="mt-8 grid grid-cols-1 lg:grid-cols-[280px_1fr] gap-8">

        {{-- =============== SIDEBAR =============== --}}
        <aside class="bg-white border rounded-2xl p-5 h-max">
            <form class="space-y-6" onsubmit="return false;">

                {{-- Buscar --}}
                <div>
                    <label class="text-sm font-semibold text-gray-900">Buscar</label>
                    <input type="text" placeholder="Nombre o código…" 
                        class="mt-1 w-full rounded-lg border-gray-300 text-sm">
                </div>

                {{-- Rangos de precio --}}
                <div>
                    <label class="text-sm font-semibold text-gray-900">Precio</label>
                    <div class="mt-2 flex items-center gap-2">
                        <input type="number" placeholder="Mín." class="w-1/2 rounded-lg border-gray-300 text-sm">
                        <span class="text-gray-400">—</span>
                        <input type="number" placeholder="Máx." class="w-1/2 rounded-lg border-gray-300 text-sm">
                    </div>
                </div>

                {{-- Categorías --}}
                <div>
                    <label class="text-sm font-semibold text-gray-900">Categorías</label>
                    <div class="mt-3 space-y-2 text-sm">
                        @foreach($categorias as $cat)
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="rounded border-gray-300">
                            {{ $cat->nombre }}
                        </label>
                        @endforeach
                    </div>
                </div>

                {{-- Tipo de cocina --}}
                <div>
                    <label class="text-sm font-semibold text-gray-900">Tipo de cocina</label>
                    <div class="mt-3 space-y-2 text-sm">
                        <label class="flex items-center gap-2"><input type="checkbox" class="rounded border-gray-300"> Gas</label>
                        <label class="flex items-center gap-2"><input type="checkbox" class="rounded border-gray-300"> Eléctrica</label>
                        <label class="flex items-center gap-2"><input type="checkbox" class="rounded border-gray-300"> Inducción</label>
                    </div>
                </div>

                <div class="pt-2 flex gap-2">
                    <button class="w-1/2 rounded-full bg-red-600 text-white py-2 text-sm font-semibold hover:bg-red-700">Aplicar</button>
                    <button class="w-1/2 rounded-full border border-gray-300 py-2 text-sm font-semibold hover:bg-gray-50">Limpiar</button>
                </div>

            </form>
        </aside>

        {{-- =============== GRID PRODUCTOS (compacto bonito) =============== --}}
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($productos as $producto)
                <article class="bg-white border rounded-2xl shadow-sm hover:shadow-lg transition overflow-hidden">

                    {{-- Imagen --}}
                    <div class="w-full h-48 bg-white flex items-center justify-center relative">
                        <img 
                            src="{{ asset($producto->imagen_principal) }}"
                            alt="{{ $producto->titulo }}"
                            class="max-h-full max-w-full object-contain">

                        @if($producto->especificaciones['oferta'] ?? false)
                            <span class="absolute top-2 right-2 bg-red-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">
                                {{ $producto->especificaciones['badge'] ?? 'Oferta' }}
                            </span>
                        @endif
                    </div>

                    {{-- Texto --}}
                    <div class="px-4 pb-4 pt-2 text-center">
                        <h3 class="font-semibold text-gray-900 text-[12px] mb-1 line-clamp-2">
                            {{ $producto->titulo }}
                        </h3>

                        <div class="mb-2">
                            <span class="text-red-600 font-extrabold text-base">
                                S/ {{ number_format($producto->precio_regular, 2) }}
                            </span>
                        </div>

                        <button class="w-full bg-red-600 text-white text-[11px] font-semibold rounded-full py-1.5 hover:bg-red-700">
                            AGREGAR AL CARRITO
                        </button>
                    </div>
                </article>
            @endforeach
        </div>

        {{-- PAGINACIÓN --}}
        <div class="lg:col-span-2 mt-8">
            {{ $productos->links() }}
        </div>

    </div>
</section>

@endsection
