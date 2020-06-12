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
                            <a href="#" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/logo.png" alt="" /></a>
                            
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
                 <?php echo $this->render(
                    'aside.php'
                ); ?>
                   
            </div>
            <!-- END .wrapper -->


            
            <!-- BEGIN .content -->
        </section>
        <!-- BEGIN .footer -->
        <footer class="footer" style="background-color: rgb(11, 82, 100);">

            <!-- BEGIN .wrapper -->
            <div class="wrapper" >

                <!-- BEGIN .footer-widgets -->
                <div class="footer-widgets">

                    <!-- BEGIN .widget -->
                    <div class="widget">
                        <div class="w-title">
                            <h3>Biz haqimizda</h3>
                        </div>
                        <div>
                            <p>Манзил: Сурхондарё вилояти </br> Бойсун туман Косиблар махалласи.</p>
                            <p>Телефон: +998-(76)-335-10-94</p>
                            <p>E-mail: info@boysun-mtm.uz</p>
                            
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
                                    <a href="<?=Url::to(['site/tadbir-single','id'=>$value->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$value->image?>" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="<?=Url::to(['site/tadbir-single','id'=>$value->id])?>">
                                            <?php $val = mb_substr($value->title,0,119); echo $val?>...
                                        </a></h3>

                                        </div>
                                    </div>
                                <?php endforeach; ?>
                               
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
                                        <a href="<?=Url::to(['site/tadbir-single','id'=>$value->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$value->image?>" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="<?=Url::to(['site/tadbir-single','id'=>$value->id])?>">
                                                <?php $val = mb_substr($value->title,0,119); echo $val?>...</a></h3>
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
