<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>lOGIN</title>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed <?= (isset($_COOKIE["collapse"])) ? $_COOKIE["collapse"] : '' ?>">
<script>
    const lang = '<?= Yii::$app->language ?>';
    if (lang == 'ru') {
        window.baseUrl = '<?= Url::base() ?>/';
    } else {
        window.baseUrl = '<?= Url::base() ?>/<?= Yii::$app->language ?>/';
    }
</script>
<?php $this->beginBody() ?>
<div class="wrapper">

    <!-- navbar end -->

    <!-- sidebar end -->

    <div class="content-wrapper">
        
        <!-- breadcrumb END -->

        <!-- Main content begin -->
        <section class="content">
            <?= $content ?>
        </section>
        <!-- Main content END -->
    </div>

   
    <!-- footer end -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php
    $this->registerJsFile(Yii::getAlias('@web') . '/adminlte304/plugins/jquery/jquery.min.js', ['position' => View::POS_HEAD]);
    $this->registerJsFile(Yii::getAlias('@web') . '/adminlte304/plugins/jquery-ui/jquery-ui.min.js', ['position' => View::POS_HEAD]);
?>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<?php $this->endBody() ?>
<?php
$this->registerJs(<<<JS
    
$(document).ready(function(){

    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays*24*60*60*1000));
      var expires = "expires="+ d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    
    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }
    
    $(document).on('click', '#pushmenu', function(e){
        let nameCollapse = getCookie('collapse');
        if (nameCollapse == ''){
            setCookie('collapse','sidebar-collapse',3);
        }else {
            setCookie('collapse','',3);
        }
        
    });
    
});
JS
);
?>
</body>
</html>
<?php $this->endPage() ?>


