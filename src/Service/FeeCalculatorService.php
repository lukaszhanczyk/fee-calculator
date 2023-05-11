<?php

namespace App\Service;


use App\Entity\Loan;
use App\Entity\LoanProposal;
use App\Interface\FeeCalculator;

class FeeCalculatorService implements FeeCalculator
{

    /**
     * @param Loan[] $loans
     * @param LoanProposal $loanProposal
     * @return float The calculated total fee.
     */
    public function calculate(array $loans, LoanProposal $loanProposal): float
    {
        [$firstLoan, $secondLoan] = $loans;

        if (
            $secondLoan->getAmount() - $firstLoan->getAmount() != 0 &&
            $secondLoan->getFee() - $firstLoan->getFee() != 0
        ){
            $a = ($secondLoan->getFee() - $firstLoan->getFee())/($secondLoan->getAmount() - $firstLoan->getAmount());
            return $firstLoan->getFee() + ($a * ($loanProposal->getAmount() - $firstLoan->getAmount()));
        }

        return (float) $firstLoan->getFee();
    }
}