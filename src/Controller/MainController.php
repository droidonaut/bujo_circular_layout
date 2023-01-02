<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/index')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('base.html.twig');

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}