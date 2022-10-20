<?php 
    $db_host= 'localhost';
    $db_user= 'root';
    $db_password= '';
    $db_name = 'form-helpc';

    $conexao = new mysqli($db_host,$db_user,$db_password,$db_name);
    
    /*if($conexao -> connect_errno){
        echo "não funcionou";
    }else{
        echo "Funcionou";
    }*/

?>