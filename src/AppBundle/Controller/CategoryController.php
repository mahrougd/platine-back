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
use AppBundle\Entity\Category;

class CategoryController extends Controller
{
  /**
   * @Rest\View()
   * @Get("/categories")
   */
    public function getCategoriesAction(Request $request)
    {
        $categories = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Category')
                ->findAll();
         return $categories;
    }

    /**
      * @Rest\View()
      * @Rest\Get("/categories/{id}")
      */
     public function getCategoryAction(Request $request)
     {
         $category = $this->get('doctrine.orm.entity_manager')
                 ->getRepository('AppBundle:Category')
                 ->find($request->get('id'));

         if (empty($category)) {
             return new JsonResponse(['message' => '$category not found'], Response::HTTP_NOT_FOUND);
         }

         return $category;
     }

    /**
    * @Rest\View(statusCode=Response::HTTP_CREATED)
    * @Rest\Post("/categories")
    */
    public function postCategoriesAction(Request $request)
    {
      $category = new Category();
      $category->setValue($request->get('value'));

      $em = $this->get('doctrine.orm.entity_manager');
      $em->persist($category);
      $em->flush();

      return $category;
    }

}
