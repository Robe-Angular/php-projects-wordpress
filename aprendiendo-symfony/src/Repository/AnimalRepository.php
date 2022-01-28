<?php
namespace App\Repository;
use App\Entity\Animal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AnimalRepository extends ServiceEntityRepository{
    
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Animal::class);
    }
    
    public function getAnimalsOrderId($order){
        
        //Query Builder
        $qb = $this->createQueryBuilder('a')
            //->andwhere("a.color = :color")
            //->setParameter('color','púrpura')
            ->orderBy('a.id',$order)
            ->getQuery();
        $resulset = $qb->execute();
        $coleccion = array(
            'name' => 'Colección de animales',
            'animales' => $resulset
        );
        
        return $coleccion;
    }
}