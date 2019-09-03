<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HeaderParserController extends AbstractController
{
    /**
     * @Route("/whoami", name="whoami.doc")
     */
    public function index()
    {
        return $this->render('header_parser/index.html.twig', [
            'controller_name' => 'HeaderParserController',
        ]);
    }

    /**
     * @Route("/api/whoami", name="whoami.api")
     */
    public function convert(Request $request)
    {
         $headers = $request->server->getHeaders();

        return $this->json([
            'ipaddress' => $request->getClientIp(),
            'language' => $headers['ACCEPT_LANGUAGE'],
            'software' => $headers['USER_AGENT'],
        ]);
    }
}
