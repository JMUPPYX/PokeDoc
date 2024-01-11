<!-- lien include tableau -->
<?php include 'include/carrouseltableau.php'; ?>
<?php

// BOUCLE slider : ne pas mettre la div avec la classe active mais à partir de la deuxieme div effectuer la boucle 
foreach ($carrousel as $value) {
    echo '<div class="carousel-item">
    <img src="/slider/' . $value['titre'] . '.jpg" class="d-block w-100 img-fluide" alt="...">
    </div>';
}
?>