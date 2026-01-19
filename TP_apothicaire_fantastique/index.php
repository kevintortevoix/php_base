<?php

require "Item.php";

$item1 = new Item("Épée d’acier de Géralt", 1500, "epee_en_acier.webp", "Epée utilisée contre les humains et les animaux.");

$item2 = new Item("Épée d’argent de Géralt", 1360, "epee_en_argent.webp", "Epée utilisée contre les monstres et créatures surnaturelles.");

$item3 = new Item("Potion de Chat", 300, "Potion_chat.webp", "Permet de voir dans l'obscurité absolue.");

$item4 = new Item("Etoile dansante", 50, "bombe.webp", "Bombe. Explose au contact du feu.");


$catalogue = [$item1, $item2, $item3, $item4];

function calculerValeurTotale(array $items)
{
    $total = 0;
    foreach ($items as $item) {
        $total += $item->getPrix();
    }
    return $total;
}

$valeurTotale = calculerValeurTotale($catalogue);

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kingdom PHP</title>
</head>

<body>
    <div class="container">

        <h1>Bienvenue chez l'apothicaire fantastique ! </h1>

        <div class="stock_info">
            <h2>Valeur totale du stock :
                <?= $valeurTotale ?> pièces d'or</h2>
        </div>

        <div class="container_item">

            <?php foreach ($catalogue as $item): ?>
                <div class="card">
                    <img src="<?= ($item->getImage()); ?>" alt=" <?= ($item->getNom()); ?> ">

                    <div class="card-body">
                        <div class="card-name"> <?= ($item->getNom()); ?> </div>
                        <div class="card-description"> <?= ($item->getDescription()); ?></div>
                    </div>

                    <div class="card-price">
                        Prix : <?= ($item->getPrix()); ?> pièces d'or
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>