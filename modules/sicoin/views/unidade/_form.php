<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sicoin\models\Unidade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unidade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Adicionar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
