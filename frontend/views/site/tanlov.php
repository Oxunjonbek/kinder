<?php 
use yii\widgets\LinkPager; 
use yii\helpers\Url;
?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>Танловлар</h2>
		</div>
		<div class="blog-list style-2">

			<?php foreach ($tanlov as $blog) :?>
				<div class="item">
					<div class="item-header">
						<a href="<?=Url::to(['site/tanlov-single','id'=>$blog->id])?>">
							<img src="<?=Yii::getAlias('@web')?>/admin/uploads/tanlov/<?=$blog->image ?>" alt="" class="item-photo" />
						</a>
						<h3>
							<a href="<?=Url::to(['site/tanlov-single','id'=>$blog->id])?>">
								<?=$blog->title ?>
							</a>
						</h3>
					</div>
					<div class="item-content">
						<p>
							<?php $tad = mb_substr($blog->text,0,200); ?>
							<?=$tad?>...
						</p>
					</div>
					<div class="item-footer">
						<a href="#" class="left" style="color: #c32929;">
							<strong>Янгиликлар</strong>
						</a>
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