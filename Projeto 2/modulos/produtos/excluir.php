<?php 

if(isset($_GET["id"])&&is_numeric($_GET["id"])){

    $sql="DELETE FROM produtos WHERE id=:id";
    $stmt=conexao()->prepare($sql);
    $stmt->bindParam(':id',$_GET["id"]);
    $stmt->execute();
}


?>