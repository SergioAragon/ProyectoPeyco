<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eventos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p><?= Html::a('Registrar Evento', ['create'], ['class' => 'btn btn-success']) ?></p>

    <?php 
        Modal::begin([
                'header' => '<h4>Event</h4>',
                'id' => 'modal',
                'size' => 'modal-lg',
        ]);
        echo "<div id='modalContent'></div>";
        Modal::end();
     ?>

    <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
      'events'=> $events,
      ));
      ?>

    <!--?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description',
            'created_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?-->

</div>
