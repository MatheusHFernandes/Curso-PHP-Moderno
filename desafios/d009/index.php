<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <?php 
            $v1 = (float) ($_REQUEST['v1'] ?? 1);
            $p1 = (float) ($_REQUEST['p1'] ?? 1);
            $v2 = (float) ($_REQUEST['v2'] ?? 1);
            $p2 = (float) ($_REQUEST['p2'] ?? 1);
        ?>
        <h1>Média Aritmética</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" id="v1" name="v1" step="0.01" required value="<?= $v1 ?>">
            <label for="p1">Peso 1</label>
            <input type="number" id="p1" name="p1" step="0.01" required value="<?= $p1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" id="v2" name="v2" step="0.01" required value="<?= $v2 ?>">
            <label for="p2">Peso 2</label>
            <input type="number" id="p2" name="p2" step="0.01" required value="<?= $p2 ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        //Calculos
        $ma = ($v1 + $v2) / 2;
        $mp = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);

        echo "<p>A média aritmética entre $v1 e $v2 é " . number_format($ma, 2, ",", ".") . "</p>";
        echo "<p>A média ponderada entre $v1 e $v2 é " . number_format($mp, 2, ",", ".") . "</p>";

        ?>
    </section>
</body>
</html>