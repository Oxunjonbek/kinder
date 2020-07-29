<?php

function round_for_price_magazin_okr($value)
{

//    $seg1 = (int)($value/10000);
//    $seg2 = $value - $seg1*10000;
//    if($seg2 > 5000){
//        $seg1++;
//        $res = $seg1.'0000';
//    }elseif($seg2 == 0){
//        $res = $value;
//    }else{
//        //case $seg2 <= 5000
//        if($seg1){
//            $res = $seg1.'5000';
//        }else{
//            $res = round($value);
//        }
//    }
//    return $res;

    return round($value, -4);
}

function isRoleAllowed(array $roles)
{
    return in_array(Yii::$app->user->identity->role_id, $roles);
}
