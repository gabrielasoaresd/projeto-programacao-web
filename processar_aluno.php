<?php
$nome = $matricula = $nota1 = $nota2 = "";

// Verifica se os dados do formulário foram enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    
     // Cria uma string com os dados do formulário
     $dadosaluno_formulario = "$nome|$matricula|$nota1|$nota2\n";

     // Abre o arquivo para escrita (ou cria se não existir)
     $arquivoaluno = fopen('dadosaluno.txt', 'a');
 
     // Escreve os dados no arquivo
     fwrite($arquivoaluno, $dadosaluno_formulario);
 
     // Fecha o arquivo
     fclose($arquivoaluno);
 
     echo "Cadastro realizado com sucesso!";
} 

?>