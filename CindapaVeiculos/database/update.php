<?php

session_start();
include_once 'connection.php';
$id = $_SESSION['id'];

$chassi = filter_input(INPUT_POST, 'chassi', FILTER_SANITIZE_SPECIAL_CHARS);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_SPECIAL_CHARS);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_SPECIAL_CHARS);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_SPECIAL_CHARS);
$placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_SPECIAL_CHARS);
$caracteristica1 = filter_input(INPUT_POST, 'caracteristica1', FILTER_SANITIZE_SPECIAL_CHARS);
$caracteristica2 = filter_input(INPUT_POST, 'caracteristica2', FILTER_SANITIZE_SPECIAL_CHARS);


$querySelect = $link->query("select placa from veiculos where not id='$id'");
$array_placas = [];

while ($placas = $querySelect->fetch_assoc()):
    $placas_cadastradas = $placas['placa'];
    array_push($array_placas, $placas_cadastradas);
endwhile;

if ($caracteristica1 == $caracteristica2):
    $_SESSION['msg'] = "<p class='center red-text'>" . 'Caracteristicas repetidas!<br>' . 'Por favor, insira caracteristicas distindas.' . "</p>";
    header("location:../alterar.php?id=$id");

elseif (in_array($placa, $array_placas)) :
    $_SESSION['msg'] = "<p class='center red-text'>" . 'Está placa já existe no banco de dados!<br>' . 'Informe uma nova placa.' . "</p>";
    header("location:../alterar.php?id=$id");

else:
    $queryUpdate = $link->query("update veiculos set chassi='$chassi', marca='$marca', modelo='$modelo', ano='$ano', placa='$placa',caracteristica1='$caracteristica1',caracteristica2='$caracteristica2' where id='$id'");
    $_SESSION['msg'] = "<p class='center green-text'>" . 'Veículo alterado com sucesso!' . "</p>";
    header("location:../gerenciar.php");
        
endif;