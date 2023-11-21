<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tabela de Alunos </title>
</head>
<body>

<?php
    $alunos[] = array(
        "Nome" => $nome,
        "Matricula" => $matricula,
        "Nota1" => $nota1,
        "Nota2" => $nota2,
);

function media($nota1, $nota2) {
    return ($nota1 + $nota2) / 2;
}

echo '<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Matrícula</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Média</th>
        </tr>
    </thead>
    <tbody>';

foreach ($alunos as $aluno) {
    echo '<tr>
            <td>' . $aluno["Nome"] . '</td>
            <td>' . $aluno["Matricula"] . '</td>
            <td>' . $aluno["Nota1"] . '</td>
            <td>' . $aluno["Nota2"] . '</td>
            <td>' . media($aluno["Nota1"], $aluno["Nota2"]) . '</td>
          </tr>';
}

echo '</tbody>
      </table>';
?>

</body>
</html>
