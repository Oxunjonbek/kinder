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
$query = Nizom::find()->where(['lang'=>$lang]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 5]);
        $nizomlar = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
?>

<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<?php
			$action  = Yii::$app->controller->action->id;
			// var_dump($action);exit();
			 if ($action=='nizom') {
				echo '<h2>Бўлим низоми</h2>';
			} else{
				echo '<h2>Низом ва тавсиялар</h2>';
			}?>
		</div>
		<div class="blog-list style-1">
			<?php foreach ($nizomlar as $key => $value) : ?>
				<div class="item">
					
						<h3><a href="#"><?=$value->title?></a></h3>
						<a href="#" class="category-link" style="color: #648126;">
						<p><?=$value->text?></p></a>
					
								</div>
							<?php endforeach; ?>

						</div>
						<!-- END .panel -->
					</div>
<!-- lindegr -->

				</div>