<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\tag\models\TagsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'POSTS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-index" style="width:500px;">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn'],
            'id',
            'title',
            'tag_name',
            'tag_cat',
            'content',
           
        ],
        'options' => [ 'style' => 'width:1130px;' ]
    ]); ?>
    
    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-lg btn-primary']) ?>
    </p>


</div>
