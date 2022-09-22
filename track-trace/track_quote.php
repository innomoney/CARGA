<?php
// function track() {
    $con = new mysqli("localhost", "root", "", "carga") or die(mysqli_connect_error($con));

								if(isset($_POST['search'])){

									$track_id = $_POST['track_id'];

									$sql ="SELECT * FROM `quote` WHERE track_id = '$track_id'";
									$result = mysqli_query($con, $sql);
									if(!$result){
										die(mysqli_error($con));
									}

									// $sth->setFetchMode(PDO:: FETCH_OBJ);
									// $sth-> execute();

									if($row = mysqli_fetch_assoc($result))
									{
										?>
										<br><br><br>
										<table border="1">
											<tr>
											<td>ID</td>
											<td>Gender</td>
											<td>Username</td>
											<td>Email</td>
											<td>Phone</td>
											<td>Transport_form</td>
											<td>Transport_to</td>
											<td>Package_type</td>
											<td>Time</td>
											<td>Weight</td>
											<td>Length</td>
											<td>Range</td>
											<td>Tracking_id</td>
											<td>Packing_type</td>
											<td>Value</td>
											<td>Track_id</td>
											</tr>
											<tr>
												<td><?php echo $row['id']; ?></td>
												<td><?php echo $row['gender']; ?></td>
												<td><?php echo $row['username']; ?></td>
												<td><?php echo $row['email']; ?></td>
												<td><?php echo $row['phone']; ?></td>
												<td><?php echo $row['transport_from']; ?></td>
												<td><?php echo $row['transport_to']; ?></td>
												<td><?php echo $row['transport_type']; ?></td>
												<td><?php echo $row['time']; ?></td>
												<td><?php echo $row['weight']; ?></td>
												<td><?php echo $row['length']; ?></td>
												<td><?php echo $row['range']; ?></td>
												<td><?php echo $row['tracking_id']; ?></td>
												<td><?php echo $row['packing_type']; ?></td>
												<td><?php echo $row['value']; ?></td>
												<td><?php echo $row['track_id']; ?></td>
											</tr>
										</table>

										<?php
									echo '<script>
									alert("Track_id Found");
									</script>';
									}

									else{
										echo '<script>
										alert("Track_id Does Not Exist");
										window.location = "/carga/quote.php";
										</script>';
									}
								}
// }

?>