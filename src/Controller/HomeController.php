<?php

namespace App\Controller;

use App\Repository\OfertaAcademicaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/home", name="app_home")
     */
    public function index(OfertaAcademicaRepository $ofertaAcademicaRepository): Response
    {
        $data['ofertas_academicas'] = $ofertaAcademicaRepository->findAll();
        $data['title'] = 'Mapa Académico';
        $data['files_js'] = [
            'base/datatableBase.js?v=' . rand(),
        ];
        // $data['files_css'] = [];

        return $this->render('home/index.html.twig', $data);
    }
}
