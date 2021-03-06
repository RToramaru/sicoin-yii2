<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\sicoin\models\Setor */

$this->title = 'Atualizar Setor: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Setors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="setor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
