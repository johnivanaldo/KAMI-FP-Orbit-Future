
<link rel="stylesheet" href="/css/navbarr.css">

<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<div class="topnav" id="myTopnav">
    <a href="#home" class="active">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
        x.className += " responsive";
        } 
            else {
            x.className = "topnav";
        }
    }
    </script><?php /**PATH D:\Project\KAMI\resources\views/layouts/navbarr.blade.php ENDPATH**/ ?>