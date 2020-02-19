<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CurrentDateControllerr
{
    /**
     * @Route(path="/index", name="currentDate")
     * @return Response
     * @throws
     */
    
    
    public function main(): Response
    {
        $currentDate = new \DateTime();
        return new Response('<html><body>'.$currentDate->format(DATE_ATOM).'</body></html>');
    }
}

