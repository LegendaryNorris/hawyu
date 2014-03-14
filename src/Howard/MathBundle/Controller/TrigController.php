<?php

namespace Howard\MathBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class TrigController
 * @package Howard\MathBundle\Controller
 * @Route("/trig")
 */
class TrigController extends Controller
{
	/**
	 *
	 * @Route("/circle/circumference/{r}")
	 * @Template("HowardMathBundle:Trig:Circle/circumference.html.twig")
	 *
	 * @param $r
	 *
	 * @return array $data
	 */
	public function circumferenceAction($r)
    {
	    $data = array(
		    'radius'  => $r,
		    'circumference'   => $r * 2 * pi()
	    );
        return $data;
    }

	/**
	 *
	 * @Route("/circle/area/{r}")
	 * @Template("HowardMathBundle:Trig:Circle/area.html.twig")
	 *
	 * @param $r
	 *
	 * @return array $data
	 */
	public function circleAreaAction($r)
    {
	    $data = array(
		    'radius'  => $r,
		    'area'   => $r * $r * pi()
	    );
        return $data;
    }


}
