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
         $event = $this->get('doctrine.orm.entity_manager')
                 ->getRepository('AppBundle:Event')
                 ->find($request->get('id'));

         if (empty($event))
         {
             return new JsonResponse(['message' => 'Aucun événement trouvé'], Response::HTTP_NOT_FOUND);
         }

         return $event;
     }

    /**
    * @Rest\View(statusCode=Response::HTTP_CREATED)
    * @Rest\Post("/events")
    */
    public function postEventsAction(Request $request)
    {
      $event = new Event();

      $category = $this->get('doctrine.orm.entity_manager')
              ->getRepository('AppBundle:Category')
              ->find($request->get('category_id'));

      $date     = $request->get('date');
      $minute		=	substr($date, 14, 2);
      $hour	    =	substr($date, 11, 2);
      $day 		  =	substr($date, 8, 2);
      $month 		=	substr($date, 5, 2);
      $year 		=	substr($date, 0, 4);

      $datetime 	= 	new \DateTime($year.'-'.$month.'-'.$day.' '.$hour.':'.$minute.':00');

      $event->setName($request->get('name'))
          ->setCategory($category)
          ->setDate($datetime)
          ->setPrice($request->get('price'))
          ->setDescription($request->get('description'))
          ->setEmail($request->get('email'))
          ->setLocation($request->get('location'))
          ->setTotalplaces($request->get('totalplaces'));

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
        $eventsbycat = $this->get('doctrine.orm.entity_manager')
                 ->getRepository('AppBundle:Event')
                 ->findby(['category' => $request->get('id')], array('date' => 'ASC'));

         if (empty($eventsbycat)) {
             return new JsonResponse(['message' => 'Aucun événement trouvé'], Response::HTTP_NOT_FOUND);
         }

         return $eventsbycat;

     }

     /**
       * @Rest\View()
       * @Rest\Get("/eventsbyname/{name}")
       */
      public function getEventsbynameAction(Request $request)
      {

        $eventsbyname = $this->get('doctrine.orm.entity_manager')->createQuery("select u from AppBundle\Entity\Event u where u.name like '%".$request->get('name')."%' order by u.date ASC");

        if (empty($eventsbyname)) {
            return new JsonResponse(['message' => 'Aucun événement trouvé'], Response::HTTP_NOT_FOUND);
        }
        return $eventsbyname->getResult();
      }
}
