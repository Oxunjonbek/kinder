<?php

/* @var $this yii\web\View */

$this->title = 'KinderGarden';
?>

                

                    

                    
                    <div class="main-content">

                        <!-- BEGIN .panel -->
                        <div class="panel">
                            <div class="slider">
                                <div class="slider-image">
                                    <a href="post.html" class="active">
                                        <span class="slider-overlay">
                                            <strong><?=$elon->title;?></strong>
                                            <span><?=$elon->text;?></span>
                                        </span>
                                        <img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$elon->image;?>" class="setborder" alt="" title="" />
                                    </a>
                                    <a href="post.html">
                                        <span class="slider-overlay">
                                            <strong><?=$tadbir->title;?></strong>
                                            <span><?=$tadbir->text;?></span>
                                        </span>
                                        <img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbir->image;?>" class="setborder" alt="" title="" />
                                    </a>
                                    <a href="post.html">
                                        <span class="slider-overlay">
                                            <strong><?=$tanlov->title;?></strong>
                                            <span><?=$tanlov->text;?></span>
                                        </span>
                                        <img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$tanlov->image;?>" class="setborder" alt="" title="" />
                                    </a>
                                    <a href="post.html">
                                        <span class="slider-overlay">
                                            <strong>Design</strong>
                                            <span>Sotheby’s in London is getting ready for another seasonal display of wealth, as some of world’s. Sotheby’s in London is getting ready for another seasonal display of wealth, as some of world’s.</span>
                                        </span>
                                        <img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-26.jpg" class="setborder" alt="" title="" />
                                    </a>
                                </div>
                                <ul class="slider-navigation">
                                    <li class="active">
                                        <a href="#" data-target="1">
                                            <strong><?=$elon->title;?></strong>
                                            <span><?=$elon->text;?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-target="2">
                                            <strong><?=$tanlov->title;?></strong>
                                            <span><?=$tanlov->text;?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-target="3">
                                            <strong><?=$tadbir->title;?></strong>
                                            <span><?=$tadbir->text;?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-target="4">
                                            <strong>Design</strong>
                                            <span>Sotheby’s in London is getting ready for another seasonal display of wealth, as some of world’s. Sotheby’s in London is getting ready for another seasonal display of wealth, as some of world’s.</span>
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
                                                    <h3><a href="post.html"></a><?=$tadbirlar[0]->title?></a></h3>
                                                    <!-- <a href="post.html" class="info-line">
                                                        <span>4 JAN, 2014</span>
                                                        <span>by Orange-Themes</span>
                                                        <span>11 comments</span>
                                                    </a> -->
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <p><?=$tadbirlar[0]->text?></p>
                                            </div>
                                        </div>
<?php 
// echo '<pre>';
// var_dump($tadbirlar[1]->image);
//  exit();
 ?>
                                        <div class="item">
                                            <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbirlar[1]->image?>" alt="" class="item-photo" /></a>
                                            <div class="item-content">
                                                <h3><a href="post.html"><?=$tadbirlar[1]->title?></a></h3>
                                               <!--  <span>4 Jan, 2014</span>
                                                <a href="post.html#comments"><span>3 Comments</span> -->
                                                </a>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbirlar[2]->image?>" alt="" class="item-photo" /></a>
                                            <div class="item-content">
                                                <h3><a href="post.html"><?=$tadbirlar[2]->title?></a></h3>
                                                <!-- <span>4 Jan, 2014</span>
                                                <a href="post.html#comments"><span>3 Comments</span> -->
                                                </a>
                                                <div class="ot-star-rating">
                                                    <span style="width:70%"><strong class="rating">3.50</strong> out of 5</span></div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbirlar[3]->image?>" alt="" class="item-photo" /></a>
                                            <div class="item-content">
                                                <h3><a href="post.html"><?=$tadbirlar[3]->title?></a></h3>
                                                <!-- <span>4 Jan, 2014</span>
                                                <a href="post.html#comments"><span>3 Comments</span> -->
                                                </a>
                                                <div class="ot-star-rating">
                                                   <!--  <span style="width:70%"><strong class="rating">3.50</strong> out of 5</span> --></div>
                                            </div>
                                        </div>

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
                                                    <h3><a href="post.html"><?=$tanlovlar[0]->title?></a></h3>
                                                    <a href="post.html" class="info-line">
                                                        <!-- <span>4 JAN, 2014</span>
                                                        <span>by Orange-Themes</span>
                                                        <span>11 comments</span> -->
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <p><?=$tanlovlar[0]->text ?></p>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <a href="#"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$tanlovlar[1]->image?>" alt="" class="item-photo" /></a>
                                            <div class="item-content">
                                                <h3><a href="post.html"><?=$tanlovlar[0]->title?></a></h3>
                                                <!-- <span>4 Jan, 2014</span>
                                                <a href="post.html#comments"><span>3 Comments</span> -->
                                                </a>
                                                <div class="ot-star-rating">
                                                    <span style="width:60%"><strong class="rating">3</strong> out of 5</span></div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$tanlovlar[1]->image?>" alt="" class="item-photo" /></a>
                                            <div class="item-content">
                                                <h3><a href="post.html"><?=$tanlovlar[1]->title?></a></h3>
                                                <!-- <span>4 Jan, 2014</span>
                                                <a href="post.html#comments"><span>3 Comments</span> -->
                                                </a>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$tanlovlar[2]->image?>" alt="" class="item-photo" /></a>
                                            <div class="item-content">
                                                <h3><a href="post.html"><?=$tanlovlar[1]->title?></a></h3>
                                                <!-- <span>4 Jan, 2014</span>
                                                <a href="post.html#comments"><span>3 Comments</span> -->
                                                </a>
                                            </div>
                                        </div>

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
                                    <p>Bold and beautiful, I am sure there is something here for everyone! <a href="post-review.html">Read More ...</a></p>
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
                                    <p>Bold and beautiful, I am sure there is something here for everyone! <a href="post-review.html">Read More ...</a></p>
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
                                    <p>Bold and beautiful, I am sure there is something here for everyone! <a href="post-review.html">Read More ...</a></p>
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


                

