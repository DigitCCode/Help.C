<?php 
session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){

        include_once('php/config.php');
        $email = $_POST['email'];
		$senha = $_POST['password'];

        /*print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha);*/
        $sql = "SELECT * FROM users WHERE email = '$email' and senha = '$senha'";
        $result = $conexao->query($sql);
        //print_r($result);
        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: login.php');
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $senha;
            header('Location: pag_user.php');
        }
    }else{
        header('Location: login.php');
    }

?>