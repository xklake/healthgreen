<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->registerCssFile('@web/css/login.css', ['depends' => [\frontend\assets\UikitAsset::className(), \yii\authclient\widgets\AuthChoiceAsset::className()]]);

$this->title = Yii::t('app', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>

<div id='main' class='uk-grid uk-grid-margin uk-margin-large-bottom'>
    <div class="uk-vertical-align uk-text-center uk-height-1-1 uk-container-center">
        <div class="uk-vertical-align-middle uk-align-center uk-margin-large-top" style="width: 260px;">
            <?php $form = ActiveForm::begin(['id' => 'login-nala-form', 'options' => ['class'=> 'uk-panel uk-panel-box uk-form']]); ?>
                <div class='uk-form-row'>
                    <span class='uk-text-primary uk-text-large uk-text-center'> 登录
                    </span>
                </div>

                <div class="uk-form-row">
                    <?= Html::activeTextInput($model, 'username', ['class' => 'uk-width-1-1', 'placeholder' => "用户名"]) ?>
                </div>

                <div class="uk-form-row">
                    <?= Html::activePasswordInput($model, 'password', ['class' => 'uk-width-1-1', 'placeholder' => "密码"]) ?>
                </div>

                <div class="uk-form-row">
                    <?= Html::submitButton( Yii::t('app', 'Login'), ['class' => 'uk-width-1-1 uk-button uk-button-danger', 'name' => 'login-button']) ?>
                </div>

                <div class="uk-form-row uk-text-small">
                    <label class="uk-float-left">
                        <?= Html::activeCheckbox($model, 'rememberMe', ['class' => "remember-me"]) ?>
                    </label>
                    <a class="uk-float-right uk-link uk-link-muted" href="<?= Yii::$app->urlManager->createUrl(['site/request-password-reset']) ?>">忘记密码?</a>
                </div>

                <!--div class='uk-form-row uk-text-small'>
                    <div class='uk-width-1-1 uk-text-left'> 
                        <span class='uk-text-success uk-text-left'>使用第三方帐号登录</span>
                    </div>

                    <?=
                        yii\authclient\widgets\AuthChoice::widget([
                            'baseAuthUrl' => ['site/auth'],
                            'popupMode' => false,
                        ])
                    ?>
                </div-->
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
