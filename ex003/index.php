<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste tipos primitivos em PHP</h1>
    <?php
        //0x = hexadeciamal 0b= binário 0= Octal 
        $num = 0x1A;
        echo "o valor da variavel é $num";

        $v = 34.5;
        var_dump($v); // mostra o tipo da variável e o valor dela

        $num2 = 3e2; // 3 x 10(2)
        var_dump($num2);
        echo "o valor da variavel é $num2";

        $num3 = (float) "950";
        var_dump($num3);
        echo "O valor da variavel é $num3";

        $casado = true;
        var_dump($casado);
        print "O valor da variavel é $casado";
        
        $vet = [6, 2, "Joao", 3, 5, false];
        var_dump($vet);
        
        class pessoa {
            private string $nome;
        }
        
        $p = new pessoa;
        var_dump($p);
    ?>
</body>
</html>