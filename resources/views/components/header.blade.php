<header class="w-full sticky top-0 z-50 font-sans">
  {{-- Franja superior roja --}}
  <div class="bg-red-600 bg-gradient-to-r from-red-600 to-red-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-6 items-center gap-3 py-4">

        {{-- Columna 1: Logo --}}
        <a href="{{ route('home') }}" class="inline-block" aria-label="Inicio">
          <img src="{{ Vite::asset('resources/images/header.png') }}" alt="Logo RECORD" class="h-10 w-auto">
        </a>

        {{-- Columna 2: Buscador (centrado) --}}
        <div class="col-span-4 flex justify-center">
          <form action="#" method="GET" class="w-full max-w-2xl px-4">
            <label class="relative block">
              <input
                type="search"
                name="q"
                placeholder="Hola, ¿Qué estás buscando?"
                class="w-full rounded-xl border border-white/40 bg-white/95 shadow-sm pl-4 pr-10 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white/60"
              />
              <button type="submit" class="absolute inset-y-0 right-2 my-auto text-gray-500/80">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m21 21-4.35-4.35M10 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z"/>
                </svg>
              </button>
            </label>
          </form>
        </div>

        {{-- Columna 3: Iconos --}}
        <div class="flex items-center justify-end gap-4">
          <a href="login" class="inline-flex items-center text-white/90 hover:text-white" title="Mi cuenta">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.2 0-8 2.1-8 5v1h16v-1c0-2.9-3.8-5-8-5Z"/>
            </svg>
          </a>
          <a href="" class="relative inline-flex items-center text-white/90 hover:text-white" title="Carrito">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
              <path d="M7 4H3v2h2l3.6 7.59-1.35 2.44A1 1 0 0 0 9 20h11v-2H9.42l.93-1.68H18a1 1 0 0 0 .92-.62L22 9H6.21L5.27 7H3V5h3l1.2 2.4L7 4Zm2 16a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm9 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
            </svg>
            <span class="absolute -top-1 -right-2 bg-emerald-500 text-white text-[10px] px-1.5 rounded-full leading-5">1</span>
          </a>
        </div>
      </div> 
    </div>   
  </div>    

  {{-- Navbar inferior blanca (fuera de la franja roja) --}}
  <nav class="bg-white border-b shadow-sm w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <ul class="flex items-center justify-center gap-8 text-gray-700 font-medium">
          <li class="relative group">
            {{-- Trigger --}}
            <a href="#" class="py-3 inline-block hover:text-red-600 focus:outline-none"
              tabindex="0">Menaje</a>

            {{-- Dropdown --}}
            <div
              class="absolute left-0 top-full pt-2 z-50 hidden group-hover:block group-focus-within:block">

              {{-- “cola” para que no parpadee al pasar el mouse --}}
              <div class="absolute -top-2 left-0 h-2 w-full"></div>

              <div class="w-[360px] rounded-xl bg-white shadow-xl ring-1 ring-black/5 p-3
                          transform opacity-0 translate-y-2 transition
                          duration-150 ease-out
                          group-hover:opacity-100 group-hover:translate-y-0
                          group-focus-within:opacity-100 group-focus-within:translate-y-0">

                {{-- 1 o 2 columnas (cámbialo a grid-cols-2 si quieres 2) --}}
                <ul class="grid grid-cols-1 gap-1">
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Juego de Ollas</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Ollas a Presión</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Ollas y Cacerolas</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Sartenes y Woks</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Teteras</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Termos</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Fuentes y Bowls</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Utensilios y Accesorios</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Línea Esmaltados</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Línea Hierro fundido</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class="relative group">
              {{-- Trigger --}}
              <a href="#" class="py-3 inline-block hover:text-red-600 focus:outline-none"
                tabindex="0">Electrodomésticos</a>

              {{-- Dropdown --}}
              <div
                class="absolute left-0 top-full pt-2 z-50 hidden group-hover:block group-focus-within:block">

                {{-- “cola” para que no parpadee al pasar el mouse --}}
                <div class="absolute -top-2 left-0 h-2 w-full"></div>

                <div class="w-[360px] rounded-xl bg-white shadow-xl ring-1 ring-black/5 p-3
                            transform opacity-0 translate-y-2 transition
                            duration-150 ease-out
                            group-hover:opacity-100 group-hover:translate-y-0
                            group-focus-within:opacity-100 group-focus-within:translate-y-0">

                  {{-- 1 o 2 columnas (cámbialo a grid-cols-2 si quieres 2) --}}
                  <ul class="grid grid-cols-1 gap-1">
                    <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Combos</a></li>
                    <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Ollas arroceras</a></li>
                    <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Licuadoras</a></li>
                    <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Freidoras de aire</a></li>
                    <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Hervidores y Cafeteras</a></li>
                    <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Sandwicheras y tostadoras</a></li>
                    <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Hornos y Sartenes eléctricas</a></li>
                    <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Exprimidores y Picatodos</a></li>
                    <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Batidoras</a></li>
                    <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Balanzas digitales</a></li>
                  </ul>
                </div>
              </div>
          </li>
          <li class="relative group">
            {{-- Trigger --}}
            <a href="#" class="py-3 inline-block hover:text-red-600 focus:outline-none"
              tabindex="0">Lavaderos</a>

            {{-- Dropdown --}}
            <div
              class="absolute left-0 top-full pt-2 z-50 hidden group-hover:block group-focus-within:block">

              {{-- “cola” para que no parpadee al pasar el mouse --}}
              <div class="absolute -top-2 left-0 h-2 w-full"></div>

              <div class="w-[360px] rounded-xl bg-white shadow-xl ring-1 ring-black/5 p-3
                          transform opacity-0 translate-y-2 transition
                          duration-150 ease-out
                          group-hover:opacity-100 group-hover:translate-y-0
                          group-focus-within:opacity-100 group-focus-within:translate-y-0">

                {{-- 1 o 2 columnas (cámbialo a grid-cols-2 si quieres 2) --}}
                <ul class="grid grid-cols-1 gap-1">
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Línea Regular</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Línea Océano</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Línea Signature</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Línea Schock</a></li>
                  <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Accesorios y Repuestos</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class="relative group">
              {{-- Trigger --}}
              <a href="{{ route('nosotros') }}" class="py-3 inline-block hover:text-red-600 focus:outline-none"
                tabindex="0">Nosotros</a>

              {{-- Dropdown --}}
              <div
                class="absolute left-0 top-full pt-2 z-50 hidden group-hover:block group-focus-within:block">

                {{-- “cola” para que no parpadee al pasar el mouse --}}
                <div class="absolute -top-2 left-0 h-2 w-full"></div>

                <div class="w-[360px] rounded-xl bg-white shadow-xl ring-1 ring-black/5 p-3
                            transform opacity-0 translate-y-2 transition
                            duration-150 ease-out
                            group-hover:opacity-100 group-hover:translate-y-0
                            group-focus-within:opacity-100 group-focus-within:translate-y-0">

                  {{-- 1 o 2 columnas (cámbialo a grid-cols-2 si quieres 2) --}}
                  <ul class="grid grid-cols-1 gap-1">
                    <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">¿Quiénes Somos?</a></li>
                    <li><a href="{{ route('locales') }}" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Nuestras tiendas</a></li>
                    <li><a href="#" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Gestiona tu cuenta</a></li>
                  </ul>
                </div>
              </div>
          </li>
          <li class="relative group">
              {{-- Trigger --}}
              <a href="#" class="py-3 inline-block hover:text-red-600 focus:outline-none"
                tabindex="0">Contáctanos</a>

              {{-- Dropdown --}}
              <div
                class="absolute left-0 top-full pt-2 z-50 hidden group-hover:block group-focus-within:block">

                {{-- “cola” para que no parpadee al pasar el mouse --}}
                <div class="absolute -top-2 left-0 h-2 w-full"></div>

                <div class="w-[360px] rounded-xl bg-white shadow-xl ring-1 ring-black/5 p-3
                            transform opacity-0 translate-y-2 transition
                            duration-150 ease-out
                            group-hover:opacity-100 group-hover:translate-y-0
                            group-focus-within:opacity-100 group-focus-within:translate-y-0">

                  <ul class="grid grid-cols-1 gap-1">
                    <li><a href="{{ route('contacto') }}" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Servicio al cliente</a></li>
                    <li><a href="{{ route('faq') }}" class="block rounded-lg px-4 py-2.5 hover:bg-gray-50">Preguntas frecuentes</a></li>
                  </ul>
                </div>
              </div>
          </li>
        <li><a href="#" class="py-3 inline-block hover:text-red-600">Noticias</a></li>
        <li><a href="#" class="py-3 inline-block font-semibold text-black">⚙️ Ofertas</a></li>
      </ul>
    </div>
  </nav>
</header>

