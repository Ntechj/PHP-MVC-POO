<?php foreach($pokemon as $mesPokemon) { ?>

        <article class="contenair">

            <h3><?= htmlspecialchars($mesPokemon['nom']); ?></h3>

            <p><?= htmlspecialchars($mesPokemon['type']); ?></p>

            <p><?= htmlspecialchars($mesPokemon['niveau']); ?></p>

        </article>    

  <?php }; ?>



