<?php 

include '../config/csrf.php';
include '../controllers/controller_siswa.php';
include '../controllers/controller_rekapabsen.php';
//membuat objek dari class



//membuat variabel dari GET URL
 $function = $_GET['function'];

//decision variabel create_siswa
if ($function == "create_siswa") {
	
	$db_siswa = new controller_siswa();

	//validasi token csrf
	// if (validation() == true) {
		$db_siswa->POSTData(
			$_POST['nisn'],
			$_POST['nama'],
			$_POST['id_kelas'],
			$_POST['nokartu']
		);
	// }

	header("location:../views/view_siswa.php");
	}

	//decision variabel PUT_siswa
	elseif ($function == "put_siswa") {

		$db_siswa = new controller_siswa();
		//validasi token csrf
		// if (validation() == true) {
			$db_siswa->PUTData(
			$_POST['nisn'],
			$_POST['nama'],
			$_POST['id_kelas'],
			$_POST['nokartu']
		);

		// }
		header("location:../views/view_siswa.php");
	}

	//decision variabel delete_siswa
	elseif ($function == "delete_siswa") {
		$db_siswa = new controller_siswa();

		$db_siswa->DELETEData($_GET['nisn']);
		header("location:../views/view_siswa.php");
	}else{echo "error";}



	//kelas
	if ($function == "create_kelas") {
	$db_kelas = new controller_kelas();
	//validasi token csrf
	// if (validation() == true) {
		$db_kelas->POSTData(
			$_POST['id_kelas'],
			$_POST['nama_kelas'],
			$_POST['jurusan']
		);
	// }

	header("location:../views/view_kelas.php");
	}

	//decision variabel PUT_kelas
	elseif ($function == "put_kelas") {
		
		$db_kelas = new controller_kelas();
		//validasi token csrf
		// if (validation() == true) {
			$db_kelas->PUTData(
			$_POST['id_kelas'],
			$_POST['nama_kelas'],
			$_POST['jurusan'] 
		);

		// }
		header("location:../views/view_kelas.php");
	}

	//decision variabel delete_kelas
	elseif ($function == "delete_kelas") {
		$db_kelas = new controller_kelas();
		
		$db_kelas->DELETEData($_GET['id_kelas']);
		header("location:../views/view_kelas.php");
	}else{echo "error";}

	

	//spp
	if ($function == "create_rekapabsen") {
	$db_spp = new controller_rekapabsen();
	//validasi token csrf
	// if (validation() == true) {
		$db_spp->POSTData(
			$_POST['id_absen'],
			$_POST['nisn'],
			$_POST['id_kelas'],
			$_POST['waktu_masuk'],
			$_POST['status']
		);
	// }

	header("location:../views/view_rekapabsen.php");
	}

	//decision variabel PUT_spp
	elseif ($function == "put_rekapabsen") {
		
		$db_spp = new controller_rekapabsen();
		//validasi token csrf
		// if (validation() == true) {
			$db_spp->PUTData(
			$_POST['id_absen'],
			$_POST['nisn'],
			$_POST['id_kelas'],
			$_POST['waktu_masuk'],
			$_POST['status']
		);

		// }
		header("location:../views/view_rekapabsen.php");
	}

	//decision variabel delete_spp
	elseif ($function == "delete_rekapabsen") {
		$db_spp = new controller_rekapabsen();
		
		$db_spp->DELETEData($_GET['id_absen']);
		header("location:../views/view_rekapabsen.php");
	}else{echo "error";}
	
 ?>