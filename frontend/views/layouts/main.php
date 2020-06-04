<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\Tadbir;
use common\models\Tanlov;

AppAsset::register($this);
$tadbir = Tadbir::find()->orderBy(['id'=>SORT_ASC])->limit(3)->all();
$tanlov = Tanlov::find()->orderBy(['id'=>SORT_ASC])->limit(3)->all();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<link rel="shortcut icon" href="images/favicon.ico.html" type="image/x-icon" />
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <!-- BEGIN .boxed -->
    <div class="boxed">

        <!-- BEGIN .header -->
        <header class="header">

            <div class="header-topmenu">

                <!-- BEGIN .wrapper -->
                <div class="wrapper">

                        <!-- <ul class="le-first">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                            <li><a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-second.html">Blog style #2</a></li>
                                    <li><a href="post.html">Post page</a></li>
                                    <li><a href="post-no-comments.html">Post page w/ comments</a></li>
                                    <li><a href="post-no-comments.html">Post page w/ review</a></li>
                                </ul>
                            </li>
                            <li><a href="post.html">Post Page</a></li>
                            <li><a href="photo-gallery.html">Photo Gallery</a></li>
                            <li><a href="full-width.html">Full Page</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul> -->
                        
                    </div>
                    <!-- END .wrapper -->

                </div>
                
                <!-- BEGIN .wrapper -->
                <div class="wrapper">

                    <div class="header-block">
                        <div class="header-logo">
                            <a href="<?=Url::to(['site/index'])?>"><img src="<?=Yii::getAlias('@web')?>/foto/images/header-logo.png" alt="" /></a>
                            <!-- <h1><a href="index.html">NOVOMag</a></h1> -->
                        </div>
                        <div class="header-banner">
                            <a href="#" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/no-banner-728x90.png" alt="" /></a>
                            
                        </div>
                    </div>
                    
                    <!-- END .wrapper -->
                </div>


                <?= $this->render(
                    'navbar.php'
                ) ?>
                
                <!-- END .header -->
            </header>
            <!-- BEGIN .content -->
            <section class="content has-sidebar">

               <?= $this->render(
                'wrapper.php'
            ) ?>   
            <!-- BEGIN .wrapper -->
            <div class="wrapper">
                <?=$content?>
                
                <?= $this->render(
                    'aside.php'
                ) ?>         
            </div>
            <!-- END .wrapper -->


            
            <!-- BEGIN .content -->
        </section>
        <!-- BEGIN .footer -->
        <footer class="footer">

            <!-- BEGIN .wrapper -->
            <div class="wrapper">

                <!-- BEGIN .footer-widgets -->
                <div class="footer-widgets">

                    <!-- BEGIN .widget -->
                    <div class="widget">
                        <div class="w-title">
                            <h3>Biz haqimizda</h3>
                        </div>
                        <div>
                            <p>Manzil: Surxondaryo viloyati Denov shahri

                                Telefon: +998(91) 510-05-88

                            E-mail: info@denov-mtm.uz</p>
                            <img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-5.jpg" alt="" />
                        </div>
                        <!-- END .widget -->
                    </div>
                    <!-- BEGIN .widget -->
                    <div class="widget">
                        <div class="w-title">
                            <h3>Tadbirlar</h3>
                        </div>
                        <div class="article-list">
                            <?php foreach ($tadbir as $key => $value) : ?>

                                <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$value->image?>" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html"><?=$value->title?></a></h3>
                                        <!-- <span>4 Jan, 2014</span>
                                            <a href="post.html#comments"><span>3 Comments</span></a> -->
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-2.jpg" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html">Eurozone Manufacturing Industry Rises Sharply in January</a></h3>
                                        <span>15 JAN, 2014</span>
                                        <a href="post.html#comments"><span>5 Comments</span></a>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-3.jpg" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html">Unexpected Drop in Euro Area</a></h3>
                                        <span>4 Jan, 2014</span>
                                        <a href="post.html#comments"><span>0 Comments</span></a>
                                    </div>
                                </div> -->

                            </div>
                            <!-- END .widget -->

                        </div>
                        <!-- BEGIN .widget -->
                        <div class="widget">
                            <div class="w-title">
                                <h3>Tanlovlar</h3>
                            </div>
                            <div class="article-list">
                                <?php foreach ($tanlov as $key => $value) : ?>

                                    <div class="item">
                                        <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$value->image?>" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="post.html"><?=$value->title?></a></h3>
                                        <!-- <span>4 Jan, 2014</span>
                                            <a href="post.html#comments"><span>3 Comments</span></a> -->
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- END .widget -->
                            
                            <!-- END .footer-widgets -->
                        </div>
                        
                        <!-- END .wrapper -->
                    </div>

                    
                    <!-- END .footer -->
                </footer>
                
                <!-- END .boxed -->
            </div>

            <!-- Scripts -->

            <?php $this->endBody() ?>
        </body>
        </html>
        <?php $this->endPage() ?>
