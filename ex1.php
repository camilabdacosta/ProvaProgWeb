<?php

$_POST['notas'] = [
   [
    'nomealuno' => "Aluno 1",
    'nota' => 10
   ],
   [
    'nomealuno' => "Aluno 2",
    'nota' => 7
   ], [
    'nomealuno' => "Aluno 3",
    'nota' => 9
   ]
   ];
$notas = [];

if(isset($_POST['notas']) && !empty($_POST['notas'])){

    foreach( $_POST['notas'] as $nota){
        $notas[$nota['nomealuno']] = $nota['nota'];
    }
     arsort($notas);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <style>
        table, th, td {
  border: 1px solid black;
}
    </style>
<table>

  <tr>
    <th>Nome</th>
    <th>Nota</th>
   
  </tr>
  <?php foreach ($notas as $nomealuno => $nota) : ?>
  <tr>
    <td><?php echo $nomealuno  ?></td>
    <td><?php echo $nota  ?></td>
  </tr>
  <?php endforeach; ?>
</table>
</body>
</html>
