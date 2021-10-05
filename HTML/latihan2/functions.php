

$config = array(
	"USERNAME"	=> "root",
	"HOST"		=> "localhost",	
	"PASSWORD"	=> "root",
	"DB"		=> "043040023"
);



function koneksi($config) {
	$conn = mysqli_connect($config["HOST"], $config["USERNAME"], $config["PASSWORD"]) or die("Koneksi ke Database Gagal");

	mysqli_select_db($conn, $config["DB"]) or die("Database Salah!");

	return $conn;
}
