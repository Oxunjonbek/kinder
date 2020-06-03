<?php
use yii\helpers\Url;
?>
<nav class="main-menu">

                    <!-- BEGIN .wrapper -->
                    <div class="wrapper">

                        <ul class="menu">
                            <li><a href="index.html">Bosh sahifa</a></li>
                            <li><a href="<?=Url::to(['site/tadbirlar'])?>">Бўлим ҳақида</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=Url::to(['site/rahbariyat'])?>">Рахбарият</a></li>
                                    <li><a href="<?=Url::to(['site/tuzilma'])?>">Тузилма</a></li>
                                    <li><a href="<?=Url::to(['site/tarkibiy'])?>">Таркибий тузилма</a></li>
                                    <li><a href="<?=Url::to(['site/vakansiyalar'])?>">Ваканциялар</a></li>
                                </ul>
                            </li>

                            <li class="mega-menu-full"><a href="<?=Url::to('#')?>">Янгиликлар</a>
                                <ul class="sub-menu">
                                    <li>
                                        <ul class="menu-blocks paragraph-row">
                                            <!-- BEGIN .menu-block -->
                                            <li class="menu-block column4 color-light">
                                                <div class="menu-content category-menu">
                                                    <a href="<?=Url::to(['site/tadbirlar'])?>">Тадбирлар</a>
                                                    <a href="<?=Url::to(['site/tanlovlar'])?>">Танловлар</a>
                                                    <a href="<?=Url::to(['site/elonlar'])?>">Эълонлар ва тендерлар</a>
                                                </div>
                                                <!-- END .menu-block -->
                                            </li>
                                            <!-- BEGIN .menu-block -->
                                            <li class="menu-block column4">
                                                <div class="menu-content featured-post">
                                                    <div class="item-photo">
                                                        <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-4.jpg" alt="" /></a>
                                                        <h3><a href="post.html">BMW E60 Test Drive from TOP GEAR</a></h3>
                                                    </div>
                                                    <div class="item-content">
                                                        <p>Sotheby’s in London is getting ready for another seasonal display of wealth, as some of world’s.</p>
                                                        <!-- <div class="article-icons">
                                                            <span class="article-icon">4 JAN, 2014</span>
                                                            <a href="post.html#comments" class="article-icon">3 COMMENTS</a>
                                                            <a href="<?=Url::to(['site/ariza'])?>" class="article-icon">Orange-Themes</a>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <!-- END .menu-block -->
                                            </li>
                                            <!-- BEGIN .menu-block -->
                                            <li class="menu-block column4">
                                                <div class="menu-content article-list">
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
                                                    </div>
                                                </div>
                                                <!-- END .menu-block -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?=Url::to('#')?>">Ҳужжатлар</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=Url::to(['site/qonunlar'])?>">Қонунлар</a></li>
                                    <li><a href="<?=Url::to(['site/standartlar'])?>">Давлат стандартлари</a></li>
                                    <li><a href="<?=Url::to(['site/nizom'])?>">Бўлим низоми</a></li>
                                    <li><a href="<?=Url::to(['site/farmonlar'])?>">Президент фармон ва қарорлари</a></li>
                                    <li><a href="<?=Url::to(['site/tavsiyalar'])?>">Низом ва тавсиялар</a></li>
                                    <li><a href="<?=Url::to(['site/qarorlar'])?>">ВМ қарор ва фармойишлари</a></li>
                                    <li><a href="<?=Url::to(['site/hujjatlar'])?>">Ички ҳужжатлар</a></li>
                                </ul>
                            </li> 
                            <li><a href="<?=Url::to('#')?>">Интерактив хизматлар</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=Url::to(['site/elektron'])?>">МТТда электрон навбат ва бўш ўринлар ҳақида маълумот</a></li>
                                    <li><a href="<?=Url::to(['site/pedagoglar'])?>">Педагогларга
</a></li>
                                    <li><a href="<?=Url::to(['site/ota-onalar'])?>">Ота-оналарга
</a></li>
                                    <li><a href="<?=Url::to(['site/savol-javob'])?>">Савол-жавоблар</a></li>
                                    <li><a href="<?=Url::to(['site/ariza'])?>">Ариза ва бланкалар намунаси</a></li>
                                </ul>
                            </li>
                            <li><a href="<?=Url::to(['site/mttlar'])?>">МТТлар</a></li>
                            <li><a href="<?=Url::to(['site/qabulhona'])?>">Виртуал қабулхона</a></li>
                            <li><a href="<?=Url::to(['site/contact'])?>" style="border-bottom: 3px solid #1AB3EE;">Алоқа</a></li>
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