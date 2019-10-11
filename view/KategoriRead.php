<h2>Kategori <a href="?m=kcreate" class="btn btn-primary float-right">Tambah</a></h2>
<br>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Kategori</th>
        <th scope="col" colspan="2">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
        include 'process/koneksi.php';
        $sql = mysqli_query($conn,"SELECT * FROM kategori");
        if(!$sql){
            echo "<tr><td colspan='3' class='text-center'>-Tidak ada data-</td></tr>";
        }
        while($row = mysqli_fetch_assoc($sql)){
        echo "
        <tr>
            <td>{$row['id_kategori']}</td>
            <td>{$row['nama']}</td>
            <td width='1'><a href='?m=kupdate&&id={$row['id_kategori']}' class='btn btn-success'>Edit</a></td>
            <td width='1'><a href='process/delete.php?m=kategori&&id={$row['id_kategori']}' class='btn btn-danger'>Hapus</a></td>
        </tr>
        ";
        }
    ?>
    </tbody>
</table>