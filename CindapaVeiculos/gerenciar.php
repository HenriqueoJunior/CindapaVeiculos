<?php session_start(); ?>
<?php include_once 'componentes/header.php'; ?>
<?php include_once 'componentes/navbar.php'; ?>

<div class="container">
    <div class="row">

        <h4 class="center darken-1  ">Gerenciar Veículos</h4><hr>
        <?php
        if (isset($_SESSION['msg'])):
            echo $_SESSION['msg'];
            session_unset();
        endif;
        ?>
        <table>
            <thead>
                <tr>
                    <th>Chassi</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Placa</th>
                    <th>Caracteriscticas</th>
                </tr>
            </thead>
            <tbody>
                <?php include_once 'database/read.php'; ?>
            </tbody>
        </table>
    </div>

</div>


<?php include_once 'componentes/footer.php'; ?>

