<!doctype html
<html>
<head>
	
</head>
<body>
<form>
	<input type="text" name="a">
	<input type="submit" value="Responder">
</form>
<?php
echo "ola Humano \n vc Gosta de Robos <br>";
	require_once "decisao.php";

	$n1 = isset($_GET['a'])?$_GET['a']:"erro 01";	
	echo $n1;
	
	
	$obj = new decisao;

	if ($n1 == "sim"){
	$obj->acerto();		
	
	}elseif($n1 == "não" || $n1 == "nao"){

	    $obj->erro();
	}
?>
</body>
</html>