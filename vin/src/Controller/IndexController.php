<?php

namespace App\Controller;

use App\Entity\Car;
use App\Form\AddCarType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {
     $cars = $this->getDoctrine()->getRepository(Car::class)->findAll();
     
     $carsPaginated = $paginator->paginate($cars, $request->query->getInt('page', 1), Car::PAGINATED_RESULTS_NUMBER);
      
        return $this->render('index/index.html.twig', [
        'cars' => $carsPaginated,
        ]);
    }
}
