		<?php 

		include '../config/database.php';
		
		$db = new database();
		$con = $db->connect();
 		 
 		 $querykartu=mysqli_query($con,"select * from tmprfid");
 		 $Getkartu=mysqli_fetch_array($querykartu);
 		 if (!empty($Getkartu)) {
 		 $nokartu=$Getkartu['nokartu'];
 			}
		?>
		<?php if (empty($nokartu)){ ?>
			<tr>
			<td><input type="text" name="nokartu" id="nokartu" placeholder="no kartu rfid"></td>
		</tr>
		<?php }else{ ?>
		<tr>
			<td><input type="text" name="nokartu" id="nokartu" placeholder="no kartu rfid" value="<?php echo $nokartu ?>"></td>
		</tr>

		<?php }
		
		 ?>