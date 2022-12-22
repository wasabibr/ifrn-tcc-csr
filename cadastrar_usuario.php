<?php

    function limpar_texto($str){
        return preg_replace('/[^0-9]/', "", $str);
    }

    if(count($_POST) > 0) {

        //conexao com o banco de dados dbcsr
        include('./includes/conexao.php');

        $erro = false;

        //variaveis
        $avatar = $_POST['avatar'];
        $nome_do_usuario = $_POST['nome_do_usuario'];
        $telefone = $_POST['telefone'];
        $sobrenome_do_usuario = $_POST['sobrenome_do_usuario'];
        $data_de_nascimento = $_POST['data_de_nascimento'];
        $cpf = $_POST['cpf'];
        $nome_de_acesso = $_POST['nome_de_acesso'];
        $email_principal = $_POST['email_principal'];
        $senha_usuario = $_POST['senha_usuario'];
        $end_do_usuario = $_POST['end_do_usuario'];
        $comp_end_do_usuario = $_POST['comp_end_do_usuario'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];


        //validacao dos campos obrigatorios

        if(empty($nome_de_acesso)){
            $erro = "Preencha o nome de acesso!";
        }

        if(empty($email_principal) || !filter_var($email_principal, FILTER_VALIDATE_EMAIL)){
            $erro = "Preencha o email principal!";
        }
        
        if(empty($senha_usuario)){
            $erro = "Preencha a senha do usuário!";
        
        if(!empty($senha_usuario) & ($senha_usuario < 3 || $senha_usuario > 8))
                $erro = "Preencha a senha do usuário de 3 a 8 caracteres!";
        }


        //validacao dos campos opcionais

        //valida escolha do Avatar
        if(!empty($avatar)){
            if($avatar != 1 & $avatar != 2 & $avatar != 3)
                $erro = "Escolha uma das três opção de avatar!";
        }

        //valida data de nascimento
        if(!empty($data_de_nascimento)){
            $tmp = explode("/", $data_de_nascimento);
            if(count($tmp) == 3){
                $data_de_nascimento = implode('-', array_reverse($tmp));
            } else {
                $erro = "A data de nascimento deve seguir o padrão dia/mês/ano!";
            }
        }

        //valida cpf
        if(!empty($cpf)){
            $cpf = limpar_texto($cpf);
            if (strlen($cpf) != 11) {
                $erro = "O número do CPF deve ser preenchido no padrão 888.888.888-88!";
            }
        }

        //valida telefone
        if(!empty($telefone)){
            $telefone = limpar_texto($telefone);
            if (strlen($telefone) != 11) {
                $erro = "O número de telefone deve ser preenchido no padrão (88) 98888-8888!";
            }
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

                    </li>

                    <li class="nav-item">

                    </li>

                    <li class="nav-item">

                    </li>

                </ul>
            </div> 

            <div>        
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">

                    <li class="navbar-text">
                    </li>

                    <li class="nav-item">
                        <a href="index.php" class="nav-link" tabindex="-1" aria-disabled="true"><b>Login</b></a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>
</header>

<main>
    <div class="container">
        <br><br><br>

        <div class="row align-items-center">
            <div class="col"></div>

            <div class="col-12 rounded">
                <div class="col-sm text-black-50">
                    <br>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-forma-itens">
                            <h1 class="h5 mb-0 lh-1 text-center"></i> Cadastro do Usuário </h1>
                        </div>
                        <div class="card-body text-start">
                            <form method="POST" action="">
                                <div>
                                    <div class="row">
                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><b>Nome de acesso</b></span>
                                            <input value="<?php if(isset($_POST['nome_de_acesso'])) echo $_POST['nome_de_acesso']; ?>" name="nome_de_acesso" type="text" placeholder="ful@nodet@l" class="form-control is-invalid" aria-describedby="basic-addon1" required>
                                        </div>                               

                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><b>Email principal</b></span>
                                            <input value="<?php if(isset($_POST['email_principal'])) echo $_POST['email_principal']; ?>" name="email_principal" type="text" placeholder="fulano@detal.com" class="form-control is-invalid" aria-describedby="basic-addon1" required>
                                        </div>                         

                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><b>Senha do usuário</b></span>
                                            <input value="<?php if(isset($_POST['senha_usuario'])) echo $_POST['senha_usuario']; ?>" name="senha_usuario" type="text" placeholder="Entre 3 e 8 caracteres" class="form-control is-invalid" aria-describedby="basic-addon1" required>
                                        </div>                                
                                    </div>
                                    <div class="row">                         
                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><i>Avatar</i></span>
                                            <select class="form-select" id="inputGroupSelect01">
                                                <option selected>Escolha um avatar</option>
                                                <option value="1">(1) Gato (f)</option>
                                                <option value="2">(2) Gato (m)</option>
                                                <option value="3">(3) Canguru (f)</option>
                                                <option value="4">(4) Bicho preguiça (m)</option>
                                                <option value="5">(5) Zebra (f)</option>
                                                <option value="6">(6) Javali (m)</option>
                                                <option value="7">(7) Coruja (f)</option>
                                                <option value="8">(8) Urso polar (m)</option>
                                                <option value="9">(9) Esquilo (f)</option>
                                                <option value="10">(10) Mico leão (m)</option>
                                                <option value="11">(11) Girafa (f)</option>
                                                <option value="12">(12) Tigre (m)</option>
                                                <option value="13">(13) Guepardo (f)</option>
                                                <option value="14">(14) Ganso (m)</option>
                                                <option value="15">(15) Leopardo das neves (f)</option>
                                                <option value="16">(16) Touro (m)</option>
                                            </select>
                                        </div>  

                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><i>Nome do usuário</i></span>
                                            <input value="<?php if(isset($_POST['nome_do_usuario'])) echo $_POST['nome_do_usuario']; ?>" name="nome_do_usuario" type="text" placeholder="Fulano" class="form-control" aria-describedby="basic-addon1">
                                        </div>  

                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><i>Sobrenome do usuário</i></span>
                                            <input value="<?php if(isset($_POST['sobrenome_do_usuario'])) echo $_POST['sobrenome_do_usuario']; ?>" name="sobrenome_do_usuario" type="text" placeholder="de Tal" class="form-control" aria-describedby="basic-addon1">
                                        </div> 
                                    </div>
 
                                    <div class="row">
                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><i>Data de nascimento</i></span>
                                            <input value="<?php if(isset($_POST['data_de_nascimento'])) echo $_POST['data_de_nascimento']; ?>" name="data_de_nascimento" type="text" placeholder="dia/mês/ano" class="form-control" aria-describedby="basic-addon1">
                                        </div>                              

                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><i>CPF</i></span>
                                            <input value="<?php if(isset($_POST['cpf'])) echo $_POST['cpf']; ?>" name="cpf" type="text" placeholder="000.000.000-00" class="form-control" aria-describedby="basic-addon1">
                                        </div>                                 

                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><i>Telefone</i></span>
                                            <input value="<?php if(isset($_POST['telefone'])) echo $_POST['telefone']; ?>" name="telefone" type="text" placeholder="(88) 98888-8888" class="form-control" aria-describedby="basic-addon1">
                                        </div>  
                                    </div>
                                    <div class="row">
                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><i>Endereço do usuário</i></span>
                                            <input value="<?php if(isset($_POST['end_do_usuario'])) echo $_POST['end_do_usuario']; ?>" name="end_do_usuario" type="text" placeholder="Rua, Av. etc." class="form-control" aria-describedby="basic-addon1">
                                        </div>                        

                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><i>Complemento do end. do usuário</i></span>
                                            <input value="<?php if(isset($_POST['comp_end_do_usuario'])) echo $_POST['comp_end_do_usuario']; ?>" name="comp_end_do_usuario" type="text" placeholder="Apto etc." class="form-control" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><i>CEP</i></span>
                                            <input value="<?php if(isset($_POST['cep'])) echo $_POST['cep']; ?>" name="cep" type="text" placeholder="00000-000" class="form-control" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><i>Cidade</i></span>
                                            <input value="<?php if(isset($_POST['cidade'])) echo $_POST['cidade']; ?>" name="cidade" type="text" placeholder="Natal" class="form-control" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><i>Estado</i></span>
                                            <input value="<?php if(isset($_POST['estado'])) echo $_POST['estado']; ?>" name="estado" type="text" placeholder="RN" class="form-control" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group mb-6 col">
                                            <span class="input-group-text"><i>País</i></span>
                                            <input value="<?php if(isset($_POST['pais'])) echo $_POST['pais']; ?>" name="pais" type="text" placeholder="Brasil" class="form-control" aria-describedby="basic-addon1">
                                        </div>
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
<main>


<div class="row row-cols-1 row-cols-md-2 mb-3 text-center">



</div>



</body>
</html>