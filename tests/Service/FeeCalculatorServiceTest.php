<?php

namespace App\Tests\Service;

use App\Entity\Loan;
use App\Entity\LoanProposal;
use App\Service\FeeCalculatorService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FeeCalculatorServiceTest extends KernelTestCase
{
    protected function setUp(): void
    {
        $this->feeCalculatorService = new FeeCalculatorService();
    }
    public function testCalculate(): void
    {
        $loan1 = new Loan();
        $loan2 = new Loan();

        $loan1->setAmount(1000);
        $loan2->setAmount(2000);
        $loan1->setFee(50);
        $loan2->setFee(90);

        $loanProposal = new LoanProposal();
        $loanProposal->setAmount(1200);

        $this->assertIsFloat($this->feeCalculatorService->calculate([$loan1, $loan2], $loanProposal));
    }
}
