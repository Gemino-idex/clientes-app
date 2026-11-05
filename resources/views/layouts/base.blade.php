<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clientes-app</title>
    @vite(['resources/css/app.css','resourse/js/app.js'])
</head>

<body>
    <div class="bg-gray-300 min-h-screen"><!-- contenedor principal -->
        <div class="bg-gray-500 p-6 flex justify-between items-center"><!-- HEADER -->
            <div class="text-white"><!-- LOGO -->
                <h1>Logo Empresa</h1>
            </div>
            <div><!-- NAVEGACIÓN -->
                <nav class="text-white space-x-5">
                    <a class="px-4 py-1 text-sm bg-gray-600 rounded hover:bg-gray-400" href="">Inicio</a>
                    <a class="px-4 py-1 text-sm bg-gray-600 rounded hover:bg-gray-400" href="">Clientes</a>
                    <a class="px-4 py-1 text-sm bg-gray-600 rounded hover:bg-gray-400" href="">Productos</a>
                </nav>
            </div>
            <div><!-- USUARIO -->
                <span class="text-white bg-gray-800 p-3 rounded-full">
                    Gemino
                </span>

            </div>
        </div>
        <div class="p-9"><!-- CONTENIDO -->
            <div class="bg-white mx-auto p-6 rounded shadow">
                @yield('contenido')
            </div>
        </div>
    </div>

</body>

</html>