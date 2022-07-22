<?php include("admin/db.php") ?>

<?php include("includes/header.php") ?>

<section>
    <style>
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

    @media screen and (max-width: 700px) {
        .cel {
            display: none;
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
        padding: 6px;
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
    <br><br><br>
    <div class="container pt-1">

        <section class="">
            <div class="blog-single gray-bg pt-1">
                <div class="container">
                    <div class="row">
                        <?php
                 $busqueda = $_GET['busqueda'];
                 $query = "SELECT * FROM task WHERE title LIKE '%$busqueda%' or category LIKE '%$busqueda%' ";
                 $result_task = mysqli_query($conn, $query);
                 if (mysqli_num_rows($result_task) >= 1) { ?>
                        <h1>Buscando "<?php echo $_GET['busqueda']?>"</h1>
                        <?php  while ($row = mysqli_fetch_array($result_task)) 
                    {  ?>
                        <div class="col-12 col-md-6 col-lg-3 left">
                            <div class="card-section blog-post rounded border shadow"
                                style="max-height: 22rem; max-width: 500px; min-height: 18rem">
                                <form name="like" method="POST">
                                    <div class="blog-img d-block overflow-hidden position-relative">
                                        <div>
                                            <img src="./includes/img/<?php echo $row['imagen'] ?>"
                                                class="img-fluid rounded"
                                                style="max-height: 220px; width: 500px; min-height: 150px">
                                            <a class="stretched-link"
                                                href="blogpost.php?id=<?php echo base64_encode($row['id']) ?>"> </a>
                                        </div>

                                        <div class="overlay rounded-top bg-dark"></div>
                                        <div class="post-meta">

                                            <a href="blogpost.php?id=<?php echo $row['id'] ?>">Ver mas</a>
                                        </div>
                                    </div>
                                    <div class="content p-3">
                                        <small class="text-muted p float-right"><?php echo $row['created_at'] ?></small>
                                        <h5 class="mt-2 card-titulo"><a
                                                href="blogpost.php?id=<?php echo base64_encode($row['id']) ?>"
                                                class="text-dark" name="title"><?php echo $row['title'] ?></a>
                                        </h5>


                                        <a href="buscador.php?busqueda=<?php echo $row['category'] ?>"><i
                                                        class='bx bx-purchase-tag-alt'></i><?php echo $row['category'] ?></a>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <?php } ?>
                        <?php }

             $busqueda = $_GET['busqueda'];
             $query = "SELECT * FROM task WHERE title LIKE '%$busqueda%' or category LIKE '%$busqueda%'";
             $result_task = mysqli_query($conn, $query);
            if (mysqli_num_rows($result_task) < 1) { ?>
                        <div class="mainbox">
                            <div class="err">4</div>
                            <i class="far fa-question-circle fa-spin"></i>
                            <div class="err2">4</div>
                            <div class="msg">!ERROR!<p>No existe "<?php echo $_GET['busqueda']?>"</p>
                                <p> <a href="./index.php">Regresar</a></p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <div class="container-flex article-comment border">
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
                    <br>
                    <section class="">
                        <div class="article-comment disqus_thread">
                            <center>
                                <h2 class="fw-bolder" style="border-style: none;">Comentarios</h2>
                            </center>
                            <div id="disqus_thread">
                            </div>
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
                                    href="https://disqus.com/?ref_noscript">comments
                                    powered by Disqus.</a></noscript>

                        </div>
                    </section>


        </section>


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
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</section>

<?php include("includes/footer.php") ?>