<?php

namespace App\Service;


use App\Entity\LoanProposal;
use App\Repository\LoanProposalRepository;
use Doctrine\ORM\EntityManagerInterface;

class LoanProposalService
{
    public function __construct(
        private readonly LoanService $loanService,
        private readonly LoanProposalRepository $loanProposalRepository,
        private readonly FeeCalculatorService $feeCalculatorService,
        private readonly EntityManagerInterface $entityManager
    ){
    }

    public function findAll(): array
    {
        return $this->loanProposalRepository->findAll();
    }

    public function findOne(int $id): LoanProposal
    {
        return $this->loanProposalRepository->find($id);
    }

    public function store(LoanProposal $loanProposal): void
    {
        $loans = $this->loanService->findClosest($loanProposal->getAmount(), $loanProposal->getTerm());
        $fee = $this->feeCalculatorService->calculate($loans, $loanProposal);
        $loanProposal->setFee($fee);
        $this->entityManager->persist($loanProposal);
        $this->entityManager->flush();
    }

    public function delete(int $id)
    {
        $loanProposal = $this->findOne($id);
        $this->entityManager->remove($loanProposal);
        $this->entityManager->flush();
    }
}