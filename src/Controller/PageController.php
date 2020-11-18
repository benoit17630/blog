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

    //creation de la metode blog
    public function blog($id):Response{

        $articles = [
            1 => 'Article 1',
            2 => "Article 2",
            3 => "Article 3",
            4 => 'Article 4',
            5 => "Article 5",
            6 => "Article 6",
        ];
        //ajout de la variable title pour un commit
         $title=$articles[$id];
        // avec la class Response je peut lier ma metode a une page .twig
        return $this->render("blog.html.twig", array(

            "title"=>$title
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

    // je creer une page profile avec la metode profileShow
    /**
     * @Route ("/profile", name="profile")
     */

    public function profileShow(){

// tableau avec un index et plusieur champs
        $profile = [
            "firstname" => "Flantier",
            "name" => "Noel",
            "age" => 40,
            "job" => "secret agent",
            "active" => true
        ];
        //je retourne ma vue en affichant un page twig ou je rentre les variable du tableau
        return $this->render('profile.html.twig',[
            'name'=>$profile['name'],
            'firstname'=>$profile['firstname'],
            'age'=>$profile['age'],
            'job'=>$profile['job'],
            'active'=>$profile["active"]

        ]);
    }
    /**
     * @Route ("/profile2",name="profile2")
     */

    public function profile2(){
        $profile = [
            "firstname" => "Flantier",
            "name" => "Noel",
            "age" => 40,
            "job" => "secret agent",
            "active" => false
        ];
        return $this->render('profile2.html.twig',[
            'profile'=>$profile
        ]);
    }
}