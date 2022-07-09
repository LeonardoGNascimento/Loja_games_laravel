<?php

namespace App\src\Produtora\Repository;

use App\src\Produtora\Model\Produtora;
use Illuminate\Database\Eloquent\Collection;

class ProdutoraRepository
{
    public function index(): Collection
    {
        return Produtora::all();
    }

    public function store(Produtora $nomeProdutora)
    {
        return $nomeProdutora->save();
    }

    public function show($id)
    {
        return Produtora::find($id);
    }

    public function update(Produtora $produtora)
    {
        Produtora::where('id', $produtora->id)
            ->update(['nome' => $produtora->nome]);

        return $produtora;
    }

    public function buscarPorNome($nome)
    {
        $resultado = Produtora::where('nome', $nome)->fist();

        if (empty($resultado)) {
            return null;
        }

        return $resultado;
    }
}
