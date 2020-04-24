<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'НАШ ПРОФСОЮЗ',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-inverse navbar-fixed-top',],
		'brandLabel' => /*'<img src="img/logo.png" style="display:inline;
		vertical-align: top; height:129px;">ПОРТАЛ МИВЦ',*/
    '<img src="img/logo.png" style="display:inline;
   vertical-align: top; height:40px; margin-top:-10px; margin-right:20px"ж>Портал МИВЦ',


    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
			['label' => 'ГЛАВНАЯ', 'url' => ['/site/index']],
            /*['label' => 'САНАТОРИИ', 'url' => ['/site/vacations']],*/
            ['label' => 'СПОРТИВНЫЙ КЛУБ', 'url' => ['/site/vacations']],
            ['label' => 'ГАЛЕРЕЯ', 'url' => ['/site/gallery']],
            ['label' => 'КОНТАКТЫ', 'url' => ['/site/contact']],
        ],
    ]);
    NavBar::end();
    ?>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; МИВЦ <?= date('Y') ?></p>

    </div>
</footer>
<?php Modal::begin([
    'id' => 'myModal',
    'size' => 'modal-sm',
]);

Modal::end(); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
