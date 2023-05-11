<?php

namespace App\Service;


use App\Entity\Loan;
use App\Repository\LoanRepository;
use Doctrine\ORM\EntityManagerInterface;

class LoanService
{
    public function __construct(
        private readonly LoanRepository $loanRepository,
        private readonly EntityManagerInterface $entityManager
    ){}

    public function findAll(): array
    {
        return $this->loanRepository->findAll();
    }

    public function findOne(int $id): Loan
    {
        return $this->loanRepository->find($id);
    }

    public function findClosest(float $amount, int $term): array
    {
        $queryBuilder = $this->entityManager->createQueryBuilder();

        $query = $queryBuilder->select('loan')
            ->from(Loan::class, 'loan')
            ->where('loan.amount <= :amount')
            ->andWhere('loan.term = :term')
            ->addOrderBy('loan.amount', 'DESC')
            ->setMaxResults(1)
            ->setParameters([
                'amount' => $amount,
                'term' => $term,
            ])->getQuery();

        $firstValue = $query->getResult();

        $queryBuilder = $this->entityManager->createQueryBuilder();

        $query = $queryBuilder->select('loan')
            ->from(Loan::class, 'loan')
            ->where('loan.amount >= :amount')
            ->andWhere('loan.term = :term')
            ->addOrderBy('loan.amount', 'ASC')
            ->setMaxResults(1)
            ->setParameters([
                'amount' => $amount,
                'term' => $term,
            ])->getQuery();

        $secondValue = $query->getResult();

        return [...$firstValue, ...$secondValue];
    }
}