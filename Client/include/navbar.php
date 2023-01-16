<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index.html">E-Book</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <h4>Username : <?=$row['username']?></h4>
                                <a href="include/outlog.php">
                                <span> <i class="fa fa-sign-out"></i> logout</span>
                                </a>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li class="<?=$page=="home.php"?"active":""?>"><a href="index.php">Home</a></li>
								
								<li class="<?=$page=="about.php"?"active":""?>"><a href="index.php?p=about.php">About</a></li>
								<li class="<?=$page=="contact.php"?"active":""?>"><a href="index.php?p=contact.php">Contact</a></li>
								<li class="cart <?=$page=="cart.php"?"active":""?>"><a href="index.php?p=cart.php"><i class="icon-shopping-cart"></i>Store</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					
				</div>
			</div>