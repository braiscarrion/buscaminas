<?php
/*
 * Autor: Brais Carrión Ansias
 * IAWEB 14/15
 */
?>

<?php
	//iniciar
	ob_start();

	//incluir estilos e outros arquivos
    include_once("header.php");

	if(isset($_GET['d']))
	{
		$dimension=$_GET['d'];
		setcookie("dimension",$dimension,time()+3600);
	    header("location:xogar.php");
	}
	else
	{
		aviso("danger","Produc&iacute;use un erro","index.php","Ir ao inicio");
	}

?>