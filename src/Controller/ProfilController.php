<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController

{

    /**
     * @Route ("/skill", name="skill")
     */

    public function profil_skill(){
        $skills=[
            "humour",
            "fille jolie",
            "banane",
            "pomme",
            "un james bond",
            "mais en moin bien"
        ];

        return $this->render("skill.html.twig",[
            "skills"=>$skills
        ]);
    }
}