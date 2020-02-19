<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CurrentDateControllerr
{
    /**
     * @Route(path="/index", name="currentDate", methods={"POST"})
     * @return Response
     * @throws
     */
    
    
    public function main(): Response
    {
        $currentDate = new \DateTime();
        
        return $this->getDateResponse('Current date', $currentDate);
    }
    
    /**
     * @Route(path="/index", methods={"GET"})
     * @return Response
     * @throws \Exception
     */
    public function tomorrowDate():Response 
    {
        $tomorrow = new \DateTime();
        $tomorrow->add(new \DateInterval('P1D'));
        return $this->getDateResponse("Tomorrow day", $tomorrow);
    }
    
    public function getDateResponse(string $title, \DateTime $dataTime)
    {
        $format = $dataTime->format(DATE_ATOM);
        $html = <<< EOD
        <html><body>
            <h1>$title</h1>
            <p>$format</p>
        </body></html>
EOD;
        return new Response($html);
    }
    
    
    
}

