<?php

include "./config.php";

if(isset($_POST['login'])){

    $email = $_POST['txtemail'];
    $password = $_POST['txtpassword'];

    $sql = "SELECT * FROM tbl_users WHERE email = '$email' OR username = '$email'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);

    if(mysqli_num_rows($result) > 0){
        if($password == $row['password']){
            $_SESSION['clientid'] = $row['id'];
            header("location: Client"); 
        }else{
            echo "

            <script>
            alert('Login Fail')
            </script>
            
            ";
        }
    }
}

?>
<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="Post">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="txtemail" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="txtpassword" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php?p=register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>