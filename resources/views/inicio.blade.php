@extends('layouts.app')
@section('titulo', 'OfficeMart')
@section('cabecera', 'OfficeMart - Abastece a tus empleados con las mejores herramientas')

@section('contenido')
    <div class="relative min-h-screen overflow-hidden">
        <!-- Video de fondo -->
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover">
            <source src="{{ asset('videos/fondo.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Contenido -->
        <div class="relative z-10 flex items-center justify-center min-h-screen text-center text-neutral-content">
            <div class="max-w-md mx-auto bg-black bg-opacity-50 p-6 rounded">
                <h1 class="mb-5 text-5xl font-bold text-white">¡Aquí encontrará las mejores herramientas!</h1>
                <p class="mb-5 text-white">Estamos comprometidos con nuestros clientes entregándoles lo mejor. Nuestros envíos no tienen costo y llegan el mismo día de realizado su pedido o en 72 horas hábiles si vive fuera de la Capital del país.</p>
                <a href="{{route('productos.index')}}" class="btn btn-primary">Comienza a comprar</a>
                {{-- Mostrar mensaje de éxito --}}
                @if (session('status'))
                <div class="mt-6 p-4 bg-green-100 text-green-800 border border-green-300 rounded">
                    {{ session('status') }}
                </div>
                @endif
            </div>
        </div>
        
        </div>
    </div>
@endsection
