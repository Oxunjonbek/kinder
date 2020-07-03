<?php
use yii\helpers\Url;
// use common\models\Tadbir;
// use common\models\Genel;
// use common\models\Mtt;
// use common\models\Vacansy;
// use common\models\Structure;
// use common\models\TarkibiyStructure;
// use common\models\Tanlov;
// use common\models\Elonlar;
// use common\models\Qonunlar;
// use common\models\Standart;
// use common\models\Nizom;
// use common\models\Farmonlar;
// use common\models\Ariza;
// use common\models\Bm;
// use common\models\Ichki;
// use common\models\Interaktiv;
// use common\models\Pedagog;
// use common\models\Qabulhona;

$this->title = 'Бойсун тумани мактабгача таьлим бўлими';
?>                    

<div class="main-content">

    <!-- BEGIN .panel -->
    <div class="panel">
        <div class="slider">
            <div class="slider-image" style="width: 798px; height: 427px; margin-bottom: 10px;">
                <a href="<?php
                //=Url::to(['site/tadbir-single','id'=>$first->id])?>" class="active">
                    <span class="slider-overlay" style="font-size: 20px;">


                        <strong ><?php
                        //=$first['title']?></strong>


                    </span>
                    <img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?php
                    //=$first['image']?>" class="setborder" alt="" title="" />
                </a>
            </div>

        </div>
        <!-- END .panel -->
    </div>

    <!-- BEGIN .panel-split -->
    <div class="panel-split">
        <div class="left-side">

            <!-- BEGIN .panel -->
            <div class="panel">
                <div class="p-title">
                    <h2 style="background-color: rgb(11, 82, 100);"><?= Yii::t('template','Tadbirlar') ?></h2>
                </div>
                <div class="article-list">

                    <div class="item main-artice">
                        <div class="item-header">
                            <a href="<?=Url::to(['site/tadbir-single','id'=>$tadbir->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbir->image?>" alt="" class="item-photo" style="width: 374px; height: 215px;"/></a>
                            <div class="article-slide">
                                <h3></h3>
                            </div>
                        </div>
                        <div class="item-content" >
                            <p style="color:black;">
                                <a href="<?=Url::to(['site/tadbir-single','id'=>$tadbir->id])?>">
                                    <?=$tadbir->title?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <?php foreach ($item3 as $key => $value) : ?>
                        <div class="item">
                            <a href="<?=Url::to(['site/tadbir-single','id'=>$value->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$value->image?>" alt="" class="item-photo" /></a>
                            <div class="item-content">
                                <h3><a href="<?=Url::to(['site/tadbir-single','id'=>$value->id])?>">
                                    <?=$value->title?>
                                </a></h3>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                <!-- END .panel -->
            </div>

        </div>
        <div class="right-side">

            <!-- BEGIN .panel -->
            <div class="panel">
                <div class="p-title">
                    <h2 style="background-color: #b3b3b6;"><?= Yii::t('template','Tanlovlar') ?></h2>
                </div>
                <div class="article-list">

                    <div class="item main-artice light">
                        <div class="item-header">

                            <a href="<?=Url::to(['site/tanlov-single','id'=>$tanlov->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$tanlov->image?>" alt="" class="item-photo" style="height:214px;" /></a>
                            <div class="article-slide" >
                                <h3 ></h3>
                            </div>
                        </div>
                        <div class="item-content" >
                            <p>
                                <a href="<?=Url::to(['site/tanlov-single','id'=>$tanlov->id])?>">
                                    <?=$tanlov->title?>
                                </a>
                            </p> 
                        </div>
                    </div>


                    <?php foreach ($tanlov3 as $key => $value) : ?>
                        <div class="item">
                            <a href="<?=Url::to(['site/tanlov-single','id'=>$value->id])?>">
                                <img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$value->image?>" alt="" class="item-photo" /></a>
                                <div class="item-content">
                                    <h3><a href="<?=Url::to(['site/tanlov-single','id'=>$value->id])?>">
                                        <?=$value->title?>
                                    </a></h3>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <!-- END .panel -->
                </div>

            </div>
            <!-- END .panel-split -->
        </div>

        <!-- BEGIN .panel -->
        <div class="panel">
            <div class="p-title">
                <h2  style="background-color: rgb(11, 82, 100);"><?= Yii::t('template','Elonlar va tendorlar') ?></h2>
            </div>
            <a href="blog.html" class="upper-title"><?= Yii::t('template','batafsil') ?><i class="fa fa-caret-right"></i></a>
            <div>
                <div class="panel-split">
                    <div class="left-side">
                        <div class="article-list">

                            <div class="item main-artice light">
                                <div class="item-header">
                                    <a href="<?=Url::to(['site/tanlov-single','id'=>$elon->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$elon->image?>" alt="" class="item-photo" /></a>
                                                        <!-- <div class="article-slide">
                                                            <h3></h3>
                                                        </div> -->
                                                    </div>
                                                    <div class="item-content">
                                                       <p>
                                                        <a href="<?=Url::to(['site/tanlov-single','id'=>$elon->id])?>"><?=$elon->title?>


                                                    </a>
                                                </p> 
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="right-side">
                                    <div class="article-list">

                                        <?php foreach ($elonlar as $key => $value) : ?>
                                            <div class="item">
                                                <a href="<?=Url::to(['site/tanlov-single','id'=>$value->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$value->image?>" alt="" class="item-photo" /></a>
                                                <div class="item-content">
                                                    <h3><a href="<?=Url::to(['site/elonlar'])?>">
                                                        <?=$value->title?>
                                                    </a></h3>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END .panel -->
                    </div>

                    <!-- BEGIN .panel -->
                    <div class="panel">
                        <div class="p-title">
                            <h2 style="background-color: rgb(11, 82, 100);"><?= Yii::t('template','Bizni kuzatib boring') ?></h2>
                        </div>
                        <a href="#" class="upper-title"><?= Yii::t('template','batafsil') ?><i class="fa fa-caret-right"></i></a>
                        <div class="review-block">

                            <div class="item">
                                <a href="<?=Url::to(['site/tadbir-single','id'=>$tadbir->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbir->image?>" class="item-photo" alt="" /></a>
                                <h3><a href="<?=Url::to(['site/tadbir-single','id'=>$tadbir->id])?>">
                                    <?=$tadbir->title?>
                                </a></h3>

                                <p>
                                    <a href="<?=Url::to(['site/tadbir-single','id'=>$tadbir->id])?>"><?= Yii::t('template','batafsil') ?></a></p>
                                </div>

                                <div class="item">
                                    <a href="<?=Url::to(['site/tanlov-single','id'=>$tanlov->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$tanlov->image?>" class="item-photo" alt="" /></a>
                                    <h3><a href="<?=Url::to(['site/tanlov-single','id'=>$tanlov->id])?>">
                                        <?=$tanlov->title?>
                                    </a></h3>

                                    <p>
                                        <a href="<?=Url::to(['site/tanlov-single','id'=>$tanlov->id])?>"><?= Yii::t('template','batafsil') ?></a></p>
                                    </div>

                                    <div class="item">
                                        <a href="<?=Url::to(['site/elon-single','id'=>$elon->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$elon->image?>" class="item-photo" alt="" /></a>
                                        <h3><a href="<?=Url::to(['site/elon-single','id'=>$elon->id])?>">
                                            <?=$elon->title?>
                                        </a></h3>

                                        <p>
                                           <a href="<?=Url::to(['site/elon-single','id'=>$elon->id])?>"> <?= Yii::t('template','batafsil') ?></a>
                                       </p>
                                   </div>

                               </div>
                               <!-- END .panel -->
                           </div>

                           <!-- BEGIN .panel -->
                           <div class="panel">
                            <div class="banner banner-grid">
                                <a href="#" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/no-banner-300x250.jpg" alt=""></a>
                                <a href="#" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/no-banner-300x250.jpg" alt=""></a>
                            </div>
                            <!-- END .panel -->
                        </div>

                        <!-- BEGIN .panel -->
                        <div class="panel">
                            <div class="p-title">
                                <h2 style="background-color: rgb(11, 82, 100);"><?= Yii::t('template','Foydali manzillar') ?></h2>
                            </div>
                            <div class="video-carousel" >
                                <a href="#" class="carousel-left"><i class="fa fa-chevron-left"></i></a>
                                <a href="#" class="carousel-right"><i class="fa fa-chevron-right"></i></a>
                                <!-- BEGIN .inner-carousel -->
                                <div class="inner-carousel" >

                                    <div class="item">
                                        <center>
                                           <a href="https://president.uz/" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/1.png?>" class="item-photo" alt="" /></a>
                                       </center>
                                       <center>
                                        <h3><a href="https://president.uz/" target="_blank"><?= Yii::t('template','portal') ?></a></h3>
                                    </center>
                                </div>

                                <div class="item">
                                    <center>
                                        <a href="https://lex.uz/" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/2.png" class="item-photo" alt="" /></a>
                                    </center>
                                    <center>
                                        <h3><a href="https://lex.uz/" target="_blank"><?= Yii::t('template','milliyqonun') ?></a></h3>
                                    </center>
                                </div>

                                <div class="item">
                                 <center> 
                                    <a href="https://lex.uz/" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/3.png" class="item-photo" alt="" /></a>
                                </center>
                                <center>
                                    <h3><a href="https://lex.uz/" target="_blank"><?= Yii::t('template','matbuoti') ?></a></h3>
                                </center>
                            </div>
                            <div class="item">
                                <center>
                                    <a href="http://senat.gov.uz " target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/4.png" class="item-photo" alt="" /></a>
                                </center>
                                <center>
                                    <h3><a href="http://senat.gov.uz" target="_blank"><?= Yii::t('template','senati') ?></a></h3>
                                </center>
                            </div>
                            <div class="item">
                                <center>
                                    <a href="http://parliament.gov.uz" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/5.png" class="item-photo" alt="" /></a>
                                </center>
                                <center>
                                    <h3><a href="http://parliament.gov.uz" target="_blank"><?= Yii::t('template','palatasi') ?></a></h3>
                                </center>
                            </div>



                            <!-- END .inner-carousel -->
                        </div>
                    </div>
                    <!-- END .panel -->
                </div>

            </div>




