<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Category;

class EventController extends Controller
{
    /**
     * @Route("/categories", name="categories_list")
     * @Method({"GET"})
     */
    public function getCategoriesAction(Request $request)
    {
        $categories = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Category')
                ->findAll();

        $formatted = [];
        foreach ($categories as $category) {
            $formatted[] = [
               'id'                => $category->getId(),
               'value'             => $category->getValue(),
            ];
        }

        return new JsonResponse($formatted);
    }

    /**
     * @Route("/events/{category_id}", name="categories_one")
     * @Method({"GET"})
     */
    public function getEventAction(Request $request)
    {
        $event = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Category')
                ->find($request->get('category_id'));


        if (empty($event)) {
            return new JsonResponse(['message' => 'Aucune catégorie trouvée'], Response::HTTP_NOT_FOUND);
        }

        $formatted = [
          'id'               => $event->getId(),
          'value'            => $event->getValue(),
        ];

        return new JsonResponse($formatted);
    }
}
