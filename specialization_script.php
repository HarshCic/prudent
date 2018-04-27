<?php
require'include/common.php';
$specialization = $_GET["specialization"];
$select_query= select * from doctors where doctors.specialization = $specialization;

?>