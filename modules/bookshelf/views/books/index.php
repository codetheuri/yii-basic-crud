<?php

use app\modules\bookshelf\models\Books;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap5\Modal;

/** @var yii\web\View $this */
/** @var app\modules\bookshelf\models\BooksSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Books in the Shelf';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add other Books', ['create'], ['class' => 'btn btn-success']) ?>
      
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions'=>function($model){
            if($model->Genre == 'Poetry'){
                return ['class'=>'text-bg-light '];
            }else if($model->Genre == 'Fiction'){
                return ['class'=>'text-bg-primary'];
            }
             else if($model->Genre == 'Non-Fiction'){
                return ['class'=>'text-bg-success'];
        }
           else if($model->Genre == 'Drama'){
                return ['class'=>'text-bg-warning'];
            }else if($model->Genre == 'Historical'){
                return ['class'=>'text-bg-danger'];
        } else if($model->Genre == 'Thriller'){
                return ['class'=>'text-bg-info'];
     }},
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Isbn',
            'Title',
            'Author',
            'Genre',
            // 'Summary:ntext',
            // 'Title_page',
            // 'date_published',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Books $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Isbn' => $model->Isbn]);
                 }
            ],
        ],
    ]); ?>


</div>
