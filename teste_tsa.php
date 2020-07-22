<?php

// Questões de PHP - MySql
// Funções e arrays
// 1 - Dado o array de funcionarios abaixo, escreva:
// a) Uma função que retorne o nome do funcionário mais jovem;
// b) Uma função que gere um novo array agrupando os funcionarios por organizacao (organização como index);
// c) Uma função que retorne a média de salários;
// d) Uma função que ordene os funcionarios pelo nome;
$funcionarios = [
    [
        'nome' => 'Alessandra',
        'idade' => 18,
        'organizacao' => '1',
        'salario' => '5000'
    ],
    [
        'nome' => 'Leandro',
        'idade' => 25,
        'organizacao' => '3',
        'salario' => '1900',
    ],
    [
        'nome' => 'Bruno',
        'idade' => 23,
        'organizacao' => '1',
        'salario' => '1800',
    ],
    [
        'nome' => 'Gustavo',
        'idade' => 20,
        'organizacao' => '2',
        'salario' => '2000',
    ]
];

// Funções recursivas
// 2 - Crie uma função para imprimir em tela o menor número inteiro divisível 
// por 4, 5 e 6 ao mesmo tempo, utilizando as seguintes técnicas: 
// - Recurção
// - Com laços de repetição. 
// Qual técnica gastária mais desempenho da máquina?

// Orientação a objeto e Padrão de projeto
// 3 - Crie uma classe contendo 3 propriedades com seus respectivos gets e sets e um método que 
// concatene e retornando os 3 em uma string.
// 4 - Descreva e utilize um padrão de projeto de sua escolha para encapsular a criação da sua classe.

// Testes - PHP UNIT
// 5 - Escolha duas questões acima já resolvidas e escreva os cenários de teste para elas

// Melhoria de código
// Dado o bloco de código:
function armazenarConhecimentos($conhecimentos) {
    $pessoa = new StdClass;
    $nome = "Meu nome"; $pessoa->organizacao = "Nova Organização";
    $pessoa->nome = $nome;
    $pessoa->conhecimentos = ["None", "None", "None", "None"];
    $c = [];
    $pessoa->telefone = "Telefones";
    foreach($conhecimentos as $k => $conhecimento) {
        $c[$k] = $conhecimento;
    }
    foreach($c as $j => $d) {
        $pessoa->conhecimentos[$j] = $d;
    }
    $pessoa->emails="Emails";
    return $pessoa->conhecimentos;
}

$conhecimentos = [
    "Js",
    "Php",
    "C#",
    "NodeJs",
];

print_r(armazenarConhecimentos($conhecimentos));

// Questões de SQL - MySql
// Considere o seguinte modelo
CREATE DATABASE tsa_teste_backend_bd;
USE tsa_teste_backend_bd;

CREATE TABLE organizacao(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL,
    nome VARCHAR(200) NOT NULL,
    data_fundacao DATE NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO organizacao(nome, data_fundacao) VALUES ('empresa_1', '2020-07-01');
INSERT INTO organizacao(nome, data_fundacao) VALUES ('empresa_2', '1980-05-12');

CREATE TABLE colaborador(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    organizacao_id INT UNSIGNED NOT NULL,
    data_nascimento DATE NOT NULL,
    salario DOUBLE(9,2),
    PRIMARY KEY(id),
    FOREIGN KEY (organizacao_id) REFERENCES organizacao (id)
);

INSERT INTO colaborador(nome, data_nascimento, salario, organizacao_id) 
VALUES('Alessandra', '1998-02-06', 5000, 1);

INSERT INTO colaborador(nome, data_nascimento, salario, organizacao_id) 
VALUES('Leandro', '1990-04-09', 1900, 2);

INSERT INTO colaborador(nome, data_nascimento, salario, organizacao_id) 
VALUES('Bruno', '1987-12-08', 1800, 1);

INSERT INTO colaborador(nome, data_nascimento, salario, organizacao_id) 
VALUES('Gustavo', '1995-10-17', 2000, 2);

// 1 - Escreva uma query que retorne:
// a) O nome da organização que foi fundada por ultimo
// b) O nome do colaborador com salário maior
// c) O nome e data de nascimento dos colaboradores ordenada por salário, do maior para o menor.
// d) A idade dos colaboradoes
// e) O nome dos colaboradores e da empresa que ele faz parte

// 2 - Escreva uma query que encontre a organização que paga o maior salário
// 3 - Escreva uma query que encontre a média de salários pagos por cada empresa
// 4 - Escreva uma query que encontre a organização que tem o funcionário mais novo