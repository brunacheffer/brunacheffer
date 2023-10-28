<?php
session_start();
include_once "conexao.php";
$pdo = conectar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <script src="js/cadastro.js"></script>

</head>
<link rel="icon" type="image/png" href="IMAGENS/logotccc.jpeg"/>
<body>

    <div class="page"> 
        <div class="logo"><a href="index.php"><img class="logo1" src="logo.jpeg" alt=""></a></div>
        <div class="links"></div>
        <form method="POST" class="formCadastro">
            <h1>Cadastro</h1>
            <p>Digite os seus dados no campo abaixo.</p> <br>
            <div class="p1">
                <div>
                <label for="nome">Nome</label><br>
                <input type="text" placeholder="Digite seu nome" name="nome">
                </div>
            </div>
            <div class="p1">
                <div>
                <label for="cpf">CPF</label><br>
                <input type="text" class="form-control" placeholder="xxx.xxx.xxx-xx" name="cpf" maxlength="11">
                </div>
                <div>
                <label for="telefone">Telefone</label><br>
                <input type="text" class="form-control" placeholder="(xx) xxxxx-xxxx"  name="telefone" maxlength="11">
                </div>
           </div>
           <div class="p1">
                <div>
                    <label for="email">E-mail</label><br>
                    <input type="email" placeholder="Digite seu e-mail" name="email">
                </div>
                <div>
                    <label for="password">Senha</label><br>
                    <input type="password" placeholder="crie uma senha" name="senha">
                </div>
            </div>
            <div>

                <button type="submit" value="cadastro" class="btn" name="btnCad" >CADASTRAR</button>
            </div>
        </form>
        
    </div>
    
</body>
</html>
<?php
// faça o teste se o botão foi pressionado
if (isset($_POST['btnCad'])) {

    // receba o conteudo digitado no input
    // deve ser feito um para cada input
    $name   = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $telefone= $_POST["telefone"];
    $email= $_POST["email"];
    $senha= md5($_POST["senha"]);


    // validação simples (opcional)
    // aqui verificamos se tem algum conteudo no input
    if (empty($name) ||  empty($cpf) || empty($telefone)|| empty($email)|| empty($senha)){
        echo "Preencha todosds os campos para o cadastro ser efetuado com sucesso";
        exit();
    }

    // criando o sql do programa e colocando as
    // variaveis magicas
    $sql = "INSERT INTO tb_usuarios(nome_usuario, cpf_usuario, telefone_usuario, email_usuario, senha_usuario) VALUES (:n,:c,:t,:e,:s)";

    $stmt = $pdo->prepare($sql);

    //substituindo as variaveis magicas por dados digitados
    $stmt ->bindParam(':n', $name);
    $stmt ->bindParam(':c', $cpf);
    $stmt ->bindParam(':t', $telefone);
    $stmt ->bindParam(':e', $email);
    $stmt ->bindParam(':s', $senha);
    // se o comando der certo
    if ($stmt->execute()) {
        //mostra mensagem de realização do comando
        if ($stmt->rowCount() > 0) {
            echo "Usuario logado com sucesso";
            //mandar pra outra pagina
            header("Location: login.php");
        }
    } else {
        echo "Usuario ou Senha Invalido<br>";
    }
}
?>