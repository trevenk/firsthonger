<?php
/**
 * Created by PhpStorm.
 * User: trevenk
 * Date: 10/07/19
 * Time: 22:36
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('Ya esta');
    }

    /**
     * @Route("/ads/{slug}")
     */
    public function showAd($slug)
    {
        return $this->render('ads/rest1.html.twig', [
            'title' => ucwords(str_replace('-',' ', $slug)),
        ]);
    }
}