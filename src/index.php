<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@10..48,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">

    <title>Vistoria GO</title>
</head>

<body>
    <header>
        <img src="./images/logo-ferrari.jpg" alt="ferrari amarela">
    </header>

    <main><br>
        <h1>Digite os dados abaixo para prosseguir com a compra do veículo
        </h1><br>
        <hr><br>

        <form action="cadastrar.php" method="POST" class="formulario-principal" enctype="multipart/form-data">
            <h2>Dados do Condutor</h2><br>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf">
            <label for="rg">RG:</label>
            <input type="text" name="rg" id="rg">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco"><br><br>
            <label for="cnh">CNH:</label>
            <input type="text" name="cnh" id="cnh"><br><br>
            <label for="selfiecnh">Carregar a imagem com selfie do documento(cnh):</label><br><br>
            <input type="file" name="selfiecnh" id="selfiecnh" accept="image/*"><br><br>
            <br>
            <hr>
            <br>

            <h2>Dados do Veículo</h2>
            <br>
            <label for="placa">Placa: </label>
            <input type="text" name="placa" id="placa" class="mg-right-15">
            <label for="chassi">Chassi: </label>
            <input type="text" name="chassi" id="chassi" class="mg-right-15">
            <label for="renavam">Renavam: </label>
            <input type="text" name="renavam" id="renavam" class="mg-right-15">
            <label for="uf">UF: </label>
            <input type="text" name="uf" id="uf" class="mg-right-15">
            <label for="marca">Marca: </label>
            <input type="text" name="marca" id="marca" class="mg-right-15"><br><br>
            <label for="modelo">Modelo: </label>
            <input type="text" name="modelo" id="modelo" class="mg-right-15"><br><br>
            <label for="km">KM: </label>
            <input type="text" name="km" id="km" class="mg-right-15">
            <label for="nivel-combustivel">Nível do combustível(litros): </label>
            <input type="text" name="nivel-combustivel" id="nivel-combustivel">
            <br><br>
            <hr>
            <br>
            <h2>Fotos do Veículo</h2><br>
            <label for="foto-placa">Foto da Placa</label>
            <input type="file" name="foto-placa" id="foto-placa" accept="image/*"><br><br>
            <label for="dianteira">Foto da parte dianteira do veículo</label>
            <input type="file" name="dianteira" id="dianteira" accept="image/*"><br><br>
            <label for="traseira">Foto da parte traseira do veículo</label>
            <input type="file" name="traseira" id="traseira" accept="image/*"><br><br>
            <label for="hodometro">Foto do hodômetro</label>
            <input type="file" name="hodometro" id="hodometro" accept="image/*"><br><br>
            <label for="banco-dianteiro">Foto do banco dianteiro</label>
            <input type="file" name="banco-dianteiro" id="banco-dianteiro" accept="image/*"><br><br>
            <br>
            <hr><br>
            <button type="button" id="btn-enviar-dados">Enviar dados</button>
        </form>
        <br><br><br>

    </main>

    <script src="./js/index.js"> </script>
</body>

</html>