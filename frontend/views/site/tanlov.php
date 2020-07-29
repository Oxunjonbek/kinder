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
$lang = \Yii::$app->language;
 $query = Tanlov::find()->where(['lang'=>$lang]);
        // $pages = new Pagination(['totalCount' => $query->count()]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 5]);
        $tanlov = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2><?= Yii::t('template','Tanlovlar') ?></h2>
		</div>
		<div class="blog-list style-2">

			<?php foreach ($tanlov as $blog) :?>
				<div class="item">
					<div class="item-header">
						<a href="<?=Url::to(['site/tanlov-single','id'=>$blog->id])?>">
							<img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$blog->image ?>" alt="" class="item-photo" />
						</a>
						<h3>
							<a href="<?=Url::to(['site/tanlov-single','id'=>$blog->id])?>">
								<?=$blog->title ?>
							</a>
						</h3>
					</div>
					<!-- <div class="item-content">
					
					</div> -->
					<div class="item-footer">
						<a href="#" class="left" style="color: #c32929;">
							<strong><?= Yii::t('template','Yangiliklar') ?></strong>
						</a>
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