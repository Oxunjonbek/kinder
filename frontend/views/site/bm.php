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
$bm = Bm::find()->where(['lang'=>$lang])->all(); ?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2><?= Yii::t('template','VM qaror va farmoyishlari') ?></h2>
		</div>
		<div class="blog-list style-1">
			<?php  foreach ($bm as $key => $value) : ?>
			<div class="item">
				<div class="item-header">
					<h3><a href="<?=$value->address; ?>">
						<?=$value->name ?></a></h3>
						<!-- <p><?=$value->address ?></p> -->
					</div>
				</div>
			<?php endforeach; ?>



		</div>
		<!-- END .panel -->
	</div>


	<!-- lin pager uchun -->

</div>