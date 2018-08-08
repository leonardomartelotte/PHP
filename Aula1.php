<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula1</title>
    </head>
    <body>
        <?php
        echo "<center><font size=15 >Boa Noite!!!</center></font><br>";
        $n1=10;
        $n2=5;
        $nome="Gabriel Roland<br>";
        echo "O valor de n1 é:$n1<br>";
        echo "O valor de n2 é:$n2<br>";
        echo "O nome é:$nome";
        //Operadores aritmeticos :+,-,*,/,% //
        //soma
        $soma=$n1+$n2;
        echo "A soma de n1 + n2 é : $soma<br>";
        //subtraçao
         $sub=$n1-$n2;
        echo "A subtração de n1 - n2 é : $sub<br>";
        //Multiplicaçao
         $mult=$n1*$n2;
        echo "A Multiplicação de n1 * n2 é : $mult<br>";
        //Divisao
         $div=$n1/$n2;
        echo "A Divisão de n1 / n2 é : $div<br>    ";
        //O resto
         $resto=$n1%$n2;
        echo "O resto de n1 % n2 é : $resto<br>";
        //outra maneira de fazer as operaçoes
        echo "A soma de n1 e n2 é ".($n1+$n2);
        
        
        ?>
    </body>
</html>
