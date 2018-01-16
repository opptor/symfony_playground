<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class LuckyController
 *
 * @package App\Controller
 */
class LuckyController extends Controller {

	/**
	 * @Route("/lucky/number")
	 * @return Response
	 * @throws \LogicException
	 * @throws \InvalidArgumentException
	 * @throws \Exception
	 */
	public function number(): Response {
		$number = random_int(0, 100);

		$this->addFlash(
			'notice',
			'Your changes were saved!'
		);

		return $this->render(
			'lucky/number.html.twig', [
				'number' => $number
			]
		);
	}
}