<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['nome' => 'fornecedor1', 'status' => 'ativo'],
            1 => ['nome' => 'fornecedor1', 'status' => 'ativo','CNPJ'=> '']
            
        ];
        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
