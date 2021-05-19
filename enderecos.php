<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Tubarao', 'Humaita', 'Rua canada', '74');
$outroEndereco = new Endereco('Sao Paulo', 'Centro', 'rua teste', '560');

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
