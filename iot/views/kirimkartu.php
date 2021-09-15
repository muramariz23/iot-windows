<?php
	include "../config/database.php";

	$db = new database();
	$con = $db->connect();

	//baca nomor kartu dari NodeMCU
	$nokartu = $_GET['nokartu'];
	//kosongkan tabel tmprfid
	mysqli_query($con, "delete from tmprfid");

	//simpan nomor kartu yang baru ke tabel tmprfid
	$simpan = mysqli_query($con, "INSERT INTO `tmprfid` (`nokartu`) VALUES ('$nokartu');");
	if($simpan)
		echo "Berhasil";
	else
		echo "Gagal";
?>