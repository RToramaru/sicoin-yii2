<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\sicoin\models\Usuario */

$this->title = 'Criar Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>