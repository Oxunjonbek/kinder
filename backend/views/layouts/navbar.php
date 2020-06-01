<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\helpers\Helper;
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" id="pushmenu" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item dropdown">
            <?php $languageVal = \Yii::$app->language; ?>
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><?= ($languageVal == 'uz') ? "O'zbekcha" : (($languageVal == 'ru') ? 'Русский' : 'English') ?></a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <?php if($languageVal != 'uz'){ ?>
                    <li><a href="<?= \backend\components\Helper::createMultilanguageReturnUrl('uz') ?>" class="dropdown-item">O'zbekcha</a></li>
                <?php } if($languageVal != 'ru'){ ?>
                    <li><a href="<?= \backend\components\Helper::createMultilanguageReturnUrl('ru') ?>" class="dropdown-item">Русский</a></li>
                <?php } if($languageVal != 'en'){?>
                    <li><a href="<?= \backend\components\Helper::createMultilanguageReturnUrl('en') ?>" class="dropdown-item">English</a></li>
                <?php } ?>
            </ul>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" onclick="window.history.back()">
                <i class="fa fa-reply"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge"><span id="allNotification">0</span></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="<?= \yii\helpers\Url::to(['question/index']) ?>" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> <span id="question">0</span> Остались вопросы?
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?= \yii\helpers\Url::to(['get-consultation/index']) ?>" class="dropdown-item">
                    <i class="fas fa-copy mr-2"></i> <span id="get-consultation">0</span> Получить консультацию
                </a>
                <div class="dropdown-divider"></div>
            </div>
        </li>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <span class="d-none d-md-inline"><?= Yii::$app->user->identity->fio ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <?= Html::img('@web/adminlte304/dist/img/user2-160x160.jpg', ['alt' => 'User Image','class' => 'img-circle elevation-2']) ?>

                    <p>
                        Alexander Pierce - Web Developer
                        <small>Member since Nov. 2012</small>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <?= Html::beginForm(\yii\helpers\Url::base(true) . '/site/logout', "POST");?>
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                    <button type="submit" class="btn btn-default btn-flat float-right">Выход</button>
                    <?= Html::endform();?>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<?php
$this->registerJs(<<<JS
    
$(document).ready(function(){
    
    notifications();
    
    function notifications(){
        $.ajax({
          url: window.baseUrl + 'notification/index',
          method: 'GET',
          data:{},
          dataType: 'json',
          success: function(data){
              document.getElementById('get-consultation').innerHTML = data.getConsultationCount;
              document.getElementById('allNotification').innerHTML = data.allNotification;
              document.getElementById('question').innerHTML = data.question;
          }
        });   
    }
       
    setInterval(notifications, 10000); // 10 secunt
    
});
    
JS
);
?>
