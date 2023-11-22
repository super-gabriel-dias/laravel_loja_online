<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class SiteController extends Controller
{
    public function home()
    {
        $categorias = Categoria::all();

        return view('home', compact('categorias'));
    }

    public function sobre_nos()
    {
        return view('sobre_nos');
    }

    public function produtos()
    {
        $produtos = Produto::paginate(12);
        return view('produtos', compact('produtos'));
    }

    public function details($slug)
    {
        $produto = Produto::where('slug', $slug)->first();

        Gate::authorize('ver-produto', $produto);

        return view('details', compact('produto'));
    }

    public function categoria($id)
    {
        $categoria = Categoria::find($id);

        $produtos = Produto::where('id_categoria', $id)->paginate(16);

        return view('categoria', compact('produtos', 'categoria'));
    }
}
