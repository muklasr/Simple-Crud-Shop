<h2>Stok <a href="?m=screate" class="btn btn-primary float-right">Tambah</a></h2>
<br>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">ID Produk</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Timestamp</th>
        <th scope="col" colspan="2">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
        include 'process/koneksi.php';
        $sql = mysqli_query($conn,"SELECT * FROM stok INNER JOIN produk WHERE produk.id_produk=stok.id_produk");
        if(!$sql){
            echo "<tr><td colspan='6' class='text-center'>-Tidak ada data-</td></tr>";
        }
        while($row = mysqli_fetch_assoc($sql)){
        echo "
        <tr>
            <td>{$row['id_stok']}</td>
            <td>{$row['id_produk']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['jumlah']}</td>
            <td>{$row['timestamp']}</td>
            <td width='1'><a href='?m=supdate&&id={$row['id_stok']}' class='btn btn-success'>Edit</a></td>
            <td width='1'><a href='process/delete.php?m=stok&&id={$row['id_stok']}' class='btn btn-danger'>Hapus</a></td>
        </tr>
        ";
        }
    ?>
    </tbody>
</table>