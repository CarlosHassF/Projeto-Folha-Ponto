<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="POST">
        <h1 style="text-align: center;">Novo Registro</h1>
        
    <div class="container text-center" style="display:flex; flex-direction:row; flex-wrap:nowrap; align-items:center; justify-content:center;">  
                <label for="Data" style="align-self: center; width:auto;margin:20px;">Dia</label>
                <input type="DATE" class="form-table"style="width: 10%;" name="Data">

                <label for="Entrada1" style="align-self: center; width:auto;margin:20px;">ENTRADA</label>
                <input type="time" class="form-control" name="Entrada1" placeholder="00:00">

                <label for="Saida1" style="align-self: center; width:auto;margin:20px;white-space: nowrap;">Saida para Pausa</label>
                <input type="time" class="form-control" name="Saida1" placeholder="00:00">

                <label for="Entrada2"  style="align-self:center;width:auto;margin:20px;white-space: nowrap;">Entrada da Pausa</label>
                <input type="time" class="form-control" name="Entrada2" placeholder="00:00">
                <label for="Saida2" style="align-self:center; width:auto;margin:20px;">SAIDA</label>
                <input type="time" class="form-control" name="Saida2" placeholder="00:00">
  
            <button class="btn btn-primary btn-lg" type="submit" style="align-self:auto;white-space: nowrap; margin:20px">Criar Registro</button>
        </div>
    </form>

    

    
</body>
</html>