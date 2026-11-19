<?php

/*================================================
            Carte Personnage
=================================================*/

 foreach ($carte_Perso as $personnage) { ?>
    
    <article class="contenairPerso">

    <h3>
        <?= htmlspecialchars ($personnage['nom']) ?>
    </h3>

    <p>
        <?= htmlspecialchars ($personnage['race'] .' '. $personnage['puissance arc namek']) ?>   
    </p>


</article>        

    <?php   }; ?>

