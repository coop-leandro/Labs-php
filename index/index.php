
<?php 

class Calculadora{
    
    public function somar($a, $b){
        echo $a + $b;
    }

    public function diminuir($a, $b){
        echo $a - $b;
    }

    public function mult($a, $b){
        echo $a * $b;
    }

    public function dividir($a, $b){
        echo $a / $b;
    }

}

$calc = new Calculadora;

echo $calc->somar(4,5) . "<br>";
echo $calc->diminuir(4,5) . "<br>";
echo $calc->mult(4,5) . "<br>";
echo $calc->dividir(4,5) . "<br>";


