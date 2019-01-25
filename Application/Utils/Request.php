<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 25.01.2019
 * Time: 19:34
 */

namespace Application\Utils;


class Request
{
    public function GetGetValue( $key ){

        //$_GET[ $key ]

        if( isset($_GET[$key]) ){
            return $_GET[$key];
        }//if

        return null;

    }//GetGetValue

}//Request