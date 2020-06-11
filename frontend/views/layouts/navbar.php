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
                            <li><a href="<?=Url::to(['site/index'])?>">Бош саҳифа</a></li>
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
                                                        <a href="<?=Url::to(['site/elonlar'])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$elon->image?>" alt="" /></a>
                                                        <h3><a href="<?=Url::to(['site/elonlar'])?>"><?=$elon->title?></a></h3>
                                                    </div>
                                                    <div class="item-content">
                                                        <p><?=$elon->text?></p>
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
                            <li><a href="<?=Url::to('#')?>">Ҳужжатлар</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=Url::to(['site/qonunlar'])?>">Қонунлар</a></li>
                                    <li><a href="<?=Url::to(['site/standartlar'])?>">Давлат стандартлари</a></li>
                                    <li><a href="<?=Url::to(['site/nizom'])?>">Бўлим низоми</a></li>
                                    <li><a href="<?=Url::to(['site/farmonlar'])?>">Президент фармон ва қарорлари</a></li>
                                    <li><a href="<?=Url::to(['site/tavsiyalar'])?>">Низом ва тавсиялар</a></li>
                                    <li><a href="<?=Url::to(['site/qarorlar'])?>">ВМ қарор ва фармойишлари</a></li>
                                    <li><a href="<?=Url::to(['site/ichki'])?>">Ички ҳужжатлар</a></li>
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