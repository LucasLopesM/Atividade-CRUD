<html>
<head>
<title>Produtos</title>

</head>
<body> 
<?php 


$sql="SELECT*FROM produtos";
    $stmt=conexao()->prepare($sql);
    $stmt->execute();

    //$produtos = $stmt->fetchAll();

    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //print_r($produtos);

// $produtos = array(

// array("ID"=>"264895","Categoria"=>"Bebidas","Tipo"=>"Fefrigerante","Peso"=>"2L","Validade"=>"10/10/23"),

// array("ID"=>"698458","Categoria"=>"Limpeza","Tipo"=>"Sabão em Pó","Peso"=>"500g","Validade"=>"11/11/23"),

// array("ID"=>"325489","Categoria"=>"Laticínios","Tipo"=>"Iogurte","Peso"=>"200g","Validade"=>"15/11/22"),

// array("ID"=>"369748","Categoria"=>"Hortifruti","Tipo"=>"Uva","Peso"=>"100g","Validade"=>"18/12/24"),

// array("ID"=>"365894","Categoria"=>"Padaria","Tipo"=>"Coxinha","Peso"=>"100g","Validade"=>"15/12/23"),


// );


?>
<h1>Produtos </h1>
<table border align = "CENTER">

<tr>
<th> id </th>
<th> Descricao </th>
<th> Preco </th>
<th> Quantidade </th>
<!-- <th> Validade </th> -->

</tr>


<?php
foreach ($produtos as $produtos){
	
?>
<tr> 
<!-- <td ALIGN = "center"> <?php// echo $produtos['id']; ?>  </td>
<td ALIGN = "center"> <?php //echo $produtos['descricao']; ?> </td>
<td ALIGN = "center"> <?php //echo $produtos['preco'];?></td>
<td ALIGN = "center"> <?php //echo $produtos['quantidade'];?></td> -->

<td ALIGN = "center"> <?= $produtos['id']; ?>  </td>
<td ALIGN = "center"> <?= $produtos['descricao']; ?> </td>
<td ALIGN = "center"> <?= $produtos['preco'];?></td>
<td ALIGN = "center"> <?= $produtos['quantidade'];?></td>
<td >
    <a href="?modulo=produtos&acao=excluir&id=<?=$produtos['id'];?>">
    EXCLUIR
</td>
<td >
    <a href="?modulo=produtos&acao=editar&id=<?=$produtos['id'];?>">
    EDITAR
</td>



</tr>
<tr> 
<!-- <td ALIGN = "center"> <?php //echo $produtos['ID']; ?>  </td>
<td ALIGN = "center"> <?php //echo $produtos['Categoria']; ?> </td>
<td ALIGN = "center"> <?php //echo $produtos['Tipo'];?></td>
<td ALIGN = "center"> <?php //echo $produtos['Peso'];?></td>
<td ALIGN = "center"> <?php //echo $produtos['Validade'];?></td> -->

</tr>

<?php } ?>
</table>

</body>
</html>