<?php
    var_dump($_POST);
    if(isset($_POST)){
        if(filter_has_var(INPUT_POST, 'form1')){
            if($_POST["figura"] == 'null' || $_POST["figura"] == '' || $_POST["figura"] >4 ||$_POST["figura"] <1){
                header('Location: '.'../index.php?figuraError=true');
            }else{
                $figura = $_POST["figura"];
                header("Location: "."../infoForm.php?figura=${figura}");
            }
        }elseif(filter_has_var(INPUT_POST, 'form2')){
    
        }else{
            header('Location: '.'../index.php');  
            exit();
        }
    }else{
        header('Location: '.'../index.php');  
        exit();
    }
?>