<?php

namespace GaryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/*
 * Ojo voy a usar
 * https://codegeekz.com/15-best-javascript-animation-libraries-for-developers/
 * http://www.createjs.com/tweenjs
 * http://jsanim.com/
 * http://visionmedia.github.io/move.js/
 *
 * */



class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('GaryBundle:Default:index.html.twig');
    }
}
