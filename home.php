<?php 
require 'config/db.php';
require 'functions.php';

$rowCategory = query("SELECT * FROM kategori LIMIT 3");
$rowMenu = query("SELECT * FROM menu LIMIT 4 ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <section id="title">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="">Hungry hour</a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Kontak</a>
                    </li>
                </ul>
            </nav>

            <div class="row">
                <div class="col-lg-6">
                    <div class="title-content">
                        <h2 class="big-heading">Come hungry, leave happy.</h2>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
                        <button type="button" class="btn btn-dark title-button ">Lihat menu</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="kategori">
        <div class="container-fluid">
            <h2 class="big-heading">Kategori Terlaris</h2>
            <div class="row">
                <?php foreach ($rowCategory as $category): ?>
                <div class="col-lg-4 image-kategori">
                    <div class="card category d-flex justify-content-center align-items-center">
                        <div class="image-frame">
                        <img class="card-image-top" src="img/<?= $category['gambar'] ?>" >
                        </div>
                        <h3><a class="text-white" href=""><?= $category['nama'] ?></a></h3>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <section id="menu">
        <div class="container-fluid">
            <h2 class="big-heading">Menu Terlaris</h2>
            <div class="row">
                <?php foreach($rowMenu as $menu): ?>
                <div class="col-lg-3 col-md-2 menu">
                    <div class="card">
                        <img class="card-image-top" src="img/<?= $menu['foto']?>">
                        <div class="card-body">
                            <h4 class="card-title" ><?= $menu['nama'] ?></h4>
                            <p class="card-text"><?= $menu['detail'] ?></p>
                            <button class="btn btn-primary">Lihat menu</button>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container-fluid">
            <h3>Kontak</h3>
            <p>© Copyright 2022 hungry hour</p>
        </div>
    </section>
</body>
</html>