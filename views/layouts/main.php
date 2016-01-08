<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    $zakaz = "XY"; //название файла, ID
    NavBar::begin(
        [
            'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]
    );

    ActiveForm::begin([
        'action' => ['main/stop'],
        'method' => 'post',
        'options' =>
        ['class' => 'navbar-form navbar-left']
    ]);

        echo Html::label(
             'Ведется работа над заказом '.$zakaz,
             null,
              ['class' => 'label label-default']
        );

        echo Html::button(
             'Стоп',
            [
                'class' => 'btn btn-info'
            ]
            );

    ActiveForm::end();


    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
           // ['label' => 'Ведется работа над заказом'],
         //   ['label' => 'About', 'url' => ['/site/about']],
         //   ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']] :
                [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();



    /*
// ' кнопка "Остановить'
                                                    ActiveForm::begin([
                                                        'action' => ['main/stop'],
                                                        'method' => 'post',
                                                        'options' =>
                                                        ['class' => 'navbar-form navbar-left']
                                                    ]);

  //  echo '<div class="input-group">';
    echo Html::label(
        $content = 'Ведется работа над заказом '.$zakaz
      /*  [ Нужно узменить цвет
            'class' => 'label'
        ]*
        );


    echo Html::button(
        $content = 'Стоп',
        [
            'class' => 'btn btn-info'
        ]
        );


                                            ActiveForm::end();
/*
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
           // ['label' => 'Ведется работа над заказом'],
         //   ['label' => 'About', 'url' => ['/site/about']],
         //   ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']] :
                [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
 /*   echo Button::widget([
        'label' => 'Action',
        'options' => ['class' => 'btn-lg'],
    ]);
    NavBar::end();*/
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My ss Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
