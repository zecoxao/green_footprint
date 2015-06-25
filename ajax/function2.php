<?php
session_start();
if($_REQUEST['option_mapa']){
	$_SESSION['mapa']="0";
	$_SESSION['mapa']=$_REQUEST['option_mapa'];
	//echo $_SESSION['equipamento_profissional'];
}
else{
	//echo $_SESSION['equipamento_profissional'];
}
?>
