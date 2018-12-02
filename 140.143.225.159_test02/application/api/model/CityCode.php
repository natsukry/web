<?php 
namespace app\api\model;

use think\Model;
use think\Db;

// http://IP/city/北京   根据城市名称获取 citycode（JSON格式）

class CityCode extends Model
{
    public function getCode($county_name = '北京')
    {
        $res = Db::name('ins_county')->where('county_name', $county_name)->value('weather_code');
        return $res;
    }

}