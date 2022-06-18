<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sicoin\models\Setor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="setor-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'nome')->textInput(['placeholder' => 'Nome do setor']) ?>
    </div>

    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'responsavel')->textInput(['placeholder' => 'Responsável pelo setor']) ?>
    </div>

    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'tipo')
            ->label('Selecione o tipo de acesso')
            ->dropDownList(
                ['Entrada/Saída', 'Entrada', 'Saída'],
                ['prompt' => 'Selecione o tipo do setor']
            ) ?>
    </div>

    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'cnpj')->textInput(['placeholder' => 'CNPJ']) ?>
    </div>

    <div class="form-group col-12 col-sm-6 col-lg-6">
        <?= Html::submitButton('Adicionar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>