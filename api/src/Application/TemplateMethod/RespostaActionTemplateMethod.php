<?php

namespace App\Application\TemplateMethod;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

abstract class RespostaActionTemplateMethod
{

    final public function respostaAction(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->resposta($request, $response);
    }

    abstract protected function operarInformacaoArmazenada($data);

    protected function resposta($request, $response)
    {
        $dados = (array)$request->getParsedBody();

        $funcaoServico = $this->operarInformacaoArmazenada($dados);
        $response->getBody()->write((string)json_encode($funcaoServico));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}
