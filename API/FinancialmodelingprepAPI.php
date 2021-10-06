<?php

namespace Api;

use Api\ProviderInterface;

class FinancialModelinGprepAPI implements ProviderInterface
{

    private $baseUrl = "https://financialmodelingprep.com/api/v3/";
    /**
     * @var Client
     */
    private $client;

    private $apiKey;

    function __construct()
    {
        $this->client = new Client();
    }

    function getCompanyProfile($symbol)
    {
        $url = $this->generateUrl("profile/".$symbol);
        $arr = $this->client->get($url);
        return is_array($arr) ? (count($arr) == 1 ? $arr[0] : false) : false;
    }

    function getCompanyQuote($symbol)
    {
        $url = $this->generateUrl("quote/".$symbol);
        $arr = $this->client->get($url);
        return is_array($arr) ? (count($arr) == 1 ? $arr[0] : false) : false;
    }

    function setApiKey($key)
    {
        $this->apiKey = $key;
    }

    private function generateUrl($method)
    {
        return $this->baseUrl.$method."?apikey=".$this->apiKey;
    }
}