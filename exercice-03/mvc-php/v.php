<?php 

foreach($spellWow as $wow) { ?>

    <article class="contenair-wow">

        <p>

            <?= htmlspecialchars($wow['competence']); ?>
           - <?= htmlspecialchars($wow['classe']); ?>
           - <?= htmlspecialchars($wow['type']); ?>

        </p>

    </article>

<?php } ; ?>