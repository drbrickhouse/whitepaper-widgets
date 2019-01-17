<p>
  <label>Title:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
  <label>Content:</label>
  <textarea class="widefat" rows="16" cols="20" name="<?php echo $this->get_field_name('php_content'); ?>"><?php echo $instance['php_content']; ?></textarea>
</p>
