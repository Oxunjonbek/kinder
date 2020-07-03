<?php 
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
$mttlar = Mtt::find()->where(['lang'=>$lang])->all();
?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2><?= Yii::t('template','MTTLAR') ?></h2>
		</div>
		<div class="blog-list style-1" >

			<?php foreach ($mttlar as $key => $value) :?>
				
					
				
				<div class="item" class="col-sm" style="float: left; margin-right: 14px;">

					<h3 style="text-indent: 60px;"><?=$value->name?></h3>
					<p style="color: #339966; font-size: 14px; font-family: Times New Roman;">
						<span style="color: #008000;font-size: 14px; font-weight: bold;"><?= Yii::t('template','mudira') ?>:
						</span>
						<?=$value->prof?>
					</p>
					<p style="color: #339966; font-size: 14px;">
						<span style="color: #008000;font-size: 14px; font-weight: bold;"><?= Yii::t('template','Phone') ?>:
						</span>
						<?=$value->phone?>
							
					</p>
					<p style="color: #339966; font-size: 14px;">
						<span style="color: #008000;font-size: 14px; font-weight: bold;">
							<?= Yii::t('template','manzil1') ?>:
						</span>
						<?=$value->address?>
							
					</p>
				</div>

				
			<?php endforeach; ?>
		</div>
		<!-- END .panel -->
	</div>



</div>