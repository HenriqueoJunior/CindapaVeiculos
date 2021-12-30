<?php

include_once 'connection.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$queryDelete = $link->query("delete from veiculos where id='$id'");

if (mysqli_affected_rows($link) > 0):
    $_SESSION['msg'] = "<p class='center green-text'>" . 'Veículo excluido com sucesso!' . "</p>";
    header("location:../gerenciar.php");
endif;