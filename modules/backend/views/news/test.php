<?php
//echo date('Y-m-d h:i:s');
$curlobj = curl_init();          // 初始化
$uri = "http://whois.chinaz.com/shang.cn";
curl_setopt($curlobj, CURLOPT_URL, $uri);       // 设置访问网页的URL
curl_setopt($curlobj, CURLOPT_HTTPGET, TRUE);
curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, true);         // 执行之后不直接打印出来
$output = curl_exec($curlobj);   // 执行
$key = array();
$domain = null;
preg_match('/<div class="fl WhLeList-left">创建时间<\/div><div class="fr WhLeList-right"><span>(.*?)<\/span><\/div><\/li>/', $output, $key);
preg_match('/(\d+)年(\d+)月(\d+)日/', $key[1], $key);
unset($key[0]);
$domain = ['start_at' => date('Y-m-d', strtotime(implode("", $key)))];
preg_match('/<div class="fl WhLeList-left">过期时间<\/div><div class="fr WhLeList-right"><span>(.*?)<\/span><\/div><\/li>/', $output, $key);
preg_match('/(\d+)年(\d+)月(\d+)日/', $key[1], $key);
unset($key[0]);
$domain = array_merge($domain, ['end_at' => date('Y-m-d', strtotime(implode("", $key)))]);

$curlobj = curl_init();          // 初始化
$uri = "http://icp.chinaz.com/shang.cn";
curl_setopt($curlobj, CURLOPT_URL, $uri);       // 设置访问网页的URL
curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, true);         // 执行之后不直接打印出来
$output = curl_exec($curlobj);   // 执行
preg_match('/<span>主办单位名称<\/span><p>(.*?)<a .*?>.*?<\/a><\/p>/', $output, $key);
$domain = array_merge($domain, ['belonger' => $key[1]]);
preg_match('/<span>网站备案\/许可证号<\/span><p><font>(.*?)<\/font>.*?<\/p>/', $output, $key);
$domain = array_merge($domain, ['record_number' => $key[1]]);
print_r($domain);
die;


//$domain = ['创建时间'=>];
print_r($domain);
die;
var_dump($output);
curl_close($curlobj);        // 关闭cURL
//echo str_replace("百度", "php", $output);
?>