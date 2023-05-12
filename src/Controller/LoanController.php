<?php

namespace App\Controller;

use App\Entity\Loan;
use App\Form\LoanFormType;
use App\Service\LoanService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoanController extends AbstractController
{
    public function __construct(private readonly LoanService $loanService){
    }

    #[Route('/loan', name: 'app_loan')]
    public function index(): Response
    {
        $loans = $this->loanService->findAll();

        return $this->render('loan/index.html.twig', [
            'loans' => $loans,
        ]);
    }

    #[Route('/loan/store', name: 'app_loan_store', methods: ['GET', 'POST'])]
    public function store(Request $request): Response
    {
        $loan = new Loan();

        $form = $this->createForm(LoanFormType::class, $loan);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $loan = $form->getData();
            $this->loanService->store($loan);

            return $this->redirectToRoute('app_loan');
        }

        return $this->render('loan/new.html.twig', [
            'form' => $form,
        ]);

    }

    #[Route('/loan/store/{id}', name: 'app_loan_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id): Response
    {
        $loan = $this->loanService->findOne($id);

        $form = $this->createForm(LoanFormType::class, $loan);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $loan = $form->getData();
            $this->loanService->store($loan);

            return $this->redirectToRoute('app_loan');
        }

        return $this->render('loan/new.html.twig', [
            'form' => $form,
        ]);

    }

    #[Route('/loan/delete/{id}', name: 'app_loan_delete')]
    public function delete(int $id): Response
    {
        $this->loanService->delete($id);
        return $this->redirectToRoute('app_loan');
    }

}
