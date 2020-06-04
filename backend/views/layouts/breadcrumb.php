<?php
    use yii\helpers\Url;
?>
 <?php 
// $pathInfo = Yii::$app->request->pathInfo 

//     if($pathInfo != '' && $pathInfo != 'site/index'){
//         $array = explode("/", $pathInfo);
//         if($array[1] == 'create' || $array[1] == 'update' || $array[1] == 'view'){
//             $url = $array[0].'/index';
//         }
//     }

?>
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $this->title ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                
                <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Главный</a></li>
               
                    <li class="breadcrumb-item"><a href="<?//= Url::to([$url]) ?>">Список</a></li>
                
                <li class="breadcrumb-item active"><?= $this->title ?></li>
                
            </ol>
        </div>
    </div>
</div>