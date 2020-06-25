<?php 
use yii\widgets\LinkPager; 
use yii\helpers\Url;
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
$query = Ichki::find()->where(['lang'=>$lang]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 5]);
        $ichki = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();

        $farmonlar = Farmonlar::find()->where(['lang'=>$lang])->all();
?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>Ички ҳужжатлар</h2>
		</div>
		<div class="blog-list style-1">
			<?php foreach ($ichki as $key => $value) : ?>
				<div class="item">
					<div class="item-header">
						<a href="#" class="category-link" style="color: #c32929;">
							<!-- <strong>Design</strong> -->
						</a>
						<h3><a href="<?=$value->file ?>"><?=$value->name ?></a></h3>
					</div>
					<div class="item-footer">
					</div>
				</div>
			<?php endforeach; ?>


		</div>
		<!-- END .panel -->
	</div>

	<?= LinkPager::widget([
		'pagination' => $pages,
	]);?>
</div>