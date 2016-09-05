<?php

namespace magicT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function indexAction()
    {
    	$mega = $this->container->getParameter('magictadmin_showmega');
    	$meertalig = $this->container->getParameter('magictadmin_showmeertalig');
    	$showuser = $this->container->getParameter('magictadmin_showuser');
    	$shownotifications = $this->container->getParameter('magictadmin_shownotifications');
    	$showmessages = $this->container->getParameter('magictadmin_showmessages');
        $showchat = $this->container->getParameter('magictadmin_showchat');
    	$showsearch = $this->container->getParameter('magictadmin_showsearch');
        return $this->render('magicTAdminBundle:admin:index.html.twig', array(
        		'mega' => $mega,
        		'meertalig' => $meertalig,
        		'showuser' => $showuser,
        		'shownotifications' => $shownotifications,
                'showchat' => $showchat,
        		'showsearch' => $showsearch,
        		'showmessages' => $showmessages
        	));


    }
}
