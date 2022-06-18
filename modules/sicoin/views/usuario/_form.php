<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\modules\sicoin\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'nome')->textInput(['placeholder' => 'Nome']) ?>
    </div>

    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'endereco')->textInput(['placeholder' => 'Endereço']) ?>
    </div>


    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'telefone')->widget(MaskedInput::class, [
            'mask' => '(99)9 9999-9999',
            'name' => 'telefone',
        ]) ?>
    </div>

    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'tipo')
            ->label('Selecione o tipo de acesso')
            ->dropDownList(['Padrão', 'Administrador'],
            ['prompt' => 'Selecione o tipo de acesso']) ?>
    </div>

    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'usuario')->textInput(['placeholder' => 'Nome de usuário']) ?>
    </div>

    <div class="col-12 col-sm-6 col-lg-6">
        <?= $form->field($model, 'senha')->passwordInput(['placeholder' => 'Senha']) ?>
    </div>


    <div class="form-group col-12 col-sm-6 col-lg-6">
        <?= Html::submitButton('Adicionar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>