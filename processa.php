<?php


include_once 'form.php';

// Carregar o Composer
require 'vendor/autoload.php';

// Formatando o PDF

//Informacoes para o PDF
$dados = "<!DOCTYPE html>";
$dados .= "<html lang='pt-br'>";
$dados .= "<head>";
$dados .= "<meta charset='UTF-8'>";
$dados .= "<title>Ticket PDF</title>";
$dados .= "</head>";
$dados .= "<body>";
$dados .= "<h1>Gerador de <span style='color:#fff; background-color:#0d3162;'>PDF</span></h1>";

$dados .= "<hr>";
$dados .= "<h2> Dados Pessoais </h2>";
$dados .= "<hr>";

$dados .= "<p>Nome: $nome <br>";
$dados .= "Genêro: $genero <br>";
$dados .= "Data de Nascimento: $idade <br>";
$dados .= "E-mail: $email <br>";
$dados .= "Telefone: $telefone | $tipo</p>";


$dados .= "<hr>";
$dados .= "<h2> Endereço </h2>";
$dados .= "<hr>";

$dados .= "<p>Rua: $rua nº $numero <br>";
$dados .= "Complemento: $complemento <br>";
$dados .= "Cep: $cep <br>"; 
$dados .= "Bairro: $bairro <br>";   
$dados .= "Cidade: $cidade <br>";
$dados .= "Estado: $estado</p>";

$dados .= "</body>";



// Referenciar o namespace Dompdf
use Dompdf\Dompdf;

// Instanciar e usar a classe dompdf
$dompdf = new Dompdf(['enable_remote' => true]);

// Instanciar o metodo loadHtml e enviar o conteudo do PDF
$dompdf->loadHtml($dados);

// Configurar o tamanho e a orientacao do papel
// landscape - Imprimir no formato paisagem
//$dompdf->setPaper('A4', 'landscape');
// portrait - Imprimir no formato retrato
$dompdf->setPaper('A4', 'portrait');

// Renderizar o HTML como PDF
$dompdf->render();

// Gerar o PDF
$dompdf->stream();
