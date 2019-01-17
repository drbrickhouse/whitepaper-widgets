<p>
  <label>Title:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
  <label>Twitter Handle:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('twitter_handle'); ?>" type="text" value="<?php echo $twitter_handle; ?>" />
</p>
<p>
  <label>Number of Tweets to Display:</label>
  <input class="tiny-text" name="<?php echo $this->get_field_name('num_tweets'); ?>" type="text" value="<?php echo $num_tweets; ?>" />
</p>
<p>
  <label>Tweet Classes:</label>
  <input class="widefat" name="<?php echo $this->get_field_name('tweet_class'); ?>" type="text" value="<?php echo $tweet_class; ?>" />
</p>
<p>
  <label>Layout:</label>
  <textarea class="widefat" rows="16" cols="20" name="<?php echo $this->get_field_name('twitter_layout'); ?>"><?php echo $instance['twitter_layout']; ?></textarea>
</p>
