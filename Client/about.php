<?php

$sql = "SELECT * FROM tbl_member ORDER BY ordernum ASC";
$result = mysqli_query($connect,$sql);

?>
<div class="colorlib-about">
	<div class="container">
		<div class="row row-pb-lg">

			<?php
				while($row = mysqli_fetch_array($result))
				{
			?>
			<div class="col-sm-6 mb-3">
			<img src="images/Member/<?=$row['img']?>" alt="" style="width:350px; height:300px; border-radius:50%;">
			</div>
			<div class="col-sm-6">
				<div class="about-wrap">
					<h2>Name : <?=$row['name']?></h2>
					<h5>Position : <?=$row['position']?></h5>
					<h5>Address : <?=$row['address']?></h5>
					<h5>Contact : <?=$row['Contact']?></h5>
				</div>
			</div>

			<div>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</div>
			<?php
				}
			?>
			
		</div>
	</div>
</div>
