 <?php 

//class model siswa (CRUD siswa)
class Model_siswa{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $nisn;
	var $nama;
	var $id_kelas;
	var $nokartu;


	//method main variabel
		function __construct()
		{
			//membuat objek dari kelas database
			include '../config/database.php';
			$this->db = new database();
			$this->con = $this->db->connect();
		}



		//method memasukan data ke dalam table
		function POST ($nisn,$nama,$id_kelas,$nokartu)
		{
			
			mysqli_query($this->con,"insert into siswa values(
				'".$nisn."',
				'".$nama."',
				'".$id_kelas."',
				'".$nokartu."'
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



		//method untuk mengambil data seleksi dari tabel
		function GET_Where($nisn)
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
		function PUT ($nisn,$nama,$id_kelas,$nokartu)
		{
			//perintah PUT data
			mysqli_query($this->con,"update siswa set
				nama='".$nama."',
				id_kelas='".$id_kelas."',
				nokartu='".$nokartu."'
				where nisn='".$nisn."'
				");
		}



		//method menghapus data dari table
		function DELETE ($nisn)
		{
			//perintah DELETE data
			mysqli_query($this->con,"delete from siswa where nisn='$nisn'");
		}


		//mengkosongkan tmprfid
		function HAPUS($nokartu)
		{
			mysqli_query($this->con,"delete from tmprfid where nokartu='$nokartu'");
		}



}

 ?> 