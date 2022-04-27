<?php 
$id = $_GET['id'];
$select_update = "SELECT * FRom site_info WHERE id = $id";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>				

	<form action="fuction/updatesite.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input class="form-control" type="text" name="name"  value="<?php echo $array['site_name'];?>" ><br>

		<input class="form-control" type="text" name="address"  value="<?php echo $array['address'];?>" ><br>

		<input class="form-control" type="text" name="phone"  value="<?php echo $array['phone'];?>" ><br>

		<input class="form-control" type="text" name="facebook"  value="<?php echo $array['facebook'];?>" ><br>


		<input class="form-control" type="text" name="twitter"  value="<?php echo $array['twitter'];?>" ><br>

		<input class="form-control" type="text" name="instgram"  value="<?php echo $array['instgram'];?>" ><br>

		<img style="width: 100px;height: 100px;" src="images/<?php echo $array['img1']; ?>">
		<input type="file" name="img1"><br>
		<br>

		<img style="width: 100px;height: 100px;" src="images/<?php echo $array['img2']; ?>">
		<input type="file" name="img2"><br>
		
		<input type="submit" class="btn btn-primary" name="submit" value="Edit">
				</form>