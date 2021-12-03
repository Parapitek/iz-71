<?php
	$host = 'db';
	$db_name = 'students';
	$user = 'root';
	$pwd = '123';
	
	$db = null;
	
	try {
		$db = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pwd);
	} 
	catch (PDOException $e) {
		print "Error!: " . $e->getMessage();
		die();
	}
	
	$stmt = $db->prepare("SELECT s.ID,s.SURNAME,s.NAME,s.PATR,g.NAME AS `GROUP` FROM `students` AS s JOIN `groups` AS g ON s.ID_GROUP=g.ID");
	$stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
		echo $row->SURNAME.' '.$row->NAME.' '.$row->PATR.' '.$row->GROUP.'<BR>';
	}
?>