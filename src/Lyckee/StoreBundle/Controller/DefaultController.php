<?php

namespace Lyckee\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        
        $session = $request->getSession();

        // store an attribute for reuse during a later user request
        $session->set('Panier', 'Warhol');

        // get the attribute set by another controller in another request
        $var = $session->get('Panier');
        
        return $this->render('LyckeeStoreBundle:Default:index.html.twig', array('name' => $name, 'Panier'=>$var));
    }
}
