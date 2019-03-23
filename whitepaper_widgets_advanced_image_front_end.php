<?php
//Before
echo $before_widget;
?>

<?php if(!empty($image_link)) { ?><a href="<?php echo $image_link ?>"><?php } ?><img src="<?php echo $image_path; ?>" class="<?php echo $image_class; ?>" /><?php if(!empty($image_link)) { ?></a><?php } ?>

<?php
//After The Widget
echo $after_widget;
?>
