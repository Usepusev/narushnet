<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Report $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="report-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php
    if ($isAdmin) {
        echo $form->field($model, 'status_id')->dropDownList([
            1=>'Новое',
            2=>'Подтверждено',
            3=>'Отклонено'
        ]);
    }
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
