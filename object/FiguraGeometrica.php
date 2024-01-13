<?php
    abstract class figuraGeometrica{
        protected string $tipoFigura;
        protected int $lado1;
        function __construct(string $tipo, float $lado){
            $this->tipo = $tipo;
            $this->lado1 = $lado;
        }
        function setTipo(string $tipo){
            $this->tipo = $tipo;
        }
        function getTipo():string{
            return $this->tipo;
        }
        function setlado(float $lado){
            $this->lado1 = $lado;
        }
        function getlado():float{
            return $this->lado1;
        }
        abstract protected function area();
    }
?>