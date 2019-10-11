<?php 
	// koneksi database
	include 'koneksi.php';

	switch($_GET['m']){
		case "kategori":
			$nama = $_GET['nama'];
			mysqli_query($conn,"INSERT INTO kategori(nama) VALUES('$nama')");
			header("Location: ../index.php?m=kategori");	
		break;
		case "produk":
			$id = $_GET['id'];
			$nama = $_GET['nama'];
			$harga = $_GET['harga'];
			mysqli_query($conn,"INSERT INTO produk(id_kategori,nama,harga) VALUES('$id','$nama','$harga')");
			header("Location: ../index.php?m=produk");	
		break;
		case "stok":
			$id = $_GET['id'];
			$jumlah = $_GET['jumlah'];
			date_default_timezone_set("Asia/Bangkok");
			$timestamp = date('Y-m-d H:i:s');
			mysqli_query($conn,"INSERT INTO stok(id_produk,jumlah,timestamp) VALUES('$id','$jumlah','$timestamp')");
			header("Location: ../index.php?m=stok");	
		break;
	}
?>