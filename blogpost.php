<?php include("admin/db.php");?>
<?php include("includes/header.php") ?>

<?php
//    php echo $row['article'] 
 if (isset($_GET['id'])) {
    $id = base64_decode($_GET['id']);

    $query = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
    
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $imagen = $row['imagen'];
        $description = $row['description'];
        $category = $row['category'];
    }
 }  
?>
<style>
h5 {
    margin-bottom: 0;
    word-wrap: break-word;
}

a {
    color: black;
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
    font-size: 18px;
    font-weight: 700;
    color: white;
    margin: 0;
    text-align: justify;
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

.ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
    border: 0;
}
</style>
<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
<section class="">
    <div class="blog-single gray-bg pt-4">
        <div class="container pt-4">
            <div class="row align-items-start d">
                <div class="col-lg-8 m-15px-tb p-2">
                    <article class="article">
                        <div class="article-content" id="blog" style="border: 0; text-aling: justify;">
                            <?php echo $row['article'] ?>
                        </div>
                        <div class="nav tag-cloud">

                            <a href="buscador.php?busqueda=<?php echo $row['category'] ?>"
                                class="btn btn-bl"><?php echo $row['category'] ?></a>

                        </div>
                    </article>
                    <br>
                    <br>
                    <div class="container-flex article-comment bottom">
                        <center>
                            <h2 class="fw-bolder" style="border-style: none;">Comentarios</h2>
                        </center>
                        <form id="contact-form" method="POST">
                            <div class="row">
                                <div id="disqus_thread"></div>
                                <script>
                                /**
                                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                /*
                                var disqus_config = function () {
                                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                */
                                (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document,
                                        s = d.createElement('script');
                                    s.src = 'https://technonautas.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a
                                        href="https://disqus.com/?ref_noscript">comments powered by
                                        Disqus.</a></noscript>
                            </div>
                        </form>
                    </div>


                </div>

                <div class="col-lg-4 m-15px-tb blog-aside right">
                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3 class="text-center">Ultimas Tags</h3>
                        </div>
                        <div class="widget-body">
                            <div class="nav tag-cloud">
                                <?php
                                $query = "SELECT DISTINCT  category FROM task";
                                $result_task = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="buscador.php?busqueda=<?php echo $row['category'] ?>" class="btn btn-bl"><i
                                            class='bx bx-purchase-tag-alt'></i><?php echo $row['category'] ?></a>
                                </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2 widget-post">
                        <div class="widget widget-latest-post">
                            <div class="widget-title">
                                <h3 class="text-center">Latest Post</h3>
                            </div>
                            <div class="widget-body">
                                <div class="latest-post-aside media">
                                    <div class="">
                                        <?php
                                            $query = "SELECT * FROM task ORDER by id DESC LIMIT 5;";
                                            $result_task = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result_task)) { ?>

                                        <div class="mb-3 card-section blog-pos" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="./includes/img/<?php echo $row['imagen'] ?>"
                                                        class="card-img-top rounded"  style="min-height: 70px; max-height: 220px; width: 100%;">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-text"> <a class="contenido"
                                                                href="blogpost.php?id=<?php echo base64_encode($row['id']) ?>"><?php echo $row['title'] ?></a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <small><?php echo $row['created_at'] ?> <i
                                                    class='bx bx-purchase-tag-alt'></i><a
                                                        href="buscador.php?busqueda=<?php echo $row['category'] ?>"><?php echo $row['category'] ?></a></small>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3 class="text-center">Anuncios</h3>
                        </div>
                        <div class="widget-body">
                            <div class="nav tag-cloud mb-3">
                                <script async
                                    src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7267727043013814"
                                    crossorigin="anonymous"></script>
                                <ins class="adsbygoogle bg-dark" style="display:inline-block;width:100%;height:800px"
                                    data-ad-client="ca-pub-7267727043013814" data-ad-slot="8817755680"></ins>
                                <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-flex article-comment border">
                <center>
                    <h3 class="fw-bolder" style="border-style: none;">Anuncios</h2>
                </center>
                <script async
                    src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7267727043013814"
                    crossorigin="anonymous"></script>
                <!-- p2 -->
                <ins class="adsbygoogle bg-dark" style="display:inline-block;width:100%;height:300px"
                    data-ad-client="ca-pub-7267727043013814" data-ad-slot="1284532984"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>

</section>


<script>
(function() { // DON'T EDIT BELOW THIS LINE
    var d = document,
        s = d.createElement('script');
    s.src = 'https://technonautas-2.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
        Disqus.</a></noscript>
<script id="dsq-count-scr" src="//technonautas-2.disqus.com/count.js" async></script>


<?php include("includes/footer.php") ?>