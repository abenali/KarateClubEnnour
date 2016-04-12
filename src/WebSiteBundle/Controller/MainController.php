<?php

namespace WebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebSiteBundle::index.html.twig');
    }
}