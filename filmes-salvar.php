<?php
$nome = $_POST['nome'];
$foto = $_POST['foto'];
$ano = $_POST['ano'];
$avaliacao = $_POST['avaliacao'];
$trailer = $_POST['trailer'];
$genero = $_POST['genero'];
$duracao = $_POST['duracao'];
$descricao = $_POST['descricao'];
 
include "inc-conexao.php";
$sql = "insert into tb_filmes (nome_filme, foto_de_capa, ano, avaliacao, trailer, genero, duracao, descricao) values('$nome', '$foto', $ano, '$avaliacao', '$trailer', '$genero', $duracao, '$descricao')";
$resultado = mysqli_query($conn, $sql);
 
echo "Conteudo inserido com sucesso!!";

mysqli_close($conn);
?>