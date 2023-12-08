<footer class="footer" style="background-color: #132640; color: #ffffff;">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <p class="text-justify lead" style="padding-bottom: 50px;">
                Con el respaldo de la gracia divina, somos DSA, la tecnología más cercana a tus manos. Agradecemos a Dios por permitirnos acercarte a las últimas innovaciones. Te invitamos a visitar nuestras páginas de <a href="https://www.facebook.com/dsa.eza" target="_blank">Facebook</a> e <a href="https://instagram.com/dsa.eza?igshid=OGQ5ZDc2ODk2ZA==" target="_blank">Instagram</a>, donde podrás mantenerte al tanto de nuestras últimas novedades y ofertas especiales. ¡Descubre el mundo de posibilidades que tenemos para ti!
                </p>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <ul class="list-unstyled" >
                    <li><h5 class="font-weight-bold" ><i class="far fa-copyright"></i> <?php echo COMPANY." ".date("Y"); ?></h5></li>
                    <li> Todos los derechos reservados </li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <ul class="list-unstyled" >
                    <li><h5 class="font-weight-bold" ><?php echo COUNTRY;?></h5></li>
                    <li><i class="fas fa-map-marker-alt fa-fw"></i> <?php echo ADDRESS; ?></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <ul class="list-unstyled" >
                    <li><h5 class="font-weight-bold" >Contactanos:</h5> </li>
                    <li> +504 9783-5101 </li>
                    <li> +504 3204-2936</li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 mb-4">
    <ul class="list-unstyled">
        <li><h5 class="font-weight-bold">Sigueme en:</h5></li>
        <?php if(FACEBOOK!=""){ ?>
        <li>
            <a href="<?php echo FACEBOOK; ?>" class="footer-link" target="_blank" style="color: white;">
                <i class="fab fa-facebook fa-fw"></i> Facebook
            </a>
        </li>
        <?php } if(INSTAGRAM!=""){ ?>
        <li>
            <a href="<?php echo INSTAGRAM; ?>" class="footer-link" target="_blank" style="color: white;">
                <i class="fab fa-instagram fa-fw"></i> Instagram
            </a>
        </li>
        <?php } if(YOUTUBE!=""){ ?>
        <li>
            <a href="<?php echo YOUTUBE; ?>" class="footer-link" target="_blank" style="color: white;">
                <i class="fab fa-youtube fa-fw"></i> Youtube
            </a>
        </li>
        <?php } if(TIKTOK!=""){ ?>
        <li>
            <a href="<?php echo TIKTOK; ?>" class="footer-link" target="_blank" style="color: white;">
                <i class="fab fa-tiktok fa-fw"></i> TikTok
            </a>
        </li>
        <?php } ?>
    </ul>
</div>

        </div>
    </div>
</footer>