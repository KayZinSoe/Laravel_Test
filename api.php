<?php

	$conn = mysql_connect("127.0.0.1", "root", "");
	mysql_select_db("store", $conn);
	$result = mysql_query("SELECT id,name from categories");

	$rows = array();
	while ($row = mysql_fetch_assoc($result)) {
		$rows[] = $row;
	}	
	echo(json_encode($rows));
?>