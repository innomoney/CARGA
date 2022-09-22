<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.1.3/dist/js/bootstrap.min.js">
</head>
<body class="hidden-bar-wrapper">

    <div class="container my-5">
        <h2>List of Client</h2>
        <a class="btn btn-primary" href="../quote.php" role="button">New Client</a>
        <br>
        <table class="table" border="5">
            <thead>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Gender</b></td>
                    <td><b>Username</b></td>
                    <td><b>Email</b></td>
                    <td><b>Phone</b></td>
                    <td><b>Transport_form</b></td>
                    <td><b>Transport_to</b></td>
                    <td><b>Package_type</b></td>
                    <td><b>Time</b></td>
                    <td><b>Weight</b></td>
                    <td><b>Length</b></td>
                    <td><b>Range</b></td>
                    <td><b>Tracking_id</b></td>
                    <td><b>Packing_type</b></td>
                    <td><b>Value</b></td>
                    <td><b>Track_id</b></td>
                    <td><b>Edit</b></td>
                    <td><b>Delete</b></td>
                </tr>
            </thead>
            <tbody>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'carga') or die(mysqli_connect_error($con));

                $sql = "SELECT * FROM `quote`";
                $result = mysqli_query($con, $sql);
                if(!$result){
                    die("Connection failed".mysqli_error($con));
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    echo"
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[gender]</td>
                        <td>$row[username]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[transport_from]</td>
                        <td>$row[transport_to]</td>
                        <td>$row[transport_type]</td>
                        <td>$row[time]</td>
                        <td>$row[weight]</td>
                        <td>$row[length]</td>
                        <td>$row[range]</td>
                        <td>$row[tracking_id]</td>
                        <td>$row[packing_type]</td>
                        <td>$row[value]</td>
                        <td>$row[track_id]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
                    </td>
                    <td>
                        <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                    ";
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>