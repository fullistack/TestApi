<?php

require "./vendor/autoload.php";

$FMG_API = new Api\FinancialModelinGprepAPI();
$FMG_API->setApiKey('333f18efd651405164c325e0e1855c3c');
$company_profile = $FMG_API->getCompanyProfile("FB");
$company_quote = $FMG_API->getCompanyQuote("AAPL");

var_dump($company_profile);
var_dump($company_quote);
