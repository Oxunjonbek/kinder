<?php 
use yii\helpers\Url; ?>
<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>МТТлар</h2>
		</div>
		<div class="blog-list style-1" >

			<?php foreach ($mttlar as $key => $value) :?>
				
					
				
				<div class="item" class="col-sm" style="float: left; margin-right: 18px;">

					<h3 style="text-indent: 60px;"><?=$value->name?></h3>
					<p style="color: #339966; font-size: 18px;">
						<span style="color: #008000;font-size: 18px; font-weight: bold;">	 Mудира:
						</span>
						<?=$value->prof?>
					</p>
					<p style="color: #339966; font-size: 18px;">
						<span style="color: #008000;font-size: 18px; font-weight: bold;">Телефон:
						</span>
						<?=$value->phone?>
							
					</p>
					<p style="color: #339966; font-size: 18px;">
						<span style="color: #008000;font-size: 18px; font-weight: bold;">Манзил:
						</span>
						<?=$value->address?>
							
					</p>
				</div>

				
			<?php endforeach; ?>
		</div>
		<!-- END .panel -->
	</div>



</div>