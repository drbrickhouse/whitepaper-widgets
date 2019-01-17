<?php
//Before The Widget
echo $before_widget;
if(!empty($before_widget_layout)) {
  eval('?>'.$before_widget_layout);
} else {
  if(!empty($title)){echo $before_title . $title . $after_title;}
}

//The Widget
?>
<div class="row single-area">
  <?php
  $args = array( 'post_type' => $post_type, 'p' => $post_id );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="<?php echo $single_class; ?>">
      <?php
        if(empty($single_layout)){ ?>
      <div class="col-md-12 single-post">
        <?php the_content(); ?>
      </div>
    <?php } else { ?>
      <div class="col-md-12 single-post">
        <?php eval('?>'.$single_layout); ?>
      </div>
      <?php } ?>
    </div>
  <?php
  endwhile;
  wp_reset_postdata();
  ?>
  <div class="clear"></div>
</div>

<?php
//After The Widget
if (!empty($after_widget_layout)) {
  eval('?>'.$after_widget_layout);
}
echo $after_widget;
?>
