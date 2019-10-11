<h2>Produk <a href="?m=pcreate" class="btn btn-primary float-right">Tambah</a></h2>
<br>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">ID Kategori</th>
        <th scope="col">Kategori</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col" colspan="2">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
        include 'process/koneksi.php';
        $sql = mysqli_query($conn,"SELECT * FROM produk");
        if(!$sql){
            echo "<tr><td colspan='6' class='text-center'>-Tidak ada data-</td></tr>";
        }
        while($row = mysqli_fetch_assoc($sql)){
            $query = mysqli_query($conn,"SELECT nama FROM kategori WHERE id_kategori='".$row['id_kategori']."'");
            $data = mysqli_fetch_assoc($query);
        echo "
        <tr>
            <td>{$row['id_produk']}</td>
            <td>{$row['id_kategori']}</td>
            <td>{$data['nama']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['harga']}</td>
            <td width='1'><a href='?m=pupdate&&id={$row['id_produk']}' class='btn btn-success'>Edit</a></td>
            <td width='1'><a href='process/delete.php?m=produk&&id={$row['id_produk']}' class='btn btn-danger'>Hapus</a></td>
        </tr>
        ";
        }
    ?>
    </tbody>
</table>