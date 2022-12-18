<?php 

include('./includes/conexao.php'); 

$sql_colecao = "SELECT * FROM tb_colecao where USUARIO_ID='1'";
$query_colecao = $mysqli->query($sql_colecao) or die($mysqli->error);
$num_colecao = $query_colecao->num_rows;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css"> -->

    <!-- script para a inserção dos ícones da plataforma fontawesome -->
    <!-- <script defer src="https://kit.fontawesome.com/15a3a1a39d.js" crossorigin="anonymous"></script> -->
  
    <!-- Script para a inserção do Carousel -->
    <!-- <script defer src="./bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->

    <title>Usuário</title>
</head>
<body>
    
    <h1>Usuário</h1>
    <p>Coleções do usuário</p>
    <table border='1'cellpadding='10'>
        <thead>
            <th>ID da coleção</th>
            <th>ID do usuário</th>
            <th>Nome da coleção</th>
            <th>Categoria da coleção</th>
            <th>Descrição da coleção</th>
            <th>Ações</th>
        </thead>
        <tbody>

            <?php if($num_colecao == 0) { ?>
                <tr>
                    <td colspan='6'>Nenhum coleção foi cadastrada</td>
                <tr>
            <?php } else { 
                while ($colecao = $query_colecao->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $colecao['COLECAO_ID']; ?></td>
                    <td><?php echo $colecao['USUARIO_ID']; ?></td>
                    <td><?php echo $colecao['NOME_DA_COLECAO']; ?></td>
                    <td><?php echo $colecao['CATEGORIA_COL']; ?></td>
                    <td><?php echo $colecao['DESCRICAO_COL']; ?></td>
                    <td>
                        <a href="editar_cliente.php?id=<?php echo $colecao['USUARIO_ID']; ?>">Editar</a>
                        <a href="deletar_cliente.php?id=<?php echo $colecao['USUARIO_ID']; ?>">Deletar</a>
                    </td>
                <tr>
            <?php
            }
        } ?>
        </tbody>
    </table>

</body>
</html>