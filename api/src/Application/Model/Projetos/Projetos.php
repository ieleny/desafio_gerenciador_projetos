<?php

declare(strict_types=1);

namespace App\Action\Input;

use DateTime;

final class Projetos
{
    private int $atividades_id;
    private int $projetos_id;
    private string $atividades_nome;
    private DateTime $atividades_data_inicio;
    private DateTime $atividades_data_fim;
    private bool $atividades_finalizada;
    private DateTime $atividades_data_criacao;

    public function __construct(
        int $projetos_id,
        string $atividades_nome,
        DateTime $atividades_data_inicio,
        DateTime $atividades_data_fim,
        bool $atividades_finalizada
    ) {
        $this->projetos_id = $projetos_id;
        $this->atividades_nome = $atividades_nome;
        $this->atividades_data_inicio = $atividades_data_inicio;
        $this->atividades_data_fim = $atividades_data_fim;
        $this->atividades_finalizada = $atividades_finalizada;
    }

    public function getAtividadesId(): int
    {
        return $this->atividades_id;
    }

    public function getProjetosId(): int
    {
        return $this->projetos_id;
    }

    public function setProjetosId(int $projetos_id): void
    {
        $this->projetos_id = $projetos_id;
    }

    public function getAtividadesNome(): string
    {
        return $this->atividades_nome;
    }

    public function getAtividadesDataInicio(): DateTime
    {
        return $this->atividades_data_inicio;
    }
}
