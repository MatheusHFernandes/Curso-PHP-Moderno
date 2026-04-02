<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $salario = $_REQUEST['sal'] ?? 0;
        
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="" method="POST">
            <label for="salario">Valor em R$</label>
            <input type="number" name="sal" id="sal" value="<?= $salario ?>">
            <input type="submit" value="Calcular">
        </form>
        <section>

        <h2>Resultado</h2>
        <?php
            //calculos 
            $salariomin = 1621.00;
            $totsalarios = intdiv($salario, $salariomin);
            $resto = $salario % $salariomin;
            echo "Seu salário é de R$ " . number_format($salario, 2, ",", ".") . " que é equivalente a " . $totsalarios . " salarios minimos. <br> Resto: R$ " . number_format($resto, 2, ",", ".");
        ?>
        </section>
    </main>
</body>
</html>