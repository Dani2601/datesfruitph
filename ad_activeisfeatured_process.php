<?php 
if (!file_exists("config.php")){
	echo "Unable to located <strong>config.php</strong>";
	exit();
}
include("config.php");

if(@$_GET["action"] == "isfeatured") {
	$sql_approve = "UPDATE products SET isfeatured = 1 WHERE id = ?";
	if($approve_check = mysqli_prepare($conn, $sql_approve)) {
		mysqli_stmt_bind_param($approve_check, "i", $id);
		$id = $_GET["transaction_ID"];
		mysqli_stmt_execute($approve_check);
		header("location: ad_addproducts.php");
		exit();
	}
}

if(@$_GET["action"] == "notisfeatured") {
	$sql_approve = "UPDATE products SET isfeatured = 0 WHERE id = ?";
	if($approve_check = mysqli_prepare($conn, $sql_approve)) {
		mysqli_stmt_bind_param($approve_check, "i", $id);
		$id = $_GET["transaction_ID"];
		mysqli_stmt_execute($approve_check);
		header("location: ad_addproducts.php");
		exit();
	}
}

?>