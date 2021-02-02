<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About | Edward Cristian M.F</title>
        <link rel="stylesheet" href="style.css">

        <!--Menyisipkan Bootstrap-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function disable(){
                if (event.button == 2){
                    alert("Gaboleh klik kanan ea.\nGaboleh ngintip kode aing")
                }
            }
        </script>
    </head>

    <body onmousedown="disable()">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="home.html">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="artikel.html">Artikel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Galery
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="photo-gallery.html">Galery Foto</a>
                            <a class="dropdown-item" href="video-gallery.html">Galery Video</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Me</a>
                    </li>    
                </ul>
            </div>  
        </nav><br>
            <div>
                <center>
                    <h1><br>Hi, I'm Edward Cristian M.F</h1>
                </center>
                <div class="row">
                    <div class="col-6">
                        <div class="gambarAbout1">
                            <img src="img/meIYA.jpg" class="rounded-circle">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="kartu1">
                            <div class="card">
                                <h4>Saat ini</h4>
                                <p class="text-justify">Saya Edward Cristian M.F, mahasiswa Universitas Atmajaya Makassar dari Fakultas Teknologi Informasi Jurusan Informatika dan saat ini sedang menjalani semester ke 5</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="kartu2">
                            <div class="card">
                                <h5>Sejarah Pendidikan</h5>
                                <li>SD Negeri Bili-Bili</li>
                                <li>SMP Negeri 2 Bontomarannu</li>
                                <li>SMA Negeri 8 Gowa</li>
                            </div>
                            <div class="card">
                                <h5>Tertarik Dalam Bidang</h5>
                                <li>Artificial Intelligence</li>
                                <li>Augmented Reality</li>
                                <li>Full-Stack Developer</li>
                                <li>Sinematografi</li>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="kartu3">
                            <div class="card">
                                <h5>Sejarah Berorganisasi</h5>
                                <li>Anggota Bamboo English Community</li>
                                <li>Ketua Bidang Teater dan Bahasa Inggris PEBAKREP</li>
                                <li>Ketua I ASGET Cabang Bontomarannu</li>
                                <li>Penasehat ASGET Cabang</li>
                                <li>Pengurus OSIS SMA Negeri 8 Gowa</li>
                                <li>Anggota EFN.ID Sulawesi Selatan</li>
                                <li>Anggota EFN.ID</li>
                                <li>Anggota API Indonesia</li>
                                <li>Dewan Pembina DevTech ORG SMA Negeri 8 Gowa</li>
                                <li>Anggota HMTI Universitas Atmajaya Makassar</li>
                                <li>Anggota BEM Universitas Atmajaya Makassar</li>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="gambarAbout2">
                            <img src="img/meASGET.jpg" class="rounded-circle">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="some-project">
                    <div class="row">
                        <div class="col-12">
                            <h3 style="text-align: center;">Some of my project</h3>
                        </div>
                        <div class="col-4">
                            <img class="project1" src="img/project1.png">
                        </div>
                        <div class="col-3.5">
                            <img class="project2" src="img/project2.png">
                        </div>
                        <div class="col-3">
                            <img class="project3" src="img/project3.png">
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        <br>
        <footer class="bg-dark text-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <h5>About Me</h5>
                        <p> Saya Edward Cristian M.F, seorang mahasiswa tingkat tiga Universitas Atma Jaya Makassar
                        di Jurusan Informatika Fakultas Teknologi Informasi.
                        <a href="about.php" class="text-light">More</a></p>
                    </div>
                    <div class="col-4">
                        <h5>Contact Me</h5>
                        <p>Ingin tanya-tanya? Hubungi saya melalui email <b>edward.cristian.mf@gmail.com</b> atau menggunakan form <b><u><a href="contact.php" class="text-light">berikut</a></b></u></p>
                    </div>
                    <div class="col-2">
                        <h5>Find Me</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="https://web.facebook.com/kyoku.suruki.7/" target="_blank">
                                    <img src="img/facebook.png">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/edsteel.c/" target="_blank">
                                    <img src="img/instagram.png">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/channel/UCfqchnX6CKWMWc7L7XTpm1g" target="_blank">
                                    <img src="img/youtube.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center ">
                &copy; Copyright : Edward Cristian M.F
            </div>
        </footer>
        <!-- Menyisipkan JQuery dan Javascript Bootstrap-->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>