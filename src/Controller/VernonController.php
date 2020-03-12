<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VernonController extends AbstractController
{
    /**
     * @Route("/vernon", name="vernon")
     */
    public function index()
    {
        return $this->render('vernon/index.html.twig', [
            'controller_name' => 'VernonController',
        ]);
    }
}
