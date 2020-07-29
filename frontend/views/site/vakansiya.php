<?php 
use yii\widgets\LinkPager;
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
$lang = Yii::$app->language;
$query = Vacansy::find()->where(['lang'=>$lang]);
        // $pages = new Pagination(['totalCount' => $query->count()]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 5]);
        $vakant = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2><?= Yii::t('template','Vakansiya') ?></h2>
		</div>
		<a href="#l" class="upper-title"><i class="fa fa-home"></i></a>
		<div class="photo-gallery-blocks">

			<!-- BEGIN .item -->
			<?php foreach ($vakant as $value) : ?>
				<div class="item">

					<div class="item-content">
						<h3><a href="#">
							<?=$value->name ?>
						</a></h3>
						<p><?=$value->title ?></p>
						<p><?=$value->salary ?></p>
					</div>
				</div>
			<?php endforeach; ?>
			<!-- END .item -->




		</div>
		<!-- END .panel -->
	</div>
		<?= LinkPager::widget([
		'pagination' => $pages,
	]); ?>

</div>