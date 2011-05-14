<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/winglobal/style.css" />

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/winglobal/js/cufon-yui.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/winglobal/js/arial.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/winglobal/js/cuf_run.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
</head>

<body>
<div class="main" >
	<div class="header">
        <div class="header_resize" >
            <div class="menu_nav">
                <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'Home', 'url'=>array('/site/index')),
                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                        array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                )); ?>
            </div>    
    		<div class="logo">
                <h1><?php echo CHtml::encode(Yii::app()->name); ?><small>put your slogan here</small></h1>
            </div>       
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
            <div class="col c1">
                <h2><span>Image Gallery</span></h2>
                <?php for($i=1; $i<7; $i++)
                {
                    echo '<a href="#"><img src="'.Yii::app()->request->baseUrl.'/css/winglobal/images/pix'.$i.'.jpg" width="58" height="58" alt="" /></a>';
                }?>
            </div>
            <div class="col c2">
                <h2><span>Lorem Ipsum</span></h2>
                    <p>Lorem ipsum dolor<br />
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam</a>, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
            </div>
            <div class="col c3">
                <h2><span>Contact</span></h2>
                    <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue.</p>
                    <p><a href="#">support@yoursite.com</a></p>
                    <p>+1 (123) 444-5677<br />
                    +1 (123) 444-5678</p>
                    <p>Address: 123 TemplateAccess Rd1</p>
            </div>
            <div class="clr"></div>
        </div>
    </div>
        <div class="footer">
            <div class="footer_resize" >
                <p class="lf" >Copyright &copy; <?php echo date('Y'); ?> by My Company.</p>
                <p class="rf" >All Rights Reserved.<?php echo Yii::powered(); ?></p>
                <div class="clr"></div>
            </div>
        </div><!-- footer -->

</div><!-- page -->

</body>
</html>
