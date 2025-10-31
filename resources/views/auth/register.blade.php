@extends('layouts.tienda')
@section('title', 'Registro - RECORD')
@section('content')

<section class="bg-gray-100 py-10">
  <div class="max-w-md mx-auto">
    <div class="bg-white rounded-xl border shadow-sm p-6 md:p-8">
      <h1 class="text-center text-2xl font-extrabold tracking-wide mb-6">
        CREAR CUENTA
      </h1>

      <form method="POST" action="#" class="space-y-5">
        {{-- @csrf --}}

        {{-- Nombre --}}
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
          <input
            id="name"
            type="text"
            name="name"
            required
            autofocus
            autocomplete="name"
            class="mt-1 w-full rounded-lg border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-500"
          />
        </div>

        {{-- Apellido --}}
        <div>
          <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
          <input
            id="apellido"
            type="text"
            name="apellido"
            required
            autofocus
            autocomplete="apellido"
            class="mt-1 w-full rounded-lg border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-500"
          />
        </div>

        {{-- Email --}}
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
          <input
            id="email"
            type="email"
            name="email"
            required
            autocomplete="username"
            class="mt-1 w-full rounded-lg border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-500"
          />
        </div>

        {{-- Password --}}
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
          <input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="new-password"
            class="mt-1 w-full rounded-lg border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-500"
          />
        </div>

        {{-- Botón principal --}}
        <button type="submit"
                class="w-full rounded-full bg-red-600 hover:bg-red-700 text-white font-semibold tracking-wide py-3 transition">
          CREAR CUENTA
        </button>
      </form>

      {{-- CTA login --}}
      <p class="mt-6 text-center text-sm text-gray-600">
        ¿Ya tienes cuenta?
        <a href="login" class="text-red-600 hover:text-red-700 font-semibold underline">
          Inicia sesión aquí
        </a>
      </p>
    </div>
  </div>
</section>
@endsection
