# API

# PHP

## Executar o projeto

# MYSQL
## Terminal
- Acessar o banco de dados pelo terminal
    ~~~~sql
        mysql -u root -p
    ~~~~
-  Criar database 
    ~~~~sql
        CREATE DATABASE desafio_gerenciador_projetos;
    ~~~~
- Execute esse script

    # Tabela projeto
    ~~~~sql
        CREATE TABLE IF NOT EXISTS projetos
        (
            projetos_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            projetos_nome VARCHAR(255) NOT NULL,
            projetos_data_inicio DATE,
            projetos_data_fim DATE,
            projetos_data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );
    ~~~~
    # Tabela atividades
    ~~~~sql
        CREATE TABLE IF NOT EXISTS atividades
        (
            atividades_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            projetos_id INT(11) NOT NULL,
            atividades_nome VARCHAR(255) NOT NULL,
            atividades_data_inicio DATE,
            atividades_data_fim DATE,
            atividades_finalizada BOOLEAN NOT NULL DEFAULT FALSE,
            atividades_data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (projetos_id)
                REFERENCES projetos(projetos_id)
                ON UPDATE RESTRICT ON DELETE CASCADE
        );
    ~~~~
