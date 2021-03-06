<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pedido */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedido-form">

    <div class="row">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-sm-6"><?= $form->field($model, 'cliente_id')->textInput() ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'nombre_expo')->textInput(['maxlength' => true]) ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'nombre_empresa')->textInput(['maxlength' => true]) ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'frente')->textInput() ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'fondo')->textInput() ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'Referencia_stand')->textInput(['maxlength' => true]) ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'cantidad_stand')->textInput() ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?></div>

    <!--?= $form->field($model, 'fecha_pedido')->textInput() ?-->

    <div class="col-sm-6"><?= $form->field($model, 'telefono')->textInput() ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'municipio_id')->textInput() ?></div>

    <div class="col-sm-6"><?= $form->field($model, 'estado_id')->textInput() ?></div>

    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    

</div>
