<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 25.01.2019
 * Time: 22:19
 */

namespace Application\Utils;


class APIConverter
{

    public $url;
    public $requestHoure;

    public function __construct()
    {
        $this->url = 'https://free.currencyconverterapi.com/api/v6/convert?q=USD_PHP,PHP_USD&compact=ultra';
        $this->requestHoure = 100;
    }//construct


}//APIConverter