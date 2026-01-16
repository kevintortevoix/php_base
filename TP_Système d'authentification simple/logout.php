<?php 

session_start();
session_destroy();

header("Location: login.php");
exit;
?> 

















<!-- session_start();
➡️ Démarre la session pour pouvoir y accéder (obligatoire même pour la détruire). -->




<!-- session_destroy();
➡️ Supprime toutes les données de la session côté serveur
(l’utilisateur est donc déconnecté). -->



<!-- header("Location: login.php");
➡️ Redirige l’utilisateur vers la page login.php. -->


<!-- exit;
➡️ Arrête l’exécution du script pour éviter tout autre code après la redirection. -->