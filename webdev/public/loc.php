
<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2018-12-04
 * Time: 23:37
 */
// 利用IP定位，拒绝JS
header("content-type:text/html;charset=utf-8");// 解决中文乱码
$url_get_coordinate = 'http://api.map.baidu.com/location/ip?ip=&ak=F5cPr5VOHIiYWgHrvm9ZrtKUn3LyvG0A&coor=bd09ll';
$json_coordinate = https_request($url_get_coordinate);
echo $json_coordinate["address"];
function https_request ($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $out = curl_exec($ch);
    curl_close($ch);
    return  json_decode($out,true);
}
