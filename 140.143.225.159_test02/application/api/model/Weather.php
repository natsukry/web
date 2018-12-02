<?php 
namespace app\api\model;

use think\Model;
use think\Db;

// http://IP/weather/100100001  根据 citycode 获取城市天气信息（JSON 格式）

class Weather extends Model
{
    public function getWeather($citycode = '101010100') // default code Beijing
    {
        $res = Db::name('ins_county')->where('weather_code', $citycode)->value('weather_info');
        return $res;
    }

    public function getWeatherList()
    {
        $res = Db::name('ins_county')->select();
        return $res;
    }
}
