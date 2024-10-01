@extends('layouts.app')

@section('titulo', 'Recuperar Contraseña')

@section('contenido')
    <div class="flex justify-center items-center min-h-screen gray">
        <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-semibold text-center mb-6">Recuperar Contraseña</h2>

            {{-- Mensaje de éxito o error --}}
            @if (session('status'))
                <div class="bg-green-100 text-green-700 p-4 rounded mb-4 text-sm text-center">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Mostrar mensajes de error --}}
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4 text-sm text-center">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">
                        Enviar enlace de recuperación
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

