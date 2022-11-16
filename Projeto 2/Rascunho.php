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
    
   // $a = 1;

   // $b = 3;

    //echo $a + $b
    
    //?>

<!-- <?php //echo

// $_SERVER["REMOTE_ADDR"];
?> -->

<?php 

// $vareavel='valor da variavel';

// $vareavel=10;

// $var_bool=TRUE;
// $var_str="foo";
// $var_int=12;

// echo gettype($var_bool);
// echo"<BR/>";
// echo gettype($var_str);
// echo"<BR/>";
// echo gettype($var_int);
// echo"<BR/>";

// // constante
// define('HELLO','Hello World');

// echo HELLO;
?>
<?php 

// $array = array(
//     "cidade"=>"Macapa",
//     "estado"=>"Amapa",
//     "habitantes"=>100000,
//     "mcdonald"=> false);
//     echo"<BR/>";
//     echo $array["cidade"];
    

?>

<!-- Arrays multdimensionais -->
<?php 


// $cidades = array(

//     array("cidade"=>"Macapá","estado"=>"Amapá","habitantes"=>700000,"mcdonald"=>false),

//     array("cidade"=>"belem","estado"=>"Pará","habitantes"=>700000,"mcdonald"=>true),

//     array("cidade"=>"Santana","estado"=>"Amapá","habitantes"=>700000,"mcdonald"=>false),


// );
// echo"<BR/>";
// echo $cidades[0]["cidade"];


// $cidades = array();

// $cidades[]=array(
//     "cidade"=>"Macapá",
//     "estado"=>"Amapá",
//     "habitantes"=>700000,
//     "mcdonald"=>false

// );
// echo"<pre>";
// print_r($cidades);
// echo"</pre>";
// echo"<BR/>";
// echo $cidades[0]["cidade"];

// echo "<h3>Pos-incremento</h3>";
// $a=5;
// echo "Deve ser 5: ".$a++."<br />\n";
// echo "Deve ser 6: ".$a."<br />\n";

// echo "<h3>Pre-incremento</h3>";
// $a=5;
// echo "Deve ser 6: ".++$a."<br />\n";
// echo "Deve ser 6: ".$a."<br />\n";

// echo "<h3>Pos-incremento</h3>";
// $a=5;
// echo "Deve ser 5: ".$a--."<br />\n";
// echo "Deve ser 4: ".$a."<br />\n";

// echo "<h3>Pre-incremento</h3>";
// $a=5;
// echo "Deve ser 4: ".--$a."<br />\n";
// echo "Deve ser 4: ".$a."<br />\n";


?>

<?php 
// "<br />\n";
// $a=4;
// $b=7;

// if($a>$b){
//     echo "$a é maior que $b";
// }else{
//     echo "$a não é maior que $b";
// }

?>
<?php 
// "<br />\n";
// $itens=Array('item 1', 'item 2','item 3','item 4');

// foreach($itens as $item){
//     echo $item."<br/>";

    // $funcionarios = array(

    //         array("nome"=>"Alex","idade"=>"21","salario"=>1254.27,"ativo"=>true),
        
    //         array("nome"=>"João","idade"=>"35","salario"=>3885.27,"ativo"=>false),

    //         array("nome"=>"Osvaldo","idade"=>"54","salario"=>5285.27,"ativo"=>true),
    // );
    // foreach($funcionarios as $funcionario){
    //     echo "funcionario".$funcionario["nome"]."-"$funcionario["salario"];
        

//}



?>


<?php     

//echo date("d/m/y");


// $nome = "";
// $telefone = "";

// if(in_null($nome) or is_null($telefone)){

//     echo "Preencha os campos nome e telefone";
// }

// $a = "Olá Mundo!";
// $b = strtoupper($a);
// $c = strtolower($a);
// echo $b."<br/>";
// echo $c;

// $SENHA= "BATATA";

// $SENHA= sha1(md5($SENHA));

// print_r($SENHA);

// $numero=12000;

// echo number_format($numero,2
// ,',',',');


// $a = 1;
// $b = 2;

// echo "Resultado = ".($a + $b);





?>

<header> Topo do Template</header>
<nav> 
<a right href="?modulo=clientes&acao=listar">clientes</a>
<a href="?modulo=produto&acao=listar">produto</a>
<a href="?modulo=categoria&acao=listar">categoria</a>
<a href="?modulo=Filiais&acao=listar">Filiais</a>
<a href="?modulo=Vendedores&acao=listar">Vendedores</a>
</nav>
<?php
    
    // $modulo="produto";
    // $acao="lista";

    // //include("modulos/clientes/lista.php");

    // include("modulos/".$modulo."/".$acao.".php");

    $modulo=$_GET['modulo'];
    
    $acao=$_GET['acao'];


    if(isset($_GET["modulo"])){
        $modulo=$_GET["modulo"];
    }else{
        $modulo=false;
    }
    

    if(isset($_GET["acao"])){
        $acao=$_GET["acao"];
    }else{
        $acao=false;
    }
     
    $url="modulos/".$modulo."/".$acao.".php";


    if($modulo && $acao && file_exists($url)){
        include($url);

    }else{
        echo "Pagina Solicitada não Existe";
    }
    

    



    ?>

    <footer> Rodapé do Template </footer>








    </h3>

    </section>


</body>



</html>