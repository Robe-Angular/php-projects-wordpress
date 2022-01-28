<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;

use App\Form\AnimalType;

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Email;


class AnimalController extends AbstractController
{
    /**
     * @Route("/animal", name="animal")
     */
    
    
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);
        
        $animales = $animal_repo->findAll();
        
        $animal = $animal_repo->findBy([
           'tipo' => 'Avestruz'
        ],[
            'id' => 'ASC'
        ]);
        //var_dump($animal);
        
        
        //DQL
        $dql ="SELECT a FROM App\Entity\Animal a ORDER BY a.id DESC";
        $query = $em->createQuery($dql);
        $resulset = $query->execute();
        
        
        //SQL
        $conection = $this->getDoctrine()->getConnection();
        $sql = 'SELECT * FROM animales ORDER BY id DESC';
        $prepare = $conection->prepare($sql);
        $prepare->execute();
        $resulset = $prepare->fetchAll();
        //var_dump($resulset);
        
        $animals = $animal_repo->getAnimalsOrderId('DESC');
        var_dump($animals);
        
        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animales' => $animales
        ]);
    }
    
    public function validarEmail($email) {
        $validator = Validation::createValidator();
        $errores = $validator->validate($email, [
            new Email()
        ]);
        if(count($errores) != 0){
            echo "El email no se ha validado Correctamente </br>";
            foreach($errores as $error){
                echo $error->getMessage()."<br>";
            }
        }else{
            echo "El email se ha validado Correctamente";
        }
        
        die();
    }
    
    public function crearAnimal(Request $request) {
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);
                
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($animal);
            $em->flush();
            
            //Session flash
            $session = new Session();
            $session->getFlashBag()->add('message', 'Animal creado Correctamente');
            return $this->redirectToRoute('crear_animal');
        }
        return $this->render('animal/crearAnimal.html.twig',[
            'form' => $form->createView()
        ]);
    }
    
    public function save(Request $request){
        var_dump($request->get('form'));
        die();
        /*
        //Guarda en una tabla de la bd
        
        //Cargar el Entity  Manager
        $entityManager = $this->getDoctrine()->getManager();
        
        //Creo el objeto y le doy valores
        $animal = new Animal();
        $animal->setTipo('Avestruz');
        $animal->setColor('verde');
        $animal->setRaza('Africana');
        
        //Guardar el objeto en Doctrine
        $entityManager->persist($animal);
        
        //Volcar Datos en la tabla de la BD
        $entityManager->flush();
        
        return new Response('El animal guardado tiene el id: '.$animal->getId());
        */
    }
    
    public function animal(Animal $animal) {
        /*
        //Cargar repositorio
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);
        
        //Consulta
        $animal = $animal_repo->find($id);
        */
        //Comprobar si el resultado es correcto
        if(!$animal){
            $message = 'El animal no existe';
        }else{
            $message = 'Tu animal elegido es: '.$animal->getTipo().' - '.$animal->getColor();
        }
        return new Response($message);
    }
    
    public function update($id){
        //Cargar Doctrine
        $doctrine = $this->getDoctrine();
        
        //Entity Manager
        $em = $doctrine->getManager();
        
        //CArgar repo Animal
        $animal_repo = $em->getRepository(Animal::class);
        
        //Find para conseguir el objeto
        $animal = $animal_repo->find($id);
                
        //Comprobar si el objeto llega
        if(!$animal){
            $message = 'El animal no existe en la BD';
        }else{
            //Asignar valores al Objeto
            $animal->setTipo('Perro'.$id);
            $animal->setColor('Rojo');

            //Persistir en doctrine
            $em->persist($animal);

            //Guardar en la BD
            $em->flush();

            $message = 'Has actualizado el animal: '.$animal->getId();
        }
        //Respuesta
        return new Response($message);
    }
    
    public function delete(Animal $animal) {
        $em = $this->getDoctrine()->getManager();
        
        if($animal && is_object($animal)){
            $em->remove($animal);
            $em->flush();
            $message = 'Animal Borrado Correctamente';
            return new Response($message);
        }else{
            $message = 'Animal no encontrado';
        }
        
    }
}
