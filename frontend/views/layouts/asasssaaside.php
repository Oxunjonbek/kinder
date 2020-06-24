<ul class="menu-topbar top-links">
                        <?php if (user()->isGuest): ?>
                            <li><a href="<?= \yii\helpers\Url::to(['/site/auth']) ?>"><?= Yii::t('template', 'kirish'); ?> / <?= Yii::t('template', 'Ro‘yxatdan o‘tish'); ?></a></li>
                            <?php else: ?>
                                <li><?= \yii\helpers\Html::a('Chiqish ('.user()->identity->full_name.')', ['site/logout'], ['data-method' => 'post']) ?></li>
                            <?php endif; ?>
                        </ul>



                        <?php $action = Yii::$app->controller->action->id;
               // var_dump(!$action == 'contact');exit();
 if ($action != 'contact') {
                    echo $this->render(
                    'aside.php'
                );
                } ?>  



                <!-- <ul class="menu-topbar">
                        <li class="language menu-item-has-children">
                            <a href="#" class="toggle-sub-menu"><span class="flag"><img src="images/flag1.jpg" alt=""></span><?php if($lang =='uz'){echo "O'zbekcha";}else{echo "Русский";}?></a>
                            <ul class="list-language sub-menu">
                                <li>
                  <?= Html::a('<span class="fa fa-flag"></span> O\'zbekcha', array_merge(
                                                            \Yii::$app->request->get(),
                                                            [\Yii::$app->controller->route, 'language' => 'uz']
                                                          ),
                                                          [
                                                            'class' => 'language'
                                                          ]
                                                        ); ?>
                </li>
                                <li>
                  <?= Html::a('<span class="fa fa-flag"></span> Русский', array_merge(
                                                            \Yii::$app->request->get(),
                                                            [\Yii::$app->controller->route, 'language' => 'ru']
                                                          ),
                                                          [
                                                            'class' => 'language'
                                                          ]
                                                        ); ?>
                </li>
                            </ul>
                        </li>

                    </ul>
                    <ul class="le-first" style="background-color: rgb(11, 82, 100);">
                            <li style="background-color: rgb(11, 82, 100);"><a href="#">Telegram</a></li>
                            <li style="background-color: rgb(11, 82, 100);"><a href="#">Facebook</a></li>
                            <li style="background-color: rgb(11, 82, 100);"><a href="#">Instagram</a>
                        </ul> -->