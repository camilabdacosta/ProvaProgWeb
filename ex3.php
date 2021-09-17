<?php

$valorvenda=0;
$desconto = 0;
$icms = 0;
$comissao = 0;

if(isset($_GET['valorvenda']) && !empty($_GET['valorvenda'])){    
    $valorvenda = $_GET['valorvenda'];
    $desconto = $valorvenda *0.1;
    $icms = $valorvenda *0.12;
    $comissao = $valorvenda *0.05;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comissao</title>
</head>
<body>
    <style>
        table, th, td {
        border: 1px solid black;
}
    </style>
<table>

  <tr>
    <th>Desconto (R$)</th>
    <th>ICMS (R$)</th>
    <th>Comissão (R$)</th>   
  </tr>
  <tr>
    <td><?php echo "Desconto: {$desconto}"  ?></td>
    <td><?php echo "ICMS: {$icms}"  ?></td>
    <td><?php echo "Comissâo: {$comissao}" ?></td>   
  </tr>
</table>
</body>
</html>
