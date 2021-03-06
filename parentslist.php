<?php

require 'vendor/autoload.php';
$app = new App('public');

$button_back = $app->add(['Button','Назад','big primary','icon'=>'home'])
->link(['teachers']);

$button_back = $app->add(['Button','Обратно на главную страницу','big primary','icon'=>'home'])
->link(['index']);

$app->add(['ui'=>'divider']);

$teacher=new Model\Teacher($app->db);
$teacher->load($app->stickyGet('id'));
$parents= $teacher->ref('Vecaki');
$parents->setOrder('parent_name');
$grid = $app->add('Grid');
$grid->setModel($parents);
