<?php 
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
$lang = \Yii::$app->language;
$pedagoglar = Pedagog::find()->where(['lang'=>$lang])->all();
?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>
				<?= Yii::t('template','pedagoglar') ?>
			</h2>
		</div>
		<div class="blog-list style-1">
			<?php foreach ($pedagoglar as $key => $value) :?>
				<div class="item">

						<h3><a href="#"><?=$value->name?></a></h3>
						<p><?=$value->prof?></p>


				</div>
			<?php endforeach; ?>


		</div>
		<!-- END .panel -->
	</div>



</div>