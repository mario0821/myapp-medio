<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta cdharset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <met name="viewport" content="width=device-width, initial scale=1.0">
    <title>MyApp</title>
    <link rel="stylesheet" href="assets/css/boostrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css"></head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-ligth bg-ligth">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">MyApp</a>
                    <button class="navbar-toggler" type="button" data-bstoggle ="collapse"
                    data-bs-target="#navbar-SupportedContent" ariacontrols ="navbarSupportedContent"
                    aria-expanded="false" arialabel= "Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" ariacurrent ="page" href="#">Home</a>
                            </li>
                        </ul>
                        <?php
                           if (!isset($SESSION_['username'])) {
                        ?>    
                        <a class="nav-link btn  btn-primary btn-sm dflex justify-content-end" style="color:white;" aria-current="page" href="login.php"> Login</a>

                        <?php } else { ?>
                           <div class="dropdown">
                            <button class="btn btn-secondary dropdowntoggle" type="button"
                             id="dropdownMenuButton1" data-bstoggle ="dropdown" aria-expanded="false">
                                 <b><?php echo $_SESSION['nmUser']; ?></b>
                             </button>
                            <ul class="dropdown-menu" arialabelledby="dropdowmMenuButton1">
                                <li><a class="dropdown-item" href="admin">Dasboard Admin</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                <?php } ?>
             </div>
            </div>
          </nav>

          <style>
            .caraousel-item img {
                opacity: 0.5;
                min-height: 550px;
                max-height: 550px;
            }
            </style>
            <div class="row mt-3 justify-content-center">
                <div id="caraouselExampleDark" class="caraousel caraousel-dark slide" data-bs-ride="caraousel">
                    <div class="caraousel-indicators">
                        <button type="button" data-bstarget ="#caraouselExampleDark" data-bs-slide-to="0"
                         class="active" ariacurrent ="true" aria-label="Slide1"> </button>
                         <button type="button" data-bstarget ="#caraouselExampleDark" data-bs-slide-to="1"
                         aria-label="Slide 2"></button>
                         <button type="button" data-bstarget ="#caraouselExampleDark" data-bs-slide-to="2"
                         aria-label="Slide 3"></button>
                    </div>
                    <div class="caraousel-inner">
                        <?php
                        $panggil = $koneksi->query("SELECT * FROM hero limit 3");
                        while ($row = $panggil->fetch_assoc()) {
                            ?>
                            <div class="caraousel-item
                            <?php if ($row[ 'status'] == 'aktif')
                            {
                                echo'active';
                            }
                            ?>" data-bsinterval ="4000">
                            <img src="assets/img/<?= $row['gambar']; ?>" class ="d-block w-100" alt="...">
                            <div class="caraousel-caption d-none d-mdblock">
                                <h2><?= $row['judul']; ?></h2>
                                <p><?= $row['subjudul']; ?></p>
                        </div>
                        </div>
                        <?php } ?>
                        </div>
                        <button class="caraousel-control-prev" type="button" data-bs-target ="#caraouselExampleDark"
                        data-bs-slide="prev">
                             <span class="caraousel-control-prev-icon" ariahhidden ="true"></span>
                             <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/boostrap.min.js"></script>
    </body>
    </html>
                 