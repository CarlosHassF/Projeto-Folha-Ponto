<?php
require("../config/conn.php");
session_start();

$rus = $_SESSION['id_user'];
$horas = null;
if (isset($_POST["Data"])) {
    $data = $_POST["Data"];
    $entrada1 = $_POST["Entrada1"];
    $entrada2 = $_POST["Entrada2"];
    $saida1 = $_POST["Saida1"];
    $saida2 = $_POST["Saida2"];
    
    $insert = $conn->query("INSERT INTO pontos(ENTRADA, SAIDA, ID_FUN, DIA, SAIDA2, ENTRADA2) VALUES('$entrada1', '$saida1', '$rus', '$data', '$saida2', '$entrada2')");
    header("location:" . $_SERVER['PHP_SELF']);
}

$verify = $conn->query("SELECT * FROM pontos WHERE ID_FUN = $rus");
$recebe = $verify->fetch_all(MYSQLI_ASSOC);

if (isset($_POST["Data"])) {
    foreach ($recebe as $key => $registro) {
        $entrada1 = strtotime($registro['ENTRADA']);
        $saida1 = strtotime($registro['SAIDA']);
        $entrada2 = strtotime($registro['ENTRADA2']);
        $saida2 = strtotime($registro['SAIDA2']);

        $saldo = ($saida1 - $entrada1) + ($saida2 - $entrada2);

        $saldo = gmdate('h:i:s', $saldo);
        $query = "UPDATE pontos SET HORAS_TRABALHADAS = '$saldo' WHERE ID_FUN = $rus AND DIA = '{$registro['DIA']}'";
        $conn->query($query);
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@3.5.13/dist/vue.global.min.js"></script>
    <title>Folha de Ponto</title>
</head>
<body>
    
    <div id="app">
        <div class="container" style="width:100vw; height:100vh; display:grid; place-items:center; text-align:center;">
            <h1>Registros</h1>
            <div class="registros">
                <table class="table">
                    <thead>
                        <tr>
                            <strong>
                            <th>Data</th>
                            <th>Entrada</th>
                            <th>Saída Pausa</th>
                            <th>Entrada Pausa</th>
                            <th>Saída</th>
                            <th>Horas Trabalhadas</th>
                            </strong>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, index) in registros" :key="index">
                            <td>{{ item.DIA }}</td>
                            <td>{{ item.ENTRADA }}</td>
                            <td>{{ item.SAIDA }}</td>
                            <td>{{ item.ENTRADA2 }}</td>
                            <td>{{ item.SAIDA2 }}</td>
                            <td>{{ item.HORAS_TRABALHADAS }}</td>
                            <td>
                                <button class="btn btn-danger" @click="apagarRegistro(item.ID_P)">Excluir</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="width: 400px; margin:0; display:inline-block">
            <a href="criar_registro.php"><button class="btn btn-primary" style="background-color: green; border-color:green; margin:20px;">Novo Registro</button></a>
             <a href="registrar_usuario.php"><button class="btn btn-primary" style="background-color: green, border-color;">Sair</button></a>


        </div>
        </div>
        
        
    </div>
</body>
</html>

<script>
const app = Vue.createApp({
    data() {
        return {
            registros: <?php echo json_encode($recebe); ?>
        };
    },
    methods: {
        apagarRegistro(id) {
            fetch('apagar_registro.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `id=${id}`
            })
            .then(response => response.text())
            .then(data => {
                location.reload();
            })
            .catch(error => console.error('Erro:', error));
        }
    }
});
app.mount('#app');

</script>