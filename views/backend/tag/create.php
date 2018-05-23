<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\tag\models\Tag */

$this->title = 'Create Post';
$this->params['breadcrumbs'][] = ['label' => 'Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tag-create col-md-8" style="font-size:18px;">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
