<?php
$nome = filter_input(INPUT_POST, 'nome');
$genero = filter_input(INPUT_POST, 'genero');
$idade = filter_input(INPUT_POST, 'idade');
$email = filter_input(INPUT_POST, 'mail');
$telefone = filter_input(INPUT_POST, 'fone');
$tipo = filter_input(INPUT_POST, 'tipo');


$cep = filter_input(INPUT_POST, 'cep');
$rua = filter_input(INPUT_POST, 'rua');
$numero = filter_input(INPUT_POST, 'numero');
$complemento = filter_input(INPUT_POST, 'complemento');
$bairro = filter_input(INPUT_POST, 'bairro');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');




$form = ["$nome,$genero,$idade,$email,$telefone,$tipo,$cep,$rua,$numero,$complemento,$bairro,$cidade,$estado"];

foreach($form as $dados){
    
};



