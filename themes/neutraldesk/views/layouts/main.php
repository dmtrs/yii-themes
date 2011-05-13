<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/neutraldesk/style.css" />

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/neutraldesk/js/cufon-yui.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/neutraldesk/js/arial.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/neutraldesk/js/cuf_run.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/neutraldesk/js/custom.js"></script>
    

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="main" >
	<div class="header">
        <div class="header_resize" >
    		<div class="logo">
                <h1><small>This is </small><?php echo CHtml::encode(Yii::app()->name); ?> <span>theme</span></h1>
            </div>       
            <div class="search">
                <form id="form1" name="form1" method="post" action="#">
                    <span>
                        <input name="q" type="text" class="keywords" id="textfield" maxlength="50" value="Search..." />
                    </span>
                    <input name="b" type="image" src="<?php echo Yii::app()->request->baseUrl; ?>/css/neutraldesk/images/search.gif" class="button" />
                </form>
            </div>
            <div class="clr"></div>
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
        <div class="headert_text_resize">
            <div class="textarea">
                <h2><strong>DO YOU NEED</strong> A NEW DESIGN?<br />
                    ASKED US<span> HOW WE CAN DO IT!</span></h2>
                    <p><span>Sed ut perspiciatis unde omnis iste natus error sit</span> voluptatem Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero.</p>
                    <a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/css/neutraldesk/images/view_ga.gif" alt="" width="206" height="47" border="0" /></a>
            </div>
            <img src="<?php echo Yii::app()->baseUrl; ?>/css/neutraldesk/images/img_main.jpg" alt="" width="445" height="284" />
            <div class="clr"></div>
        </div>
    </div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
    <div class="fbg" >
        <div class="fbg_resize">
            <div class="blok">
                <h2><span>Footer column 1</span></h2>
            </div>    
            <div class="blok">
                <h2><span>Footer column 2</span></h2>
            </div>
            <div class="blok">
                <h2><span>Footer column 3</span></h2>
                <div class="clr"></div>
                <h2>Footer column 3.2</h2>
                <div class="clr"></div>
            </div>    
            <div class="clr"></div>    
        </div>
    </div>    
    <div class="footer">
        <div class="footer-resize">
            <p class="lf" >Copyright &copy; <?php echo date('Y'); ?> by My Company.</p>
            <p class="rf" >All Rights Reserved.<?php echo Yii::powered(); ?></p>
            <div class="clr"></div>
        </div>    
        <div class="clr"></div>
    </div><!-- footer -->
</div><!-- page -->

</body>
</html>
