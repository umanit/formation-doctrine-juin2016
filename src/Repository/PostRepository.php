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

    // Question 13
    public function getFriendsPosts($currentUser)
    {
        return $this
            ->createQueryBuilder('p')
            ->where('p.author = :current_user')
            ->orWhere('p.author IN (:friends)')
            ->orderBy('p.date', 'DESC')
            ->setParameter('current_user', $currentUser)
            ->setParameter('friends', $currentUser->getFriends())
            ->getQuery()
            ->getResult()
        ;
    }
}
