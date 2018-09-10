<html>
<body>
<form>
	<input type="text" name="a">
	<input type="submit" value="Responder">
</form>
<?php
	$n1 = isset($_GET['a'])?$_GET['a']:"erro 01";	

	require_once "decisao.php";
	echo "ola Humano \n vc Gosta de Robos";
	$s = "sim";
	$n = "nao";
	
	$obj = new decisao;

	if ($s = "sim"){
	$obj->acerto();		
	
	}elseif ($n = "não"){
	$obj->erro();
	
	}else{
		$obj->resp("$n1");	
	}
?>
</body>
</html>