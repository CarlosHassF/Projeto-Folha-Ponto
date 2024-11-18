<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "pontos";
    $conn = new mysqli($host,$user,$password,$bd);
    if($conn->connect_error){
        echo "erro na conexão: ".$mysqli->connect_errno;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@3.5.13/dist/vue.global.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Folha de Ponto</title>
</head>
<body>
    
</body>
</html>