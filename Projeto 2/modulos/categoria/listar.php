<html>
<head>
<title>Categorias</title>

</head>
<body> 
<?php 

$categorias = array(

array("Bebidas"=>"Fefrigerante","Limpeza"=>"Detergente","Laticínios"=>"Queijo","Hortifruti"=>"Maçã","Padaria"=>"Pão"),

array("Bebidas"=>"Achocolatados","Limpeza"=>"Sabão em Pó","Laticínios"=>"Leite","Hortifruti"=>"Banana","Padaria"=>"Bolo"),

array("Bebidas"=>"Suco","Limpeza"=>"Esponja","Laticínios"=>"Iogurte","Hortifruti"=>"Pera","Padaria"=>"Brigadeiro"),

array("Bebidas"=>"Energético","Limpeza"=>"Alvejante","Laticínios"=>"Requeijão","Hortifruti"=>"Uva","Padaria"=>"Pastel"),

array("Bebidas"=>"Água Mineral","Limpeza"=>"Amaciante","Laticínios"=>"Doce de leite","Hortifruti"=>"Maçã","Padaria"=>"Coxinha"),


);


?>
<h1>Categorias </h1>
<table border align = "center">

<tr>
<th> Bebidas </th>
<th> Limpeza </th>
<th> Laticínios </th>
<th> Hortifruti </th>
<th> Padaria </th>

</tr>


<?php
foreach ($categorias as $categorias){
	
?>

<tr> 
<td ALIGN = "center"> <?php echo $categorias['Bebidas']; ?>  </td>
<td ALIGN = "center"> <?php echo $categorias['Limpeza']; ?> </td>
<td ALIGN = "center"> <?php echo $categorias['Laticínios'];?></td>
<td ALIGN = "center"> <?php echo $categorias['Hortifruti'];?></td>
<td ALIGN = "center"> <?php echo $categorias['Padaria'];?></td>

</tr>

<?php } ?>
</table>

</body>
</html>