 <?php 
use yii\helpers\Html; 
use yii\bootstrap\Modal;
// use yii\apidoc\templates\pdf\GuideRenderer;

  ?>

<div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                
                               <li><a href="<?=Yii::$app->homeUrl?>" class="active">inicio</a></li>
                                <li class="dropdown"><a href="#">Productos<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        
                                        <li><?=Html::a('Products', ['/site/shop'] ) ?> </li>
                                        <li><a href="product-details.php">Productos Detalles</a></li> 
                                        
                                        <li><?=Html::a('Cart', ['/site/cart'], ['class'=>"fa fa-shopping-cart"] ) ?> </li>
                                        <li><?=Html::a('Login', ['/site/login'] ) ?> </li>
                                        
                                    </ul>
                                </li> 
                                
                                <li><?=Html::a('Compras', ['/site/cart'], ['class'=>"fa fa-shopping-cart"] ) ?> </li>
                                <li><?=Html::a('Contacto', ['/site/contact'] ) ?> </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <!-- <div class="navbar pull-left">
                            
                            <!php Modal::begin([
                                        'header' => 'Help',
                                        'toggleButton' => ['label' => 'Ayuda'],
                                    ]);
                                    echo 'Say help...';
                                    Modal::end();
                                    ?-->
                        </div>
                        <div class="search_box pull-right">
                            <!-- <input type="text" placeholder="Ayuda"/> -->
                            <!--?=Html::a('Ayuda', ['/archivos/ayudausuarios'] target("_blank") )  ?-->
                            <a href="<?=Yii::$app->homeUrl ?>archivos/ayudausuarios" target="_blank">Ayuda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->