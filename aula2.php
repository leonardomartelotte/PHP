<!DOCTYPE html>

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         //Entrando com valores na ULR- metodo GET
        $a=$_GET["x"];
        $b=$_GET["y"];
        $c=$_GET["t"];
        echo "<br>O valor de A: $a";
        echo "<br>O valor de B: $b";
        echo "<br>O valor de C: $c"; 
        $soma=$a+$b+$c;
        echo "A soma de a,b e c é:$soma<br>";
        //Funçoes matematicas]
        //Valor absoluto (abs)- desconsidera o sinal negativo
        
        echo"<br>O valor absoluto de a é:".abs($a);
        
        //Raiz quadrada
        echo"<br>A raiz quadrada de b é:".sqrt($b);
        
        //Potencia -pow
        echo"<br>A potencia de c é:".pow($c,2);
        //Arredondar
        echo"<br> O valor arredondado de $a é:".round($a);
        echo"<br>Arredondado de $a é:".ceil($a);//Arredonda para cima
        echo"<br>O valor arredondado de $a é:".floor($a);//arredonda para baixo
        
        //valor inteiro da variavel - intval pega somente o valor inteiro
        
        echo"<br>O valor de $b é:".intval($b);
        //Formataçao - number_format()
        
        echo"<br>O valor de $b é: ".number_format($b,1);
        
        
        ?>
    </body>
</html>