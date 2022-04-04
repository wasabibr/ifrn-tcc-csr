<?php

//inclusao do Header
include('./includes/header.php');

//conexao com o banco de dados dbcsr
include('./includes/conexao.php');

?>


<form method="GET" action="noticia.php">
    Nome: <input type="text" name="nome"><br><br>
    Idade: <input type="text" name="idade"><br><br>
    E-mail: <input type="text" name="email"><br><br>
    <button type="submit">Enviar</button>
</form>

<?php

//inclusao do footer
include('./includes/footer.php');

?>