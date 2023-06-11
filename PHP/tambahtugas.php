<?php
// koneksi database
include "koneksi.php";
// menangkap data yang di kirim dari form
if (isset($_POST['send'])!="")
{

    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $deadline = $_POST['deadline'];




// menginput data ke database


$query = "INSERT INTO tugas (judul, deskripsi, deadline) VALUES ('$judul', '$deskripsi', '$deadline')";
$result = mysqli_query($koneksi, $query);


// mengalihkan halaman kembali ke index.php
//header("location:tampil_data.php");
if ($query)
	{
		?>
			<script type="text/javascript">
					alert('DATA BERHASIL DISIMPAN');
					document.location.href="tugas.php";
			</script>
		<?php
	}

 }else {
		?>
			<script type="text/javascript">
					alert('DATA GAGAL DISIMPAN');
					document.location.href="tugas.php";
			</script>
		<?php
}
?>