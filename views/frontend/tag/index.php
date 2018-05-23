<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel kouosl\tag\models\TagsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'POSTS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
 <div class="col-md-9 auto-fixed">

    <h1><?= Html::encode($this->title) ?></h1>
       <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

      <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        ]); ?>
       <?php foreach ($tags as $tag)
     {?> 
        <div class="panel panel-default">
          <div class="panel-heading">

                <h3 class="panel-title"><?php echo $tag['title'] ; ?></h3>
                <h5 style="text-align:right;"><?php echo $tag['tag_name'] ; ?> </h5>
              </div>
              <div class="panel-body">
                  <?php echo $tag['content'] ; ?>

                     </div>
                      <br/>

                      </div><?php } ?>
<?php ActiveForm::end(); ?>

</div>

<div class="col-md-3 fixed">

<?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
]); ?>
<h3>Search a Tag!</h3>
<?= $form->field($searchModel, 'tag_name') ?>

<div class="form-group">
<?= Html::submitButton('GO!', ['class' => 'btn btn-primary']) ?>
<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
</div>

<?php ActiveForm::end(); ?>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
           'tag_name',
           [  
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} ',
        ],
        ],
    ]); ?>


<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
           'tag_cat',
           [  
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} ',
        ],
        ],
    ]); ?>

</div>

</div>