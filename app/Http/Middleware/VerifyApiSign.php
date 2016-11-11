<?php

namespace App\Http\Middleware;

use Closure;

/**
 * api接口的签名验证
 * Class VerifyApiSign
 * @package App\Http\Middleware
 */
class VerifyApiSign
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = $request->all();
        if(empty($data['_sign'])){
            return response('Fail: the sign is empty! ', 401);
        }
        $_sign = $data['_sign'];
        unset($data['_sign']);
        ksort($data);
        $arr = [];
        foreach($data as $k => $v) {
            $arr[] = $k .'=' . $v;
        }
        $str =  implode('&', $arr). env('APP_KEY');
        $sign = md5($str);
        if($_sign == $sign) {
            return $next($request);
        }else{
            return response('Fail: the sign is wrong!  the correct sign is: '.$sign.'=md5("'.$str.'")' , 401);
        }

    }
}