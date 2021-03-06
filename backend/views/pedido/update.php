<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pedido */

$this->title = 'Actualizar Pedido: ' . $model->id_pedido;
$this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pedido, 'url' => ['view', 'id' => $model->id_pedido]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedido-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
