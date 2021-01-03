<?php

namespace App;

class SmsGateWay
{
    public static function sendSms($number=null,$message=null)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk?authorization=bUf9Nw8O4vrqE2PsWu316TdYkKJMtoeXQVhplZDjgi0zLASRn7bXYfBjCHoNAapZLvuUMqt5cgVkPRnE&sender_id=FSTSMS&message=".urlencode($message)."&language=english&route=p&numbers=".urlencode($number),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        echo $response;
        }
    }
}
