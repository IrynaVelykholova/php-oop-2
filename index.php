<?php
    require_once __DIR__ . '/db/prodotti.php';
    require_once __DIR__ . '/classi/Cani.php';
    require_once __DIR__ . '/classi/Gatti.php';
    require_once __DIR__ . '/classi/Cibo.php';
    require_once __DIR__ . '/classi/Gioco.php';
    require_once __DIR__ . '/classi/Cuccia.php';
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Oop2</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">

        <?php
        foreach ($cani as $prodotto) { ?>

            <div class="col-6">
                <div class="card">
                    <img src="<?php echo ($prodotto->getImmagine()) ?>" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title"><?php echo ($prodotto->getNome()) ?></h5>
                        <p class="card-text"><?php echo ($prodotto->getTipologia()) ?></p>
                        <p class="card-text"><?php echo ($prodotto->getPrezzo()) ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>


        </div>

        <div class="row">

            <?php
            foreach ($gatti as $prodotto) { ?>

                <div class="col-6">
                    <div class="card">
                        <img src="<?php echo ($prodotto->getImmagine()) ?>" class="card-img-top">

                        <div class="card-body">
                            <h5 class="card-title"><?php echo ($prodotto->getNome()) ?></h5>
                            <p class="card-text"><?php echo ($prodotto->getTipologia()) ?></p>
                            <p class="card-text"><?php echo ($prodotto->getPrezzo()) ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>