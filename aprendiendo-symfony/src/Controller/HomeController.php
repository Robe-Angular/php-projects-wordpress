<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hola mundo con symfony 5'
        ]);
    }
    
    public function animales($nombre, $apellidos){
        $title = 'Bienvenido a la página de animales';
        $animales = array('perro','gato', 'paloma', 'rata');
        
        $pajaros = array(
            'tipo' => 'palomo',
            'color' => 'gris',
            'edad' => 4,
            'raza' => 'colillano'
        );
        return $this->render('home/animales.html.twig',[
            'title' => $title,
            'name' => $nombre,
            'apellidos' => $apellidos,
            'animales' => $animales,
            'aves' => $pajaros
        ]);
    }
    
    public function redirigir(){
//        return $this->redirectToRoute('animales',[
//            'nombre' => 'juan Pedro',
//            'apellidos' => 'Lopez'
//        ]);
        
        return $this->redirect('https://google.com');
    }
    
}
