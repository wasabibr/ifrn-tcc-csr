<?php

//inclusao do Header
include('./includes/header.php');

//
include('./includes/protect.php');

?>

    Bem vind@ <?php echo $_SESSION['nome_de_acesso']; ?>, você está logad@.

    <p>
        <a href="logout.php">Sair</a>
    </p>

<?php

//inclusao do footer
include('./includes/footer.php');

?>