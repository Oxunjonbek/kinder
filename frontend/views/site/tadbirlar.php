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

$query = Tadbir::find()->where(['lang'=>$lang])->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $pages->pageSizeParam = false;
        $tadbir = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>Tadbirlar</h2>
		</div>
		<div class="blog-list style-2">

			<?php foreach ($tadbir as $blog) :?>
				<div class="item">
					<div class="item-header">
						<a href="<?=Url::to(['site/tadbir-single','id'=>$blog->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$blog->image ?>" alt="" class="item-photo" /></a>
						<h3><a href="<?=Url::to(['site/tadbir-single','id'=>$blog->id])?>"><?=$blog->title ?> </a></h3>
					</div>
					<!-- <div class="item-content">
						
					</div> -->
					<div class="item-footer">
						<a href="#" class="left" style="color: #c32929;">
							<strong>Янгиликлар</strong>
						</a>
					</div>
				</div>
				
			<?php endforeach; ?>
			<?= LinkPager::widget([
				'pagination' => $pages,
			]);?>	
		</div>
		<!-- END .panel -->
	</div>
</div>