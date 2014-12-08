<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \frontend\models\Members */
/* @var $form ActiveForm */
?>
<div class="MembersForm">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'firstname') ?>
        <?= $form->field($model, 'lastname') ?>
        <?= $form->field($model, 'birthday') ?>
        <?= $form->field($model, 'group_id') ?>
        <?= $form->field($model, 'status_id') ?>
        <?= $form->field($model, 'class_id') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'skypename') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- MembersForm -->
