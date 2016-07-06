<?php
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$consumerKey = 'vve5Me6kSyXLG6F5MXMojbzAt';
$consumerSecret = 's5lrZrYHklyW3sw8d3hwuT5hHxdQ5hv6qqGB3TRYf64gp4PFj3';
$accessToken = '2420116574-LP6hOSeSqowk0WNKOq3qvpMKAF9AKhSdnfnllYf';
$accessTokenSecret = 'ZG62HWeuXTjqso0LKLa361wnMma2dy7j5cqAzHCuFJbBe';

//接続
$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

//ツイート
$res = $connection->post("statuses/update", array("status" => "テストメッセージ"));

var_dump($res);


// // use Abraham\TwitterOAuth\TwitterOAuth;
// $twObj = new TwitterOAuth($consumerKey,$consumerSecret,$accessToken,$accessTokenSecret);
// $andkey = "webnaut AND beeworks";
// $options = array('q'=>$andkey,'count'=>'30');
// $json = $twObj->OAuthRequest('https://api.twitter.com/1.1/search/tweets.json','GET',$options);
// $jset = json_decode($json, true);
//
//
// foreach ($jset['statuses'] as $result){
// $name = $result['user']['name'];
// $link = $result['user']['profile_image_url'];
// $content = $result['text'];
// $updated = $result['created_at'];
// $time = $time = date("Y-m-d H:i:s",strtotime($updated));
// echo "<img src='".$link."''>"." | ".$name." | ".$content." | ".$time;
// echo '<br>';
// }
