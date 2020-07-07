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

        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <span class="d-none d-md-inline">
                        Logout
                    </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <!-- <li class="user-header bg-primary">
                    <?= Html::img('@web/adminlte304/dist/img/user2-160x160.jpg', ['alt' => 'User Image','class' => 'img-circle elevation-2']) ?>

                    <p>
                        Alexander Pierce - Web Developer
                        <small>Member since Nov. 2012</small>
                    </p>
                </li> -->
                <!-- Menu Footer-->
                <li class="btn btn-primary">
                    <?= Html::beginForm(\yii\helpers\Url::base(true) . '/site/logout', "POST");?>
                    <!-- <a href="#" class="btn btn-primary btn-flat">Profile</a> -->
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
