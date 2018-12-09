<?php
if (isset($_GET['code'])){
    $code = $_GET['code'];
    echo $code;
    $url_access_token='https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx046e7bfbf845be95&secret=3b8b8bddbc57cbc5be92d6abbed33a5f&code='.$code.'&grant_type=authorization_code';
    $json_access_token= https_request($url_get);
    $access_token = $json_access_token["access_token"];
    echo $access_token;

}else{
    echo "NO CODE";
}

