<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
	public function index()
	{

		return $this->render('pages/home.html.twig');


		/*$number = mt_rand(0,100);

		return $this->render('lucky/number.html.twig',array(
			'number' => $number,
		));*/

		/*return new Response(
			'<html><body>Lucky Number : '.$number.'</body></html>'
		);*/
	}
}