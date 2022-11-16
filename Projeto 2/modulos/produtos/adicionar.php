
<html lang="pt-BR">
<head>
<title>Teste PHP</title>
<link 
REL = "STYLESHEET"

HREF = "css/estilo.css"

TYPE = "text/css" 

/>

</head>
<body>

<section id="hero">
<h3>
   


<?php 

include('../../Classes/conexao.php');

if(isset($_POST["botao"])&& $_POST["botao"]=="SALVAR"){
    
    $descricao= $_POST['descricao'];
    $preco= $_POST['preco'];
    $quantidade= $_POST['quantidade'];

    $sql="INSERT INTO produtos (descricao,preco,quantidade) Values (:descricao, :preco,:quantidade)";
    $stmt=conexao()->prepare($sql);
    $stmt->bindParam(':descricao',$descricao);
    $stmt->bindParam(':preco',$preco);
    $stmt->bindParam(':quantidade',$quantidade);
    $stmt->execute();

    echo "executado com sucesso";
}

?>

<form method="POST" action="">
<input type="descricao" name="descricao" placeholder="descricao"/>
<input type="preco" name="preco" placeholder="preco"/>
<input type="quantidade" name="quantidade" placeholder="quantidade"/>
<input type="submit" name="botao" value="SALVAR"/>    
</form>










</h3>

    </section>
    

</body>



</html>



