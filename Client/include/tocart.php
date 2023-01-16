<?php

if(isset($_GET['rowid'])){

	$id = $_GET['rowid'];
	$sql = "SELECT * FROM tbl_book WHERE id = '$id'";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($result);
	
	$title = $row['title'];
	$author = $row['author'];
	$category = $row['category'];

	$sql = "INSERT INTO tbl_borrower (title,author,category)
			VALUES('$title','$author','$category')";
	mysqli_query($connect,$sql);

}

?>