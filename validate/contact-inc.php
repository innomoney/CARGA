<?php
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$new_email = filter_var($email, FILTER_SANITIZE_EMAIL);
		$phone = $_POST['phone'];
		$message = $_POST['message'];
	
		if(!isset($username)){
			if($username == ""){
                echo '<script>
            alert("All Fields Required");
            window.location = "contact.php";
            </script>';
            }
		}elseif(!isset($email)){
			if($gender == ""){
                echo '<script>
            alert("All Fields Required");
            window.location = "contact.php";
            </script>';
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					echo '<script>
				alert("Email is Invalid");
				window.location = "contact.php";
				</script>';
			}
		}elseif(!isset($phone)){
			if($phone == ""){
                echo '<script>
            alert("All Fields Required");
            window.location = "contact.php";
            </script>';
            }
		}elseif(!isset($message)){
			if($message == ""){
                echo '<script>
            alert("All Fields Required");
            window.location = "contact.php";
            </script>';
            }
		}
		$con = new mysqli('localhost', 'root', '', 'carga') or die(mysqli_connect_error($con));
		$sql = "INSERT INTO `contact` (username, email, phone, message) VALUE ('$username', '$new_email', '$phone', '$message')";
		$result = mysqli_query($con, $sql);
		if(!$result){
			die(mysqli_error($con));
		}else{
                echo '<script>
            alert("Fields Are Successfully Inserted");
            window.location = "contact.php";
            </script>';
		}
	}

?>