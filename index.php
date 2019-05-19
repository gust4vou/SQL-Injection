<?php
ini_set("display_errors",1);
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conexao = mysqli_connect('127.0.0.1', 'root', 'root', 'injection');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $query = "select usuario, senha from usuario where usuario='$usuario' and senha='$senha'";
    $result = mysqli_query($conexao, $query);
    $rows = mysqli_num_rows($result);
    if($rows) {
        echo "Logado com sucesso";
    }
    else {
        echo "Não logou. Tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Segurança da informação 2019</title>
</head>
<body>
<form acrtion="index.php" method="POST">
    <h2>Teste de SQL Injection</h2><br>
    Usuário:<br>
    <input type="text" name="usuario"><br><br>
    Senha:<br>
    <input type="text" name="senha"><br><br>
    <input type="submit" value="Logar">
</form>
</body>
</html>