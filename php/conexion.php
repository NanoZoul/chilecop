<?php
	function conectarse(){
		$con = mysql_connect("localhost","chilecop_control","admin2954");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		 
		mysql_select_db("chilecop_acreditacion", $con);
		return $con;
	}

	function conectarse2(){
		$con = mysql_connect("localhost","chilecop_control","admin2954");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		 
		mysql_select_db("chilecop_cademo", $con);
		return $con;
	}
?>