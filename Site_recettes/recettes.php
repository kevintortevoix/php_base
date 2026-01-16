<?php include_once 'includes/header.php' ;?>
<?php require 'data/recettes.php' ;?> 

        <?php foreach ($recettes as $recette): ?> <!-- pour chaque recette qui se trouve dans recettes -->
            <div class="recette">
                <h4><?php echo $recette['titre']; ?></h4> <!-- Récupération titre -->
                <p>Temps : <?php echo $recette['temps']; ?></p> <!-- Récupération temps -->
                <p>Difficulté : <?php echo $recette['difficulte']; ?></p> <!-- Récupération diff. -->
                <ul>
                    <?php foreach ($recette['ingredients'] as $ingredient): ?> <!-- dans la recette spécifique, aller recup les ingredients -->
                        <li> <?php echo $ingredient; ?> </li> <!-- récupération de chaque ingredient  -->
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>