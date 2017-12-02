<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\db\Expression;

$this->title = 'Reporte Pedidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reporte-pedidos">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php
		$query = (new \yii\db\Query())
		    ->select('id_pedido,user.nombres,user.apellidos,fecha_pedido')
		    ->from('pedido')
		    ->innerjoin('user','user.id=cliente_id')
		    ->where(['between','fecha_pedido','new Expression(DATE_SUB(NOW(), INTERVAL 1 MONTH)',new Expression('now()')])
		    ->andwhere('estado_id=1');
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
		                // echo $var1=implode($value);

		               }
		               ?>

		                              <h2>Listado de productos</h2>
		<table border="1" class="table">
		 <tr><th>Codigo del pedido</th><th>nombre</th><th>apellido</th><th>Fecha</th></tr>
		 <?php $cont = 0; ?>
		 <?php  foreach ($rows as $col) { ?>
		   <tr><td><?php echo $Codigo=$rows[$cont]["id_pedido"] ?></td>
		   <td><?php echo $nombre=$rows[$cont]["nombres"] ?></td>
		   <td><?php echo $apellido=$rows[$cont]["apellidos"] ?></td>
		   <td><?php echo $Fecha=$rows[$cont]["fecha_pedido"] ?></td>
		    </tr>
		 <?php $cont++;} ?>
		</table>
     

</div>
