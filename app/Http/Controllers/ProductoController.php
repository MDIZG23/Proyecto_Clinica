<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; // Asegúrate de importar el modelo correcto

class ProductoController extends Controller
{
    public function index()
    {
        // Obtener todos los productos desde la base de datos
        $productos = Producto::all();

        // Puedes pasar los productos a la vista
        return view('productos.index', ['ResulProductos' => $productos]);
    }

    public function insertarProducto(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'PV_NOM_PRODUCTO' => 'required',
            'PV_DES_PRODUCTO' => 'required',
            'PN_PRECIO' => 'required|numeric',
            'PN_ID_CATEGORIA' => 'required',
            'PN_ID_ESTADO' => 'required',
        ]);

        // Crear un nuevo producto en la base de datos
        Producto::create([
            'NOM_PRODUCTO' => $request->input('PV_NOM_PRODUCTO'),
            'DES_PRODUCTO' => $request->input('PV_DES_PRODUCTO'),
            'PRECIO' => $request->input('PN_PRECIO'),
            'ID_CATEGORIA' => $request->input('PN_ID_CATEGORIA'),
            'ID_ESTADO' => $request->input('PN_ID_ESTADO'),
        ]);

        // Redireccionar a la página de productos con un mensaje de éxito
        return redirect('/productos')->with('success', 'Producto insertado correctamente');
    }
}
