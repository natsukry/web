<?php
namespace app\api\controller;

use think\Controller;

// http://IP/weather/100100001  根据 citycode 获取城市天气信息（JSON 格式）
class Weather extends Controller{
	public function read(){
      $citycode = input('citycode');
      $model = model('Weather');
      $info = $model->getWeather($citycode);
      if($info){
        $code = 200;
      }else{
      	$code = 404;
      }
      $data = [
      	'code' => $code,
        'weather_info' => $info
      ];
      return json($data);
    }
}