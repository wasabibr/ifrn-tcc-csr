<?php 

include('./includes/protect.php');
include('./includes/conexao.php'); 

$nome = $_SESSION['NOME_DO_USUARIO'];
$id =  intval($_SESSION['USUARIO_ID']);

$sql_colecao = "SELECT * FROM tb_colecao where USUARIO_ID='$id'";
$query_colecao = $mysqli->query($sql_colecao) or die($mysqli->error);
$num_colecao = $query_colecao->num_rows;


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
    
        <title>Usuário</title>
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

        <main>

            <div class="container">
                
                <section class="margem-cima">

                    <br><br><br><br>
                    
                    <div class="row">
                        <div class="col-2">

                            <!-- cabeçalho -->
                            <div class="text-black-50">  
                                <div>
                                    <img src="./img/10-mico-leao(MASC).jpeg" class="rounded float-start" alt="..." height="140">
                                </div>                
                                <div class="lh-1">
                                    <h1 class="h5 mb-0 lh-1"> <?php echo $nome?></h1>
                                    <small></small>
                                </div>
                            </div>
        
                            <div class="">
                            </div>

                        </div>
                        <div class="col-10">
                            <div class="card-header bg-forma-itens">
                                <h1 class="h6 mb-0 lh-1">Minhas coleções</h1>
                            </div>
                            <div>
                                <table border='2'cellpadding='5' class="table table-hover">
                                    <thead class="table-secondary">
                                        <th scope="col">Nome</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Ações</th>
                                    </thead>
                                    <tbody>

                                        <?php if($num_colecao == 0) { ?>
                                            <tr>
                                                <td colspan='4'>Nenhuma coleção foi cadastrada</td>
                                            <tr>
                                        <?php } else { 
                                            while ($colecao = $query_colecao->fetch_assoc()) {
                                        ?>
                                            <tr>

                                                <td><?php echo $colecao['NOME_DA_COLECAO']; ?></td>
                                                <td><?php 
                                                
                                                // Para valor igual a 0, categoria Privada, e para valor igual a 1, categoria Pública
                                                if($colecao['CATEGORIA_COL'] == 0){
                                                    echo "Privada";
                                                } else {
                                                    echo "Pública";
                                                }
                                                                    
                                                ?></td>
                                                <td><?php echo $colecao['DESCRICAO_COL']; ?></td>
                                                <td>
                                                    <a href="editar_item.php?id=<?php echo $colecao['USUARIO_ID']; ?>"><i>Itens</i></a><br>
                                                    <a href="editar_colecao.php?id=<?php echo $colecao['USUARIO_ID']; ?>"><i>Editar</i></a><br>
                                                    <a href="deletar_colecao.php?id=<?php echo $colecao['USUARIO_ID']; ?>"><i>Deletar</i></a>
                                                </td>
                                            <tr>
                                        <?php
                                        }
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                </section>


            </div>




            
           

        </main>        
    </body>
</html>