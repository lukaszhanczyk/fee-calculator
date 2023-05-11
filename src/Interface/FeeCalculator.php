<?php

namespace App\Interface;

use App\Entity\LoanProposal;

interface FeeCalculator
{
    /**
     * @param array $loans
     * @param LoanProposal $loanProposal
     * @return float The calculated total fee.
     */
    public function calculate(array $loans, LoanProposal $loanProposal): float;
}