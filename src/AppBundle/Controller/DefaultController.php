<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Record;
use AppBundle\Form\RecordCreateType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $record = new Record();
        $form = $this->createForm(RecordCreateType::class, $record)->createView();

        return $this->render('default/index.html.twig', [
            'form' => $form,
        ]);
    }
}
