<?php

namespace App\Application\Actions\Atividade;

use App\Application\Domain\Infrastructure\Atividade\Service\AtividadeAdicionarService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class AtividadeAdicionarAction
{
    private $atividadeAdicionar;

    public function __construct(AtividadeAdicionarService $AtividadeAdicionar)
    {
        $this->atividadeAdicionar = $AtividadeAdicionar;
    }

    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        // TODO: CRIAR UM MODELO PADRÃO PARA O INVOKE

        // Collect input from the HTTP request
        $data = (array)$request->getParsedBody();

        // Invoke the Domain with inputs and retain the result
        $usuarios = $this->atividadeAdicionar->criarAtividade($data);

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($usuarios));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}
