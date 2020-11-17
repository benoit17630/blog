<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    //creation de la page home
    /**
     * @Route("/", name="home")
     */
    public function home():Response{
        return $this->render("index.html.twig");
    }
    //creation des page blog avec un id en wildcard
    /**
     * @Route ("/blog/{id}", name="blog_page")
     * @param $id
     * @return Response
     */
    //creation de la function article
    public function article($id):Response{
        $articles = [
            1 => 'Article 1',
            2 => "Article 2",
            3 => "Article 3",
            4 => 'Article 4',
            5 => "Article 5",
            6 => "Article 6",
        ];
// avec la class Response je peut lier ma metode a une page .twig
        return $this->render("blog.html.twig", array(
            "title"=>$articles[$id]
        ));
    }
    // redirection apres avoir soumit un formulaire
    /**
     * @Route("/form-process", name="form_process")
     */
    public function form(){
        $isformsubmit = true;
        if (!$isformsubmit){
            //si le formulaire n est pas soumis
         return new Response("remplir le formulaire");
        }else{
            //si le formulaire est soumis je me redirige sur la page avec le name = home
           return $this->redirectToRoute("home");
        }
    }
}