<?php
    switch($_GET['m']){
        case "produk":
        $view =  "view/ProdukRead.php";
        $m1 = "active";
        $m2 = "";
        $m3 = "";
        break;
        case "pcreate":
        $view =  "view/ProdukCreate.php";
        $m1 = "active";
        $m2 = "";
        $m3 = "";
        break;
        case "pupdate":
        $view =  "view/ProdukUpdate.php";
        $m1 = "active";
        $m2 = "";
        $m3 = "";
        break;
        case "kategori":
        $view = "view/KategoriRead.php";
        $m1 = "";
        $m2 = "active";
        $m3 = "";
        break;
        case "kcreate":
        $view = "view/KategoriCreate.php";
        $m1 = "";
        $m2 = "active";
        $m3 = "";
        break;
        case "kupdate":
        $view = "view/KategoriUpdate.php";
        $m1 = "";
        $m2 = "active";
        $m3 = "";
        break;
        case "stok":
        $view = "view/StokRead.php";
        $m1 = "";
        $m2 = "";
        $m3 = "active";
        break;
        case "screate":
        $view = "view/StokCreate.php";
        $m1 = "";
        $m2 = "";
        $m3 = "active";
        break;
        case "supdate":
        $view = "view/StokUpdate.php";
        $m1 = "";
        $m2 = "";
        $m3 = "active";
        break;
        default:
        $view = "view/Home.php";
        break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary sticky-top">
        <a class="navbar-brand" href="index.php">Shop</a>
    </nav>
    <div class="fluid-container">
        <div class="row">
            <div class="col-2" class="menu">
                <div class="list-group">
                    <a href="?m=produk" class="list-group-item <?= $m1 ?>">Produk</a>
                    <a href="?m=kategori" class="list-group-item <?= $m2 ?>">Kategori</a>
                    <a href="?m=stok" class="list-group-item <?= $m3 ?>">Stok</a>
                </div>
            </div>
            <div class="col-10">
                <div class="content">
                    <?php
                        include $view;
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>