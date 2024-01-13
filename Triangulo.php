<?php
include("FiguraGeometrica.php");
include("PerimetroM.php");
class triangulo extends figuraGeometrica implements perimetroM{
    private int $lado2;
    private int $lado3;
    function setlado2(int $lado){
        $this->lado2 = $lado;
    }
    function getlado2():int{
        return $this->lado2;
    }
    function setlado3(int $lado){
        $this->lado3 = $lado;
    }
    function getlado3():int{
        return $this->lado3;
    }
    function perimetro():float{
        return $this->getlado()+$this->getlado2()+$this->getlado3();
    }
    function area():float{
        $s = ($this->getlado()+$this->getlado2()+$this->getlado3())/2;
        return $s;
        return sqrt($s*($s-$this->getlado())*($s-$this->getlado2())*($s-$this->getlado3()));
        // return $s;
        // return $s*($s-$this->getlado())*($s-$this->getlado2())*($s-$this->getlado3());  
    }
}

// $test = new triangulo("triangulo",45);
// echo $test->getlado();
