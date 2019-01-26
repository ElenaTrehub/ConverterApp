<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 25.01.2019
 * Time: 20:14
 */

namespace Application\Controllers;


use Application\Services\CurrencyService;

class ConvertController extends BaseController
{

    public function convertAction(){

        $currencyService = new CurrencyService();

        $currences = $currencyService->GetCurrencesAbr();

        $template = $this->twig->load('Currency/currency.twig');

        echo $template->render( array(
            'currences' => $currences
        ) );


    }//convertAction

    public function getSumAction(){

        $name = $this->request->GetGetValue('name');

        $currencyService = new CurrencyService();

        $value = $currencyService->GetExchangeRates($name);

        if($value!=null){
            $this->json( 200, array(
                'rate' => $value,
                'code' => 200
            ) );
        }//if
        else{
            $this->json( 400, array(
                'code' => 400
            ) );
        }//else


    }//getSumAction
}//ConvertController