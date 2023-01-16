<?php

if(isset($_GET['action'])){
	$action = $_GET['action'];

	switch($action)
	{
		case "delete":
			{
				$id = $_GET['id'];
				$sql = "DELETE FROM tbl_borrower WHERE id = '$id'";
				mysqli_query($connect,$sql);
				break;
			}
		case "submit":
			{
				$username = $_GET['username'];
				$sql = "SELECT * FROM tbl_borrower WHERE username = '$username'";
				$result = mysqli_query($connect,$sql);
				$row = mysqli_fetch_array($result);

				$title = $row['title'];
				$author = $row['author'];
				$category = $row['category'];
				$username = $row['username'];	

				$sql = "INSERT INTO tbl_bookaway (title,author,category,username)
						VALUES('$title','$author','$category','$username')";
				mysqli_query($connect,$sql);
				header("location: index.php	");
			}
	}
}

if(isset($_GET['rowid'])){

	$id = $_GET['rowid'];
	$sql = "SELECT * FROM tbl_book WHERE id = '$id'";
	$result = mysqli_query($connect,$sql);
	$rowclient = mysqli_fetch_array($result);
	
	$title = $rowclient['title'];
	$author = $rowclient['author'];
	$category = $rowclient['category'];
	$img = $rowclient['img'];
	$username = $row['username'];
	
	$sql = "SELECT CURRENT_DATE,CURRENT_TIME FROM tbl_book";
	$result = mysqli_query($connect,$sql);
	$rowddate = mysqli_fetch_array($result);

	$Date = $rowddate['CURRENT_DATE'];
	$time = $rowddate['CURRENT_TIME'];

	$sql = "INSERT INTO tbl_borrower (img,title,author,category,username,date,time)
			VALUES('$img','$title','$author','$category','$username','$Date','$time')";
	mysqli_query($connect,$sql);

	header("location: ./index.php");
}

$username = $row['username'];
$sql = "SELECT * FROM tbl_borrower WHERE username = '$username'";
$result = mysqli_query($connect,$sql);

?>

<div class="colorlib-product">
			<div class="container">

				<div class="row row-pb-lg">
					<div class="col-md-12">

				
						<div class="product-cart d-flex">

							<div class="one-forth">
								<div class="product-img" style="background-image: url();">
								</div>
								<div class="display-tc">
									<h3>Book Title</h3>
								</div>
							</div>

							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">Author</span>
								</div>
							</div>
							
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">Category</span>
								</div>
							</div>

							

						</div>
						
						<?php
							while($row = mysqli_fetch_array($result))
							{
						?>
						<div class="product-cart d-flex">

							<div class="one-forth">
								<div class="product-img" style="background-image: url(images/Book/<?=$row['img']?>);">
								</div>
								<div class="display-tc">	
									<h3><?=$row['title']?></h3>
								</div>
							</div>

							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"><?=$row['author']?></span>
								</div>
							</div>
							
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"><?=$row['category']?></span>
								</div>
							</div>

							<div class="one-eight text-center">
								<div class="display-tc">
									<a href="index.php?p=cart.php&id=<?=$row['id']?>&action=delete" class="closed"></a>
								</div>
							</div>

						</div>
						<?php
							}
						?>

						<div class="col-sm-3">
							<a href="index.php?p=cart.php&username=<?=$username?>&action=submit">
								<input type="submit"  value="Apply Coupon" class="btn btn-primary">
							</a>
						</div>

					</div>
				</div>
				
			</div>


		</div>
