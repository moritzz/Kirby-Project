<?php $image_max_width = ($page->projects_image_max_width()->isEmpty()) ? 880 : $page->projects_image_max_width()->int() ?>

<h2><?= $page->projects_latest_heading()->html()->or('Latest Projects') ?></h2>

<ul class="teaser cf">
  <?php foreach($page->children()->visible()->sortBy('date', 'desc') as $project): ?>
  <li>
    <h3><a href="<?= $project->url() ?>"><?= $project->title()->html() ?></a></h3>
    <p><?= $project->text()->excerpt(160) ?> <a href="<?= $project->url() ?>"><?= $page->projects_more_link_text()->html()->or('Read&nbsp;More&nbsp;→') ?></a></p>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?= $project->url() ?>">
      <img src="<?= $image->resize($image_max_width)->url() ?>" alt="<?= $project->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
