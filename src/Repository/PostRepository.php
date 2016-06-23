<?php

namespace Repository;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{
    public function getSubjectLike($term)
    {
        return $this
            ->createQueryBuilder('p')
            ->where('p.subject LIKE :subject')
            ->orderBy('p.date', 'DESC')
            ->setParameter('subject', '%' .$term. '%')
            ->getQuery()
            ->getResult()
        ;
    }
}
