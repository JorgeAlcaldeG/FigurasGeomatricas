<?php
    function validateInput($input){
        if($input =="" || $input ==NULL || $input <= 0){
            return false;
        }else{
            return true;
        }
    }
?>