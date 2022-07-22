<?php 
session_start();

?>
<?php 
    $infe = 1;
    $limite = 9;
    $page = 1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $limite = $limite * $page;
        $infe = $infe + 9;
        if ($page <= 1) {
           $limite = 9;
           $infe = 1;
        }
    }
    if ($limite > 9) {
        $display = "display: none;";
        $bu = "display: block;";
    }else {
        $display = "block;";
        $bu = "display: none;";
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- BOX ICON CSS  -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!-- BOSTRAP CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./includes/styles/footer.css">
    <link rel="stylesheet" href="./includes/styles/header.css">
    <link rel="stylesheet" href="./includes/styles/blog.css">
    <link rel="stylesheet" href="./includes/styles/loader.css">
    <link rel="stylesheet" href="./includes/styles/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
        integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7267727043013814"
        crossorigin="anonymous"></script>
    <link href="https://unpkg.com/flickity@2/dist/flickity.min.css" rel="stylesheet">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js">
    </script>
    <title>Technonautas</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-230867900-1">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-230867900-1');
    </script>
</head>
<div class="loader">
    <img src="loader.gif" alt="">
</div>
<style>
.pagination {
    display: flex;
    align-items: center;
    justify-content: center;
}

a {
    color: #E74C3C;
}

a:hover {
    color: #E74C3C;
}

.rojo {
    color: #E74C3C;
}

nav ul .search-icon .icon:hover {
    background: #f8f8f8a2;
}

nav ul div.items a:hover {
    color: #E74C3C;
    background: none;
}

body {
    background-color: #F2F3F4;
}

nav {
    background: #222222;
    padding: 5px;
    padding-left: 40px;
    padding-right: 40px;
}


.cardimg {
    width: 460px;
    height: 240px;

}

.card-section {
    background-color: #F8F9F9;
}

a {
    color: #E74C3C;
}

.blog-post {
    -webkit-transition: all 0.2s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
    transition: all 0.2s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
}

.blog-post .blog-img .overlay,
.blog-post .blog-img .post-meta {
    position: absolute;
    opacity: 0;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.blog-post .blog-img .overlay {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.blog-post .blog-img .post-meta {
    bottom: 5%;
    right: 5%;
    z-index: 1;
}

.blog-post .blog-img .post-meta .read-more:hover {
    color: #E74C3C !important;
}

.blog-post .content h1,
.blog-post .content h2,
.blog-post .content h3,
.blog-post .content h4,
.blog-post .content h5,
.blog-post .content h6 {
    line-height: 1.2;
}


.blog-post .content .title {
    font-size: 18px;
    text-decoration: none;
}

.blog-post .content .title:hover {
    color: #E74C3C !important;
}

.blog-post .content .author .name:hover {
    color: #E74C3C !important;
}

.blog-post:hover {
    -webkit-transform: translateY(-7px);
    transform: translateY(-7px);
    -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    box-shadow: 0 0 2px rgba(0, 0, 0, 0.15);
}

.blog-post:hover .blog-img .overlay {
    opacity: 0.65;
}

.blog-post:hover .blog-img .post-meta {
    opacity: 1;
}

.blog-post .post-meta .like i,
.profile-post .like i {
    -webkit-text-stroke: 2px #E74C3C;
    -webkit-text-fill-color: transparent;
}

.blog-post .post-meta .like:active i,
.blog-post .post-meta .like:focus i,
.profile-post .like:active i,
.profile-post .like:focus i {
    -webkit-text-stroke: 0px #E74C3C;
    -webkit-text-fill-color: #E74C3C;
}

.shadow {
    -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15) !important;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15) !important;
}

.text-muted {
    color: #8492a6 !important;
}


.para-desc {
    max-width: 600px;
}

.text-muted {
    color: #8492a6 !important;
}

.section-title .title {
    letter-spacing: 0.5px;
    font-size: 25px;
    color: black;
}

.card-text {
    width: 100%;
    height: 70px;
    color: black;
    text-overflow: ellipsis;
    overflow: hidden;
    text-align: justify;
}

.card-titulo {
    width: 100%;
    height: 60px;
    color: black;
    text-overflow: ellipsis;
    overflow: hidden;
    text-align: justify;
    letter-spacing: 0.2px;
    font-size: 17px;
}

.card-titulo2 {
    width: 100%;
    height: 30px;
    color: black;
    text-overflow: ellipsis;
    overflow: hidden;
    text-align: justify;
}

.card-text2 {
    width: 100%;
    height: 50px;
    color: black;
    text-overflow: ellipsis;
    overflow: hidden;
    text-align: justify;
}

@media screen and (max-width: 800px) {
    .cardimg {
        width: 620px;
        height: 200px;

    }
}

@media screen and (max-width: 405px) {
    .cardimg {
        width: 300px;
        height: 160px;

    }

    nav ul li.btn span {
        padding-left: 20px;
    }
}

.blog-post {
    margin-bottom: 20px;
}

.like {
    background: none;
    border: 0;
}

.center {
    height: 100%;
    padding: 0;
    margin: 0;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    align-items: center;
    justify-content: center;
}

.adblock-wrapper {
    background: rgba(0, 0, 0, 0.6);
    width: 100vw;
    height: 100vh;
    position: fixed;
    z-index: 99;
}

.adblock-content-wrapper {
    box-shadow: 24px 24px 48px rgba(0, 0, 0, 0.4);
    border-radius: 10px;
    max-width: 400px;
    background: #fff;
    height: auto;
    width: 100%;
}

.adblock-content {
    padding: 30px 50px;
}

.adblock-close {
    position: relative;
    top: 0px;
    float: right;
    margin: -10px;
    background: #fa3123;
    color: #fff;
    font-size: 20px;
    padding: 2px 7px 2px;
    border-radius: 50%;
    font-weight: 700;
    cursor: pointer;
}

.image-container {
    width: 100px;
    text-align: center;
    margin-bottom: -20px;
}

.image-container .image h3 {
    font-size: 30px;
    font-weight: 700;
    background: transparent;
    border: 4px dotted rgba(250, 49, 35, 1);
    border-radius: 50%;
    text-align: center;
    color: rgba(250, 49, 35, 1);
    padding: 27px 0px;
    font-family: inherit;
}

.image-container .image .fas {
    float: right;
    font-size: 20px;
    margin: 0px 0px 0px -20px;
    color: rgba(250, 49, 35, 1);
    background: #fff;
    border-radius: 50%;
    padding: 5px 6px 5px 8px;
}

.adblock-text,
.adblock-text h3 {
    text-align: center;
    font-family: inherit;
    font-weight: 700;
}

.adblock-text h3 {
    font-size: 30px;
}

.adblock-text p {
    margin: 20px auto;
    font-weight: 500;
}

.adblock-button .btn {
    line-height: 1em;
    border-radius: 30px;
    border: none;
    padding: 15px 20px;
    width: 100%;
    background: #fa3123;
    color: #fff;
    transition: 0.2s;
    border: 2px solid #fa3123;
}

.adblock-button .btn:hover {
    background: #fff;
    color: #fa3123;
    border: 2px solid #fa3123;
}


.hidden {
    display: none;
}


.mainbox {
    margin: auto;
    height: 600px;
    width: 600px;
    position: relative;
}

.err {
    color: black;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 11rem;
    position: absolute;
    left: 20%;
    top: 8%;
}

.far {
    position: absolute;
    font-size: 8.5rem;
    left: 42%;
    top: 15%;
    color: black;
}

.err2 {
    color: black;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 11rem;
    position: absolute;
    left: 68%;
    top: 8%;
}

.msg {
    text-align: center;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 1.6rem;
    position: absolute;
    left: 16%;
    top: 45%;
    width: 75%;
}



.cardimg {
    width: 460px;
    height: 240px;

}

.card-section {
    background-color: #F8F9F9;
}

@media screen and (max-width: 500px) {

    .err {
        color: black;
        font-family: 'Nunito Sans', sans-serif;
        font-size: 7rem;
        position: absolute;
        top: 8%;
    }

    .far {
        position: absolute;
        font-size: 4.5rem;
        left: 42%;
        top: 15%;
        color: black;
    }

    .err2 {
        color: black;
        font-family: 'Nunito Sans', sans-serif;
        font-size: 7rem;
        position: absolute;
        left: 68%;
        top: 8%;
    }

    .msg {
        text-align: center;
        font-family: 'Nunito Sans', sans-serif;
        font-size: 1.6rem;
        position: absolute;
        left: 16%;
        top: 30%;
        width: 75%;
    }
}

p {
    margin-bottom: 0;
}

h5 {
    margin-bottom: 0;
}

a {
    text-decoration: none;
}

nav {
    background: #222222;
    padding: 5px;
    padding-left: 40px;
    padding-right: 40px;
}

img {
    border-radius: 6px;
}

.btn-bl,
.btn-bl:active,
.btn-bl:visited {
    background-color: #222222 !important;
    color: white;
}

.btn-bl:hover {
    background-color: rgb(53, 48, 48) !important;
    color: white;
}

@media screen and (max-width: 800px) {
    .card-img-top {
        width: 620px;
        height: 200px;

    }
}

@media screen and (max-width: 405px) {
    .card-img-top {
        width: 300px;
        height: 160px;

    }
}

.blog-aside .widget-title {
    padding: 15px;
    background-color: #222222;
    border-bottom: 4px solid #eee;
}

.blog-aside .widget-title h3 {
    font-size: 20px;
    font-weight: 700;
    color: white;
    margin: 0;
}

.limit {
    width: 100%;
    height: 100px;
    color: black;
    text-overflow: ellipsis;
    overflow: hidden;
    text-align: justify;
}

.card-body {
    flex: 1 1 auto;
    padding: 4px;
    margin-bottom: 10px;
}

p {
    margin-bottom: 0;
}

.category {
    color: red;
    text-aling: justify;
}

.title {
    text-aling: justify;
}

.ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
    border: 0;
}
</style>

<body>
    <header>
        <nav>
            <ul class="container-flex">
                <li class="logo"><img src="./logo.png" width="38px"><span style="color: white">Tech</span><span
                        style="color: #E74C3C" ;>nonautas</span>
                </li>
                <li class="btn"><span class="fas fa-bars"></span></li>
                <div class="items"">
                    <li><a href=" ./index.php">Home</a></li>
                    <li><a href=" ./about.php">About</a></li>
                    <li><a href="./contact.php">Contact</a></li>

                </div>
                <form action="buscador.php" method="GET">
                    <li class="search-icon">
                        <input type="text" placeholder="Search" id="busqueda" name="busqueda">
                        <label class="icon">
                            <button class="btn btn-secundary"><span class="fas fa-search"></span></button>
                        </label>
                    </li>
                </form>
            </ul>
        </nav>
        <script>
        $('nav ul li.btn span').click(function() {
            $('nav ul div.items').toggleClass("show");
            $('nav ul li.btn span').toggleClass("show");
        });
        </script>

    </header>

    <div class='adblock-wrapper center hidden' id='ads-blocked'>
        <div class='adblock-content-wrapper'>
            <span class='adblock-close'>&times;</span>
            <div class='adblock-content'>
                <div class='center'>
                    <div class='image-container'>
                        <div class='image'>
                            <i class="fas fa-exclamation-circle"></i>
                            <h3>
                                Ads
                            </h3>
                        </div>
                    </div>
                </div>
                <div class='adblock-text'>
                    <h3>
                        Please disable your ad blocker!
                    </h3>
                    <p>
                        We know ads are annoying but please bear with us here & disable your ad blocker!
                    </p>
                </div>
                <div class='adblock-button'>
                    <button class='btn'>
                        I've disabled my ad blocker!
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
    function init() {
        adsBlocked(function(o) {
            o
                ?
                ($("#ads-blocked").removeClass("hidden"),
                    $(".example-page").css("filter", "blur(8px)")) :
                console.log("Ad-blocker Enabled : " + o);
        });
    }

    function adsBlocked(o) {
        var e = new Request(
            "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
                method: "HEAD",
                mode: "no-cors"
            }
        );
        fetch(e)
            .then(function(o) {
                return o;
            })
            .then(function(e) {
                console.log(e), o(!1);
            })
            .catch(function(e) {
                console.log(e), o(!0);
            });
    }
    setTimeout(() => {
        init();
    }, 3000);

    /*Code for close button of popup you can set your own functionality*/

    $(".adblock-close, .btn").click(function() {
        $("#ads-blocked").addClass("hidden");
        $(".example-page").css("filter", "blur(0px)");
    });
    </script>