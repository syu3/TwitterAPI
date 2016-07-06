<?php
// var_dump('HELLOHELLOHELLO');
  require_once('codebird.php');
  require_once('config.php');
  require_once('cacert.pem');

  \Codebird\Codebird::setConsumerKey(CONSUMER_KEY, CONSUMER_SECRET);
  $cb = \Codebird\Codebird::getInstance();
  $cb->setToken(ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

  // $params = array(
  //   'screen_name' => 'taguchi',
  //   'include_rts' => true
  // );

  $tweets = $cb->statuses_userTimeline($params);

  var_dump($tweets);
 // array_pop($tweets);
 //
 // foreach ($tweets as $tweet) {
 //   echo ''<li id="tweet_' . $tweet->id_str . '"> . $tweet->text. '</li>';
 // }
