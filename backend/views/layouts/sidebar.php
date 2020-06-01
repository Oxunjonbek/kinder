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
                            Smart Technology
                            <!--<span class="right badge badge-danger">New</span>-->
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['our-product/index']) ?>" class="nav-link <?=($pathInfo == 'our-product/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Наши продукты
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['our-partner/index']) ?>" class="nav-link <?=($pathInfo == 'our-partner/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Наши партнеры
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['customer-reviews/index']) ?>" class="nav-link <?=($pathInfo == 'customer-reviews/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-trophy text-teal"></i>
                        <p>
                            Отзывы
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['contact/index']) ?>" class="nav-link <?=($pathInfo == 'contact/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-phone-square"></i>
                        <p>
                            Контакт
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['get-consultation/index']) ?>" class="nav-link <?=($pathInfo == 'get-consultation/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Получить консультацию
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['question/index']) ?>" class="nav-link <?=($pathInfo == 'question/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Остались вопросы?
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['replaces/index']) ?>" class="nav-link <?=($pathInfo == 'replaces/index' ? 'active' : '')?>">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Вопросы картинки
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['list-gmail/index']) ?>" class="nav-link <?=($pathInfo == 'list-gmail/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Список Маил
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['logo/index']) ?>" class="nav-link <?=($pathInfo == 'logo/index' ? 'active' : '')?>">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Логотип
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