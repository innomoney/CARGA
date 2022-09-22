<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $con = mysqli_connect("localhost", "root", "", "carga") or die(mysqli_connect_error($con));

    if(!$con){
        die("Connection failed".mysqli_connect_error($con));
    }

    $sql = "DELETE FROM `quote` WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if(!$result){
        die("Connection failed".mysqli_connect_error($con));
    }else{
        echo '<script>
	alert(" Table Row Deleted Successfully");
	window.location = "index.php";
	</script>';
    }
}
?>