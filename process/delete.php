<?php 
	// koneksi database
	include 'koneksi.php';

	$id = $_GET['id'];

	switch($_GET['m']){
		case "kategori":
			mysqli_query($conn,"delete from kategori where id_kategori='$id'");
			header("Location: ../index.php?m=kategori");	
		break;
		case "produk":
			mysqli_query($conn,"delete from produk where id_produk='$id'");
			header("Location: ../index.php?m=produk");	
		break;
		case "stok":
			mysqli_query($conn,"delete from stok where id_stok='$id'");
			header("Location: ../index.php?m=stok");	
		break;
	}
?>