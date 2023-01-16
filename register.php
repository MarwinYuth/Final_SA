<?php

include "./config.php";

if(isset($_POST['register'])){

    $email = $_POST['txtemail'];
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];
    $confirm = $_POST['txtconfirm'];

    if($password == $confirm){
        $sql = "INSERT INTO tbl_users (email,username,password)
                VALUES('$email','$username','$password')";
        mysqli_query($connect,$sql);
        echo "
        
        <script>
        alert('Register Success')
        </script>

        ";
    }else{
        echo "
        
        <script>
        alert('Password Does not match')
        </script>

        ";
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
						Register Account
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="txtemail" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="txtusername" placeholder="Username">
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

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="txtconfirm" placeholder="Confirm">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="register">
							Register
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php">
							Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
