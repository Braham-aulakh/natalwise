<?php

namespace App\Services\Gateway\imepay;

use App\Models\Fund;
use Facades\App\Services\BasicService;
use Facades\App\Services\BasicCurl;
use Illuminate\Support\Facades\Auth;

class Payment
{
    public static function prepareData($order, $gateway)
    {
        $MerchantModule = optional($gateway->parameters)->MerchantModule;
        $MerchantCode = optional($gateway->parameters)->MerchantCode;
        $username = optional($gateway->parameters)->username;
        $password = optional($gateway->parameters)->password;
        $url = "https://stg.imepay.com.np:7979/api/Web/GetToken";
        $postParam = array(
            "MerchantCode" => $MerchantCode,
            "Amount" => round($order->final_amount, 2),
            "RefId" => $order->transaction);

        $headers = array(
            'Content-Type: application/json',
            'Module: ' . base64_encode("{$MerchantModule}"),
            'Authorization: Basic ' . base64_encode("{$username}:{$password}")
        );

        $checkResponse = self::curlPostRequestWithHeaders($url, $headers, $postParam);
        $checkResponse = json_decode($checkResponse);


        if ($checkResponse && isset($checkResponse->Message)) {
            $send['error'] = true;
            $send['message'] = "Error:" . @$checkResponse->Message;
            return json_encode($send);
        }
        $order->btc_wallet = @$checkResponse->TokenId;
        $order->save();

        $val['TokenId'] = $checkResponse->TokenId; //'IHzGMwNqGT24KHsD';
        $val['MerchantCode'] = optional($gateway->parameters)->MerchantCode;
        $val['RefId'] = $order->transaction;
        $val['TranAmount'] = round($order->final_amount, 2);
        $val['Method'] = 'GET';
        $val['RespUrl'] = route('ipn', [$gateway->code, $order->transaction]);


        $CancelUrl = route('user.addFund');
        $val['CancelUrl'] = $CancelUrl;
        $send['val'] = $val;

        $send['view'] = 'user.payment.redirect';
        $send['method'] = 'post';
        $send['url'] = 'https://stg.imepay.com.np:7979/WebCheckout/Checkout';
        return json_encode($send);

    }

    public static function ipn($request, $gateway, $order = null, $trx = null, $type = null)
    {

        $imePayRes = $request->data;
        $res = base64_decode($imePayRes);
        $resArr = explode('|', $res);

        $url = "https://stg.imepay.com.np:7979/api/Web/Confirm";

        $MerchantModule = optional($gateway->parameters)->MerchantModule;
        $MerchantCode = optional($gateway->parameters)->MerchantCode;
        $username = optional($gateway->parameters)->username;
        $password = optional($gateway->parameters)->password;

        $postParam = array(
            "MerchantCode" => $MerchantCode,
            "RefId" => $resArr[4],
            "TokenId" => $resArr[6],
            "TransactionId" => $resArr[3],
            "Msisdn" => $resArr[2],
        );

        $headers = array(
            'Content-Type: application/json',
            'Module: ' . base64_encode("{$MerchantModule}"),
            'Authorization: Basic ' . base64_encode("{$username}:{$password}")
        );

        $checkResponse = self::curlPostRequestWithHeadersNew($url, $headers, $postParam);

        $order = Fund::where('transaction', $resArr[4])->orderBy('id', 'DESC')->with(['gateway', 'user'])->first();
        if ($order && $resArr[0] == 0 && $resArr[5] == round($order->final_amount, 2) && $resArr[6] == $order->btc_wallet) {
            BasicService::preparePaymentUpgradation($order);
            $data['status'] = 'success';
            $data['msg'] = 'Transaction was successful.';
            if ($order->type == 'wallet') {
                $data['redirect'] = route('wallet');
            } else {
                $appointment_id = $order->appointment->id;
                $appointment_type = $order->appointment->appointment_type->type;
                if ($order->appointment->doctor_id) {
                    $user_name = $order->appointment->doctor->user_name;
                    $data['redirect'] = '/doctor/profile/' . $user_name . '/book_appointment?type=' . $appointment_type . '&paymentSuccess=true&appointmentId=' . $appointment_id;
                } elseif ($order->appointment->clinic_id) {
                    $user_name = $order->appointment->clinic->user_name;
                    $data['redirect'] = '/clinic/profile/' . $user_name . '/book_appointment?type=' . $appointment_type . '&paymentSuccess=true&appointmentId=' . $appointment_id;
                }
            }
        } else {
            $data['status'] = 'error';
            $data['msg'] = 'Invalid response.';
            $data['redirect'] = route('failed');
        }
        return $data;
    }


    public static function curlPostRequestWithHeaders($url, $headers, $postParam = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postParam));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
