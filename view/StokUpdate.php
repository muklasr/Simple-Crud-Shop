<h2>Edit Stok</h2>
<form action="process/update.php">

    <?php
        include 'process/koneksi.php';
        $id = $_GET['id'];
        $sql = mysqli_query($conn,"SELECT * FROM stok WHERE id_stok = $id");
        while($data = mysqli_fetch_assoc($sql)){
    ?>

    <select name="id_produk" class="form-control">
        <?php
            include 'process/koneksi.php';
            $sql = mysqli_query($conn,"SELECT * FROM produk");
            while($row = mysqli_fetch_assoc($sql)){
            $selected = ($data['id_produk']==$row['id_produk']) ? "selected" : "";
        ?>
        <option value="<?= $row['id_produk'] ?>" <?= $selected ?>><?= $row['nama'] ?>
        <?php
            }
        ?>
    </select><br>
    <input type="number" name="jumlah" value="<?= $data['jumlah'] ?>" class="form-control" placeholder="Jumlah" required><br>
    <input type="hidden" name="id" value="<?= $data['id_stok'] ?>">
    <input type="hidden" name="m" value="stok">
    <input class="btn btn-primary float-right" type="submit" value="Simpan">
    <?php
        }
    ?>
</form>