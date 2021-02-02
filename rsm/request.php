<?php
  include "koneksi.php";
  $regex ="/^[a-zA-Z\s]+$/";
  $nama = $_REQUEST['namalengkap'];
  $lahir = $_REQUEST['kelahiran'];
  $jk = $_REQUEST['kelamin'];
  $numphone = $_REQUEST['nomor'];
  $tujuan = $_REQUEST['tujuan'];
  $email = $_REQUEST['email'];
  $url  = $_REQUEST['linkurl'];
  $pesan  = $_REQUEST['isi'];
  $result = "";

    $firstChar = mb_substr($numphone, 0, 1, "UTF-8");
    
    if($firstChar != "0"){
        try {
            if($numphone != "0");
            echo 'Input angka valid';
        }
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
        return false;
    }
    
    else{
        $mysqli  = "INSERT INTO req_tabel (nama, tglLahir, kelamin, nomor, email, tujuan, url, isi) VALUES ('$nama', '$lahir','$jk','$numphone','$email','$tujuan','$url','$pesan')";
        $result  = mysqli_query($conn, $mysqli);
    }

  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }

  mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Yang Terkirim | Edward Cristian M.F</title>
        <link rel="stylesheet" href="style.css">

        <!--Menyisipkan Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>

    <body>
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
        </nav>
        <br>
        <footer class="bg-dark text-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <h5>About Me</h5>
                        <p> Saya Edward Cristian M.F, seorang mahasiswa tingkat tiga Universitas Atma Jaya Makassar
                        di Jurusan Informatika Fakultas Teknologi Informasi.
                        <a href="about.html" class="text-light">More</a></p>
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