<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FCCTimestampController extends AbstractController
{
    /**
     * @Route("/timestamp", name="time.doc")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FCCTimestampController.php',
        ]);
    }

    /**
     * @Route("/api/time/{timestr?}", name="timestamp")
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
