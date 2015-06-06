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
?>
