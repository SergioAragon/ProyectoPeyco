<?php
use yii\helpers\Html;
use backend\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */


if (Yii::$app->controller->action->id === 'login') { 
/**
 * Do not use this code in your template. Remove it. 
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'main-login',        
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    dmstr\web\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="<?= \dmstr\helpers\AdminLteHelper::skinClass() ?>">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render(
            'header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'left.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

        
    </div>

    <?php $this->endBody() ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $(function(){
        $('select').select2();
    })

$(function(){

    $(document).on('click','.fc-day', function(){
        var date = $(this).attr('data-date');

        $.get('<?=Yii::$app->homeUrl ?>event/index/create/'+ date, function(data){
            alert(data);
            $('#modal').modal('show')
            .find('#modalContent')
            .html(data);
            });

        });

        // get the click of the create button
        $('#modalButton').click(function(){
            $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
        });

    });


</script>
    </body>
    </html>
    <?php $this->endPage() ?>

<?php } ?>
