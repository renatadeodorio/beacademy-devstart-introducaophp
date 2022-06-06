<?php

$a1 = [
    'nome' => "Renata",
    'email' => "renata@gmail.com",
    'telefone' =>"79 9999 8256",
    'notas' => [
         9.8,
         8.5,
         7,
    ]
];

$a2 = [
    'nome' => "Renan",
    'email' => "renan@gmail.com",
    'telefone' => "79 98989 8523",
    'notas' => [
       10,
      9.5,
      7.5,
    ]
];

$a3 = [
    'nome' => "Rafael",
    'email' => "rafael@gmail.com",
    'telefone' => "79 98852 0238",
    'notas' => [
      6.5,
      8.5,
      8.5,
    ]
];

$a4 = [
    'nome' => "Rafaela",
    'email' => "rafaela@gmail.com",
    'telefone' => "79 99568 3256",
    'notas' => [
       10,
      7.5,
      9.5,
    ]
];

$alunos = [
    $a1,
    $a2,
    $a3,
    $a4,
];
?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class= 'mt-5'>Alunos</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
        </thead>
        <tbody>
            <?php
                foreach ( $alunos as $CadaAluno ) {
                    echo "<tr>";
                        echo '<td>' . $CadaAluno['nome'] . "</td>";
                        echo '<td>' . $CadaAluno['email'] . "</td>";
                        echo '<td>' . $CadaAluno['telefone'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>