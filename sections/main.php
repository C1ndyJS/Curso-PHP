<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>API con PHP</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <?php require 'style.php'; ?>
      
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
                <li><strong>Días para el estreno:</strong> <?php echo $data['days_until'] . " días. " . $until_message; ?></li>
                <li><strong>Tipo:</strong> <?php echo $data['type']; ?></li>
                <li><strong>URL del póster:</strong> <a href="<?php echo $data['poster_url']; ?>" target="_blank">Ver póster</a></li>
            </ul>
        
        <section>
            <img src="<?php echo $data['poster_url']; ?>" 
                height="550" width="800" alt="Poster de 
                <?php echo $data['title']; ?>" >
        </section>
        </main>
    </body>
    <footer></footer>
        <p>&copy; <?php echo date("Y"); ?> Mi Sitio Marvel Cindy Jimenez. Todos los derechos reservados.</p>
    </footer>
</html>
