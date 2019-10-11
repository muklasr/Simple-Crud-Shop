<h2>Edit Kategori</h2>
<form action="process/update.php">

    <?php
        include 'process/koneksi.php';
        $id_kategori = $_GET['id'];
        $sql = mysqli_query($conn,"SELECT * FROM kategori WHERE id_kategori = $id_kategori");
        while($data = mysqli_fetch_assoc($sql)){
    ?>

    <input type="hidden" name="id" value="<?= $data['id_kategori'] ?>">
    <input type="hidden" name="m" value="kategori">
    <input type="text" name="nama" class="form-control" placeholder="Nama kategori" value="<?= $data['nama'] ?>" required><br>
    <input class="btn btn-primary float-right" type="submit" value="Simpan">

    <?php    
        }
    ?>
</form>
