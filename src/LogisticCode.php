<?php

namespace Xu42\KuaiDi;

class LogisticCode
{

    /**
     * 由 快递100物流公司编码 获取 快递鸟的物流编码
     *
     * @param $code
     *
     * @return string|null
     */
    public static function getNiao($code)
    {
        $codes = json_decode(Repository::KD100_NIAO, true);
        return self::arrVal($code, $codes);
    }

    /**
     * 由 快递鸟物流编码 获取 快递100的物流编码
     *
     * @param $code
     *
     * @return string|null
     */
    public static function get100($code)
    {
        $codes = json_decode(Repository::NIAO_KD100, true);
        return self::arrVal($code, $codes);
    }


    private static function arrVal($key, $arr)
    {
        if (key_exists($key, $arr)) {
            return $arr[$key];
        } else {
            return null;
        }
    }

}