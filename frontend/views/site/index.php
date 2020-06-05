<?php

/* @var $this yii\web\View */


$this->title = 'Бойсун тумани мактабгача таьлим бўлими';
?>                    

<div class="main-content">

    <!-- BEGIN .panel -->
    <div class="panel">
        <div class="slider">
            <div class="slider-image" style="width: 798px; height: 427px; margin-bottom: 10px;">
                <?php foreach ($tadbirlar as $key => $value) : ?>
                    <a href="post.html" class="active">
                        <span class="slider-overlay" style="font-size: 20px;">


                            <strong ><?=$value->title?></strong>


                        </span>
                        <img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$value->image?>" class="setborder" alt="" title="" />
                    </a>
                <?php endforeach; ?>
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
                                        <h2 style="background-color: rgb(11, 82, 100);">Tадбирлар</h2>
                                    </div>
                                    <div class="article-list">

                                        <div class="item main-artice">
                                            <div class="item-header">
                                                <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbir->image?>" alt="" class="item-photo" style="width: 374px; height: 215px;"/></a>
                                                <div class="article-slide">
                                                    <h3><a href="post.html">
                                                            <?=$tadbir->title?>
                                                        </a></h3>
                                                </div>
                                            </div>
                                            <div class="item-content" >
                                                <p style="color:black;">
                                                        <?$tadbir->text?>
                                                    </p>
                                            </div>
                                        </div>
                                        <?php foreach ($item3 as $key => $value) : ?>
                                            <div class="item">
                                                <a href="#"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$value->image?>" alt="" class="item-photo" /></a>
                                                <div class="item-content">
                                                    <h3><a href="post.html">
                                                        <?=$value->title?>...
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
                                        <h2 style="background-color: #b3b3b6;">Танловлар</h2>
                                    </div>
                                    <div class="article-list">

                                        <div class="item main-artice light">
                                            <div class="item-header">
                                                <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$tanlov->image?>" alt="" class="item-photo" style="height:214px;" /></a>
                                                <div class="article-slide" >
                                                    <h3 ><a href="post.html">
                                                            <?=$tanlov->title?>...
                                                        </a></h3>
                                                    <!-- <a href="post.html" class="info-line">
                                                        <span>4 JAN, 2014</span>
                                                        <span>by Orange-Themes</span>
                                                        <span>11 comments</span>
                                                    </a> -->
                                                </div>
                                            </div>
                                            <div class="item-content" >
                                                <p>
                                                        <?=$tanlov->text?>
                                                    </p>
                                            </div>
                                        </div>

                                        <?php foreach ($tanlov3 as $key => $value) : ?>
                                            <div class="item">
                                                <a href="#"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$value->image?>" alt="" class="item-photo" /></a>
                                                <div class="item-content">
                                                    <h3><a href="post.html">
                                                        <?=$value->title?>
                                                    ...</a></h3>
                                                <!-- <span>4 Jan, 2014</span>
                                                <a href="post.html#comments"><span>3 Comments</span></a>
                                                <div class="ot-star-rating"><span style="width:60%"><strong class="rating">3</strong> out of 5</span> -->
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
                                        <h2  style="background-color: rgb(11, 82, 100);">Эьлонлар ва тендорлар</h2>
                                    </div>
                                    <a href="blog.html" class="upper-title">Батафсил<i class="fa fa-caret-right"></i></a>
                                    <div>
                                        <div class="panel-split">
                                            <div class="left-side">
                                                <div class="article-list">

                                                    <div class="item main-artice light">
                                                        <div class="item-header">
                                                            <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$elon->image?>" alt="" class="item-photo" /></a>
                                                            <div class="article-slide">
                                                                <h3><a href="post.html">
                                                                    <?=$elon->title?>
                                                    ...
                                                    </a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <p>
                                                                <?=$elon->text?>
                                                    ...</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="right-side">
                                                <div class="article-list">

                                                    <?php foreach ($elonlar as $key => $value) : ?>
                                            <div class="item">
                                                <a href="#"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$value->image?>" alt="" class="item-photo" /></a>
                                                <div class="item-content">
                                                    <h3><a href="post.html">
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
                                        <h2 style="background-color: rgb(11, 82, 100);">Бизни кузатиб боринг</h2>
                                    </div>
                                    <a href="#" class="upper-title">Read More<i class="fa fa-caret-right"></i></a>
                                    <div class="review-block">

                                        <div class="item">
                                            <a href="post-review.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbir->image?>" class="item-photo" alt="" /></a>
                                            <h3><a href="post-review.html">
                                                    <?=$tadbir->title?>
                                                </a></h3>
                                          
                                            <p>
                                                <?=$tadbir->text?>
                                                <a href="post-review.html"> Read More ...</a></p>
                                        </div>

                                        <div class="item">
                                            <a href="post-review.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$tanlov->image?>" class="item-photo" alt="" /></a>
                                            <h3><a href="post-review.html">
                                                    <?=$tanlov->title?>
                                                </a></h3>
                                           
                                            <p>
                                                <?=$tanlov->text?>
                                                <a href="post-review.html"> Read More ...</a></p>
                                        </div>

                                        <div class="item">
                                            <a href="post-review.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$elon->image?>" class="item-photo" alt="" /></a>
                                            <h3><a href="post-review.html">
                                                    <?=$elon->title?>
                                                </a></h3>
                                            
                                            <p>
                                                 <?=$elon->text?><a href="post-review.html"> Read More ...</a>
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
                                        <h2 style="background-color: rgb(11, 82, 100);">Фойдали манзиллар</h2>
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
                                                    <h3><a href="https://president.uz/" target="_blank">Ўзбекистон Республикаси Давлат Хукумати Портали</a></h3>
                                                </center>
                                            </div>
                                        
                                             <div class="item">
                                                <center>
                                                    <a href="https://lex.uz/" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/2.png" class="item-photo" alt="" /></a>
                                                </center>
                                                <center>
                                                    <h3><a href="https://lex.uz/" target="_blank">Ўзбекистон Республикаси Миллий Қонунчилиги онлайн базаси</a></h3>
                                                </center>
                                            </div>

                                             <div class="item">
                                               <center> 
                                                    <a href="https://lex.uz/" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/3.png" class="item-photo" alt="" /></a>
                                                </center>
                                                <center>
                                                <h3><a href="https://lex.uz/" target="_blank">Ўзбекистон Республикаси Президенти Матбуот Хизмати</a></h3>
                                                </center>
                                            </div>
                                            <div class="item">
                                                <center>
                                                    <a href="http://senat.gov.uz " target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/4.png" class="item-photo" alt="" /></a>
                                                 </center>
                                                 <center>
                                                    <h3><a href="http://senat.gov.uz" target="_blank">Ўзбекистон Республикаси Олий Мажлиси Сенати</a></h3>
                                                </center>
                                            </div>
                                            <div class="item">
                                                <center>
                                                    <a href="http://parliament.gov.uz" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/5.png" class="item-photo" alt="" /></a>
                                                </center>
                                                <center>
                                                    <h3><a href="http://parliament.gov.uz" target="_blank">Ўзбекистон Республикаси Олий Мажлиси Қонунчилик палатаси</a></h3>
                                                </center>
                                            </div>
                                        
                                            
                                        
                                            <!-- END .inner-carousel -->
                                        </div>
                                    </div>
                                    <!-- END .panel -->
                                </div>

                            </div>




