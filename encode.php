<?php
	$x = array(array("nama" => "DKI Jakarta",	"ibukota" => "Jakarta"),
			   array("nama" => "Banten",		"ibukota" => "Serang"),
			   array("nama" => "Jawa Barat",	"ibukota" => "Bandung"),
			   array("nama" => "Jawa Tengah",	"ibukota" => "Semarang"),
			   array("nama" => "DI Yogyakarta",	"ibukota" => "Yogyakarta"),
			   array("nama" => "Jawa Timur",	"ibukota" => "Surabaya")
			  );
	
	header('Content-Type: application/json');
	echo json_encode($x);
?>