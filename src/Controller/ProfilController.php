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


    //creation de la page agents
    /**
     * @Route("/agents", name="agents")
     */
    public function agents(){
        $agents = [
            1 => [
                "id" => 1,
                "lastName" => "Robert",
                "firstName" => "David",
                "age" => 30,
                "published" => true
            ],
            2 => [
                "id" => 2,
                "lastName" => "Labaste",
                "firstName" => "Denis",
                "age" => 29,
                "published" => true
            ],
            3 => ["id" => 3,
                "lastName" => "Rozand",
                "firstName" => "Mathieu",
                "age" => 31,
                "published" => false
            ],
            4 => ["id" => 4,
                "lastName" => "Despert",
                "firstName" => "Yoann",
                "age" => 33,
                "published" => true
            ],
            5 => ["id" => 5,
                "lastName" => "Dorignac",
                "firstName" => "Loic",
                "age" => 34,
                "published" => false
            ]
        ];
        return $this->render("agents.html.twig",[
            "agents"=> $agents
        ]);
    }

    //creation de la page agent

    /**
     * @Route ("/agent/{id}", name="agent_show")
     */
    public function agentShow($id){
        $agents2 = [
            1 => [
                "id" => 1,
                "lastName" => "Robert",
                "firstName" => "David",
                "age" => 30,
                "published" => true
            ],
            2 => [
                "id" => 2,
                "lastName" => "Labaste",
                "firstName" => "Denis",
                "age" => 29,
                "published" => true
            ],
            3 => [
                "id" => 3,
                "lastName" => "Rozand",
                "firstName" => "Mathieu",
                "age" => 31,
                "published" => false
            ],
            4 => [
                "id" => 4,
                "lastName" => "Despert",
                "firstName" => "Yoann",
                "age" => 33,
                "published" => true
            ],
            5 => [
                "id" => 5,
                "lastName" => "Dorignac",
                "firstName" => "Loic",
                "age" => 34,
                "published" => false
            ]
        ];

        $agent =$agents2[$id];

        return $this->render("agent.html.twig",[
            'agent'=>$agent
        ]);

    }
}