<?php 
use yii\widgets\LinkPager;
?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>Vakansiya</h2>
		</div>
		<a href="#l" class="upper-title"><i class="fa fa-home"></i></a>
		<div class="photo-gallery-blocks">

			<!-- BEGIN .item -->
			<?php foreach ($vakant as $value) : ?>
				<div class="item">

					<div class="item-content">
						<h3><a href="#">
							<?=$value->name ?>
						</a></h3>
						<p><?=$value->title ?></p>
						<p><?=$value->salary ?></p>
					</div>
				</div>
			<?php endforeach; ?>
			<!-- END .item -->




		</div>
		<!-- END .panel -->
	</div>
		<?= LinkPager::widget([
		'pagination' => $pages,
	]); ?>

</div>