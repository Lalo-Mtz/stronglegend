<?php include('sections.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Legend</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php headerSe(0); ?>

    <section class="seccion contenedor">
        <div class="contenido-welcome">
            <img src="img/couch.jpg" alt="Imagen del Entrenador">

            <div class="texto-welcome">
                <h2 class="fw-300 centrar-texto">Bienvenidos</h2>
                <p>
                    Que tal, soy el Coach Ehecatl mi asesoría te ofrece plan nutricional, suplementación según objetivos y rutina 
                    para gimnasio o casa. Te ayudo en el control de tu peso, aumento de masa muscular y a disminuir tu porcentaje de grasa.
                </p>
            </div>
        </div>
    </section>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Nuestros Servicios</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="img/entrenando.jpg" alt="Imagen Paquete Premium">
                <div class="contenido-anuncio">
                    <h3 class="centrar-texto">Paquete Premium</h3>
                    <p>Este es el paquete que más te recomendamos, el mejor para alcanzar tus metas.</p>

                    <p class="precio">$ 550.00 mx</p>

                    <a href="#" class="boton d-block boton-negro">Ver detalles</a>
                </div>
            </div>
                
            <div class="anuncio">
                <img src="img/entrena.jpg" alt="Imagen Rutina">
                <div class="contenido-anuncio">
                    <h3 class="centrar-texto">Paquete Rutina</h3>
                    <p>Este paquete incluye rutina de ejercicios ya sea para gimnasio o casa.</p>

                    <p class="precio">$ 250.00 mx</p>

                    <a href="#" class="boton d-block boton-negro">Ver detalles</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="img/plan_a.jpg" alt="Imagen Plan Nutricional">
                <div class="contenido-anuncio">
                    <h3 class="centrar-texto">Plan nutricional</h3>
                    <p>Este paqute solo contiene una acesoria alimenticia, exelente y necesaria.</p>

                    <p class="precio">$ 350.00 mx</p>

                    <a href="#" class="boton d-block boton-negro">Ver detalles</a>
                </div>
            </div>
        </div> 
    </main>

    <section class="seccion imagen-preguntas">
        <div class="contenido-preguntas contenedor">
            <h3>¿Porque tener un coach?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo earum consequuntur maxime fuga molestiae enim provident ipsum expedita suscipit assumenda nemo, deserunt nam voluptate officia eveniet ullam voluptates repellendus corporis.</p>

            <a href="#" class="boton boton-azul">Preguntas frecuentes</a>
        </div>
    </section>

    <section class="seccion contenedor">
        <h3 class="fw-300 centrar-texto">Testimonios</h3>


        <div class="contenido-testimonio">

            <div class="testimonio">
                <h4 class="centrar-texto fw-300">Lo mejor que me pudo pasar</h4>
 
                <div class="img-testimonial">
                    <img src="img/test.png" alt="testimonial">
                </div>

                <blockquote>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel condimentum lacus. Duis imperdiet leo sed ex finibus, 
                    vitae aliquam ipsum molestie. Ut congue ante accumsan urna condimentum, et malesuada elit feugiat. Morbi ut interdum 
                    tortor, id pretium mauris. Maecenas vitae condimentum neque. Morbi a libero sapien. Aenean ornare pharetra nunc, in 
                    pulvinar metus feugiat eu. Sed vitae auctor dolor. Maecenas consectetur tincidunt quam id ultrices.
                </blockquote>

            </div>

            <div class="testimonio">
                <h4 class="centrar-texto fw-300">Nunca creí conseguir estos resultados</h4>

                <div class="img-testimonial">
                    <img src="img/test1.png" alt="testimonial">
                </div>

                <blockquote>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel condimentum lacus. Duis imperdiet leo sed ex finibus, 
                    vitae aliquam ipsum molestie. Ut congue ante accumsan urna condimentum, et malesuada elit feugiat. Morbi ut interdum 
                    tortor, id pretium mauris. Maecenas vitae condimentum neque. Morbi a libero sapien. Aenean ornare pharetra nunc, in 
                    pulvinar metus feugiat eu. Sed vitae auctor dolor. Maecenas consectetur tincidunt quam id ultrices.
                </blockquote>
                
            </div>

        </div>

    </section>

    <section class="seccion contenedor contenido-centrado">
        <h3 class="fw-300 centrar-texto">Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/faja.jpg" alt="Imagen de Uso Del Fajo">
            </div>

            <div class="texto-entrada">
                <a href="">
                    <h4>Uso Correcto del Fajo</h4>
                </a>

                <p>Escrito el <span>20/10/2020</span> por: <span>Admin.</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum vel eaque sit quiab landitiis?</p>    
            </div>

        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/engaño.jpg" alt="Imagen Publicidad Engañosa">
            </div>

            <div class="texto-entrada">
                <a href="">
                    <h4>Publicidad Engañosa</h4>
                </a>

                <p>Escrito el <span>20/10/2020</span> por: <span>Admin.</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum vel eaque sit quiab landitiis?</p>
            </div>

        </article>

    </section>

    <?php footerSe();?>

</body>
</html>