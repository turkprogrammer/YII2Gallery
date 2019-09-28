<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>"
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <style>
            .thumb img {
                -webkit-filter: grayscale(0);
                filter: none;
                border-radius: 5px;
                background-color: #fff;
                border: 1px solid #ddd;
                padding: 5px;
            }

            .thumb img:hover {
                -webkit-filter: grayscale(1);
                filter: grayscale(1);
            }

            .thumb {
                padding: 5px;
            }

        </style>

    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="jumbotron">
            <h2 class="h2 text-center">YII2 +Bootstrap 3 - Создание адаптивной галереи изображений с помощью сетки</h2>
            <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
                responsive, mobile-first projects on the web.</p>
        </div>
        <div class="page-header"></div>

        <div class="container">
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
            <?= Alert::widget() ?>

            <?= $content ?>

        </div>


        <!-- FOOTER -->
        <footer class="footer-bs">
            <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <h2>Logo</h2>
                    <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                    <p>&copy; TURkBilgesi <?= date('Y') ?>, All rights reserved</p>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu —</h4>
                    <div class="col-md-6">
                        <ul class="pages">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Nature</a></li>
                            <li><a href="#">Explores</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">Advice</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">

                        <ul class="list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul> 

                    </div>
                </div>
                <div class="col-md-2 footer-social animated fadeInDown">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">RSS</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4>@mundus_gubernavi</h4>
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-73fba9df-4c98-45a4-a3e0-09692f2a6f0b"></div>
                </div>
            </div>
        </footer>


        <?php $this->endBody() ?>
    </body>
</html>							
<?php $this->endPage() ?>
							