 <!DOCTYPE html>
 <?php
session_start();
include("db.php");
include("links.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up log in</title>
    <link rel="stylesheet" href="assets/css/log.css">
	<link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet"
        type="text/css" />
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post">
			<h1>ایجاد حساب کاربری</h1>
			<div class="social-container">
			</div>
			<span>یا از ایمیل خود برای ثبت نام استفاده کنید</span>
			<input type="text" placeholder="Name" name="Fname" />
			<input type="text" placeholder="Last Name" name="Lname" />
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="password" />
			<input type="submit" name="signup" value="Sign up" style="background-color: red;" >
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post">
			<h1>Sign in</h1>
			<div class="social-container">
			</div>
			<span>یا از حساب کاربری خود استفاده کنید</span>
			<input type="email" placeholder="Email" name="email" />
			<input type="password" placeholder="Password" name="password" />
			<input type="submit" name="signin" value="Sign In" style="background-color: red;" >
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>خوش برگشتی</h1>
				<p>برای حفظ ارتباط با ما لطفا با اطلاعات شخصی خود وارد شوید</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>سلام رفیق</h1>
				<p>برای حفظ ارتباط با ما لطفا با اطلاعات شخصی خود وارد شوید
				</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="assets/js/app.js"></script>
<?php
if (isset($_POST['signup']))
{
	$name = $_POST['Fname'];
	$lastname = $_POST['Lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$pattern = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";
	$sql2 = "SELECT * from users where email = '$email'";
	$res = $con->query($sql2);
	$row = $res->fetch_array();
	if ($name == "" || $lastname == "" ||$password == "" || $email == "") {
	?>
		<script>
			Swal.fire({
				icon: 'error',
				title: 'خطا',
				text: 'لطفا همه فیلد ها را پر کنید',
				timer: 1500
			})
		</script>
	<?php
	}
	 else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	?>
		<script>
			Swal.fire({
				icon: 'error',
				title: 'خطا',
				text: 'ایمیل وارد شده مجاز نیست',
				timer: 1500
			})
		</script>
	<?php
	} else if (!preg_match($pattern, $password)) {
	?>
		<script>
			Swal.fire({
				icon: 'error',
				title: 'خطا',
				text: 'فرمت رمز عبور صحیص نمیاشد',
				timer: 1500
			})
		</script>
	<?php
	}
	// Check Duplicate User
	else if ($res->num_rows > 0) {
	?>
		<script>
			Swal.fire({
				icon: 'error',
				title: 'خطا',
				text: ' ایمیل وارد شده تکراری است',
				timer: 1500
			})
		</script>
		<?php
	} else {
		$hashpass = password_hash($password, PASSWORD_DEFAULT);
		$sql = "insert into users (name,lastname,password,email) values ('$name','$lastname','$hashpass','$email')";
		if ($con->query($sql)) {
		?>
			<script>
				Swal.fire({
					icon: 'success',
					title: 'موفق',
					text: 'ثبت نام شما با موفقیت تکمیل شد',
					timer: 1500
				}).then(function() {
					window.location = "./index.php";
				});
			</script>
<?php
		}
	}
}
if(isset($_POST['signin']))
{
	$email = $_POST['email'];
	$sql = "select * from users where email= '$email'";
	$res = $con->query($sql);
	$row = $res->fetch_array();
	$password = $_POST['password'];
	if ($email == "" || $password == "") {
		?>
		<script>
			Swal.fire({
				icon: 'error',
				title: 'خطا',
				text: 'لطفا همه فیلد ها را پر کنید',
				timer : 1500
			})
		</script>
	<?php
	} else if ($res->num_rows == 0) {
		?>
		<script>
			Swal.fire({
				icon: 'error',
				title: 'خطا',
				text: 'حساب کاربری ندارید',
				timer : 2000
			})
		</script>
	<?php
	}
	// Location Changing Based ON LEVEL >>>>>>
	 else if (!password_verify($password, $row['password']))
	{
		?>
		<script>
			Swal.fire({
				icon: 'error',
				title: 'خطا',
				text: 'رمز عبور شما اشتباه است',
				timer : 1500
			})
		</script>
	<?php
	}
	else 
	{
		$_SESSION['userid'] = $row['uid'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['lastname'] = $row['lastname'];
		?>
		<script>
			Swal.fire({
				icon: 'success',
				title: 'موفق',
				text: 'شما با موفقیت وارد شدید',
				timer: 1500
			}).then(function() {
				window.location = "./index.php";
			});
		</script>
<?php
	}
}
?>
</body>
</html>