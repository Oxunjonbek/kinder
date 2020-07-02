<?php
use yii\helpers\Url;
use common\models\Elonlar;
$elon = Elonlar::find()->orderBy(['id'=>SORT_DESC])->one();
$elonlar = Elonlar::find()->orderBy(['id'=>SORT_DESC])->limit(4)->all();
?>
<nav class="main-menu" style="background-color: rgb(11, 82, 100);">

                    <!-- BEGIN .wrapper -->
                    <div class="wrapper">

                        <ul class="menu">
                            <li><a href="<?=Url::to(['site/index'])?>"><?= Yii::t('template', 'Bosh sahifa'); ?></a></li>
                            <li><a href="<?=Url::to(['site/tadbirlar'])?>"><?= Yii::t('template', 'Bolim haqida'); ?></a>
                                <ul class="sub-menu">
                                    <li><a href="<?=Url::to(['site/rahbariyat'])?>"><?= Yii::t('template', 'Raxbariyat'); ?></a></li>
                                    <li><a href="<?=Url::to(['site/tuzilma'])?>"><?= Yii::t('template', 'Tuzilma'); ?></a></li>
                                    <li><a href="<?=Url::to(['site/tarkibiy'])?>"><?= Yii::t('template', 'Tarkibiy tuzilma'); ?></a></li>
                                    <li><a href="<?=Url::to(['site/vakansiyalar'])?>"><?= Yii::t('template', 'Bo\'sh ish o\'rinlari'); ?></a></li>
                                </ul>
                            </li>

                            <li class="mega-menu-full"><a href="<?=Url::to('#')?>"><?= Yii::t('template', 'Yangiliklar'); ?></a>
                                <ul class="sub-menu">
                                    <li>
                                        <ul class="menu-blocks paragraph-row">
                                            <!-- BEGIN .menu-block -->
                                            <li class="menu-block column4 color-light">
                                                <div class="menu-content category-menu">
                                                    <a href="<?=Url::to(['site/tadbirlar'])?>"><?= Yii::t('template', 'Tadbirlar'); ?></a>
                                                    <a href="<?=Url::to(['site/tanlovlar'])?>"><?= Yii::t('template', 'Tadbirlar'); ?>Танловлар</a>
                                                    <a href="<?=Url::to(['site/elonlar'])?>"><?= Yii::t('template', 'Tadbirlar'); ?>Эълонлар ва тендерлар</a>
                                                </div>
                                                <!-- END .menu-block -->
                                            </li>
                                            <!-- BEGIN .menu-block -->
                                            <li class="menu-block column4">
                                                <div class="menu-content featured-post">
                                                    <div class="item-photo">
                                                        <a href="<?=Url::to(['site/elonlar'])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$elon->image?>" alt="" /></a>
                                                        <h3><a href="<?=Url::to(['site/elonlar'])?>"></a></h3>
                                                    </div>
                                                    <div class="item-content">
                                                         <p><?=$elon->title?></p>
                                                    </div>
                                                </div>
                                                <!-- END .menu-block -->
                                            </li>
                                            <!-- BEGIN .menu-block -->
                                            <li class="menu-block column4">
                                                <div class="menu-content article-list">
                                                    <?php foreach ($elonlar as $key => $value) : ?>
                                                    <div class="item">
                                                        <a href="<?=Url::to(['site/elonlar'])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$value->image?>" alt="" class="item-photo" /></a>
                                                        <div class="item-content">
                                                            <h3><a href="<?=Url::to(['site/elonlar'])?>"><?=$value->title?></a></h3>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                </div>
                                                <!-- END .menu-block -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?=Url::to('#')?>"><?= Yii::t('template', 'Xujjatlar'); ?></a>
                                <ul class="sub-menu">
                                    <li><a href="<?=Url::to(['site/qonunlar'])?>"><?= Yii::t('template', 'Qonunlar'); ?></a></li>
                                   <!--  <li><a href="<?=Url::to(['site/standartlar'])?>">Давлат стандартлари</a></li> -->
                                    <!-- <li><a href="<?=Url::to(['site/nizom'])?>">Бўлим низоми</a></li> -->
                                    <li><a href="<?=Url::to(['site/farmonlar'])?>"><?= Yii::t('template', 'Prezident farmon va qarorlari'); ?></a></li>
                                    <!-- <li><a href="<?=Url::to(['site/tavsiyalar'])?>">Низом ва тавсиялар</a></li> -->
                                    <li><a href="<?=Url::to(['site/qarorlar'])?>"><?= Yii::t('template', 'BM qaror va farmoyishlari'); ?></a></li>
                                    <li><a href="<?=Url::to(['site/ichki'])?>"><?= Yii::t('template', 'Ichki hujjatlar'); ?></a></li>
                                </ul>
                            </li> 
                            <li><a href="<?=Url::to('#')?>"><?= Yii::t('template', 'Interaktiv xizmatlar'); ?></a>
                                <ul class="sub-menu">
                                   <!-- <li><a href="<?=Url::to(['site/elektron'])?>">МТТда электрон навбат ва бўш ўринлар ҳақида маълумот</a></li>-->
                                    <li><a href="<?=Url::to(['site/pedagoglar'])?>"><?= Yii::t('template', 'Pedagoglar'); ?>
</a></li>
                                    <li><a href="<?=Url::to(['site/ota-onalar'])?>"><?= Yii::t('template', 'ota-onalarga'); ?>
</a></li>
                                    <li><a href="<?=Url::to(['site/savol-javob'])?>"><?= Yii::t('template', 'Savol-javoblar'); ?></a></li>
                                    <li><a href="<?=Url::to(['site/ariza'])?>"><?= Yii::t('template', 'Ariza va blanklar namunasi'); ?></a></li>
                                </ul>
                            </li>
                            <li><a href="<?=Url::to(['site/mttlar'])?>"><?= Yii::t('template', 'MTTLAR'); ?></a></li>
                            
                            <li><a href="<?=Url::to(['site/contact'])?>" style="border-bottom: 3px solid #1AB3EE;"><?= Yii::t('template', 'Aloqa'); ?></a></li>
                        </ul>

                        <div class="search-block">
                            <form action="<?=Url::to(['site/ariza'])?>">
                                <input type="text" class="search-value" value="" />
                                <input type="submit" class="search-button" value="&#xf002;" />
                            </form>
                        </div>

                        <!-- END .wrapper -->
                    </div>

                </nav>