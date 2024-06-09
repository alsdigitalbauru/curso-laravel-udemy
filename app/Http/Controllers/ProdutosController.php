<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {
        $db_produtos = Produto::all();

        return view('pages.produtos.listar-produtos', compact('db_produtos'));
    }
}
