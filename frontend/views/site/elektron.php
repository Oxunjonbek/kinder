<div class="main-content">

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2>МТТда электрон навбат ва бўш ўринлар ҳақида маълумот</h2>
		</div>
		<div class="blog-list style-1">

			<div class="item">

				<div class="col-md-4">
						<ul class="btn-group-vertical">
				<?php foreach ($interaktiv as $key => $value) :?>
							<li>
								<h3><a href="post.html"><?=$value->name?></a></h3>
						<p><?=$value->address?></p>
					</li>

					<?php endforeach; ?>
						</ul>
					</div>
				</div>



			</div>
			<!-- END .panel -->
		</div>


	</div>