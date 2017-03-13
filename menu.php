<?php
//MENU PRINCIPAL
function menu($menu){
echo '<nav class="navigation closed clearfix">
                    <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                    <ul class="sf-menu nav">
                        <li class="active"><a href="index.php#Inicio"> Inicio </a></li>
                        <li><a href="index.php#about"> 4CES </a></li>
                        <li><a href="index.php#schedule"> Programa </a></li>
                        <li><a href="index.php#sponsors"> Boletines </a></li>
                        <li><a href="index.php#speakers"> Conferencistas </a></li>
                        <li><a href="index.php#price"> Precios </a></li>
                        <li><a href="index.php#location">Ubicación</a></li>
                        <li><a href="hoteles.php"> Hoteles </a></li>
                        <li><a href="http://confecol.org/payu/user/contacto.php" target="_blank"> Contáctanos </a></li>
                    </ul>
                </nav>';
return $menu;
}

//PIE DE PAGINA
function footer($footer){
echo '<footer class="footer">
        <div class="footer-meta">
            <div class="container text-center">
                <div class="clearfix">
                    <ul class="social-line social-circle list-inline">
                        <li data-animation="flipInY" data-animation-delay="100"><a href="https://twitter.com/confecol" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="300"><a href="https://www.facebook.com/confecol" class="facebook" target="_blank"><i class="fa fa-facebook" ></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="400"><a href="https://plus.google.com/+CONFECOL" class="google" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="500"><a href="https://www.instagram.com/confecoltv/" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="600"><a href="https://www.youtube.com/confecol" class="pinterest" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                    </ul>
                </div>
                <span class="copyright" data-animation="fadeInUp" data-animation-delay="100">&copy; 2017 Confederación Espírita Colombiana CONFECOL &#8212; 4° Congreso Espírita Suramericano </span>
            </div>
        </div>
    </footer>';
}
?>