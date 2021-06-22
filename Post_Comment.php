<?php


$pesan ='pagi'; //jawaban
while(true)
{
$headers = array();
$headers[] = "authority: m.facebook.com";
$headers[] = "method: POST";
$headers[] = "path: /a/comment.php?fs=7&actionsource=13&comment_logging&ft_ent_identifier=1666771520182931&eav=AfYpuF63Sbk-QahIktuBbeJ6-Fr8mAlqSHaUz5Mrf_uiMcHRPg-hsNj2BYfgKWLyHUA&av=100007272702248&gfid=AQD85rwv862kOnN7I9o";
$headers[] = "scheme: https";
$headers[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$headers[] = "accept-encoding: gzip, deflate, br";
$headers[] = "accept-language: en-US,en;q=0.9";
$headers[] = "cache-control: max-age=0";
//content-length: 73
$headers[] = "content-type: application/x-www-form-urlencoded";
$headers[] = "cookie: datr=XBTRYMiGWvEWo4CC7o_JWiyT; sb=XBTRYBGcbjYST8CeNmqGjBOl; m_pixel_ratio=1; fr=1xQkPdz5idpKPUb94.AWV--pq_OLfCDs6EXVM0pSNolZU.Bg0RRc.QW.AAA.0.0.Bg0RRr.AWXUm848m4g; c_user=100007272702248; xs=50:CRNSivCoQHgOEw:2:1624314987:-1:11120; x-referer=eyJyIjoiLyIsImgiOiIvIiwicyI6Im0ifQ==; wd=837x970";
$headers[] = "origin: https://m.facebook.com";
$headers[] = "referer: https://m.facebook.com/corsairID/photos/a.407703772756385/1666770866849663/?type=3&refid=52&__tn__=EH-R";
$headers[] = 'sec-ch-ua: "Opera";v="77","Chromium";v="91", ";Not A Brand";v="99"';
$headers[] = "sec-ch-ua-mobile: ?0";
$headers[] = "sec-fetch-dest: document";
$headers[] = "sec-fetch-mode: navigate";
$headers[] = "sec-fetch-site: same-origin";
$headers[] = "sec-fetch-user: ?1";
$headers[] = "upgrade-insecure-requests: 1";
$headers[] = "user-agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36";


$url = 'https://m.facebook.com/a/comment.php?fs=7&actionsource=13&comment_logging&ft_ent_identifier=1666771520182931&eav=AfYpuF63Sbk-QahIktuBbeJ6-Fr8mAlqSHaUz5Mrf_uiMcHRPg-hsNj2BYfgKWLyHUA&av=100007272702248&gfid=AQD85rwv862kOnN7I9o';
$post = 'fb_dtsg=AQGTMblw92R_klA%3AAQEwnouBlYnZVjU&jazoest=22737&comment_text='.$pesan.'';

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
