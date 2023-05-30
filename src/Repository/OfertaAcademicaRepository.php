<?php

namespace App\Repository;

use App\Entity\OfertaAcademica;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OfertaAcademica|null find($id, $lockMode = null, $lockVersion = null)
 * @method OfertaAcademica|null findOneBy(array $criteria, array $orderBy = null)
 * @method OfertaAcademica[]    findAll()
 * @method OfertaAcademica[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OfertaAcademicaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OfertaAcademica::class);
    }

    /**
     * @return array
     */
    public function findOfertasAcademicas(): array
    {
        $entityManager = $this->getEntityManager();

        return $entityManager->createQuery(
            'SELECT e.id, e.name, e.slug, e.image
            FROM App\Entity\OfertaAcademica oa
            ORDER BY oa.name ASC'
        )->getArrayResult();
    }
}
