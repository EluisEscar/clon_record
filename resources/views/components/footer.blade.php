<footer class="mt-16 text-white font-sans">
  {{-- banda superior con logos --}}
  <div class="bg-gradient-to-b from-red-600 to-red-800">
    <div class="max-w-7xl mx-auto px-4 py-8">
      <div class="flex flex-col items-center gap-4">
        {{-- Logo principal + “+90 años” (placeholders) --}}
        <div class="flex items-center gap-6">
          <img src="{{ Vite::asset('resources/images/header.png') }}" alt="Logo RECORD" class="h-12 w-auto">
        </div>

        <hr class="w-full border-white/30">
      </div>

      <div class="grid grid-cols-1 md:grid-cols-5 gap-8 py-6">
        {{-- Nosotros --}}
        <div>
          <h3 class="font-semibold text-white/95 mb-3">Nosotros</h3>
          <ul class="space-y-2 text-white/90">
            <li><a class="hover:underline" href="#">¿Quiénes somos?</a></li>
            <li><a class="hover:underline" href="#">Nuestras tiendas</a></li>
            <li><a class="hover:underline" href="#">Gestiona tu cuenta</a></li>
          </ul>
        </div>

        {{-- Contactos --}}
        <div>
          <h3 class="font-semibold text-white/95 mb-3">Contactos</h3>
          <ul class="space-y-2 text-white/90">
            <li><a class="hover:underline" href="#">Formulario de contacto</a></li>
            <li>Teléfonos: <span class="font-semibold">(511) 618-4100</span></li>
            <li>Línea Gratuita: <span class="font-semibold">0-800-29430</span></li>
            <li>E-mail: <a class="underline" href="mailto:serviciocliente@record.com.pe">serviciocliente@record.com.pe</a></li>
          </ul>
        </div>

        {{-- Información Legal --}}
        <div>
          <h3 class="font-semibold text-white/95 mb-3">Información Legal</h3>
          <ul class="space-y-2 text-white/90">
            <li><a class="hover:underline" href="#">Políticas de Privacidad</a></li>
            <li><a class="hover:underline" href="#">Términos y Condiciones</a></li>
            <li><a class="hover:underline" href="#">Información Financiera</a></li>
            <li><a class="hover:underline" href="#">Información Ejercicio 2024</a></li>
            <li><a class="hover:underline" href="#">Comprobantes Electrónicos</a></li>
          </ul>
        </div>

        {{-- Certificaciones + RRSS --}}
        <div>
          <h3 class="font-semibold text-white/95 mb-3">Certificaciones</h3>
          <div class="mb-4">
            <div class="h-14 w-14 rounded-full bg-white/90 grid place-content-center text-red-700 font-bold">ISO</div>
          </div>

          <h3 class="font-semibold text-white/95 mb-2">Síguenos en</h3>
          <div class="flex items-center gap-4">
            {{-- Facebook --}}
            <a href="https://www.facebook.com/Recordperu" aria-label="Facebook" class="hover:opacity-80">
              <svg class="w-6 h-6 fill-white" viewBox="0 0 24 24"><path d="M22 12.06C22 6.5 17.52 2 12 2S2 6.5 2 12.06c0 5 3.66 9.15 8.44 9.94v-7.03H7.9v-2.9h2.54V9.41c0-2.5 1.49-3.88 3.77-3.88 1.09 0 2.24.2 2.24.2v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.78l-.44 2.9h-2.34v7.03C18.34 21.21 22 17.06 22 12.06z"/></svg>
            </a>
            {{-- YouTube --}}
            <a href="https://www.youtube.com/RecordPeru" aria-label="YouTube" class="hover:opacity-80">
              <svg class="w-6 h-6 fill-white" viewBox="0 0 24 24"><path d="M23.5 6.2s-.2-1.6-.8-2.3c-.7-.8-1.5-.8-1.9-.9C17.8 2.5 12 2.5 12 2.5h0s-5.8 0-8.8.5c-.4.1-1.2.1-1.9.9C.7 4.6.5 6.2.5 6.2S0 8.2 0 10.3v1.4c0 2.1.5 4.1.5 4.1s.2 1.6.8 2.3c.7.8 1.6.8 2 1 1.4.1 8.7.5 8.7.5s5.8 0 8.8-.5c.4-.1 1.2-.1 1.9-.9.6-.7.8-2.3.8-2.3s.5-2 .5-4.1v-1.4c0-2.1-.5-4.1-.5-4.1zM9.6 13.9V7.9l6 3-6 3z"/></svg>
            </a>
            {{-- TikTok --}}
            <a href="https://www.tiktok.com/@record.peru" aria-label="TikTok" class="hover:opacity-80">
              <svg class="w-6 h-6 fill-white" viewBox="0 0 24 24"><path d="M21 8.1c-2 0-3.9-.6-5.5-1.8v7.5c0 3.6-2.9 6.5-6.5 6.5S2.5 17.4 2.5 13.8c0-3.6 2.9-6.5 6.5-6.5 1 0 2 .2 2.8.7v3A3.6 3.6 0 0 0 9 10.5a3.3 3.3 0 1 0 3.3 3.3V2.5h3a8.9 8.9 0 0 0 5.6 2v3.6z"/></svg>
            </a>
            {{-- Instagram --}}
            <a href="https://www.instagram.com/record_pe/" aria-label="Instagram" class="hover:opacity-80">
              <svg class="w-6 h-6 fill-white" viewBox="0 0 24 24"><path d="M12 2.2c3 0 3.3 0 4.5.1 1.2.1 1.9.3 2.4.6.6.3 1 .6 1.5 1.1.5.5.8.9 1.1 1.5.3.5.5 1.2.6 2.4.1 1.2.1 1.5.1 4.5s0 3.3-.1 4.5c-.1 1.2-.3 1.9-.6 2.4-.3.6-.6 1-1.1 1.5-.5.5-.9.8-1.5 1.1-.5.3-1.2.5-2.4.6-1.2.1-1.5.1-4.5.1s-3.3 0-4.5-.1c-1.2-.1-1.9-.3-2.4-.6a4.5 4.5 0 0 1-1.5-1.1c-.5-.5-.8-.9-1.1-1.5-.3-.5-.5-1.2-.6-2.4C2.2 15.3 2.2 15 2.2 12s0-3.3.1-4.5c.1-1.2.3-1.9.6-2.4.3-.6.6-1 1.1-1.5.5-.5.9-.8 1.5-1.1.5-.3 1.2-.5 2.4-.6C8.7 2.2 9 2.2 12 2.2zm0 1.8c-3 0-3.3 0-4.5.1-1 .1-1.5.2-1.9.4-.5.2-.8.4-1.1.8-.4.3-.6.7-.8 1.1-.2.4-.3.9-.4 1.9-.1 1.2-.1 1.5-.1 4.5s0 3.3.1 4.5c.1 1 .2 1.5.4 1.9.2.4.4.8.8 1.1.4.4.7.6 1.1.8.4.2.9.3 1.9.4 1.2.1 1.5.1 4.5.1s3.3 0 4.5-.1c1-.1 1.5-.2 1.9-.4.4-.2 .8-.4 1.1-.8.4-.4.7-.7.8-1.1.2-.4.3-.9.4-1.9.1-1.2.1-1.5.1-4.5s0-3.3-.1-4.5c-.1-1-.2-1.5-.4-1.9a3.1 3.1 0 0 0-.8-1.1 3.1 3.1 0 0 0-1.1-.8c-.4-.2-.9-.3-1.9-.4-1.2-.1-1.5-.1-4.5-.1zm0 3.4a5.2 5.2 0 1 1 0 10.4 5.2 5.2 0 0 1 0-10.4zm6-1.5a1.2 1.2 0 1 1 0 2.3 1.2 1.2 0 0 1 0-2.3z"/></svg>
            </a>
          </div>
        </div>

        {{-- Consulta por RUC --}}
        <div>
          <h3 class="font-semibold text-white/95 mb-3">Consulta tu comprobante</h3>
          <form class="bg-white/10 backdrop-blur rounded-lg p-4 border border-white/20">
            <p class="text-sm text-white/90 mb-2">Ingresa tu RUC para consultar el comprobante de tu compra:</p>
            <label class="text-xs text-white/80">RUC:</label>
            <div class="mt-1 relative">
              <input type="text" maxlength="11" placeholder="20606152931"
                     class="w-full rounded-lg px-3 py-2 bg-white/95 text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white/60">
              <button type="submit"
                      class="absolute right-1 top-1/2 -translate-y-1/2 px-3 py-1 rounded-md bg-red-700 text-white text-sm hover:bg-red-600">
                Consultar
              </button>
            </div>
            <p class="text-[11px] mt-2 text-white/80">* Validación con SUNAT (demo)</p>
          </form>

          <div class="mt-4">
            <a href="#" class="inline-block">
              <div class="w-44 h-24 bg-white rounded-md grid place-content-center text-red-700 font-semibold shadow-sm">
                Libro de Reclamaciones
              </div>
            </a>
          </div>
        </div>
      </div>

      <hr class="w-full border-white/30 mt-2">
      {{-- métodos de pago --}}
      <div class="flex flex-wrap items-center justify-center gap-4 py-4 opacity-95">
         <div class="flex items-center gap-6">
          <img src="{{ Vite::asset('resources/images/tarjetas.png') }}" alt="tarjetas" class="h-12 w-auto">
      </div>
    </div>
  </div>

  {{-- franja final --}}
  <div class="bg-red-900 text-center text-xs text-white/80 py-3">
    {{ date('Y') }} RECORD Perú - Todos los derechos reservados.
  </div>
</footer>
