<?php
$nome = $email = $telefone = $username = $password = "";

// Verifica se os dados do formulário foram enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
     // Cria uma string com os dados do formulário
     $dados_formulario = "$nome|$telefone|$email|$username|$password\n";

     // Abre o arquivo para escrita (ou cria se não existir)
     $arquivo = fopen('dados.txt', 'a');
 
     // Escreve os dados no arquivo
     fwrite($arquivo, $dados_formulario);
 
     // Fecha o arquivo
     fclose($arquivo);
 
     echo "Cadastro realizado com sucesso!";
} 

?>