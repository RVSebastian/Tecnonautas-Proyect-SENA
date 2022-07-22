<?php include("admin/db.php") ?>

<?php include("includes/header.php") ?>

<style>
body {
    background-color: #F2F3F4;
}

.btn {
    height: 42px;
}

.btn-facebook,
.btn-facebook:active,
.btn-facebook:visited {
    background-color: #2980B9 !important;
    color: white !important;
}

.btn-twiter,
.btn-twiter:active,
.btn-twiter:visited {
    background-color: #3498DB !important;
    color: white !important;
}

.btn-youtube,
.btn-youtube:active,
.btn-youtube:visited {
    background-color: #CB4335 !important;
    color: white !important;
}

.btn-twiter:hover {
    background-color: rgb(53, 48, 48) !important;
}

.btn-facebook:hover {
    background-color: rgb(53, 48, 48) !important;
}

.btn-youtube:hover {
    background-color: rgb(53, 48, 48) !important;
}
</style>
<br><br>
<script src="https://unpkg.com/scrollreveal"></script>
<section class="container blog-single gray-bg pt-4 p-4">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col left">
            <div class="card blog-post p-4">
                <br>
                <center class="m-t-30"> <img class="rounded-circle" src="./includes/img/astronauta-divertido-de-la-historieta-del-gato-anaranjado-icono-en-traje-espacio-vector-el-blanco-cara-feliz-con-casco-aislado-140594654.jpg" width="100">
                    <h4 class="text-dark font-weight-bold">Juan Sebastian Rodriguez</h4>
                </center>
                <div class="card-body"> <small class="text-muted fw-bolder">Email address </small>
                    <h6>juancbastianrv@gmail.com</h6> <small class="text-muted p-t-30 db fw-bolder">Phone</small>
                    <h6>+57 322 286 3938</h6>
                    <center> <small class="text-muted text-center p-t-30 db fw-bolder">Social Profile</small></center>
                    <br>
                    <div class="d-flex justify-content-around">
                        <button class="btn btn-lg btn-facebook"><i class="fa fa-facebook"
                                aria-hidden="true"></i></button>
                        <button class="btn btn-lg btn-youtube"><i class='bx bxl-youtube'></i></button>
                        <button class="btn btn-lg btn-twiter"><i class='bx bxl-linkedin'></i></button>
                    </div>
                </div>
            </div>

        </div>
        <div class="col right">
            <div class="card blog-post p-4 right">
                <br>
                <center class="m-t-30"> <img class="rounded-circle" src="./includes/img/astronauta-divertido-de-la-historieta-del-gato-anaranjado-icono-en-traje-espacio-vector-el-blanco-cara-feliz-con-casco-aislado-140594654.jpg" width="100">
                    <h4 class="text-dark font-weight-bold">Michell Xiomara Solano</h4>
                </center>
                <div class="card-body"> <small class="text-muted fw-bolder">Email address </small>
                    <h6>mxsolano1@misena.edu.co</h6> <small class="text-muted p-t-30 db fw-bolder">Phone</small>
                    <h6>+57 302 675 9152</h6>
                    <center> <small class="text-muted text-center p-t-30 db fw-bolder">Social Profile</small></center>
                    <br>
                    <div class="d-flex justify-content-around">
                        <button class="btn btn-lg btn-facebook"><i class="fa fa-facebook"
                                aria-hidden="true"></i></button>
                        <button class="btn btn-lg btn-youtube"><i class='bx bxl-youtube'></i></button>
                        <button class="btn btn-lg btn-twiter"><i class='bx bxl-linkedin'></i></button>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="article-comment bottom">
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
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                powered by Disqus.</a></noscript>

    </div>
</section>



<?php include("includes/footer.php") ?>