<?php
namespace app\api\controller;

use think\Controller;

// http://IP/city/北京   根据城市名称获取 citycode（JSON格式
class Citycode extends Controller{
	public function read(){
      $cityName = input('cityName');
      $model = model('Citycode');
      $data = $model->getCode($cityName);
      if($data){
        $code = 200;
      }else{
      	$code = 404;
      }
      $data = [
      	'code' => $code,
        'citycode' => $data
      ];
      return json($data);
    }
}
