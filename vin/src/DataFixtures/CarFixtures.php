<?php
  
  namespace App\DataFixtures;
  
  use App\Entity\Car;
  use Doctrine\Bundle\FixturesBundle\Fixture;
  use Doctrine\Persistence\ObjectManager;
  
  
  class CarFixtures extends Fixture
  {
    public function load(ObjectManager $manager)
    {
      /**
       * Alfa giulietta
       */
      $car = new Car();
      $car->setEngine('1.6 JTD');
      $car->setHorsePower(105);
      $car->setMake('Alfa Romeo');
      $car->setModel('Giulietta');
      $car->setVin('ZAR94000007032019');
      $manager->persist($car);
      
      /**
       * Fiesta ST
       */
      $car = new Car();
      $car->setEngine('2.0');
      $car->setHorsePower(150);
      $car->setMake('Ford');
      $car->setModel('Fiesta ST150');
      $car->setVin('WF0DXXGAJD7C16951');
      
      $manager->persist($car);
      /**
       * Fiesta ST
       */
      $car = new Car();
      $car->setEngine('2.0');
      $car->setHorsePower(150);
      $car->setMake('Ford');
      $car->setModel('Fiesta ST150');
      $car->setVin('WF0DXXGAJD7C16951');
      
      $manager->persist($car);
      /**
       * Fiesta ST
       */
      $car = new Car();
      $car->setEngine('2.0');
      $car->setHorsePower(150);
      $car->setMake('Ford');
      $car->setModel('Fiesta ST150');
      $car->setVin('WF0DXXGAJD7C16951');
      
      $manager->persist($car);
      /**
       * Fiesta ST
       */
      $car = new Car();
      $car->setEngine('2.0');
      $car->setHorsePower(150);
      $car->setMake('Ford');
      $car->setModel('Fiesta ST150');
      $car->setVin('WF0DXXGAJD7C16951');
      
      $manager->persist($car);
      /**
       * Fiesta ST
       */
      $car = new Car();
      $car->setEngine('2.0');
      $car->setHorsePower(150);
      $car->setMake('Ford');
      $car->setModel('Fiesta ST150');
      $car->setVin('WF0DXXGAJD7C16951');
      
      $manager->persist($car);
      /**
       * Fiesta ST
       */
      $car = new Car();
      $car->setEngine('2.0');
      $car->setHorsePower(150);
      $car->setMake('Ford');
      $car->setModel('Fiesta ST150');
      $car->setVin('WF0DXXGAJD7C16951');
      
      $manager->persist($car);
      
      $manager->flush();
      
    }
  }
