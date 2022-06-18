<?php

use app\modules\sicoin\models\Unidade;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sicoin\models\Produto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'descricao')->textInput(['placeholder' => 'Descrição do produto']) ?>
    </div>

    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'estoque')->textInput(['placeholder' => 'Quantidade em estoque']) ?>
    </div>

    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'unidade_id')
            ->label('Unidade')
            ->dropDownList(
                ArrayHelper::map(
                    Unidade::find()->all(), 'id', 'tipo'
                ),
                ['prompt' => 'Selecione a unidade de medida']
            ) ?>
    </div>


    <div class="form-group col-12 col-sm-6 col-lg-6">
        <?= Html::submitButton('Adicionar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>