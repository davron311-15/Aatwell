<?php
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div class="wrap">


        <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">EatWell</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="site-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="#section-home" class="nav-link">Bosh sahifa</a></li>
                        <li class="nav-item"><a href="#section-about" class="nav-link">Biz haqimizda</a></li>
                        <li class="nav-item"><a href="#section-offer" class="nav-link">taklif</a></li>
                        <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
                        <li class="nav-item"><a href="#section-news" class="nav-link">Yangiliklar</a></li>
                        <li class="nav-item"><a href="#section-gallery" class="nav-link">Galleria</a></li>
                        <li class="nav-item"><a href="#section-contact" class="nav-link">Aloqa</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="site-footer site-bg-dark site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 site-animate">
                            <h2 class="site-heading-2">Biz haqimizda</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet. Sed labore ipsum vel dolore, quis, culpa et magni autem sequi facere eos tenetur, ex?</p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3 site-animate">
                            <div class="site-footer-widget mb-4">
                                <h2 class="site-heading-2">The Restaurant</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">About Us</a></li>
                                    <li><a href="#" class="py-2 d-block">Chefs</a></li>
                                    <li><a href="#" class="py-2 d-block">Events</a></li>
                                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 site-animate">
                            <div class="site-footer-widget mb-4">
                                <h2 class="site-heading-2">Useful links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 site-animate">
                            <div class="site-footer-widget mb-4">
                                <h2 class="site-heading-2">Useful links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row site-animate">
                <div class="col-md-12 text-center">
                    <div class="site-footer-widget mb-4">
                        <ul class="site-footer-social list-unstyled ">
                            <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <p>&copy;
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>