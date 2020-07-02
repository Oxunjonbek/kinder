<?php

namespace frontend\components;

use yii\helpers\Url;

class LanguageChange{

    public static function createMultipleLanguageReturnUrl($lang = 'uz') {
        if (count($_GET) > 0) {
            $arr = $_GET;
            $arr['language'] = $lang;
        } else{
            $arr = array('language' => $lang);
        }

        $arr = [0=>NULL] + $arr;

        return Url::to($arr);
    }


}