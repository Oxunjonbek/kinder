
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>ВМ қарор ва фармойишлари</h2>
		</div>
		<div class="blog-list style-1">
			<?php  foreach ($bm as $key => $value) : ?>
			<div class="item">
				<div class="item-header">
					<h3><a href="<?=$value->address; ?>">
						<?=$value->name ?></a></h3>
						<!-- <p><?=$value->address ?></p> -->
					</div>
				</div>
			<?php endforeach; ?>



		</div>
		<!-- END .panel -->
	</div>


	<!-- lin pager uchun -->

</div>