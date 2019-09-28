<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'My Yii Application';
?>
<div class="site-index">



    <div class="body-content">

        <h2 class="h2 text-center">YII2 +Bootstrap 3 - Создание адаптивной галереи изображений с помощью сетки</h2>

        <div class="row">

            <div class="panel panel-default">
                <div class="panel-body">
<?php   foreach ($files as $file): ?>

                        <div class="col-md-4 col-sm-4 col-xs-12 thumb">
                            <a data-fancybox="gallery"  href="/<?php echo $file ?>">
                                <img class="img-responsive" src="/<?php echo $file ?>" alt="">
                            </a>
                        </div>


                        <?php $i++; ?>
                        <?php if ($i % 3 == 0): ?>
                            <div class="clearfix"></div>
                        <?php endif; ?>
<?php endforeach; ?>
                </div>
            </div>



            <?php
            echo yii\grid\GridView::widget([
                'dataProvider' => $provider,
            ]);
            ?>

        </div>

    </div>
</div>
