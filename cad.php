<?php
include "conexao.php";


$nome = $_POST ['nome'];
$endereco = $_POST ['endereco'];
$telefone = $_POST ['telefone'];
$data = $_POST ['data'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];

$sql = mysqli_query($conexao,  "INSERT INTO cadastro(nome,endereco,telefone,data,email,senha) VALUES('$nome','$endereco','$telefone','$data','$email','$senha')");

if($sql=mysqli_query($conexao,$sql)){
    echo "$nome cadastrado com sucessso";
}else{
    echo "usuario não encontrado". mysqli_error($conexao);
}
?>