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
$tadbir = Tadbir::find()->where(['lang'=>$lang])->where(['id'=>$id])->one();
 ?>

<div class="main-content">

						<!-- BEGIN .panel -->
						<div class="panel">
							<div class="shortcode-content hreview">
								<div class="article-head">
									<h1 class="fn"><?=$tadbir->title?></h1>

								</div>

								<div class="paragraph-row">
									<div class="column12">
										<div class="review-photo">
											<img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$tadbir->image?>" alt="" />
										</div>
									</div>
									<!-- <div class="column6"> -->
										
										<!-- BEGIN .panel -->
										<!-- <div class="panel">
											<div class="p-title">
												<h2>Overview</h2>
											</div>
											<ul>
											</ul>
										</div> -->
										<!-- END .panel -->

									<!-- </div> -->
								</div>

								<p class="description"><?=$tadbir->text?></p>

							</div>
						<!-- END .panel -->
						</div>
						

						
	
					</div>