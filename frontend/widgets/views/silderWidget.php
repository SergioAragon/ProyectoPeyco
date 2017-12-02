  <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>P</span>-&CO</h1>
                                    <h2>Diseño y producción de stands</h2>
                                    <p>Regístrese y realice su pedido. </p>
                                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                                </div>
                                <div class="col-sm-6">
                                    
                                    <img src="/peyco/backend/web/img/stand.jpg" class="girl img-responsive" alt="mesa" />
                                </div>
                            </div>

                                              <?php
                                            
                                                           
                                               foreach ($data as $key => $value) {
                                                    ?>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-PE&CO</h1>
                                    <h2>PE&CO Diseño de Stands</h2>
                                    <p>Realizamos el diseño a su medida. </p>
                                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?= '/peyco/backend/web/img/'.$value['imag_adju']  ?>" alt="" class="img-rounded" height="300" width="300">
                                </div>                                
                            </div>

                            <?php } ?>

                                                        
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->