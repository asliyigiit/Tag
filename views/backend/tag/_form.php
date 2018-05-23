<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\tag\models\Tag */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
<div class="tag-form ">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'tag_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tag_cat')->textInput() ?>

    <?= $form->field($model, 'content')->textArea() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
