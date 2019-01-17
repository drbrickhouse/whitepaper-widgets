<?php
//Before
echo $before_widget;
if(!empty($title)){echo $before_title . $title . $after_title;}
?>
<div class="twitter-area">
<?php
require_once('TwitterAPIExchange.php');

// The function that links the hashtags, urls and usernames into links...
function twitterize($raw_text) {
        $output = $raw_text;

        // parse urls;
        $output = preg_replace('@(https?://([-\w\.]+)+(/([\w/_\.]*(\?\S+)?(#\S+)?)?)?)@', '<a href="$1" target="_blank">$1</a>', $output);

        // parse usernames
        $output = preg_replace('/@(\w+)/', '<a href="http://twitter.com/$1" target="_blank">@$1</a>',$output);

        // parse hashtags
        $output = preg_replace('/\s+#(\w+)/', ' <a href="https://twitter.com/search?q=%23$1" target="_blank">#$1</a>', $output);

        return $output;
}

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
'oauth_access_token' => "1311536016-4ScaYmb3oVEV3mUt1x4p4FBAGbkVLaFcfgEsnWG",
'oauth_access_token_secret' => "iZ7U3KPDI5Gv47UsEcKIUZBLv9zsGZ51Fp1k9T7eMMW8U",
'consumer_key' => "WYnVLPtWEGaTOiegP2PnlRJ6l",
'consumer_secret' => "ZdT02h1weDhyBXUnPSlIT3L8omcQ6zTIw83E14HI3a8xXq4Yz2"
);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

$requestMethod = "GET";
$getfield = "?screen_name=$twitter_handle&count=$num_tweets";

$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
  ->buildOauth($url, $requestMethod)
  ->performRequest(),$assoc = TRUE);
?>

  <div class="<?php echo $tweet_class; ?>">
    <?php
      if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
    ?>
    <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <?php
        $count = 1;
        foreach($string as $items)
          { ?>
            <div class="item <?php if ($count == 1) echo 'active'; ?>">
              <?php
              //echo "Time and Date of Tweet: ".$items['created_at']."<br />";
              echo twitterize($items['text'])."<br />";
              //echo "Tweeted by: ". $items['user']['name']."<br />";
              //echo $items['user']['screen_name']."<br />";

              $count++;
              ?>
            </div>
            <?php
          }
        ?>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#twitter-carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#twitter-carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
</div>
<?php
//After The Widget
echo $after_widget;
?>
