<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\tag\models\TagsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tag Listesi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tag-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tag_name',
            'tag_cat',
            'content',

            [  
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} ',
                        
            ],
        ],
    ]); ?>

        <ul>
        <div class="jumbotron">


        <?php foreach ($tags as $tag){?>  <li>
            <p class="lead">
        <?php echo $tag['tag_name']; ?> </p>p>
        </li>
        <?php } ?>
        </ul>
                </div>
</div>
