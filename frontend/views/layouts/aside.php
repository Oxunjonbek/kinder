<?php 
use common\models\Qonunlar;
use common\models\Elonlar;
use yii\helpers\Url;
$qonunlar = Qonunlar::find()->limit(4)->all();
// $rows = Yii::$app->db->createCommand('SELECT * FROM `tadbir` RIGHT OUTER JOIN `tanlov` ON `tadbir`.`id` = `tanlov`.`id` LIMIT 0, 4')->queryAll();
$rows = Elonlar::find()->orderBy(['id'=>SORT_DESC])->limit(4)->all();

?>                    
<aside id="sidebar">

    <!-- BEGIN .widget -->
    <div class="widget" >
        <div class="w-title" >
            <h3 style="background-color: rgb(11, 82, 100);"><?=Yii::t('template','Murojaatlar')?></h3>
        </div>
        <div class="banner">
            <a href="<?=Url::to(['site/qabulhona'])?>" class="upper-title"><i class="fa fa-caret-down"></i></a>
            <a href="<?=Url::to(['site/qabulhona'])?>" ><img src="<?=Yii::getAlias('@web')?>/foto/images/987.jpg" alt="" /></a>
        </div>
        <!-- END .widget -->
    </div>

    <!-- BEGIN .widget -->
    <div class="widget">
        <div class="w-title tab-a"  >
            <h3 style="padding-left: 15px; padding-right: 14px; background-color: rgb(11, 82, 100);"><?=Yii::t('template','sunggi yangiliklar')?></h3>
            <!-- <h3 style="padding-left: 12px;padding-right: 12px;background-color: rgb(11, 82, 100);"><?=Yii::t('template','Ko‘p o‘qilgan yangiliklar')?></h3> -->
        </div>
        <div class="tab-d">

            <!-- First Tab -->
            <div class="article-list">
                <?php foreach ($rows as $key => $value) : ?>
                    <div class="item">
                        <a href="<?=Url::to(['site/elon-single','id'=>$value->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$value['image']?>" alt="" class="item-photo" /></a>
                        <div class="item-content">
                            <h3><a href="<?=Url::to(['site/elon-single','id'=>$value->id])?>">
                                <?=$value['title']?>
                            </a></h3>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Second Tab -->
                                <!-- <div class="article-list">
                                    <div class="item">
                                        <a href="#"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-3.jpg" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="#">Unexpected Drop in Euro Area</a></h3>
                                            <span>4 Jan, 2014</span>
                                            <a href="##comments"><span>0 Comments</span></a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <a href="#"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-1.jpg" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="#">BMW 530D Tunign from Hamman</a></h3>
                                            <span>4 Jan, 2014</span>
                                            <a href="##comments"><span>3 Comments</span></a>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <a href="#"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-2.jpg" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="#">Eurozone Manufacturing Industry Rises Sharply in January</a></h3>
                                            <span>15 JAN, 2014</span>
                                            <a href="##comments"><span>5 Comments</span></a>
                                        </div>
                                    </div>

                                    <div class="more-button">
                                        <a href="#">More Articles</a>
                                    </div>
                                </div> -->

                                <!-- Third Tab -->
                                <!-- <div class="comments-list">
                                    <div class="item">
                                        <img src="<?=Yii::getAlias('@web')?>/foto/images/photos/avatar-1.jpg" alt="" class="item-photo" />
                                        <div class="item-content">
                                            <h3>Lennon Taskill</h3>
                                            <p>An essent possim mandamus sit. Sea ne sale vocibus delicatissimi, diam eruditi deserunt.</p>
                                            <span><a href="#">View Comment</a></span>
                                            <span>4 Jan, 2014</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/avatar-2.jpg" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="#">Albano Ottaviano</a></h3>
                                            <p>An essent possim mandamus sit. Sea ne sale vocibus delicatissimi, diam eruditi deserunt.</p>
                                            <span><a href="#">View Comment</a></span>
                                            <span>4 Jan, 2014</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/avatar-1.jpg" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="#">Muireadhach Eutimio</a></h3>
                                            <p>An essent possim mandamus sit. Sea ne sale vocibus delicatissimi, diam eruditi deserunt.</p>
                                            <span><a href="#">View Comment</a></span>
                                            <span>4 Jan, 2014</span>
                                        </div>
                                    </div>
                                </div>
 -->
                            </div>
                            <!-- END .widget -->
                        </div>
                        
                        <!-- BEGIN .widget -->
                        <div class="widget">
                            <div class="w-title">
                                <h3 style="background-color: rgb(11, 82, 100);"><?=Yii::t('template','Qonunlar')?></h3>
                            </div>
                            <div class="article-list">
                                <?php foreach ($qonunlar as $key => $value) : ?>
                                    <div class="item">
                                        <a href="lex.uz"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/lex.uz.png" alt="" class="item-photo" /></a>
                                        <div class="item-content">
                                            <h3><a href="#">
                                                    <?=$value->name?>
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
                                <h3 style="background-color: rgb(11, 82, 100);"><?=Yii::t('template','Foydali manzillar')?></h3>

                            </div>
                            <div class="review-list">
                                <a href="#" class="upper-title"><i class="fa fa-caret-right"></i></a>
                                
                                <div class="item">
                                    <center>
                                     <a href="https://president.uz/" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/1.png" class="item-photo" alt="" /></a>
                                 </center>
                                 <center>
                                    <h3><a href="https://president.uz/" target="_blank"><?=Yii::t('template','portal')?></a></h3>
                                </center>
                            </div>

                            <div class="item">
                                <center>
                                    <a href="https://lex.uz/" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/2.png" class="item-photo" alt="" /></a>
                                </center>
                                <center>
                                    <h3><a href="https://lex.uz/" target="_blank"><?=Yii::t('template','milliyqonun')?></a></h3>
                                </center>
                            </div>


                            <div class="w-gallery">
                                <a href="photo-gallery.html" class="upper-title"><?=Yii::t('template','kupgalereya')?><i class="fa fa-caret-right"></i></a>

                                

                                <div class="w-photos">
                                    <a href="#" class="gallery-link-left"><i class="fa fa-chevron-left"></i></a>
                                    <a href="#" class="gallery-link-right"><i class="fa fa-chevron-right"></i></a>
                                </div>



                                <div class="item">
                                    <center> 
                                        <a href="https://lex.uz/" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/3.png" class="item-photo" alt="" /></a>
                                    </center>
                                    <center>
                                        <h3><a href="https://lex.uz/" target="_blank"><?=Yii::t('template','matbuoti')?></a></h3>
                                    </center>

                                </div>

                                <div class="item">
                                   <center>
                                    <a href="http://senat.gov.uz " target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/4.png" class="item-photo" alt="" /></a>
                                </center>
                                <center>
                                    <h3><a href="http://senat.gov.uz" target="_blank"><?=Yii::t('template','senati')?></a></h3>
                                </center>
                            </div>

                            <div class="item">
                                <center>
                                    <a href="http://parliament.gov.uz" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/5.png" class="item-photo" alt="" /></a>
                                </center>
                                <center>
                                    <h3><a href="http://parliament.gov.uz" target="_blank"><?=Yii::t('template','palatasi')?></a></h3>
                                </center>
                            </div>

                        </div>
                        <!-- END .widget -->
                    </div>

                    <!-- BEGIN .widget -->
                    <div class="widget">
                        <div class="w-title">
                            <h3 style="background-color: rgb(11, 82, 100);"><?=Yii::t('template','Foto Galeriya')?></h3>
                        </div>
                        <div class="w-gallery">
                            <a href="photo-gallery.html" class="upper-title"><?=Yii::t('template','kupgalereya')?><i class="fa fa-caret-right"></i></a>
                            <div class="w-photos">
                                <a href="#" class="gallery-link-left"><i class="fa fa-chevron-left"></i></a>
                                <a href="#" class="gallery-link-right"><i class="fa fa-chevron-right"></i></a>
                                <div class="photo-images">
                                    <a href="photo-gallery-single.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-15.jpg" alt="" /></a>
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
                            <h3 style="background-color: rgb(11, 82, 100);"><?=Yii::t('template','Qonun')?></h3>
                        </div>
                        <div class="tagcloud">
                            <a href="https://lex.uz/"><?=Yii::t('template','Qarorlar')?></a><a href="https://lex.uz/"><?=Yii::t('template','Nizomlar')?></a><a href="https://lex.uz/"><?=Yii::t('template','Tuzilma')?></a><a href="https://lex.uz/"><?=Yii::t('template','MMt')?></a><a href="https://lex.uz/"><?=Yii::t('template','nizomlar')?></a><a href="https://lex.uz/"><?=Yii::t('template','tartib')?></a><a href="https://lex.uz/"><?=Yii::t('template','kodeks')?></a><a href="https://lex.uz/"><?=Yii::t('template','hujjat')?></a>
                            <a href="https://lex.uz/"><?=Yii::t('template','ariza')?></a><a href="https://lex.uz/"><?=Yii::t('template','intellegat')?></a><a href="https://lex.uz/"><?=Yii::t('template','savol')?></a><a href="https://lex.uz/"><?=Yii::t('template','bog')?></a><a href="#"><?=Yii::t('template','bog\'cha')?></a><a href="#"><?=Yii::t('template','kalit')?></a><a href="#"><?=Yii::t('template','intensiv')?></a>
                        </div>
                        <!-- END .widget -->
                    </div>

                    <!-- BEGIN .widget -->

                    <!-- END .widget -->

                </aside>