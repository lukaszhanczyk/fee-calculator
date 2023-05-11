<?php

namespace App\Controller;

use App\Service\LoanService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

}
