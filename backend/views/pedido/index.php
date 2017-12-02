<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PedidoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pedidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedido-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Pedido', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){
            if ($model->estado_id=='2') {
                return['class'=>'danger'];

            }elseif ($model->estado_id=='1') {
                return['class'=>'success'];
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pedido',
            'cliente_id',
            'nombre_expo',
            'nombre_empresa',
            'frente',
            // 'fondo',
            // 'Referencia_stand',
            // 'cantidad_stand',
            // 'direccion',
            // 'fecha_pedido',
            // 'telefono',
            // 'municipio_id',
            // 'estado_id',

            // ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',               
                'template' => '{view} {update} {desactiv}',
                'buttons' => [
                    'desactiv' => function ($url, $model) {
                        if ($model->estado_id == 1){
                            return Html::a('<span class="glyphicon glyphicon-thumbs-down"></span>', $url,
                                [
                                    'title' => Yii::t('app', 'Desactivar'),
                                    'data-confirm' => Yii::t('yii', 'Esta seguro que quiere Desactivar este Usuario?'),
                                ]);
                        } else {
                            return Html::a('<span class="glyphicon glyphicon-thumbs-up"></span>', $url,
                                [
                                    'title' => Yii::t('app', 'Activar'),
                                    'data-confirm' => Yii::t('yii', 'Esta seguro que quiere Activar este Usuario?'),
                                ]);
                        }
                    }
                ]
            ],
        ],
    ]); ?>
</div>
