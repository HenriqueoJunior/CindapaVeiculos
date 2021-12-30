<?php

session_start();
include_once 'connection.php';

$chassi = filter_input(INPUT_POST, 'chassi', FILTER_SANITIZE_SPECIAL_CHARS);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_SPECIAL_CHARS);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_SPECIAL_CHARS);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_SPECIAL_CHARS);
$placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_SPECIAL_CHARS);
$caracteristica1 = filter_input(INPUT_POST, 'caracteristica1', FILTER_SANITIZE_SPECIAL_CHARS);
$caracteristica2 = filter_input(INPUT_POST, 'caracteristica2', FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect = $link->query("select placa from veiculos");
$array_placas = [];

while ($placas = $querySelect->fetch_assoc()):
    $placas_cadastradas = $placas['placa'];
    array_push($array_placas, $placas_cadastradas);
endwhile;

if (in_array($placa, $array_placas)) :
    $_SESSION['msg'] = "<p class='center red-text'>" . 'Está placa já existe no banco de dados!<br>' . 'Informe uma nova placa.' . "</p>";
    header("location:../cadastrar.php");
elseif ($caracteristica1 == $caracteristica2): 
        $_SESSION['msg'] = "<p class='center red-text'>" . 'Caracteristicas repetidas!<br>' . 'Por favor, informe caracteristicas distindas.' . "</p>";
        header("location:../cadastrar.php");
    
else:
    $queryInsert = $link->query("insert into veiculos values(default,'$chassi','$marca','$modelo','$ano','$placa','$caracteristica1','$caracteristica2')");
    $_SESSION['msg'] = "<p class='center green-text'>" . 'Veículo cadastrado com sucesso!' . "</p>";
    header("location:../gerenciar.php");
        
endif;



