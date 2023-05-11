<?php

namespace App\Service;


use App\Entity\LoanProposal;
use Doctrine\ORM\EntityManagerInterface;

class LoanProposalService
{
    public function __construct(
        private readonly LoanService $loanService,
        private readonly FeeCalculatorService $feeCalculatorService,
        private readonly EntityManagerInterface $entityManager
    ){
    }

    public function store(LoanProposal $loanProposal): void
    {
        $loans = $this->loanService->findClosest($loanProposal->getAmount(), $loanProposal->getTerm());
        $fee = $this->feeCalculatorService->calculate($loans, $loanProposal);
        $loanProposal->setFee($fee);
        $this->entityManager->persist($loanProposal);
        $this->entityManager->flush();
    }
}