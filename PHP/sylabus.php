<?php
// koneksi database
include "koneksi.php";
// menangkap data yang di kirim dari form
if (isset($_POST['send'])!="")
{

    $title = $_POST['title'];
    $deskripsi = $_POST['deskripsi'];




// menginput data ke database

$query = "INSERT INTO silabus (title, deskripsi) VALUES ('$title', '$deskripsi')";
$result = mysqli_query($koneksi, $query);



// mengalihkan halaman kembali ke index.php
//header("location:tampil_data.php");
if ($query)
	{
		?>
			<script type="text/javascript">
					alert('DATA BERHASIL DISIMPAN');
					document.location.href="sylabus.php";
			</script>
		<?php
	}

 }else {
		?>
			<script type="text/javascript">
					alert('DATA GAGAL DISIMPAN');
					document.location.href="sylabus.php";
			</script>
		<?php
}
?>