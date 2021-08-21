 <?php 

//class model siswa (CRUD siswa)
class Model_rekapabsen{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $id_absen;
	var $nisn;
	var $id_kelas;
	var $waktu_masuk;
	var $status



	//method main variabel
		function __construct()
		{
			//membuat objek dari kelas database
			include '../config/database.php';
			$this->db = new database();
			$this->con = $this->db->connect();
		}



		//method memasukan data ke dalam table
		function POST ($id_absen,$nisn,$id_kelas,$waktu_masuk,$status)
		{
			
			mysqli_query($this->con,"insert into rekapabsen values(
				'".$id_absen."'
				'".$nisn."',
				'".$id_kelas."',
				'".$waktu_masuk."',
				'".$status."'
				)");
		}



		//method mengambil semua data dari tabel
		function GET()
		{
			//perintah Get data
			$this->query=mysqli_query($this->con,"select siswa.*, kelas.nama_kelas, kelas.jurusan from siswa join kelas on siswa.id_kelas = kelas.id_kelas");
			while ($this->data=mysqli_fetch_array($this->query)) {
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		function GETKelas()
		{
			//perintah Get data
			$this->query=mysqli_query($this->con,"select * from kelas");
			while ($this->data=mysqli_fetch_array($this->query)) {
				$this->result[]=$this->data;
			}
			return $this->result;
		}


		function GETSiswa()
		{
			//perintah Get data
			$this->query=mysqli_query($this->con,"select * from siswa");
			while ($this->data=mysqli_fetch_array($this->query)) {
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method untuk mengambil data seleksi dari tabel
		function GET_Where($id_absen)
		{
			//perintah get where data
			$this->query=mysqli_query($this->con,"select siswa.*, kelas.nama_kelas, kelas.jurusan from siswa join kelas on siswa.id_kelas = kelas.id_kelas where nisn='$nisn'");
			while($this->data=mysqli_fetch_array($this->query))
			{
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method memasukan data kedalam tabel
		function PUT ($id_absen,$nisn,$id_kelas,$waktu_masuk,$status)
		{
			//perintah PUT data
			mysqli_query($this->con,"update absen set
				nisn='".$nisn."',
				id_kelas='".$id_kelas."',
				waktu_masuk='".$waktu_masuk."',
				status='".$status."'
				where id_absen='".$id_absen."'
				");
		}



		//method menghapus data dari table
		function DELETE ($id_absen)
		{
			//perintah DELETE data
			mysqli_query($this->con,"delete from absen where id_absen='$id_absen'");
		}

}

 ?> 