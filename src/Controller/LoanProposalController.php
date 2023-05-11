<?php

namespace App\Controller;

use App\Entity\LoanProposal;
use App\Service\LoanProposalService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoanProposalController extends AbstractController
{
    public function __construct(private readonly LoanProposalService $loanProposalService){
    }

    #[Route('/loan/proposal', name: 'app_loan_proposal')]
    public function index(): Response
    {
        return $this->render('loan_proposal/index.html.twig', [
            'controller_name' => 'LoanProposalController',
        ]);
    }

    #[Route('/loan/proposal/calculate', name: 'app_loan_calculate', methods: ['POST'])]
    public function store(Request $request): Response
    {
        $loanProposal = new LoanProposal();

        $loans = $this->loanProposalService->store(1000, 24);

        return $this->json($loans);
//        return $this->render('loan/index.html.twig', [
//            'controller_name' => 'LoanController',
//        ]);
    }}
