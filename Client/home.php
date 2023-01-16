<?php

$sql = "SELECT * FROM tbl_book WHERE active = '1' ORDER BY publish DESC";
$result = mysqli_query($connect,$sql);

if(isset($_GET['action']))
{
	$action = $_GET['action'];

	switch($action)
	{
		case "0":
			{
				header("location: index.php");
			}

		case "1":
			{
				$sql = "SELECT * FROM tbl_book WHERE active = '1' AND category = 'manga' ORDER BY publish DESC";
				$result = mysqli_query($connect,$sql);
				break;
			}

		case "2":
			{
				$sql = "SELECT * FROM tbl_book WHERE active = '1' AND category = 'novel' ORDER BY publish DESC";
				$result = mysqli_query($connect,$sql);
				break;
			}
	}
}

?>
<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h2 class="intro">A Book Can Change Your Life.</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-product">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="#" class="featured-img" style="background-image: url(images/Manga.jpg);"></a>
							<div class="desc">
								<h2><a href="#">Manga</a></h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="#" class="featured-img" style="background-image: url(images/Novel.jpg);"></a>
							<div class="desc">
								<h2><a href="#">Novel</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
						<h2>Book Available</h2>
					</div>
				</div>

				<ul>
					<li><a href="index.php?p=home.php&action=0">All</a></li>
					<li><a href="index.php?p=home.php&action=1">Manga</a></li>
					<li><a href="index.php?p=home.php&action=2">Novel</a></li>
				</ul>

				<div class="row row-pb-md">

					<?php
						while($row = mysqli_fetch_array($result))
						{
					?>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="images/Book/Client/<?=$row['img']?>" style="height:350px;" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h5><a href="#">Title : <?=$row['title']?></a></h5>
								<span class="price">Author : <?=$row['author']?></span>
								<h5>Publish on : <?=$row['publish']?></h5>
								<h2><a href="index.php?p=cart.php&rowid=<?=$row['id']?>">Add To Cart</a></h2>
							</div>
						</div>
					</div>
					<?php
						}
					?>


				</div>
				
			</div>
		</div>
		<!-- index.php?p=cart.php&rowid=<?=$row['id']?> -->