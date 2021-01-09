<?php include('sections.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php headerI(1);?>

    <h2 class="fw-300 centrar-texto">Nuestro Blog</h2>

    <main class="seccion contenedor contenido-centrado">

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
        
    </main>

    <?php footerSe();?>
</body>
</html>