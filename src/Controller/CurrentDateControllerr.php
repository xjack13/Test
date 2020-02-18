<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class CurrentDateControllerr
{
    public function main(): Response
    {
        $currentDate = new \DateTime();
        return new Response('<html><body>'.$currentDate->format(DATE_ATOM).'</body></html>');
    }
}

