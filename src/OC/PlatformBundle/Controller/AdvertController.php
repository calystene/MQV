<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function indexAction()
  {
    $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig');
    return new Response($content);
  }

public function viewAction($id)
  {
    // Créons nous-mêmes la réponse en JSON, grâce à la fonction json_encode()
    $response = new Response(json_encode(array('id' => $id)));

    // Ici, nous définissons le Content-type pour dire au navigateur
    // que l'on renvoie du JSON et non du HTML
    $response->headers->set('Content-Type', 'application/json');

    return $response;
  }

  public function viewSlugAction($slug, $year, $_format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$_format."."
        );
    }
}