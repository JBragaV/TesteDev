<?php
    require_once("./service/conecao.php");
?>
<main class="principal">
    <?php 
        $sql = "SELECT id, titulo, categoria, conteudo_noticia from noticias";
        $result = $connect->query($sql);
        if($result->num_rows > 0){
            while($linha = $result->fetch_assoc()){?>
            <div class="principal-noticias-card w3-card-4" style="width:30%;">
                <header class="w3-container w3-blue">
                <h1><?=$linha["titulo"]?></h1>
                </header>
                <div class="w3-container">
                    <p><?=$linha["conteudo_noticia"]?></p>
                </div>
                <footer class="w3-container w3-blue">
                <h5><?=$linha["categoria"]?></h5>
                </footer>
        </div>
    <?php } }     
    ?>
</main>