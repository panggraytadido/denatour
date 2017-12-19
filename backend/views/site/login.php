<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

backend\assets\LoginAsset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/themes/traveler/assets');		

?>

    <h3 class="mb15"><?= Html::encode($this->title) ?></h3>

    <p>Please fill out the following fields to login:</p>

    
            <?php $form = ActiveForm::begin(['id' => '']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class'=>'form-control']) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?php //echo $form->field($model, 'rememberMe')->checkbox() ?>

                
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                

            <?php ActiveForm::end(); ?>
      

