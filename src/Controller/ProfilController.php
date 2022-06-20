<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route(path: '/skill', name: 'skill')]
    public function profil_skill(): Response
    {
        $skills=[
            "humour",
            "fille jolie",
            "banane",
            "pomme",
            "un james bond",
            "mais en moin bien"
        ];
        return $this->render("skill.html.twig", [
            "skills"=>$skills
        ]);
    }


    #[Route(path: '/agents', name: 'agents')]
    public function agents(): Response
    {
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
        return $this->render("agents.html.twig", [
            "agents"=> $agents
        ]);
    }

    //creation de la page agent
    /**
     * @param $id
     * @return Response
     */
    #[Route(path: '/agent/{id}', name: 'agent_show')]
    public function agentShow($id): Response
    {
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
            ],
            6 => [
                "id" => 6,
                "lastName" => "Dorignac",
                "firstName" => "Loic",
                "age" => 34,
                "published" => false
            ]

        ];
        $agent =$agents[$id];
        return $this->render("agent.html.twig", [
            'agents'=>$agents,
            'agent'=>$agent
        ]);
    }
}
