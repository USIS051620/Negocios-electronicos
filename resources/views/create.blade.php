<!DOCTYPE html>
<html>
<head>
    <title>Agregar Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE1D7;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea,
        input[type="file"],
        input[type="date"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin-bottom: 5px;
        }

        button {
            background-color: #374151;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }

        button:hover {
            background-color: #d97706;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            padding: 15px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<h2>Agregar Producto</h2>
@if(session('success'))
    <div>{{ session('success') }}</div>
@endif
<form action="{{ isset($producto) ? route('productos.update', $producto->id) : route('productos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" value="{{ old('nombre', isset($producto) ? $producto->nombre : '') }}" required><br><br>

    <label for="descripcion">Descripción:</label><br>
    <textarea id="descripcion" name="descripcion" required>{{ old('descripcion', isset($producto) ? $producto->descripcion : '') }}</textarea><br><br>

    <label for="precio">Precio:</label><br>
    <input type="number" id="precio" name="precio" step="0.01" value="{{ old('precio', isset($producto) ? $producto->precio : '') }}" required><br><br>

    <label for="portadas">Imágenes de portada:</label><br>
    <input type="file" id="portada1" name="portada1" accept="image/*"><br><br>
    <input type="file" id="portada2" name="portada2" accept="image/*"><br><br>

    <label for="imagenes">Imágenes:</label><br>
    <input type="file" id="imagenes" name="imagenes[]" multiple accept="image/*"><br><br>

    <label for="estado">Estado:</label><br>
    <select id="estado" name="estado" required>
        <option value="featured" {{ old('estado', isset($producto) && $producto->estado == 'featured' ? 'selected' : '') }}>Destacado</option>
        <option value="arrivals" {{ old('estado', isset($producto) && $producto->estado == 'arrivals' ? 'selected' : '') }}>Nuevos Llegados</option>
        <option value="onsales" {{ old('estado', isset($producto) && $producto->estado == 'onsales' ? 'selected' : '') }}>En Oferta</option>
    </select><br><br>

    <label for="descuento">Descuento:</label><br>
    <input type="number" id="descuento" name="descuento" step="0.01" value="{{ old('descuento', isset($producto) ? $producto->descuento : '') }}"><br><br>

    <label for="fecha_descuento">Fecha límite de descuento:</label><br>
    <input type="date" id="fecha_descuento" name="fecha_descuento" value="{{ old('fecha_descuento', isset($producto) ? $producto->fecha_descuento : '') }}"><br><br>

    <button type="submit">{{ isset($producto) ? 'Actualizar Producto' : 'Agregar Producto' }}</button>
</form>

</body>
</html>