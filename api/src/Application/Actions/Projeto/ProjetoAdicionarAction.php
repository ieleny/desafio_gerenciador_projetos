<?php

namespace App\Application\Actions\Projeto;

use App\Application\Domain\Infrastructure\Projeto\Service\ProjetoAdicionarService;
use App\Application\TemplateMethod\RespostaActionTemplateMethod;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ProjetoAdicionarAction extends RespostaActionTemplateMethod
{
    private $projetoAdicionar;

    public function __construct(ProjetoAdicionarService $projetoAdicionar)
    {
        $this->projetoAdicionar = $projetoAdicionar;
    }

    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        return $this->respostaAction($request, $response);
    }

    function operarInformacaoArmazenada($data)
    {
        return $this->projetoAdicionar->criarProjeto($data);
    }
}
