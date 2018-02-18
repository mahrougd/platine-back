<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Event;

class EventController extends Controller
{
    /**
     * @Route("/events", name="events_list")
     * @Method({"GET"})
     */
    public function getEventsAction(Request $request)
    {
        $events = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Event')
                ->findAll();

        $formatted = [];
        foreach ($events as $event) {
            $formatted[] = [
               'id'               => $event->getId(),
               'name'             => $event->getName(),
               'category'         => $event->getCategory()->getValue(),
               'date'             => $event->getDate()->format('Y-m-d H:i:s'),
               'price'            => $event->getPrice(),
               'description'      => $event->getDescription(),
               'email'            => $event->getEmail(),
               'location'         => $event->getLocation(),
               'totalplaces'      => $event->getTotalplaces(),
                'availableplaces' => $event->getAvailableplaces(),
            ];
        }

        return new JsonResponse($formatted);
    }

    /**
     * @Route("/events/{event_id}", name="events_one")
     * @Method({"GET"})
     */
    public function getEventAction(Request $request)
    {
        $event = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Event')
                ->find($request->get('event_id'));


        if (empty($event)) {
            return new JsonResponse(['message' => 'Aucun événement trouvée'], Response::HTTP_NOT_FOUND);
        }

        $formatted = [
          'id'               => $event->getId(),
          'name'             => $event->getName(),
          'date'             => $event->getDate(),
          'price'            => $event->getPrice(),
          'description'      => $event->getDescription(),
          'email'            => $event->getEmail(),
          'location'         => $event->getLocation(),
          'totalplaces'      => $event->getTotalplaces(),
           'availableplaces' => $event->getAvailableplaces(),
        ];

        return new JsonResponse($formatted);
    }
}
