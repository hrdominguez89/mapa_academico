<?php

namespace App\Controller\Secure;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\OfertaAcademica;
use App\Form\ContenidosMinimosType;
use App\Repository\OfertaAcademicaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/contenidos-minimos")
 */
class ContenidosMinimosController extends AbstractController
{
    /**
     * @Route("/nuevo", name="new_contenidos_minimos")
     */
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $data['title'] = 'Nueva oferta academica';
        $data['breadcrumbs'] = array(
            array('active' => true, 'title' => $data['title'])
        );
        $data['contenido_minimo'] = new OfertaAcademica();
        $form = $this->createForm(ContenidosMinimosType::class, $data['contenido_minimo']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($data['contenido_minimo']);
            $em->flush();
            $this->addFlash(
                'message',
                [
                    "alert-color" => "success",
                    "message" => 'Se registró la oferta académica correctamente.'
                ]
            );
            return $this->redirectToRoute('index_dashboard');
        }

        $data['form'] = $form;
        return $this->renderForm('secure/contenidos_minimos/form.contenidos.minimos.html.twig', $data);
    }

    /**
     * @Route("/editar/{id}", name="edit_contenidos_minimos")
     */
    public function edit($id, Request $request, EntityManagerInterface $em, OfertaAcademicaRepository $ofertaAcademicaRepository): Response
    {
        $data['title'] = 'Editar oferta academica';
        $data['breadcrumbs'] = array(
            array('active' => true, 'title' => $data['title'])
        );
        $data['contenido_minimo'] = $ofertaAcademicaRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(ContenidosMinimosType::class, $data['contenido_minimo']);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($data['contenido_minimo']);
            $em->flush();

            $this->addFlash(
                'message',
                [
                    "alert-color" => "success",
                    "message" => 'Se editó la oferta académica correctamente.'
                ]
            );

            return $this->redirectToRoute('index_dashboard');
        }

        $data['form'] = $form;
        return $this->renderForm('secure/contenidos_minimos/form.contenidos.minimos.html.twig', $data);
    }
}
