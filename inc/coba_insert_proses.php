<?php
	include_once "../config/ClsDB.php";
	include_once "../config/cls_coba.php";

	session_start();
	session_register();
		
	$strid = $_POST[id];
	$strnama = $_POST[nama];
	$stralamat = $_POST[alamat];
	$strno_tlp = $_POST[no_tlp];
	$strumur = $_POST[umur];
	
	$ActiveCoba = new coba;

	$ActiveCoba->id=$strid;
	$ActiveCoba->nama=$strnama;
	$ActiveCoba->alamat=$stralamat;
	$ActiveCoba->no_tlp=$strno_tlp;
	$ActiveCoba->umur=$strumur;
	
	$ActiveCoba->doConnect();
	$ActiveCoba->insertcoba();
	
	$ActiveCoba->doClose();
	
	$relative_url = "index.php";
	header ("Location: http://".$_SERVER['HTTP_HOST']."/db88/" .$relative_url);
  	exit;
?>