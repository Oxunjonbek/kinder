<?php

/* @var $this yii\web\View */

$this->title = 'KinderGarden';
$sub = substr($elon->title, 0, 59);
$sub1 = substr($elon->text, 0, 119);
$tad = substr($tadbir->title, 0, 59);
$tad1 = substr($tadbir->text, 0, 119);
$tan = substr($tanlov->title, 0, 59);
$tan1 = substr($tanlov->text, 0, 119);
$sub2 = substr($elon->title, 0, 40);
$sub12 = substr($elon->text, 0, 100);
$tad2 = substr($tadbir->title, 0, 40);
$tad12 = substr($tadbir->text, 0, 100);
$tan2 = substr($tanlov->title, 0, 40);
$tan12 = substr($tanlov->text, 0, 100);
?>

                

                    

                    
                    <div class="main-content">

                        <!-- BEGIN .panel -->
                        <div class="panel">
                            <div class="slider">
                                <div class="slider-image">
                                    <a href="post.html" class="active">
                                        <span class="slider-overlay">
                                            <strong><?=$sub?></strong>
                                            <span><?=$sub1?></span>
                                        </span>
                                        <img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$elon->image?>" class="setborder" alt="" title="" />
                                    </a>
                                    <a href="post.html">
                                        <span class="slider-overlay">
                                           <strong><?=$tad?></strong>
                                            <span><?=$tad1?></span>
                                        </span>
                                        <img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$tanlov->image?>" class="setborder" alt="" title="" />
                                    </a>
                                    <a href="post.html">
                                        <span class="slider-overlay">
                                            <strong><?=$tan?></strong>
                                            <span><?=$tan1?></span>
                                        </span>
                                        <img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbir->image?>" alt="" title="" />
                                    </a>
                                    <a href="post.html">
                                        <span class="slider-overlay">
                                            <strong>Euismod princips consequuntur ius no ad has graece appareat</strong>
                                            <span>Adhuc repudiare id pri. Ex aeque aliquid bonorum mea, cu sea invidunt sapientem ullamcorper. Invenire sententiae te vim</span>
                                        </span>
                                        <img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-26.jpg" class="setborder" alt="" title="" />
                                    </a>
                                </div>
                                <ul class="slider-navigation">
                                    <li class="active">
                                        <a href="#" data-target="1">
                                            <strong><?=$sub2?></strong>
                                            <span><?=$sub12?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-target="2">
                                            <strong><?=$tan1?></strong>
                                            <span><?=$tan12?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-target="3">
                                            <strong><?=$tad1?></strong>
                                            <span><?=$tad12?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-target="4">
                                            <strong>Paulo quidam maluisset ei vim vel nobis nominavi ei</strong>
                                            <span>Eos et fabulas perfecto. Ei tacimates forensibus est. Mea natum graece recteque ad, autem moderatius eam te, et cum ferri liber assueverit.</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        <!-- END .panel -->
                        </div>

                        <!-- BEGIN .panel-split -->
                        <div class="panel-split">
                            <div class="left-side">

                                <!-- BEGIN .panel -->
                                <div class="panel">
                                    <div class="p-title">
                                        <h2>Tадбирлар</h2>
                                    </div>
                                    <div class="article-list">

                                        <div class="item main-artice">
                                            <div class="item-header">
                                                <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbirlar[0]->image?>" alt="" class="item-photo" /></a>
                                                <div class="article-slide">
                                                    <h3><a href="post.html"></a><?php substr($tadbirlar[0]->title, 0, 20); echo $tadbirlar[0]->title ;?></a></h3>
                                                    <!-- <a href="post.html" class="info-line">
                                                        <span>4 JAN, 2014</span>
                                                        <span>by Orange-Themes</span>
                                                        <span>11 comments</span>
                                                    </a> -->
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <p><?php  substr($tadbirlar[0]->text, 0, 120); echo $tadbirlar[0]->text ; ?></p>
                                            </div>
                                        </div>
<?php foreach ($tadbirlar as  $value) : ?>
                                        <div class="item">
                                            <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$value->image?>" alt="" class="item-photo" /></a>
                                            <div class="item-content">
                                                <h3><a href="post.html"><?php 
                                                substr($value->title, 0, 20); echo $value->title?></a></h3>
                                               <!--  <span>4 Jan, 2014</span>
                                                <a href="post.html#comments"><span>3 Comments</span> -->
                                                </a>
                                            </div>
                                        </div>
<?php endforeach; ?>
                                       <!--  <div class="item">
                                            <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbirlar[2]->image?>" alt="" class="item-photo" /></a>
                                            <div class="item-content">
                                                <h3><a href="post.html"><?=$tadbirlar[2]->title?></a></h3>
                                                <span>4 Jan, 2014</span>
                                                <a href="post.html#comments"><span>3 Comments</span>
                                                </a>
                                                <div class="ot-star-rating">
                                                    <span style="width:70%"><strong class="rating">3.50</strong> out of 5</span></div>
                                            </div>
                                        </div> -->

                                        <!-- <div class="item">
                                            <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbirlar[3]->image?>" alt="" class="item-photo" /></a>
                                            <div class="item-content">
                                                <h3><a href="post.html"><?=$tadbirlar[3]->title?></a></h3> -->
                                                <!-- <span>4 Jan, 2014</span>
                                                <a href="post.html#comments"><span>3 Comments</span> -->
                                                <!-- </a>
                                                <div class="ot-star-rating"> -->
                                                   <!--  <span style="width:70%"><strong class="rating">3.50</strong> out of 5</span> --><!-- </div>
                                            </div>
                                        </div> -->

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
                                                <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$tanlovlar[0]->image?>" alt="" class="item-photo" /></a>
                                                <div class="article-slide">
                                                    <h3><a href="post.html"><?php
                                                    substr($tanlovlar[0]->title, 0, 20); echo $tanlovlar[0]->title?></a></h3>
                                                    <!-- <a href="post.html" class="info-line"> -->
                                                        <!-- <span>4 JAN, 2014</span>
                                                        <span>by Orange-Themes</span>
                                                        <span>11 comments</span> -->
                                                    <!-- </a> -->
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <p><?php  substr($tanlovlar[0]->text, 0, 120); echo $tanlovlar[0]->text ?></p>
                                            </div>
                                        </div>
<?php foreach ($tanlovlar as  $value) : ?>
                                        <div class="item">
                                            <a href="#"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$value->image?>" alt="" class="item-photo" /></a>
                                            <div class="item-content">
                                                <h3><a href="post.html"><?php $val = substr($value->text, 0, 40); echo $val ?></a></h3>
                                                <!-- <span>4 Jan, 2014</span>
                                                <a href="post.html#comments"><span>3 Comments</span> -->
                                                </a>
                                                <div class="ot-star-rating">
                                                    <span style="width:60%"><strong class="rating">3</strong> out of 5</span></div>
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
                                <h2>Эьлонлар ва тендорлар</h2>
                            </div>
                            <a href="blog.html" class="upper-title">Батафсил<i class="fa fa-caret-right"></i></a>
                            <div>
                                <div class="panel-split">
                                    <div class="left-side">
                                        <div class="article-list">

                                            <div class="item main-artice light">
                                                <div class="item-header">
                                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-15.jpg" alt="" class="item-photo" /></a>
                                                    <div class="article-slide">
                                                        <h3><a href="post.html">BMW E60 Test Drive from TOP GEAR</a></h3>
                                                        <a href="post.html" class="info-line">
                                                            <span>4 JAN, 2014</span>
                                                            <span>by Orange-Themes</span>
                                                            <span>11 comments</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <p>Sotheby’s in London is getting ready for another seasonal display of wealth, as some of world’s. Sotheby’s in London is getting ready for another seasonal display of wealth, as some</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="right-side">
                                        <div class="article-list">

                                            <div class="item">
                                                <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-1.jpg" alt="" class="item-photo" /></a>
                                                <div class="item-content">
                                                    <h3><a href="post.html">BMW 530D Tunign from Hamman</a></h3>
                                                    <span>4 Jan, 2014</span>
                                                    <a href="post.html#comments"><span>3 Comments</span></a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-2.jpg" alt="" class="item-photo" /></a>
                                                <div class="item-content">
                                                    <h3><a href="post.html">Eurozone Manufacturing Industry Rises Sharply in January</a></h3>
                                                    <span>4 Jan, 2014</span>
                                                    <a href="post.html#comments"><span>3 Comments</span></a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-3.jpg" alt="" class="item-photo" /></a>
                                                <div class="item-content">
                                                    <h3><a href="post.html">Unexpected Drop in Euro Area</a></h3>
                                                    <span>4 Jan, 2014</span>
                                                    <a href="post.html#comments"><span>3 Comments</span></a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-3.jpg" alt="" class="item-photo" /></a>
                                                <div class="item-content">
                                                    <h3><a href="post.html">Unexpected Drop in Euro Area</a></h3>
                                                    <span>4 Jan, 2014</span>
                                                    <a href="post.html#comments"><span>3 Comments</span></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- END .panel -->
                        </div>
                        
                        <!-- BEGIN .panel -->
                        <div class="panel">
                            <div class="p-title">
                                <h2>Latest Reviews</h2>
                            </div>
                            <a href="blog.html" class="upper-title">Read More<i class="fa fa-caret-right"></i></a>
                            <div class="review-block">
                                
                                <div class="item">
                                    <a href="post-review.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-17.jpg" class="item-photo" alt="" /></a>
                                    <h3><a href="post-review.html">BMW E12 Review</a></h3>
                                    <div class="rating-table">
                                        <div class="rate-item">
                                            <div class="right ot-star-rating"><span style="width:60%"><strong class="rating">3</strong> out of 5</span></div>
                                            <strong>Design</strong>
                                        </div>
                                        <div class="rate-item">
                                            <div class="right ot-star-rating"><span style="width:50%"><strong class="rating">2.5</strong> out of 5</span></div>
                                            <strong>Engine</strong>
                                        </div>
                                        <div class="rate-item">
                                            <div class="right ot-star-rating"><span style="width:70%"><strong class="rating">3.5</strong> out of 5</span></div>
                                            <strong>Price</strong>
                                        </div>
                                    </div>
                                    <p>Bold and beautiful, I am sure there is something here for everyone! <a href="post-review.html">Read More </a></p>
                                </div>
                                
                                <div class="item">
                                    <a href="post-review.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-18.jpg" class="item-photo" alt="" /></a>
                                    <h3><a href="post-review.html">BMW E12 Review</a></h3>
                                    <div class="rating-table">
                                        <div class="rate-item">
                                            <div class="right ot-star-rating"><span style="width:60%"><strong class="rating">3</strong> out of 5</span></div>
                                            <strong>Design</strong>
                                        </div>
                                        <div class="rate-item">
                                            <div class="right ot-star-rating"><span style="width:20%"><strong class="rating">1</strong> out of 5</span></div>
                                            <strong>Engine</strong>
                                        </div>
                                        <div class="rate-item">
                                            <div class="right ot-star-rating"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                            <strong>Price</strong>
                                        </div>
                                    </div>
                                    <p>Bold and beautiful, I am sure there is something here for everyone! <a href="post-review.html">Read More </a></p>
                                </div>
                                
                                <div class="item">
                                    <a href="post-review.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-19.jpg" class="item-photo" alt="" /></a>
                                    <h3><a href="post-review.html">BMW E12 Review</a></h3>
                                    <div class="rating-table">
                                        <div class="rate-item">
                                            <div class="right ot-star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div>
                                            <strong>Design</strong>
                                        </div>
                                        <div class="rate-item">
                                            <div class="right ot-star-rating"><span style="width:100%"><strong class="rating">5</strong> out of 5</span></div>
                                            <strong>Engine</strong>
                                        </div>
                                        <div class="rate-item">
                                            <div class="right ot-star-rating"><span style="width:60%"><strong class="rating">3</strong> out of 5</span></div>
                                            <strong>Price</strong>
                                        </div>
                                    </div>
                                    <p>Bold and beautiful, I am sure there is something here for everyone! <a href="post-review.html">Read More </a></p>
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
                                <h2>Latest Videos</h2>
                            </div>
                            <div class="video-carousel">
                                <a href="#" class="carousel-left"><i class="fa fa-chevron-left"></i></a>
                                <a href="#" class="carousel-right"><i class="fa fa-chevron-right"></i></a>
                                <!-- BEGIN .inner-carousel -->
                                <div class="inner-carousel">
                                    <div class="item">
                                        <a href="post-video.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-20.jpg" class="item-photo" alt="" /></a>
                                        <h3><a href="post-video.htm">The all-new BMW i8. Official Launch Video</a></h3>
                                    </div>
                                    <div class="item">
                                        <a href="post-video.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-21.jpg" class="item-photo" alt="" /></a>
                                        <h3><a href="post-video.htm">BMW 335Dx Review</a></h3>
                                    </div>
                                    <div class="item">
                                        <a href="post-video.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-22.jpg" class="item-photo" alt="" /></a>
                                        <h3><a href="post-video.htm">BMW M5 V8 5.0L Review</a></h3>
                                    </div>
                                    <div class="item">
                                        <a href="post-video.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-20.jpg" class="item-photo" alt="" /></a>
                                        <h3><a href="post-video.htm">The all-new BMW i8. Official Launch Video</a></h3>
                                    </div>
                                    <div class="item">
                                        <a href="post-video.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-21.jpg" class="item-photo" alt="" /></a>
                                        <h3><a href="post-video.htm">BMW 335Dx Review</a></h3>
                                    </div>
                                    <div class="item">
                                        <a href="post-video.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-20.jpg" class="item-photo" alt="" /></a>
                                        <h3><a href="post-video.htm">The all-new BMW i8. Official Launch Video</a></h3>
                                    </div>
                                    <div class="item">
                                        <a href="post-video.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-21.jpg" class="item-photo" alt="" /></a>
                                        <h3><a href="post-video.htm">BMW 335Dx Review</a></h3>
                                    </div>
                                    <div class="item">
                                        <a href="post-video.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-22.jpg" class="item-photo" alt="" /></a>
                                        <h3><a href="post-video.htm">BMW M5 V8 5.0L Review</a></h3>
                                    </div>
                                <!-- END .inner-carousel -->
                                </div>
                            </div>
                        <!-- END .panel -->
                        </div>

                    </div>


                

