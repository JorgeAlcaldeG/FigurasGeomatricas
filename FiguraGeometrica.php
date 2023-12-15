<?php
    abstract class figuraGeometrica{
        protected string $tipoFigura;
        protected int $lado1;
        function __construct(string $tipo, int $lado){
            $this->tipo = $tipo;
            $this->lado1 = $lado;
        }
        function setTipo(string $tipo){
            $this->tipo = $tipo;
        }
        function getTipo():string{
            return $this->tipo;
        }
        function setlado(int $lado){
            $this->lado1 = $lado;
        }
        function getlado():string{
            return $this->lado1;
        }
        abstract protected function area();
    }
?>