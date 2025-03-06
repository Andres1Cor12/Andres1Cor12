<?php
    $x = $_POST['p1'];
    $y = $_POST['p2'];
    $z = $x + $y;
    if($z>40000){
        $des= $z*0.2;
        $total = $z - $des;
        print "El Valor a pagar es: ". $total;  //aca va cuando la condicional es "SI"

    }else{
      print "El Valor a pagar es: ". $z; //aca va cuando el condicional es "NO"
    }
?>