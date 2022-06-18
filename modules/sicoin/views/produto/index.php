<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\modules\sicoin\models\Produto;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\sicoin\models\ProdutoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Adicionar Produto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'descricao:ntext',
            'estoque',
            [
                'attribute' => 'unidade_id',
                'label' => 'Unidade de medida',
                'value' => 'unidade.tipo'
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Produto $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>