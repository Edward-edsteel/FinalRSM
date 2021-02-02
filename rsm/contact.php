<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact | Edward Cristian M.F</title>
        <link rel="stylesheet" href="style.css">

        <!--Menyisipkan Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">
            function validate(){
                var nama = document.getElementById("namalengkap");
                var number = document.getElementById("num");
                var numCorrect = /^[0-9]+$/;
                var correct = /^[A-Za-z]+$/;
                if (nama.value.trim()=="" || number.value.trim()=="") {
                    alert("Ups, tidak boleh kosong!");
                    return false;
                }
                else if(nama.value.match(correct) && number.value.match(numCorrect)){
                    alert("Sudah betul");
                    return true;
                }
                else if(!number.value.match(numCorrect)){
                    alert("Nomor Whatsapp hanya boleh diisi angka");
                    return false
                }
                else if(!nama.value.match(correct)) {
                    alert("Nama hanya boleh huruf")
                    return false;
                }
            }
        </script>
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
        </nav><br>
        <h3 style="text-align: center; padding: 40px;">Hubungi Saya</h3>
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <p style="text-align: center; padding: 10px;">Form permintaan bekerjasama</p>
                    <form class="form-kerjasama" id="contact-form" method="post" action="request.php" onsubmit="return validate()">

                        <label id="tulis">Nama</label>
                        <input class="input-field" type="text" name="namalengkap" id="namalengkap" required>

                        <label id="tulis">Tanggal Lahir</label>
                        <input class="input-field" type="date" name="kelahiran" required>

                        <label id="tulis">Jenis Kelamin</label>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="radio1">
                                <input type="radio" class="form-check-input" name="kelamin" value="Laki-laki" required>Laki-laki
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="radio">
                                <input type="radio" class="form-check-input" name="kelamin" value="Perempuan" required>Perempuan
                            </label>
                        </div>

                        <label id="tulis">Nomor Whatsapp</label>
                        <input class="input-field" type="text" name="nomor" id="num" maxlength="13" required>

                        <label id="tulis">Email</label>
                        <input class="input-field" type="email" name="email" required>

                        <div class="form-group">
                            <label id="tulis">Tujuan Kerjasama:</label>
                            <select class="form-control" name="tujuan" required>
                                <option>Kepentingan Pribadi</option>
                                <option>Tugas Sekolah/Kuliah</option>
                                <option>Kepentingan Organisasi/Perusahaan/Instansi</option>
                                <option>Bisnis</option>
                            </select>
                        </div>

                        <label>Url Portfolio/Perusahaan/Instansi</label>
                        <input type="Url" name="linkurl" required>

                        <label id="tulis">Isi Pesan</label>
                        <textarea class="input-field" name="isi" placeholder="Opsional"></textarea>

                        <input id="submit-btn" type="submit" value="Kirim">
                    </form>
                </div>
            </div>
        </div>
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