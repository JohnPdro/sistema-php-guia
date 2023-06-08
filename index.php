<?php
include "cabecalho.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="display-6 text-center mt-4 mt-3">Sistema <span class="text-success-emphasis">Zoo</span></h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col m-5 border border-success-subtle rounded pt-3 pb-3 btn">
            <a href="cadastro.php" class="btn">
                <img src="img/cadastro.png">
                <br>
                <strong>CADASTRO ANIMAL</strong>
            </a>
        </div>
        <div class="col m-5 border rounded border-success-subtle pt-3 pb-3 btn">
            <a href="animais.php" class="btn">
                <img src="img/animais.png">
                <br>
                <strong>ANIMAIS</strong>
            </a>
        </div>
        <div class="col m-5 border rounded border-success-subtle pt-3 pb-3 btn">
            <a href="ongs.php" class="btn">
                <img src="img/ongs.png">
                <br>
                <strong>ONGS</strong>
            </a>
        </div>
    </div>

    <?php
    include "rodape.php";
    ?>