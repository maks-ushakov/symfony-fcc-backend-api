<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FCCTimestampController extends AbstractController
{
    /**
     * @Route("/timestamp", name="timestamp.doc")
     */
    public function index()
    {
        return $this->render('timestamp/index.html.twig', [
            'unix' => date('U'),
            'normal'=> date('F d, Y'),
        ]);
    }

    /**
     * @Route("/api/time/{timestr?}", name="timestamp.api")
     */
    public function convert($timestr)
    {
        if (!isset($timestr)) {
            $timestr = 'now';
        }
        $time = strtotime($timestr);

        if (!isset($time) && strtotime(date('d-m-Y H:i:s', $timestr)) == (int) $timestr) {
            $time = (int) $timestr;
        }



        return $this->json([
            'unix' => date('U', $time),
            'natural' => date('F d, Y', $time),
            'alter' => date('d/m/Y H:i:s', $time),
        ]);
    }

}
