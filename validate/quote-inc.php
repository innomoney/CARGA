<?php
$con = mysqli_connect('localhost', 'root', '', 'carga') or die("Database Connection Error".mysqli_connect_error($con));
    if(isset($_POST['submit'])){
        extract($_POST);
        
        $gender = $_POST['gender'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $new_email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $phone = $_POST['phone'];
        $transport_from = $_POST['transport_from'];
        $transport_to = $_POST['transport_to'];
        $transport_type = $_POST['transport_type'];
        $package_type = $_POST['package_type'];
        $weight = $_POST['weight'];
        $length = $_POST['length'];
        $width = $_POST['width'];
        $range = $_POST['range'];
        $tracking_id = $_POST['tracking_id'];
        $packing_type = $_POST['packing_type'];
        $value = $_POST['value'];
        $track_id = $_POST['track_id'];
        $generateId = substr(str_shuffle('12345HJKLZXCV6tuvwxyzQQWERTY7890abcdefghUIOPASijklmnopqrsDFGBNM'), 0, 10);
    
        if(!isset($_POST['gender'])){
            if($gender == ""){
                echo '<script>
            alert("Gender Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }elseif(!isset($_POST['username'])){
            if($username == ""){
                echo '<script>
            alert("Username Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }elseif(!isset($_POST['email'])){
            if($email == ""){
                echo '<script>
            alert("Email Fields Required");
            window.location = "quote.php";
            </script>';
            }elseif(!filter_var($new_email, FILTER_VALIDATE_EMAIL)){
                    echo '<script>
                alert("Email is Invalid");
                window.location = "quote.php";
                </script>';
            }
        }elseif(!isset($_POST['transport_from'])){
            if($transport_from == ""){
                echo '<script>
            alert("transport_from Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }elseif(!isset($_POST['transport_to'])){
            if($transport_to == ""){
                echo '<script>
            alert("transport_to Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }elseif(!isset($_POST['transport_type'])){
            if($transport_type == ""){
                echo '<script>
            alert("transport_type Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }elseif(!isset($_POST['package_type'])){
            if($package_type == ""){
                echo '<script>
            alert("package_type Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }elseif(!isset($_POST['weight'])){
            if($weight == ""){
                echo '<script>
            alert("weight Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }elseif(!isset($_POST['length'])){
            if($length == ""){
                echo '<script>
            alert("length Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }elseif(!isset($_POST['width'])){
            if($width == ""){
                echo '<script>
            alert("width Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }elseif(!isset($_POST['range'])){
            if($range == ""){
                echo '<script>
            alert("range Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }elseif(!isset($_POST['tracking_id'])){
            if($tracking_id == ""){
                echo '<script>
            alert("tracking_id Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }elseif(!isset($_POST['packing_type'])){
            if($packing_type == ""){
                echo '<script>
            alert("packing_type Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }elseif(!isset($_POST['value'])){
            if($value == ""){
                echo '<script>
            alert("value Fields Required");
            window.location = "quote.php";
            </script>';
            }
        }else{
            $sql = "INSERT INTO `quote`(`id`, `gender`, `username`, `email`, `phone`, `transport_from`, `transport_to`, `transport_type`, `package_type`, `weight`, `length`, `width`,`range`, `tracking_id`, `packing_type`, `value`, `track_id`) VALUES 
            ('','$gender','$username','$new_email','$phone','$transport_from','$transport_to','$transport_type','$package_type','$weight','$length','$width','$range','$tracking_id','$packing_type', '$value', '$generateId')";
            
                
                
            $result = mysqli_query($con, $sql);
            if(!$result){
                die(mysqli_error($con));
            }else{
                echo '<script>
            alert("Quotes Are Successfully Requested");
            window.location = "quote.php";
            </script>';
            }
        }
    }
?>