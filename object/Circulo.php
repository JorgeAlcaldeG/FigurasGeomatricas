<?php
include("FiguraGeometrica.php");
include("PerimetroM.php");
class circulo extends figuraGeometrica implements perimetroM{
    function perimetro():float{
        return M_PI*($this->getlado()*2);
    }
    function area():float{
        return M_PI*($this->getlado()**2);
        // M_PI;
    }
}
