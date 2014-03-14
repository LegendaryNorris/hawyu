<?php

namespace Howard\MathBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class ArithmeticController
 * @package Howard\MathBundle\Controller
 * @Route("/arithmetic")
 */
class ArithmeticController extends Controller
{
	/**
	 *
	 * @Route("/add/{val1},{val2}")
	 * @Template()
	 *
	 * @param $val1
	 * @param $val2
	 *
	 * @return array $data
	 */
	public function addAction($val1,$val2)
    {
	    $data = array(
		    'val1'  => $val1,
		    'val2'  => $val2,
		    'sum'   => $val1+$val2
	    );
        return $data;
    }

	/**
	 * @Route("/sub/{val1},{val2}")
	 * @Template()
	 *
	 * @param $val1
	 * @param $val2
	 *
	 * @return array $data
	 */
	public function subAction($val1,$val2)
	{
		$data = array(
			'val1'  => $val1,
			'val2'  => $val2,
			'diff'   => $val1-$val2
		);
		return $data;
	}

	/**
	 * @Route("/multiply/{val1},{val2}")
	 * @Template()
	 *
	 * @param $val1
	 * @param $val2
	 *
	 * @return array $data
	 */
	public function multiplyAction($val1,$val2)
	{
		$data = array(
			'val1'  => $val1,
			'val2'  => $val2,
			'product'   => $val1*$val2
		);
		return $data;
	}

	/**
	 * @Route("/divide/{val1},{val2}")
	 * @Template()
	 *
	 * @param $val1
	 * @param $val2
	 *
	 * @return array $data
	 */
	public function divideAction($val1,$val2)
	{
		$data = array(
			'val1'  => $val1,
			'val2'  => $val2,
			'quotient'   => $val1/$val2
		);
		return $data;
	}


}
