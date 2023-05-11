<?php

namespace App\Controller;

use App\Entity\LoanProposal;
use App\Form\LoanProposalFormType;
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
        $loanProposals = $this->loanProposalService->findAll();

        return $this->render('loan_proposal/index.html.twig', [
            'loan_proposals' => $loanProposals,
        ]);
    }

    #[Route('/loan/proposal/store', name: 'app_loan_proposal_store', methods: ['GET', 'POST'])]
    public function store(Request $request): Response
    {
        $loanProposal = new LoanProposal();

        $form = $this->createForm(LoanProposalFormType::class, $loanProposal);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $loanProposal = $form->getData();
            $this->loanProposalService->store($loanProposal);

            return $this->redirectToRoute('app_loan_proposal');
        }

        return $this->render('loan_proposal/new.html.twig', [
            'form' => $form,
        ]);

    }

    #[Route('/loan/proposal/{id}', name: 'app_loan_proposal_delete')]
    public function delete(int $id): Response
    {
        $this->loanProposalService->delete($id);
        return $this->redirectToRoute('app_loan_proposal');
    }
}
