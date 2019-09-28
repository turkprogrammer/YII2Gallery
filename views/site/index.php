<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;

$this->title = 'YII2 Gallery';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php shuffle($files); ?>
                    <?php if($this->beginCache('files', ['duration' => 3600])):?>
                    <?php foreach ($files as $file): ?>                    
                        <?php Pjax::begin(); ?>
                        <div class="col-md-4 col-sm-4 col-xs-12 thumb ">
                            <a data-fancybox="gallery"  href="/<?php echo $file ?>">
                                <img class="img-responsive " src="/<?php echo $file ?>" alt="">
                            </a>
                        </div>
                        <?php Pjax::end(); ?>
                        <?php $i++; ?>
                        <?php if ($i % 3 == 0): ?>
                            <div class="clearfix"></div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                            <?php $this->endCache(); endif; ?>
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
