<?php

$funcionarios = [
    [
        'nome' => 'Alessandra',
        'idade' => 18,
        'organizacao' => '1',
        'salario' => '5000',
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
    ],
];

// Resposta 1-a
function yongerWorker($funcionarios)
{
    $youngerAge = 0;
    $youngerWorker = [];

    foreach ($funcionarios as $k) {
        if ($youngerAge == 0) {
            $youngerWorker = $k;
            $youngerAge = $k['idade'];
        } else {
            if ($k['idade'] < $youngerAge) {
                $youngerWorker = $k;
                $youngerAge = $k['idade'];
            }
        }
    }

    return $youngerWorker['nome'];
}

echo 'Nome do funcionário mais novo: ' . yongerWorker($funcionarios);
echo '<br>==================================<br><br>';

// Resposta 1-b
function workersByOrganization($funcionarios)
{
    $newArray = [];
    foreach ($funcionarios as $k) {
        $newArray[$k['organizacao']]['funcionarios'][] = $k;
    }

    ksort($newArray);
    return $newArray;
}

echo 'Funcionários por organização';
print('<pre>');
print_r(workersByOrganization($funcionarios));
print('</pre>');

echo '<br>==================================<br><br>';

// Resposta 1-c
function averagePayments($funcionarios)
{
    $total = $count = $average = 0;
    foreach ($funcionarios as $k) {
        $total += $k['salario'];
        $count++;
    }
    $average = $total / $count;
    return $average;
}

echo 'Media de salarios dos funcionários: ' . averagePayments($funcionarios);
echo '<br>==================================<br><br>';

// Resposta 1-d
function orderByName($funcionarios)
{
    $arrayNames = [];
    $arraySorted = [];
    foreach ($funcionarios as $k) {
        $arrayNames[] = $k['nome'];
    }
    asort($arrayNames);

    foreach ($arrayNames as $l => $v) {
        foreach ($funcionarios as $m) {
            if ($v == $m['nome']) {
                $arraySorted[] = $m;
            }
        }
    }

    return $arraySorted;

}

echo 'Funcionários ordenados por nome';
print('<pre>');
print_r(orderByName($funcionarios));
print('</pre>');
echo '<br>==================================<br><br>';

// Resposta 2-recursão

function minDivisibleByRecursion($number = 1, $divisible = 4, $maxDivisible = 6)
{
    $inicio1 = microtime(true);
    if ($number % $divisible == 0) {
        if ($divisible == $maxDivisible) {
            $termino1 = microtime(true) - $inicio1;
            echo 'tempo de execução minDivisibleByRecursion: ' . $termino1 . "<br>";
            return $number;
        } else {
            $divisible++;
            return minDivisibleByRecursion($number, $divisible, $maxDivisible);
        }
    } else {
        $number++;
        $divisible = 4;
        return minDivisibleByRecursion($number, $divisible, $maxDivisible);
    }

}

echo 'menor numero divisivel por 4, 5 e 6 (recursão): ' . minDivisibleByRecursion();
echo '<br>==================================<br><br>';

// Resposta 2-repetição

function minDivisibleByRepeat($number = 1, $divisible = 4, $maxDivisible = 6)
{
    $inicio2 = microtime(true);
    do {
        if ($number % $divisible == 0) {
            $divisible++;
        } else {
            $divisible = 4;
            $number++;
        }
    } while ($divisible <= $maxDivisible);
    $termino2 = microtime(true) - $inicio2;
    echo 'tempo de execução minDivisibleByRepeat: ' . $termino2 . "<br>";

    return $number;

}

echo 'menor numero divisivel por 4, 5 e 6 (repetição): ' . minDivisibleByRepeat();
echo '<br>==================================<br><br>';

// Resposta 3 - arquivo de classe - concatenate.class.php
require 'concatenate.class.php';
$concat = new Concatenate();
echo $concat->concatenateProps('Frase', 'está', 'concatenada');

// Resposta 4 - desculpe, não consegui entender bem o enunciado. Geralmente eu utilizo o padrão MVC, já estou acostumado a utilizar com CodeIgniter.
// Nesta classe eu teria uma view que receberia o valor concatenado e um controller que faria a concatenação
/**
 * Então, basicamente:
 *
 * model
 * class Concatenate {
 *  // props e valores
 * }
 *
 * controller
 * class concatenateController{
 *
 * $concat = new Concatenate();
 *
 *  function returnConcatenateText($text1, $text2, $text3){
 *      $concat->concatenateProps($text1, $text2, $text3);
 *      return $concat;
 *  }
 * }
 *
 *
 * view
 * class concatenateView(){
 *
 *
 * function viewPage(){
 *  $controller = new ConcatenateController();
 *  $texto = $controller->returnConcatenateText('texto', 'texto', 'texto');
 *
 *  $this->smarty->assign('texto', $texto);
 *  $this->smarty->display('texto.tpl');
 *  }
 *
 * }
 *
 * No final o HTML estaria em um arquivo texto.tpl com a variavel texto sendo utilizada para retornar o valor
 */

// Resposta 5
function armazenarConhecimentos($conhecimentos)
{
    $pessoa = new StdClass;

    $props = [
        'nome' => 'Meu nome',
        'organizacao' => 'Nova Organização',
        'telefone' => 'Telefones',
        'emails' => 'Emails',
        'conhecimentos' => [],
    ];

    foreach ($props as $k => $v) {
        $pessoa->$k = $v;
    }

    foreach ($conhecimentos as $k => $conhecimento) {
        $pessoa->conhecimentos[$k] = $conhecimento;
    }

    return $pessoa->conhecimentos;
}

$conhecimentos = [
    "Js",
    "Php",
    "C#",
    "NodeJs",
];

// TESTES DE SQL - arquivo testeSQL.sql
