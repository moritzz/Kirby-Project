<?php snippet('header') ?>
  
  <?= css('/assets/plugins/project/css/project.css') ?>
  
  <main class="main" role="main">

    <div class="text">
      <h1><?= $page->title()->html() ?></h1>
      <?= $page->text()->kirbytext() ?>
    </div>

    <hr>

    <?php snippet('projects') ?>

  </main>

<?php snippet('footer') ?>