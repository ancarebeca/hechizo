<?php

namespace Hechizo\CiudadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CiudadBundle:Default:index.html.twig', array('name' => $name));
    }
}
