<?php 
use yii\widgets\LinkPager; 
use yii\helpers\Url;

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