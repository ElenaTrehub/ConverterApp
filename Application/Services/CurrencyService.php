<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 25.01.2019
 * Time: 21:21
 */

namespace Application\Services;


class CurrencyService
{

    public function GetCurrencesAbr(){

        return arrayAbr;

    }//CurrencyService

    public function GetExchangeRates($name){

        $linkStr = link_api.$name.compact;
        try{
            $json = file_get_contents($linkStr);
            $obj = json_decode($json, true);

            return $obj;
        }//try
        catch (\Exception $exception){
            return null;
        }//catch

    }//GetExchangeRates


}//CurrencyService