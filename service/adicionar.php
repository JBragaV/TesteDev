<?php
    require "conecao.php";
if($_GET){
    $titulo = trim($_GET["ftitulo"]);
    $categoria = trim($_GET['lcategoria']);
    $conteudo = trim($_GET['conteudo']);
    $sql = "INSERT INTO noticias (titulo, categoria, conteudo_noticia) VALUES ('$titulo', '$categoria', '$conteudo')";
    if($connect->query($sql) === TRUE){
        echo "<p>Noticia adcionada com sucesso!!!</p>";
        echo "<a href='../action.html'><button type='button'>Voltar</button></a>";
        echo "<a href='..'><button type='button'>Página Inicial</button></a>";
    }else{
        echo "Erro ".$sql.' '.$connect->connect_error;
    }
    $connect->close();
}
?>