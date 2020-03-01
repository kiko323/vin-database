<?php

namespace App\Controller;

use App\Entity\Car;
use App\Form\AddCarType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request)
    {
     $cars = $this->getDoctrine()->getRepository(Car::class)->findAll();
      
        return $this->render('index/index.html.twig', [
        'cars' => $cars
        ]);
    }
}
