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
 ?> 
 <div class="main-content">

						<!-- BEGIN .panel -->
						<div class="panel">
							<div class="p-title">
								<h2><?= Yii::t('template','Farmonlar') ?></h2>
							</div>
							<div class="blog-list style-1">
								<?php foreach ($farmonlar as $key => $value) : ?>
								<div class="item">
									<div class="item-header">
										<a href="blog.html" class="category-link" style="color: #c32929;"><strong>Design</strong></a>
										<h3><a href="post.html"><?=$value->address ?></a></h3>
										<p><?=$value->name ?></p>
									</div>
									<div class="item-footer">
										<!-- <span class="right">
											<a href="blog.html"><i class="fa fa-clock-o"></i> 4 Jan, 2014</a>
											<a href="blog.html"><i class="fa fa-comment"></i> 3</a>
										</span> -->
									</div>
								</div>
									<?php endforeach; ?>
								
				

							</div>
						<!-- END .panel -->
						</div>

						
					</div>