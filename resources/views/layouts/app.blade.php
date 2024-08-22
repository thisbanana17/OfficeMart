<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo', 'OfficeMart')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        {{-- navbar --}}
        @include('partials.navigation')
    </header>
    <main>
        {{-- Título Cabecera --}}
        <div class="bg-indigo-900 my-4 text-center">
            <h1 class="text-lg font-semibold m-4 uppercase" style="font-family: 'Poppins', sans-serif;">@yield('cabecera')</h1>

        </div>
        {{-- Mensajes informativos --}}
        @if (session('info'))
            <div class="flex justify-end m-4">
                <div class="alert alert-info w-96">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>{{session('info')}}</span>
                </div>
            </div>
        @endif
        {{-- Contenido --}}
        @yield('contenido')
    </main>
    <footer class="footer footer-center p-4 bg-base-300 text-base-content mt-12">
        <div>
          <p>Copyright © 2024 - OfficeMart</p>
        </div>
    </footer>
</body>
</html>