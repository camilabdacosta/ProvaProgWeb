<?php
  $medicamentos = isset($_POST['medicamentos'])? $_POST['medicamentos'] : [];
  $desc = isset($_POST['60ouMais']);
  $soma = array_sum($medicamentos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Pedido</title>
</head>
<body>
<table>

<tr>
  <th>Nome </th>
  <th>Valor</th>
</tr>

<?php foreach ($medicamentos as $medicamento => $nome) : ?>
<tr>
  <td><?php echo $medicamento  ?></td>
  <td><?php echo $nome  ?></td>
</tr>
<?php endforeach; ?>
<tr>
    <td>
        Total <?php echo (!$desc)? " a Pagar" :"";?>
    </td>
    <td>
    <?php echo $soma  ?>
    </td>
</tr>

<?php if($desc) : ?>
    <tr>
    <td>
        Desconto
    </td>
    <td>
    <?php echo $soma * 0.05  ?>
    </td>
</tr>
<tr>
    <td>
        Total a Pagar
    </td>
    <td>
    <?php echo $soma - ($soma * 0.05)  ?>
    </td>
</tr>
<?php endif; ?>

</table>
</body>
</html>