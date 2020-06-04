<?php 
use yii\widgets\LinkPager; 
use yii\helpers\Url;
?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>Blog Style #2</h2>
		</div>
		<div class="blog-list style-2">

			<?php foreach ($tadbir as $blog) :?>
				<div class="item">
					<div class="item-header">
						<a href="<?=Url::to(['site/tadbir-single','id'=>$blog->id])?>"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/tadbir/<?=$blog->image ?>" alt="" class="item-photo" /></a>
						<h3><a href="<?=Url::to(['site/tadbir-single','id'=>$blog->id])?>"><?=$blog->title ?> </a></h3>
					</div>
					<div class="item-content">
					</div>
					<div class="item-footer">
						<a href="blog.html" class="left" style="color: #c32929;"><strong>Design</strong></a>
					</div>
				</div>
						
			<?php endforeach; ?>
<?= LinkPager::widget([
				'pagination' => $pages,
			]);?>	
		</div>
		<!-- END .panel -->
	</div>

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="pagination">
			<a href="#" class="prev page-numbers"><i class="fa fa-caret-left"></i></a>
			<a href="#" class="page-numbers">1</a>
			<a href="#" class="page-numbers current">2</a>
			<a href="#" class="page-numbers">3</a>
			<a href="#" class="page-numbers">4</a>
			<a href="#" class="page-numbers">6</a>
			<a href="#" class="next page-numbers"><i class="fa fa-caret-right"></i></a>
		</div>
		<!-- END .panel -->
	</div>

</div>