<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\sicoin\models\Produto */

$this->title = 'Adicionar Produto';
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
