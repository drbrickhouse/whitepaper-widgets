<p>
  <label>Title:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
  <label>Content Classes:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('content_class'); ?>" type="text" value="<?php echo $content_class; ?>" />
</p>
<p>
  <label>Layout:</label>
  <textarea class="widefat" rows="16" cols="20" name="<?php echo $this->get_field_name('related_content_layout'); ?>"><?php echo $instance['related_content_layout']; ?></textarea>
</p>
