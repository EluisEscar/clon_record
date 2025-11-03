@extends('layouts.tienda')
@section('title', 'FAQ')

@section('content')
<section class="max-w-5xl mx-auto px-6 py-12">
  <h1 class="text-3xl md:text-4xl font-extrabold text-center">Preguntas Frecuentes</h1>
  <p class="text-center text-gray-500 mt-2">¿Tienes una pregunta? Comienza buscando por tema.</p>

  {{-- ======== SECCIÓN: PROCESAMIENTO DE PEDIDOS ======== --}}
  <div class="mt-10">
    <h2 class="text-sm font-extrabold tracking-wide text-red-600 uppercase">Procesamiento de pedidos</h2>

    <div class="faq-group mt-4 space-y-3">
      {{-- Item 1 --}}
      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden">
        <button class="faq-btn w-full flex justify-between items-center px-5 py-4 text-left hover:bg-gray-50">
          <span class="font-medium text-gray-900">¿Puedo modificar la orden luego de realizar el pago?</span>
          <svg class="w-5 h-5 text-gray-500 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.27a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd" />
          </svg>
        </button>
        <div class="faq-content hidden px-5 pb-5 text-sm text-gray-700">
          No puede ser modificada.
        </div>
      </div>

      {{-- Item 2 --}}
      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden">
        <button class="faq-btn w-full flex justify-between items-center px-5 py-4 text-left hover:bg-gray-50">
          <span class="font-medium text-gray-900">¿Puedo cambiar la dirección en la orden que presenté?</span>
          <svg class="w-5 h-5 text-gray-500 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.27a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd" />
          </svg>
        </button>
        <div class="faq-content hidden px-5 pb-5 text-sm text-gray-700">
          Si la orden aún no ha sido enviada, contáctanos lo antes posible para actualizar la dirección.
        </div>
      </div>

      {{-- Item 3 --}}
      <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden">
        <button class="faq-btn w-full flex justify-between items-center px-5 py-4 text-left hover:bg-gray-50">
          <span class="font-medium text-gray-900">¿Dónde puedo averiguar el estado de mi pedido?</span>
          <svg class="w-5 h-5 text-gray-500 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.27a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd" />
          </svg>
        </button>
        <div class="faq-content hidden px-5 pb-5 text-sm text-gray-700">
          Puedes revisar el estado desde tu cuenta en la sección "Mis pedidos".
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Script básico para abrir/cerrar --}}
<script>
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".faq-item");

  items.forEach(item => {
    const btn = item.querySelector(".faq-btn");
    const content = item.querySelector(".faq-content");
    const icon = item.querySelector("svg");

    btn.addEventListener("click", () => {
      const isOpen = !content.classList.contains("hidden");
      
      // cerrar todos
      items.forEach(i => {
        i.querySelector(".faq-content").classList.add("hidden");
        i.querySelector("svg").classList.remove("rotate-180");
      });

      // abrir el actual si estaba cerrado
      if (!isOpen) {
        content.classList.remove("hidden");
        icon.classList.add("rotate-180");
      }
    });
  });
});
</script>
@endsection

