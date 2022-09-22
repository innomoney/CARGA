<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$new_username = "admin";
	$new_password = "admin";

	if(!isset($username)){
		if($username == ""){
			echo '<script>
		alert("Username Field Required");
		window.location = "pdo_login.php";
		</script>';
		}
	}elseif($username != $new_username){
		echo '<script>
		alert("Incorrect Username");
		window.location = "pdo_login.php";
		</script>';
	}elseif(!isset($password)){
		if($password == ""){
			echo '<script>
		alert("Password Field Required");
		window.location = "pdo_login.php";
		</script>';
		}
	}elseif($password != $new_password){
		echo '<script>
		alert("Incorrect Password");
		window.location = "pdo_login.php";
		</script>';
	}else{
		$hash = password_hash($new_password, PASSWORD_DEFAULT);
		if(!$hash){
            echo '<script>
		alert("Password hash error");
		window.location = "pdo_login.php";
		</script>';
        }
        $con = new mysqli('localhost', 'root', '', 'carga') or die(mysqli_error($con));
        $sql = "SELECT * FROM `login` WHERE username = '$new_username' and password = '$hash'";
        $result = mysqli_query($con, $sql);
        if(!$result){
            die(mysqli_connect_error($con, $sql));
        }else{
			echo '<script>
		alert("Logged In Successfully");
		window.location = "/carga/admin-panel/index.php";
		</script>';
		}
        
	}
}
?>