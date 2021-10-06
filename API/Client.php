<?php

namespace Api;

class Client
{
    function get($url){
        $channel = curl_init();

        curl_setopt($channel, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($channel, CURLOPT_HEADER, 0);
        curl_setopt($channel, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($channel, CURLOPT_URL, $url);
        curl_setopt($channel, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($channel, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($channel, CURLOPT_TIMEOUT, 0);
        curl_setopt($channel, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($channel, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($channel, CURLOPT_SSL_VERIFYPEER, FALSE);

        $output = curl_exec($channel);

        if (curl_error($channel)) {
            return 'error:' . curl_error($channel);
        } else {
            return json_decode($output,true);
        }
    }
}