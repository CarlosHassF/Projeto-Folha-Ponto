<?php
    require("../config/conn.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro de usuario</title>
</head>
<body>

    
    <div id="app">
    <div class="container" style="width:100vw; height:30vh; text-align:center; display:flex; align-items:center; justify-content:center;">
        <div id = "usuario_antigo" v-show="antigo">
            
            <form action="verificar_usuario.php" method="POST" style="width:100%; height:300px; display: flex; flex-direction:column; display:flex; align-items:center; justify-content:center;">
                <h3>ENTRAR</h3>
                <label for="email-usuario">Email</label>
                <input type="email" name="email-usuario" id="email">
                <label for="password-usuario">Senha</label>
                <input type="password" name="password-usuario" id="password">
                <button class="btn btn-secondary" type="submit" style="margin-top: 20px;">Entrar</button>
            </form>
        </div>
        <div id ="usuario_novo" v-show="novo">
           
            <form action="cadastrar.php" method="POST"  style=" margin-top:20px; width:100%; height:300px; display: flex; flex-direction:column; display:flex; align-items:center; justify-content:center;">
                 <h3>NOVO USUARIO</h3>
                <label for="nome">Nome</label>
                <input type="nome" name="nome" id="nome">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password">
                <button class="btn btn-secondary" type="submit"  style="margin-top:20px; ">Cadastrar Usuario</button>

            </form>

            

        </div>

    </div>
    <div class="buttons" style="width:100vw; height:10vh; text-align:center;display:flex; flex-direction:collum; flex-wrap:nowrap; align-items:center; justify-content:center;">
        <button class="btn btn-primary btn-sm" @click="EntrarConta" style="width: 200px; margin:20px; align-self:center">Já Possuo uma Conta</button>
        <button class="btn btn-primary btn-sm" @click="Registrar" style="width: 200px; margin:20px; align-self:center">Registrar-se</button>
    </div>
</div>
</body>
</html>

<script>
    const app = Vue.createApp({
    data() {
        return{
            antigo:true,
            novo:false,
        }
    },
    methods: {
       EntrarConta(){
           this.antigo = true,
           this.novo = false
       },
       Registrar(){
        this.antigo = false,
        this.novo= true
       }
    }
});
app.mount('#app');


</script>