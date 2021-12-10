<?php

namespace App\Application\Domain\Infrastructure\Projeto\Service;

use App\Application\Domain\Infrastructure\Projeto\Repository\ProjetoAdicionarRepository;

class ProjetoAdicionarService
{
    /**
     * @var ProjetoAdicionarRepository
     */
    private $repositorio;

    /**
     * Construtor.
     *
     * @param ProjetoAdicionarRepository $repositorio da ProjetoAdicionarRepository
     */
    public function __construct(ProjetoAdicionarRepository $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    /**
     * Criar um novo projeto.
     *
     * @param array $data formulario
     *
     * @return int O id do projeto
     */
    public function criarProjeto(array $data): int
    {
        $usuarioId = $this->repositorio->inserirProjeto($data);

        return $usuarioId;
    }
}
