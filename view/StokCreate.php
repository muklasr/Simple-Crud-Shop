<h2>Tambah Stok</h2>
<form action="process/create.php">
    <select name="id" class="form-control">
        <?php
            include 'process/koneksi.php';
            $sql = mysqli_query($conn,"SELECT * FROM produk");
            while($data = mysqli_fetch_assoc($sql)){
        ?>
        <option value="<?= $data['id_produk'] ?>"><?= $data['nama'] ?>
        <?php
            }
        ?>
    </select><br>
    <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required><br>
    <input type="hidden" name="m" value="stok">
    <input class="btn btn-primary float-right" type="submit" value="Tambah">
</form>