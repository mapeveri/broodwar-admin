<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ReparationController extends Controller
{
    /**
     * @Route(path = "/admin/reparation/imprimir", name = "reparation_print")
     */
    public function printAction(Request $request)
    {
        $reparation = $this->getDoctrine()->getRepository('AppBundle:Reparation');

        $id = $request->query->get('id');
        $record = $reparation->find($id);

        $html = $this->renderView('reparation/index.html.twig', array(
            'record' => $record,
        ));

        $mpdf = new \mPDF();
        $mpdf->WriteHTML($html);
        return new Response($mpdf->Output('reparation.pdf', 'I'));
    }
}