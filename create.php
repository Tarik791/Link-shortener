<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple URL Shortener</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
    body {
        background-color: #42cf73;
        font-family: 'Alegreya Sans SC' 
    }
    h1{
        font-size:50px;
        background-color: #42cf73;
        overflow:hidden;
        color:#fff;
        letter-spacing:8px;
        
    }
    h2{
        background-color: #42cf73;
        overflow:hidden;
        color:#fff;
        letter-spacing:8px;
    }
    
    p {
        font-size:30px;
        color:#fff;
    }
    
    input[type="text"]{
        min-width:250px;
        max-width: 500px;
        display: block;
        height: 60px;
        width:260px;
        text-align:center;
        font-size:15px;


    }

    .tekst{
        font-size:15px;
        text-transform:uppercase;
        display:block;
        animation: text 3s 1;
    }

    @keyframes text{
        0%{
            color:black;
            margin-bottom: -40px;
        }
        30%{
            letter-spacing: 25px;
            margin-bottom: -40px;
        }
        85%{
            letter-spacing:8px;
            margin-bottom: -40px;
        }
    }
    a{
        text-decoration:none;
        outline:none;
    }
    .footer-main-div{
        width:100%;
        height:auto;
        margin:auto;
        background: #272727;
        padding:20px 0px;
    }

    .footer-menu-one {
        width:100%;
        height:auto;
        margin:auto;
        margin-top:20px;

    }

    .footer-menu-one ul{
        margin: 0px;
        padding: 0;
        text-align:center;
    }

    .footer-menu-one ul li {
        display:inline-block;
        margin: 0px 15px;

    }
    .footer-menu-one ul li a{
        font-family: arial;
        font-size: 15px;
        font-weight: 600;
        color: #fff;
        text-transform:uppercase;
        
    }
    </style>

</head>
<body>
<center>
    <h1>Shortener!</h1>
    <p>Paste the URL to be shortened</p>



    <br><br>

    <form action="create.php" method="get">
    
    <input type="text" name="urls" placeholder="Paste your url here and click ENTER!">
    <br>
    <br>
    
   
    
    </form>


    <?php 
    
    if (isset($_GET['urls'])){
        $url = $_GET['urls'];
        shorten_url($url);
    }

    function shorten_url($url){
        include 'shorten.php';

        $outputurl = Shortener($url);
    
    
    ?>

    <input type="text" onClick="msg()" value="<?php echo $outputurl; ?>"/>


    <?php 
    
    }
    
    ?>

    <p class="tekst">ShortURL.at is a free tool to shorten a URL or reduce a link.
    Use our URL Shortener to create a shortened link making it easy to remember.</p>
    <br>
    <h2 class="tekst">Simple and fast URL shortener!</h2>
    <br>
    <p class="tekst"> ShortURL allows to reduce long links from Facebook, YouTube, Twitter, Linked In and top sites on the Internet, just paste the long URL and click the Shorten URL button. On the next screen, copy the shortened URL and share it on websites, chat and e-mail. After shortening the URL, check how many clicks it received.</p>
</center>

<div class="footer-main-div">
    <div class="footer-menu-one">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Contact us</a></li>

        </ul>

    </div>

</div>
</body>
</html>