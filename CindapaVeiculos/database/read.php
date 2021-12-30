<?php

include_once 'connection.php';

$querySelect = $link->query("select * from veiculos");

while ($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $chassi = $registros['chassi'];
    $marca = $registros['marca'];
    $modelo = $registros['modelo'];
    $ano = $registros['ano'];
    $placa = $registros['placa'];
    $caracteristica1 = $registros['caracteristica1'];
    $caracteristica2 = $registros['caracteristica2'];

    echo "<tr>";
    echo"<td>$chassi</td>
    <td>$marca</td>
    <td>$modelo</td>
    <td>$ano</td>
    <td>$placa</td>
    <td>$caracteristica1 / $caracteristica2</td>
    <td><a href='alterar.php?id=$id'><button type='button' class='waves-effect waves-light btn'>Editar</button></a></td>
    <td><a href='database/delete.php?id=$id'><button type='button' class='waves-effect waves-light btn red'>Excluir</button></a></td>";
    echo "</tr>";
endwhile;
