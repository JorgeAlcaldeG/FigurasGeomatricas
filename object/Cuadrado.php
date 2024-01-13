<?php
include("FiguraGeometrica.php");
include("PerimetroM.php");
class cuadrado extends figuraGeometrica implements perimetroM{
    function perimetro():float{
        return $this->getlado()*4;
    }
    function area():float{
        return $this->getlado()*$this->getlado();
    }
}
