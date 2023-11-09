<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SiteController extends Controller
{
    public function index() {
        $produtos = Produto::paginate(3);

        return view('site.home', [
            'produtos' => $produtos
        ]);
    }

    public function details($slug) {
        $produto = Produto::where('slug', $slug)->first();

        // Gate::authorize('ver-produto', $produto); // Gate facade
        // $this->authorize('ver-produto', $produto); // This is the same as the above line,
                                                   // but using the Policy
        if(auth()->user()->can('verProduto', $produto)){
            return view('site.details', [
                'produto' => $produto
            ]);
        }

        if(auth()->user()->cannot('verProduto', $produto)){
            return redirect()->route('site.index');
        }
    }

    public function categoria($id) {
        $produtos = Produto::where('categoria_id', $id)->paginate(3);
        $categoria = Categoria::find($id);

        return view('site.categoria', [
            'produtos' => $produtos,
            'categoria' => $categoria
        ]);
    }
}
