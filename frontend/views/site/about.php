<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
$this->title = 'Об сайте';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
  <h1><?= Html::encode($this->title) ?></h1>

  <p>
    Сайт предназначен для просмотра данных о выпускниках
  </p>
</div>
