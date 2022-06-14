@extends('layouts.main')

@section('title', 'Upload Image')

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
        <div class="Team">
            <div class="row" style="line-height: 1.2; text-align: center;">
                <div class="judulupload col-md-12">
                <div class="col-md-12 pt-1 pb-1" style="background-color: transparent: color: white;" >
                    <marquee behavior="" direction="left">
                        <h6 class="my-auto">
                             <b style="color: #6A6C7C"> | Yuk upload foto makanan dari galerimu, untuk mengetahui makanan khas Indonesia! | </b>
                        </h6>
                    </marquee>
                </div>
                    Upload Image
                </div>
                <div class="uploadimage col-md-12">
                    <div>
                        <img src="/img/upload.png" alt="" style="padding-bottom: 5%;">
                    </div>
                    <form action="/action_page.php" style="justify-content: center">
                        <input class="up" type="file" accept="image/*" capture="camera"> <br> <br>
                        <button class="sub">Upload Image</button>
                    </form>
                </div>
                <div id="slide-show" class="slide-upload" style="padding-top: 5%">
                    <div class="slideshow-container">
                        <div class="slide-homes fade1" style="background-color: #F5F5F5;">
                            <img src="/img/gudeg.jpg" alt="gudeg" width="100px">
                            <p style="font-weight: bold">Gudeg</p>
                        </div>
            
                        <div class="slide-homes fade1" style="background-color: #F5F5F5;">
                            <img src="/img/pecel.jpg" alt="pecel" width="150px">
                            <p style="font-weight: bold">Pecel</p>
                        </div>
            
                        <div class="slide-homes fade1" style="background-color: #F5F5F5;">
                            <img src="/img/soto.jpeg" alt="soto" width="150px">
                            <p style="font-weight: bold">Soto</p>
                        </div>
                        <div class="slide-homes fade1" style="background-color: #F5F5F5;">
                            <img src="/img/rawon.jpg" alt="rawon" width="150px">
                            <p style="font-weight: bold">Rawon</p>
                        </div>
                        <div class="slide-homes fade1" style="background-color: #F5F5F5;">
                            <img src="/img/gado.jpg" alt="gado-gado" width="150px">
                            <p style="font-weight: bold">Gado-Gado</p>
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

    var slides1 = document.getElementsByClassName("slide-homes");
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