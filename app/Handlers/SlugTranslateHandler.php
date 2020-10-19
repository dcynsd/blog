<?php

namespace App\Handlers;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Overtrue\Pinyin\Pinyin;

class SlugTranslateHandler
{
    const API_URL = 'http://api.fanyi.baidu.com/api/trans/vip/translate?';

    protected $appid;

    protected $key;

    public function __construct()
    {
        $this->appid = config('services.baidu_translate.appid');
        $this->key = config('services.baidu_translate.key');
    }

    public function translate($text)
    {
        return $this->baidu($text) ?: $this->pinyin($text);
    }

    public function baidu($text)
    {
        if (empty($this->appid) || empty($this->key)) {
            return false;
        }

        $salt = time();
        $sign = md5($this->appid . $text . $salt . $this->key);

        // 构建请求参数
        $query = http_build_query([
            "q" => $text,
            "from" => "zh",
            "to" => "en",
            "appid" => $this->appid,
            "salt" => $salt,
            "sign" => $sign,
        ]);

        $http = new Client;
        $response = $http->get(self::API_URL . $query);

        $result = json_decode($response->getBody(), true);

        if (! isset($result['trans_result'][0]['dst'])) {
            return false;
        }

        return Str::slug($result['trans_result'][0]['dst']);
    }

    public function pinyin($text)
    {
        return Str::slug(app(Pinyin::class)->permalink($text));
    }
}
