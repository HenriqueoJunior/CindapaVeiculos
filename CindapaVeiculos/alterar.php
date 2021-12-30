<?php session_start() ?>
<?php
include_once 'componentes/header.php';
?>
<?php include_once 'componentes/navbar.php'; ?>


<div class="row container">
    <div class="col s12">
        <h4>Alterar Veiculo</h4><hr>
    </div>
</div>

<?php
include_once 'database/connection.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
$querySelect = $link->query("select * from veiculos where id='$id'");

while ($registros = $querySelect->fetch_assoc()):
    
    $chassi = $registros['chassi'];
    $marca = $registros['marca'];
    $modelo = $registros['modelo'];
    $ano = $registros['ano'];
    $placa = $registros['placa'];
    $caracteristica1 = $registros['caracteristica1'];
    $caracteristica2 = $registros['caracteristica2'];
endwhile;
?>


<div class="container">
    
    <div class="row">
        <?php
        if (isset($_SESSION['msg'])):
            echo $_SESSION['msg'];
            session_unset();
        endif;
        ?>
        <form class="col s12" method="post" action="database/update.php">
            <label for="chassi">Número do Chassi</label>
            <input type="text" name="chassi" minlength="5" value="<?php echo $chassi ?>" required autofocus>
            <label for="marca">Marca</label>
            <input type="text" name="marca" value="<?php echo $marca ?>" required autofocus>
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" value="<?php echo $modelo ?>" required autofocus>
            <label for="ano">Ano</label>
            <input type="text" name="ano" minlength="4" value="<?php echo $ano ?>" required autofocus>
            <label for="placa">Placa</label>
            <input type="text" name="placa" minlength="6" value="<?php echo $placa ?>" required autofocus>
            <label for="caracteristicas">Caracteristicas</label>
            <div class="row">
                <select class="browser-default col s6 m6" name="caracteristica1" required autofocus>
                    <option value="<?php echo $caracteristica1 ?>" selected ><?php echo $caracteristica1 ?></option>
                    <option value="ESPORTE">ESPORTE</option>
                    <option value="CLASSICO">CLASSICO</option>
                    <option value="TURBO">TURBO</option>
                    <option value="ECONOMICO">ECONOMICO</option>
                    <option value="PARA CIDADE">PARA CIDADE</option>
                    <option value="PARA LONGAS VIAGENS">PARA LONGAS VIAGENS</option>
                </select>
                <select class="browser-default col s6 m6" name="caracteristica2" required autofocus>
                    <option value="<?php echo $caracteristica2 ?>" selected ><?php echo $caracteristica2 ?></option>
                    <option value="ESPORTE">ESPORTE</option>
                    <option value="CLASSICO">CLASSICO</option>
                    <option value="TURBO">TURBO</option>
                    <option value="ECONOMICO">ECONOMICO</option>
                    <option value="PARA CIDADE">PARA CIDADE</option>
                    <option value="PARA LONGAS VIAGENS">PARA LONGAS VIAGENS</option>
                </select>
            </div>
            <button type="submit" class="waves-effect waves-light btn">Alterar</button>
            <a href="gerenciar.php"> <button type="button" class="waves-effect waves-light btn grey">Voltar</button></a>
        </form>
    </div>

</div>

<?php include_once 'componentes/footer.php'; ?>
