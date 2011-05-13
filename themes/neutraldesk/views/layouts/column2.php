<?php $this->beginContent('//layouts/main'); ?>
<div class="body">
    <div class="body_resize">
        <div class="left">
			<?php echo $content; ?>
		</div><!-- content -->
		<div class="right">
            <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title'=>'Operations',
                ));
                $this->widget('zii.widgets.CMenu', array(
                    'items'=>$this->menu,
                ));
                $this->endWidget();
            ?>                   
		</div><!-- sidebar -->
      <div class="clr"></div>
	</div>
</div>
<?php $this->endContent(); ?>
