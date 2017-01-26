<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Record;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class RecordController extends Controller
{
    /**
     * @Route("/record/create")
     */
    public function createAction()
    {
        $product = new Record();
        $product->setName('Dima');
        $product->setPhone('89216576321');
        $product->setDate(new \DateTime('2016-01-13'));
        $product->setTime(new \DateTime('18:00'));

        $em = $this->getDoctrine()->getManager();

        $em->persist($product);
        $em->flush();

        return new Response('Saved new product with id ' . $product->getId());
    }

    /**
     * @Route("/record/find")
     */
    public function findAction()
    {
        $em = $this->getDoctrine()->getRepository('AppBundle:Record');

        $recordA = $em->find(3);
        $recordB = $em->find(3);



        var_dump($recordA === $recordB);
    }
}