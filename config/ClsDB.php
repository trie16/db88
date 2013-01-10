<?php

class DB {
	
	var $DBHost="localhost";
	var $DBUsername="root";
	var $DBPassword="";
	var $DBName="test";
	var $Result;
	var $Rec;

//----------------------------------------------------------------------
// Connect to database and select database
//----------------------------------------------------------------------
	
	function doConnect() {
	
		if (!$this->Conn=mysql_connect($this->DBHost,$this->DBUsername,$this->DBPassword)){
			echo "Connection Error";
			Exit;
		}
		
		if (!mysql_select_db($this->DBName,$this->Conn)) {
			echo "No Database";
			Exit;
		}
	
	}

//----------------------------------------------------------------------
// Execute Query
//----------------------------------------------------------------------

	function doExec($strsql) {
		if(!$this->Result=mysql_query($strsql)) {
			echo "query error: " .mysql_error();
			Exit;
		}
	
	}

//----------------------------------------------------------------------
// Fetch Query
//----------------------------------------------------------------------

	function doFetch () {
		return $this->Rec=mysql_fetch_row($this->Result);
	}


//----------------------------------------------------------------------
// Return value
//----------------------------------------------------------------------
	function doReturn(){
			 return $this->Rec[0];
	}
		
//----------------------------------------------------------------------
// Close Connection
//----------------------------------------------------------------------
	function doClose(){
			 mysql_close($this->Conn);
	}
}


?>