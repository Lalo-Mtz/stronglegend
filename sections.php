<?php
    function navigation(){
        echo '
            <nav class="navegacion">
                <a href="servicios.html">Servicios</a>
                <a href="contacto.html">Contacto</a>
                <a href="blog.html">Blog</a>
                <a href="preguntasf.html">Preguntas frecuentes</a>
                <a href="productos.html">Productos</a>
            </nav>
        ';
    }

    function headerSe($type){
        $type = $type == 0 ? 'inicio' : '';

        echo '
            <header class="site-header '.$type.'">
                <div class="contenedor contenido-header">
                    <div class="barra">
                        <a href="/">
                            <img src="img/legend.png" alt="Logo">
                        </a>'
        ;
        navigation();
        echo '</div>';
        if($type == 'inicio')
            echo'<div> <h1>Personal Trainer</h1> <h2 class="centrar-texto" >"El hombre creó el acero y ahora el acero moldea a el hombre"</h2> </div>';
        echo '</div> </header>';
    }

    

    function footerSe(){
        echo '
            <footer class="site-footer seccion">

                <div class="contenedor contenido-footer"> 
        ';
        navigation();
        echo '
                    <ul class="iconos-redes">
                        <li class="icono">
                            <a target="_blank" href="https://wa.me/5214493431377?text=Hola,%20me%20interesa%20alguno%20de%20los%20paquetes%20que%20ofreces"><img src="img/whatsapp.png" alt="Icono WhatsApp"></a>
                        </li>
                        <li class="icono">
                            <a target="_blank" href="https://www.instagram.com/strong_legend19/"><img src="img/instagram.png" alt="Icono Instagram"></a>
                        </li>
                        <li class="icono">
                            <a target="_blank" href="https://www.facebook.com/Strong-Legend-100354728019321"><img src="img/fb.png" alt="Icono Facebook"></a>
                        </li>
                        <li class="icono">
                            <a target="_blank" href=""><img src="img/gmail.png" alt="Icono Gmail"></a>
                        </li>
                    </ul>
                </div>
            </footer>
        ';
    }
?>