<?php 

    require __DIR__ . '/db/database.php';

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

        <title>Dischi-php</title>
    </head>
    <body>
        <?php include __DIR__ . '/partials/header.php'; ?>
        
        <section>
            <div class="container">
                <?php foreach ($dischi as $disco) { ?>
                    <div class="cards">
                        <div class="card">
                            <img src=<?= $disco["poster"]; ?> alt="poster">
                            <h3><?= $disco["title"]; ?>
                            </h3>
                            <h4><?= $disco["author"]; ?></h4>                
                            <h4><?= $disco["year"]; ?></h4>                
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>

    </body>
</html>