<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    //creation des page blog avec un id en wildcard
    /**
     * @Route ("/blog/{id}", name="article_page")
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
// avec la metode Response je peut lier ma function a une page .twig
        return $this->render("blog.html.twig", array(
            "title"=>$articles[$id]
        ));
    }
}