<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @Route("/")
     */
    public function number()
    {
        $request = Request::createFromGlobals();
        $uri = $request->getPathInfo();
        $host = $request->headers->get('host');
        $server = $request->server->get('HTTP_HOST');

        $number = mt_rand(0, 100);
        return new Response(
            '<html><body><h1>'. $number .'</h1><h2>URI: ' . $uri .'</h2><h2>host: ' . $host .'</h2><h2>SERVER: ' . $server .'</h2></body></html>'
        );
    }
}
