<html>
<head>
<title>Filiais</title>

</head>
<body> 
<?php 

$filiais = array(


array("Número"=>"1","Gerente"=>"Antonio Pereira","Telefone"=>"96986485129","Localização"=>"Brasil Novo","Funcionarios"=>"20"),

array("Número"=>"2","Gerente"=>"Catarina Andrade","Telefone"=>"96931597845","Localização"=>"Buritizal","Funcionarios"=>"15"),

array("Número"=>"3","Gerente"=>"Michael Lopes","Telefone"=>"96987546312","Localização"=>"Londrina","Funcionarios"=>"10"),

array("Número"=>"4","Gerente"=>"Roberto Chagas","Telefone"=>"96978451268","Localização"=>"Oiapoque","Funcionarios"=>"18"),

array("Número"=>"5","Gerente"=>"Renan Oliveira","Telefone"=>"96984596859","Localização"=>"Macapá","Funcionarios"=>"18"),


);


?>
<h1>Filiais </h1>
<table border align = "center">

<tr>
<th> Número </th>
<th> Gerente </th>
<th> Telefone </th>
<th> Localização </th>
<th> Funcionarios </th>

</tr>


<?php
foreach ($filiais as $filiais){
	
?>

<tr> 
<td ALIGN = "center"> <?php echo $filiais['Número']; ?>  </td>
<td ALIGN = "center"> <?php echo $filiais['Gerente']; ?> </td>
<td ALIGN = "center"> <?php echo $filiais['Telefone'];?></td>
<td ALIGN = "center"> <?php echo $filiais['Localização'];?></td>
<td ALIGN = "center"> <?php echo $filiais['Funcionarios'];?></td>

</tr>

<?php } ?>
</table>

</body>
</html>