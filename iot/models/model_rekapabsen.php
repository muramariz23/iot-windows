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
	var $nokartu;
	var $tanggal;
	var $jam_masuk;
	var $jam_pulang;
	var $status;



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
			
			mysqli_query($this->con,"insert into absensi values(
				'".$id_absen."'
				'".$nokartu."',
				'".$tanggal."',
				'".$jam_masuk."',
				'".$jam_pulang."'
				)");
		}



		//method mengambil semua data dari tabel
		function GET()
		{
			//perintah Get data
			$this->query=mysqli_query($this->con,"select absensi.*, siswa.nama from absensi join siswa on absensi.nokartu = siswa.nokartu");
			while ($this->data=mysqli_fetch_array($this->query)) {
				$this->result[]=$this->data;
			}
			return $this->result;
		}







		//method untuk mengambil data seleksi dari tabel
		function GET_Where($id_absen)
		{
			//perintah get where data
			$this->query=mysqli_query($this->con,"select absensi.*, siswa.nama from absensi join siswa on absensi.nokartu = siswa.nokartu where absensi.tanggal = $tanggal");
			while($this->data=mysqli_fetch_array($this->query))
			{
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method memasukan data kedalam tabel
		function PUT ($id_absen,$nokartu,$tanggal,$jam_masuk,$jam_pulang)
		{
			//perintah PUT data
			mysqli_query($this->con,"update absen set
				id_absen='".$id_absen."',
				nokartu='".$nokartu."',
				tanggal='".$tanggal."',
				jam_masuk='".$jam_masuk."',
				jam_pulang='".$jam_pulang."'
				where id_absen='".$id_absen."'
				");
		}



		//method menghapus data dari table
		function DELETE ($id_absen)
		{
			//perintah DELETE data
			mysqli_query($this->con,"delete from absensi where id_absen='$id_absen'");
		}

}

 ?> 