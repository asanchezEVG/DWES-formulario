<!-- Alberto Sánchez Díaz -->
 
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Información enviada</title>
    </head>
    <body>
        <div id="datos">
            <h2>Datos del usuario</h2>
            <?php
                // foreach ($_GET as $indice => $valor) {
                //     echo '<p>' .$indice. ' : ' .$valor. '</p>';
                // }
                if(!empty($_GET['nombre']))
                    echo 'Nombre: '.$_GET['nombre'].'<br>';
                if(!empty($_GET['edad']))
                    echo 'Edad: '.$_GET['edad'].'<br>';
                if(!empty($_GET['email']))
                    echo 'Email: '.$_GET['email'].'<br>';
                if(isset($_GET['desastre']))
                    for ($i = 0; $i < count($_GET['desastre']); $i++)
                        echo 'Desastre natural: '.$_GET['desastre'][$i].'<br>';
                    // foreach ($_GET['desastre'] as $indice => $valor)
                    //     echo 'Desastre natural: '.$valor.'<br>';
                if(isset($_GET['medidas']))
                    echo 'Medida preventiva: '.$_GET['medidas'].'<br>';
                if(!empty($_GET['impacto']))
                    echo 'Opinión: '.$_GET['impacto'].'<br>';
                if(isset ($_GET['terminos']))
                    echo 'Términos: '.$_GET['terminos'].'<br>';
                if(isset ($_GET['informacion']))
                    echo 'Información: '.$_GET['informacion'].'<br>';
            ?>
            <a href="formulario.html" id="volver">Volver al formulario</a>
        </div>
    </body>
</html>
