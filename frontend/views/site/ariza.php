<?php 
use yii\helpers\Url; ?>
<div class="main-content">

						<!-- BEGIN .panel -->
						<div class="panel">
							<div class="p-title">
								<h2>Ариза ва бланкалар намунаси</h2>
							</div>
							<div class="blog-list style-1">
								<?php foreach ($ariza as $key => $value) : ?>
								<div class="item">
									<div class="item-header">
										
										<h3><a href="#"><?=$value->name ?></a></h3>
									</div>
									<div class="item-footer">
										<span class="right">
											<a href="<?=Yii::getAlias('@web')?>/admin/uploads/file/<?=$value->files ?>">
												<i class="fa fa-clock-o"></i> <?=$value->files ?></a>
											
										</span>
									</div>
								</div>
									<?php endforeach; ?>

							</div>
						<!-- END .panel -->
						</div>


					</div>