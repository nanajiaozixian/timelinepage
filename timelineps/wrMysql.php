<?php
function connect_mysql(){
	$conn = @mysql_connect('localhost', 'timeline', 'hitimeline');

		if(!$conn){
			die("Could not link to mysql".mysql_error());
		}
		$db = mysql_select_db('timelinedb', $conn);
		if (!$db) {
    	die ('Can\'t use foo : ' . mysql_error());
		}
		
		return $conn;
}
?>