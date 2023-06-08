<?php
//receber as informações
  $nome = $_POST["nome"];
  $origem = $_POST["origem"];
  $idade = $_POST["idade"];
  $especie = $_POST["especie"];
  $sexo = $_POST["sexo"];
  $tamanho = $_POST["tamanho"];
  $foto = $_POST["foto"];
  $cidade = $_POST["cidade"];
  $estado = $_POST["estado"];
  $sobre = $_POST["sobre"];
  $ambiente = $_POST["ambiente"];
  $comportamento = $_POST["comportamento"];

//dados da conexão
  $bd_usuario = "root";
  $bd_senha = "";
  $bd_nome_do_banco = "bd_adocao";
  $bd_servidor = "localhost";

//abrir a conexão
$conexao = mysqli_connect($bd_servidor, $bd_usuario, $bd_senha, $bd_nome_do_banco);

//criar o sql inserir
$sql = "insert into registros(nome, origem, idade, especie, sexo, tamanho, foto_animal, cidade, estado, sobre_animal, ambiente_pref, comportamento) values('$nome', '$origem', $idade, '$especie', '$sexo', '$tamanho', '$foto', '$cidade', '$estado', '$sobre', '$ambiente', '$comportamento')";


//executar o sql no banco
mysqli_query($conexao, $sql);

//fechar a conexão
mysqli_close($conexao);

//redirecionamento para a página de listagem 
header('location:animais.php');

?>