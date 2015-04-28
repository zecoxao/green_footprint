<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$user = Yii::app()->getUser();
//http://localhost/footprint/index.php?r=user/login
if($user->isGuest){
	header("location:http://localhost/footprint/index.php/?r=user/login");
}
?>


