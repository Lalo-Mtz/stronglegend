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
    <script src="https://kit.fontawesome.com/eefb3f6366.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        headerSe(1);
        $typeS = $_GET['type'];
        switch($typeS){
            case 'premium' :
                $des = 'Adquiere tu plan de entrenamiento diseñado especificamente para ti,
                ya sea gimnasio o casa, para que alcances tus objetivos, tomando en cuenta
                si tienes alguna incapasidad fisica, que sea necesario una adaptacion en tu 
                rutina de ejercicios.';
                $price = 550;
                $title = "Paquete Premium";
                $img = "img/entrenando.jpg";
            break;

            case 'nutritional' : 
                $des = 'Recibe tu plan alimenticio, adecuado y estructurado especificamente para ti,
                de acuerdo a tus objetivos de mantenimiento de peso, aumento de la masa muscular,
                reducción de tejido adiposo o mejora de hábitos.';
                $price = 350;
                $title = "Plan Nutricional";
                $img = "img/plan_a.jpg";
            break;

            case 'routine' :
                $des = 'Adquiere tu plan de entrenamiento diseñado especificamente para ti,
                ya sea gimnasio o casa, para que alcances tus objetivos, tomando en cuenta
                si tienes alguna incapasidad fisica, que sea necesario una adaptacion en tu 
                rutina de ejercicios.';
                $price = 250;
                $title = "Paquete Rutina";
                $img = "img/entrena.jpg";
            break;
        }
    ?>

    <?php
       echo "<h2 class='fw-300 centrar-texto'>$title</h2>";
    ?>

    <main class="seccion contenedor contenido-centrado">
        
        <div class="box-sale">
            <?php echo "<img src='$img'>"; ?>
            
            <?php echo "<p>$des</p>"; ?>

            <div class="centrar-texto iconos-sale">
                <i class="fas fa-dumbbell"></i>
                <i class="fas fa-fish"></i>
            </div>

            <?php echo "<p class='precio'>$ $price.00 mx</p>"; ?>

            <a href="#" class="boton d-block boton-negro">Adquirir</a>
        </div>
        
    </main>

    <?php footerSe();?>
</body>
</html>