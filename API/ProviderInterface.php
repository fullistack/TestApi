<?php

namespace Api;

interface ProviderInterface
{
    function getCompanyProfile($symbol);

    function getCompanyQuote($symbol);

    function setApiKey($key);
}