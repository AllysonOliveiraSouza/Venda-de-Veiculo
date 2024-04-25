<?php

$strConexao = mysqli_connect('localhost', 'root', '', 'vistoriago') or die('Erro na conexão ao banco de dados');

$selectCondutor = "select * from condutor order by id desc limit 1";
$selectDadosVeiculo = "select * from dados_veiculo order by id desc limit 1";
$selectFotosVeiculo = "select * from fotos_veiculo order by id desc limit 1";

$tbCondutor = mysqli_query($strConexao, $selectCondutor) or die("Erro ao realizar consulta !");
$tbDadosVeiculo = mysqli_query($strConexao, $selectDadosVeiculo) or die("Erro ao realizar consulta !");
$tbFotosVeiculo = mysqli_query($strConexao, $selectFotosVeiculo) or die("Erro ao realizar consulta !");


while ($registroCond = mysqli_fetch_array($tbCondutor)) {
    $idCondutor = intval($registroCond['id']);
    $nome = $registroCond['nome'];
    $cpf = $registroCond['cpf'];
    $rg = $registroCond['rg'];
    $telefone = $registroCond['telefone'];
    $endereco = $registroCond['endereco'];
    $cnh = $registroCond['cnh'];
    $caminhoSelfieCnh = $registroCond['caminho_selfie_cnh'];
}

while ($registroDadosVeiculo = mysqli_fetch_array($tbDadosVeiculo)) {
    $idDadosVeiculo = intval($registroDadosVeiculo['id']);
    $placa = $registroDadosVeiculo['placa'];
    $chassi = $registroDadosVeiculo['chassi'];
    $renavam = $registroDadosVeiculo['renavam'];
    $UF = $registroDadosVeiculo['UF'];
    $marca = $registroDadosVeiculo['marca'];
    $modelo = $registroDadosVeiculo['modelo'];
    $km = $registroDadosVeiculo['km'];
    $nivelCombustivel = $registroDadosVeiculo['nivel_combustivel'];
}

while ($registroFotosVeiculo = mysqli_fetch_array($tbFotosVeiculo)) {
    intval($idFotosVeiculo = $registroFotosVeiculo['id']);
    $caminhoImagemPlaca = $registroFotosVeiculo['caminho_imagem_placa'];
    $caminhoImagemDianteira = $registroFotosVeiculo['caminho_imagem_dianteira'];
    $caminhoImagemTraseira = $registroFotosVeiculo['caminho_imagem_traseira'];
    $camimhoImagemHodometro = $registroFotosVeiculo['caimho_imagem_hodometro'];
    $caminhoImagemBancoDianteiro = $registroFotosVeiculo['caminho_imagem_banco_dianteiro'];
}

$insertDocumentos = "insert into documentos values(null,current_timestamp(),$idDadosVeiculo,$idCondutor,$idFotosVeiculo)";
mysqli_query($strConexao, $insertDocumentos);
$selectDocumentos = "select * from documentos order by id desc limit 1";
$tbDocumentos = mysqli_query($strConexao, $selectDocumentos) or die("Erro ao realizar consulta !");


while ($registroDocumentos = mysqli_fetch_array($tbDocumentos)) {
    $idDocumentos = $registroDocumentos['id'];
}

mysqli_close($strConexao);
?>


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
        <img src="./images/logo-ferrari.jpg" alt="logo ferrari" class="mg-right-15">
        <p class="mg-right-15">Compra n° : <?php echo $idDocumentos ?> | </p>
        <p id="data-documento"></p>

    </header>

    <main><br>
        <h1>Dados da compra
        </h1><br>
        <hr><br>
        <ul>
            <h2>Dados do veículo</h2>
            <?php echo "<li>Placa: " . $placa . "</li>" ?>
            <?php echo "<li>Chassi: " . $chassi . "</li>" ?>

            <?php echo "<li>Renavam: " . $renavam . "</li>" ?>
            <?php echo "<li>UF: " . $UF . "</li>" ?>
            <?php echo "<li>Marca: " . $marca . "</li>" ?>
            <?php echo "<li>Modelo: " . $modelo . "</li>" ?>
            <?php echo "<li>Km: " . $km . "</li>" ?>
            <?php echo "<li>Nível do combustível: " . $nivelCombustivel . "</li>" ?>
        </ul>
        <br>
        <hr><br>
        <ul>
            <h2>Dados do condutor</h2>

            <?php echo "<li>Nome: " . $nome . "</li>" ?>
            <?php echo "<li>CPF: " . $cpf . "</li>" ?>
            <?php echo "<li>RG: " . $rg . "</li>" ?>
            <?php echo "<li>Telefone: " . $telefone . "</li>" ?>
            <?php echo "<li>Endereço: " . $endereco . "</li>" ?>
            <?php echo "<li>CNH: " . $cnh . "</li>" ?>
            <li>Selfie com Documento:</li><br>
            <img src="<?php echo $caminhoSelfieCnh ?>" alt="selfie com documento" id="selfie-com-cnh">
        </ul>
        <br>
        <hr><br>
        <h2>Fotos do veículo</h2><br>
        <div class="imgs-veiculo">
            <img src="<?php echo $caminhoImagemPlaca ?>" alt="placa mercosul" id="placa-carro">
            <img src="<?php echo $caminhoImagemDianteira ?>" alt="dianteira" id="dianteira-carro">
            <img src="<?php echo $caminhoImagemTraseira ?>" alt="traseira carro" id="traseira-carro">
            <img src="<?php echo $camimhoImagemHodometro ?>" alt="hodometro" id="hodometro-carro">
            <img src="<?php echo $caminhoImagemBancoDianteiro ?>" alt="banco dianteiro" id="banco-carro">
        </div>


    </main>

    <br><br>

    <footer>
        <img src="./images/logo-ferrari.jpg" alt="logo vistoria go" class="mg-right-15">
        <div class="dados-vistoria-go">
            <span> Endereço : Rua 1 n° 114 – Centro - São Paulo - Cep: 00000-000 </span>
            <span> E-mail : carro@carro.com.br </span>
        </div>
    </footer>
    <script src="./js/resultado.js"> </script>
</body>

</html>