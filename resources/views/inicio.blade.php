@extends('layouts.app')
@section('titulo', 'OfficeMart')
@section('cabecera', 'OfficeMart - Abastece a tus empleados con las mejores herramientas')

@section('contenido')
    <div class="hero min-h-screen" style="background-image: url('https://images.unsplash.com/photo-1510519138101-570d1dca3d66?q=80&w=2047&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">¡Aquí encontrará las mejores herramientas!</h1>
            <p class="mb-5">Estamos comprometidos con nuestros clientes entregándoles lo mejor.  Nuestros envíos no tienen costo y llegan el mismo día de realizado su pedido o en 72 horas habiles si vive fuera de la Capital del país.</p>
            <a href="{{route('productos.index')}}" class="btn btn-primary">>Comienza a comprar<</a>
        </div>
        </div>
    </div>
@endsection