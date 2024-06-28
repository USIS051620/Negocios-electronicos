<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        body {
            background-color: #FFE1D7;
            padding: 1rem;
        }
        .form-container {
            background-color: white;
        }
    </style>
</head>
<body class="flex justify-center items-center h-screen">
    <div class="w-full sm:w-96 mx-4">
        <div class="form-container p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-semibold mb-4 text-center">Registro</h1>
            <img style="border-radius: 1rem; width: 80px; margin: 10px auto; margin-top: 10px" src="images/logo/iris.png" alt="">
            
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block mb-2">Nombre</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-pink-400">
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block mb-2">Correo electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-pink-400">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block mb-2">Contraseña</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-pink-400">
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block mb-2">Confirmar contraseña</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-pink-400">
                </div>

                <div class="mb-4">
                    <button type="submit" class="w-full bg-gray-700 text-white py-2 px-4 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring focus:border-gray-400">Registrar</button>
                </div>
            </form>
        </div>

        <div class="mt-8 text-center">
            <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Inicia sesión</a></p>
        </div>
    </div>
</body>
</html>
