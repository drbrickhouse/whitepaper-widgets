<p>
  <label>Title:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
  <label>Post Type:</label>
  <select class="widefat" id="<?php echo $this->get_field_id('post_type'); ?>" name="<?php echo $this->get_field_name('post_type'); ?>" type="text" value="<?php echo $post_type; ?>">
    <?php
    global $post_types;
    foreach($post_types as $type) { ?>
      <option value="<?php echo $type ?>" <?php selected($post_type, $type); ?>><?php echo $type ?></option>
    <?php } ?>
  </select>
</p>
<p>
  <label>Post ID:</label>
  <input class="tiny-text" name="<?php echo $this->get_field_name('post_id'); ?>" type="text" value="<?php echo $post_id; ?>" />
</p>
<p>
  <label>Single Post Classes:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('single_class'); ?>" type="text" value="<?php echo $single_class; ?>" />
</p>
<p>
  <label>Before Widget Layout:</label>
  <textarea class="widefat" rows="10" cols="20" name="<?php echo $this->get_field_name('before_widget_layout'); ?>"><?php echo $instance['before_widget_layout']; ?></textarea>
</p>
<p>
  <label>Single Post Layout:</label>
  <textarea class="widefat" rows="16" cols="20" name="<?php echo $this->get_field_name('single_layout'); ?>"><?php echo $instance['single_layout']; ?></textarea>
</p>
<p>
  <label>After Widget Layout:</label>
  <textarea class="widefat" rows="10" cols="20" name="<?php echo $this->get_field_name('after_widget_layout'); ?>"><?php echo $instance['after_widget_layout']; ?></textarea>
</p>
