@extends('layouts.tienda')
@section('title','Nosotros - RECORD')
@section('content')

{{-- Hero / Banner superior --}}
<section class="relative w-full h-[420px] md:h-[480px] lg:h-[300px] overflow-hidden">
  <img 
    src="{{ Vite::asset('resources/images/banner_nosotros.jpg') }}" 
    alt="Nosotros RECORD Perú" 
    class="absolute inset-0 w-full h-full object-cover object-center"
/>
</section>
{{-- Bloque: Misión / Visión --}}
<section class="bg-white">
  <div class="max-w-5xl mx-auto px-6 py-12 sm:py-16">
    {{-- Misión --}}
    <h2 class="text-3xl sm:text-4xl font-extrabold text-center tracking-tight mb-6">
      Misión
    </h2>

    <p class="max-w-3xl mx-auto text-center text-gray-700 leading-relaxed">
      «Somos una empresa peruana que manufactura, comercializa productos y brinda servicios
      para el hogar y la industria. Contamos con un equipo humano comprometido, competitivo e
      innovador y, realizamos procesos productivos que protegen el medio ambiente, generando
      valor para sus clientes, colaboradores y accionistas».
    </p>

    {{-- Separador suave --}}
    <div class="h-px bg-gray-200 my-12"></div>

    {{-- Visión --}}
    <h2 class="text-3xl sm:text-4xl font-extrabold text-center tracking-tight mb-6">
      Visión
    </h2>

    <p class="max-w-3xl mx-auto text-center text-gray-700 leading-relaxed">
      «Ser líderes en el mercado nacional e incrementar participación en mercados del exterior».
    </p>
  </div>
</section>
{{-- ===========================
     DIRECTORIO
=========================== --}}
<section class="bg-gray-50 py-16 px-6">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-extrabold text-center text-gray-900 mb-12">
      Directorio
    </h2>

    {{-- Grid de 4 cards --}}
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
      
      {{-- Card 1 --}}
      <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition p-6 flex flex-col items-center text-center">
        <img src="{{ Vite::asset('resources/images/directorio1.png') }}" alt="Presidente"
             class="w-20 h-20 mb-4">
        <h3 class="text-lg font-extrabold text-gray-900 uppercase">Wolfgang Freitag Nieland</h3>
        <p class="text-red-600 font-semibold mb-2">Presidente</p>
        <p class="text-sm text-gray-600 leading-relaxed">
          Empresario con amplio conocimiento del negocio y gran experiencia en una cultura de calidad,
          responsabilidad social y mejora continua en los procesos. Orientado a consolidar la marca
          en el mercado nacional y exterior.
        </p>
      </div>

      {{-- Card 2 --}}
      <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition p-6 flex flex-col items-center text-center">
        <img src="{{ Vite::asset('resources/images/directorio2.png') }}" alt="Vicepresidente"
             class="w-20 h-20 mb-4">
        <h3 class="text-lg font-extrabold text-gray-900 uppercase">KARIN HAUSTEIN VAN GINHOVEN</h3>
        <p class="text-red-600 font-semibold mb-2">Vicepresidenta</p>
        <p class="text-sm text-gray-600 leading-relaxed">
         Especialista en tecnología con 35 años de experiencia y Maestría en Finanzas. 
         Vicepresidente e integrante del Directorio desde 2006.
        </p>
      </div>

      {{-- Card 3 --}}
      <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition p-6 flex flex-col items-center text-center">
        <img src="{{ Vite::asset('resources/images/directorio3.png') }}" alt="Director Comercial"
             class="w-20 h-20 mb-4">
        <h3 class="text-lg font-extrabold text-gray-900 uppercase">KATJA SCHWARZ STAMMER</h3>
        <p class="text-red-600 font-semibold mb-2">Director Comercial</p>
        <p class="text-sm text-gray-600 leading-relaxed">
          Especialista en estrategias de mercado y expansión comercial. Ha liderado proyectos de
          diversificación en líneas de productos y alianzas estratégicas internacionales.
        </p>
      </div>

      {{-- Card 4 --}}
      <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition p-6 flex flex-col items-center text-center">
        <img src="{{ Vite::asset('resources/images/directorio4.png') }}" alt="Directora de Finanzas"
             class="w-20 h-20 mb-4">
        <h3 class="text-lg font-extrabold text-gray-900 uppercase">GONZALO PODESTÁ HAUSTEIN</h3>
        <p class="text-red-600 font-semibold mb-2">Directora de Finanzas</p>
        <p class="text-sm text-gray-600 leading-relaxed">
          Economista con sólida experiencia en finanzas corporativas y control interno.
          Fomenta una gestión transparente y eficiente orientada al crecimiento sostenible.
        </p>
      </div>

    </div>
  </div>
</section>
@endsection