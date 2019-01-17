<?php
//Before The Widget
echo $before_widget;
if(!empty($title)){echo $before_title . $title . $after_title;}

//The Widget
?>
<div class="col-md-12">
  <div class="row content-area">
    <div class="col-md-12">
      <?php eval('?>'.$php_content); ?>
    </div>
  </div>
</div>

<?php
//After The Widget
echo $after_widget;
?>
