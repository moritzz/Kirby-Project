<?php 

// =======================
// = Component Registery =
// =======================

$kirby->set('template', 'projects', __DIR__ . '/templates/projects.php');
$kirby->set('template', 'project', __DIR__ . '/templates/project.php');
$kirby->set('blueprint', 'projects', __DIR__ . '/blueprints/projects.php');
$kirby->set('blueprint', 'project', __DIR__ . '/blueprints/project.php');
$kirby->set('snippet', 'projects', __DIR__ . '/snippets/projects.php');

// ===================
// = Model Registery =
// ===================

# require_once(__DIR__ . '/models/LinkPage.php');
# $kirby->set('page::model', 'link', 'LinkPage');

