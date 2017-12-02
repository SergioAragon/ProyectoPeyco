<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Reporte Color';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reporte-color">
    <h1><?= Html::encode($this->title) ?></h1>
    

    <?php
        $query = (new \yii\db\Query())
            ->select('nombre,cantidad')
            ->from('detalle_producto_color')
            ->leftjoin('color','color.id_color=color_id')
            ->where('cantidad=0');
        // Crea un commando
        $command = $query->createCommand();
        // Ejecuta el commando
        $rows = $command->queryAll();
                       // print_r($rows);
                       foreach ($rows as $col=>$value) {

                           //print_r($value);
                           //echo '<br>';
                           //echo implode($value);
                           //implode(glue, pieces)
                        echo $var1=implode($value);

                       }
                       ?>

                       <h2>Listado de productos</h2>
        <table border="1" class="table">
         <tr><th>Nombre</th><th>unidades</th></tr>
         <?php $cont = 0; ?>
         <?php  foreach ($rows as $col) { ?>         
           <tr><td><?php echo $nombre=$rows[$cont]["nombre"] ?></td>
           <td><?php echo $unidades=$rows[$cont]["cantidad"] ?></td>
            </tr>
         <?php $cont++;} ?>
        </table>

    <!--?= GridView::widget([        
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dpc',
            'producto_id',
            'color_id',
            'cantidad',
            'estado_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?-->
  

</div>
