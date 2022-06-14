@extends('layouts.main')

@section('title', 'Home')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- Css --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    {{-- Font Poppins --}}
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body style=" background-color: #f5fcdb;">
    <div class="container" style="font-family: Poppins;">
        <div class="Home">
            <div class="row" style="line-height: 1.2; text-align: center;">
                <div class="home1 col-md-6">
                    <img src="/img/camerahome.png" alt="camerahome" class="camerahome">
                    <p class="defhome">Temukan nama makananmu</p>
                </div>
                <div class="home1 col-md-6">
                    <img src="/img/makanan.png" class="makanan" alt="makanan" width="100px">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <p class="definisi-kami"> KAMI merupakan aplikasi yang menggunakan kecerdasan buatan (AI) sederhana dengan konsep Deep Learning yang dapat mempelajari gambar yang pengguna masukkan baik melalui galeri, maupun kamera smartphone, dan memberikan output berupa nama makanan, bahan dan cara membuatnya, serta jumlah kandungan gizi yang ada dalam makanan tersebut. Aplikasi ini diharapkan dapat mengedukasi pengguna mengenai cara pembuatan makanan dan mengajarkan pola makan sehat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="/img/ayamdkk.png" class="gambarayam" alt="">
                </div>
                <div>
                    <p class="jenis-makanan">
                        SAAT INI TERDAPAT 70 JENIS MAKANAN YANG DAPAT DIANALISIS OLEH KAMI
                    </p>
                </div>
                <div>
                    <p style="padding-top: 5%; text-align:center; font-weight:bold;">Cara Penggunaan Aplikasi</ps>
                </div>
                <div>
                    <img src="/img/alur.png" class="alur" alt="alur">
                </div>
                <div>
                    <p class="temukan-nama">Temukan nama makananmu</p>
                </div>
                <div id="slide-show" style="padding-top: 5%">
                    <div class="slideshow-container">
                        <div class="slide-home fade1" style="background-color: #F5F5F5;">
                            <p>Aplikasi yang mantap, dengan adanya aplikasi ini saya semakin peduli dengan apa yang saya makan, berapa jumlah kalori saya tiap harinya, dan mengajarkan pola makan sehat.</p>
                            <p style="font-weight: bold">Rudi</p>
                        </div>
            
                        <div class="slide-home fade1" style="background-color: #F5F5F5;">
                            <p>Keren aplikasinya, cepat dan responsif sekali, sangat bermanfaat bagi hidup saya.</p>
                            <p style="font-weight: bold">Agus</p>
                        </div>
            
                        <div class="slide-home fade1" style="background-color: #F5F5F5;">
                            <p>Dengan menggunakan aplikasi ini, akhirnya saya bisa mengukur berapa jumlah kalori yang telah saya makan tiap harinya, mantap banget!!</p>
                            <p style="font-weight: bold">Salim</p>
                        </div>
                        <div class="slide-home fade1" style="background-color: #F5F5F5;">
                            <p>Dengan aplikasi ini, suami jadi makin sayang, karena panduan bahan dan cara memasaknya lengkap sekali, good job.</p>
                            <p style="font-weight: bold">Darminten</p>
                        </div>
                        <div class="slide-home fade1" style="background-color: #F5F5F5;">
                            <p>Makanan yang ditampilkan cukup lengkap dan informatif, banyak yang bisa saya dapatkan, resepnya juga enak dan mantap!!</p>
                            <p style="font-weight: bold">Siska</p>
                        </div>
                        <div style="text-align:center; padding: 10px">
                            <span class="dot1"></span>
                            <span class="dot1"></span>
                            <span class="dot1"></span>
                            <span class="dot1"></span>
                            <span class="dot1"></span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    // Misi
    var slideIndex1 = 0;
    showSlides1();
    // part1
    function showSlides1() {

    var slides1 = document.getElementsByClassName("slide-home");
    var dots1 = document.getElementsByClassName("dot1");
    for (i = 0; i < slides1.length; i++) {
    slides1[i].style.display = "none";
    }

    slideIndex1++;

    if (slideIndex1 > slides1.length) {slideIndex1 = 1}

    for (i = 0; i < dots1.length; i++) {
    dots1[i].className = dots1[i].className.replace(" active1", "");
    }

    slides1[slideIndex1-1].style.display = "block";
    dots1[slideIndex1-1].className += " active1";
    setTimeout(showSlides1, 2000);
    }
</script>