<?php
session_start();
if($_REQUEST['option']){
	$_SESSION['equipamento_profissional']="0";
	$_SESSION['equipamento_profissional']=$_REQUEST['option'];
	//echo $_SESSION['equipamento_profissional'];
}
else{
	//echo $_SESSION['equipamento_profissional'];
}
if($_REQUEST['option2']){
	$_SESSION['cae_cliente']="0";
	$_SESSION['cae_cliente']=$_REQUEST['option2'];
	//echo $_SESSION['equipamento_profissional'];
}
else{
	//echo $_SESSION['equipamento_profissional'];
}
if($_REQUEST['option3']){
	$_SESSION['empresa_cliente']="0";
	$_SESSION['empresa_cliente']=$_REQUEST['option3'];
	//echo $_SESSION['equipamento_profissional'];
}
else{
	//echo $_SESSION['equipamento_profissional'];
}
if($_REQUEST['option4']){
	$_SESSION['equipamento_cliente']="0";
	$_SESSION['equipamento_cliente']=$_REQUEST['option4'];
	//echo $_SESSION['equipamento_profissional'];
}
else{
	//echo $_SESSION['equipamento_profissional'];
}
if($_REQUEST['option5']){
	$_SESSION['potencia_cliente']="0";
	$_SESSION['potencia_cliente']=$_REQUEST['option5'];
	//echo $_SESSION['equipamento_profissional'];
}
else{
	//echo $_SESSION['equipamento_profissional'];
}
?>
