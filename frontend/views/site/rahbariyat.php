<div class="main-content">

						<!-- BEGIN .panel -->
						<div class="panel">
							<div class="p-title" >
								<h2 style="background-color: rgb(11, 82, 100);">Рахбарият</h2>
							</div>
							<div class="blog-list style-1">
								<?php foreach($genels as $genel):?>
								<div class="item" >
									<div class="item-header">
										<a href="#"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/genel/<?=$genel->image?>" alt="" class="item-photo" style="width: 200px; height: 250px; border:solid blue 1px; "/></a>
									</div>
									
									<div class="item-content" style="padding-top:20px;">
										<strong class="category-link">Лавозими</strong>
										<h3 style="font-family: Times New Roman; font-weight: bold;"><?=$genel->name?></h3>
										<p ><?=$genel->title?></p>
									</div>
									<div class="item-footer">
										<span class="left" style="font-size: 20px;font-family:Times New Roaman;">
											<?=$genel->phone?>
										</span>
									</div>
									
								</div>
								<?php endforeach;?>
							
							</div>
						<!-- END .panel -->
						</div>

						<!-- BEGIN .panel -->
						<div class="panel">
							<!-- <div class="pagination">
								<a href="#" class="prev page-numbers"><i class="fa fa-caret-left"></i></a>
								<a href="#" class="page-numbers">1</a>
								<a href="#" class="page-numbers current">2</a>
								<a href="#" class="page-numbers">3</a>
								<a href="#" class="page-numbers">4</a>
								<a href="#" class="page-numbers">6</a>
								<a href="#" class="next page-numbers"><i class="fa fa-caret-right"></i></a>
							</div> -->
						<!-- END .panel -->
						</div>

					</div>