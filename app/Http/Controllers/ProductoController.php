<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //return Producto::all();
        return Producto::search($request->buscar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return Producto::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $prod=Producto::findOrFail($id);
        $prod->p_Nombre = $request->p_Nombre;
        $prod->p_Descripcion = $request->p_Descripcion;
        $prod->p_UrlImagen = $request->p_UrlImagen;
        $prod->p_Precio = $request->p_Precio;
        $prod->p_Stock = $request->p_Stock;
        $prod->p_unidades = $request->p_unidades;
        $prod->p_status = $request->p_status;
        $prod->id_Categoria = $request->id_Categoria;
        $prod->update();
        return $prod;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $prod=Producto::findOrFail($id);
        $prod->delete();
    }
}
