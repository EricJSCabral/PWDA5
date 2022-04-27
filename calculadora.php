<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        Selecione a operação: <br>
        <input type="radio" name="operacao" value="soma"> Soma
        <input type="radio" name="operacao" value="subtracao"> Subtração
        <input type="radio" name="operacao" value="multiplicacao"> Multiplicação
        <input type="radio" name="operacao" value="divisao"> Divisão
        <br>
        
        Digite os valores:
        <input type="number" name="numero1" heigh = 50> 
        <input type="number" name="numero2">
        <input type=submit value="Enviar"> 
</form>

    <?php

        $a = $_POST["numero1"];  
        $b = $_POST["numero2"];
        $operacao = $_POST["operacao"];

        if ($operacao === "soma")
            echo $a + $b;
        else if ($operacao === "subtracao")
            echo $a - $b;
        else if ($operacao === "multiplicacao")
            echo $a * $b;
        else if ($operacao === "divisao")
            echo $a / $b;
    ?>
    
</body>
</html>