<?php
session_start();
include_once "conexao.php";
$pdo = conectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
<div class="page">
        <form method="POST" class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" />
            <a href="cadastro.php">Ainda não é cliente? Faça seu cadastro aqui.</a>
            <input type="submit" value="Acessar" class="btn" name="btnLogin"/>
            
        </form>
    </div>
    
</body>

</html>
<?php
// faça o teste se o botão foi pressionado
if (isset($_POST['btnLogin'])) {

    // receba o conteudo digitado no input
    // deve ser feito um para cada input
    $email    = isset ($_POST['email']) ? $_POST['email'] :null;
    $senha    = isset ($_POST['senha']) ? md5($_POST['senha']) :null;


    // validação simples (opcional)
    // aqui verificamos se tem algum conteudo no input
    if (empty($email) && empty($senha)){
        echo "Necessário informar usuario ou senha";
        exit();
    }

    // criando o sql do programa e colocando as
    // variaveis magicas
    $sql = "SELECT * from tb_usuarios WHERE email_usuario = :email AND senha_usuario = :senha";

    // preparando o sql para ser processado
    $stmt = $pdo->prepare($sql);

    //substituindo as variaveis magicas por dados digitados
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    // se o comando der certo
    if ($stmt->execute()) {
        $user=$stmt->fetch();

        if ($stmt->rowCount() > 0) {
            $_SESSION['cod_usuario'] = $user['cod_usuario'];
            $_SESSION['email_usuario'] = $user['email'];
            $_SESSION['tipo'] = $user['tipo'];
            if ($_SESSION['tipo'] == 'A'){
                header("Location:admin/homeAdm.php");
                echo "ADM logado com sucesso";
            }
            else{
                header("Location: home.php");
                //mandar pra outra pagina
                echo "Usuário logado com sucesso";
            }

        }
    } else {
        echo "Usuario ou Senha Invalido<br>";
    }
}
?>