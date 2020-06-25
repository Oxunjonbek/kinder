<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use common\models\Genel;
use common\models\Mtt;
use common\models\Vacansy;
use common\models\Structure;
use common\models\TarkibiyStructure;
use common\models\Tadbir;
use common\models\Tanlov;
use common\models\Elonlar;
use common\models\Qonunlar;
use common\models\Standart;
use common\models\Nizom;
use common\models\Farmonlar;
use common\models\Ariza;
use common\models\Bm;
use common\models\Ichki;
use common\models\Interaktiv;
use common\models\Pedagog;
use common\models\Qabulhona;
use yii\data\Pagination;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
