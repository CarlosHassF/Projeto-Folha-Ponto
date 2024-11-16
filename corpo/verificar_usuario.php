<?php
require("../config/conn.php");
   session_start();
    if(isset($_POST["email-usuario"])){

        $email=$_POST["email-usuario"];
        $senha = $_POST["password-usuario"];
        
        
        $connect = $conn -> query("SELECT * FROM funcionarios WHERE EMAIL = '$email' AND SENHA = '$senha'");

        $ids = $connect->fetch_assoc();
        $_SESSION["id_user"] = $ids['ID_F'];
        
        if(mysqli_num_rows($connect)==0){
            echo "erro";
            header("Location:registrar_usuario.php");   
        }else{
        
        header("Location:index.php");
        
    }


    }
 
?>
