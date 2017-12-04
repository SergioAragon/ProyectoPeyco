<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\yii2fullcalendar\yii2fullcalendar;
use yii\jui\JuiAsset;
use yii\jui\Dialog;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eventos';
$this->params['breadcrumbs'][] = $this->title;
?>

        <link rel="stylesheet" href="css/fullcalendar.css">
        <script src="js/moment.min.js" ></script>
        <script src="js/jquery.min.js" ></script>
        <script src="js/fullcalendar.js" ></script>
        <script>
            $(document).ready(function() {
           // page is now ready, initialize the calendar...

                // $('#calendar').fullCalendar({
                        // put your options and callbacks here

                
                        $('#calendar').fullCalendar({
    // dayClick: function(date, jsEvent, view, resourceObj) {
        dayClick: function(date) {
        alert('Date: ' + date.format());
        // alert('Resource ID: ' + resourceObj.id);

    }
});

//     dayClick: function() {
//         alert('a day has been clicked!');
//     }
// });

//                         // })

                     });
            </script>


<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p><?= Html::a('Registrar Evento', ['create'], ['class' => 'btn btn-success']) ?></p>

    <div id="calendar">
        <!-- <script>
            $(document).ready(function() {

                    // page is now ready, initialize the calendar...

                    $('#calendar').fullCalendar({
                        // put your options and callbacks here
                    })

                });
        </script> -->
    

    <!--?php 
        Modal::begin([
                'header' => '<h4>Event</h4>',
                'id' => 'modal',
                'size' => 'modal-lg',
        ]);
        echo "<div id='modalContent'></div>";
        Modal::end();
     ?-->

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

</div>
