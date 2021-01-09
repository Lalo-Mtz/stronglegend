<?php include('sections.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="https://kit.fontawesome.com/eefb3f6366.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php headerI(1);?>

    <h1 class="fw-300 centrar-texto">Contacto</h1>
    <img src="img/otro1.jpg" alt="">

    <main class="seccion contenedor">
        <h3 class="fw-300 centrar-texto">Puedes contactarnos por...</h3>

        <div class="caja-contacto">
            <div class="icono-contacto wha">
                <a target="_blank" href="https://wa.me/5214493431377?text=Hola,%20me%20interesa%20alguno%20de%20los%20paquetes%20que%20ofreces"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div class="icono-contacto mess">
                <a target="_blank" href="https://www.instagram.com/strong_legend19/"><i class="fab fa-facebook-messenger"></i></a>
            </div>
            <div class="icono-contacto inst">
                <a target="_blank" href="https://www.instagram.com/strong_legend19/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <section class="contenedor seccion contenido-centrado">
            <h3 class="fw-300 centrar-texto">O puedes llenar el formulario de contacto...</h3>
     
            <form class="contacto" action="">

                <fieldset>
                   <legend>Información Personal</legend>
    
                   <label for="nombre">Nombre:</label>
                   <input type="text" id="nombre" placeholder="Tu Nombre">
    
                   <label for="procedencia">De donde nos contactas:</label>
                   <input type="text" id="procedencia" placeholder="Ciudad y/o Estado" required>
    
                   <label for="edad">Edad:</label>
                   <input type="number" id="edad" placeholder="Tu Edad" required>
    
                   <label for="correo">Correo:</label>
                   <input type="email" id="correo" placeholder="Tu Correo Electrónico" required>
                </fieldset>
    
                <input type="submit" value="Enviar" class="boton boton-negro">
           </form>
     
        </section>
    </main>

    <?php footerSe();?>
</body>
</html>