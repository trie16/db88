<?php
include_once "ClsDB.php";

class coba extends DB {

	
	var $id;
	var $nama;
	var $alamat;
	var $no_tlp;
	var $umur;


	function getCobaRecord($id) {
		$strsql="Select * from db88 Where id = $id";
		$this->doExec;
		$this->doFetch();
	}
	
	function getCobaField() {
		$this->id=$this->Rec[0];
		$this->nama=$this->Rec[1];
		$this->alamat=$this->Rec[2];
		$this->no_tlp=$this->Rec[3];
		$this->umur=$this->Rec[4];		
	}
	
	function insertcoba() {
		$strsql  = "INSERT INTO db88 (";
		$strsql .= "id,";
		$strsql .= "nama,";
		$strsql .= "alamat,";
		$strsql .= "no_tlp,";
		$strsql .= "umur)";
		
		$strsql .= "VALUES (";
		$strsql .= "'$this->id',";
		$strsql .= "'$this->nama',";
		$strsql .= "'$this->alamat',";
		$strsql .= "'$this->no_tlp',";
		$strsql .= "'$this->umur')";
		
//		echo $strsql;
	$this->doExec($strsql);	
	}
}
?>