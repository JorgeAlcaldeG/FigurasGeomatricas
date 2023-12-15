<?php
include("FiguraGeometrica.php");
include("PerimetroM.php");
class triangulo extends figuraGeometrica implements perimetroM{
    private int $lado2;
    function setlado2(int $lado){
        $this->lado2 = $lado;
    }
    function getlado2():int{
        return $this->lado2;
    }
    function perimetro():string{
        return "hola";
    }
    function area():string{
        return "hola";
    }
}

$test = new triangulo("triangulo",45);
echo $test->getlado();
