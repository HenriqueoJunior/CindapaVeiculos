<?php session_start();?>
<?php include_once 'componentes/header.php';?>
<?php include_once 'componentes/navbar.php';?>
        <div class="container">
            <div class="row">
                <form class="col s12" method="post" action="database/create.php">
                    <h4 class="center darken-1  ">Cadastrar Veículo</h4><hr>
                    <?php 
                    if(isset($_SESSION['msg'])):
                        echo $_SESSION['msg'];
                    session_unset();
                    endif;
                    ?>
                    <label for="chassi">Número do Chassi</label>
                    <input type="text" name="chassi" minlength="5" required autofocus>
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" required autofocus>
                    <label for="modelo">Modelo</label>
                    <input type="text" name="modelo" required autofocus>
                    <label for="ano">Ano</label>
                    <input type="text" name="ano" minlength="4" required autofocus>
                    <label for="placa">Placa</label>
                    <input type="text" name="placa" minlength="6" required autofocus>
                    <label for="caracteristicas">Caracteristicas</label>
                    <div class="row">
                        <select class="browser-default col s6 m6" name="caracteristica1" required autofocus>
                            <option value="" selected disabled>Selecione a primeira caracteristica</option>
                            <option value="ESPORTE">ESPORTE</option>
                            <option value="CLASSICO">CLASSICO</option>
                            <option value="TURBO">TURBO</option>
                            <option value="ECONOMICO">ECONOMICO</option>
                            <option value="PARA CIDADE">PARA CIDADE</option>
                            <option value="PARA LONGAS VIAGENS">PARA LONGAS VIAGENS</option>
                        </select>
                        <select class="browser-default col s6 m6" name="caracteristica2" required autofocus>
                            <option value="" selected disabled>Selecione a segunda caracteristica</option>
                            <option value="ESPORTE">ESPORTE</option>
                            <option value="CLASSICO">CLASSICO</option>
                            <option value="TURBO">TURBO</option>
                            <option value="ECONOMICO">ECONOMICO</option>
                            <option value="PARA CIDADE">PARA CIDADE</option>
                            <option value="PARA LONGAS VIAGENS">PARA LONGAS VIAGENS</option>
                        </select>
                    </div>
                    <button type="submit" class="waves-effect waves-light btn green">Cadastrar</button>
                    <button type="reset" class="waves-effect waves-light btn red">Limpar</button>
                </form>
            </div>

        </div>

<?php include_once 'componentes/footer.php';?>
        


