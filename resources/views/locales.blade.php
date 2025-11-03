@extends('layouts.tienda')
@section('title','Locales - RECORD')
@section('content')

{{-- Hero / Banner superior --}}
<section class="relative w-full h-[420px] md:h-[480px] lg:h-[300px] overflow-hidden">
  <img 
    src="{{ Vite::asset('resources/images/banner_locales.jpg') }}" 
    alt="Nosotros RECORD Perú" 
    class="absolute inset-0 w-full h-full object-cover object-center"
/>
</section>
<section class="bg-gradient-to-b from-red-50 to-white py-12">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

    <h1 class="text-2xl sm:text-3xl font-extrabold text-center text-gray-900 tracking-tight">
      Tiendas
    </h1>
    <p class="mt-2 text-center text-gray-600">
      Ubica la tienda Record más cercana y déjanos ayudarte a equipar tu hogar con la calidad que mereces.<br>
        ¡Visítanos y forma parte de nuestra gran familia!
    </p>

    {{-- TIENDA: LA MOLINA --}}
    <div class="mt-10 bg-white rounded-2xl shadow-sm ring-1 ring-black/5 overflow-hidden">
      <div class="p-6 md:p-8">
        <h2 class="text-xl font-bold text-red-600 text-center">La Molina</h2>
        <div class="mt-2 text-center text-sm text-gray-700 space-y-1">
          <p>Av. La Molina 1047 – Tienda 313 – Urb. El Sol</p>
          <p>Teléfono: <strong>385-6443</strong> &nbsp;|&nbsp; WhatsApp: <strong>981 274 931</strong></p>
          Horario de atención: <strong>Lunes a Domingo</strong><br>
          <span class="text-gray-600">10:00 a.m. a 1:00 p.m. y 2:00 p.m. a 7:00 p.m.</span></p>
        </div>

        <div class="mt-6 rounded-xl overflow-hidden ring-1 ring-black/10">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.881924958895!2d-76.9481324251119!3d-12.06670444242225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7e753d08c0f%3A0x3776575c84fd9a3b!2sAv.%20La%20Molina%201047%2C%20La%20Molina%2015026!5e0!3m2!1ses!2spe!4v1708136430565!5m2!1ses!2spe"
            width="100%"
            height="360"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>

    {{-- TIENDA: SAN BORJA --}}
    <div class="mt-10 bg-white rounded-2xl shadow-sm ring-1 ring-black/5 overflow-hidden">
      <div class="p-6 md:p-8">
        <h2 class="text-xl font-bold text-red-600 text-center">San Borja</h2>
        <div class="mt-2 text-center text-sm text-gray-700 space-y-1">
          <p>Av. Aviación 3546</p>
          <p>WhatsApp: <strong>985 684 435</strong></p>
          Horario de atención: <strong>Lunes a Sábado</strong><br>
          <span class="text-gray-600">10:00 a.m. a 1:30 p.m. y 2:30 p.m. a 7:00 p.m.</span></p>
        </div>

        <div class="mt-6 rounded-xl overflow-hidden ring-1 ring-black/10">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.788435787264!2d-77.00051982457463!3d-12.083312344338914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7dc85d2a2e3%3A0x9a45d7a1b16c3e6b!2sTorres%20de%20Limatambo%2C%20Av.%20Aviaci%C3%B3n%203546%2C%20San%20Borja%2015036!5e0!3m2!1ses!2spe!4v1730667395312!5m2!1ses!2spe" 
            width="100%" 
            height="360" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
 {{-- TIENDA: INDEPENDENCIA --}}
    <div class="mt-10 bg-white rounded-2xl shadow-sm ring-1 ring-black/5 overflow-hidden">
      <div class="p-6 md:p-8">
        <h2 class="text-xl font-bold text-red-600 text-center">Independencia</h2>
        <div class="mt-2 text-center text-sm text-gray-700 space-y-1">
          <p> C.C Megaplaza Local L15AC – 1er. Piso</p>
          <p>WhatsApp: <strong>920 157 608</strong></p>
          Horario de atención: <strong>Lunes a Domingo</strong><br>
          <span class="text-gray-600">10:00 a.m. a 10:00 p.m.</span></p>
        </div>

        <div class="mt-6 rounded-xl overflow-hidden ring-1 ring-black/10">
          <iframe 
            src="https://www.google.com/maps?q=Av.+Alfredo+Mendiola+3698,+Independencia,+Lima,+Per%C3%BA&z=16&output=embed" 
            width="100%" 
            height="360" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
     {{-- TIENDA: SURCO --}}
    <div class="mt-10 bg-white rounded-2xl shadow-sm ring-1 ring-black/5 overflow-hidden">
      <div class="p-6 md:p-8">
        <h2 class="text-xl font-bold text-red-600 text-center">Santiago de Surco</h2>
        <div class="mt-2 text-center text-sm text-gray-700 space-y-1">
          <p> Calle Monte grande 190 – Chacarilla</p>
          <p>Teléfono: <strong>743-2448</strong> &nbsp;|&nbsp; WhatsApp: <strong>982 564 859</strong></p>
          Horario de atención: <strong>Lunes a Sábado</strong><br>
          <span class="text-gray-600">10:00 a.m. a 7:00 p.m.</span></p>
        </div>

        <div class="mt-6 rounded-xl overflow-hidden ring-1 ring-black/10">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.866881760247!2d-76.99121942511204!3d-12.069417342559065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7cf8da3e3ef%3A0x4f7a7a3dbe87b7c0!2sC.%20Monte%20Grande%20190%2C%20Santiago%20de%20Surco%2015038!5e0!3m2!1ses!2spe!4v1730670804225!5m2!1ses!2spe" 
            width="100%" 
            height="360" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
     {{-- TIENDA: SAN MIGUEL --}}
    <div class="mt-10 bg-white rounded-2xl shadow-sm ring-1 ring-black/5 overflow-hidden">
      <div class="p-6 md:p-8">
        <h2 class="text-xl font-bold text-red-600 text-center">San Miguel</h2>
        <div class="mt-2 text-center text-sm text-gray-700 space-y-1">
          <p> C.C Plaza San Miguel – Tienda 278A – 2do. Piso</p>
          <p>WhatsApp: <strong>945 523 757</strong></p>
          Horario de atención: <strong>Lunes a Domingo</strong><br>
          <span class="text-gray-600">10:00 a.m. a 10:00 p.m.</span></p>
        </div>

        <div class="mt-6 rounded-xl overflow-hidden ring-1 ring-black/10">
          <iframe 
            src="https://www.google.com/maps?q=Plaza%20San%20Miguel,%20Av.%20La%20Marina%202000,%20San%20Miguel%2015088,%20Lima,%20Per%C3%BA&z=16&output=embed" 
            width="100%" 
            height="360" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
     {{-- TIENDA: AQP --}}
    <div class="mt-10 bg-white rounded-2xl shadow-sm ring-1 ring-black/5 overflow-hidden">
      <div class="p-6 md:p-8">
        <h2 class="text-xl font-bold text-red-600 text-center">Arequipa</h2>
        <div class="mt-2 text-center text-sm text-gray-700 space-y-1">
          <p>C.C Parque Lambramani</p>
          <p>WhatsApp: <strong>985 684 089</strong></p>
          Horario de atención: <strong>Lunes a Domingo</strong><br>
          <span class="text-gray-600">10:00 a.m. a 10:00 p.m.</span></p>
        </div>

        <div class="mt-6 rounded-xl overflow-hidden ring-1 ring-black/10">
          <iframe 
            src="https://www.google.com/maps?q=Av.+Los+Incas,+Arequipa+04002,+Per%C3%BA&z=16&output=embed" 
            width="100%" 
            height="360" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection