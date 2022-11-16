<html>
<head>
<title>Clientes</title>

</head>
<body> 
<?php 

$clientes = array(

array("Nome"=>"Maria Andrea","CPF"=>"03254897134","Telefone"=>"96998546718","Email"=>"maria@gmail.com","CEP"=>"84512-254"),

array("Nome"=>"Carlos André","CPF"=>"21589745381","Telefone"=>"96986485129","Email"=>"carlos@gmail.com","CEP"=>"64851-012"),

array("Nome"=>"José Ferreira","CPF"=>"21589467821","Telefone"=>"96931597845","Email"=>"jose@gmail.com","CEP"=>"97854-125"),

array("Nome"=>"Lucia Pereira","CPF"=>"21589748562","Telefone"=>"96987546312","Email"=>"lulu@gmail.com","CEP"=>"64851-358"),

array("Nome"=>"Elena Cardoso","CPF"=>"21589746985","Telefone"=>"96978451268","Email"=>"elena@gmail.com","CEP"=>"98546-369"),


);


?>
<h3>Clientes </h3>
<table border align = "left">

<tr>
<th> Nome </th>
<th> CPF </th>
<th> Telefone </th>
<th> Email </th>
<th> CEP </th>

</tr>


<?php
foreach ($clientes as $clientes){
	
?>

<tr> 
<td ALIGN = "center"> <?php echo $clientes['Nome']; ?>  </td>
<td ALIGN = "center"> <?php echo $clientes['CPF']; ?> </td>
<td ALIGN = "center"> <?php echo $clientes['Telefone'];?></td>
<td ALIGN = "center"> <?php echo $clientes['Email'];?></td>
<td ALIGN = "center"> <?php echo $clientes['CEP'];?></td>

</tr>

<?php } ?>
</table>

</body>
</html>