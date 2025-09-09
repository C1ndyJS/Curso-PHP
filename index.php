
<?php

use function PHPSTORM_META\type;

const API_URL = "https://whenisthenextmcufilm.com/api";
//  INicializamos una nueva sesion de CURL; ch = curl handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantallar 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/**
 * Ejecutamos la preticion y  
 * guardamos la respuesta en una variable
 */

// Una alternativa seria file_get_contents para consumir APIs
// $result = file_get_contents(API_URL);  SI solo quiere hacer GET

$result= curl_exec($ch);
$data = json_decode($result, true); //decodificamos el JSON a un array asociativo 

curl_close($ch); //cerramos la sesion de curl


?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>APi con PHP</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <style>
        /* Dark theme */
        body {
            background-color: #121212;
            color: #f5f5f5;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }

        h1 {
            color: #ff9800; /* naranja para que resalte */
            text-align: center;
        }

        pre {
            font-size: 12px;
            overflow: scroll;
            height: 200px;
            background-color: #1e1e1e;
            color: #00ffcc; /* cian */
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #333;
        }

        ul li strong {
            color: #ff4081; /* rosa para resaltar títulos */
        }

        img {
            border: 2px solid #13ff0d;
            border-radius: 16px;
        }
        </style>
    </head>
    <body >
        <main style="max-width: 800px; margin: auto;">
            <h1> La proxima <?php echo $data['type'] . " de Marvel es: <br>" . $data['title']; ?></h1>
            <pre> <?php print_r($data); ?></pre>
            <p>Esta es la información de la película:</p>
            <ul>
                <li><strong>Título:</strong> <?php echo $data['title']; ?></li>
                <li><strong>Fecha de estreno:</strong> <?php echo $data['release_date']; ?></li>
                <li><strong>Descripción:</strong> <?php echo $data['overview']; ?></li>
            </ul>
        
        <section>
            <img src="<?php echo $data['poster_url']; ?>" 
                height="550" width="800" alt="Poster de 
                <?php echo $data['title']; ?>" >
        </section>
        </main>
    </body>
</html>
