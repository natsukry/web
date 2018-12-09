<?php

namespace app\wx\controller;

use think\Controller;

class Util extends Controller
{
    public function index()
    {
        if (isset($_GET['code'])) {
            // get code
            $code = $_GET['code'];

            echo $code;

            // use code to get access_token and open_id
            $url_access_token = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx046e7bfbf845be95&secret=3b8b8bddbc57cbc5be92d6abbed33a5f&code=' . $code . '&grant_type=authorization_code';
            $json_access_token = $this->https_request($url_access_token);
            $access_token = $json_access_token["access_token"];
            $openid = $json_access_token["openid"];

            echo "access_token".$access_token;
            echo "openid".$openid;

            // use open_id to get user_info
            $url_user_info = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';
            $json_user_info = $this->https_request($url_user_info);
            $nickname = $json_user_info["nickname"];
            $headimgurl = $json_user_info["headimgurl"];

            echo 'nickname:'.$nickname;
            echo '</br><img src="'.$headimgurl.'" />';
        } else {
            echo "NO CODE";
        }
    }
    function https_request ($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $out = curl_exec($ch);
        curl_close($ch);
        return  json_decode($out,true);
    }
}

