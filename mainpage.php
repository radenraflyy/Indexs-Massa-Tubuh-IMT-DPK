<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR IMT</title>
    <link rel="stylesheet" href="mainpage.css">
    <!-- Link Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
      <!-- Navigation Start -->
<div class="container">
    <div class="wrapper">
        <section class="section-nav">
            <ul class="navigation">
                <li><a href="imt.php">IMT</a></li>
            </ul>
            
            <nav class="navbar-nav">
                <ul class="logo">
                    <li><a href="index.php">KALKULATOR IMT</a></li>
                    <h4 style="font-size: 12px;">Ketahui Indexs Massa Tubuh dan Berat Badan Ideal.</h4>
                </ul>
            </nav>
        </section>
        <section class="section-about">
            <ul class="about">
                <li><a href="pengenalanimt.php">Pengenalan</a></li>
            </ul>
        </section>
    </div>
</div>
<!-- Navigation End -->


<!-- Image Start -->
<div class="image">
    <img src="asessts/image//mybg-removebg-preview.png" alt="Image Animasi KALKULATOR">
</div>
<!-- Image End -->


<!-- Kalkulator IMT Start -->
<div class="judul">
    <h1>KALKULATOR IMT</h1>
</div>
<div class="IMT d-flex justify-content-center" style="margin-top: 19rem;">
    <div class="card shadow" style="width: 90%; height: 80%;">
        <div class="card-body">
            <form action="" method="get">
                <div class="form-group">
                    <label for="">Tinggi Badan (cm)*</label>
                    <input type="text" class="form-control" name="tinggi" required>
                </div>
                <div class="form-group"><br>
                    <label for="">Berat Badan (kg)*</label>
                    <input type="text" class="form-control" name="berat" required>
                </div><br>
                <button type="submit" class="btn btn-primary btn-sm" name="hitung">Hitung IMT</button>
            </form>
        </div>
        <?php
        if(isset($_GET['hitung'])){
            $tinggi = $_GET['tinggi'];
            $berat = $_GET['berat'];
            $tbhasil = $_GET['tinggi']/100;
            $hasil = $berat / ($tbhasil * $tbhasil);

            if($hasil <= 16.9){
                echo'
                <div class="card-footer">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Tinggi Badan : <br>  <b>'.$tinggi.' Tinggi (CM)</b><br><br>
                    Berat Badan  : <br>  <b>'.$berat.' Berat (Kg)</b><br><br>
                    IMT Kamu     : <br>  <b>'.number_format($hasil,1).'</b><br><br>
                    Keterangan   : <br>  <b>Berat Rendah</b><br>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                ';
            }elseif($hasil <= 25){
                echo'
                <div class="card-footer">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Tinggi Badan : <br> <b>'.$tinggi.' Tinggi (CM)</b><br><br>
                    Berat Badan  : <br> <b>'.$berat.' Berat (Kg)</b><br><br>
                    IMT Kamu     : <br> <b>'.number_format($hasil,1).'</b><br><br>
                    Keterangan   : <br> <b>Berat Ideal</b><br>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                ';
            }elseif($hasil <= 26.9){
                echo'
                <div class="card-footer">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Tinggi Badan : <br> <b>'.$tinggi.' Tinggi (CM)</b><br><br>
                    Berat Badan  : <br> <b>'.$berat.' Berat (Kg)</b><br><br>
                    IMT Kamu     : <br> <b>'.number_format($hasil,1).'</b><br><br>
                    Keterangan   : <br> <b>Berat Berlebih</b><br>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                ';
            }elseif($hasil <= 366.9){
                echo'
                <div class="card-footer">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Tinggi Badan : <br> <b>'.$tinggi.' Tinggi (CM)</b><br><br>
                    Berat Badan  : <br> <b>'.$berat.' Berat (Kg)</b><br><br>
                    IMT Kamu     : <br> <b>'.number_format($hasil,1).'</b><br><br>
                    Keterangan   : <br> <b>Obesitas</b><br>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                ';
            }
        }
        ?>
    </div>
</div>
<!-- Kalkulator IMT End -->

<!-- Footer Start -->
<div class="footer1">
    <h3 style="margin-top: 5%; font-size: 37px;">Created By:</h3>
    </div>

    <div class="people">
    <ul>
        <li><a href="#">ANISSYA PUTRI ADILLA.R</a></li>
        <li><a target="_blank" href="https://my-portofolio-radenraflyy.netlify.app">R.RAFLY PRADANA.K</a></li>
        <li><a href="https://elastic-pike-8666a1.netlify.app/">TYARA EKAWARDANI</a></li>
    </ul>
    </div>
    <div class="footer2">
        <p>&copy;Copyright 2022, RAFLY</p>
        <p>Design by Tyara, Anissya</p>
    </div>

<!-- Footer End -->

<!-- State= Jenis Warna, Kecepatan.
Identity = Biru
Class = atribute, Method, Constructur, Destructor
https://bit.ly/oop-1
OOP adalah Sebuah Bahasa Pemrograman yang memecah bahasa (Pemrograman) Menjadi bagian bgian terkecil
Class adalah Template sebuah objek
Contoh Penulisan Class Pada PHP
class rafly ->Sudah menyimpah Properti & Method -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>