<?php

namespace PortfolioBundle\Repository;

/**
 * CommentsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentsRepository extends \Doctrine\ORM\EntityRepository
{

//    Count comments by article

    public function findCommentByArticle($article)
    {
        $qb = $this->createQueryBuilder('c')
            ->select('COUNT(c)')
            ->where('c.article= :article')
            ->setParameter('article', $article);
        return $qb->getQuery()->getSingleResult();
    }

    public function findAllby($article)
    {
        $qb = $this->createQueryBuilder('c')
            ->select('c')
            ->where('c.article= :article')
            ->setParameter('article', $article);
        $qb->orderBy('c.id', 'DESC');
        return $qb->getQuery()->getArrayResult();
    }


}
