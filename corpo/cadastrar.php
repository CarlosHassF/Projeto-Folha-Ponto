<?php

    require("../config/conn.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    
   
    

    $connect = $conn -> query("SELECT EMAIL FROM funcionarios WHERE EMAIL = '$email'");
          
        if(mysqli_num_rows($connect)==0 && $email != null && $senha != null && $nome != null){
                $novo_user = "INSERT INTO funcionarios (NOME, EMAIL, SENHA) VALUES ('$nome', '$email', '$senha')"; 
                $conec = $conn ->query($novo_user);
                header("Location:index.php");
   
        }else{

        header("Location:registrar_usuario.php");
        
    }

?>