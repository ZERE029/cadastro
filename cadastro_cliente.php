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
    <h1>Cadastro</h1>
    <form action="recebidos.php" method= "get">
        <div class="mb-3"></div>
        <input type="text" placeholder="Nome:" name="nome">
        <br>
        <div class="mb-3"></div>
        <input type="text" placeholder="Endereço:" name="endereco">
        <br>
        <div class="mb-3"></div>
        <input type="text" placeholder="Estado:" name="estado">
        <br>
        <div class="mb-3"></div>
        <input type="text" placeholder="Cidade: "name="cidade">
        <br>
        <div class="mb-3"></div>
        <input type="text" placeholder="País:" name="pais">
        <br>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>