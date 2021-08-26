<?php 

//class CRUD siswa
class controller_rekapabsen{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $Mabsen;

	var $id_absen;
	var $nokartu;
	var $tanggal;
	var $jam_masuk;
	var $jam_pulang;
	

	//method main variabel
		function __construct()
		{
			// membuat objek dari class module pegawai
			include '../models/model_rekapabsen.php';
			$this->Mabsen = new model_rekapabsen();
		}



		//method memasukan data ke dalam tabel
		function POSTData ($id_absen,$nokartu,$tanggal,$jam_masuk,$jam_keluar)
		{
			//perintah POST data
			$this->Mabsen->POST($id_absen,$nokartu,$tanggal,$jam_masuk,$jam_keluar);
		}



		//method untuk mengambil semua data dari table
		function GetData_All()
		{
			//perintah GET data
			return $this->Mabsen->GET();
		}
				

		//method untuk mengambil data seleksi dari tabel
		function GetData_Where($id_absen)
		{
			//perintah get data where
			return $this->Mabsen->GET_Where($id_absen);
		}



		//method memasukan data ke dalam tabel
		function PUTData($id_absen,$nokartu,$tanggal,$jam_masuk,$jam_keluar)
		{
			//perintah PUT data
			$this->Mabsen->PUT($id_absen,$nokartu,$tanggal,$jam_masuk,$jam_keluar);
		}



		//method menghapus data dari table
		function DELETEData($id_absen)
		{
			//perintah delete data
			$this->Mabsen->DELETE($id_absen);
		}

		
}

 ?>