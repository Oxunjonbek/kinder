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
$query = TarkibiyStructure::find()->where(['lang'=>$lang]);
        // $pages = new Pagination(['totalCount' => $query->count()]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 5]);
        $tarkibiy = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
?>
<div class="main-content">

						<!-- BEGIN .panel -->
						<div class="panel">
							<div class="p-title" >
								<h2 style="background-color: rgb(11, 82, 100);">Tarkibiy Struktura</h2>
							</div>
							<div class="blog-list style-1">
								<?php foreach($tarkibiy as $genel):?>
								<div class="item" >
									<div class="item-header">
										<a href="#"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tarkibiy/<?=$genel->image?>" alt="" class="item-photo" style="width: 200px; height: 250px; border:solid blue 1px; "/></a>
									</div>
									
									<div class="item-content" style="padding-top:20px;">
										<!-- <strong class="category-link">Лавозими</strong> -->
										<h3 style="font-family: Times New Roman; font-weight: bold;"><?=$genel->name?></h3>
										<p ><?=$genel->title?></p>
									</div>
									<div class="item-footer">
										<span class="left" style="font-size: 20px;font-family:Times New Roaman;">
											<?=$genel->phone?>
										</span>
									</div>
									
								</div>
								<?php endforeach;?>
							
							</div>
						<!-- END .panel -->
						</div>

	<?= LinkPager::widget([
		'pagination' => $pages,
	]); ?>

					</div>