<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 25.01.2019
 * Time: 21:21
 */

namespace Application\Services;


use Application\Controllers\ApplicationController;

class CurrencyService
{

    public function GetCurrencesAbr(){

        $currences = array("RUB", "PLN", "EUR");
        return $currences;

    }//CurrencyService

    public function GetExchangeRates($name){

        if($_SESSION['countRequest']===0){
            $_SESSION['startTime'] = date("H:i:s");
        }//if

        $_SESSION['countRequest'] +=1;

        if  ( isset ( $_SESSION [ 'startTime' ] ) )  {
            $start  =  strtotime ( $_SESSION [ 'startTime' ] ) ;
            $curr  =  strtotime ( date ( "Ymd h: i: s" ) ) ;
            $sec  =   abs ( $start  -  $curr ) ;

            if  ( $sec  <  3600 && $_SESSION['countRequest'] > ApplicationController::$helpApi->requestHoure )  {
                $data  = -1 ;
            }//if
            else if($sec  >=  3600 ){

            }


        }//if



    }//GetExchangeRates


}//CurrencyService