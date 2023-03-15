<?php
	class database {
		private $dbHost="localhost";
		private $dbUser="root";
		private $dbPassword="";
		private $dbName="cvdp";
		
		function connectMsql(){
			mysql_connect($this,$this->dbUser,$this->dbPassword);
			mysql_select_db($this->dbName) or die ("Database not Found");
		}
		function tampilNama(){
			$sql_tampil=mysql_query("SELECT * From pengguna ORDER BY id ASC;");
			while($row=mysql_fetch_array($sql_tampil))
			$data[]=$row;
			return $data;
		}
	}

?>