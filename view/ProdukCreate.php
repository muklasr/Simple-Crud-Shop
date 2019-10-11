<h2>Tambah Produk</h2>
<form action="process/create.php">
    <select name="id" class="form-control">
        <?php
            include 'process/koneksi.php';
            $sql = mysqli_query($conn,"SELECT * FROM kategori");
            while($data = mysqli_fetch_assoc($sql)){
        ?>
        <option value="<?= $data['id_kategori'] ?>"><?= $data['nama'] ?>
        <?php
            }
        ?>
    </select><br>
    <input type="text" name="nama" class="form-control" placeholder="Nama produk" required><br>
    <input type="number" name="harga" class="form-control" placeholder="Harga" required><br>
    <input type="hidden" name="m" value="produk">
    <input class="btn btn-primary float-right" type="submit" value="Tambah">
</form>