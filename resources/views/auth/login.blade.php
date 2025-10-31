@extends('layouts.tienda')
@section('title', 'Iniciar Sesión - RECORD')
@section('content')

<section class="bg-gray-100 py-10">
  <div class="max-w-md mx-auto">
    {{-- Estado de sesión (ej. contraseña restablecida) --}}
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

    <div class="bg-white rounded-xl border shadow-sm p-6 md:p-8">
      <h1 class="text-center text-2xl font-extrabold tracking-wide mb-6">
        INICIAR SESIÓN
      </h1>

      <form method="POST" action="#" class="space-y-5">
        {{-- @csrf --}}

        {{-- Email --}}
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
          <input
            id="email"
            type="email"
            name="email"
            value=""
            required
            autofocus
            autocomplete="username"
            class="mt-1 w-full rounded-lg border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-500"
          />
          {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
        </div>

        {{-- Password --}}
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
          <input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="current-password"
            class="mt-1 w-full rounded-lg border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-500"
          />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        {{-- Remember + Forgot --}}
        <div class="flex items-center justify-between">
          <label for="remember_me" class="inline-flex items-center gap-2">
            <input id="remember_me" type="checkbox"
                   class="rounded border-gray-300 text-red-600 focus:ring-red-500"
                   name="remember">
            <span class="text-sm text-gray-600">Recuérdame</span>
          </label>

          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}"
               class="text-sm text-gray-600 hover:text-gray-900 underline">
              ¿Olvidaste tu contraseña?
            </a>
          @endif
        </div>

        {{-- Botón principal --}}
        <button type="submit"
                class="w-full rounded-full bg-red-600 hover:bg-red-700 text-white font-semibold tracking-wide py-3 transition">
          INGRESAR
        </button>
      </form>

      {{-- CTA registro --}}
      <p class="mt-6 text-center text-sm text-gray-600">
        ¿No tienes cuenta?
        <a href="{{ route('register') }}" class="text-red-600 hover:text-red-700 font-semibold underline">
          Regístrate aquí
        </a>
      </p>
    </div>
  </div>
</section>
@endsection
