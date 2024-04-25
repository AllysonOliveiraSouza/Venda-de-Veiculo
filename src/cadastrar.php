<?php

$diretorioUpload = "./images/imagensBD/";
$nomeArquivoSelfieCnh = $diretorioUpload . uniqid() . '_' . $_FILES["selfiecnh"]["name"];
$nomeArquivoFotoPlaca = $diretorioUpload . uniqid() . '_' . $_FILES["foto-placa"]["name"];
$nomeArquivoDianteira = $diretorioUpload . uniqid() . '_' . $_FILES["dianteira"]["name"];
$nomeArquivoTraseira = $diretorioUpload . uniqid() . '_' . $_FILES["traseira"]["name"];
$nomeArquivoHodometro = $diretorioUpload . uniqid() . '_' . $_FILES["hodometro"]["name"];
$nomeArquivoBancoDianteiro = $diretorioUpload . uniqid() . '_' . $_FILES["banco-dianteiro"]["name"];

move_uploaded_file($_FILES["selfiecnh"]["tmp_name"], $nomeArquivoSelfieCnh);
move_uploaded_file($_FILES["foto-placa"]["tmp_name"], $nomeArquivoFotoPlaca);
move_uploaded_file($_FILES["dianteira"]["tmp_name"], $nomeArquivoDianteira);
move_uploaded_file($_FILES["traseira"]["tmp_name"], $nomeArquivoTraseira);
move_uploaded_file($_FILES["hodometro"]["tmp_name"], $nomeArquivoHodometro);
move_uploaded_file($_FILES["banco-dianteiro"]["tmp_name"], $nomeArquivoBancoDianteiro);

// Tabela Condutor

$nome = $_POST['nome'];
$cpf = intval($_POST['cpf']);
$rg = intval($_POST['rg']);
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cnh = intval($_POST['cnh']);

// Tabela Dados do veículo

$placa = $_POST['placa'];
$chassi = $_POST['chassi'];
$renavam = intval($_POST['renavam']);
$uf = $_POST['uf'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$km = intval($_POST['km']);
$nivelCombustivel = $_POST['nivel-combustivel'];

$strConexao = mysqli_connect('localhost', 'root', '', 'vistoriago') or die('Erro na conexão ao banco de dados');

$comandoSQLCondutor = "insert into condutor values(null,'$nome',$cpf,$rg,'$telefone','$endereco',$cnh,'$nomeArquivoSelfieCnh')";

$comandoSQLDadosVeiculo = "insert into dados_veiculo values(null,'$placa','$chassi',$renavam,'$uf','$marca','$modelo',$km,'$nivelCombustivel')";

$comandoSQLFotosVeiculo = "insert into fotos_veiculo values(null,'$nomeArquivoFotoPlaca','$nomeArquivoDianteira','$nomeArquivoTraseira','$nomeArquivoHodometro','$nomeArquivoBancoDianteiro')";

mysqli_query($strConexao, $comandoSQLCondutor) or die("Erro ao realizar cadastro" . $strConexao->error);
mysqli_query($strConexao, $comandoSQLDadosVeiculo) or die("Erro ao realizar cadastro" . $strConexao->error);
mysqli_query($strConexao, $comandoSQLFotosVeiculo) or die("Erro ao realizar cadastro" . $strConexao->error);
mysqli_close($strConexao);

header('Location: resultado.php');
