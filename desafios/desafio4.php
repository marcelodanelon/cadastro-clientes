<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>desafio4</title>
    <style>h1{text-align:center;}</style>
</head>
<body>
    <h1>Maior de Idade</h1>
    <form action="desafio4.validar.php" method="post">
        <div class="form=group col-3">
            <label class="form-label">Idade</label>
            <input min=0 name="idade" class="form-control" type="number">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Verificar</button>
    </form>
</body>
</html>