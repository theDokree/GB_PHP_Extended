<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect("localhost", "root", "root", "less4");
	


mysqli_query ($db, 'set character_set_results = "utf8"');
?>