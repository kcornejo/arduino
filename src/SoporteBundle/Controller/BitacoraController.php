<?php

namespace SoporteBundle\Controller;

use DateTime;
use SoporteBundle\Entity\Bitacora;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class BitacoraController extends Controller {

    public function indexAction() {
        return $this->render('SoporteBundle:Bitacora:index.html.twig');
    }

    public function borrarAction() {
        $em = $this->getDoctrine()->getManager();
        $Bitacoras = $em->createQueryBuilder()
                ->select("t")->from("SoporteBundle:Bitacora", "t")
                ->getQuery()
                ->getResult();
        foreach ($Bitacoras as $fila) {
            $em->remove($fila);
            $em->flush();
        }
        die();
    }

    public function guardarAction(Request $request) {
        $temperatura = $request->get('temperatura');
        $humedad = $request->get('humedad');
        $presion = $request->get('presion');
        $luminosidad = $request->get('luminosidad');
        $em = $this->getDoctrine()->getManager();
        $Bitacora = new Bitacora();
        $Bitacora->setFecha_hora(new DateTime());
        $Bitacora->setTemperatura($temperatura);
        $Bitacora->setHumedad($humedad);
        $Bitacora->setLuminosidad($luminosidad);
        $Bitacora->setPresion($presion);
        $em->persist($Bitacora);
        $em->flush();
        die();
    }

    public function ajaxAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $Bitacoras = $em->createQueryBuilder()
                ->select("t")->from("SoporteBundle:Bitacora", "t")
                ->getQuery()
                ->getResult();
        $listado = array();
        foreach ($Bitacoras as $fila) {
            $listado[] = array('temperatura' => $fila->getTemperatura(), 'humedad' => $fila->getHumedad(), 'presion' => $fila->getPresion(), 'luminosidad' => $fila->getLuminosidad(), 'fecha_hora' => $fila->getFecha_hora()->format("d/m/Y H:i:s"));
        }
        return new JsonResponse($listado);
    }

}
