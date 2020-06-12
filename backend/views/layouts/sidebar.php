<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Url::to(['site/index']) ?>" class="brand-link">
        <?= Html::img('@web/adminlte304/dist/img/AdminLTELogo.png', ['alt' => 'AdminLTE logo','class' => 'brand-image img-circle elevation-3', 'style' => 'opacity: .8']) ?>
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?= Html::img('@web/adminlte304/dist/img/user2-160x160.jpg', ['alt' => 'User Image','class' => 'img-circle elevation-2']) ?>
            </div>
            <div class="info">
                <a href="#" class="d-block">Админ</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php $pathInfo = Yii::$app->request->pathInfo ?>

                <li class="nav-item">
                    <a href="<?= Url::to(['site/index']) ?>" class="nav-link <?=($pathInfo == 'site/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Бошқарма
                            <!--<span class="right badge badge-danger">New</span>-->
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['genel/index']) ?>" class="nav-link <?=($pathInfo == 'our-product/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Рахбарият
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['ariza/index']) ?>" class="nav-link <?=($pathInfo == 'ariza/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Ариза
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['mtt/index']) ?>" class="nav-link <?=($pathInfo == 'mtt/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            МТТлар
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item"> -->
               <!--      <a href="<?= Url::to(['interaktiv/index']) ?>" class="nav-link <?=($pathInfo == 'interaktiv/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            МТТда электрон навбат ва бўш ўринлар ҳақида маълумот
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?= Url::to(['pedagog/index']) ?>" class="nav-link <?=($pathInfo == 'pedagog/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Педагогларга

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['ichki/index']) ?>" class="nav-link <?=($pathInfo == 'ichki/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Ички хужжатлар
                        </p>
                    </a>
                </li>

               <!--  <li class="nav-item">
                    <a href="<?= Url::to(['standart/index']) ?>" class="nav-link <?=($pathInfo == 'standart/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Стандарт
                        </p>
                    </a>
                </li> -->

                <li class="nav-item">
                    <a href="<?= Url::to(['bm/index']) ?>" class="nav-link <?=($pathInfo == 'bm/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            BМ қарорлари
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['elonlar/index']) ?>" class="nav-link <?=($pathInfo == 'elonlar/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-trophy text-teal"></i>
                        <p>
                           Эълонлар
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['farmonlar/index']) ?>" class="nav-link <?=($pathInfo == 'contact/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-phone-square"></i>
                        <p>
                            Фармонлар
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['nizom/index']) ?>" class="nav-link <?=($pathInfo == 'nizom/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Низомлар
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['qonunlar/index']) ?>" class="nav-link <?=($pathInfo == 'qonunlar/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Қонунлар
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['structure/index']) ?>" class="nav-link <?=($pathInfo == 'structure/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Тузилма
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['tadbir/index']) ?>" class="nav-link <?=($pathInfo == 'tadbir/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Тадбир
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['tanlov/index']) ?>" class="nav-link <?=($pathInfo == 'tanlov/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Танлов
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['tarkibiy-structure/index']) ?>" class="nav-link <?=($pathInfo == 'tarkibiy-structure/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Таркибий тузилма
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['vacansy/index']) ?>" class="nav-link <?=($pathInfo == 'vacansy/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                           Ваканция
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['user/index']) ?>" class="nav-link <?=($pathInfo == 'user/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-user text-danger"></i>
                        <p>
                            Пользователь
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>