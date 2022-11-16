<?php   

if(isset($_GET["id"])&&is_numeric($_GET["id"])){

    $sql="SELECT*FROM produtos WHERE id=:id";
    $stmt=conexao()->prepare($sql);
    $stmt->bindParam(":id",$id,PDO::PARAM_INT);
    $produtos=$stmt->execute();
?>
<form method="POST" action="">
<input type="descricao" name="descricao" value="<?=$produto[0]['descricao'];?>"/><br/>
<input type="preco" name="preco" value="<?=$produto[1]['preco'];?>"/><br/>
<input type="quantidade" name="quantidade" value="<?=$produto[2]['quantidade'];?>"/><br/>
<input type="submit" name="botao" value="SALVAR"/>    
</form>
<?php
}


?>