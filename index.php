<?php

//conexao com o banco de dados db_csr
include('./includes/conexao.php');


if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM tb_usuarios WHERE EMAIL_PRINCIPAL = '$email' AND SENHA_USUARIO = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['USUARIO_ID'] = $usuario['USUARIO_ID'];
            $_SESSION['NOME_DO_USUARIO'] = $usuario['NOME_DO_USUARIO'];

            header("Location: usuario.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <!-- script para a inserção dos ícones da plataforma fontawesome -->
    <script defer src="https://kit.fontawesome.com/15a3a1a39d.js" crossorigin="anonymous"></script>
  
    <!-- Script para a inserção do Carousel -->
    <script defer src="./bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title>Index</title>
</head>
<body>
    

<div class="container">
    <div class="row align-items-center">
        <div class="col"></div>
        <div class="col-4 rounded">
            <img src="./img/csr-logo.png" class="rounded float-start" alt="..." height="275">
        </div>
        <div class="col"></div>
    </div>
    <div class="row align-items-center">
        <div class="col"></div>
        <div class="col-4 rounded">
            <div class="col-sm text-black-50">
                <br>
                <div class="card mb-4 shadow-sm">
                    
                    <div class="card-header bg-forma-itens">
                        <h1 class="h5 mb-0 lh-1 text-center"></i> Acesse sua conta</h1>
                    </div>
                    <div class="card-body text-start">

                        <!-- Form para verificação do Login -->
                        <form action="" method="POST">

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                    </svg>
                                </span>
                                <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                                        <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
                                    </svg>
                                </span>
                                <input type="password" name="senha" placeholder="Digite sua senha" class="form-control" aria-describedby="basic-addon1">
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary mb-3" type="submit">Entrar</button>
                            </div>
                            <div><a href="cadastrar_usuario.php">-: Cadastrar novo usuário :-</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col"></div>
    </div>
</div>



<div class="row row-cols-1 row-cols-md-2 mb-3 text-center">



</div>


</body>
</html>