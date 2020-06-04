<?php 
use common\models\Qonunlar;
$qonunlar = Qonunlar::find()->limit(4)->all();
$rows = Yii::$app->db->createCommand('SELECT * FROM `tadbir` RIGHT OUTER JOIN `tanlov` ON `tadbir`.`id` = `tanlov`.`id` LIMIT 0, 4')->queryAll();
        // var_dump($rows);exit();
         ?>                    
                    <aside id="sidebar">
                        
                        <!-- BEGIN .widget -->
                        <div class="widget">
                            <div class="w-title">
                                <h3>Мурожаатлар</h3>
                            </div>
                            <div class="banner">
                                <a href="#" class="upper-title">Саволларингизни йўлланг<i class="fa fa-caret-down"></i></a>
                                <a href="#" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/no-banner-300x250.png" alt="" /></a>
                            </div>
                        <!-- END .widget -->
                        </div>
                        
                        <!-- BEGIN .widget -->
                        <div class="widget">
                            <div class="w-title tab-a" >
                                <h3 style="padding-left: 15px; padding-right: 14px;">Сўнги янгиликлар</h3><h3 style="padding-left: 12px;padding-right: 12px;">Кўп ўқилган янгиликлар</h3>
                            </div>
                            <div class="tab-d">

                                <!-- First Tab -->
                                <div class="article-list">
                                    <?php foreach ($rows as $key => $value) : ?>
                                    <div class="item">
                                        <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-1.jpg" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="post.html"><?=$value['title'];
                                            // var_dump($value['title']);exit();?></a></h3>
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
                                    </div>
                                    
                                    <div class="item">
                                        <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-3.jpg" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="post.html">Unexpected Drop in Euro Area</a></h3>
                                            <span>4 Jan, 2014</span>
                                            <a href="post.html#comments"><span>0 Comments</span></a>
                                        </div>
                                    </div> -->

                                    <div class="more-button">
                                        <a href="blog.html">Ва ҳоказо ...</a>
                                    </div>
                                </div>

                                <!-- Second Tab -->
                                <div class="article-list">
                                    <div class="item">
                                        <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-3.jpg" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="post.html">Unexpected Drop in Euro Area</a></h3>
                                            <span>4 Jan, 2014</span>
                                            <a href="post.html#comments"><span>0 Comments</span></a>
                                        </div>
                                    </div>

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
                                            <span>15 JAN, 2014</span>
                                            <a href="post.html#comments"><span>5 Comments</span></a>
                                        </div>
                                    </div>

                                    <div class="more-button">
                                        <a href="blog.html">More Articles</a>
                                    </div>
                                </div>

                                <!-- Third Tab -->
                                <div class="comments-list">
                                    <div class="item">
                                        <img src="<?=Yii::getAlias('@web')?>/foto/images/photos/avatar-1.jpg" alt="" class="item-photo" />
                                        <div class="item-content">
                                            <h3>Lennon Taskill</h3>
                                            <p>An essent possim mandamus sit. Sea ne sale vocibus delicatissimi, diam eruditi deserunt.</p>
                                            <span><a href="post.html">View Comment</a></span>
                                            <span>4 Jan, 2014</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/avatar-2.jpg" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="#">Albano Ottaviano</a></h3>
                                            <p>An essent possim mandamus sit. Sea ne sale vocibus delicatissimi, diam eruditi deserunt.</p>
                                            <span><a href="post.html">View Comment</a></span>
                                            <span>4 Jan, 2014</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/avatar-1.jpg" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="#">Muireadhach Eutimio</a></h3>
                                            <p>An essent possim mandamus sit. Sea ne sale vocibus delicatissimi, diam eruditi deserunt.</p>
                                            <span><a href="post.html">View Comment</a></span>
                                            <span>4 Jan, 2014</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <!-- END .widget -->
                        </div>
                        
                        <!-- BEGIN .widget -->
                        <div class="widget">
                            <div class="w-title">
                                <h3>Қонунлар</h3>
                            </div>
                            <div class="article-list">
                                <?php foreach ($qonunlar as $key => $value) : ?>
                                <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-1.jpg" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html"><?=$value->name?></a></h3>
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
                                </div>
                                
                                <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-3.jpg" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html">Unexpected Drop in Euro Area</a></h3>
                                        <span>4 Jan, 2014</span>
                                        <a href="post.html#comments"><span>0 Comments</span></a>
                                    </div>
                                </div> -->

                                <div class="more-button">
                                    <a href="blog.html">Ва ҳоказо ...</a>
                                </div>

                            </div>
                        <!-- END .widget -->
                        </div>
                        
                        <!-- BEGIN .widget -->
                        <div class="widget">
                            <div class="w-title">
                                <h3>Ҳамкор ташкилотлар</h3>
                            </div>
                            <div class="review-list">
                                <a href="blog.html" class="upper-title"><i class="fa fa-caret-right"></i></a>
                                
                                <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-6.jpg" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html">Vintage Clock GB15 Review</a></h3>
                                        <span class="review-rating" itemprop="ratingValue">3.5</span>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-7.jpg" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html">New and shiny iPhone5c review from Orange-Themes</a></h3>
                                        <span class="review-rating" itemprop="ratingValue">5</span>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-8.jpg" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html">Nokia Lumia 925 Review</a></h3>
                                        <span class="review-rating" itemprop="ratingValue">75%</span>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-9.jpg" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html">Samsung Galaxy Gear Watch Review by Maarcis</a></h3>
                                        <span class="review-rating" itemprop="ratingValue">85%</span>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-10.jpg" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html">Edgars BMW 530D M-Pack Test drive</a></h3>
                                        <span class="review-rating" itemprop="ratingValue">100%</span>
                                    </div>
                                </div>

                            </div>
                        <!-- END .widget -->
                        </div>
                        
                        <!-- BEGIN .widget -->
                        <div class="widget">
                            <div class="w-title">
                                <h3>Фото Галерия</h3>
                            </div>
                            <div class="w-gallery">
                                <a href="photo-gallery.html" class="upper-title">More Galleries<i class="fa fa-caret-right"></i></a>
                                <div class="w-photos">
                                    <a href="#" class="gallery-link-left"><i class="fa fa-chevron-left"></i></a>
                                    <a href="#" class="gallery-link-right"><i class="fa fa-chevron-right"></i></a>
                                    <div class="photo-images">
                                        <a href="photo-gallery-single.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-11.jpg" alt="" /></a>
                                        <a href="photo-gallery-single.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-12.jpg" alt="" /></a>
                                        <a href="photo-gallery-single.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-13.jpg" alt="" /></a>
                                        <a href="photo-gallery-single.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-14.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        <!-- END .widget -->
                        </div>
                        
                        <!-- BEGIN .widget -->
                        <div class="widget">
                            <div class="w-title">
                                <h3>Калит сўзлар</h3>
                            </div>
                            <div class="tagcloud">
                                <a href="blog.html">Omnes</a><a href="blog.html">definitionem</a><a href="blog.html">accommodare</a><a href="blog.html">intellegat</a><a href="blog.html">quas</a><a href="blog.html">theophrastus</a><a href="blog.html">commune</a><a href="blog.html">eleifend</a>
                                <a href="blog.html">Omnes</a><a href="blog.html">definitionem</a><a href="blog.html">intellegat</a><a href="blog.html">accommodare</a><a href="#">quas</a><a href="blog.html">commune</a><a href="blog.html">eleifend</a>
                            </div>
                        <!-- END .widget -->
                        </div>
                        
                        <!-- BEGIN .widget -->
                        
                        <!-- END .widget -->

                    </aside>