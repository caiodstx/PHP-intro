<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
</head>
<body>
    <main>
        <h1>1. HTML list with PHP array</h1>
            <?php $cars = array("Alpha Romeo", "Bugatti", "Ferrari", "Lamborghini"); ?>
            <h4>Car Brands:</h4>
                <ul>
                    
                    <?php
                    echo "
                        <li>" . $cars[0] ."</li>
                        <li>" . $cars[1] . "</li>
                        <li>" . $cars[2] . "</li>";
                    ?>

                </ul>
        <h1>2. A form with a text imput, radio imput and a select.</h1>
    </main>
</body>
</html>