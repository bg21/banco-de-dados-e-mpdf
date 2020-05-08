<?php
    include('config.php');  
    $select = \Conexao::conectar()->prepare("SELECT * FROM users");
    $select->execute();
    $select = $select->fetchAll(); 
?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Open Sans', sans-serif;
    }
    div.box_pdf{
        text-align: center;
    }
</style>
    <div class="box_pdf">
        <h2>Algo aqui</h2>
        //Fazer o select do banco e trazer aqui os campos e dá um get pra trazer só os dados de um user se quiser

        <?php
            foreach ($select as $key => $value) {
        ?>
            <h2><?php echo $value['user']; ?></h2>
        <?php } ?>
    </div>