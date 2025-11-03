@extends('layouts.tienda')
@section('title', 'Contáctanos - RECORD')
@section('content')

<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-6">

    {{-- Título --}}
    <h2 class="text-center text-3xl font-bold text-gray-900 mb-12">Siempre en contacto</h2>

    {{-- Tarjetas de información --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
      
      {{-- Servicio al cliente --}}
      <div class="bg-white rounded-2xl shadow p-6 border border-gray-200">
        <h3 class="text-red-600 font-semibold text-lg mb-3">Servicio al cliente</h3>
        <p><span class="font-semibold">Teléfonos:</span> (511) 618-4100 – Opción 1</p>
        <p><span class="font-semibold">Línea directa:</span> 0-800-29430</p>
      </div>

      {{-- Email y dirección --}}
      <div class="bg-white rounded-2xl shadow p-6 border border-gray-200">
        <h3 class="text-red-600 font-semibold text-lg mb-3">Email</h3>
        <p>servicioalcliente@record.com.pe</p>
        <h3 class="text-red-600 font-semibold text-lg mt-4 mb-1">Dirección</h3>
        <p>Av. Los Frutales #298, Ate, Lima 03, Perú.</p>
      </div>

      {{-- Ventas institucionales --}}
      <div class="bg-white rounded-2xl shadow p-6 border border-gray-200">
        <h3 class="text-red-600 font-semibold text-lg mb-3">Ventas institucionales</h3>
        <p><span class="font-semibold">Email:</span> dgarcia@recordcomercial.pe</p>
        <p><span class="font-semibold">Teléfono:</span> 618-4100 anexo 299</p>
      </div>

    </div>

    {{-- Formulario de contacto --}}
    <div class="bg-white rounded-2xl shadow-md p-8 max-w-3xl mx-auto">
      <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @csrf

        {{-- Campos básicos --}}
        <input type="text" placeholder="Nombre" class="border rounded-lg p-3 focus:ring-2 focus:ring-red-500 focus:border-red-500">
        <input type="text" placeholder="Apellido" class="border rounded-lg p-3 focus:ring-2 focus:ring-red-500 focus:border-red-500">
        <input type="email" placeholder="Email" class="border rounded-lg p-3 focus:ring-2 focus:ring-red-500 focus:border-red-500">

        {{-- Teléfono --}}
        <div class="flex items-center border rounded-lg overflow-hidden">
          <span class="bg-gray-100 px-3 text-gray-600">+51</span>
          <input type="tel" placeholder="Teléfono" class="flex-1 p-3 focus:outline-none">
        </div>

        <input type="text" placeholder="Ciudad" class="border rounded-lg p-3 focus:ring-2 focus:ring-red-500 focus:border-red-500">
        <input type="text" placeholder="Distrito - Zona" class="border rounded-lg p-3 focus:ring-2 focus:ring-red-500 focus:border-red-500">

        {{-- Asunto y mensaje --}}
        <select class="border rounded-lg p-3 focus:ring-2 focus:ring-red-500 focus:border-red-500 md:col-span-2">
          <option>Asunto</option>
          <option>Tengo problemas con mi producto</option>
          <option>Quiero devolver mi producto</option>
          <option>Mi producto no llegó</option>
          <option>Otros</option>
        </select>

        <textarea placeholder="Mensaje" rows="4" class="border rounded-lg p-3 focus:ring-2 focus:ring-red-500 focus:border-red-500 md:col-span-2"></textarea>

        {{-- Checkbox --}}
        <label class="flex items-center space-x-2 text-sm md:col-span-2">
          <input type="checkbox" class="rounded border-gray-300 text-red-600 focus:ring-red-500">
          <span>Deseo recibir información de Record</span>
        </label>

        {{-- Botón --}}
        <button type="submit" class="md:col-span-2 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg py-3 transition">
          Enviar
        </button>
      </form>
    </div>
  </div>
</section>

@endsection
