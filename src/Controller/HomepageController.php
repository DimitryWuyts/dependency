<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\SpaceToDash;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        $capitalized = new Capitalize();
        $dashed = new SpaceToDash();

        //if post is empty use empty string.
        // ?? => if else.
        return $this->render('Default/index.html.twig', [
            'capitalized_sentence' => $capitalized->transform($_POST['sentence'] ?? ""),
            'dashed_sentence' => $dashed->transform($_POST['sentence'] ?? "")
        ]);
    }

}
