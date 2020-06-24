<?php 
use yii\widgets\LinkPager; 
use yii\helpers\Url;
?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>Tadbirlar</h2>
		</div>
		<div class="blog-list style-2">

			<?php foreach ($tadbir as $blog) :?>
				<div class="item">
					<div class="item-header">
						<a href="<?=Url::to(['site/tadbir-single','id'=>$blog->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$blog->image ?>" alt="" class="item-photo" /></a>
						<h3><a href="<?=Url::to(['site/tadbir-single','id'=>$blog->id])?>"><?=$blog->title ?> </a></h3>
					</div>
					<!-- <div class="item-content">
						
					</div> -->
					<div class="item-footer">
						<a href="#" class="left" style="color: #c32929;">
							<strong>Янгиликлар</strong>
						</a>
					</div>
				</div>
				
			<?php endforeach; ?>
			<?= LinkPager::widget([
				'pagination' => $pages,
			]);?>	
		</div>
		<!-- END .panel -->
	</div>
</div>