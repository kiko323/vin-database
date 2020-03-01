<?php
  
  namespace App\Controller;
  
  use App\Entity\Car;
  use App\Form\AddCarType;
  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  use Symfony\Component\Config\Definition\Exception\Exception;
  use Symfony\Component\Routing\Annotation\Route;
  use Symfony\Component\HttpFoundation\Request;
  
  class CarController extends AbstractController
  {
    
    /**
     * @Route("/car/add", name="car_add")
     */
    public function add(Request $request)
    {
      $car = new Car();
  
      $form = $this->createForm(AddCarType::class, $car);
      $form->submit($request->request->get($form->getName()));
      
      if ($form->isSubmitted() && $form->isValid()) {
        try {
          
          $car = $form->getData();
          $em = $this->getDoctrine()->getManager();
          $em->persist($car);
          $em->flush();
          
        } catch (Exception $e) {
          echo $e->getMessage();
        }
        
        return $this->redirectToRoute('index');
      }
      
      return $this->render('car/car_add.html.twig', [
        'form' => $form->createView(),
      ]);
    }
  
    /**
     * @Route("/car/delete/{id}", name="car_delete")
     */
    public function delete($id) {
      $em = $this->getDoctrine()->getManager();
      $carToDelete = $this->getDoctrine()->getRepository(Car::class)->findOneBy(['id' => $id]);
      
      try {
        
        $em->remove($carToDelete);
        $em->flush();
        
      } catch (Exception $e) {
        echo $e->getMessage();
      }
  
      
      return $this->redirectToRoute('index');
    }
  }
