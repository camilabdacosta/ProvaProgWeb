<?php

$medicamentos = [
    [
    'nome' => "Dipirona",
    'valor' => 7.50
    ],
   [
    'nome' => "Dorflex",
    'valor' => 23.90
   ],
    [
    'nome' => "diclofenaco",
    'valor' => 17.7
    ],
    [
        'nome' => "paracetamol",
        'valor' => 8.5
    ],
    [
        'nome' => "tylenol",
        'valor' => 15.36
    ],
    [
        'nome' => "Metilfenidato(Ritalina)",
        'valor' => 30.5
    ],
    [
        'nome' => "Adivil",
        'valor' => 9
    ],
    [
        'nome' => "Fuftal",
        'valor' => 9.34
    ]
   ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas de Medicamentos</title>
</head>
<body>
    <h6>Vendas de Medicamentos</h1>
    <form action="./ex2/post.php" method="POST">
        <div class="medicamentos">
            <?php foreach ($medicamentos as $medicamento) : ?>
                <div>
                    <input type="checkbox"  name="medicamentos[<?php echo  $medicamento['nome']; ?>]" value = "<?php echo $medicamento['valor'];?>">
                    <label for="subscribeNews"> <?php echo $medicamento['nome'] . " | R$ ".$medicamento['valor'] ?></label>
                </div>
            <?php endforeach; ?>
        </div>
        <div>
                <input type="checkbox"  name="60ouMais">
                <label for="60ouMais">Cliente tem 60 anos ou mais</label>
            </div>
        <button type="submit">Comprar</button>
    </form>
    <script>
        var max = 3;
        var elements = document.querySelectorAll(".medicamentos input[type=checkbox]");
        if(elements.length){
            for (const element of elements) {
                element.onclick = function (event) {
                    var checkedChecks = document.querySelectorAll(".medicamentos input[type=checkbox]:checked");
                    if (checkedChecks.length >= max + 1) return false;
                }
            }
        }
    </script>
</body>
</html>
