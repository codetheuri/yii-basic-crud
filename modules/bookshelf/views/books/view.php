<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\bookshelf\models\Books $model */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="books-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Isbn' => $model->Isbn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Isbn' => $model->Isbn], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Isbn',
            'Title',
            'Author',
            'Genre',
            'Summary:ntext',
            'Title_page',
            'date_published',
        ],
    ]) ?>

</div>
