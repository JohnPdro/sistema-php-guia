<?php
include "cabecalho.php";
?>

<main class="container">
  <form action="animais-salvar.php" method="post">
    <div class="row">
      <label for="nome">Nome *</label>
      <div class="col m-3">
        <input name="nome" id="nome" type="text" placeholder="Digite o Nome do Animal">
      </div>
    </div>

    <div class="row">
      <label for="origem">Origem *</label>
      <div class="col m-3">
        <label for="origem-ong">Ongs</label>
        <input name="origem" value="Ongs" id="origem-ong" type="radio" checked>
      </div>
      <div class="col m-3">
        <label for="origem-pessoa">Pessoas Carentes</label>
        <input name="origem" value="Pessoa Carente" id="origem-pessoa" type="radio">
      </div>
      <div class="col m-3">
        <label for="origem-rua">Rua</label>
        <input name="origem" value="Rua" id="origem-rua" type="radio">
      </div>
    </div>


    <div class="row">
      <label for="idade">Idade</label>
      <div class="col m-3">
        <input name="idade" id="idade" type="number">
      </div>
    </div>

    <div class="row">
      <label for="especie">Especie</label>
      <div class="col m-3">
        <input name="especie" id="especie" type="text">
      </div>
    </div>

    <div class="row">
      <label for="sexo">Sexo</label>
      <div class="col m-3">
        <input name="sexo">
      </div>
    </div>

    <div class="row">
      <label for="tamanho">Tamanho *</label>
      <div class="col m-3">
        <label for="tamanho-p">Pequeno</label>
        <input name="tamanho" value="Pequeno" id="tamanho-p" type="radio" checked>
      </div>
      <div class="col m-3">
        <label for="tamanho-m">Médio</label>
        <input name="tamanho" value="Médio" id="tamanho-m" type="radio">
      </div>
      <div class="col m-3">
        <label for="tamanho-g">Grande</label>
        <input name="tamanho" value="Grande" id="tamanho-g" type="radio">
      </div>
    </div>

    <input name="foto">
    <input name="cidade">
    <input name="estado">
    <input name="sobre">
    <input name="ambiente">
    <input name="comportamento">
    <button type="submit">SALVAR</button>
  </form>

</main>

<?php
include "rodape.php";
?>