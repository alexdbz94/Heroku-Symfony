<?php

namespace Lyckee\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LyckeeStoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
