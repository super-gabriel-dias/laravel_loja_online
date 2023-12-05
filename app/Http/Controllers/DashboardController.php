<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $usuarios = User::all()->count();

        //Gráfico 1 - Usuários
        $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total')
        ])
        ->groupBy('ano')
        ->orderBy('ano', 'asc')
        ->get();

        //preparar arrays
        foreach($usersData as $user){
            $ano[] = $user->ano;
            $total[] = $user->total;

        }

        //formatar para chartjs
        $userLabel = "'Comparativos de cadastros de usuários'";
        $userAno = implode(',', $ano);
        $userTotal = implode(',', $total);


        //Gráfico 2 - Produtos por categoria
        $catData = Categoria::with('produtos')->get();

        //preparar array
        foreach($catData as $cat){
            $catNome[] = "'". $cat->nome ."'";
            $catTotal[] = $cat->produtos->count();
        }

        //formatar para chartjs
        $catLabel = implode(',', $catNome);
        $catTotal = implode(',', $catTotal);





        return view('admin.dashboard', compact('usuarios', 'userLabel', 'userAno', 'userTotal', 'catLabel', 'catTotal'));
    }

    public function produtos()
    {
        $produtos = Produto::orderBy('created_at', 'desc')->paginate(12);
        $todosprodutos = Produto::all();
        $categorias = Categoria::all();
        return view('admin.produtos', compact('produtos', 'todosprodutos', 'categorias'));
    }
}
