<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="=cada.css">
    <title>cadastro</title>
</head>
<body>
    <div class="container">
        <form action="cadastro_cliente.php" method="get">
            <h1>Recebidos</h1>
            <p>Nome: <?php echo $_GET["nome"];?></p>
            <p>Endereço:<?php echo $_GET["endereco"];?></p>
            <p>Estado:<?php echo $_GET["estado"];?></p>
            <p>Cidade:<?php echo $_GET["cidade"];?></p>
            <p>País:<?php echo $_GET["pais"];?></p>
            <button type="submit" class="btn btn-danger">Voltar</button>
        </form>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>