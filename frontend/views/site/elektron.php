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
 $interaktiv = Interaktiv::find()->where(['lang'=>$lang])->all();
  ?> 	<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>МТТда электрон навбат ва бўш ўринлар ҳақида маълумот</h2>
		</div>
		<div class="blog-list style-1">

			<div class="item">

				<div class="col-md-4">
						<ul class="btn-group-vertical">
				<?php foreach ($interaktiv as $key => $value) :?>
							<li>
								<h3><a href="post.html"><?=$value->name?></a></h3>
						<p><?=$value->address?></p>
					</li>

					<?php endforeach; ?>
						</ul>
					</div>
				</div>



			</div>
			<!-- END .panel -->
		</div>


	</div>