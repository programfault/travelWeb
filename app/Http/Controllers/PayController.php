<?php

namespace App\Http\Controllers;
use Yansongda\Pay\Pay;
use Illuminate\Http\Request;

class PayController extends Controller
{
//    protected $config = [
//        'app_id' => '2021000118603673',
////        'notify_url' => 'http://8.142.99.139/pay/notify',
//        'notify_url' => 'http://localhost:8000/pay/notify',
////        'return_url' => 'http://8.142.99.139/pay/return',
//        'return_url' => 'http://localhost:8000/pay/return',
//        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAp/hZRJMU1/Qv7QKeY3j4M1bE6vFNksF0RZz6CxWtbOVMzqP3D51u61zW8VeQn0vvHegikO90EZqyHJS1GWoFNaRyyrGX3zNwa+0+x6cF7EJwc4hMrZ6cRZWDGxjfzqeHX7GJDMmLqcDjcjzLsKj6aVk5sgHCanvrvi3u7ajAOpKj0nanVilkCNIOJOQCvcrMgfODY/fQa1BYdxGngeoZc4qd49mq3pQC+KIySppwItGI2EA7JhA3fxIHWaKa2npD4I5Yu4dst97o51sHaJYRIEXBHV+cnlEeYsAfM9XN9+yU0JtlcdzfDvX3ZLdQqEuDefRnjNeVBAjWXReyFBqQZQIDAQAB',
//        // 加密方式： **RSA2**
//        'private_key' => 'MIIEpAIBAAKCAQEAhsmU3e2WuNgo9CXN6pM8i0NGwjDVnBsyKbOK7gWUJRVX7CZEHHDI7lEvbhY/8CgpqmLUWJq00Qz5jMmJQBnKWYcFCKa389YgVthgsS+aDW05+1Pm0//A/4GuX0OLLQ26Rm7EEou2HQnCXB2+dAi74xTrCFAzadDCxiDlM8nZjMpmmzRbX/WU21tw+6vzbdi+TQvFVTaEGXjNu/BbUWhRg7UJFNfv5xGbYFbl42RuzOW0Zb46xlI+is9NBPmMmZpXzqRghLMShnKVjAQrS0veu6fZEe7tr6KfyuafF9le45THRBdRNbKAIRzEDJWoBbs+JmauSaFySxtFB4aFsaXSBQIDAQABAoIBACMIfgL43/YHaQ2cTdssjc38nIWYv8ylXPJt0ixvksPYulOM1qM1xWP8AgHxEolPRxUcPukQvPKhFrO7Jktc6LVAXNSU0Lc17o3kC63CG55lx25FrndnwDgo8rOcEK6TJNltrNTNL3Z4tOXQbVInev5Yz4YHonVcZ2Or5ScCzeLDz1m/+WbDgYegNc+vlSFFqdY2KWPRhP0Y4ANbo9dTVczw4KH1kyFTZIIoaENaNYffLKoJ+t5EImN70x/6meQ1rB0Ze8ej9BBNpKNDKdRC3vMF/Sa+xHgeyf8eWt4xlYRYQwtc19L8gMk5FOC+1e2riv9I1lOpxFb6Xv/PmySm8PkCgYEA1Jrvy93O0pj037l2J78dqTap60illgBAh6YMjAxIZp7uqGeABATDUSsWgxEhe938Y5RInh57WuKSidnwKVNnShUBe5GO8JNF9Z4MOzP4JPfK0AARlWTy6whHTTpAjnpT7eTE3j1fQJqWp4/9yNwBaf+fZbDkGxl5mGteWuQ4++sCgYEAokyA/S1gIl3JdxSAcj+gUINXP1fga4ykjetkzG4bAFINzP3ssJjWXOFoRBssivaJEDyDwWHZtHFJ+oHJbWQ0EhoY064K+pnJoZGx4yzOw1Mxlar6mkjk4EjxtSreOKbYMq3N0UNYB9zw9tt1iTDbg1/cNZ9w530nypMZual5nc8CgYBbK7X5brzqgr0/04Bfuw01K0PiqdyYXrNNeF+ZDwtdNnqRrRCwqHo5rIiS3B3HyIIbEdOyOtAbQV4lz1e14RZCJo/kNZ9ee0lc8tG78aVP9RL774uazRd+wqYQ8BIPB1ZGhfwGcbsPMTu5z329TNsuYXgxW5H2LQ5/1ks4HvZw0QKBgQCXc7bnC8HrMAQB6JLYioFqwLXZOYMGOe+RNDoS/yiZSvjv84E9ZtKbSAlJjOYrI1bSXPZCrrI+zX1QlG7IczqYLdw/JOm/42UiLdiHe1fTND5QQYasFRvoJInSGxfWW/PijwhCoIp0g/wlELSE+p/N39WaAJiWnNdWFaFq/TitRwKBgQDIoaZr5S+akXUERwSJX6c2YfVhcoB5Lk/2xwrk4lEP1xRj0kgLfh6xd9nempQKXX8KftTD6AvRuCP7hQLv8fsylVsmNuWp9/ChkpqjmqmBAya4NlCfcWB0+VhsaR+ye/izrwwCWm4WTq1fbc+NP6hdZZgs5RS9/xe0dIZo8Y+8lA==',
//        'log' => [ // optional
//            'file' => './logs/alipay.log',
//            'level' => 'debug', // 建议生产环境等级调整为 info，开发环境为 debug
//            'type' => 'single', // optional, 可选 daily.
//            'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
//        ],
//        'http' => [ // optional
//            'timeout' => 5.0,
//            'connect_timeout' => 5.0,
//            // 更多配置项请参考 [Guzzle](https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html)
//        ],
//        'mode' => 'dev', // optional,设置此参数，将进入沙箱模式
//    ];

    public function index(Request $request)
    {
        $config = config('alipay.pay1');
        $order = [
            'out_trade_no' => time(),
            'total_amount' => $request->get("total_amount"),
            'subject' => $request->get("subject"),
        ];
        if($this->isMobile()){
            $alipay = Pay::alipay($config)->wap($order);
            return $alipay;
        }else{
            $alipay = Pay::alipay($config)->web($order);
            return $alipay->send();// laravel 框架中请直接 `return $alipay`
        }
    }

    public function return()
    {
        $config = config('alipay.pay1');
        $data = Pay::alipay($config)->verify(); // 是的，验签就这么简单！
        return view("success",["data"=> $data]);

        // 订单号：$data->out_trade_no
        // 支付宝交易号：$data->trade_no
        // 订单总金额：$data->total_amount
    }

    public function notify()
    {
        $config = config('alipay.pay1');
        $alipay = Pay::alipay( $config);
        try{
            $data = $alipay->verify(); // 是的，验签就这么简单！

            // 请自行对 trade_status 进行判断及其它逻辑进行判断，在支付宝的业务通知中，只有交易通知状态为 TRADE_SUCCESS 或 TRADE_FINISHED 时，支付宝才会认定为买家付款成功。
            // 1、商户需要验证该通知数据中的out_trade_no是否为商户系统中创建的订单号；
            // 2、判断total_amount是否确实为该订单的实际金额（即商户订单创建时的金额）；
            // 3、校验通知中的seller_id（或者seller_email) 是否为out_trade_no这笔单据的对应的操作方（有的时候，一个商户可能有多个seller_id/seller_email）；
            // 4、验证app_id是否为该商户本身。
            // 5、其它业务逻辑情况

            Log::debug('Alipay notify', $data->all());
        } catch (\Exception $e) {
            // $e->getMessage();
        }

        return $alipay->success()->send();// laravel 框架中请直接 `return $alipay->success()`
    }

    public function isMobile()
    {
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])) {
            return TRUE;
        }
        // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
        if (isset ($_SERVER['HTTP_VIA'])) {
            return stristr($_SERVER['HTTP_VIA'], "wap") ? TRUE : FALSE;// 找不到为flase,否则为TRUE
        }
        // 判断手机发送的客户端标志,兼容性有待提高
        if (isset ($_SERVER['HTTP_USER_AGENT'])) {
            $clientkeywords = array(
                'mobile',
                'nokia',
                'sony',
                'ericsson',
                'mot',
                'samsung',
                'htc',
                'sgh',
                'lg',
                'sharp',
                'sie-',
                'philips',
                'panasonic',
                'alcatel',
                'lenovo',
                'iphone',
                'ipod',
                'blackberry',
                'meizu',
                'android',
                'netfront',
                'symbian',
                'ucweb',
                'windowsce',
                'palm',
                'operamini',
                'operamobi',
                'openwave',
                'nexusone',
                'cldc',
                'midp',
                'wap'
            );
            // 从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
                return TRUE;
            }
        }
        if (isset ($_SERVER['HTTP_ACCEPT'])) { // 协议法，因为有可能不准确，放到最后判断
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== FALSE) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === FALSE || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
                return TRUE;
            }
        }
        return FALSE;
    }
}
