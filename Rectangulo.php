<?php
include("FiguraGeometrica.php");
include("PerimetroM.php");
class rectangulo extends figuraGeometrica implements perimetroM{
    private int $lado2;
    function setlado2(int $lado){
        $this->lado2 = $lado;
    }
    function getlado2():int{
        return $this->lado2;
    }
    function perimetro():float{
        return "hola";
    }
    function area():float{
        return $lado * $lado2;
    }
}
