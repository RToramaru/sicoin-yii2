<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\sicoin\models\Setor */

$this->title = 'Adicionar Setor';
$this->params['breadcrumbs'][] = ['label' => 'Setors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
