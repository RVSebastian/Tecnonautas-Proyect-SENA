<?php include("admin/db.php") ?>

<?php include("includes/header.php") ?>
<style>
.card {
    border-radius: 10px;
    width: 40rem;
    margin: 0 auto;
    border: 0;
}

.btn-enviar {
    background-color: #E74C3C;
    color: white;
}

.btn-enviar:hover {
    background-color: #222222;
    color: white;
}

.lcorreo {
    width: 80px;
    margin: 0 auto;
    background-color: #E74C3C;
    border-radius: 70px;
    content: '';
    color: #E74C3C;
}

@media screen and (max-width: 400px) {
    .card {
        border-radius: 10px;
        width: 18rem;

    }
}
</style>
<?php 
    $s = "display: none;";
    if (isset($_POST['email'])) {
        $nombre = $_POST['nombre'];
        $mail = $_POST['email'];
        $empresa = $_POST['mensaje'];
        
        $para      = 'juancbastianrv@gmail.com';
        $titulo    = 'El título';
        $mensaje   = 'Hola';
        $cabeceras = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        mail($para, $titulo, $mensaje, $cabeceras);
    
        $s = "display: block;";
        header("Location: ".$_SERVER['HTTP_REFERER']."");
    }
  
?>
<section class="">
    <div class="blog-single gray-bg pt-4">
        <div class="container pt-4">
            <div class="row align-items-start pt-2">
                <div class="col-lg-8 m-15px-tb">
                    <article class="article bottom">
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-success  alert-dismissible fade show" role="alert"
                                    style="<?php echo $s?>">
                                    Su comentario ha sido enviado con exito
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <center>
                                    <h2 class="fw-bolder" style="border-style: none;">Formularo de Contacto</h2>
                                </center>
                                <form method="POST" name="contact-form" class="p-4">
                                    <div class="mb-3">
                                        <label class="fw-bolder">Tu Email</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="ejemplo@gmail.com">
                                    </div>
                                    <div class="mb-3">
                                        <label class="fw-bolder">Tu Nombre</label>
                                        <input type="text" class="form-control" name="nombre"
                                            placeholder="Sebastian Vargaz">
                                    </div>
                                    <div class="mb-3">
                                        <label class="fw-bolder">Mensaje</label>
                                        <textarea class="form-control" name="mensaje" rows="3"
                                            placeholder="Tu comentario sera de gran utilidad para el mejoramiento de nuestra plataforma"></textarea>
                                    </div>

                                    <div class="d-grid gap-2">
                                        <button class="btn btn-enviar" name="Enviar" type="submit">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr>
                    </article>
                </div>

                <div class="col-lg-4 m-15px-tb blog-aside">
                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3 class="text-center">Recomendacion</h3>
                        </div>
                        <div class="widget-body">
                            <div class="nav tag-cloud">
                                <p style="text-align: justify;">Responderemos a tus comentarios en un lapso de 3 dias,
                                    agradecemos cualquier comentario</p>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3 class="text-center">Recordatorio</h3>
                        </div>
                        <div class="widget-body">
                            <div class="nav tag-cloud">
                                <p style="text-align: justify;">La Plataforma fue elaborada como proyecto para el SENA
                                    por parte de dos estudiantes
                                    del area TIC con los conocimientos adquiridos en el transcurso de la formacion</p>
                                <img src="./includes/img/sena.png" width="100px" style="margin: 0 auto;">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <section class="">
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
</section>


<?php include("includes/footer.php") ?>