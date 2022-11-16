<html>
<head>
<title>Vendedores</title>

</head>
<body> 
<?php 

$Vendedores = array(

array("Nome"=>"Antonio Pereira","CPF"=>"23658415821","Setor"=>"Padaria","Filial"=>"4","Total de Vendas"=>"50"),

array("Nome"=>"Maria das dores","CPF"=>"95482157896","Setor"=>"Hortifruti","Filial"=>"3","Total de Vendas"=>"100"),

array("Nome"=>"Geovan Luz","CPF"=>"32658459871","Setor"=>"Limpeza","Filial"=>"5","Total de Vendas"=>"258"),

array("Nome"=>"Emanuele Batista","CPF"=>"36985124785","Setor"=>"Bebidas","Filial"=>"1","Total de Vendas"=>"68"),

array("Nome"=>"Maia Maria","CPF"=>"36584125879","Setor"=>"Carnes","Filial"=>"2","Total de Vendas"=>"97"),


);


?>
<h1>Vendedores </h1>
<table border align = "center">

<tr>
<th> Nome </th>
<th> CPF </th>
<th> Setor </th>
<th> Filial </th>
<th> Total de Vendas </th>

</tr>


<?php
foreach ($Vendedores as $Vendedores){
	
?>

<tr> 
<td ALIGN = "center"> <?php echo $Vendedores['Nome']; ?>  </td>
<td ALIGN = "center"> <?php echo $Vendedores['CPF']; ?> </td>
<td ALIGN = "center"> <?php echo $Vendedores['Setor'];?></td>
<td ALIGN = "center"> <?php echo $Vendedores['Filial'];?></td>
<td ALIGN = "center"> <?php echo $Vendedores['Total de Vendas'];?></td>

</tr>

<?php } ?>
</table>

</body>
</html>