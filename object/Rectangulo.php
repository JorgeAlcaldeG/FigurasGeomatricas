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
        return 2*($this->getlado()+$this->getlado2());
    }
    function area():float{
        return $this->getlado()*$this->getlado2();
    }
}
