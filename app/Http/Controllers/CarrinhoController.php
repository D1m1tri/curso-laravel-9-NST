<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista(){
        $itens = \Cart::getContent();
        return view('site.carrinho', ["itens" => $itens]);
    }

    public function adicionaCarrinho(Request $request){
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => abs($request->qnt),
            'attributes' => array(
                'image' => $request->img
            )
        ]);

        return redirect()->route('site.carrinho')->with('sucesso', 'Produto adicionado ao carrinho!');
    }

    public function removeCarrinho(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('site.carrinho')->with('sucesso', 'Produto removido do carrinho!');
    }

    public function atualizaCarrinho(Request $request){
        \Cart::update($request->id, [
            'quantity' => array(
                'relative' => false,
                'value' => abs($request->qnt)
            )
        ]);
        return redirect()->route('site.carrinho')->with('sucesso', 'Carrinho atualizado!');
    }

    public function limparCarrinho(){
        \Cart::clear();
        return redirect()->route('site.carrinho')->with('aviso', 'Carrinho limpo!');
    }
}
