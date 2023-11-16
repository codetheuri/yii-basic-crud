<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\bookshelf\models\Books $model */

$this->title = 'Update Books: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'Isbn' => $model->Isbn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="books-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
