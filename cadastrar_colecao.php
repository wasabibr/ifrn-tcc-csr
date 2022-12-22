<?php

    include('./includes/protect.php');

    //conexao com o banco de dados db_csr
    include('./includes/conexao.php');

    $nome = $_SESSION['NOME_DO_USUARIO'];

    if(count($_POST) > 0) {

        $erro = false;

        //variaveis
        // $usuario_id = $_POST['usuario_id'];
        $nome_da_colecao = $_POST['nome_da_colecao'];
        $categoria_da_colecao = $_POST['categoria_da_colecao'];
        $descricao_da_colecao = $_POST['descricao_da_colecao'];


        //validacao dos campos obrigatorios

        if(empty($nome_da_colecao)){
            $erro = "Preencha o nome da coleção!";
        }


        //validacao dos campos opcionais

        //valida escolha do Avatar
        if(!empty($avatar)){
            if($avatar != 1 & $avatar != 2 & $avatar != 3)
                $erro = "Escolha uma das três opção de avatar!";
        }



        if($erro){
            echo "<p><b>ERRO: $erro</b></p>";
        } else {
            $sql_code = "INSERT INTO tb_usuarios (avatar, nome_de_acesso, email_principal, senha_usuario, nome_do_usuario, sobrenome_do_usuario, data_de_nascimento, cpf, telefone, end_do_usuario, comp_end_do_usuario, cep, cidade, estado, pais)
            VALUES ('$avatar', '$nome_de_acesso', '$email_principal', '$senha_usuario', '$nome_do_usuario', '$sobrenome_do_usuario', '$data_de_nascimento', '$cpf', '$telefone', '$end_do_usuario', '$comp_end_do_usuario', '$cep', '$cidade', '$estado', '$pais')";
            $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
            if($deu_certo){
                echo"<p><b>Usuário cadastrado com sucesso!!!</b><p>";
                unset($_POST);
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

    <title>Cadastrar Usuário</title>
</head>
<body>

<header>

<nav class="navbar navbar-expand-xl fixed-top navbar-dark navbar-light" style="background-color: grey;" aria-label="Sixth navbar example">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarsExample06">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">

                <li class="nav-item">
                    <img src="./img/csr-logo.png" class="rounded float-start" alt="..." height="40"> 
                </li>

                <li class="nav-item">
                </li>

                <li class="nav-item">
                    <a href="editar_usuario.php?id=<?php echo $id; ?>" class="nav-link" tabindex="-1" aria-disabled="true"><b>Editar dados do usuário</b></a>
                </li>

                <li class="nav-item">
                    <a href="cadastrar_colecao.php?id=<?php echo $id; ?>" class="nav-link" tabindex="-1" aria-disabled="true"><b>Cadastrar coleção</b></a>
                </li>

                <li class="nav-item">
                    <a href="cadastrar_item.php?id=<?php echo $id; ?>" class="nav-link" tabindex="-1" aria-disabled="true"><b>Cadastrar Item</b></a>
                </li>

            </ul>
        </div> 

        <div>        
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">

                <li class="navbar-text">
                    <b><?php echo $nome?></b>, você está logad@
                </li>

                <li class="nav-item">
                    <a href="logout.php" class="nav-link" tabindex="-1" aria-disabled="true"><b>Sair</b></a>
                </li>
            </ul>
        </div>

    </div>

</nav>
</header>

<div class="container">
    <div class="row align-items-center">
        <div class="col"></div>

        <div class="col-6 rounded">
            <div class="col-sm text-black-50">
                <br>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-forma-itens">
                        <h1 class="h5 mb-0 lh-1 text-center"></i> Cadastro de Coleções </h1>
                    </div>
                    <div class="card-body text-start">
                        <form method="POST" action="">
                            <div>                            
                                <div class="input-group mb-6">
                                    <span class="input-group-text"><b>Nome da coleção</b></span>
                                    <input value="<?php if(isset($_POST['avatar'])) echo $_POST['avatar']; ?>" name="avatar" type="text" placeholder="Coleção de carrinhos de ferro" class="form-control is-invalid" aria-describedby="basic-addon1" required>
                                </div>  

                                <div class="input-group mb-6">
                                    <span class="input-group-text" for="inputGroupSelect01"><i>Categoria da coleção</i></span>
                                    <input value="<?php if(isset($_POST['nome_de_acesso'])) echo $_POST['nome_de_acesso']; ?>" name="nome_de_acesso" type="text" placeholder="Categoria privada (0) ou pública (1)" class="form-control" aria-describedby="basic-addon1">

                                    <select class="form-select" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                    </select>
                                </div>                               

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Descrição da coleção</i></span>
                                    <input value="<?php if(isset($_POST['email_principal'])) echo $_POST['email_principal']; ?>" name="email_principal" type="text" placeholder="Texto opcional..." class="form-control" aria-describedby="basic-addon1">
                                </div>                                                   

                                <br>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary mb-3" type="submit">Salvar cadastro</button>
                            </div>
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