<?php


$pesan ='pagi';
while(true)
{
$headers = array();
$headers[] = "authority: m.facebook.com";
$headers[] = "method: POST";
$headers[] = "path: /composer/mbasic/?av=100007272702248&eav=AfY_5mS9N9xSyE_J6rKGoAGSnaCUEWrq4_8V6u72TSUuGeUjsfdyAB4I8qbkbJmtW5g&refid=17";
$headers[] = "scheme: https";
$headers[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$headers[] = "accept-encoding: gzip, deflate, br";
$headers[] = "accept-language: en-US,en;q=0.9";
$headers[] = "cache-control: max-age=0";
//content-length: 73
$headers[] = "content-type: application/x-www-form-urlencoded";
$headers[] = "cookie: "; //Cookie Disini
$headers[] = "origin: https://m.facebook.com";
$headers[] = "referer: https://m.facebook.com/home.php?ref_component=mbasic_home_header&ref_page=/wap/profile_timeline.php&refid=17";
$headers[] = 'sec-ch-ua: "Opera";v="77","Chromium";v="91", ";Not A Brand";v="99"';
$headers[] = "sec-ch-ua-mobile: ?0";
$headers[] = "sec-fetch-dest: document";
$headers[] = "sec-fetch-mode: navigate";
$headers[] = "sec-fetch-site: same-origin";
$headers[] = "sec-fetch-user: ?1";
$headers[] = "upgrade-insecure-requests: 1";
$headers[] = "user-agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36";


$url = 'https://m.facebook.com/composer/mbasic/?av=100007272702248&eav=AfY_5mS9N9xSyE_J6rKGoAGSnaCUEWrq4_8V6u72TSUuGeUjsfdyAB4I8qbkbJmtW5g&refid=17';
$post = 'fb_dtsg=AQGduecSYDzR6yI%3AAQEOQwf6mxwgezU&jazoest=22793&privacyx=300645083384735&target=100007272702248&c_src=feed&cwevent=composer_entry&referrer=feed&ctype=inline&cver=amber&rst_icv=&xc_message='.$pesan.'&view_post=Posting';

$post = json_decode(yarzCurl($url, $post, false, $headers, true));
if(isset($post->fb_id))
{
    echo "ID : ".$post->id."\n";
	sleep(50);
} else {
	die(print_r($post));
}
}

function yarzCurl($url, $fields=false, $cookie=false, $httpheader=false, $encoding=false)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	if($fields !== false)
	{
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
	}
	if($encoding !== false)
	{
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
	}
	if($cookie !== false)
	{
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
	}
	if($httpheader !== false)
	{
		curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
	}
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
}
