<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
  <h1><?= Html::encode($this->title) ?></h1>
  <p class="container">
    <div class="row">Свяжитесь с нами, используя приведенные ниже контактные данные:</div>
    <div class="col-3">
    Адрес:г.Ангарск,ул.Ленина,д.15
    Телефон:+7-(3955)-123-45-65
    Email:info@angpolytech.ru
  </div>

  Мы будем рады ответить на ваши вопросы в рабочее время: с 9:00 до 18:00 (понедельник - пятница).
  </p>
</div>
