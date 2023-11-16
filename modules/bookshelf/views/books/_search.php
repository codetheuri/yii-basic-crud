<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\bookshelf\models\BooksSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="books-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Isbn') ?>

    <?= $form->field($model, 'Title') ?>

    <?= $form->field($model, 'Author') ?>

    <?= $form->field($model, 'Genre') ?>

    <?= $form->field($model, 'Summary') ?>

    <?php // echo $form->field($model, 'Title_page') ?>

    <?php // echo $form->field($model, 'date_published') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
