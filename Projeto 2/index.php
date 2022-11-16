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
   

<header> Topo do Template</header>
<nav> 
<a right href="?modulo=clientes&acao=listar">clientes</a>
<a href="?modulo=produtos&acao=listar">Produtos</a>
<a href="?modulo=categoria&acao=listar">categoria</a>
<a href="?modulo=Filiais&acao=listar">Filiais</a>
<a href="?modulo=Vendedores&acao=listar">Vendedores</a>
</nav>
<?php    
    include('Classes/conexao.php');

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