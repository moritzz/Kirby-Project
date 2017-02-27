<?php snippet('header') ?>
  
  <?php $image_max_width = ($page->parent()->projects_image_max_width()->isEmpty()) ? 880 : $page->parent()->projects_image_max_width()->int() ?>
  
  <?= css('/assets/plugins/project/css/project.css') ?>
  
  <main class="main" role="main">

    <h1><?= $page->title()->html() ?></h1>

    <ul class="meta cf">
      <li><b><?= $page->parent()->project_date_label()->html()->or('Date') ?>:</b> <time datetime="<?= strftime('%Y-%m-%dT%H:%M:%S', $page->date()) ?>"><?= strftime('%d.%m.%y', $page->date()) ?></time></li>
      <li><b><?= $page->parent()->project_tags_label()->html()->or('Tags') ?>:</b> <?= $page->tags() ?></li>
    </ul>

    <div class="text">
      <?= $page->text()->kirbytext() ?>

      <?php if($page->append_images()->bool()): ?>
          <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
          <figure>
            <img src="<?= $image->resize($image_max_width)->url() ?>" alt="<?= $page->title()->html() ?>">
          </figure>
          <?php endforeach ?>
      <?php endif ?>
    </div>

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?= $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?= $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>

  </main>

<?php snippet('footer') ?>
