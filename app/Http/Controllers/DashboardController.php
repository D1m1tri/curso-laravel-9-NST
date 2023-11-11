<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\{Produto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $usuarios = User::all()->count();

        // grafico 1 - usuarios por mes
        $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total')
        ])
            ->groupBy('ano')
            ->orderBy('ano', 'ASC')
            ->get();
        // preparando dados para o grafico

        foreach ($usersData as $user) {
            $ano[] = $user->ano;
            $total[] = $user->total;
        }

        // formatar para chartjs
        $userLabel = "Comparativo de usuários cadastrados por ano";
        $userAno = implode("','", $ano);
        $userTotal = implode(',', $total);


        // grafico 2 - categorias
        $catData = Categoria::with('produtos')->get();

        // preparando dados para o grafico
        foreach ($catData as $cat) {
            $catNome[] = '"'.$cat->nome.'"';
            $catTotal[] = $cat->produtos->count();
        }

        // formatar para chartjs
        $catLabel = implode(',', $catNome);
        $catTotal = implode(',', $catTotal);

        // dd($catTotal, $catLabel);


        return view('admin.dashboard', [
            'usuarios' => $usuarios,
            'userLabel' => $userLabel,
            'userAno' => $userAno,
            'userTotal' => $userTotal,
            'catLabel' => $catLabel,
            'catTotal' => $catTotal
        ]);
    }
}
