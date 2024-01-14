
<!-- titre -->
<div class="text-center text-uppercase mt-5">
                <h4 class="fw-bold">VOS POTIONS FAVORITES</h4>
                <!-- 3 cards -->
                <!-- div grand-parent row-cols-3 = 3 colonnes /row-cols-md-3 format au dessus de la tablette = md= gros tel 3 colonnes -->
                <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 mx-0 mx-md-5">
                    
<!-- il faut indiquer quel dossier contenant les variable et valeur doit être appeler pour effectuer la boucle -->
<?php
include "data_php/tableaucards.php";

// pour chaques tableau de la variable cards tu récupères les valeurs 
foreach ($cards as $value) {
    // fait echo de la div html qui contient la card 
    // "Pokedoc/cards/ '. $value['title'] . '.jpg" =  l'image title n'est pas une variable de IMG 
    echo '<div class="col">
                   <div class="card border-0">
                            <img src="/cards/' . $value['title'] . '.jpg" class="card-img-top rounded-0" alt="potion">
                            <div class="card-body">
                        <p class="fw-bold">JEUDI 11 JANVIER</p>
                    <h4 class="card-title text-uppercase fw-bold"> ' . $value['title'] . '</h4>
        <p class ="card-text">' . $value['description'] . '</p>
        <p class="card-link2 fw-bold text-decoration-none text-black text-uppercase fs-4 position-relative">
        ' . $value['prix'] . '
        </p>
        </div>
       </div>
   </div>';
}
?>