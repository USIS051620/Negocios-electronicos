<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'portadas.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'estado' => 'required|in:featured,arrivals,onsales',
            'fecha_descuento' => 'date',
        ]);

        $portadas = [];
        if ($request->hasFile('portada1')) {
            $imagen = $request->file('portada1');
            $nombreImagen = $imagen->getClientOriginalName();
            $imagen->move(public_path('imagenes/product'),  $nombreImagen);
            $portadas[] = $nombreImagen;
        }
        if ($request->hasFile('portada2')) {
            $imagen = $request->file('portada2');
            $nombreImagen = $imagen->getClientOriginalName();
            $imagen->move(public_path('imagenes/product'),  $nombreImagen);
            $portadas[] = $nombreImagen;
        }

        $imagenes = [];
        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
                $imagen->move(public_path('imagenes/product'), $nombreImagen);
                $imagenes[] = $nombreImagen;
            }
        }

        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'portadas' => json_encode($portadas),
            'imagenes' => json_encode($imagenes),
            'fecha' => now(),
            'descuento' => $request->descuento,
            'fecha_descuento' => $request->fecha_descuento,
            'estado' => $request->estado,
        ]);

        return redirect()->route('productos.create')->with('success', 'Producto agregado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return response()->json($producto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view('create', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'portadas.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'estado' => 'required|in:featured,arrivals,onsales',
            'fecha_descuento' => 'date',
        ]);

        $portadas = [];
        if ($request->hasFile('portada1')) {
            $imagen = $request->file('portada1');
            $nombreImagen = $imagen->getClientOriginalName();
            $imagen->move(public_path('imagenes/product'), $nombreImagen);
            $portadas[] = $nombreImagen;
        }
        if ($request->hasFile('portada2')) {
            $imagen = $request->file('portada2');
            $nombreImagen = $imagen->getClientOriginalName();
            $imagen->move(public_path('imagenes/product'), $nombreImagen);
            $portadas[] = $nombreImagen;
        }

        $imagenes = [];
        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                $nombreImagen = $imagen->getClientOriginalName();
                $imagen->move(public_path('imagenes/product'), $nombreImagen);
                $imagenes[] = $nombreImagen;
            }
        }

        $producto->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'portadas' => json_encode($portadas),
            'imagenes' => json_encode($imagenes),
            'descuento' => $request->descuento,
            'fecha_descuento' => $request->fecha_descuento,
            'estado' => $request->estado,
        ]);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
