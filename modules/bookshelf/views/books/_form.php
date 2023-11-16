<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\urls;

/** @var yii\web\View $this */
/** @var app\modules\bookshelf\models\Books $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Isbn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Genre')->dropDownList([
         'Poetry' => 'Poetry',
          'Drama' => 'Drama', 
          'Fiction' => 'Fiction',
           'Non-Fiction' => 'Non-Fiction', 
           'Historical' => 'Historical',
            'Thriller' => 'Thriller', ],
             ['prompt' => 'select genre']) ?>

    <?= $form->field($model, 'Summary')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Title_page')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'date_published')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
