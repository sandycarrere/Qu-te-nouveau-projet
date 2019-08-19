<?php
// src/Controller/Defaultontroller.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    public function index()
    {
         /**
     * @Route("/blog", name="index")
    */
    return $this->render('blog/default.html.twig');
    }
}