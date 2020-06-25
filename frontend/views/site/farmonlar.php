<?php 
use yii\widgets\LinkPager; 
use yii\helpers\Url;
?>
<div class="main-content">


	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>Президент фармон ва қарорлари</h2>
		</div>
		<div class="blog-list style-1">
			<?php foreach ($farmonlar as $key => $value) : ?>
				<div class="item">
					<div class="item-header">
						<h3>
							<a href="<?=$value->address ?>"><?=$value->name ?></a>
						</h3>
						<p><?=$value->address ?></p>
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