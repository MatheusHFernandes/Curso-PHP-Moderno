<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Desafio PHP</title>
</head>
<body>

    <?php 
        $total = $_REQUEST['s'] ?? 0;
        $sobra = $total;
    ?>
    
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="" method="post">
            <label for="s">Total de Segundos</label>
            <input type="number" name="s" id="s" min="1" step="0.01" value="<?= $total ?>">
            <input type="submit" value="Calcular Tempo">
        </form>
    </main>

    <?php 
        //Total de semanas
        $semana = (int)($sobra / 604800);
        $sobra = $sobra % 604800;
        //Total de dias
        $dia = (int)($sobra / 86400);
        $sobra = $sobra % 86400;
        //Total de horas
        $hora = (int)($sobra / 3600);
        $sobra = $sobra % 3600;
        //Total de minutos
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;

    ?>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o Valor que você digitou, <strong><?= $total ?></strong> equivalem a um total de:</p>
        <ul>
            <li><?= $semana ?> semanas</li>
            <li><?= $dia ?> dias</li>
            <li><?= $hora ?> horas</li>
            <li><?= $minuto ?> minutos</li>
            <li><?= $sobra ?> segundos</li>
        </ul>
    </section>
</body>
</html>