<?php

namespace Hechizo\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function ayudaAction()
    {
       return $this->render('OfertaBundle:Default:index.html.twig');
    }
}
