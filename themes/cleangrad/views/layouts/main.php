<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cleangrad/style.css" />

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/cleangrad/js/cufon-yui.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/cleangrad/js/arial.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/cleangrad/js/cuf_run.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="main" >
	<div class="header">
        <div class="header_resize" >
    		<div class="logo">
                <h1><?php echo CHtml::encode(Yii::app()->name); ?><span>2</span><br />
                <small>Your slogan here.</small></h1>
            </div>       
            <div class="menu">
                <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'Home', 'url'=>array('/site/index')),
                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                        array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                )); ?>
            </div><!-- mainmenu -->
            <div class="clr"></div>
        </div>
        <div class="headert_text_resize"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/cleangrad/images/header_img.jpg" alt="" width="568" height="355" />
            <h2>Template License</h2>
            <p><small>Posted by Owner | Filed under templates, internet</small></p>
            <p>This is a free CSS website template by HotWebsiteTemplates.net. This work is distributed under the <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>, which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to HotWebsiteTemplates.net.</p>
            <p><a href="#"><big><strong>read more...</strong></big></a></p>
            <div class="clr"></div>
        </div>
	</div><!-- header -->
    <div class="clr"></div>    
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

<div class="fbg">    
    <div class="fbg_resize">
        <div class="blok">
            <h2>About</h2>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/cleangrad/images/fbg_img.gif" alt="" width="68" height="68" />
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing urna.<br />
            </p>
            <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/cleangrad/images/more.gif" alt="" width="123" height="27" border="0" /></a>
        </div>
        <div class="blok">
            <h2>Lorem Ipsum</h2>
            <p><strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</strong> Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. <br />
            Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
            <ul>
                <li><a href="#">• consequat molestie</a></li>
                <li><a href="#">• sem justo</a></li>
                <li><a href="#">• semper</a></li>
                <li><a href="#">• magna sed purus</a></li>
            </ul>
        </div>
        <div class="blok">
            <h2>Image Gallery</h2>
                <?php for($i=0;$i<6;$i++){?>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/cleangrad/images/fbg_img.gif" alt="" width="68" height="68" />
                <?php }?>
                <div class="clr"></div>
                <h2>Lorem ipsum </h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. </p>
        </div>
        <div class="clr"></div>
        </div>
    </div>
    <div class="footer">
        <p class="lf" >Copyright &copy; <?php echo date('Y'); ?> by My Company.</p>
        <p class="rf" >All Rights Reserved.<?php echo Yii::powered(); ?></p>
        <div class="clr"></div>
    </div><!-- footer -->

</div><!-- page -->

</body>
</html>
