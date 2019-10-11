<h2>Edit Produk</h2>
<form action="process/update.php">

    <?php
        include 'process/koneksi.php';
        $id = $_GET['id'];
        $sql = mysqli_query($conn,"SELECT * FROM produk WHERE id_produk = $id");
        while($data = mysqli_fetch_assoc($sql)){
    ?>

    <select name="id_kategori" class="form-control">
        <?php
            include 'process/koneksi.php';
            $sql = mysqli_query($conn,"SELECT * FROM kategori");
            while($row = mysqli_fetch_assoc($sql)){
            $selected = ($data['id_kategori']==$row['id_kategori']) ? "selected" : "";
        ?>
        <option value="<?= $row['id_kategori'] ?>" <?= $selected ?>><?= $row['nama'] ?>
        <?php
            }
        ?>
    </select><br>
    <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" placeholder="Nama produk" required><br>
    <input type="number" name="harga" value="<?= $data['harga'] ?>" class="form-control" placeholder="Harga" required><br>
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="hidden" name="m" value="produk">
    <input class="btn btn-primary float-right" type="submit" value="Simpan">
    <?php
        }
    ?>
</form>