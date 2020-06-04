<div class="main-content">

						<!-- BEGIN .panel -->
						<div class="panel">
							<div class="p-title">
								<h2>Тузилма</h2>
							</div>
							<div class="blog-list style-2">
								
								<?php foreach ($tuzilma as $blog) :?>
								<div class="item">
									<div class="item-header">
										<center>
											<a href="post.html"><img src="<?=Yii::getAlias('@web')?>/admin/uploads/structure/<?=$blog->image ?>" alt="" class="item-photo" style="width: 200px; height: 250px; "/></a>
										</center>
																				
										
									</div>
									<div >
										<h3 style="font-size:20px;font-weight: bold; font-family: Times New Roman"><a href="#" ><?=$blog->name ?> </a></h3>
									</div>
									<div class="item-content" >
										<p style="font-size:20px;font-weight: bold; font-family: Times New Roman"><?=$blog->prof ?></p>
									</div>
									<div class="item-footer">
										<p style="font-weight: bold; font-family: Times New Roman; font-size:14px;"><?=$blog->phone?></p>
										
									</div>
								</div>
								<?php endforeach; ?>
								

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