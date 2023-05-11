<?php

namespace App\Interface;

use App\Entity\LoanProposal;

interface FeeCalculator
{
    /**
     * @return float The calculated total fee.
     */
    public function calculate(LoanProposal $application): float;
}