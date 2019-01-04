<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Forum */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="forum-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'topicid')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userid')->textInput() ?>

    <?= $form->field($model, 'questiontime')->textInput() ?>

    <?= $form->field($model, 'questionid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
