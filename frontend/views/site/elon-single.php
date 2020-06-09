<?php 
// var_dump($elon->title);exit();
?>
	<div class="main-content">

						<!-- BEGIN .panel -->
						<div class="panel">
							<div class="shortcode-content hreview">
								<div class="article-head">
									<h1 class="fn"><?=$elon->title?></h1>

								</div>

								<div class="paragraph-row">
									<div class="column12">
										<div class="review-photo">
											<img src="<?=Yii::getAlias('@web')?>/admin/uploads/elonlar/<?=$elon->image?>" alt="" />
										</div>
									</div>
									<!-- <div class="column6"> -->
										
										<!-- BEGIN .panel -->
										<!-- <div class="panel">
											<div class="p-title">
												<h2>Overview</h2>
											</div>
											<ul>
											</ul>
										</div> -->
										<!-- END .panel -->

									<!-- </div> -->
								</div>

								<p class="description"><?=$elon->text?></p>

							</div>
						<!-- END .panel -->
						</div>
						

						
	
					</div>