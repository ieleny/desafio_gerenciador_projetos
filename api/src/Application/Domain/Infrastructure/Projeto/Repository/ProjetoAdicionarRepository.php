<?php

namespace App\Application\Domain\Infrastructure\Projeto\Repository;

use App\Application\Model\Projetos\ProjetosModel;

class ProjetoAdicionarRepository
{
    /**
     * Inserir projeto.
     *
     * @param array $projeto o projeto
     *
     * @return int o novo id
     */
    public function inserirProjeto(array $dadosUsuario): int
    {
        $usuario = ProjetosModel::create([
            'projetos_nome' => $dadosUsuario['nome']
        ]);

        return $usuario->id;
    }
}
