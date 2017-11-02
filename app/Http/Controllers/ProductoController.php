<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\Producto;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\ProductoFormRequest;
use DB;


class ProductoController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $productos=DB::table('productos')->where('Descripcion','LIKE','%'.$query.'%')
            
            return view('almacen.producto.index',["productos"=>$productos,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("almacen.producto.create");
    }
    public function store (ProductoFormRequest $request)
    {
        $producto=new Producto;
        $producto->CodigoBarra=$request->get('CodigoBarra');
        $producto->Descripcion=$request->get('Descripcion');
        $producto->UMedida=$request->get('UMedida');
        $producto->Precio1=$request->get('Precio1');
        $producto->Precio2=$request->get('Precio2');
        $producto->Precio3=$request->get('Precio3');
        $producto->Precio4=$request->get('Precio4');
        $producto->Stock_Minimo=$request->get('Stock_Minimo');
        $producto->Costo=$request->get('Costo');
        $producto->save();
        return Redirect::to('almacen/producto');
    }
    public function show($id)
    {
        return view("almacen.producto.show",["producto"=>Producto::findOrFail($id)]);

    }
    public function edit($id)
    {
        return view("almacen.producto.edit",["producto"=>Producto::findOrFail($id)]);
    }
    public function update(ProductoFormRequest $request,$id)
    {
        $producto=Producto::findOrFail($id);
        $producto->CodigoBarra=$request->get('CodigoBarra');
        $producto->Descripcion=$request->get('Descripcion');
        $producto->UMedida=$request->get('UMedida');
        $producto->Precio1=$request->get('Precio1');
        $producto->Precio2=$request->get('Precio2');
        $producto->Precio3=$request->get('Precio3');
        $producto->Precio4=$request->get('Precio4');
        $producto->Stock_Minimo=$request->get('Stock_Minimo');
        $producto->Costo=$request->get('Costo');
        $producto->update();
        return Redirect::to('almacen/producto');
    }
    public function destroy()
    {
        
    }

}
