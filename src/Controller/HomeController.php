<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        // return $this->render('home/index.html.twig', [
        //     'controller_name' => 'HomeController',
        //     "user" => [
        //         "nom" => "Bob",
        //         "prenom" => "Patrick",
        //         "avatar" => "https://i.skyrock.net/1024/28511024/pics/2123012031_1.jpg",
        //         // Si l'image avait été sur notre pc il faut donc ecrir le chemin "asset/static/images/500.png", mais pour le placer
        //         // ensuite il faudra donc ecrire {{ absolute_url (asset (user.avatar)) }} pour quand on voudra le placer dans le code html
        //     ]
        // ]);
        return $this->render('offline/signup.html.twig');
    }
}
