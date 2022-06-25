<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Exports\CategoriaExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class CategoriaController extends Controller
{
    //
    public function index()
    {
        $categorias = Categoria::All();
        // dd($categorias);
        return view('categoria.index')->with('categorias', $categorias);
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function insert(Request $request)
    {
        //dd($request);
        $categoria = new Categoria();
        $categoria->descripcion = $request->descripcion;
        $categoria->alias = $request->alias;
        $categoria->stock = $request->stock;
        $categoria->estado = 1;
        $categoria->save();
        return redirect('/categorias');
    }

    public function edit($id)
    {
        //echo $id;
        $categoria = Categoria::find($id);
        // dd($categoria);
        return view('categoria.edit')->with('categoria', $categoria);
    }

    public function update(Request $request, $id)
    {
        //echo $id;
        $categoria = Categoria::find($id);
        $categoria->descripcion = $request->descripcion;
        $categoria->alias = $request->alias;
        $categoria->stock = $request->stock;
        $categoria->save();
        return redirect('/categorias');
    }

    public function export()
    {
        return Excel::download(new CategoriaExport, 'categorias.xlsx');
    }

    public function exportPdf()
    {
        $categorias = Categoria::all();
        $pdf = PDF::loadView('pdf.categorias', [
            'categorias' => $categorias
        ]);
        return $pdf->download('categorias.pdf');
    }
}
