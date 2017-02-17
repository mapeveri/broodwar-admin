<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReparationController extends Controller
{
    /**
     * @Route(path = "/admin/reparation/imprimir", name = "reparation_print")
     */
    public function printAction(Request $request)
    {
        header("Content-type:application/pdf");
        header("Content-Disposition:attachment;filename='reparation.pdf'");

        $em = $this->getDoctrine()->getManager();
        $reparation = $this->getDoctrine()->getRepository('AppBundle:Reparation');

        $id = $request->query->get('id');
        $record = $reparation->find($id);

        return $this->render('reparation/index.html.twig', array(
            'record' => $record,
        ));
    }
}