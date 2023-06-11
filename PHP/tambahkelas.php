<?php
// koneksi database
include "koneksi.php";
// menangkap data yang di kirim dari form
if (isset($_POST['send'])!="")
{

    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $id_kategori = $_POST['id_kategori'];
    $waktu = $_POST['waktu'];
    $gambar = $_FILES['gambar']['name'];
    $id_pengajar = $_POST['id_pengajar'];



// menginput data ke database

$query = "INSERT INTO kelas (nama, deskripsi, harga, id_kategori, waktu, gambar, id_pengajar) VALUES ('$nama', '$deskripsi', '$harga', '$id_kategori', '$waktu', '$gambar', '$id_pengajar')";
$result = mysqli_query($koneksi, $query);


// mengalihkan halaman kembali ke index.php
//header("location:tampil_data.php");
if ($query)
	{
		?>
			<script type="text/javascript">
					alert('DATA BERHASIL DISIMPAN');
					document.location.href="class.php";
			</script>
		<?php
	}

 }else {
		?>
			<script type="text/javascript">
					alert('DATA GAGAL DISIMPAN');
					document.location.href="class.php";
			</script>
		<?php
}
?>