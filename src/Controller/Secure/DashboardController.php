<?php

namespace App\Controller\Secure;

use App\Repository\OfertaAcademicaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/home")
 */
class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="index_dashboard")
     */
    public function index(OfertaAcademicaRepository $ofertaAcademicaRepository): Response
    {
        $data['ofertas_academicas'] = $ofertaAcademicaRepository->findAll();
        $data['files_js'] = [
            'base/datatableBase.js?v=' . rand(),
        ];
        $data['title'] = 'Mapa académico';
        $data['files_css'] = [
            'sidebars.css?v=' . rand()
        ];
        return $this->render('secure/dashboard/main.index.html.twig', $data);
    }
}
