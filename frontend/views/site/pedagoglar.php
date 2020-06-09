<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>Педагогларга
			</h2>
		</div>
		<div class="blog-list style-1">
			<?php foreach ($pedagoglar as $key => $value) :?>
				<div class="item">

						<h3><a href="#"><?=$value->name?></a></h3>
						<p><?=$value->prof?></p>


				</div>
			<?php endforeach; ?>


		</div>
		<!-- END .panel -->
	</div>



</div>