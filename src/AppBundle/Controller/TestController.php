<?php
namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Prefix;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;

/**
 * @RouteResource("Test")
 * @Prefix("/test")
 *
 * Class TestController
 * @package AppBundle\Controller
 */
class TestController extends FOSRestController{

    /**
     * @Get("")
     * @return View
     */
    public function cgetAction()
    {
        var_dump("deneme");die();
    }

}