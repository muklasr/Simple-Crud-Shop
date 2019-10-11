<?php 
	// koneksi database
	include 'koneksi.php';
	$id = $_GET['id'];

	switch($_GET['m']){
		case "kategori":
			$nama = $_GET['nama'];
			mysqli_query($conn,"UPDATE kategori SET nama='$nama' WHERE id_kategori='$id'");
			header("Location: ../index.php?m=kategori");	
		break;
		case "produk":
			$id_kategori = $_GET['id_kategori'];
			$nama = $_GET['nama'];
			$harga = $_GET['harga'];
			mysqli_query($conn,"UPDATE produk SET id_kategori='$id_kategori', nama='$nama', harga='$harga' WHERE id_produk='$id'");
			header("Location: ../index.php?m=produk");	
		break;
		case "stok":
			$id_produk = $_GET['id_produk'];
			$jumlah = $_GET['jumlah'];
			date_default_timezone_set("Asia/Bangkok");
			$timestamp = date('Y-m-d H:i:s');
			mysqli_query($conn,"UPDATE stok SET id_produk='$id_produk', jumlah='$jumlah', timestamp='$timestamp' WHERE id_stok='$id'");
			header("Location: ../index.php?m=stok");	
		break;
	}
?>