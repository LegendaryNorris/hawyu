<?php

namespace Howard\DailyJokeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/jokes")
     * @Template()
     */
    public function indexAction()
    {
	    $jokes = array(
		    'This is joke 1',
		    'This is joke 2',
		    'This is joke 3'
	    );

        return array('joke' => $jokes[array_rand($jokes)]);
    }
}
