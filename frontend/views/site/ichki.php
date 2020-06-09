<?php 
use yii\widgets\LinkPager; 
use yii\helpers\Url;

?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>Ички ҳужжатлар</h2>
		</div>
		<div class="blog-list style-1">
			<?php foreach ($ichki as $key => $value) : ?>
				<div class="item">
					<div class="item-header">
						<a href="#" class="category-link" style="color: #c32929;">
							<!-- <strong>Design</strong> -->
						</a>
						<h3><a href="<?=$value->file ?>"><?=$value->name ?></a></h3>
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