<?php

namespace App\Form;

use App\Entity\Actividades;
use App\Entity\Areas;
use App\Entity\Campos;
use App\Entity\Carreras;
use App\Entity\OfertaAcademica;
use App\Entity\Unidades;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContenidosMinimosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('actividad', EntityType::class, [
                'class'  => Actividades::class,
                'placeholder' => 'Seleccione una actividad',
                'label' => 'Actividad',
                'choice_label' => 'actividad_curricular',
                'required' => true,
            ])
            ->add('caracter', TextType::class, ['label' => 'Carácter', 'attr' => ['required' => true, 'placeholder' => 'Escriba carácter']])
            ->add('contenidosMinimos', TextareaType::class, ['label' => 'Contenidos mínimos de la actividad curricular', 'attr' => ['rows'=>'7','required' => true, 'placeholder' => 'Escriba los contenidos mínimos de la actividad curricular']])
            ->add('area', EntityType::class, [
                'class'  => Areas::class,
                'placeholder' => 'Seleccione un área',
                'label' => 'Área',
                'choice_label' => 'area',
                'required' => true,
            ])
            ->add('campo', EntityType::class, [
                'class'  => Campos::class,
                'placeholder' => 'Seleccione un campo',
                'label' => 'Campo',
                'choice_label' => 'campo',
                'required' => true,
            ])
            ->add('carrera', EntityType::class, [
                'class'  => Carreras::class,
                'placeholder' => 'Seleccione una carrera',
                'label' => 'Carrera',
                'choice_label' => 'carrera',
                'required' => true,
            ])
            ->add('unidad', EntityType::class, [
                'class'  => Unidades::class,
                'placeholder' => 'Seleccione una unidad',
                'label' => 'Unidad',
                'choice_label' => 'unidad_academica',
                'required' => true,
            ])

            ->add('cargaHoraria',NumberType::class, ['label' => 'Carga horaria', 'attr' => ['required' => true, 'placeholder' => 'Escriba carga horaria']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OfertaAcademica::class,
        ]);
    }
}
