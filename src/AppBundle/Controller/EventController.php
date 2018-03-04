<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Event;
use Doctrine\ORM\Query;

class EventController extends Controller
{
  /**
   * @Rest\View()
   * @Get("/events")
   */
    public function getEventsAction(Request $request)
    {
        $events = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Event')
                ->findBy(array(), array('date' => 'ASC'));
         return $events;
    }

    /**
      * @Rest\View()
      * @Rest\Get("/events/{id}")
      */
     public function getEventAction(Request $request)
     {
         $place = $this->get('doctrine.orm.entity_manager')
                 ->getRepository('AppBundle:Event')
                 ->find($request->get('id'));

         if (empty($place))
         {
             return new JsonResponse(['message' => 'Place not found'], Response::HTTP_NOT_FOUND);
         }

         return $place;
     }

    /**
    * @Rest\View(statusCode=Response::HTTP_CREATED)
    * @Rest\Post("/events")
    */
    public function postEventsAction(Request $request)
    {
      $event = new Event();
      $event->setName($request->get('name'))
          ->setEmail($request->get('email'))
          ->setPrice($request->get('price'));

      $em = $this->get('doctrine.orm.entity_manager');
      $em->persist($event);
      $em->flush();

      return $event;
    }

    /**
      * @Rest\View()
      * @Rest\Get("/eventsbycat/{id}")
      */
     public function getEventsbycatAction(Request $request)
     {
        $place = $this->get('doctrine.orm.entity_manager')
                 ->getRepository('AppBundle:Event')
                 ->findby(['category' => $request->get('id')]);

         if (empty($place)) {
             return new JsonResponse(['message' => 'Place not found'], Response::HTTP_NOT_FOUND);
         }

         return $place;

     }

     /**
       * @Rest\View()
       * @Rest\Get("/eventsbyname/{name}")
       */
      public function getEventsbynameAction(Request $request)
      {

        $place = $this->get('doctrine.orm.entity_manager')->createQuery("select u from AppBundle\Entity\Event u where u.name like '%".$request->get('name')."%'");

        return $place->getResult();
      }
}
