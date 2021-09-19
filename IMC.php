<?php

    $peso = 60; //peso em kg
    $altura = 1.74; //altura em metros
    $IMC; //IMC = índice massa corpórea

    $IMC = $peso / ($altura * $altura);

    echo "Agora será calculado o seu IMC conforme os seus dados.<br><br>";
    echo "O seu IMC é: $IMC<br><br>";

    if($IMC < 20){
        echo "O seu peso é considerado baixo.";
    }

    else if($IMC > 25){
        echo "Voce tem sobrepeso. Recomendamos praticar mais exercício físico.";
    }

    else {
        echo "O seu peso é ideal. Parabéns!";
    }



?>