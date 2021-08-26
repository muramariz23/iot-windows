		<?php 

		include '../config/database.php';
		
		$db = new database();
		$con = $db->connect();
 		 
 		 $query=mysqli_query($con,"select * from tmprfid");
 		 $Get=mysqli_fetch_array($query);

 		 $nokartu=$Get['nokartu'];

		?>
		<tr>
			<td><input type="text" name="nokartu" id="nokartu" placeholder="no kartu rfid" value="<?php echo $nokartu ?>"></td>
		</tr>

		