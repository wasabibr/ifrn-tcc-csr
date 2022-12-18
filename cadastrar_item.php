<?php

    if(count($_POST) > 0) {

        //conexao com o banco de dados db_csr
        include('./includes/conexao.php');

        $erro = false;

        //variaveis
        $nome_do_modelo = $_POST['nome_do_modelo'];
        $cod_do_modelo = $_POST['cod_do_modelo'];
        $categoria = $_POST['categoria'];
        $serie_do_modelo = $_POST['serie_do_modelo'];
        $subserie_do_modelo = $_POST['subserie_do_modelo'];
        $tema = $_POST['tema'];
        $fabricante_do_modelo_original = $_POST['fabricante_do_modelo_original'];
        $escala_do_modelo = $_POST['escala_do_modelo'];
        $numero_de_fabricacao = $_POST['numero_de_fabricacao'];
        $numero_na_serie = $_POST['numero_na_serie'];
        $numero_de_colecao = $_POST['numero_de_colecao'];
        $ano_do_modelo = $_POST['ano_do_modelo'];
        $embalagem = $_POST['embalagem'];
        $material_da_carroceria = $_POST['material_da_carroceria'];
        $material_do_chassi = $_POST['material_do_chassi'];
        $cor_da_carroceria = $_POST['cor_da_carroceria'];
        $cor_do_chassi = $_POST['cor_do_chassi'];
        $decalques = $_POST['decalques'];
        $cor_dos_vidros = $_POST['cor_dos_vidros'];
        $cor_do_interior = $_POST['cor_do_interior'];
        $rodas = $_POST['rodas'];
        $pneu = $_POST['pneu'];
        $ano_de_copyright = $_POST['ano_de_copyright'];
        $pais_de_fabricacao = $_POST['pais_de_fabricacao'];
        $anotacoes = $_POST['anotacoes'];


        //validacao dos campos obrigatorios

        if(empty($nome_do_modelo)){
            $erro = "Preencha o nome do modelo!";
        }

        if(empty($cod_do_modelo)){
            $erro = "Preencha o código do modelo!";
        }


        if($erro){
            echo "<p><b>ERRO: $erro</b></p>";
        } else {
            if(empty($categoria)){
                $categoria = 'MAINLINE';
            }
            if(empty($escala_do_numero)){
                $escala_do_numero = '1/64';
            }
            if(empty($embalagem)){
                $embalagem = 'LOOSE';
            }
            if(empty($material_da_carroceria)){
                $material_da_carroceria = 'METAL';
            }
            if(empty($cor_do_chassi)){
                $cor_do_chassi = 'PLÁSTICO';
            }
            if(empty($pneu)){
                $pneu = 'PLÁSTICO';
            }
            if(empty($pais_de_fabricacao)){
                $pais_de_fabricacao = 'Malaysia';
            }
            $sql_code = "INSERT INTO tb_item (nome_do_modelo, cod_do_modelo, categoria, serie_do_modelo, subserie_do_modelo, tema, fabricante_do_modelo_original, escala_do_modelo, numero_de_fabricacao, numero_na_serie, numero_de_colecao, ano_do_modelo, embalagem, material_da_carroceria, material_do_chassi, cor_da_carroceria, cor_do_chassi, decalques, cor_dos_vidros, cor_do_interior, rodas, pneu, ano_de_copyright, pais_de_fabricacao, anotacoes)
            VALUES ('$nome_do_modelo', '$cod_do_modelo', '$categoria', '$serie_do_modelo', '$subserie_do_modelo', '$tema', '$fabricante_do_modelo_original', '$escala_do_modelo', '$numero_de_fabricacao', '$numero_na_serie', '$numero_de_colecao', '$ano_do_modelo', '$embalagem', '$material_da_carroceria', '$material_do_chassi', '$cor_da_carroceria', '$cor_do_chassi', '$decalques', '$cor_dos_vidros', '$cor_do_interior', '$rodas', '$pneu', '$ano_de_copyright', '$pais_de_fabricacao', '$anotacoes')";
            $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
            if($deu_certo){
                echo"<p><b>Item cadastrado com sucesso!!!</b><p>";
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

    <title>Cadastrar item</title>
</head>
<body>


<div class="container">
    <div class="row align-items-center">
        <div class="col"></div>

        <div class="col-6 rounded">
            <div class="col-sm text-black-50">
                <br>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-forma-itens">
                        <h1 class="h5 mb-0 lh-1 text-center"></i> Cadastro de Itens </h1>
                    </div>
                    <div class="card-body text-start">
                        <form method="POST" action="">
                            <div>                            
                                <div class="input-group mb-6">
                                    <span class="input-group-text"><b>Nome do modelo</b></span>
                                    <input value="<?php if(isset($_POST['nome_do_modelo'])) echo $_POST['nome_do_modelo']; ?>" name="nome_do_modelo" type="text" placeholder="verifique na cartela" class="form-control" aria-describedby="basic-addon1">
                                </div>                               
                          
                                <div class="input-group mb-6">
                                    <span class="input-group-text"><b>Código do modelo</b></span>
                                    <input value="<?php if(isset($_POST['cod_do_modelo'])) echo $_POST['cod_do_modelo']; ?>" name="cod_do_modelo" type="text" placeholder="verifique no chassi ou na cartela" class="form-control" aria-describedby="basic-addon1">
                                </div>  
                                
                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Categoria</i></span>
                                    <input value="<?php if(isset($_POST['categoria'])) echo $_POST['categoria']; ?>" name="categoria" type="text" placeholder="Mainline, T-Hunts, Super T-Hunts, Ou Premium" class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Série do modelo</i></span>
                                    <input value="<?php if(isset($_POST['serie_do_modelo'])) echo $_POST['serie_do_modelo']; ?>" name="serie_do_modelo" type="text" placeholder="verifique na cartela" class="form-control" aria-describedby="basic-addon1">
                                </div> 
 
                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Subsérie do modelo</i></span>
                                    <input value="<?php if(isset($_POST['subserie_do_modelo'])) echo $_POST['subserie_do_modelo']; ?>" name="subserie_do_modelo" type="text" placeholder="verifique na cartela" class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Tema</i></span>
                                    <input value="<?php if(isset($_POST['tema'])) echo $_POST['tema']; ?>" name="tema" type="text" placeholder="verifique na cartela" class="form-control" aria-describedby="basic-addon1">
                                </div>                                 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Fabricante do modelo original</i></span>
                                    <input value="<?php if(isset($_POST['fabricante_do_modelo_original'])) echo $_POST['fabricante_do_modelo_original']; ?>" name="fabricante_do_modelo_original" type="text" placeholder="verifique na cartela" class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Escala do modelo</i></span>
                                    <input value="<?php if(isset($_POST['escala_do_modelo'])) echo $_POST['escala_do_modelo']; ?>" name="escala_do_modelo" type="text" placeholder="1/64, 1/55 etc." class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Número de fabricação</i></span>
                                    <input value="<?php if(isset($_POST['numero_de_fabricacao'])) echo $_POST['numero_de_fabricacao']; ?>" name="numero_de_fabricacao" type="text" placeholder="verifique na cartela" class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Número na série</i></span>
                                    <input value="<?php if(isset($_POST['numero_na_serie'])) echo $_POST['numero_na_serie']; ?>" name="numero_na_serie" type="text" placeholder="verifique na cartela" class="form-control" aria-describedby="basic-addon1">
                                </div> 
                                
                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Número de coleção</i></span>
                                    <input value="<?php if(isset($_POST['numero_de_colecao'])) echo $_POST['numero_de_colecao']; ?>" name="numero_de_colecao" type="text" placeholder="verifique na cartela" class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Ano do modelo</i></span>
                                    <input value="<?php if(isset($_POST['ano_do_modelo'])) echo $_POST['ano_do_modelo']; ?>" name="ano_do_modelo" type="text" placeholder="verifique na cartela" class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Embalagem</i></span>
                                    <input value="<?php if(isset($_POST['embalagem'])) echo $_POST['embalagem']; ?>" name="embalagem" type="text" placeholder="LOOSE ou Cartelada" class="form-control" aria-describedby="basic-addon1">
                                </div> 
                                
                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Material da carroceria</i></span>
                                    <input value="<?php if(isset($_POST['material_da_carroceria'])) echo $_POST['material_da_carroceria']; ?>" name="material_da_carroceria" type="text" placeholder="Plástico, metal etc." class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Material do chassi</i></span>
                                    <input value="<?php if(isset($_POST['material_do_chassi'])) echo $_POST['material_do_chassi']; ?>" name="material_do_chassi" type="text" placeholder="Plástico, metal etc." class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Cor da carroceria</i></span>
                                    <input value="<?php if(isset($_POST['cor_da_carroceria'])) echo $_POST['cor_da_carroceria']; ?>" name="cor_da_carroceria" type="text" placeholder="verifique no chassi" class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Cor do chassi</i></span>
                                    <input value="<?php if(isset($_POST['cor_da_chassi'])) echo $_POST['cor_do_chassi']; ?>" name="cor_do_chassi" type="text" placeholder="verifique no chassi" class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Decalques</i></span>
                                    <input value="<?php if(isset($_POST['decalques'])) echo $_POST['decalques']; ?>" name="decalques" type="text" placeholder="verifique no chassi" class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Cor dos vidros</i></span>
                                    <input value="<?php if(isset($_POST['cor_dos_vidros'])) echo $_POST['cor_dos_vidros']; ?>" name="cor_dos_vidros" type="text" placeholder="verifique no chassi" class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Cor do interior</i></span>
                                    <input value="<?php if(isset($_POST['cor_do_interior'])) echo $_POST['cor_do_interior']; ?>" name="cor_do_interior" type="text" placeholder="verifique no chassi" class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Rodas</i></span>
                                    <input value="<?php if(isset($_POST['rodas'])) echo $_POST['rodas']; ?>" name="rodas" type="text" placeholder="verifique no chassi" class="form-control" aria-describedby="basic-addon1">
                                </div> 

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Pneu</i></span>
                                    <input value="<?php if(isset($_POST['pneu'])) echo $_POST['pneu']; ?>" name="pneu" type="text" placeholder="Plástico, borracha etc." class="form-control" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Ano de copyright</i></span>
                                    <input value="<?php if(isset($_POST['ano_de_copyright'])) echo $_POST['ano_de_copyright']; ?>" name="ano_de_copyright" type="text" placeholder="verifique na cartela ou no chassi" class="form-control" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Pais de fabricação</i></span>
                                    <input value="<?php if(isset($_POST['pais_de_fabricacao'])) echo $_POST['pais_de_fabricacao']; ?>" name="pais_de_fabricacao" type="text" placeholder="verifique na cartela ou no chassi" class="form-control" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-6">
                                    <span class="input-group-text"><i>Anotações</i></span>
                                    <input value="<?php if(isset($_POST['anotacoes'])) echo $_POST['anotacoes']; ?>" name="anotacoes" type="text" placeholder="verifique na cartela ou no chassi" class="form-control" aria-describedby="basic-addon1">
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