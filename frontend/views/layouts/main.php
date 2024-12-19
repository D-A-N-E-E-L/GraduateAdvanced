<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/img/spongebob.gif')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100" id="body">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => 'Slaves University',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bgn fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная страница', 'url' => ['/site/index']],
        ['label' => 'Об сайте', 'url' => ['/site/about']],
        ['label' => 'Контакты', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
    }else{
        $menuItems[] = ['label' => 'Данные', 'url' => ['/site/tables']];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
        'items' => $menuItems,
    ]);
    if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('Вход в аккаунт',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
    } else {
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                'Выйти из аккаунта (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout text-decoration-none']
            )
            . Html::endForm();
    }
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 bg">
    <div class="container">
        <p class="float-start">&copy;NiggersEntertainment <?= date('Y') ?></p>
      <p class="float-end">Powered by <a id="secret">WaterlessNigga</a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
<script>
  var g = true;
  let body = document.getElementById('body');
  let secret = document.getElementById('secret');
  secret.style.cursor = 'help';
  audio = new Audio('img/Techy Chan, INFYNITE, techno rave - Astronomia (Coffin Dance).mp3');
  secret.addEventListener('click', function(e) {
    if (g){
      body.setAttribute('style','background: url("img/toothless-dancing.gif"); background-size: 50% 50%; animation: gradient 0s')
      g = false
      audio.play()
    }else {
      body.setAttribute('style', 'background: linear-gradient(135deg, rgb(255, 0, 0), rgb(2, 2, 2)50%, rgb(0, 32, 255));background-size: 500% 500%;animation: gradient 20s ease infinite;')
      g = true
      audio.pause()
    }
  })
</script>
</html>
<?php $this->endPage();
