<?php
use yii\helpers\Html;

\frontend\web\template\healthgreen\HealthGreenAssets::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
    <meta name="keywords" content="<?= Html::encode(Yii::$app->params['keywords']) ?>" />
    <meta name="google-site-verification" content="a2f3_l9hmAcTyeS1zRCJaa2jFjFxA8pbepKYu1se9LQ" />    <meta name="description" content="<?= Html::encode(Yii::$app->params['description']) ?>" />
    <meta name="author" content="panda cms">
    <title><?=$this->title?></title>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <?php $this->head() ?>
</head><!--/head-->

<body id="page-top" data-spy="scroll" data-target=".navbar">
<?php $this->beginBody() ?>

<?= $this->render('header.php') ?>

<?= $content ?>

<?= $this->render('footer.php') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
