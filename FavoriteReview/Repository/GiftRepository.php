<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\FavoriteReview\Repository;

use Doctrine\ORM\QueryBuilder;
use Plugin\FavoriteReview\Entity\Gift;
use Eccube\Repository\AbstractRepository;
// use Customize\Entity\FavoriteReview;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * GiftRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GiftRepository extends AbstractRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Gift::class);
    }

    /**
     * @param $id
     *
     * @return QueryBuilder
     */
    public function getQueryBuilderById($id)
    {
        $qb = $this->createQueryBuilder('g')
            ->select('g')
            ->where('g.id = :id')
            ->setParameter('id', $id);

        return $qb;
    }

    /**
     * @return QueryBuilder
     */
    public function getCount()
    {
        $qb = $this->createQueryBuilder('g')
            ->select('COUNT(g.id)');

        return $qb;
    }
}

