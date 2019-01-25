<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 25.01.2019
 * Time: 19:42
 */

namespace Application\Controllers;


use Bramus\Router\Router;

class ApplicationController extends BaseController
{

    public function Start(){

        $router = new Router();

        $routes = include_once '../Application/Models/Routes.php';

        $router->setNamespace('Application\\Controllers');

        $router->set404(function (  ){

            try {

                $template = $this->twig->load('ErrorPages/404-not-found.twig');
                echo $template->render( );

            }//try
            catch (\Exception $ex) {

            }//catch

        });

        foreach ($routes as $key => $path ){

            foreach ($path as $subKey => $value){

                $router->$key( $subKey , $value );

            }//foreach

        }//foreach

        $router->run();

    }//Start


}//ApplicationController