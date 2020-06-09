<?php 
use yii\helpers\Url; ?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>МТТлар</h2>
		</div>
		<div class="blog-list style-1">

			<?php foreach ($mttlar as $key => $value) :?>
				<div class="item">

					<h3><?=$value->name?></h3>
					<p><?=$value->prof?></p>
					<p><?=$value->phone?></p>
					<p><?=$value->address?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<!-- END .panel -->
	</div>



</div>