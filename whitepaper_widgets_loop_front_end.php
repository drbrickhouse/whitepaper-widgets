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
<div class="row post-area">
  <?php
  $args = array( 'post_type' => $post_type, 'posts_per_page' => $num_posts );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="<?php echo $post_class; ?>">
      <?php
        if(!empty($post_layout)){
          eval('?>'.$post_layout);
        } else { ?>
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
      <a href="<?php the_field('link'); ?>" class="btn btn-primary">Read More</a>
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
