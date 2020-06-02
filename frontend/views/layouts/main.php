<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<link rel="shortcut icon" href="images/favicon.ico.html" type="image/x-icon" />
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

        <!-- BEGIN .boxed -->
        <div class="boxed">
            
            <!-- BEGIN .header -->
            <header class="header">

                <div class="header-topmenu">
                    
                    <!-- BEGIN .wrapper -->
                    <div class="wrapper">

                        <ul class="le-first">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                            <li><a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-second.html">Blog style #2</a></li>
                                    <li><a href="post.html">Post page</a></li>
                                    <li><a href="post-no-comments.html">Post page w/ comments</a></li>
                                    <li><a href="post-no-comments.html">Post page w/ review</a></li>
                                </ul>
                            </li>
                            <li><a href="post.html">Post Page</a></li>
                            <li><a href="photo-gallery.html">Photo Gallery</a></li>
                            <li><a href="full-width.html">Full Page</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                        
                    <!-- END .wrapper -->
                    </div>

                </div>
                
                <!-- BEGIN .wrapper -->
                <div class="wrapper">
                    
                    <div class="header-block">
                        <div class="header-logo">
                            <a href="index.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/header-logo.png" alt="" /></a>
                            <!-- <h1><a href="index.html">NOVOMag</a></h1> -->
                        </div>
                        <div class="header-banner">
                            <a href="#" target="_blank"><img src="<?=Yii::getAlias('@web')?>/foto/images/no-banner-728x90.png" alt="" /></a>
                           
                        </div>
                    </div>
                    
                <!-- END .wrapper -->
                </div>


                <nav class="main-menu">
                    
                    <!-- BEGIN .wrapper -->
                    <div class="wrapper">
                        
                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a>
                                <ul class="sub-menu">
                                    <li><a href="shortcodes.html#caption">Image With Caption</a></li>
                                    <li><a href="shortcodes.html#youtube">Youtube Video</a></li>
                                    <li><a href="shortcodes.html#vimeo">Vimeo video</a></li>
                                    <li><a href="shortcodes.html#photo-gallery">Gallery Preview</a></li>
                                    <li><a href="shortcodes.html#spacers">Spacers</a></li>
                                    <li><a href="shortcodes.html#blockquotes">Quotes</a></li>
                                    <li><a href="shortcodes.html#lists">Lists</a></li>
                                    <li><a href="shortcodes.html#buttons">Buttons</a></li>
                                    <li><a href="shortcodes.html#tabs">Tabs</a></li>
                                    <li><a href="shortcodes.html#accordion">Accordion</a></li>
                                    <li><a href="shortcodes.html#social">Social Icons</a></li>
                                    <li><a href="shortcodes.html#alerts">Alert Messages</a></li>
                                </ul>
                            </li>
                            <li class="mega-menu-full"><a href="blog.html">Category</a>
                                <ul class="sub-menu">
                                    <li>
                                        <ul class="menu-blocks paragraph-row">
                                            <!-- BEGIN .menu-block -->
                                            <li class="menu-block column4 color-light">
                                                <div class="menu-content category-menu">
                                                    <a href="shortcodes.html">Car Reviews</a>
                                                    <a href="shortcodes.html">Top Gear Reviews</a>
                                                    <a href="shortcodes.html">BMW Category</a>
                                                    <a href="shortcodes.html">Top Gear Reviews</a>
                                                    <a href="shortcodes.html">BMW Category</a>
                                                    <a href="shortcodes.html">Audi Category</a>
                                                    <a href="shortcodes.html">Opel Category Item</a>
                                                </div>
                                            <!-- END .menu-block -->
                                            </li>
                                            <!-- BEGIN .menu-block -->
                                            <li class="menu-block column4">
                                                <div class="menu-content featured-post">
                                                    <div class="item-photo">
                                                        <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-4.jpg" alt="" /></a>
                                                        <h3><a href="post.html">BMW E60 Test Drive from TOP GEAR</a></h3>
                                                    </div>
                                                    <div class="item-content">
                                                        <p>Sotheby’s in London is getting ready for another seasonal display of wealth, as some of world’s.</p>
                                                        <div class="article-icons">
                                                            <span class="article-icon">4 JAN, 2014</span>
                                                            <a href="post.html#comments" class="article-icon">3 COMMENTS</a>
                                                            <a href="blog.html" class="article-icon">Orange-Themes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- END .menu-block -->
                                            </li>
                                            <!-- BEGIN .menu-block -->
                                            <li class="menu-block column4">
                                                <div class="menu-content article-list">
                                                    <div class="item">
                                                        <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-1.jpg" alt="" class="item-photo" /></a>
                                                        <div class="item-content">
                                                            <h3><a href="post.html">BMW 530D Tunign from Hamman</a></h3>
                                                            <span>4 Jan, 2014</span>
                                                            <a href="post.html#comments"><span>3 Comments</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-2.jpg" alt="" class="item-photo" /></a>
                                                        <div class="item-content">
                                                            <h3><a href="post.html">Eurozone Manufacturing Industry Rises Sharply in January</a></h3>
                                                            <span>15 JAN, 2014</span>
                                                            <a href="post.html#comments"><span>5 Comments</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-3.jpg" alt="" class="item-photo" /></a>
                                                        <div class="item-content">
                                                            <h3><a href="post.html">Unexpected Drop in Euro Area</a></h3>
                                                            <span>4 Jan, 2014</span>
                                                            <a href="post.html#comments"><span>0 Comments</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-3.jpg" alt="" class="item-photo" /></a>
                                                        <div class="item-content">
                                                            <h3><a href="post.html">Unexpected Drop in Euro Area</a></h3>
                                                            <span>4 Jan, 2014</span>
                                                            <a href="post.html#comments"><span>0 Comments</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- END .menu-block -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Reviews</a></li>
                            <li><a href="blog.html">Automotive</a></li>
                            <li><a href="blog.html" style="border-bottom: 3px solid #1AB3EE;">Movies</a></li>
                            <li><a href="blog.html" style="border-bottom: 3px solid #EECC1A;">Fashion</a></li>
                            <li><a href="blog.html">Sport</a></li>
                            <li><a href="blog.html">Politics</a></li>
                        </ul>

                        <div class="search-block">
                            <form action="blog.html">
                                <input type="text" class="search-value" value="" />
                                <input type="submit" class="search-button" value="&#xf002;" />
                            </form>
                        </div>

                    <!-- END .wrapper -->
                    </div>

                </nav>
                
            <!-- END .header -->
            </header>
<?=$content?>
<!-- BEGIN .footer -->
            <footer class="footer">
                
                <!-- BEGIN .wrapper -->
                <div class="wrapper">
                    
                    <!-- BEGIN .footer-widgets -->
                    <div class="footer-widgets">
                        
                        <!-- BEGIN .widget -->
                        <div class="widget">
                            <div class="w-title">
                                <h3>About</h3>
                            </div>
                            <div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</p>
                                <img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-5.jpg" alt="" />
                            </div>
                        <!-- END .widget -->
                        </div>
                        
                        <!-- BEGIN .widget -->
                        <div class="widget">
                            <div class="w-title">
                                <h3>Latest Articles</h3>
                            </div>
                            <div class="article-list">
                                
                                <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-1.jpg" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html">BMW 530D Tunign from Hamman</a></h3>
                                        <span>4 Jan, 2014</span>
                                        <a href="post.html#comments"><span>3 Comments</span></a>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-2.jpg" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html">Eurozone Manufacturing Industry Rises Sharply in January</a></h3>
                                        <span>15 JAN, 2014</span>
                                        <a href="post.html#comments"><span>5 Comments</span></a>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <a href="post.html"><img src="<?=Yii::getAlias('@web')?>/foto/images/photos/image-3.jpg" alt="" class="item-photo" /></a>
                                    <div class="item-content">
                                        <h3><a href="post.html">Unexpected Drop in Euro Area</a></h3>
                                        <span>4 Jan, 2014</span>
                                        <a href="post.html#comments"><span>0 Comments</span></a>
                                    </div>
                                </div>

                            </div>
                        <!-- END .widget -->
                        </div>
                        
                        <!-- BEGIN .widget -->
                        <div class="widget">
                            <div class="w-title">
                                <h3>Tag Cloud</h3>
                            </div>
                            <div class="tagcloud">
                                <a href="blog.html">Omnes</a><a href="blog.html">definitionem</a><a href="blog.html">intellegat</a><a href="blog.html">accommodare</a><a href="blog.html">quas</a><a href="blog.html">theophrastus</a><a href="blog.html">commune</a><a href="blog.html">eleifend</a>
                                <a href="blog.html">Omnes</a><a href="blog.html">definitionem</a><a href="blog.html">intellegat</a><a href="blog.html">accommodare</a><a href="blog.html">quas</a><a href="blog.html">theophrastus</a><a href="blog.html">commune</a><a href="blog.html">eleifend</a>
                                <a href="blog.html">Omnes</a><a href="blog.html">definitionem</a><a href="blog.html">intellegat</a><a href="blog.html">accommodare</a><a href="blog.html">quas</a><a href="blog.html">theophrastus</a><a href="blog.html">commune</a><a href="blog.html">eleifend</a>
                            </div>
                        <!-- END .widget -->
                        </div>

                    <!-- END .footer-widgets -->
                    </div>
                    
                <!-- END .wrapper -->
                </div>

                <div class="footer-bottom">
                    <!-- BEGIN .wrapper -->
                    <div class="wrapper">

                        <p class="left">Copyright &copy; 2014 <b>NOVOMag Theme</b>. Theme by <a href="http://orange-themes.com" target="_blank">Orane-Themes.com</a>, powered by Wordpress.</p>
                        <ul class="right">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#" target="_blank">Purchase</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="full-width.html">Terms</a></li>
                            <li><a href="full-width.html">Site Map</a></li>
                        </ul>
                        <div class="clear-float"></div>
                        
                    <!-- END .wrapper -->
                    </div>
                </div>
                
            <!-- END .footer -->
            </footer>
            
        <!-- END .boxed -->
        </div>

        <!-- Scripts -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
