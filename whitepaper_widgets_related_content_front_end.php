<?php
//Before
echo $before_widget;
if(!empty($title)){echo $before_title . $title . $after_title;}

global $post;
$post_objects = get_field('related_content');

if( $post_objects ): ?>
    <ul class="<?php echo $content_class; ?>">
    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post);
        if(!empty($related_content_layout)){
          eval('?>'.$related_content_layout);
        } else { ?>
          <li>
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </li>
        <?php } ?>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif;





//After The Widget
echo $after_widget;
?>
